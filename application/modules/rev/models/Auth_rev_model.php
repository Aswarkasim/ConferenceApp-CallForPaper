<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_rev_model extends CI_Model {

	public function login($email, $password){
		$this->db->select('*')
				 ->from('tbl_reviewer')
				 ->where(array('email' 		=> $email,
							   'password'	=> md5($password),
							   'is_aktif'	=> '1'
							));
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Peserta_model.php */
/* Location: ./application/modules/admin/models/Peserta_model.php */
