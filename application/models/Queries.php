<?php
class Queries extends CI_Model{

	public function getRoles(){
		$roles = $this->db -> get('tbl_roles');
		if($roles -> num_rows() > 0){
			return $roles->result();
		}
	}

	public function getColleges(){
		$colleges = $this->db -> get('tbl_college');
		if($colleges -> num_rows() > 0){
			return $colleges->result();
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

	public function adminExist($email, $password){
		$chkAdmin = $this->db->where(['email'=>$email, 'password'=>$password])
		                              ->get('tbl_users');

		if($chkAdmin->num_rows() > 0){
			return $chkAdmin->row();
		}
	}

	public function makeCollege($data){
		return $this->db->insert('tbl_college', $data);
	}

	public function registerCoadmin($data){
		return $this->db->insert('tbl_users', $data);
	}
}
?>