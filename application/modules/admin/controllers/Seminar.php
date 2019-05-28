<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if(($this->session->userdata('id_user') && $this->session->userdata('username')) == ""){
			redirect('login','refresh');
		}
  }



  function index(){
    $seminarRead  = $this->Crud_model->listingOne('tbl_seminar', 'id_seminar', '1');

    $valid = $this->form_validation;

    $valid->set_rules('nama_seminar', 'Judul Seminar', 'required',
                array('required' => ' Judul seminar tidak boleh kosong'));

    if($valid->run()){

      if($_FILES['banner']['name']){
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('banner')){
          $data = array(
            'title'     => 'Manajemen Seminar',
            'seminar'   => $seminarRead,
            'error'     => $this->upload->display_errors(),
            'isi'       => 'admin/seminar/list'
          );
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        }else{
          $upload_data = array('uploads' => $this->upload->data());
          $config['image_library']  	= 'gd2';
          $config['source_image']   	= './assets/uploads/images/'.$upload_data['uploads']['file_name']; 
          // $this->load->library('img_lib', $config);
          // $this->image_lib->resize();

          // if($seminarRead->banner != ""){
          //   unlink('assets/uploads/images/'.$seminarRead->banner);
          // }

          $i = $this->input;
          $data = array(
                    'nama_seminar'        => $i->post('nama_seminar'),
                    'tema_seminar'        => $i->post('tema'),
                    'tanggal'             => $i->post('tanggal'),
                    'jam'                 => $i->post('jam'),
                    'tempat'              => $i->post('tempat'),
                    'gmap'                => $i->post('gmap'),
                    'is_pendaftaran'      => $i->post('is_pendaftaran'),
                    'is_submit_abstrak'   => $i->post('is_submit_abstrak'),
                    'is_submit_paper'     => $i->post('is_submit_paper'),
                    'deskripsi_seminar'   => $i->post('deskripsi'),
                    'cp'                  => $i->post('cp'),
                    'email'               => $i->post('email'),
                    'banner'              => $upload_data['uploads']['file_name']
                  );
          $this->Crud_model->edit('tbl_seminar', 'id_seminar', '1',$data);
          $this->session->set_flashdata('msg',
                '<div class="alert alert-success">
                  <i class="fa fa-check"></i> Data berhasil diubah
                </div>');
          redirect(base_url('admin/seminar'),'refresh');
        } 
      }else{
        $i = $this->input;
        $data = array(
                  'nama_seminar'        => $i->post('nama_seminar'),
                  'tema_seminar'        => $i->post('tema'),
                  'tanggal'             => $i->post('tanggal'),
                  'jam'                 => $i->post('jam'),
                  'tempat'              => $i->post('tempat'),
                  'gmap'                => $i->post('gmap'),
                  'cp'                  => $i->post('cp'),
                  'email'               => $i->post('email'),
                  'is_pendaftaran'      => $i->post('is_pendaftaran'),
                  'is_submit_abstrak'   => $i->post('is_submit_abstrak'),
                  'is_submit_paper'     => $i->post('is_submit_paper'),
                  'deskripsi_seminar'   => $i->post('deskripsi')
                );
        $this->Crud_model->edit('tbl_seminar', 'id_seminar', '1',$data);
        $this->session->set_flashdata('msg',
              '<div class="alert alert-success">
                <i class="fa fa-check"></i> Data berhasil diubah
              </div>');
        redirect(base_url('admin/seminar'),'refresh');
      }
    }
    $data = array(
      'title'     => 'Manajemen Seminar',
      'seminar'   => $seminarRead,
      'isi'       => 'admin/seminar/list'
    );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function readTglPenting(){
    $tglPenting = $this->Crud_model->listing('tbl_tanggal_penting');

    $data = array(
      'title'         => 'Tanggal Penting',
      'tglPenting'    => $tglPenting,
      'isi'           => 'admin/tglPenting/list'
    );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function addTglPenting(){
        $valid = $this->form_validation;
        $valid->set_rules('deskripsi', 'Deskripsi', 'required',
                    array('required' => ' %s harus diisi'));

        
        if($valid->run()===FALSE){
            $data = array(
                'title'         => 'Tanggal Penting',
                'isi'           => 'admin/tglPenting/add'
                );
            $this->load->view('admin/layout/wrapper', $data);
        }else{
            $i = $this->input;
			      $data = array(	
              'deskripsi'	    => $i->post('deskripsi'),
              'tanggal'	              => $i->post('tanggal')
          );
          $this->Crud_model->add('tbl_tanggal_penting',$data);
          $this->session->set_flashdata('msg',' Data telah ditambah');
          redirect(base_url('admin/seminar/readTglPenting'),'refresh');
        }
  }

  function editTglPenting($id_tgl_penting)
    {
      $tgl_penting = $this->Crud_model->listingOne('tbl_tanggal_penting', 'id_tgl_penting', $id_tgl_penting);

      $valid = $this->form_validation;
      $valid->set_rules('deskripsi', 'Deskripsi', 'required',
                  array('required' => ' %s harus diisi'));

      
        if($valid->run()===FALSE){
          $data = array(
            'title'         => 'Edit Tanggal Penting',
            'tglPenting'    => $tgl_penting,
            'isi'           => 'admin/tglPenting/edit'
            );
        $this->load->view('admin/layout/wrapper', $data);
      }else{
          $i = $this->input;
          $data = array(	
            'id_tgl_penting'	    => $i->post('id_tgl_penting'),
            'deskripsi'	          => $i->post('deskripsi'),
            'tanggal'	            => $i->post('tanggal')
          );
        $this->Crud_model->edit('tbl_tanggal_penting','id_tgl_penting',$data['id_tgl_penting'],$data);
        $this->session->set_flashdata('msg',' Data telah diubah');
        redirect(base_url('admin/seminar/readTglPenting'),'refresh');
      }
        
    }

    
    function deleteTglPenting($id_tgl_penting){
    
      $tgl_penting = $this->Crud_model->listingOne('tbl_tanggal_penting', 'id_tgl_penting',$id_tgl_penting);

      $this->Crud_model->delete('tbl_tanggal_penting', 'id_tgl_penting',$id_tgl_penting);
      $this->session->set_flashdata('msg', 'Data berhasil dihapus');
      
      redirect('admin/seminar/readTglPenting','refresh');
      
  }


    function readFasilitas(){
      $fasilitas = $this->Crud_model->listing('tbl_fasilitas');
  
      $data = array(
        'title'     => 'Fasilitas Seminar',
        'fasilitas'   => $fasilitas,
        'isi'       => 'admin/fasilitas/list'
      );
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
  
    function addFasilitas(){
          $valid = $this->form_validation;
          $valid->set_rules('nama_fasilitas', 'Fasilitas', 'required',
                      array('required' => ' %s harus diisi'));
  
          
          if($valid->run()===FALSE){
              $data = array(
                  'title'         => 'Tambah Fasilitas',
                  'isi'           => 'admin/fasilitas/add'
                  );
              $this->load->view('admin/layout/wrapper', $data);
          }else{
              $i = $this->input;
              $data = array(	
                'nama_fasilitas'	    => $i->post('nama_fasilitas'),
                'icon'	              => $i->post('icon'),
                'deskripsi' 	        => $i->post('deskripsi')
            );
            $this->Crud_model->add('tbl_fasilitas',$data);
            $this->session->set_flashdata('msg',' Data telah ditambah');
            redirect(base_url('admin/seminar/readFasilitas'),'refresh');
          }
    }
  
    function editFasilitas($id_fasilitas)
      {
        $fasilitas = $this->Crud_model->listingOne('tbl_fasilitas', 'id_fasilitas', $id_fasilitas);
        $valid = $this->form_validation;
        $valid->set_rules('nama_fasilitas', 'Fasilitas', 'required',
                    array('required' => ' %s harus diisi'));
  
        
        if($valid->run()===FALSE){
            $data = array(
                'title'         => 'Edit Fasilitas '.$fasilitas->nama_fasilitas,
                'fasilitas'     => $fasilitas,
                'isi'           => 'admin/fasilitas/edit'
                );
            $this->load->view('admin/layout/wrapper', $data);
        }else{
            $i = $this->input;
            $data = array(	
              'id_fasilitas'	    => $i->post('id_fasilitas'),
              'nama_fasilitas'	    => $i->post('nama_fasilitas'),
              'icon'	              => $i->post('icon'),
              'deskripsi' 	        => $i->post('deskripsi')
          );
          $this->Crud_model->edit('tbl_fasilitas','id_fasilitas',$data['id_fasilitas'],$data);
          $this->session->set_flashdata('msg',' Data telah ditambah');
          redirect(base_url('admin/seminar/readFasilitas'),'refresh');
        }
          
      }
  
      function deleteFasilitas($id_fasilitas){

        $fasilitas = $this->Crud_model->listingOne('tbl_fasilitas', 'id_fasilitas',$id_fasilitas);

        $this->Crud_model->delete('tbl_fasilitas', 'id_fasilitas',$id_fasilitas);
        $this->session->set_flashdata('msg', 'Data berhasil dihapus');
        
        redirect('admin/seminar/readFasilitas','refresh');
        
    }

    // Pricing

    function readPricing(){
      $pricing = $this->Crud_model->listing('tbl_pricing');
  
      $data = array(
        'title'     => 'Pricing Seminar',
        'pricing'   => $pricing,
        'isi'       => 'admin/pricing/list'
      );
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
  
    function addPricing(){
          $valid = $this->form_validation;
          $valid->set_rules('nama_pricing', 'Pricing', 'required',
                      array('required' => ' %s harus diisi'));
  
          
          if($valid->run()===FALSE){
              $data = array(
                  'title'         => 'Tambah Pricing',
                  'isi'           => 'admin/pricing/add'
                  );
              $this->load->view('admin/layout/wrapper', $data);
          }else{
              $i = $this->input;
              $data = array(	
                'nama_pricing'	    => $i->post('nama_pricing'),
                'pricing'	          => $i->post('pricing')
            );
            $this->Crud_model->add('tbl_pricing',$data);
            $this->session->set_flashdata('msg',' Data telah ditambah');
            redirect(base_url('admin/seminar/readPricing'),'refresh');
          }
    }
  
    function editPricing($id_pricing)
      {
        $pricing = $this->Crud_model->listingOne('tbl_pricing', 'id_pricing', $id_pricing);
        $valid = $this->form_validation;
        $valid->set_rules('nama_pricing', 'Pricing', 'required',
                    array('required' => ' %s harus diisi'));
  
        
        if($valid->run()===FALSE){
            $data = array(
                'title'         => 'Edit '.$pricing->nama_pricing,
                'pricing'       => $pricing,
                'isi'           => 'admin/pricing/edit'
                );
            $this->load->view('admin/layout/wrapper', $data);
        }else{
            $i = $this->input;
            $data = array(	
              'id_pricing'	      => $i->post('id_pricing'),
              'nama_pricing'	    => $i->post('nama_pricing'),
              'pricing'	          => $i->post('pricing')
            );
          $this->Crud_model->edit('tbl_pricing','id_pricing',$data['id_pricing'],$data);
          $this->session->set_flashdata('msg',' Data telah ditambah');
          redirect(base_url('admin/seminar/readPricing'),'refresh');
        }
          
      }
  
      function deletePricing($id_pricing){

        $pricing = $this->Crud_model->listingOne('tbl_pricing', 'id_pricing',$id_pricing);

        $this->Crud_model->delete('tbl_pricing', 'id_pricing',$id_pricing);
        $this->session->set_flashdata('msg', 'Data berhasil dihapus');
        
        redirect('admin/seminar/readPricing','refresh');
        
    }


    function rekening()
      {
        $pricing = $this->Crud_model->listingOne('tbl_pricing', 'id_pricing', '1');
        $valid = $this->form_validation;
        $valid->set_rules('nama_pricing', 'Pricing', 'required',
                    array('required' => ' %s harus diisi'));
  
        
        if($valid->run()===FALSE){
            $data = array(
                'title'         => 'Edit '.$pricing->nama_pricing,
                'pricing'       => $pricing,
                'isi'           => 'admin/pricing/edit'
                );
            $this->load->view('admin/layout/wrapper', $data);
        }else{
            $i = $this->input;
            $data = array(	
              'id_pricing'	      => $i->post('id_pricing'),
              'nama_pricing'	    => $i->post('nama_pricing'),
              'pricing'	          => $i->post('pricing')
            );
          $this->Crud_model->edit('tbl_pricing','id_pricing',$data['id_pricing'],$data);
          $this->session->set_flashdata('msg',' Data telah ditambah');
          redirect(base_url('admin/seminar/readPricing'),'refresh');
        }
          
      }


}
