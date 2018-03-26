<?php 

	class Dashboard_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Dashboard_Model');
		}

		public function getAllHrInfo(){
			$this->benchmark->mark('start');
			$data['employeeQuery'] = $this->Dashboard_Model->getAllEmployee();
			$data['sssQuery'] = $this->Dashboard_Model->getAllSSS();
			$data['pagibigQuery'] = $this->Dashboard_Model->getAllPagibig();
			$data['companyQuery'] = $this->Dashboard_Model->getCompany();
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($data);
		}

		public function dataTableDashboard(){
			$args = array(
	            "count" => $_GET['length'],
	            "offset" =>  $_GET['start'],
	            "search" =>  $_GET['search']['value']
       		 );
			$ret=array();
			$ret['draw'] = $_GET['draw'];
			$ret['data'] = $this->Employee_Model->getEmployeesInfo($args);
			$ret['recordsTotal'] = $this->Employee_Model->countEmployees();
			$ret['recordsFiltered'] = $ret['recordsTotal'];
			header('Content-Type: application/json');
			echo json_encode($ret);
		}
	}
?>