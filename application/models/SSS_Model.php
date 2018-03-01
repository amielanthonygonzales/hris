<?php

	class SSS_Model extends CI_Model{
		
		function getEmployee(){
			$sql=$this->db->query("SELECT * FROM sss WHERE active = 1");
			return $sql->result();
		}

		function sssView($id){
			$sql=$this->db->query("SELECT * FROM sss WHERE id =".$id);
			return $sql->result();
		}

		function sssUpdate($data, $id){
			$sql=$this->db->query("UPDATE sss set information = '". $data ."' WHERE id = ".$id);
			$arrData['success']=1;
		    $arr['return']=$arrData;
		    return $arr;
		}
	}
?>