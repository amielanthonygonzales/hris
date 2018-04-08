<?php 
	class Pagibig_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Pagibig_Model');
		}

		public function getData(){
			$this->benchmark->mark('start');
			$ret['company'] = $this->Pagibig_Model->getCompanyData();
			$ret['employee'] = $this->Pagibig_Model->getEmployeeData();
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}
	}
 ?>