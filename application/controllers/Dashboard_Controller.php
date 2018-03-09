<?php 

	class Dashboard_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		function dashboard(){
			$this->load->view('hris_views/dashboard');
		}
		function dashboard2(){
			$data = array();
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>