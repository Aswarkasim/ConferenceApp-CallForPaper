<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Relat extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(($this->session->userdata('id_user') && $this->session->userdata('username')) == ""){
			redirect('login','refresh');
		}
    }
    

    function index()
    {
        $relatRead = $this->Crud_model->listing('tbl_relat');
        $data = array(
                'title'   => 'Manajemen relation',
                'relat' => $relatRead,
                'isi'     => 'admin/relat/list'
                );
        $this->load->view('admin/layout/wrapper', $data);
    }

  function add(){

    $valid = $this->form_validation;
    $valid->set_rules('nama_relat', 'Nama Instansi', 'required',
                array('required' => ' %s harus diisi'));
    // $valid->set_rules('relat', 'Sponsor', 'required',
    //             array('required' => ' %s harus diisi'));

    if($valid->run()){
        if(!empty($_FILES['logo']['name'])){
            $config['upload_path']   = './assets/uploads/images/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['max_size']      = '24000'; // KB 
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('logo')){
                $data = array(
                    'title'     => 'Manajemen Relasi',
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/relat/add'
                    );
                $this->load->view('admin/layout/wrapper', $data);
            }else{
               $upload_data = array('uploads' => $this->upload->data());

               $i = $this->input;
               $data = array(
                            'nama_relat'    => $i->post('nama_relat'),
                            'type'          => $i->post('type'),
                            'logo'          => $upload_data['uploads']['file_name']
                        );
                $this->Crud_model->add('tbl_relat',$data);
                $this->session->set_flashdata('msg','Data telah disimpan');
                
                redirect(base_url('admin/relat'),'refresh');
            }
        }
    }
    $data = array(
        'title'     => 'Manajemen Relasi',
        'isi'       => 'admin/relat/add'
        );
    $this->load->view('admin/layout/wrapper', $data);
    
}

function edit($id_relat){

    $relat = $this->Crud_model->listingOne('tbl_relat', 'id_relat',$id_relat);

    $valid = $this->form_validation;
    $valid->set_rules('nama_relat', 'Nama Sponsor', 'required',
                array('required' => ' %s harus diisi'));
    // $valid->set_rules('relat', 'Sponsor', 'required',
    //             array('required' => ' %s Sponsor harus diisi'));
    
    if($valid->run()){
        if(!empty($_FILES['logo']['name'])){
            $config['upload_path']   = './assets/uploads/images/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['max_size']      = '24000'; // KB 
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('logo')){
                $data = array(
                    'title'     => 'Edit '.$relat->nama_relat,
                    'relat'    => $relat,
                    'error'     => $this->upload->display_errors(),
                    'isi'       => 'admin/relat/edit'
                    );
                $this->load->view('admin/layout/wrapper', $data);
            }else{
                $upload_data = array('uploads' => $this->upload->data());

                $i = $this->input;
                $data = array(
                    'id_relat'      => $i->post('id_relat'),
                    'nama_relat'    => $i->post('nama_relat'),
                    'type'          => $i->post('type'),
                    'logo'          => $upload_data['uploads']['file_name']
                );
                if($relat->logo != ""){
                    unlink('./assets/uploads/images/'.$relat->logo);
                }
                $this->Crud_model->edit('tbl_relat','id_relat', $data['id_relat'],$data);
                $this->session->set_flashdata('msg','Data telah disimpan');
                
                redirect(base_url('admin/relat'),'refresh');
            }
        }else{
            $i = $this->input;
            $data = array(
                'id_relat'      => $i->post('id_relat'),
                'nama_relat'    => $i->post('nama_relat'),
                'type'          => $i->post('type')
            );
            $this->Crud_model->edit('tbl_relat','id_relat', $data['id_relat'],$data);
            $this->session->set_flashdata('msg','Data telah disimpan');
            redirect(base_url('admin/relat'),'refresh');
        }
    }
    $data = array(
        'title'     => 'Sponsor',
        'relat'    => $relat,
        'isi'       => 'admin/relat/edit'
        );
    $this->load->view('admin/layout/wrapper', $data);

}

function delete($id_relat){
    $relat = $this->Crud_model->listingOne('tbl_relat', 'id_relat',$id_relat);

    if($relat->logo != ""){
        unlink('./assets/uploads/relat/'.$relat->logo);
    }
    $this->Crud_model->delete('tbl_relat', 'id_relat',$id_relat);
    $this->session->flashdata('msg', 'sukses');
    
    redirect('admin/relat','refresh');
    
}

}

/* End of file Sponsor.php */
