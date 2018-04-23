<?php 

	class SSS_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('SSS_Model');
		}

		public function viewAddReference(){
			if(!isset($_SESSION['user'])){
				redirect(site_url('index'));
			}
			$data = array();
			$data['content'] = $this->load->view('app/content/page-sss-reference-edit', $data, true);
			$data['call'] = $this->load->view("app/nav-leftsidebar", $data, true);
			$data['callHead'] = $this->load->view("app/nav-head", $data, true);
			$this->load->view('app/header', $data);
			$this->load->view('app/footer', $data);
		}
	}
?>



