<?php
	class Department_Model extends CI_Model{
		public function addDepartment($postDepartment){
			$sql = $this->db->query('
				INSERT INTO 
				department 
				(
				dept_name
				) 
				VALUES 
				('.
				$this->db->escape($postDepartment['dept_name']).
				');'
			);
	      	return 1;
		}

		public function getAllDepartment(){
			$sql = $this->db->query("SELECT * FROM department WHERE dept_deleted = 0");
			return $sql->result();
		}

		public function deleteDepartment($id){
			$sql = $this->db->query("UPDATE department SET dept_deleted = 1 WHERE dept_Id = " . $this->db->escape($id));
			return 1;
		}

		public function updateDepartment($id, $updateDept){
			$sql = $this->db->query("UPDATE department SET dept_name = " .$this->db->escape($updateDept['dept_name']) ." WHERE dept_Id = " .$this->db->escape($id));
			return 1;
		}

		public function getDepartments($args){
			if(!isset($args['offset'])){
				$args['offset'] = 0;
			}
			$sql = "
			SELECT * 
			FROM `department` 
			WHERE `dept_deleted` = 0
			AND `dept_name` LIKE '%" .$this->db->escape_str($args['search']). "%' 
			LIMIT " .$this->db->escape_str($args['count']). " 
			OFFSET ".$this->db->escape_str($args['offset']);
			return $this->db->query($sql)->result_array();
		}

		public function countDepartments(){
			$sql = "SELECT COUNT(*) AS `count` FROM `department` WHERE `dept_deleted` = 0";
			return $this->db->query($sql)->result_array()[0]["count"];
		}

		public function getDepartmentName($id){
			$sql = $this->db->query('SELECT `dept_name` FROM `department` WHERE `dept_Id` = ' . $this->db->escape($id));
			return $sql->result();
		}
	}
?>