<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rev/Beranda_model');
        
        if(($this->session->userdata('id_reviewer') && $this->session->userdata('nama_reviewer'))==""){
            redirect('error_page','refresh');
        }
        
    }
    
    // =============Abstrak===========//
    public function index()
    {
        
        $id_reviewer = $this->session->userdata('id_reviewer');
        $abstrak    = $this->Beranda_model->listingAbstrak($id_reviewer,'0');
        //$paper    = $this->Crud_model->listingOne('tbl_paper','tbl_paper.id_reviewer', $id_reviewer);
           
        $data = array(
            'title'         => 'Register',
            'abstrak'       => $abstrak,
            //'paper'         => $paper,
			'isi'           => 'rev/beranda/abstrak_list'
			);
		$this->load->view('frontend/layout/wrapper', $data);
    }

    public function abstrakDone()
    {
        
        $id_reviewer = $this->session->userdata('id_reviewer');
        $abstrak    = $this->Beranda_model->listingAbstrak($id_reviewer,'1');
          
        $data = array(
            'title'         => 'Register',
            'abstrak'       => $abstrak,
            //'paper'         => $paper,
			'isi'           => 'rev/beranda/abstrak_list'
			);
		$this->load->view('frontend/layout/wrapper', $data);
    }

    function detailAbstrak($id_abstrak){
        $abstrak    = $this->Beranda_model->detailAbstrak($id_abstrak);
        $komentar   = $this->Beranda_model->komentarAbstrak($id_abstrak);

        $abcd = $this->input->post('is_accept');
        $valid = $this->form_validation->set_rules('is_accept', 'Status', 'required|callback_select_validate');

        if($komentar==""){
            echo "-";
        }

        if($valid->run()===FALSE){
            $data = array(
                'title'         => 'Register',
                'abstrak'       => $abstrak,
                'komentar'      => $komentar,
                'isi'           => 'rev/beranda/detail_abstrak'
                );
            $this->load->view('frontend/layout/wrapper', $data);
        }else{

            $data = array(
                'is_read'   => '1',
                'is_accept' => $this->input->post('is_accept')
            );

            $komentar = $this->input->post('komentar'); 
            if($komentar){
                $data_komen = array(
                    'komentar'      => $this->input->post('komentar'),
                    'id_abstrak'    => $id_abstrak
                );
                $this->Crud_model->add('tbl_komentar_abstrak', $data_komen);
            }
            $this->Crud_model->edit('tbl_abstrak', 'id_abstrak', $id_abstrak, $data);
            redirect('rev/beranda/detailAbstrak/'.$id_abstrak,'refresh');
            
        }
    }
    // ====End Abstrak=======

    // Below function is called for validating select option field.
    function select_validate($abcd)
    {
        // 'none' is the first option that is default "-------Choose City-------"
        if($abcd=="none"){
        $this->form_validation->set_message('select_validate', 'Anda belum memilih status \\');
        return false;
        } else{
        // User picked something.
        return true;
        }
    }

    // ======= Paper =======
    function paper(){

        $id_reviewer = $this->session->userdata('id_reviewer');
        $paper    = $this->Beranda_model->listingPaper($id_reviewer,'0');

        $data = array(
            'title'         => 'Register',
             'paper'       => $paper,
            // 'komentar'      => $komentar,
            'isi'           => 'rev/beranda/paper_list'
            );
        $this->load->view('frontend/layout/wrapper', $data);
    }

    function paperDone(){

        $id_reviewer = $this->session->userdata('id_reviewer');
        $paper    = $this->Beranda_model->listingPaper($id_reviewer,'1');

        $data = array(
            'title'         => 'Register',
             'paper'       => $paper,
            // 'komentar'      => $komentar,
            'isi'           => 'rev/beranda/paper_list'
            );
        $this->load->view('frontend/layout/wrapper', $data);
    }


    function detailPaper($id_paper){
        $paper    = $this->Beranda_model->detailPaper($id_paper);
        $komentar   = $this->Beranda_model->komentarPaper($id_paper);

        $abcd = $this->input->post('is_accept');
        $valid = $this->form_validation->set_rules('is_accept', 'Status', 'required|callback_select_validate');

        if($komentar==""){
            echo "-";
        }

        if($valid->run()===FALSE){
            $data = array(
                'title'         => 'Register',
                'paper'       => $paper,
                'komentar'      => $komentar,
                'isi'           => 'rev/beranda/detail_paper'
                );
            $this->load->view('frontend/layout/wrapper', $data);
        }else{

            $data = array(
                'is_read'   => '1',
                'is_accept' => $this->input->post('is_accept')
            );

            $komentar = $this->input->post('komentar'); 
            if($komentar){
                $data_komen = array(
                    'komentar'      => $this->input->post('komentar'),
                    'id_paper'    => $id_paper
                );
                $this->Crud_model->add('tbl_komentar_paper', $data_komen);
            }
            $this->Crud_model->edit('tbl_paper', 'id_paper', $id_paper, $data);
             
            redirect('rev/beranda/detailPaper/'.$id_paper,'refresh');
            
        }
    }

    function download($id_paper){
        $this->load->helper('download');
        force_download('assets/uploads/files/'.$id_paper, NULL);
    }
    
    

}
