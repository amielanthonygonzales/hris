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
			$data['content'] = $this->load->view('app/content/page-dashboard', $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		function employee(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-employee', $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		function company(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-company', $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		function registerEmployee(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-register', $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>