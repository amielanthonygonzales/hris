<?php 

	class Employee_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		public function sendEmail(){
			// $data = $_POST;
			// echo $data;
			$password = $this->input->post('password');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			echo $email;
			// $username = "username";
			// $password = "passwordsss";
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => '465',
				'smp_timeout' => '30',
				'smp_mailpath' => '/usr/sbin/sendmail',
				'smtp_user' => 'jrpg99@gmail.com',
				'smtp_pass' => 'pass1020',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'wordwrap' => TRUE
			);
			$this->load->library('email', $config);
			$this->email->from('jrpg99@gmail.com', 'admin');
			$this->email->to('amielanthonygonzales4@gmail.com');
			$this->email->subject('Company Login Credentials');
			$this->email->message("Welcome! <br> Here is your username and password for the company: <br> Username: ".$username."<br>Password: ".$password."<br>Please do change your password immediately for a more secure account");
			$this->email->set_newline("\r\n");

			$result = $this->email->send();
			if(!$result){
				$debugger = $this->email->print_debugger();
				//echo $debugger;
			}
			
		}

		public function getEmployeeProfile(){
			$data['user'] = $_SESSION['user'];
			$this->benchmark->mark('start');
			//$data['query'] = $this->Employee_Model->getAllDepartment();
			/*foreach ($sess as $key => $value) {
				if($key == "emp_id"){
					$id = $value;
				}
			}*/
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($data);
		}

		public function getEmployeeSession(){
			// print_r($_SESSION);
			// exit();
			$this->benchmark->mark('start');
			$data;
			$data['query'] = $this->Employee_Model->checkLogin();
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			$_SESSION['user'] = $data['query'];
			$_SESSION['login'] = true;
			header('Content-Type: application/json');
        	echo json_encode($data);
		}

		public function getAllDepartment(){
			$this->benchmark->mark('start');
			$data['query'] = $this->Employee_Model->getAllDepartment();
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($data);
		}

		public function addEmployee(){
			$this->benchmark->mark('start');
			$postEmployee = $this->input->post();
			$ret['success'] = $this->Employee_Model->addEmployee($postEmployee);
			$ret['success'] = $this->Employee_Model->addEmployeeSSS($postEmployee);
			$ret['success'] = $this->Employee_Model->addEmployeePagibig($postEmployee);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function getAllEmployee(){
			$this->benchmark->mark('start');
			$data['query'] = $this->Employee_Model->getAllEmployee();
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($data);
		}

		public function getEmployee($id){
			$this->benchmark->mark('start');
			$data['query'] = $this->Employee_Model->getEmployee($id);
			$data['departmentQuery'] = $this->Employee_Model->getAllDepartment();
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($data);
		}

		public function updateEmployeeInfo($id){
			$this->benchmark->mark('start');
			$updatePost = $this->input->post();
			$ret['success'] = $this->Employee_Model->updateEmployeeInfo($id, $updatePost);
			$ret['success'] = $this->Employee_Model->updateSSSInfo($id, $updatePost);
			$ret['success'] = $this->Employee_Model->updatePagibigInfo($id, $updatePost);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);

		}

		public function deleteEmployeeInfo($id){
			$this->benchmark->mark('start');
			$ret['success'] = $this->Employee_Model->deleteEmployeeInfo($id);
			$ret['success'] = $this->Employee_Model->deleteEmployeeSSS($id);
			$ret['success'] = $this->Employee_Model->deleteEmployeePagibig($id);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function dataTable(){
			//$columns[0] = '';
			$columns[0] = 'emp_id'; 
			$columns[1] = 'emp_last_name';
			$columns[2] = 'emp_first_name';
			$args = array(
	            "count" => $_GET['length'],
	            "offset" =>  $_GET['start'],
	            "search" =>  $_GET['search']['value'],
	            "orderby" => $columns[$_GET['order'][0]['column']],
	            "dir" => $_GET['order'][0]['dir']
       		 );
			if($args['dir'] == ""){
				$args['dir']	= "desc";
			}
			if($args['orderby'] == ""){
				$args['orderby']	= "emp_id";
			}
			$ret=array();
			$ret['draw'] = $_GET['draw'];
			$ret['data'] = $this->Employee_Model->getEmployees($args);
			$ret['recordsTotal'] = $this->Employee_Model->countEmployees();
			$ret['recordsFiltered'] = $ret['recordsTotal'];
			header('Content-Type: application/json');
			echo json_encode($ret);
		}

		public function editEmployeeInfo($id){
			$this->benchmark->mark('start');
			$editPost = $this->input->post();
			$ret['success'] = $this->Employee_Model->editEmployeeInfo($id, $editPost);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);

		}
	}
?>