<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Profil_model');
        
    }
    

    public function index()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        $peserta    = $this->Crud_model->listingOne('tbl_peserta','id_peserta', $id_peserta);
        $abstrak    = $this->Crud_model->listingOne('tbl_abstrak','tbl_abstrak.id_peserta', $id_peserta);
        $payment    = $this->Crud_model->listingOne('tbl_konfirmasi_pembayaran','tbl_konfirmasi_pembayaran.id_peserta', $id_peserta);
        $paper    = $this->Crud_model->listingOne('tbl_paper','tbl_paper.id_peserta', $id_peserta);
               
        $data = array(
            'title'         => 'Register',
            'peserta'       => $peserta,
            'abstrak'       => $abstrak,
            'payment'       => $payment,
            'paper'         => $paper,
			'isi'           => 'frontend/profil/beranda'
			);
		$this->load->view('frontend/layout/wrapper', $data);
    }

    function profil()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        $peserta    = $this->Crud_model->listingOne('tbl_peserta','id_peserta', $id_peserta);
        
        $data = array(
            'title'         => 'Register',
            'peserta'       => $peserta,
			'isi'           => 'frontend/profil/profil'
			);
		$this->load->view('frontend/layout/wrapper', $data);
    }

    function edit($id_peserta)
    {
        $id_peserta = $this->session->userdata('id_peserta');
        $peserta    = $this->Crud_model->listingOne('tbl_peserta','id_peserta', $id_peserta);
        
        $i = $this->input;

        $valid = $this->form_validation;

		$valid->set_rules('nama_no_title', 'Nama','required',
          array('required' => ' %s harus diisi'));
        $valid->set_rules('nama_with_title', 'Nama','required',
        array('required' => ' %s harus diisi'));

        if($i->post('password')){
            $valid->set_rules('password', 'Password','min_length[6]',
                    array('min_length'	=> ' %s minimal 6 karakter'));
		    $valid->set_rules('re_password', 'Retype Password','matches[password]',
					array('matches'	 => ' %s harus sama'));
        }
        

		if($valid->run()===FALSE){
		$data = array(
            'title'         => 'Register',
            'peserta'       => $peserta,
			'isi'           => 'frontend/profil/edit'
			);
		$this->load->view('frontend/layout/wrapper', $data);
		}else{
           
            
            if($i->post('password')!=""){
                $data = array(
                    'id_peserta' 		=> $id_peserta,
                    'nama_no_title'		=> $i->post('nama_no_title'),
                    'nama_with_title'	=> $i->post('nama_with_title'),
                    'gender'		    => $i->post('gender'),
                    'institusi'	        => $i->post('institusi'),
                    'alamat'		    => $i->post('alamat'),
                    'telp'		        => $i->post('telp'),
                    'fax'		        => $i->post('fax'),
                    'email'		        => $peserta->email,
                    'password'		    => md5($i->post('password'))
                );
            }else{
                $data = array(
                    'id_peserta' 		=> $id_peserta,
                    'nama_no_title'		=> $i->post('nama_no_title'),
                    'nama_with_title'	=> $i->post('nama_with_title'),
                    'gender'		    => $i->post('gender'),
                    'institusi'	        => $i->post('institusi'),
                    'alamat'		    => $i->post('alamat'),
                    'telp'		        => $i->post('telp'),
                    'fax'		        => $i->post('fax'),
                    'email'		        => $peserta->email,
                    'password'		    => $peserta->password
                ); 
            }
			
			$this->Crud_model->edit('tbl_peserta','id_peserta', $id_peserta,$data);
			$this->session->set_flashdata('msg',' Data telah ditambah');
			redirect(base_url('profil'),'refresh');
		}
    }


    

    

}
