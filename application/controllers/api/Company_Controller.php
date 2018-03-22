<?php 

	class Company_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Company_Model');
		}

		public function addCompany(){
			$this->benchmark->mark('start');
			$postCompany = $this->input->post();
			$ret['success'] = $this->Company_Model->addCompany($postCompany);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function getAllCompanyInfo(){
			$this->benchmark->mark('start');
			$data['query'] = $this->Company_Model->getAllCompanyInfo();
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($data);
		}
	}
?>