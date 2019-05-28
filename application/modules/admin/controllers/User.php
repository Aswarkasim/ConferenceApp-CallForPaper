<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		if(($this->session->userdata('id_user') && $this->session->userdata('username')) == ""){
			redirect('login','refresh');
		}
	}

	public function index()
	{

		$list_user = $this->Crud_model->listing('tbl_user');
		$data = array('title' => 'User',
					  'user'  => $list_user,
					  'isi'	  => 'admin/user/list'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function add(){

		$valid = $this->form_validation;

		$valid->set_rules('nama', 'Nama','required',
					array('required' => ' %s harus diisi'));
		$valid->set_rules('username', 'Username','required|is_unique[tbl_user.username]',
					array('required' => ' %s harus diisi',
						  'is_unique'=> 'Username <strong> '.$this->input->post('username').' </strong> sudah ada. Buat username yang lain'));
		$valid->set_rules('password', 'Password','required|min_length[6]',
					array('required' 	=> ' %s harus diisi',
						  'min_length'	=> ' %s minimal 6 karakter'));
		$valid->set_rules('re_password', 'Retype Password','required|matches[password]',
					array('required' => ' %s harus diisi',
						  'matches'	 => ' %s harus sama'));

		if($valid->run()===FALSE){
		$data = array(
			'title'         => 'Tambah user',
			'isi'           => 'admin/user/add'
			);
		$this->load->view('admin/layout/wrapper', $data);
		}else{
			$i = $this->input;
			$data = array(
				'nama' 			=> $i->post('nama'),
				'username'		=> $i->post('username'),
				'email'			=> $i->post('email'),
				'password'		=> md5($i->post('password')),
				'akses_level'	=> $i->post('akses_level'),
				'status'		=> $i->post('status')
			);
			$this->Crud_model->add('tbl_user',$data);
			$this->session->set_flashdata('msg',' Data telah ditambah');
			redirect(base_url('admin/user'),'refresh');
		}

	}

	public function edit($id_user){

		$user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);

		$valid = $this->form_validation;

		$valid->set_rules('nama', 'Nama','required',
					array('required' => ' %s harus diisi'));
		

		if($valid->run()===FALSE){
		$data = array(
				'title'         => 'Tambah user',
				'user'			=> $user,
				'isi'           => 'admin/user/edit'
				);
		$this->load->view('admin/layout/wrapper', $data);
		}else{
			$i = $this->input;

			if(($i->post('password'))==""){
				$data = array(
					'id_user' 		=> $user->id_user,
					'nama' 			=> $i->post('nama'),
					'username'		=> $i->post('username'),
					'email'			=> $i->post('email'),
					'password'		=> $user->password,
					'akses_level'	=> $i->post('akses_level'),
					'status'		=> $i->post('status')
				);
			}else{
				$data = array(
					'id_user' 		=> $user->id_user,
					'nama' 			=> $i->post('nama'),
					'username'		=> $i->post('username'),
					'email'			=> $i->post('email'),
					'password'		=> md5($i->post('password')),
					'akses_level'	=> $i->post('akses_level'),
					'status'		=> $i->post('status')
				);
			}	
			$this->Crud_model->edit('tbl_user','id_user',$data['id_user'],$data);
			$this->session->set_flashdata('msg',' Data telah ditambah');
			redirect(base_url('admin/user'),'refresh');
		}

	}

	function delete($id_user){
		$user = $this->Crud_model->listingOne('tbl_user', 'id_user',$id_user);

		$this->Crud_model->delete('tbl_user', 'id_user',$id_user);
		$this->session->flashdata('msg', 'sukses');
		
		redirect('admin/user','refresh');
		
	}

	function reviewer()
	{

		$reviewer = $this->Crud_model->listing('tbl_reviewer');
		$data = array('title' => 'User',
					  'reviewer'  => $reviewer,
					  'isi'	  => 'admin/reviewer/list'
			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	public function addReviewer(){

		$valid = $this->form_validation;

		$valid->set_rules('nama', 'Nama','required',
					array('required' => ' %s harus diisi'));
		$valid->set_rules('email', 'Email','required|is_unique[tbl_reviewer.email]',
					array('required' => ' %s harus diisi',
						  'is_unique'=> 'Email <strong> '.$this->input->post('email').' </strong> sudah ada. Buat username yang lain'));
		$valid->set_rules('password', 'Password','required|min_length[6]',
					array('required' 	=> ' %s harus diisi',
						  'min_length'	=> ' %s minimal 6 karakter'));
		$valid->set_rules('re_password', 'Retype Password','required|matches[password]',
					array('required' => ' %s harus diisi',
						  'matches'	 => ' %s harus sama'));

		if($valid->run()===FALSE){
		$data = array(
			'title'         => 'Tambah Reviewer',
			'isi'           => 'admin/reviewer/add'
			);
		$this->load->view('admin/layout/wrapper', $data);
		}else{
			$i = $this->input;
			$data = array(
				'nama_reviewer' 			=> $i->post('nama'),
				'email'			=> $i->post('email'),
				'password'		=> md5($i->post('password')),
				'is_aktif'		=> $i->post('is_aktif')
			);
			$this->Crud_model->add('tbl_reviewer',$data);
			$this->session->set_flashdata('msg',' Data telah ditambah');
			redirect('admin/user/reviewer','refresh');
		}

	}

	public function editReviewer($id_reviewer){

		$reviewer = $this->Crud_model->listingOne('tbl_reviewer', 'id_reviewer', $id_reviewer);

		$valid = $this->form_validation;

		$valid->set_rules('nama', 'Nama','required',
					array('required' => ' %s harus diisi'));
		

		if($valid->run()===FALSE){
		$data = array(
				'title'         => 'Tambah reviewer',
				'reviewer'			=> $reviewer,
				'isi'           => 'admin/reviewer/edit'
				);
		$this->load->view('admin/layout/wrapper', $data);
		}else{
			$i = $this->input;

			if(($i->post('password'))==""){
				$data = array(
					'id_reviewer' 			=> $i->post('id_reviewer'),
					'nama_reviewer' 			=> $i->post('nama'),
					'email'			=> $i->post('email'),
					'password'		=> $reviewer->password,
					'is_aktif'		=> $i->post('is_aktif')
				);
			}else{
				$data = array(
					'id_reviewer' 			=> $i->post('id_reviewer'),
					'nama_reviewer' 			=> $i->post('nama'),
					'email'			=> $i->post('email'),
					'password'		=> md5($i->post('password')),
					'is_aktif'		=> $i->post('is_aktif')
				);
			}	
			$this->Crud_model->edit('tbl_reviewer','id_reviewer',$data['id_reviewer'],$data);
			$this->session->set_flashdata('msg',' Data telah ditambah');
			redirect(base_url('admin/user/reviewer'),'refresh');
		}

	}

	function deleteReviewer($id_reviewer){
		$reviewer = $this->Crud_model->listingOne('tbl_reviewer', 'id_reviewer',$id_reviewer);

		$this->Crud_model->delete('tbl_reviewer', 'id_reviewer',$id_reviewer);
		$this->session->flashdata('msg', 'sukses');
		
		redirect('admin/user/reviewer','refresh');
		
	}

}

