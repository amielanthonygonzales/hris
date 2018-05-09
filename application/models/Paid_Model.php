<?php

	class Paid_Model extends CI_Model{
		public function addContribution($addPost){
			$sql = $this->db->query("
				INSERT INTO 
					`paid_contribution` 
						(
							`month`, 
							`year`, 
							`amount`, 
							`gov_agency`,
							`paid_employee`
						) 
				VALUES 
					(
						".$this->db->escape($addPost['month']).", 
						".$this->db->escape($addPost['year']).", 
						".$this->db->escape($addPost['amount']).", 
						".$this->db->escape($addPost['gov_agency']).", 
						".$this->db->escape($addPost['paid_employee'])."
					)"
				);
			return 1;
		}
		
		public function getContributions(){
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
				AND
					(LENGTH(`pagibig_no`) = 14 OR LENGTH(`pagibig_mid_no`) = 14)
				ORDER BY 
					`emp_last_name` ASC
				");
			return $sql->result();
		}

		public function getSSSContributions(){
			$sql = $this->db->query("
				SELECT 
				* FROM 
					`employee`, 
					`sss` 
				WHERE 
					`sss_emp_id`  = `emp_id`
				AND 
					`emp_deleted` = 0 
				AND 
					`sss_deleted` = 0
				ORDER BY 
					`emp_last_name` ASC
				");
			return $sql->result();
		}

		public function getSSSByYear($year){
			$sql = $this->db->query("
				SELECT 
				* 
				FROM 
					`paid_contribution` 
				WHERE 
					`gov_agency` = 'SSS' 
				AND 
					`year` = " .$this->db->escape($year) . " 
				ORDER BY `month` ASC
				");
			return $sql->result();
		}

		public function getPagibigByYear($year){
			$sql = $this->db->query("
				SELECT 
				* 
				FROM 
					`paid_contribution` 
				WHERE 
					`gov_agency` = 'Pag-Ibig' 
				AND 
					`year` = " .$this->db->escape($year) . " 
				ORDER BY `month` ASC
				");
			return $sql->result();
		}

		public function getPaidYearSSS(){
			$sql = $this->db->query("SELECT `year` FROM `paid_contribution` WHERE `gov_agency` = 'SSS' GROUP BY `year`");
			return $sql->result();
		}

		public function getPaidYearPagibig(){
			$sql = $this->db->query("SELECT `year` FROM `paid_contribution` WHERE `gov_agency` = 'Pag-Ibig' GROUP BY `year`");
			return $sql->result();
		}
	}
?>