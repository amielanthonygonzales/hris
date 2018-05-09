<?php 

	class Department_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Department_Model');
		}

		public function view(){
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
							$data['content'] = $this->load->view('app/content/page-department', $data, true);
							$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
							$data['callHead'] = $this->load->view("app/nav-head", $data, true);
							$this->load->view('app/header', $data);
							$this->load->view('app/footer', $data);
						}
					}
				}
			}
		}
	}
?>



