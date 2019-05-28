<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if(($this->session->userdata('id_user') && $this->session->userdata('username')) == ""){
			redirect('login','refresh');
		}
  }

  public function index()
  {
    $konfigurasiRead = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');

    //$valid = $this->form_valid_required('namaweb','Nama Web', 'Nama web tidak boleh kosong');

    $valid = $this->form_validation->set_rules('namaweb', 'Nama Website', 'required',
                    array('required' => 'Nama ')
                  );

    if($valid->run()===FALSE){
      $data = array(
                    'title'         => 'Konfigurasi Sistem',
                    'konfigurasi'   => $konfigurasiRead,
                    'isi'           => 'admin/konfigurasi/list'
                  );
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    }else{
      // Masuk //
      $i = $this->input;
      $data = array(
                  'id_konfigurasi' => $konfigurasiRead->id_konfigurasi,
                   'namaweb'       => $i->post('namaweb'),
                   'tagline'       => $i->post('tagline'),
                   'deskripsi'       => $i->post('deskripsi'),
                   'keywords'       => $i->post('keywords'),
                   'email'       => $i->post('email'),
                   'website'				=> $i->post('website'),
    						  'facebook'			=> $i->post('facebook'),
    						  'instagram'			=> $i->post('instagram'),
    						  'twitter'				=> $i->post('twitter'),
    						  'map'					=> $i->post('map'),
    						  'metatext'			=> $i->post('metatext'),
    						  'telepon'				=> $i->post('telepon'),
    						  'alamat'				=> $i->post('alamat')
                );
      $this->Crud_model->edit('tbl_konfigurasi',$data, $konfigurasiRead->id_konfigurasi, 'id_konfigurasi');
      $this->session->flashdata('sukses', 'Data konfigurasi telah di update');
      redirect(base_url('admin/konfigurasi'), 'refresh');
    }

  }

  function form_valid_required($field, $as, $msg){
    $this->form_validation->set_rules(
          $field, $as, 'required',
          array('required' => $msg)
      );
  }




}
