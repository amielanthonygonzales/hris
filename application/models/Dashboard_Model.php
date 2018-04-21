<?php
	class Dashboard_Model extends CI_Model{

		public function getAllEmployee(){
			$sqlEmployee = $this->db->query("SELECT * FROM employee WHERE emp_deleted = 0");
			return $sqlEmployee->result();
		}

		public function getAllSSS(){
			$sqlSSS = $this->db->query("SELECT * FROM sss WHERE sss_deleted = 0");
			return $sqlSSS->result();
		}

		public function getAllPagibig(){
			$sqlPagibig = $this->db->query("SELECT * FROM pag_ibig WHERE pagibig_deleted = 0");
			return $sqlPagibig->result();
		}

		public function getCompany(){
			$sqlCompany = $this->db->query("SELECT * FROM company WHERE company_id = 1");
			return $sqlCompany->result();
		}

		public function getPaidContri(){
			$sqlPaid = $this->db->query("SELECT * FROM paid_contribution ORDER BY month");
			return $sqlPaid->result();
		}

		public function getEmployeesInfo($args){
			if(!isset($args['offset'])){
				$args['offset'] = 0;
			}
			$sql = "
			SELECT * 
			FROM `employee` 
			WHERE `emp_deleted` = 0 
			LIMIT " .$this->db->escape_str($args['count']). " 
			OFFSET ".$this->db->escape_str($args['offset']);
			return $this->db->query($sql)->result_array();
		}

		public function countEmployees(){
			$sql = "SELECT COUNT(*) AS `count` FROM `employee` WHERE `emp_deleted` = 0";
			return $this->db->query($sql)->result_array()[0]["count"];
		}
	}
?>