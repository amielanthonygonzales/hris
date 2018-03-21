<?php 

	class Department_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Department_Model');
		}

		public function view(){
			$data = array();
			$data['content'] = $this->load->view('app/content/page-department', $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>



