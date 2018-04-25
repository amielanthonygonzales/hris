<?php

	class SSS_Model extends CI_Model{
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
					`sss` 
				WHERE 
					`sss_emp_id` = `emp_id` 
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
			$pageNo = ($page - 1)*30;
			$sql = $this->db->query("SELECT * FROM `employee`, `sss` where `emp_deleted` = 0 AND `sss_emp_id` = `emp_id` ORDER BY `emp_last_name` ASC LIMIT 30 OFFSET ". $this->db->escape($pageNo));
			return $sql->result();
		}

		function getEmployee(){
			$sql=$this->db->query("SELECT * FROM `sss` WHERE `active` = 1");
			return $sql->result();
		}

		function sssView($id){
			$sql=$this->db->query("SELECT * FROM `sss` WHERE `id` =".$id);
			return $sql->result();
		}

		function sssUpdate($data, $id){
			$sql=$this->db->query("UPDATE `sss` set `information` = '". $data ."' WHERE `id` = ".$id);
			$arrData['success']=1;
		    $arr['return']=$arrData;
		    return $arr;
		}

		function addReference($postReference){
			if($postReference['ref_range_start'] == ''){
				$returndata['error'] = "Please input a start range!";
			}else if($postReference['ref_range_end'] == ''){
				$returndata['error'] = "Please input an end range!";
			}else if($postReference['ref_monthly_salary'] == ''){
				$returndata['error'] = "Please input a monthly salary!";
			}else if($postReference['ref_er'] == ''){
				$returndata['error'] = "Please input an ER!";
			}else if($postReference['ref_ee'] == ''){
				$returndata['error'] = "Please input an EE!";
			}else if($postReference['ref_ec'] == ''){
				$returndata['error'] = "Please input an EC!";
			}else{
				$sql = $this->db->query("
					INSERT INTO 
						`sss_reference` 
							(
								`ref_range_start`, 
								`ref_range_end`, 
								`ref_monthly_salary`, 
								`ref_er`, 
								`ref_ee`, 
								`ref_ec`
							) 
					VALUES
						(
							".$this->db->escape($postReference['ref_range_start']).", 
							".$this->db->escape($postReference['ref_range_end']).", 
							".$this->db->escape($postReference['ref_monthly_salary']).", 
							".$this->db->escape($postReference['ref_er']).", 
							".$this->db->escape($postReference['ref_ee']).", 
							".$this->db->escape($postReference['ref_ec'])."
						)"
					);
				return $returndata = 1;
			}
			return $returndata;
		}

		function getAllReference(){
			$sql = $this->db->query("SELECT * FROM `sss_reference` WHERE `ref_deleted` = 0");
			return $sql->result();
		}
		public function getSSSRef($args){
			if(!isset($args['offset'])){
				$args['offset'] = 0;
			}
			$sql = "
			SELECT * ,  (`ref_er`+`ref_ee`) as `sum`
			FROM `sss_reference` 
			WHERE `ref_deleted` = 0
			AND `ref_range_start` LIKE '%" .$this->db->escape_str($args['search']). "%'
			ORDER BY ".$this->db->escape_str($args['orderby'])." ASC
			LIMIT " .$this->db->escape_str($args['count']). " 
			OFFSET ".$this->db->escape_str($args['offset']);
			return $this->db->query($sql)->result_array();
		}

		public function countSSSRef(){
			$sql = "SELECT COUNT(*) AS `count` FROM `sss_reference` WHERE `ref_deleted` = 0";
			return $this->db->query($sql)->result_array()[0]["count"];
		}

		public function getRefSSS($id){
			$sql = $this->db->query("SELECT * FROM `sss_reference` WHERE `ref_id` = ".$this->db->escape($id)." AND `ref_deleted` = 0");
			return $sql->result();
		}
		public function updateReference($postReference, $id){
			if($postReference['ref_range_start'] == ''){
				$returndata['error'] = "Please input a start range!";
			}else if($postReference['ref_range_end'] == ''){
				$returndata['error'] = "Please input an end range!";
			}else if($postReference['ref_monthly_salary'] == ''){
				$returndata['error'] = "Please input a monthly salary!";
			}else if($postReference['ref_er'] == ''){
				$returndata['error'] = "Please input an ER!";
			}else if($postReference['ref_ee'] == ''){
				$returndata['error'] = "Please input an EE!";
			}else if($postReference['ref_ec'] == ''){
				$returndata['error'] = "Please input an EC!";
			}else{
				$sql = $this->db->query("
					UPDATE 
						`sss_reference` 
					SET
						`ref_range_start` = ".$this->db->escape($postReference['ref_range_start']).", 
						`ref_range_end` = ".$this->db->escape($postReference['ref_range_end']).", 
						`ref_monthly_salary` = ".$this->db->escape($postReference['ref_monthly_salary']).", 
						`ref_er` = ".$this->db->escape($postReference['ref_er']).", 
						`ref_ee` = ".$this->db->escape($postReference['ref_ee']).", 
						`ref_ec` = ".$this->db->escape($postReference['ref_ec'])."
					WHERE 
						`ref_id` = " .$this->db->escape($id)
					);
				return $returndata = 1;
			}
			return $returndata;
		}

		public function deleteReference($id){
			$sql = $this->db->query("UPDATE `sss_reference` set `ref_deleted` = 1 WHERE `ref_id` = ".$this->db->escape($id));
			return 1;
		}

		public function getPaidSSS($args){
			if(!isset($args['offset'])){
				$args['offset'] = 0;
			}
			$sql = "
			SELECT * 
			FROM `paid_contribution` 
			WHERE `gov_agency` = 'SSS'
			AND `year` LIKE '%" .$this->db->escape_str($args['search']). "%'
			ORDER BY ".$this->db->escape_str($args['orderby'])." ". $this->db->escape_str($args['dir'])." 
			LIMIT " .$this->db->escape_str($args['count']). " 
			OFFSET ".$this->db->escape_str($args['offset']);
			return $this->db->query($sql)->result_array();
		}

		public function countPaidSSS(){
			$sql = "SELECT COUNT(*) AS `count` FROM `paid_contribution` WHERE `gov_agency` = 'SSS' ";
			return $this->db->query($sql)->result_array()[0]["count"];
		}
	}
?>