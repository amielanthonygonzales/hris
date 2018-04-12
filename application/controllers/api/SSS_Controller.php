<?php 
	class SSS_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('SSS_Model');
		}

		public function getData(){
			$this->benchmark->mark('start');
			$ret['company'] = $this->SSS_Model->getCompanyData();
			$ret['employee'] = $this->SSS_Model->getEmployeeData();
			$ret['countData'] = $this->SSS_Model->countData();
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function getDataPerPage($page){
			$this->benchmark->mark('start');
			$data['page'] = $page;
			$data['employee'] = $this->SSS_Model->getAllData($page);
			$data['company'] = $this->SSS_Model->getCompanyData();
			$data['allEmployee'] = $this->SSS_Model->getEmployeeData();
			$data['count'] = $this->SSS_Model->countData();
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
      		echo json_encode($data);
		}
	}
 ?>