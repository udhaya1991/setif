<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() { 
        parent::__construct(); 
        $this->load->helper('url');
    }
	public function index()
	{   
            
            $this->load->template('portal/signin_view');
	}
        public function login()
	{       
                $membershipid = $this->input->post('membershipid');
                $password = $this->input->post('password');
                $this->load->model('admin_model');
                $availability = $this->admin_model->checkUser($membershipid,$password);
                if($availability)
                {   
                    $this->session->sess_destroy();
                    $this->session->set_userdata(array('status'=> TRUE));
                    $this->load->template('portal/admin_panel');
                }
                else
                {
                    $data['error']='Invalid Username/Password';
                    $this->load->template('portal/signin_view',$data);
                }
        }
        public function logout()
        {
                $this->session->sess_destroy();
                $this->load->template('portal/signin_view');
        }
        
        /**
         * ######################
         * USER MANAGEMENT
         * ######################
         */
        public function userMgmt()
        {   
            if($this->session->userdata('status') == TRUE)
            {   
                $this->load->template('portal/user_mgmt_view');
            }
            else
            {
                $data['error']='Session Expired So Relogin';
                $this->load->template('portal/signin_view',$data);
            }
            
            
        }
        public function membersList()
        {   
            $membershipid = $_GET['membershipid'];
            $name = $_GET['name'];
            $this->load->model('admin_model');
            $memberlist = $this->admin_model->getMemberList($membershipid,$name);
            echo json_encode($memberlist);
        }
        public function deleteMember()
        {
            $membershipid = $_GET['membershipid'];
            $this->load->model('admin_model');
            $this->admin_model->getDeleteEntry($membershipid);
            return true;
        }
        public function getMember()
        {
            $membershipid = $_GET['membershipid'];
            $this->load->model('admin_model');
            $memberdetails = $this->admin_model->getMember($membershipid);
            echo json_encode($memberdetails);
        }
        public function updateMember()
        {
                $fname = $this->input->post('fname');
                $lname = $this->input->post('lname');
                $sex = $this->input->post('sex');
                $dob = $this->input->post('dob');
                $occupation = $this->input->post('occupation');
                $bloodgroup = $this->input->post('bloodgroup');
                $schemes = $this->input->post('schemes');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $address = $this->input->post('address');
                $id = $this->input->post('membershipid');
                if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dob))
                { $dob = $dob;
                }else{$dob = date('Y-m-d',strtotime(substr($dob, 4, 11)));}
                $member_details = array('fname'=>$fname,'lname'=>$lname,'sex'=>$sex,'occupation'=>$occupation,'bloodgroup'=>$bloodgroup,'dob'=>$dob,
                        'schemes'=>$schemes,'email'=>$email,'phone'=>$phone,'address'=>$address
                        );
                $this->load->model('admin_model');
                $this->admin_model->updateMember($id,$member_details);
                return true;
        }
        /**
         * ###############################
         * Activity Management
         * ###############################
         */
        public function activityMgmt()
        {
            if($this->session->userdata('status') == TRUE)
            {
                $this->load->template('portal/activity_mgmt_view');
            }
            else
            {
                $data['error']='Session Expired So Relogin';
                $this->load->template('portal/signin_view',$data);
            }   
        }
        public function insertNewActivity()
        {
            $activity_heading = $this->input->post('activity_heading');
            $activity_type = $this->input->post('activity_type');
            $activity_date = $this->input->post('activity_date');
            $activity_place = $this->input->post('activity_place');
            $activity_desc = $this->input->post('activity_desc');
            if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$activity_date))
            { $activity_date = $activity_date;
            }else{$activity_date = date('Y-m-d',strtotime(substr($activity_date, 4, 11)));}
            $activity_details = array('activity_heading'=>$activity_heading,'activity_type'=>$activity_type,'activity_date'=>$activity_date,'activity_place'=>$activity_place,
                'activity_desc'=>$activity_desc);
            $this->load->model('activity_model');
            $this->activity_model->insertNewActivity($activity_details);
            return true;
        }
        
}

