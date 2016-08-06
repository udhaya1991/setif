<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

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
                $this->load->model('member_model');
                $data['members'] = $this->member_model->getMemberAll(5);
                $this->load->template('portal/signup_view',$data);
	}
        public function insertNewMember()
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
                $this->load->model('member_model');
                $dob = date('Y-m-d',strtotime(substr($dob, 4, 11)));
                $availability = $this->member_model->checkMemberAvailability($phone);
                $data  = array();
                if($availability){
                    $data['success'] = false;
                    $data['membershipid'] = $availability;
                }
                else{
                    $password_string = $this->generateRandomString();
                    $password = 'welcome';
                    $final_entry = $this->member_model->getMemberAll(1);
                    $final_membershipid = substr($final_entry[0]['membershipid'],5);
                    $membershipid = sprintf("%'.04d\n", $final_membershipid+1);
                    $member_details = array('fname'=>$fname,'lname'=>$lname,'sex'=>$sex,'occupation'=>$occupation,'bloodgroup'=>$bloodgroup,'dob'=>$dob,
                        'schemes'=>$schemes,'email'=>$email,'phone'=>$phone,'address'=>$address,'password'=>$password,'password_string'=>$password_string,
                        'membershipid'=>(NAME.$membershipid));
                    $this->member_model->insertMember($member_details);
                    $data['success'] = true;
                    $data['membershipid'] = (NAME.$membershipid);
                }
                echo json_encode($data);
        }
        public function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        public function signup()
	{
		$this->load->template('portal/signup_view');
	}
        public function exportMembers()
        {
                $this->load->model('member_model');
                $data = $members = $this->member_model->getMemberAllColumn(1000);
                function cleanData(&$str)
                    {
                      $str = preg_replace("/\t/", "\\t", $str);
                      $str = preg_replace("/\r?\n/", "\\n", $str);
                      if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
                    }

                // filename for download
                $filename = "SETIF_MEMBERS_" . date('Ymd') . ".xls";
                header("Content-Disposition: attachment; filename=\"$filename\"");
                header("Content-Type: application/vnd.ms-excel");

                $flag = false;
                foreach($data as $row) {
                  if(!$flag) {
                    // display field/column names as first row
                    echo implode("\t", array_keys($row)) . "\r\n";
                    $flag = true;
                  }
                  array_walk($row, 'cleanData');
                  echo implode("\t", array_values($row)) . "\r\n";
                }
                exit;
                
        }
        
  
        
        
}

