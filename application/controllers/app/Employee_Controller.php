<?php 

	class Employee_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		public function view($action,$id){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array("id"=>$id, "action"=>$action);
			$data['content'] = $this->load->view('app/content/page-employee', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function registerEmployee(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
				foreach ($user as $key => $value) {
					if($key == 'emp_position'){
						if($value == 'employee'){
							redirect(site_url('index'));
						}
						else if($value == 'admin'){
							$data = array();
							$data['content'] = $this->load->view('app/content/page-register', $data, true);
							$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
							$data['callHead'] = $this->load->view("app/nav-head", $data, true);
							$this->load->view('app/header', $data);
							$this->load->view('app/footer', $data);
						}
					}
				}
			}
		}

		public function employeeList(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
				foreach ($user as $key => $value) {
					if($key == 'emp_position'){
						if($value == 'employee'){
							redirect(site_url('index'));
						}
						else if($value == 'admin'){
							$data = array();
							$data['content'] = $this->load->view('app/content/page-employee-list', $data, true);
							$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
							$data['callHead'] = $this->load->view("app/nav-head", $data, true);
							$this->load->view('app/header', $data);
							$this->load->view('app/footer', $data);
						}
					}
				}
			}
		}

		public function employeeEdit($id){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array("id" => $id);
			$data['content'] = $this->load->view('app/content/page-employee-edit', $data, true);
			$data['callHead'] = $this->load->view("app/nav-head-employee", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function passwordEdit($id){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array("id" => $id);
			$data['content'] = $this->load->view('app/content/page-forgot-edit', $data, true);
			$data['callHead'] = $this->load->view("app/nav-head-employee", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function employeeRestore(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			if(isset($_SESSION['user'])){
				$user = $_SESSION['user'];
				foreach ($user as $key => $value) {
					if($key == 'emp_position'){
						if($value == 'employee'){
							redirect(site_url('index'));
						}
						else if($value == 'admin'){
							$data = array();
							$data['content'] = $this->load->view('app/content/page-employee-restore-list', $data, true);
							$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
							$data['callHead'] = $this->load->view("app/nav-head", $data, true);
							$this->load->view('app/header', $data);
							$this->load->view('app/footer', $data);
						}
					}
				}
			}
		}

		public function employeeRestoreData($id){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array("id"=>$id);
			$data['content'] = $this->load->view('app/content/page-employee-restore', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function adminProfile($id){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array("id"=>$id);
			$data['content'] = $this->load->view('app/content/page-admin-profile', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>