<?php 

	class Dashboard_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}
		public function dashboard(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			//$_SESSION['rhev'] = "gay";
			// print_r($_SESSION);
			// exit();
			$data['content'] = $this->load->view('app/content/page-dashboard', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		public function department(){
			// print_r($_SESSION);
			// exit();
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-department', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		public function employee(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-employee', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		public function company(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-company', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
		public function registerEmployee(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-register', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function sss(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-sss-contri', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function sssReference(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-sss-reference', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function pagibig(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-pagibig-contri', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function paidContribution(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-paid-contri', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function paidContributionEmp($id){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array("id"=>$id);
			$data['content'] = $this->load->view('app/content/page-paid-contri-employee', $data, true);
			$data['callHead'] = $this->load->view("app/nav-head-employee", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}

		public function paidContributionAdmin($id){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array("id"=>$id);
			$data['content'] = $this->load->view('app/content/page-paid-contri-admin', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head-employee", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>