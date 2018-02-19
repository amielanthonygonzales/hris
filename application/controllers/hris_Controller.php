<?php 

	class hris_Controller extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('hris_Model');
		}

		function index(){
			$this->load->view('hris_views/index');
		}

		function registerEmp(){
			$this->load->view('hris_views/registerEmp');
		}
	}
?>