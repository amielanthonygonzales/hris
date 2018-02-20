<?php 

	class RegisterEmp_Controller extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		function index(){
			$this->load->view('hris_views/index');
		}

		function registerEmp(){
			$this->load->view('hris_views/registerEmp');
		}

		function add(){
			if($this->input->method() === 'post' && $_POST != ""){
				$data = array(
					'firstName' => $this->input->post('fname'),
					'middleName' => $this->input->post('mname'),
					'lastName' => $this->input->post('lname'),
					'extName' => $this->input->post('extname'),
					'birthday' => $this->input->post('bday'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'position' => "employee"
				);
				
				$this->Employee_Model->add($data);
			}
			redirect(base_url('registerEmp'));

		}
	}
?>