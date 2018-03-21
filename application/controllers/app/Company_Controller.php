<?php 

	class Company_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Employee_Model');
		}

		public function view(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-company', $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>