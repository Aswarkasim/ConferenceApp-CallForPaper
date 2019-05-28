<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Peserta_model','Konfirmasi_model','Abstrak_model'));

    if(($this->session->userdata('id_user') && $this->session->userdata('username')) == ""){
			redirect('login','refresh');
		}
  }

  function index()
  {
    $pesertaRead = $this->Peserta_model->listing();
    $data = array(
              'title'   => 'Manajemen Peserta',
              'peserta' => $pesertaRead,
              'isi'     => 'admin/peserta/list'
            );
    $this->load->view('admin/layout/wrapper', $data);
  }

  function pesertaDetail($id_peserta){
    $pesertaDetail = $this->Peserta_model->detail($id_peserta);
    $abstrak = $this->Abstrak_model->listingOne('tbl_abstrak', 'tbl_peserta.id_peserta', $id_peserta);

    $abcd = $this->input->post('is_accept');
    $valid = $this->form_validation->set_rules('is_accept', 'Status', 'required|callback_select_validate');
    if($valid->run()===FALSE){
      $data = array(
        'title'     => $pesertaDetail->nama_with_title,
        'peserta'   => $pesertaDetail,
        'abstrak'   => $abstrak,
        'isi'       => 'admin/peserta/list_detail'
      );
      $this->load->view('admin/layout/wrapper', $data);
    }else{
      $data = array(
        'is_read'   => '1',
        'is_accept' => $this->input->post('is_accept')
      );
      $this->Crud_model->edit('tbl_abstrak', 'tbl_abstrak.id_peserta', $id_peserta, $data);
      if(isset($_POST['simpan'])){
        redirect('admin/peserta/pesertaDetail/'.$id_peserta,'refresh');
      }else{
        redirect('admin/abstrak','refresh');
      }
    }
      
  }

  
    // Below function is called for validating select option field.
    function select_validate($abcd)
    {
    // 'none' is the first option that is default "-------Choose City-------"
    if($abcd=="none"){
    $this->form_validation->set_message('select_validate', 'Anda belum memilih status abstrak');
    return false;
    } else{
    // User picked something.
    return true;
    }
    }
 


}
