<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konfirmasi_model');

        if(($this->session->userdata('id_user') && $this->session->userdata('username')) == ""){
			redirect('login','refresh');
		}
        
        
    }
    

    public function index()
    {
        $pembayaran = $this->Konfirmasi_model->listingKonf('tbl_konfirmasi_pembayaran');
        $not_read = $this->Crud_model->listingOneAll('tbl_konfirmasi_pembayaran', 'is_read', '0');
        $data = array(
                    'title'         => 'Konfirmasi Pembayaran',
                    'not_read'      => count($not_read),
                    'pembayaran'    => $pembayaran,
                    'isi'           => 'admin/konfirmasi/list', 
                );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
        
    }

    

    function ubahKonf($id_peserta){
       
        $data = array(
                'is_read'           => '1',
                'status_pembayaran' => $this->input->post('status_pembayaran')
            );
        $this->Crud_model->edit('tbl_konfirmasi_pembayaran', 'id_pembayaran', $id_peserta, $data);
        
        redirect('admin/konfirmasi','refresh');
    }

    function delete($id_pembayaran){
        $this->Crud_model->delete('tbl_konfirmasi_pembayaran', 'id_pembayaran',$id_pembayaran);
        $this->session->flashdata('msg', 'sukses');
        
        redirect('admin/konfirmasi','refresh');
        
    }

}

/* End of file Konfirmasi.php */
