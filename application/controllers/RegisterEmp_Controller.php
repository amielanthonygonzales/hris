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
			$data['query']=$this->Employee_Model->getName();
			$this->load->view('hris_views/registerEmp', $data);
		}

		function getName(){
			$data['query']=$this->Employee_Model->getName();
			header('Content-Type: application/json');
      		echo json_encode($data);
		}

		function add(){
			if($this->input->method() === 'post' && $_POST != ""){

				$dataName = array(
					'firstName' => $this->input->post('fname'),
					'middleName' => $this->input->post('mname'),
					'lastName' => $this->input->post('lname'),
					'extName' => $this->input->post('extname')
				);

				$dataName = json_encode($dataName);

				$name = array('information' => $dataName);

				$data = array(
					'firstName' => $this->input->post('fname'),
					'middleName' => $this->input->post('mname'),
					'lastName' => $this->input->post('lname'),
					'extName' => $this->input->post('extname'),
					'birthday' => $this->input->post('bday'),
					'email' => $this->input->post('email'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'position' => "employee"
				);
				
				$this->Employee_Model->add($data, $name);
			}
			//redirect(base_url('registerEmp'));

		}
	}
?>