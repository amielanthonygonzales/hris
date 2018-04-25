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

		public function sendNotification(){
			$data = $this->input->post();	
			$now = new \DateTime('now');
			$month = $now->format('F');
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_port' => '465',
				'smp_timeout' => '30',
				'smp_mailpath' => '/usr/sbin/sendmail',
				'smtp_user' => 'jrpg99@gmail.com',
				'smtp_pass' => 'pass1020',
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'wordwrap' => TRUE
			);
			$email;
			$eeshare;
			$ershare;
			$total;
			$i=0;
			foreach ($data as $key => $value) {
				foreach ($value as $k => $v) {
					foreach ($v as $index => $result) {
						if($i%4 == 0){
							$email = $result;
						}
						else if($i%4 == 1){
							$eeshare = $result;
						}
						else if($i%4 == 2){
							$ershare = $result;
						}
						else if($i%4 == 3){
							$total = $result;
						}
						$i++;
					}
					$this->load->library('email', $config);
					$this->email->from('jrpg99@gmail.com', 'admin');
					$this->email->to($email);
					$this->email->subject('Pag-IBIG Contribution Payment');
					$this->email->message("Your Pag-IBIG Contribution for this month of ".$month." has been paid. <br>Here are the breakdown of your contribution for this month: <br>EE Share: ".$eeshare."<br>ER Share: ".$ershare."<br>Total: ".$total);
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
			$data['notifications'] = $this->Pagibig_Model->updateNotification();
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