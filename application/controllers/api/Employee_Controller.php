<?php 

	class Employee_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		public function getAllDepartment(){
			$data['query'] = $this->Employee_Model->getAllDepartment();
			header('Content-Type: application/json');
      		echo json_encode($data);
		}
	}
?>