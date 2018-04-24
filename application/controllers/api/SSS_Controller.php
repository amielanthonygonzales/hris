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
			$data['paid-contribution'] = $this->SSS_Model->getPaidContribution();
			$data['count'] = $this->SSS_Model->countData();
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
      		echo json_encode($data);
		}

		public function addReference(){
			$this->benchmark->mark('start');
			$postReference = $this->input->post();
			$ret['success'] = $this->SSS_Model->addReference($postReference);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function getAllReference(){
			$this->benchmark->mark('start');
			$ret['query'] = $this->SSS_Model->getAllReference();
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function datatableSSS(){
			$args = array(
	            "count" => $_GET['length'],
	            "offset" =>  $_GET['start'],
	            "search" =>  $_GET['search']['value'],
	            "orderby" => $columns[$_GET['order'][0]['column']],
	            "dir" => $_GET['order'][0]['dir']
       		);
       		if($args['dir'] == ""){
				$args['dir']	= "asc";
			}
			if($args['orderby'] == ""){
				$args['orderby']	= "ref_range_start";
			}
			$ret=array();
			$ret['draw'] = $_GET['draw'];
			$ret['data'] = $this->SSS_Model->getSSSRef($args);
			$ret['recordsTotal'] = $this->SSS_Model->countSSSRef();
			$ret['recordsFiltered'] = $ret['recordsTotal'];
			header('Content-Type: application/json');
			echo json_encode($ret);
		}

		public function getRefSSS($id){
			$this->benchmark->mark('start');
			$ret['query'] = $this->SSS_Model->getRefSSS($id);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function updateReference($id){
			$this->benchmark->mark('start');
			$postReference = $this->input->post();
			$ret['success'] = $this->SSS_Model->updateReference($postReference, $id);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}

		public function deleteReference($id){
			$this->benchmark->mark('start');
			$ret['success'] = $this->SSS_Model->deleteReference($id);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}
	}
 ?>