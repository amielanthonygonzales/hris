<?php

	class SSS_Controller extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('SSS_Model');
		}

		function index(){
			$data['query']=$this->SSS_Model->getEmployee();
			$this->load->view('hris_views/sss/sssTable',$data);
		}

		function getEmployee(){
			$data['query']=$this->SSS_Model->getEmployee();
			header('Content-Type: application/json');
      		echo json_encode($data);
		}

		function sssView($id){
			$data['query']=$this->SSS_Model->sssView($id);
			$this->load->view('hris_views/sss/ssView',$data);
		}

		function sssEdit($id){
			$data['query']=$this->SSS_Model->sssView($id);
			$this->load->view('hris_views/sss/sssEdit',$data);
		}

		function getSSInfo($id){
			$data['query']=$this->SSS_Model->sssView($id);
			header('Content-Type: application/json');
      		echo json_encode($data);
		}

		function sssUpdate($id){
			$data=$this->input->post();
		    $data=json_encode($data);//need to encode for us to save it as object
		    $var=$this->SSS_Model->sssUpdate($data,$id);
		    $var = $var['return'];

		    header('Content-Type: application/json');
		    echo json_encode($var);
		}
		
	}
?>