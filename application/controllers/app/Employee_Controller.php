<?php 

	class Employee_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		public function view($id, $action){
			$data = array("id"=>$id, "action"=>$action);
			$data['content'] = $this->load->view('app/content/page-employee', $data, true);
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

		public function employeeList(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-employee-list', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function employeeEdit($id){
			$data = array("id" => $id);
			$data['content'] = $this->load->view('app/content/page-employee-edit', $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>