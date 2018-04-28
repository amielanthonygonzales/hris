<?php 
	
	class Employee_Model extends CI_Model{

		function add($data, $nameSSS, $namePagibig){
			$this->db->insert('employee',$data);
			$this->db->insert('pag_ibig',$namePagibig);
			$this->db->insert('sss',$nameSSS);
		}

		function checkLogin(){
			if(isset($_POST['username']) && isset($_POST['password'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
				//$sql = $this->db->query("SELECT * FROM `employee` WHERE `emp_username` = " .$this->db->escape($username).  "AND `emp_password` =" .$this->db->escape($password));
				$sql = $this->db->query("SELECT * FROM `employee` WHERE `emp_username` = " .$this->db->escape($username));
				$row = $sql->row();
				$error = 'error';
				if(!password_verify($password, $row->emp_password)){
					throw new UnexpectedValueException($row->emp_password);
				}else{
					return $row;	
				}
				
			}
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
			if($postEmployee['emp_id'] == ''){
				$returndata['error'] = "Please input an ID!";
				//return $error;
			}
			else if(strlen($postEmployee['emp_password']) < 8){
				$returndata['error'] = "Please input at least 8 characters for the password";
				//return $error;
			}
			else if (!preg_match('/[\'^£$%&*()}!{@#~?><>,|=_+¬-]/', $postEmployee['emp_password'])){
			    // one or more of the 'special characters' found in $string
			    $returndata['error'] = "Please input at least 1 (one) special character in your password";
			}
			else if(!preg_match('~[0-9]~', $postEmployee['emp_password'])){
				$returndata['error'] = "Please input at least 1 (one) digit in your password";
			}
			else if($postEmployee['emp_email'] == ''){
				$returndata['error'] = "Please input an email!";
				//return $error;
			}
			else if($postEmployee['emp_username'] == ''){
				$returndata['error'] = "Please input a username!";
				//return $error;
			}
			else if($postEmployee['emp_password'] == ''){
				$returndata['error'] = "Please input a password!";
				//return $error;
			}
			else if($postEmployee['emp_first_name'] == ''){
				$returndata['error'] = "Please input a first name!";
				//return $error;
			}
			else if($postEmployee['emp_last_name'] == ''){
				$returndata['error'] = "Please input a last name!";
				//return $error;
			}
			else if($postEmployee['emp_password'] == ''){
				$returndata['error'] = "Please input a password!";
				//return $error;
			}
			else if($postEmployee['emp_position'] == ''){
				$returndata['error'] = "Please choose a position!";
				//return $error;
			}
			else{
				$password = password_hash($postEmployee['emp_password'], PASSWORD_BCRYPT);
				$this->db->query("
					INSERT INTO 
					employee 
					(
					emp_id, 
					emp_dept, 
					emp_first_name,
					emp_middle_name,
					emp_last_name,
					emp_ext_name,
					emp_email, 
					emp_username, 
					emp_password, 
					emp_position
					)
					VALUES 
					(
					".$this->db->escape($postEmployee['emp_id']). " ,
					".$this->db->escape($postEmployee['emp_dept'])." ,
					".$this->db->escape($postEmployee['emp_first_name'])." ,
					".$this->db->escape($postEmployee['emp_middle_name'])." ,
					".$this->db->escape($postEmployee['emp_last_name'])." ,
					".$this->db->escape($postEmployee['emp_ext_name'])." ,
					".$this->db->escape($postEmployee['emp_email'])." ,
					".$this->db->escape($postEmployee['emp_username'])." ,
					".$this->db->escape($password)." ,
					".$this->db->escape($postEmployee['emp_position'])." 
					)
					");
				$returndata = 1;
			}
			return $returndata;
		}

		public function addEmployeeSSS($postEmployee){
			if($postEmployee['emp_id'] == ''){
				$returndata['error'] = "Please insert an ID";
				//return $error;
			}
			else if(strlen($postEmployee['emp_password']) < 8){
				$returndata['error'] = "Please input at least 8 characters for the password";
				//return $error;
			}
			else if (!preg_match('/[\'^£$%&*()}!{@#~?><>,|=_+¬-]/', $postEmployee['emp_password'])){
			    // one or more of the 'special characters' found in $string
			    $returndata['error'] = "Please input at least 1 (one) special character in your password";
			}
			else if(!preg_match('~[0-9]~', $postEmployee['emp_password'])){
				$returndata['error'] = "Please input at least 1 (one) digit in your password";
			}
			else if($postEmployee['emp_email'] == ''){
				$returndata['error'] = "Please input an email!";
				//return $error;
			}
			else if($postEmployee['emp_username'] == ''){
				$returndata['error'] = "Please input a username!";
				//return $error;
			}
			else if($postEmployee['emp_password'] == ''){
				$returndata['error'] = "Please input a password!";
				//return $error;
			}
			else if($postEmployee['emp_first_name'] == ''){
				$returndata['error'] = "Please input a first name!";
				//return $error;
			}
			else if($postEmployee['emp_last_name'] == ''){
				$returndata['error'] = "Please input a last name!";
				//return $error;
			}
			else if($postEmployee['emp_password'] == ''){
				$returndata['error'] = "Please input a password!";
				//return $error;
			}
			else if($postEmployee['emp_position'] == ''){
				$returndata['error'] = "Please choose a position!";
				//return $error;
			}
			else{
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
				$returndata = 1;
			}
			return $returndata;
		}

		public function addEmployeePagibig($postEmployee){
			if($postEmployee['emp_id'] == ''){
				$returndata['error'] = "Please insert an ID";
				//return $error;
			}
			else if(strlen($postEmployee['emp_password']) < 8){
				$returndata['error'] = "Please input at least 8 characters for the password";
				//return $error;
			}
			else if (!preg_match('/[\'^£$%&*()}!{@#~?><>,|=_+¬-]/', $postEmployee['emp_password'])){
			    // one or more of the 'special characters' found in $string
			    $returndata['error'] = "Please input at least 1 (one) special character in your password";
			}
			else if(!preg_match('~[0-9]~', $postEmployee['emp_password'])){
				$returndata['error'] = "Please input at least 1 (one) digit in your password";
			}
			else if($postEmployee['emp_email'] == ''){
				$returndata['error'] = "Please input an email!";
				//return $error;
			}
			else if($postEmployee['emp_username'] == ''){
				$returndata['error'] = "Please input a username!";
				//return $error;
			}
			else if($postEmployee['emp_password'] == ''){
				$returndata['error'] = "Please input a password!";
				//return $error;
			}
			else if($postEmployee['emp_first_name'] == ''){
				$returndata['error'] = "Please input a first name!";
				//return $error;
			}
			else if($postEmployee['emp_last_name'] == ''){
				$returndata['error'] = "Please input a last name!";
				//return $error;
			}
			else if($postEmployee['emp_password'] == ''){
				$returndata['error'] = "Please input a password!";
				//return $error;
			}
			else if($postEmployee['emp_position'] == ''){
				$returndata['error'] = "Please choose a position!";
				//return $error;
			}
			else{
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
				$returndata = 1;
			}
			return $returndata;
		}

		public function getAllEmployee(){
			$sql = $this->db->query("SELECT * FROM employee WHERE emp_deleted = 0");
			return $sql->result();
		}

		public function getEmployee($id){
			$sql = $this->db->query("SELECT * FROM employee, sss, pag_ibig WHERE employee.emp_id = ".$this->db->escape($id)." and  sss.sss_emp_id = employee.emp_id and pag_ibig.pagibig_emp_id = employee.emp_id and employee.emp_deleted = 0");
			return $sql->result();
		}

		public function updateReadNotification($id){
				$sql = $this->db->query("
				UPDATE 
					`employee` 
				SET 
					`emp_notification` = 0
				WHERE 
					`emp_id` = ".$this->db->escape($id['id']));

			return 1;
		}

		public function updateEmployeeInfo($id, $updatePost){
			if(strlen($updatePost['sss_no']) != 12){
				$returndata['error'] = "Invalid length of SSS Number!";
			}else if(strlen($updatePost['pagibig_mid_no']) != 14){
				$returndata['error'] = "Invalid length of Pag-Ibig MID Number!";
			}else if(strlen($updatePost['pagibig_no']) != 14){
				$returndata['error'] = "Invalid length of Pag-Ibig Number!";
			}else{
				$sql = $this->db->query("
					UPDATE 
					employee 
					SET
					emp_birthday = " .$this->db->escape($updatePost['emp_birthday']). " ,
					emp_dept = " .$this->db->escape($updatePost['emp_dept']). " ,
					emp_salary = " .$this->db->escape($updatePost['emp_salary']). " 
					WHERE 
					emp_id = " .$this->db->escape($id));
				$returndata = 1;
			}
			if(strlen($updatePost['sss_no']) == 3 || strlen($updatePost['pagibig_mid_no']) == 3 || strlen($updatePost['pagibig_no']) == 3){
				$sql = $this->db->query("
					UPDATE 
					employee 
					SET
					emp_birthday = " .$this->db->escape($updatePost['emp_birthday']). " ,
					emp_dept = " .$this->db->escape($updatePost['emp_dept']). " ,
					emp_salary = " .$this->db->escape($updatePost['emp_salary']). " 
					WHERE 
					emp_id = " .$this->db->escape($id));
				$returndata = 1;
			}
			return $returndata;
		}

		public function updateSSSInfo($id, $updatePost){
			if(strlen($updatePost['sss_no']) != 12){
				$returndata['error'] = "Invalid length of SSS Number!";
			}else if(strlen($updatePost['pagibig_mid_no']) != 14){
				$returndata['error'] = "Invalid length of Pag-Ibig MID Number!";
			}else if(strlen($updatePost['pagibig_no']) != 14){
				$returndata['error'] = "Invalid length of Pag-Ibig Number!";
			}else{
				$sql = $this->db->query("
				UPDATE 
					`sss` 
				SET 
					`sss_no` = " .$this->db->escape($updatePost['sss_no']). " ,
					`ss_contribution` = " .$this->db->escape($updatePost['ss_contribution']). " ,
					`ec_contribution` = " .$this->db->escape($updatePost['ec_contribution']). " ,
					`er_contribution` = " .$this->db->escape($updatePost['er_contribution']). " ,
					`ee_contribution` = " .$this->db->escape($updatePost['ee_contribution']). " 
				WHERE 
					`sss_emp_id` = ".$this->db->escape($id));
				$returndata = 1;
			}
			if(strlen($updatePost['sss_no']) == 3 || strlen($updatePost['pagibig_mid_no']) == 3 || strlen($updatePost['pagibig_no']) == 3){
				$sql = $this->db->query("
				UPDATE 
					`sss` 
				SET 
					`sss_no` = " .$this->db->escape($updatePost['sss_no']). " ,
					`ss_contribution` = " .$this->db->escape($updatePost['ss_contribution']). " ,
					`ec_contribution` = " .$this->db->escape($updatePost['ec_contribution']). " ,
					`er_contribution` = " .$this->db->escape($updatePost['er_contribution']). " ,
					`ee_contribution` = " .$this->db->escape($updatePost['ee_contribution']). " 
				WHERE 
					`sss_emp_id` = ".$this->db->escape($id));
				$returndata = 1;
			}
			return $returndata;
		}

		public function updatePagibigInfo($id, $updatePost){
			if(strlen($updatePost['pagibig_mid_no']) != 14){
				$returndata['error'] = "Invalid length of Pag-Ibig MID Number!";
			}else if(strlen($updatePost['pagibig_no']) != 14){
				$returndata['error'] = "Invalid length of Pag-Ibig Number!";
			}else if(strlen($updatePost['sss_no']) != 12){
				$returndata['error'] = "Invalid length of SSS Number!";
			}else{
				$sql = $this->db->query("
					UPDATE 
					pag_ibig 
					SET 
					pagibig_mid_no = ".$this->db->escape($updatePost['pagibig_mid_no'])." ,
					pagibig_no = ".$this->db->escape($updatePost['pagibig_no'])." , 
					pagibig_ee_share = ".$this->db->escape($updatePost['pagibig_ee_share'])." ,
					pagibig_er_share = ".$this->db->escape($updatePost['pagibig_er_share'])." ,
					pagibig_mem_prog = ".$this->db->escape($updatePost['pagibig_mem_prog'])." ,
					monthly_compen = ".$this->db->escape($updatePost['monthly_compen'])." ,
					pagibig_remarks = ".$this->db->escape($updatePost['pagibig_remarks'])." ,
					pagibig_remarks_date = ".$this->db->escape($updatePost['pagibig_remarks_date'])." 
					WHERE 
					pagibig_emp_id = ".$this->db->escape($id));
				$returndata = 1;
			}
			if(strlen($updatePost['sss_no']) == 3 || strlen($updatePost['pagibig_mid_no']) == 3 || strlen($updatePost['pagibig_no']) == 3){
				$sql = $this->db->query("
					UPDATE 
					pag_ibig 
					SET 
					pagibig_mid_no = ".$this->db->escape($updatePost['pagibig_mid_no'])." ,
					pagibig_no = ".$this->db->escape($updatePost['pagibig_no'])." , 
					pagibig_ee_share = ".$this->db->escape($updatePost['pagibig_ee_share'])." ,
					pagibig_er_share = ".$this->db->escape($updatePost['pagibig_er_share'])." ,
					pagibig_mem_prog = ".$this->db->escape($updatePost['pagibig_mem_prog'])." ,
					monthly_compen = ".$this->db->escape($updatePost['monthly_compen'])." ,
					pagibig_remarks = ".$this->db->escape($updatePost['pagibig_remarks'])." ,
					pagibig_remarks_date = ".$this->db->escape($updatePost['pagibig_remarks_date'])." 
					WHERE 
					pagibig_emp_id = ".$this->db->escape($id));
				$returndata = 1;
			}
			return $returndata;
		}

		public function deleteEmployeeInfo($id){
			$sql = $this->db->query("UPDATE employee SET emp_deleted = 1 WHERE emp_id = " . $this->db->escape($id));
			return 1;
		}

		public function deleteEmployeeSSS($id){
			$sql = $this->db->query("UPDATE sss SET sss_deleted = 1 WHERE sss_emp_id = " . $this->db->escape($id));
			return 1;
		}

		public function deleteEmployeePagibig($id){
			$sql = $this->db->query("UPDATE pag_ibig SET pagibig_deleted = 1 WHERE pagibig_emp_id = " . $this->db->escape($id));
			return 1;
		}

		public function getEmployees($args){
			if(!isset($args['offset'])){
				$args['offset'] = 0;
			}
			// $sql = "
			// SELECT * 
			// FROM `employee` 
			// WHERE `emp_last_name` LIKE '%" .$this->db->escape_str($args['search']). "%' AND `emp_deleted` = 0 
			// OR `emp_first_name` LIKE '%" .$this->db->escape_str($args['search']). "%'
		
			// ORDER BY ".$this->db->escape_str($args['orderby'])." ". $this->db->escape_str($args['dir'])." 
			// LIMIT " .$this->db->escape_str($args['count']). " 
			// OFFSET ".$this->db->escape_str($args['offset']);

			$sql= "
			SELECT 
			* 
			FROM 
				`employee` 
			WHERE 
				`emp_deleted` = 0 
			AND  
				CONCAT(`emp_first_name`, ' ', `emp_last_name`) 
			LIKE
				'%" .$this->db->escape_str($args['search']). "%' 
			ORDER BY 
				".$this->db->escape_str($args['orderby'])." ". $this->db->escape_str($args['dir'])." 
			LIMIT 
				" .$this->db->escape_str($args['count']). " 
			OFFSET 
				".$this->db->escape_str($args['offset']);


			
			// $sql = "select `employee`.`emp_id`,
			// 		`employee`.`emp_first_name`,
			// 		`employee`.`emp_last_name`,
			// 		`employee`.`emp_middle_name`,
			// 		`employee`.`emp_ext_name`
			// 		from `employee`
			// 		where `employee`.`emp_deleted` = 0 and 
			// 		`employee`.`emp_first_name` like '%".$this->db->escape_str($args['search'])."%'
			// 		or `employee`.`emp_last_name` like '%".$this->db->escape_str($args['search'])."%'
			// 		";
			// if($args['orderby']){
			// 	$sql .= " order by `".$args['orderby']."` ".$args['dir'];
			// }
			// $sql .= " limit ".$args['offset'].", ".$args['count'];
			return $this->db->query($sql)->result_array();

		}

		public function countEmployees(){
			$sql = "SELECT COUNT(*) AS `count` FROM `employee` WHERE `emp_deleted` = 0";
			return $this->db->query($sql)->result_array()[0]["count"];
		}

		public function editEmployeeInfo($id, $editPost){
			$sql = $this->db->query("
				UPDATE 
					`employee` 
				SET 
					`emp_first_name` = " .$this->db->escape($editPost['emp_first_name']). " ,
					`emp_middle_name` = " .$this->db->escape($editPost['emp_middle_name']). ", 
					`emp_last_name` = " .$this->db->escape($editPost['emp_last_name']). ", 
					`emp_ext_name = " .$this->db->escape($editPost['emp_ext_name']). ", 
					`emp_birthday` = " .$this->db->escape($editPost['emp_birthday']). "
				WHERE 
				`emp_id` = " .$this->db->escape($id));
			return 1;
		}

		public function getAllSSSRef(){
			$sql = $this->db->query("SELECT * FROM `sss_reference` WHERE `ref_deleted` = 0");
			return $sql->result();
		}

		public function getEmpNameNotif($id){
			$sql = $this->db->query("SELECT * FROM `employee` WHERE `emp_id` = ".$this->db->escape($id));
			return $sql->result();
		}

		public function getEmployeeDeleted($args){
			$sql= "
			SELECT 
			* 
			FROM 
				`employee` 
			WHERE 
				`emp_deleted` = 1 
			AND  
				CONCAT(`emp_first_name`, ' ', `emp_last_name`) 
			LIKE
				'%" .$this->db->escape_str($args['search']). "%' 
			ORDER BY 
				".$this->db->escape_str($args['orderby'])." ". $this->db->escape_str($args['dir'])." 
			LIMIT 
				" .$this->db->escape_str($args['count']). " 
			OFFSET 
				".$this->db->escape_str($args['offset']);

				return $this->db->query($sql)->result_array();
		}

		public function countEmployeeDeleted(){
			$sql = "SELECT COUNT(*) AS `count` FROM `employee` WHERE `emp_deleted` = 1";
			return $this->db->query($sql)->result_array()[0]["count"];
		}

		public function getEmployeeRestore($id){
			$sql = $this->db->query("SELECT * FROM employee, sss, pag_ibig WHERE employee.emp_id = ".$this->db->escape($id)." and  sss.sss_emp_id = employee.emp_id and pag_ibig.pagibig_emp_id = employee.emp_id and employee.emp_deleted = 1");
			return $sql->result();
		}

		public function updateRestoreEmployee($id){
			$sql = $this->db->query("
				UPDATE 
				employee 
				SET
				emp_deleted = 0  
				WHERE 
				emp_id = " .$this->db->escape($id));
			return 1;
		}

		public function restoreSSSInfo($id){
			$sql = $this->db->query("
			UPDATE 
				`sss` 
			SET 
				`sss_deleted` = 0  
			WHERE 
				`sss_emp_id` = ".$this->db->escape($id));
				
			
			return 1;
		}

		public function restorePagibigInfo($id){
			$sql = $this->db->query("
				UPDATE 
				`pag_ibig` 
				SET 
				`pagibig_deleted` = 0 
				WHERE 
				`pagibig_emp_id` = ".$this->db->escape($id));
			return 1;
		}
	}
?>