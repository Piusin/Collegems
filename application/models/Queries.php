<?php
class Queries extends CI_Model{

	public function getRoles(){
		$roles = $this->db -> get('tbl_roles');
		if($roles -> num_rows() > 0){
			return $roles->result();
		}
	}

	public function registerAdmin($data){
		return $this->db->insert('tbl_users', $data);
	}

	public function chkAdminExist(){
		$chkAdmin = $this->db->where(['role_id' => '1']) -> get('tbl_users');
		if($chkAdmin ->num_rows() > 0){
			return $chkAdmin->num_rows();
		}
	}
}
?>