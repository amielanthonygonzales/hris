<?php 

	class Employee_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
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
			$args = array(
	            "count" => $_GET['length'],
	            "offset" =>  $_GET['start'],
	            "search" =>  $_GET['search']['value']
       		 );
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