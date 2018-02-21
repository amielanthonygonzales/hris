<?php 

	class RegisterCompany_Controller extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('Company_Model');
		}

		function index(){
			$this->load->view('hris_views/index');
		}

		function registerCompany(){
			$this->load->view('hris_views/registerCompany');
		}

		function add(){
			if($this->input->method() === 'post' && $_POST != ""){
				$address = array(
					'rm' => $this->input->post('rm'),
					'house' => $this->input->post('house'),
					'street' => $this->input->post('street'),
					'subdivision' => $this->input->post('subdivision'),
					'brgy' => $this->input->post('brgy'),
					'city' => $this->input->post('city'),
					'province' => $this->input->post('province'),
					'zipcode' => $this->input->post('zipcode')
				);
				$address = json_encode($address);
				$data = array(
					'sssid' => $this->input->post('sssnum'),
					'pagibigid' => $this->input->post('pagibignum'),
					'name' => $this->input->post('employername'),
					'address' => $address,
					'taxid' => $this->input->post('taxnum'),
					'email' => $this->input->post('email'),
					'telnum' => $this->input->post('telnum'),
					'cellnum' => $this->input->post('cellnum')
				);
				
				$this->Company_Model->add($data);
			}
			redirect(base_url('registerCompany'));

		}
	}
?>