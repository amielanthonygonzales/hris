<?php 

	class Department_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Department_Model');
		}

		public function addDepartment(){
			$this->benchmark->mark('start');
			$postDepartment = $this->input->post();
			$ret['success'] = $this->Department_Model->addDepartment($postDepartment);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
        	header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function getAllDepartment(){
			$data['query'] = $this->Department_Model->getAllDepartment();
			header('Content-Type: application/json');
      		echo json_encode($data);
		}

		public function deleteDepartment($id){
			$this->benchmark->mark('start');
			$ret['success'] = $this->Department_Model->deleteDepartment($id);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
        	header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function updateDepartment($id){
			$this->benchmark->mark('start');
			$updateDept = $this->input->post();
			$ret['success'] = $this->Department_Model->updateDepartment($id, $updateDept);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
        	header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function dataTableDepartment(){
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
				$args['orderby']	= "dept_name";
			}
			$ret=array();
			$ret['draw'] = $_GET['draw'];
			$ret['data'] = $this->Department_Model->getDepartments($args);
			$ret['recordsTotal'] = $this->Department_Model->countDepartments();
			$ret['recordsFiltered'] = $ret['recordsTotal'];
			header('Content-Type: application/json');
			echo json_encode($ret);
		}

		public function getDepartmentName($id){
			$data['query'] = $this->Department_Model->getDepartmentName($id);
			header('Content-Type: application/json');
      		echo json_encode($data);
		}
	}
?>



