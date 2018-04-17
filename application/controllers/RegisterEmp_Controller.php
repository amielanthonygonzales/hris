<?php 

	class RegisterEmp_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		public function index(){
			// unset($_SESSION['user']);
			// session_destroy();
			// print_r($_SESSION);
			// exit();
			$this->load->view('app/content/index');
		}

		public function logout(){
			unset($_SESSION['user']);
			session_destroy();
			// print_r($_SESSION);
			// exit();
			$this->load->view('app/content/index');
		}

		public function employeeTable(){
			$data['query']=$this->Employee_Model->getName();
			$this->load->view('hris_views/employee/employeeTable',$data);
		}
		public function viewEmployee($id){
			$data['query']=$this->Employee_Model->viewEmployee($id);
			$this->load->view('hris_views/employee/viewEmployee',$data);
		}

		public function registerEmp(){
			$data['query']=$this->Employee_Model->getName();
			$this->load->view('hris_views/employee/registerEmp', $data);
		}

		public function changeStatus($id){
			$this->Employee_Model->changeStatus($id);
			redirect(base_url('employee'));
		}

		public function getName(){
			$data['query']=$this->Employee_Model->getName();
			header('Content-Type: application/json');
      		echo json_encode($data);
		}

		public function add(){
			if($this->input->method() === 'post' && $_POST != ""){

				$dataPagibig = array(
					'midNo' => "",
					'pagibigNo' => "",
					'membershipProgram' => "",
					'firstName' => $this->input->post('fname'),
					'middleName' => $this->input->post('mname'),
					'lastName' => $this->input->post('lname'),
					'extName' => $this->input->post('extname'),
					'periodCov' => "",
					'monthlyCompen' => "",
					'eeShare' => "",
					'erShare' => ""
				);
				$dataSSS = array(
					'sssNo' => "",
					'firstName' => $this->input->post('fname'),
					'middleName' => $this->input->post('mname'),
					'lastName' => $this->input->post('lname'),
					'extName' => $this->input->post('extname'),
					'salary' => "",
					'ssContribution' => "",
					'ecContribution' => ""
				);

				$dataSSS = json_encode($dataSSS);
				$dataPagibig = json_encode($dataPagibig);

				$nameSSS = array(
					'information' => $dataSSS,
					'active' => 1
				);

				$namePagibig = array(
					'information' => $dataPagibig,
					'active' => 1
				);

				$data = array(
					'firstName' => $this->input->post('fname'),
					'middleName' => $this->input->post('mname'),
					'lastName' => $this->input->post('lname'),
					'extName' => $this->input->post('extname'),
					'birthday' => $this->input->post('bday'),
					'email' => $this->input->post('email'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'position' => "employee",
					'active' => 1
				);
				
				$this->Employee_Model->add($data, $nameSSS, $namePagibig);
			}
			redirect(base_url('register-employee'));

		}
	}
?>