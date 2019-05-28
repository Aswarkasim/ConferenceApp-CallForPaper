<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Speaker extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if(($this->session->userdata('id_user') && $this->session->userdata('username')) == ""){
        redirect('login','refresh');
    }
  }

  function index()
  {
    $speakerRead = $this->Crud_model->listing('tbl_speaker');
    $data = array(
              'title'   => 'Manajemen Pemateri',
              'speaker' => $speakerRead,
              'isi'     => 'admin/speaker/list'
            );
    $this->load->view('admin/layout/wrapper', $data);
  }

  function add(){

    $valid = $this->form_validation;
    $valid->set_rules('nama_speaker', 'Nama Lengkap', 'required',
                array('required' => ' %s harus diisi'));
    // $valid->set_rules('speaker', 'Speaker', 'required',
    //             array('required' => ' %s harus diisi'));

    if($valid->run()){
        if(!empty($_FILES['foto']['name'])){
            $config['upload_path']   = './assets/uploads/images/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
           // $config['max_size']      = '240000'; // KB 
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('foto')){
                $data = array(
                    'title'     => 'Manajemen Speaker',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/speaker/add'
                    );
                $this->load->view('admin/layout/wrapper', $data);
            }else{
               $upload_data = array('uploads' => $this->upload->data());

               $i = $this->input;
               $data = array(
                            'nama_speaker'  => $i->post('nama_speaker'),
                            'institusi'     => $i->post('institusi'),
                            'jenis_speaker' => $i->post('jenis_speaker'),
                            'foto'          => $upload_data['uploads']['file_name'],
                            'deskripsi'     => $i->post('deskripsi')
                        );
                $this->Crud_model->add('tbl_speaker',$data);
                $this->session->set_flashdata('msg','Data telah disimpan');
                
                redirect(base_url('admin/speaker'),'refresh');
            }
        }
    }
    $data = array(
        'title'     => 'Speaker Pendukung',
        'isi'       => 'admin/speaker/add'
        );
    $this->load->view('admin/layout/wrapper', $data);
    
}

function edit($id_speaker){

    $speaker = $this->Crud_model->listingOne('tbl_speaker', 'id_speaker',$id_speaker);

    $valid = $this->form_validation;
    $valid->set_rules('nama_speaker', 'Nama Speaker', 'required',
                array('required' => ' %s harus diisi'));
    // $valid->set_rules('speaker', 'Speaker', 'required',
    //             array('required' => ' %s Speaker harus diisi'));
    
    if($valid->run()){
        if(!empty($_FILES['foto']['name'])){
            $config['upload_path']   = './assets/uploads/images/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            //$config['max_size']      = '240000'; // KB 
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('foto')){
                $data = array(
                    'title'     => 'Speaker',
                    'speaker'    => $speaker,
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/speaker/edit'
                    );
                $this->load->view('admin/layout/wrapper', $data);
            }else{
                $upload_data = array('uploads' => $this->upload->data());

                $i = $this->input;
                $data = array(
                    'id_speaker'    => $i->post('id_speaker'),
                    'nama_speaker'  => $i->post('nama_speaker'),
                    'institusi'     => $i->post('institusi'),
                    'jenis_speaker' => $i->post('jenis_speaker'),
                    'foto'          => $upload_data['uploads']['file_name'],
                    'deskripsi'     => $i->post('deskripsi')
                        );
                if($speaker->foto != ""){
                    unlink('./assets/uploads/images/'.$speaker->foto);
                }
                $this->Crud_model->edit('tbl_speaker','id_speaker', $data['id_speaker'],$data);
                $this->session->set_flashdata('msg','Data telah disimpan');
                
                redirect(base_url('admin/speaker'),'refresh');
            }
        }else{
            $i = $this->input;
            $data = array(
                'id_speaker'    => $i->post('id_speaker'),
                'nama_speaker'  => $i->post('nama_speaker'),
                'institusi'     => $i->post('institusi'),
                'jenis_speaker' => $i->post('jenis_speaker'),
                'deskripsi'     => $i->post('deskripsi')
                    );
            $this->Crud_model->edit('tbl_speaker','id_speaker', $data['id_speaker'],$data);
            $this->session->set_flashdata('msg','Data telah disimpan');
            redirect(base_url('admin/speaker'),'refresh');
        }
    }
    $data = array(
        'title'     => 'Speaker',
        'speaker'    => $speaker,
        'isi'       => 'admin/speaker/edit'
        );
    $this->load->view('admin/layout/wrapper', $data);

}

function delete($id_speaker){
    $speaker = $this->Crud_model->listingOne('tbl_speaker', 'id_speaker',$id_speaker);

    if($speaker->foto != ""){
        unlink('./assets/uploads/speakers/'.$speaker->foto);
    }
    $this->Crud_model->delete('tbl_speaker', 'id_speaker',$id_speaker);
    $this->session->flashdata('msg', 'sukses');
    
    redirect('admin/speaker','refresh');
    
}

}
