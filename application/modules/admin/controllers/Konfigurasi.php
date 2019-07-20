<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (($this->session->userdata('id_user') && $this->session->userdata('username')) == "") {
      redirect('login', 'refresh');
    }
  }

  public function index()
  { }

  function form_valid_required($field, $as, $msg)
  {
    $this->form_validation->set_rules(
      $field,
      $as,
      'required',
      array('required' => $msg)
    );
  }


  function logo()
  {
    $konfigurasi  = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    $valid = $this->form_validation;
    $valid->set_rules(
      'bantu',
      'Gambar',
      'required',
      array('required' => ' %s tidak boleh kosong')
    );

    if ($valid->run()) {

      if ($_FILES['logo']['name']) {
        $config['upload_path']   = './assets/uploads/images/konfigurasi/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('logo')) {
          $data = array(
            'title'         => 'Manajemen Seminar',
            'konfigurasi'   => $konfigurasi,
            'error'         => $this->upload->display_errors(),
            'isi'           => 'admin/kofigurasi/logo'
          );
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = array('uploads' => $this->upload->data());
          $config['image_library']    = 'gd2';
          $config['source_image']     = './assets/uploads/images/' . $upload_data['uploads']['file_name'];
          // $this->load->library('img_lib', $config);
          // $this->image_lib->resize();

          if ($konfigurasi->logo != "") {
            unlink('assets/uploads/images/konfigurasi/' . $konfigurasi->logo);
          }

          $i = $this->input;
          $data = array(
            'logo'              => $upload_data['uploads']['file_name']
          );
          $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
          $this->session->set_flashdata(
            'msg',
            '<div class="alert alert-success">
                  <i class="fa fa-check"></i> Data berhasil diubah
                </div>'
          );
          redirect('admin/konfigurasi/logo', 'refresh');
        }
      }
    }
    $data = array(
      'title'         => 'Manajemen Seminar',
      'konfigurasi'   => $konfigurasi,
      'isi'           => 'admin/konfigurasi/logo'
    );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
}
