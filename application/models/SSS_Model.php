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
	}
?>