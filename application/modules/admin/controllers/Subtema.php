<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Subtema extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(($this->session->userdata('id_user') && $this->session->userdata('username')) == ""){
			redirect('login','refresh');
		}
    }
    

    function index()
    {
        $subtema = $this->Crud_model->listingSubtema();
        $reviewer = $this->Crud_model->listing('tbl_reviewer');

        $valid = $this->form_validation;
        $valid->set_rules('subtema', 'Subtema', 'required',
                    array('required' => ' %s File harus diisi'));

        
        if($valid->run()===FALSE){
            $data = array(
                'title'         => 'Manajemen Subtema',
                'subtema'       => $subtema,
                'reviewer'       => $reviewer,
                'isi'           => 'admin/subtema/list'
                );
            $this->load->view('admin/layout/wrapper', $data);
        }else{
            $i = $this->input;
			$data = array(	
                            'subtema'	    => $i->post('subtema'),
							'deskripsi' 	=> $i->post('deskripsi'),
							'id_reviewer' 	=> $i->post('id_reviewer'),
							'icon' 	        => $i->post('icon')
			);
			$this->Crud_model->add('tbl_subtema',$data);
			$this->session->set_flashdata('msg',' Data telah ditambah');
			redirect(base_url('admin/subtema'),'refresh');
        }
        
    }

    function edit($id_subtema)
    {
        $subtema = $this->Crud_model->listingOne('tbl_subtema', 'id_subtema', $id_subtema);
        $reviewer = $this->Crud_model->listing('tbl_reviewer');

        $valid = $this->form_validation;
        $valid->set_rules('subtema', 'Subtema', 'required',
                    array('required' => ' %s harus diisi'));

        
        if($valid->run()===FALSE){
            $data = array(
                'title'         => 'Edit Subtema '.$subtema->subtema,
                'subtema'       => $subtema,
                'reviewer'       => $reviewer,
                'isi'           => 'admin/subtema/edit'
                );
            $this->load->view('admin/layout/wrapper', $data);
        }else{
            $i = $this->input;
			$data = array(	
                            'id_subtema'	    => $subtema->id_subtema,
                            'subtema'	    => $i->post('subtema'),
                            'id_reviewer' 	=> $i->post('id_reviewer'),
							'deskripsi' 	=> $i->post('deskripsi'),
							'icon' 	        => $i->post('icon')
			);
			$this->Crud_model->edit('tbl_subtema','id_subtema', $data['id_subtema'], $data);
			$this->session->set_flashdata('msg',' Data telah ditambah');
			redirect(base_url('admin/subtema'),'refresh');
        }
        
    }

    function delete($id_subtema){
        $subtema = $this->Crud_model->listingOne('tbl_subtema', 'id_subtema',$id_subtema);

        $this->Crud_model->delete('tbl_subtema', 'id_subtema',$id_subtema);
        $this->session->flashdata('msg', 'Data berhasil dihapus');
        
        redirect('admin/subtema','refresh');
        
    }

}
