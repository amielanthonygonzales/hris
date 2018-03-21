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
	}
?>



