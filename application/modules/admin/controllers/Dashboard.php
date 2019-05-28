<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if(($this->session->userdata('id_user') && $this->session->userdata('username')) == ""){
			redirect('login','refresh');
		}
	}
	
	public function index()
	{
		$data = array('title' => 'Arks Dev',
					  'isi'	  => 'admin/dashboard/list'
			);	
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/admin/controllers/Dashboard.php */