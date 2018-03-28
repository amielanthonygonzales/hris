<?php 

	class Dashboard_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}
		public function dashboard(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-dashboard', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		public function department(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-department', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		public function employee(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-employee', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		public function company(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-company', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		public function registerEmployee(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-register', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>