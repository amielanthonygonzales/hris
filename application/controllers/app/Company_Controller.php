<?php 

	class Company_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		public function view(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-company', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>