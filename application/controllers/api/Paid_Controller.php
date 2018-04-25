<?php 
	class Paid_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Paid_Model');
		}

		public function addContribution(){
			$this->benchmark->mark('start');
			$addPost = $this->input->post();
			$ret['success'] = $this->Paid_Model->addContribution($addPost);
			$this->benchmark->mark('end');
			$ret['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
        	echo json_encode($ret);
		}
		public function getContributions(){
			$this->benchmark->mark('start');
			$data['contributions'] = $this->Paid_Model->getContributions();
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
			echo json_encode($data);
		}
		public function updateNotification(){
			$this->benchmark->mark('start');
			$data['notifications'] = $this->Paid_Model->updateNotification();
			$data['elapsed_time'] = $this->benchmark->elapsed_time('start', 'end');
			header('Content-Type: application/json');
			echo json_encode($data);
		}
	} 
?>