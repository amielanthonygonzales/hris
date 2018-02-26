<?php 

	class RegisterEmp_Controller extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		function index(){
			$this->load->view('hris_views/index');
		}

		function employeeTable(){
			$data['query']=$this->Employee_Model->getName();
			$this->load->view('hris_views/employee/employeeTable',$data);
		}
		function viewEmployee($id){
			$data['query']=$this->Employee_Model->viewEmployee($id);
			$this->load->view('hris_views/employee/viewEmployee',$data);
		}

		function registerEmp(){
			$data['query']=$this->Employee_Model->getName();
			$this->load->view('hris_views/employee/registerEmp', $data);
		}

		function changeStatus($id){
			$this->Employee_Model->changeStatus($id);
		}

		function getName(){
			$data['query']=$this->Employee_Model->getName();
			header('Content-Type: application/json');
      		echo json_encode($data);
		}

		function add(){
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
			redirect(base_url('registerEmp'));

		}
	}
?>