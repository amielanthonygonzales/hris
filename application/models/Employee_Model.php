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

		public function addEmployee($postEmployee){
			$this->db->query("
				INSERT INTO 
				employee 
				(
				emp_id, 
				emp_dept, 
				emp_name, 
				emp_username, 
				emp_password, 
				emp_position
				)
				VALUES 
				(
				".$this->db->escape($postEmployee['emp_id']). " ,
				".$this->db->escape($postEmployee['emp_dept'])." ,
				".$this->db->escape($postEmployee['emp_name'])." ,
				".$this->db->escape($postEmployee['emp_username'])." ,
				".$this->db->escape($postEmployee['emp_password'])." ,
				".$this->db->escape($postEmployee['emp_position'])." 
				)
				");
			return 1;
		}

		public function addEmployeeSSS($postEmployee){
			$this->db->query("
				INSERT INTO 
				sss 
				(
				sss_emp_id
				) 
				VALUES
				(
				".$this->db->escape($postEmployee['emp_id']). "
				)");
			return 1;
		}

		public function addEmployeePagibig($postEmployee){
			$this->db->query("
				INSERT INTO 
				pag_ibig 
				(
				pagibig_emp_id
				) 
				VALUES
				(
				".$this->db->escape($postEmployee['emp_id']). "
				)");
			return 1;
		}

		public function getAllEmployee(){
			$sql = $this->db->query("SELECT * FROM employee WHERE emp_deleted = 0");
			return $sql->result();
		}

		public function getEmployee($id){
			$sql = $this->db->query("SELECT * FROM employee, sss, pag_ibig WHERE employee.emp_id = ".$this->db->escape($id)." and  sss.sss_emp_id = employee.emp_id and pag_ibig.pagibig_emp_id = employee.emp_id and employee.emp_deleted = 0");
			return $sql->result();
		}

		public function updateEmployeeInfo($id, $updatePost){
			$sql = $this->db->query("
				UPDATE 
				employee 
				SET 
				emp_dept = " .$this->db->escape($updatePost['emp_dept']). " ,
				emp_salary = " .$this->db->escape($updatePost['emp_salary']). " 
				WHERE 
				emp_id = " .$this->db->escape($id));
			return 1;
		}

		public function updateSSSInfo($id, $updatePost){
			$sql = $this->db->query("
				UPDATE 
				sss 
				SET 
				sss_no = " .$this->db->escape($updatePost['sss_no']). " ,
				ss_contribution = " .$this->db->escape($updatePost['ss_contribution']). " ,
				ec_contribution = " .$this->db->escape($updatePost['ec_contribution']). " 
				WHERE 
				sss_emp_id = ".$this->db->escape($id));
			return 1;
		}

		public function updatePagibigInfo($id, $updatePost){
			$sql = $this->db->query("
				UPDATE 
				pag_ibig 
				SET 
				pagibig_mid_no = ".$this->db->escape($updatePost['pagibig_mid_no'])." ,
				pagibig_no = ".$this->db->escape($updatePost['pagibig_no'])." , 
				pagibig_member_prog = ".$this->db->escape($updatePost['pagibig_member_prog'])." ,
				pagibig_period_cov = ".$this->db->escape($updatePost['pagibig_period_cov'])." ,
				pagibig_monthly_compen = ".$this->db->escape($updatePost['pagibig_monthly_compen'])." ,
				pagibig_ee_share = ".$this->db->escape($updatePost['pagibig_ee_share'])." ,
				pagibig_er_share = ".$this->db->escape($updatePost['pagibig_er_share'])." 
				WHERE 
				pagibig_emp_id = ".$this->db->escape($id));
			return 1;
		}
	}
?>