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
				AND 
					`pagibig_deleted` = 0
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
			$sql = $this->db->query("SELECT * FROM `employee`, `pag_ibig` where `emp_deleted` = 0 AND `pagibig_emp_id` = `emp_id` AND `pagibig_deleted` = 0 ORDER BY `emp_last_name` ASC LIMIT 28 OFFSET ". $this->db->escape($pageNo));
			return $sql->result();
		}

		public function getPaidPagibig($args){
			if(!isset($args['offset'])){
				$args['offset'] = 0;
			}
			$sql = "
			SELECT * 
			FROM `paid_contribution` 
			WHERE `gov_agency` = 'Pag-Ibig'
			AND `year` LIKE '%" .$this->db->escape_str($args['search']). "%'
			ORDER BY ".$this->db->escape_str($args['orderby'])." ". $this->db->escape_str($args['dir'])." 
			LIMIT " .$this->db->escape_str($args['count']). " 
			OFFSET ".$this->db->escape_str($args['offset']);
			return $this->db->query($sql)->result_array();
		}

		public function countPaidPagibig(){
			$sql = "SELECT COUNT(*) AS `count` FROM `paid_contribution` WHERE `gov_agency` = 'Pag-Ibig' ";
			return $this->db->query($sql)->result_array()[0]["count"];
		}

		public function updateNotification(){
			$sql = $this->db->query("
				UPDATE 
					employee 
					SET
					emp_notification = 1
					WHERE 
					emp_deleted = 0" 
				);
			return 1;
		}

		public function getPaidPagibigEmp($args, $id){
			if(!isset($args['offset'])){
				$args['offset'] = 0;
			}
			$sql = "
			SELECT * , (`pagibig_ee_share` + `pagibig_er_share`) AS sum
			FROM `paid_contribution` , `employee`, `pag_ibig`
			WHERE `gov_agency` = 'Pag-Ibig' 
			AND `emp_id` = ".$this->db->escape($id)." 
			AND `emp_id` = `pagibig_emp_id` 
			AND `year` LIKE '%" .$this->db->escape_str($args['search']). "%'
			ORDER BY ".$this->db->escape_str($args['orderby'])." ". $this->db->escape_str($args['dir'])." 
			LIMIT " .$this->db->escape_str($args['count']). " 
			OFFSET ".$this->db->escape_str($args['offset']);
			return $this->db->query($sql)->result_array();
		}
	}
?>