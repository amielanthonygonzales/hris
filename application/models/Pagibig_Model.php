<?php

	class Pagibig_Model extends CI_Model{
		public function getCompanyData(){
			$sql = $this->db->query("
				SELECT 
				* 
				FROM 
					`company` 
				WHERE 
					`company_id` = 1
				");
			return $sql->result();
		}

		public function getPaidContribution(){
			$sql = $this->db->query("SELECT * FROM paid_contribution");
			return $sql->result();
		}

		public function getEmployeeData(){
			$sql = $this->db->query("
				SELECT 
				* FROM 
					`employee`, 
					`pag_ibig` 
				WHERE 
					`pagibig_emp_id` = `emp_id` 
				AND 
					`emp_deleted` = 0
				ORDER BY 
					`emp_last_name` ASC
				");
			return $sql->result();
		}

		public function countData(){
			$sql = $this->db->query("SELECT count(*) as cnt FROM `employee` where `emp_deleted` = 0");
			return $sql->result_array()[0]['cnt'];
		}

		public function getAllData($page){
			$pageNo = ($page - 1)*28;
			$sql = $this->db->query("SELECT * FROM `employee`, `pag_ibig` where `emp_deleted` = 0 AND `pagibig_emp_id` = `emp_id` ORDER BY `emp_last_name` ASC LIMIT 28 OFFSET ". $this->db->escape($pageNo));
			return $sql->result();
		}
	}
?>