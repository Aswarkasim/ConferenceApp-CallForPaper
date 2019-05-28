<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function login($email, $password){
		$this->db->select('*')
				 ->from('tbl_peserta')
				 ->where(array('email' 	=> $email,
							   'password'	=> md5($password)));
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Peserta_model.php */
/* Location: ./application/modules/admin/models/Peserta_model.php */
