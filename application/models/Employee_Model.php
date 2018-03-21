<?php 
	
	class Employee_Model extends CI_Model{
		function add($data, $nameSSS, $namePagibig){
			$this->db->insert('employee',$data);
			$this->db->insert('pag_ibig',$namePagibig);
			$this->db->insert('sss',$nameSSS);
		}

		function getName(){
			$sql=$this->db->query("SELECT id, firstName, lastName, middleName, extName, birthday, username, active from employee where active = 1 ");
			return $sql->result();
		}

		function viewEmployee($data){
			$sql=$this->db->query("SELECT * from employee where id=".$data);
			return $sql->result();
		}

		function changeStatus($id){
			$this->db->query("UPDATE employee set active = 0 WHERE id =".$id);
			$this->db->query("UPDATE sss set active = 0 WHERE id =".$id);
			$this->db->query("UPDATE pag_ibig set active = 0 WHERE id =".$id);
		}

		public function getAllDepartment(){
			$sql = $this->db->query("SELECT * FROM department WHERE dept_deleted = 0");
			return $sql->result();
		}
	}
?>