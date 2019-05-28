<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model');
        
    }
    
   public function index(){
        $id_peserta = $this->session->userdata('id_peserta');
        $payment    = $this->Profil_model->listingUserPayment('tbl_konfirmasi_pembayaran','tbl_konfirmasi_pembayaran.id_peserta', $id_peserta);

        
       
        if($payment==""){
            
            redirect('payment/add','refresh');
            
        }
        
        $data = array(
            'title'         => 'Payment',
            'payment'       => $payment,
			'isi'           => 'frontend/payment/payment'
			);
		$this->load->view('frontend/layout/wrapper', $data);
    }

    function add(){
            $id_peserta = $this->session->userdata('id_peserta');
            $file = $this->input->post('bukti');
            
    
            $valid = $this->form_validation;
            $valid->set_rules('tgl_pembayaran', 'Tanggal Pembayaran', 'required',
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
                            'isi'       => 'frontend/payment/add'
                            );
                        $this->load->view('frontend/layout/wrapper', $data);
                    }else{

                       $upload_data = array('uploads' => $this->upload->data());
    
                       $i = $this->input;
                       $data = array(
                                    'id_peserta'                => $id_peserta,
                                    'metode'                    => $i->post('metode_pembayaran'),
                                    'dari_bank'                 => $i->post('dari_bank'),
                                    'tgl_pembayaran'            => $i->post('tgl_pembayaran'),
                                    'nama_rekening'             => $i->post('nama_rekening'),
                                    'no_rekening'               => $i->post('no_rekening'),
                                    'jumlah_bayar'              => $i->post('jumlah_bayar'),
                                    'status_pemmbayaran'        => 'proses',
                                    'bukti_pembayaran'          => $upload_data['uploads']['file_name'],
                                    'keterangan'                => $i->post('keterangan')
                                );
                        $this->Crud_model->add('tbl_konfirmasi_pembayaran',$data);
                        $this->session->set_flashdata('msg', 'Data telah disimpan');
                        
                        redirect('payment','refresh');
                    }
                }
            }
            $data = array(
                'title'     => 'Payment',
                'isi'       => 'frontend/payment/add'
                );
            $this->load->view('frontend/layout/wrapper', $data);

    }


    function edit($id_pembayaran){
        $id_peserta = $this->session->userdata('id_peserta');
        $payment = $this->Crud_model->listingOne('tbl_konfirmasi_pembayaran', 'id_pembayaran',$id_pembayaran);

        $valid = $this->form_validation;
        $valid->set_rules('tgl_pembayaran', 'Tanggal Pembayaran', 'required',
                        array('required' => ' %s harus diisi'));
        // $valid->set_rules('file', 'File', 'required',
        //             array('required' => ' %s File harus diisi'));
        
        if($valid->run()){
            if(!empty($_FILES['bukti_pembayaran']['name'])){
                $config['upload_path']   = './assets/uploads/images/payment/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                //$config['max_size']      = '240000'; // KB 
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('bukti_pembayaran')){
                    $data = array(
                        'title'     => 'Payment',
                        'payment'    => $payment,
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'frontend/payment/edit'
                        );
                    $this->load->view('admin/layout/wrapper', $data);
                }else{
                    $upload_data = array('uploads' => $this->upload->data());
    
                    $i = $this->input;
                    $data = array(
                        'id_pembayaran'             => $id_pembayaran,
                        'id_peserta'                => $id_peserta,
                        'metode'                    => $i->post('metode_pembayaran'),
                        'dari_bank'                 => $i->post('dari_bank'),
                        'nama_rekening'             => $i->post('nama_rekening'),
                        'tgl_pembayaran'            => $i->post('tgl_pembayaran'),
                        'no_rekening'               => $i->post('no_rekening'),
                        'jumlah_bayar'              => $i->post('jumlah_bayar'),
                        'status_pembayaran'        => 'proses',
                        'bukti_pembayaran'          => $upload_data['uploads']['file_name'],
                        'keterangan'                => $i->post('keterangan')
                    );
                    if($payment->bukti_pembayaran != ""){
                        unlink('./assets/uploads/images/payment/'.$payment->bukti_pembayaran);
                    }
                    $this->Crud_model->edit('tbl_konfirmasi_pembayaran','id_pembayaran', $data['id_pembayaran'],$data);
                    $this->session->set_flashdata('msg','Data telah disimpan');
                    
                    redirect(base_url('payment'),'refresh');
                }
            }else{
                $i = $this->input;
                $data = array(
                    'id_pembayaran'             => $id_pembayaran,
                    'id_peserta'                => $id_peserta,
                    'metode'                    => $i->post('metode_pembayaran'),
                    'dari_bank'                 => $i->post('dari_bank'),
                    'nama_rekening'             => $i->post('nama_rekening'),
                    'tgl_pembayaran'            => $i->post('tgl_pembayaran'),
                    'no_rekening'               => $i->post('no_rekening'),
                    'status_pemmbayaran'        => 'proses',
                    'jumlah_bayar'              => $i->post('jumlah_bayar'),
                    'keterangan'                => $i->post('keterangan')
                );
                $this->Crud_model->edit('tbl_konfirmasi_pembayaran','id_pembayaran', $data['id_pembayaran'],$data);
                $this->session->set_flashdata('msg','Data telah disimpan');
                redirect(base_url('payment'),'refresh');
            }
        }
        $data = array(
            'title'     => 'Payment',
            'payment'   => $payment,
            'isi'       => 'frontend/payment/edit'
            );
        $this->load->view('frontend/layout/wrapper', $data);

    }

    function invoice(){
        $id_peserta = $this->session->userdata('id_peserta');
        $payment    = $this->Profil_model->listingUserPayment('tbl_konfirmasi_pembayaran','tbl_konfirmasi_pembayaran.id_peserta', $id_peserta);
        $seminar = $this->Crud_model->listingOne('tbl_seminar', 'id_seminar', '1');

        $data = array(
            'title'         => 'Payment',
            'payment'       => $payment,
            'seminar'       => $seminar
			);
		$this->load->view('frontend/payment/invoice', $data);
    }
    

}

