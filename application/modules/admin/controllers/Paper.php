<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Paper extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Paper_model');

        if (($this->session->userdata('id_user') && $this->session->userdata('username')) == "") {
            redirect('login', 'refresh');
        }
    }

    public function index()
    {
        $paper = $this->Paper_model->listing('tbl_paper');
        $not_read = $this->Crud_model->listingOneAll('tbl_paper', 'is_read', '0');
        $data = array(
            'title'         => 'Paper',
            'not_read'      => count($not_read),
            'paper'         => $paper,
            'isi'           => 'admin/paper/list',
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function detail($id_paper)
    {
        $paper_detail = $this->Paper_model->listingOne('tbl_paper', 'id_paper', $id_paper);

        $abcd = $this->input->post('is_accept');
        $valid = $this->form_validation->set_rules('is_accept', 'Status', 'required|callback_select_validate');

        if ($valid->run() === FALSE) {
            $data = array(
                'title'         => 'Paper oleh ' . $paper_detail->nama_peserta,
                'paper'         => $paper_detail,
                'isi'           => 'admin/paper/detail',
            );
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $data = array(
                'is_read'   => '1',
                'is_accept' => $this->input->post('is_accept')
            );
            $this->Crud_model->edit('tbl_paper', 'tbl_paper.id_paper', $id_paper, $data);


            $id_paper = $this->input->post('id_paper');

            if (isset($_POST['simpan'])) {
                redirect('admin/paper/detail/' . $id_paper, 'refresh');
            } else {
                redirect('admin/paper', 'refresh');
            }
        }
    }


    // Below function is called for validating select option field.
    function select_validate($abcd)
    {
        // 'none' is the first option that is default "-------Choose City-------"
        if ($abcd == "none") {
            $this->form_validation->set_message('select_validate', 'Anda belum memilih status Paper');
            return false;
        } else {
            // User picked something.
            return true;
        }
    }
}
