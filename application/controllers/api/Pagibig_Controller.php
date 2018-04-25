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

		public function getDataPerPage($page){
			$this->benchmark->mark('start');
			$data['page'] = $page;
			$data['employee'] = $this->Pagibig_Model->getAllData($page);
			$data['company'] = $this->Pagibig_Model->getCompanyData();
			$data['allEmployee'] = $this->Pagibig_Model->getEmployeeData();
			$data['paid-contribution'] = $this->Pagibig_Model->getPaidContribution();
			$data['count'] = $this->Pagibig_Model->countData();
			$this->benchmark->mark('end');
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
      		echo json_encode($data);
		}

		public function dataTablePaidPagibig(){
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
				$args['orderby']	= "year";
			}
			$ret=array();
			$ret['draw'] = $_GET['draw'];
			$ret['data'] = $this->Pagibig_Model->getPaidPagibig($args);
			$ret['recordsTotal'] = $this->Pagibig_Model->countPaidPagibig();
			$ret['recordsFiltered'] = $ret['recordsTotal'];
			header('Content-Type: application/json');
			echo json_encode($ret);
		}
	}
 ?>