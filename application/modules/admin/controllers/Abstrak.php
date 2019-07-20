<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Abstrak extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Abstrak_model');

        if (($this->session->userdata('id_user') && $this->session->userdata('username')) == "") {
            redirect('login', 'refresh');
        }
    }


    public function index()
    {
        $abstrak = $this->Abstrak_model->listing('tbl_abstrak');
        $not_read = $this->Crud_model->listingOneAll('tbl_abstrak', 'is_read', '0');
        $data = array(
            'title'         => 'Abstrak',
            'not_read'      => count($not_read),
            'abstrak'    => $abstrak,
            'isi'           => 'admin/abstrak/list',
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function detail($id_abstrak)
    {
        $abstrak_detail = $this->Abstrak_model->listingOne('tbl_abstrak', 'id_abstrak', $id_abstrak);

        $data = array(
            'title'         => 'Abstrak ' . $abstrak_detail->nama_peserta,
            'abstrak'       => $abstrak_detail,
            'isi'           => 'admin/abstrak/detail',
        );
    }


    function editStat($id_abstrak)
    {
        $id_peserta = $this->input->post('id_peserta');

        $valid = $this->form_validation->set_rules(
            'is_accept',
            'Status',
            'required',
            array('required' => 'Status belum dipilih')
        );

        $data = array(
            'is_read'   => '1',
            'is_accept' => $this->input->post('is_accept'),
            'komentar_reviewer' => $this->input->post('komentar')
        );
        $this->Crud_model->edit('tbl_abstrak', 'id_abstrak', $id_abstrak, $data);
        redirect('admin/peserta/pesertaDetail/' . $id_peserta, 'refresh');
    }



    function delete($id_abstrak)
    {
        $this->Crud_model->delete('tbl_abstrak', 'id_abstrak', $id_abstrak);
        $this->session->flashdata('msg', 'sukses');

        redirect('admin/abtrak', 'refresh');
    }
}

/* End of file Abstrak.php */
