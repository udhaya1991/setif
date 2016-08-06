<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

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
	
	public function greeny()
	{       
                $this->load->model('activity_model');
                $data['activity'] = $this->activity_model->getActivityService('greeny');
		$this->load->template('service/service_greeny_view',$data);
	}
        public function healthy()
	{       
                $this->load->model('activity_model');
                $data['activity'] = $this->activity_model->getActivityService('healthy');
		$this->load->template('service/service_healthy_view',$data);
	}
        public function mighty()
	{       
                $this->load->model('activity_model');
                $data['activity'] = $this->activity_model->getActivityService('mighty');
		$this->load->template('service/service_mighty_view',$data);
	}
}

