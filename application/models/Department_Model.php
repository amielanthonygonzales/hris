<?php
	class Department_Model extends CI_Model{
		function addDepartment($postDepartment){
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

		function getAllDepartment(){
			$sql = $this->db->query("SELECT * FROM department WHERE dept_deleted = 0");
			return $sql->result();
		}
	}
?>