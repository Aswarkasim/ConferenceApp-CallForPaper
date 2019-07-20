<?php


defined('BASEPATH') or exit('No direct script access allowed');

class File_pendukung extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (($this->session->userdata('id_user') && $this->session->userdata('username')) == "") {
            redirect('login', 'refresh');
        }
    }

    function index()
    {
        $file = $this->Crud_model->listing('tbl_file_pendukung');
        $data = array(
            'title'   => 'File Pendukung',
            'file'    => $file,
            'isi'     => 'admin/file_pendukung/list'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    function add()
    {
        $valid = $this->form_validation;
        $valid->set_rules(
            'nama_file',
            'Nama File',
            'required',
            array('required' => ' %s File harus diisi')
        );
        // $valid->set_rules('file', 'File', 'required',
        //             array('required' => ' %s harus diisi'));

        if ($valid->run()) {
            if (!empty($_FILES['file']['name'])) {
                $config['upload_path']   = './assets/uploads/files/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg|doc|docx|pdf|xls|xlsx';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('file')) {
                    $data = array(
                        'title'     => 'File Pendukung',
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'admin/file_pendukung/add'
                    );
                    $this->load->view('admin/layout/wrapper', $data);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;
                    $data = array(
                        'nama_file' => $i->post('nama_file'),
                        'is_parent' => $i->post('is_parent'),
                        'file'      => $upload_data['uploads']['file_name'],
                        'deskripsi' => $i->post('deskripsi')
                    );
                    $this->Crud_model->add('tbl_file_pendukung', $data);
                    $this->session->set_flashdata(
                        'msg',
                        '<div class="alert alert-success">
                                Data telah disimpan
                            </div>'
                    );

                    redirect(base_url('admin/file_pendukung'), 'refresh');
                }
            } else {
                $i = $this->input;
                $data = array(
                    'nama_file' => $i->post('nama_file'),
                    'is_parent' => $i->post('is_parent'),
                    'deskripsi' => $i->post('deskripsi')
                );
                $this->Crud_model->add('tbl_file_pendukung', $data);
                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-success">
                                Data telah disimpan
                            </div>'
                );

                redirect(base_url('admin/file_pendukung'), 'refresh');
            }
        }
        $data = array(
            'title'     => 'File Pendukung',
            'isi'       => 'admin/file_pendukung/add'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    function edit($id_file)
    {

        $file = $this->Crud_model->listingOne('tbl_file_pendukung', 'id_file', $id_file);

        $valid = $this->form_validation;
        $valid->set_rules(
            'nama_file',
            'Nama File',
            'required',
            array('required' => ' %s File harus diisi')
        );
        // $valid->set_rules('file', 'File', 'required',
        //             array('required' => ' %s File harus diisi'));

        if ($valid->run()) {
            if (!empty($_FILES['file']['name'])) {
                $config['upload_path']   = './assets/uploads/files/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg|doc|docx|pdf|xls|xlsx';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('file')) {
                    $data = array(
                        'title'     => 'File Pendukung',
                        'file_p'    => $file,
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'admin/file_pendukung/edit'
                    );
                    $this->load->view('admin/layout/wrapper', $data);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;
                    $data = array(
                        'id_file'   => $i->post('id_file'),
                        'nama_file' => $i->post('nama_file'),
                        'is_parent' => $i->post('is_parent'),
                        'file'      => $upload_data['uploads']['file_name'],
                        'deskripsi' => $i->post('deskripsi')
                    );
                    if ($file->file != "") {
                        unlink('./assets/uploads/files/' . $file->file);
                    }
                    $this->Crud_model->edit('tbl_file_pendukung', 'id_file', $data['id_file'], $data);
                    $this->session->set_flashdata(
                        'msg',
                        '<div class="alert alert-success">
                                Data telah disimpan
                            </div>'
                    );

                    redirect(base_url('admin/file_pendukung'), 'refresh');
                }
            } else {
                $i = $this->input;
                $data = array(
                    'id_file'   => $i->post('id_file'),
                    'nama_file' => $i->post('nama_file'),
                    'is_parent' => $i->post('is_parent'),
                    'deskripsi' => $i->post('deskripsi')
                );
                $this->Crud_model->edit('tbl_file_pendukung', 'id_file', $data['id_file'], $data);
                $this->session->set_flashdata(
                    'msg',
                    '<div class="alert alert-success">
                            Data telah disimpan
                        </div>'
                );
                redirect(base_url('admin/file_pendukung'), 'refresh');
            }
        }
        $data = array(
            'title'     => 'File Pendukung',
            'file_p'    => $file,
            'isi'       => 'admin/file_pendukung/edit'
        );
        $this->load->view('admin/layout/wrapper', $data);
    }

    function delete($id_file)
    {
        $file = $this->Crud_model->listingOne('tbl_file_pendukung', 'id_file', $id_file);

        if ($file->file != "") {
            unlink('./assets/uploads/files/' . $file->file);
        }
        $this->Crud_model->delete('tbl_file_pendukung', 'id_file', $id_file);
        $this->session->flashdata('msg', 'sukses');

        redirect('admin/file_pendukung', 'refresh');
    }
}
