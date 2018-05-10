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

		public function sendSSS(){
			$data = $this->input->post();	
			$now = new \DateTime('now');
			$month = $now->format('F');
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => '465',
				'smp_timeout' => '30',
				'smp_mailpath' => '/usr/sbin/sendmail',
				'smtp_user' => 'paulo@nmgresources.ph',
				'smtp_pass' => 'milky Way01',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'wordwrap' => TRUE
			);
			$email;
			$ec;
			$ee;
			$er;
			$total;
			$i=0;
			foreach ($data as $key => $value) {
				foreach ($value as $k => $v) {
					foreach ($v as $index => $result) {
						if($i%5 == 0){
							$email = $result;
						}
						else if($i%5 == 1){
							$ec = $result;
						}
						else if($i%5 == 2){
							$ee = $result;
						}
						else if($i%5 == 3){
							$er = $result;
						}
						else if($i%5 == 4){
							$total = $result;
						}
						$i++;
					}
					$this->load->library('email', $config);
					$this->email->from('paulo@nmgresources.ph', 'admin');
					$this->email->to($email);
					$this->email->subject('SSS Contribution Payment');
					$this->email->message("Good day!<br>Your SSS Contribution for this month of ".$month." has been paid. <br>Here are the breakdown of your contribution for this month: <br>EC Contribution: ".$ec."<br>EE Contribution: ".$ee."<br>ER Contribution: ".$er."<br>Total: ".$total);
					$this->email->set_newline("\r\n");

					$result = $this->email->send();
					if(!$result){
						$debugger = $this->email->print_debugger();
						//echo $debugger;
					}
					if($result){
						echo $result;
					}
					$this->email->clear();
				}
			}
			$this->updateNotification();
		}

		public function updateNotification(){
			$this->benchmark->mark('start');
			$data['notifications'] = $this->SSS_Model->updateNotification();
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

		public function dataTablePaidSSS(){
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
			$ret['data'] = $this->SSS_Model->getPaidSSS($args);
			$ret['recordsTotal'] = $this->SSS_Model->countPaidSSS();
			$ret['recordsFiltered'] = $ret['recordsTotal'];
			header('Content-Type: application/json');
			echo json_encode($ret);
		}

		public function dataTablePaidSSSEmp($id){
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
			$ret['data'] = $this->SSS_Model->getPaidSSSEmp($args, $id);
			$ret['recordsTotal'] = $this->SSS_Model->countPaidSSS();
			$ret['recordsFiltered'] = $ret['recordsTotal'];
			header('Content-Type: application/json');
			echo json_encode($ret);
		}
	}
 ?>