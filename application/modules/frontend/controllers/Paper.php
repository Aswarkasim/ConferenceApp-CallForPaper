<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Paper extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model');

        if (($this->session->userdata('id_peserta')) == "") {
            redirect('error_page', 'refresh');
        }
    }


    function index()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        $abstrak    = $this->Profil_model->listingUserAbstrak('tbl_abstrak.id_peserta', $id_peserta);
        $paper      = $this->Profil_model->listingUserPaper('tbl_paper.id_peserta', $id_peserta);


        if ($paper == "") {

            redirect('frontend/paper/add', 'refresh');
        } else {
            $data = array(
                'title'         => 'Paper',
                'abstrak'       => $abstrak,
                'paper'         => $paper,
                'isi'           => 'frontend/paper/list'
            );
            $this->load->view('frontend/layout/wrapper', $data);
        }
    }

    function add()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        $abstrak = $this->Crud_model->listingOne('tbl_abstrak', 'tbl_abstrak.id_peserta', $id_peserta);
        $seminar = $this->Crud_model->listingOne('tbl_seminar', 'id_seminar', '1');

        if ($seminar->is_submit_paper == "0") {
            $data = array(
                'title'         => 'Abstrak',
                'pesan'         => 'Submit paper telah ditutup',
                'isi'           => 'frontend/close'
            );
            $this->load->view('frontend/layout/wrapper', $data);
        } else {

            $valid = $this->form_validation;
            $valid->set_rules(
                'keterangan',
                'Keterangan',
                'required',
                array('required' => ' %s harus diisi')
            );
            // $valid->set_rules('file', 'File', 'required',
            //             array('required' => ' %s harus diisi'));

            if ($valid->run()) {
                if (!empty($_FILES['file_paper']['name'])) {
                    $config['upload_path']   = './assets/uploads/files/';
                    $config['allowed_types'] = 'gif|jpg|png|svg|jpeg|doc|docx|pdf|xls|xlsx';
                    $config['max_size']      = '24000'; // KB 
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('file_paper')) {
                        $data = array(
                            'title'     => 'Upload Paper',
                            'error'     => $this->upload->display_errors(),
                            'isi'       => 'frontend/paper/add'
                        );
                        $this->load->view('frontend/layout/wrapper', $data);
                    } else {
                        $upload_data = array('uploads' => $this->upload->data());

                        $i = $this->input;
                        $data = array(
                            'id_peserta'    => $id_peserta,
                            'id_abstrak'    => $abstrak->id_abstrak,
                            'id_subtema'    => $abstrak->id_subtema,
                            'is_read'       => 0,
                            'file'          => $upload_data['uploads']['file_name'],
                            'keterangan'    => $i->post('keterangan')
                        );
                        $this->Crud_model->add('tbl_paper', $data);
                        $this->session->set_flashdata(
                            'msg',
                            '<div class="alert alert-success">
                                Data telah disimpan
                            </div>'
                        );

                        redirect('paper', 'refresh');
                    }
                }
            }
            $data = array(
                'title'     => 'File Pendukung',
                'isi'       => 'frontend/paper/add'
            );
            $this->load->view('frontend/layout/wrapper', $data);
        }
    }


    function edit($id_paper)
    {
        $id_peserta = $this->session->userdata('id_peserta');

        $paper = $this->Crud_model->listingOne('tbl_paper', 'tbl_paper.id_paper', $id_paper);
        $abstrak = $this->Crud_model->listingOne('tbl_abstrak', 'tbl_abstrak.id_peserta', $id_peserta);
        $seminar = $this->Crud_model->listingOne('tbl_seminar', 'id_seminar', '1');

        if ($seminar->is_submit_paper == "0") {
            $data = array(
                'title'         => 'Abstrak',
                'pesan'         => 'Submit paper telah ditutup',
                'isi'           => 'frontend/close'
            );
            $this->load->view('frontend/layout/wrapper', $data);
        } else {

            $valid = $this->form_validation;
            $valid->set_rules(
                'keterangan',
                'Keterangan',
                'required',
                array('required' => ' %s harus diisi')
            );
            // $valid->set_rules('file', 'File', 'required',
            //             array('required' => ' %s harus diisi'));

            if ($valid->run()) {
                if (!empty($_FILES['file_paper']['name'])) {
                    $config['upload_path']   = './assets/uploads/files/';
                    $config['allowed_types'] = 'gif|jpg|png|svg|jpeg|doc|docx|pdf|xls|xlsx';
                    $config['max_size']      = '24000'; // KB 
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('file_paper')) {
                        $data = array(
                            'title'     => 'Edit Paper',
                            'paper'     => $paper,
                            'error'     => $this->upload->display_errors(),
                            'isi'       => 'frontend/paper/add'
                        );
                        $this->load->view('frontend/layout/wrapper', $data);
                    } else {

                        if ($paper->files != "") {
                            unlink('assets/uploads/files/' . $paper->files);
                        }

                        $upload_data = array('uploads' => $this->upload->data());

                        $i = $this->input;
                        $data = array(
                            'id_paper'      => $id_paper,
                            'id_peserta'    => $id_peserta,
                            'id_subtema'    => $abstrak->id_subtema,
                            'file'          => $upload_data['uploads']['file_name'],
                            'is_read'       => 0,
                            'keterangan'    => $i->post('keterangan')
                        );
                        $this->Crud_model->edit('tbl_paper', 'id_paper', $id_paper, $data);
                        $this->session->set_flashdata(
                            'msg',
                            '<div class="alert alert-success">
                                Data telah disimpan
                            </div>'
                        );
                        if ($paper->file != "") {
                            unlink('./assets/uploads/files/' . $paper->file);
                        }
                        redirect('paper', 'refresh');
                    }
                }
            }
            $data = array(
                'title'     => 'Edit Paper',
                'paper'     => $paper,
                'isi'       => 'frontend/paper/edit'
            );
            $this->load->view('frontend/layout/wrapper', $data);
        }
    }
}

/* End of file Paper.php */
