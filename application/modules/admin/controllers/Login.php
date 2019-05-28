<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        
    }
    

    public function index()
    {
        $valid = $this->form_validation;

        $valid->set_rules('username', 'Username', 'required',
                    array('required' => 'Username harus diisi'));
        $valid->set_rules('password', 'Password','required|min_length[6]',
        array('required' 	=> 'Password harus diisi',
                'min_length'  => 'Password minimal 6 karakter'));

        if($valid->run()===FALSE){
            $data = array('title' => 'Login Administrator');
		    $this->load->view('admin/login_view', $data, FALSE);
        }else{
            $i          = $this->input;
            $username   = $i->post('username');
            $password   = $i->post('password');
            $cek_login  = $this->User_model->login($username, $password);

            //jika ada
            if(!empty($cek_login) == 1){
                $s = $this->session;
                $s->set_userdata('username', $cek_login->username);
                $s->set_userdata('id_user', $cek_login->id_user);
                $s->set_userdata('nama', $cek_login->nama);
                $s->set_userdata('akses_level', $cek_login->akses_level);
                $s->set_userdata('status', $cek_login->status);
                
               
                redirect(base_url('admin'),'refresh');
                
            }else{
                //jika tidak ditemukan
                $this->session->set_flashdata('msg', 'Username atau password salah');
                redirect(base_url('login'),'refresh');
            }
        }
    }

    function logout(){
        $s = $this->session;
        $s->unset_userdata('username');
        $s->unset_userdata('id_user');
        $s->unset_userdata('nama');
        $s->unset_userdata('aksesl_level');
        $s->unset_userdata('status');

        
        redirect('login','refresh');
        
    }

}

