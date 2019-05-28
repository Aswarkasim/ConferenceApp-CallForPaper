<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login($username, $password){
		$this->db->select('*')
				 ->from('tbl_user')
				 ->where(array('username' 	=> $username,
							   'password'	=> md5($password)));
		$query = $this->db->get();
		return $query->row();
	}

	public function listing(){
		$query = $this->db->select('*')
				 		  ->from('tbl_user')
				 		  ->order_by('id_user', 'DESC')
				 		  ->get();
		return $query->result();

	}

	public function tambah($data){
		$this->db->insert('tbl_user', $data);
	}

	public function edit($data){
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('tbl_user', $data);
	}

	public function delete($data){
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('tbl_user', $data);
	}

}

/* End of file User_model.php */
/* Location: ./application/modules/admin/models/User_model.php */
