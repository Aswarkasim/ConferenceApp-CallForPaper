<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('tgl_indo');
    

  }

  public function index()
  {

    $seminar = $this->Crud_model->listingOne('tbl_seminar', 'id_seminar', '1');
    $speaker = $this->Crud_model->listing('tbl_speaker');
    $subtema = $this->Crud_model->listing('tbl_subtema');
    $peserta = $this->Crud_model->listing('tbl_peserta');
    $presenter = $this->Crud_model->listingOneAll('tbl_peserta', 'partisipan', 'presenter');
    $s1 = $this->Crud_model->listingOneAll('tbl_peserta', 'partisipan', 'peserta_s1');
    $s2 = $this->Crud_model->listingOneAll('tbl_peserta', 'partisipan', 'peserta_s2');
    $abstrak = $this->Crud_model->listing('tbl_abstrak');
    $paper = $this->Crud_model->listing('tbl_paper');
    $relat = $this->Crud_model->listing('tbl_relat');
    $pricing = $this->Crud_model->listing('tbl_pricing');
    $tglPenting = $this->Crud_model->listing('tbl_tanggal_penting');

    $data = array(
                'title'     => 'Seminar Nasional',
                'seminar'   => $seminar,
                'speaker'   => $speaker,
                'subtema'   => $subtema,
                'peserta'   => $peserta,
                'presenter' => $presenter,
                'abstrak'   => $abstrak,
                's1'        => $s1,
                's2'        => $s2,
                'paper'     => $paper,
                'relat'     => $relat,
                'pricing'   => $pricing,
                'tgl_p'     => $tglPenting,
                'isi'       => 'frontend/home/home_wrapper',
               );
      $this->load->view('frontend/layout/wrapper', $data);
  }


  public function payment(){
    $valid = $this->form_validation;
    $valid->set_rules('id_peserta', 'ID Peserta', 'required',
                array('required' => ' %s harus diisi'));
    // $valid->set_rules('dari_bank', 'Dari Bank', 'required',
    //             array('required' => ' %s harus diisi'));
    // $valid->set_rules('no_rekening', 'No. Rekening', 'required',
    //             array('required' => ' %s harus diisi'));
    // $valid->set_rules('jumlah_bayar', 'Jumlah Bayar', 'required',
    //             array('required' => ' %s harus diisi'));

    if($valid->run()){
        if(!empty($_FILES['bukti']['name'])){
            $config['upload_path']   = './assets/uploads/images/payment/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['max_size']      = '24000'; // KB 
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('bukti')){
                
                $data = array(
                    'title'     => 'Upload Payment',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'frontend/home/payment'
                    );
                $this->load->view('frontend/layout/wrapper', $data);
            }else{

               $upload_data = array('uploads' => $this->upload->data());

               $i = $this->input;
               $data = array(
                            'id_peserta'                => $i->post('id_peserta'),
                            'metode'                    => $i->post('metode_pembayaran'),
                            'dari_bank'                 => $i->post('dari_bank'),
                            'tgl_pembayaran'            => $i->post('tgl_pembayaran'),
                            'nama_rekening'             => $i->post('nama_rekening'),
                            'no_rekening'               => $i->post('no_rekening'),
                            'jumlah_bayar'              => $i->post('jumlah_bayar'),
                            'metode'                    => $i->post('metode'),
                            'status_pembayaran'        => 'proses',
                            'bukti_pembayaran'          => $upload_data['uploads']['file_name'],
                            'keterangan'                => $i->post('keterangan')
                        );
                $this->Crud_model->add('tbl_konfirmasi_pembayaran',$data);
                $this->session->set_flashdata('msg', 'Data telah disimpan');
                
                redirect('cek_status','refresh');
            }
        }
    }
    $data = array(
        'title'     => 'Upload Payment',
        'isi'       => 'frontend/home/payment'
        );
    $this->load->view('frontend/layout/wrapper', $data);
  }

  function invoice($id_peserta){
      $this->load->model('Profil_model');
      
    $payment    = $this->Profil_model->listingUserPayment('tbl_konfirmasi_pembayaran','tbl_konfirmasi_pembayaran.id_peserta', $id_peserta);
    $seminar = $this->Crud_model->listingOne('tbl_seminar', 'id_seminar', '1');

    $data = array(
        'title'         => 'Payment',
        'payment'       => $payment,
        'seminar'       => $seminar
        );
    $this->load->view('frontend/payment/invoice', $data);
}

  public function download(){
    $file = $this->Crud_model->listing('tbl_file_pendukung');
    $data = array(
          'title'   => 'Dowload File',
          'file'    => $file,
          'isi'     => 'frontend/auth/download');
    $this->load->view('frontend/layout/wrapper', $data);
  }

  function download_file($id_paper){
    $this->load->helper('download');
    force_download('assets/uploads/files/'.$id_paper, NULL);
}

  public function cek_status(){
    $this->load->model('Profil_model');

    $valid = $this->form_validation;
    $valid->set_rules('id_peserta', 'ID Peserta', 'required',
                array('required' => ' %s harus diisi'));
    if($valid->run()===FALSE){
      $data = array(
            'title'   => 'Dowload File',
            'isi'     => 'frontend/home/cek_status');
      $this->load->view('frontend/layout/wrapper', $data);
    }else{
      $id_peserta = $this->input->post('id_peserta');
      $payment    = $this->Profil_model->listingUserPayment('tbl_konfirmasi_pembayaran','tbl_konfirmasi_pembayaran.id_peserta', $id_peserta);
      $pesertaDetail = $this->Crud_model->listingOne('tbl_peserta', 'id_peserta', $id_peserta);
      $content;

        if($payment){
            $content = '<div class="row mt10">
                      <div class="col-md-3">
                          <b>Nama</b><div class="pull-right">:</div>
                      </div>
                      <div class="col-md-9 pl0">
                          '.$payment->nama_no_title.'
                      </div>
                  </div>

                  <div class="row mt10">
                      <div class="col-md-3">
                          <b>Tanggal </b><div class="pull-right">:</div>
                      </div>
                      <div class="col-md-9 pl0">
                          '.$payment->tgl_pembayaran.'
                      </div>
                  </div>

                  <div class="row mt10">
                      <div class="col-md-3">
                          <b>Bank Anda</b><div class="pull-right">:</div>
                      </div>
                      <div class="col-md-9 pl0">
                          '.$payment->dari_bank.'
                      </div>
                  </div>

                  <div class="row mt10">
                      <div class="col-md-3">
                          <b>No. Rek. Anda</b><div class="pull-right">:</div>
                      </div>
                      <div class="col-md-9 pl0">
                          '.$payment->no_rekening.'
                      </div>
                  </div>

                  <div class="row mt10">
                      <div class="col-md-3">
                          <b>Jumlah Bayar</b><div class="pull-right">:</div>
                      </div>
                      <div class="col-md-9 pl0">
                          '.$payment->jumlah_bayar.'
                      </div>
                  </div>

                  <div class="row mt10">
                      <div class="col-md-3">
                          <b>Informasi Lain</b><div class="pull-right">:</div>
                      </div>
                      <div class="col-md-9 pl0">
                          '.$payment->keterangan.'
                      </div>
                  </div>



                  <div class="row mt10">
                      <div class="col-md-3">
                          <b>Invoice</b><div class="pull-right">:</div>
                      </div>
                      <div class="col-md-9 pl0">
                          <a href="'.base_url('frontend/home/invoice/').$payment->id_peserta.'" target="_blank"><i class="fa fa-print"></i> Cetak Invoice</a>
                      </div>
                  </div>';
        }else if($pesertaDetail){
            $tagihan;
            if($pesertaDetail->partisipan=='peserta_s1'){
                $tagihan = 'Rp. 75.000';
            }else if($pesertaDetail->partisipan=='peserta_s2'){
                $tagihan = 'Rp. 150.000';
            }
            $content = '<div class="row mt10">
                            <div class="col-md-3">
                                <b>Nama</b><div class="pull-right">:</div>
                            </div>
                            <div class="col-md-9 pl0">
                                '.$pesertaDetail->nama_no_title.'
                            </div>
                        </div>
                        <div class="row mt10">
                            <div class="col-md-3">
                                <b>Jenis Partisipan</b><div class="pull-right">:</div>
                            </div>
                            <div class="col-md-9 pl0">
                                '.$pesertaDetail->partisipan.'
                            </div>
                        </div>
                        <div class="row mt10">
                            <div class="col-md-3">
                                <b>Tagihan</b><div class="pull-right">:</div>
                            </div>
                            <div class="col-md-9 pl0">
                                '.$tagihan.'
                            </div>
                        </div>';
        }else{
            $content = '<br><span class="alert alert-info">ID <strong>'.$id_peserta.'</strong> peserta tidak ditemukan</span>';
        }

      $data = array(
            'title'   => 'Dowload File',
            'cek'     => $content,
            'isi'     => 'frontend/home/cek_status');
      $this->load->view('frontend/layout/wrapper', $data);
    }
  }


}
