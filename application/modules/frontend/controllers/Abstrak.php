<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Abstrak extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model');
        if(($this->session->userdata('id_peserta') && $this->session->userdata('partisipan'))==""){
            redirect('error_page','refresh');
        }
        
    }
    
    function index(){
        $id_peserta = $this->session->userdata('id_peserta');
        $abstrak    = $this->Profil_model->listingUserAbstrak('tbl_abstrak.id_peserta', $id_peserta);
        $id_abstrak = $abstrak->id_abstrak;
        $komentar   = $this->Profil_model->komentarAbstrak($id_abstrak);
       
        if($komentar==""){
            echo "-";
        }


        
        if($abstrak==""){
            
            redirect('frontend/abstrak/add','refresh');
            
        }
        $data = array(
            'title'         => 'Abstrak',
            'abstrak'       => $abstrak,
            'komentar'      => $komentar,
			'isi'           => 'frontend/abstrak/abstrak'
			);
		$this->load->view('frontend/layout/wrapper', $data);
    }

    function add(){

        $id_peserta = $this->session->userdata('id_peserta');

        $subtema = $this->Crud_model->listing('tbl_subtema');
        $seminar = $this->Crud_model->listingOne('tbl_seminar', 'id_seminar', '1');

        if($seminar->is_submit_abstrak=="0"){
            echo "submit abstrak telah di tutup";
        }else{
            $valid = $this->form_validation;
        $valid->set_rules('judul', 'Judul', 'required',
                    array('required' => ' %s harus diisi'));
        $valid->set_rules('author', 'Author', 'required',
                    array('required' => ' %s harus diisi'));
        $valid->set_rules('institusi', 'Institusi', 'required',
                    array('required' => ' %s harus diisi'));
        $valid->set_rules('konten', 'Konten', 'required',
                    array('required' => ' %s harus diisi'));
        $valid->set_rules('keywords', 'Keywords', 'required',
                    array('required' => ' %s harus diisi'));
        $valid->set_rules('presenter', 'Presenter', 'required',
                    array('required' => ' %s harus diisi'));
        if($valid->run()===FALSE){
            $data = array(
                'title'         => 'Abstrak',
                'subtema'       => $subtema,
                'isi'           => 'frontend/abstrak/add'
                );
            $this->load->view('frontend/layout/wrapper', $data);
        }else{


            $i = $this->input;
			      $data = array(
                    'id_peserta'    => $id_peserta,
                    'id_subtema'    => $i->post('subtema'),
                    'judul'	        => $i->post('judul'),
                    'author'	    => $i->post('author'),
                    'institusi'	    => $i->post('institusi'),
                    'konten'	    => $i->post('konten'),
                    'keywords'	    => $i->post('keywords'),
                    'presenter'	    => $i->post('presenter')
          );
          $this->Crud_model->add('tbl_abstrak',$data);
          $this->session->set_flashdata('msg',' Abstrak telah ditambah');
          redirect(base_url('abstrak'),'refresh');
        }

        }

        

        
    }


    function edit($id_abstrak){

        $id_peserta = $this->session->userdata('id_peserta');

        $abstrak = $this->Crud_model->listingOne('tbl_abstrak', 'id_abstrak', $id_abstrak);
        $subtema = $this->Crud_model->listing('tbl_subtema');
        $seminar = $this->Crud_model->listingOne('tbl_seminar', 'id_seminar', '1');

        if($seminar->is_submit_abstrak=="0"){
            $data = array(
                'title' => 'Edit Abstrak',
                'pesan' => 'Submit abstrak telah ditutup',
                'isi'   => 'frontend/close'
            );
            $this->load->view('frontend/layout/wrapper',$data);
        }else{
            $valid = $this->form_validation;
            $valid->set_rules('judul', 'Judul', 'required',
                        array('required' => ' %s harus diisi'));
            $valid->set_rules('author', 'Author', 'required',
                        array('required' => ' %s harus diisi'));
            $valid->set_rules('institusi', 'Institusi', 'required',
                        array('required' => ' %s harus diisi'));
            $valid->set_rules('konten', 'Konten', 'required',
                        array('required' => ' %s harus diisi'));
            $valid->set_rules('keywords', 'Keywords', 'required',
                        array('required' => ' %s harus diisi'));
            $valid->set_rules('presenter', 'Presenter', 'required',
                        array('required' => ' %s harus diisi'));
            if($valid->run()===FALSE){
                $data = array(
                    'title'         => 'Abstrak',
                    'subtema'       => $subtema,
                    'abstrak'       => $abstrak,
                    'isi'           => 'frontend/abstrak/edit'
                    );
                $this->load->view('frontend/layout/wrapper', $data);
            }else{


                $i = $this->input;
                    $data = array(
                        'id_abstrak'    => $id_abstrak,    
                        'id_peserta'    => $id_peserta,
                        'id_subtema'    => $i->post('subtema'),
                        'judul'	        => $i->post('judul'),
                        'author'	    => $i->post('author'),
                        'institusi'	    => $i->post('institusi'),
                        'konten'	    => $i->post('konten'),
                        'keywords'	    => $i->post('keywords'),
                        'presenter'	    => $i->post('presenter')
            );
            $this->Crud_model->edit('tbl_abstrak','tbl_abstrak.id_abstrak',$id_abstrak,$data);
            $this->session->set_flashdata('msg',' Abstrak telah ditambah');
            redirect(base_url('abstrak'),'refresh');
            }

        }
        
    }

}

/* End of file Abstrak.php */
