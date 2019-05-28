<?php  


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_rev_model');
        
    }
    

    function index(){
		$valid = $this->form_validation;

		$valid->set_rules('email', 'Email', 'required',
								array('required' => '%s harus diisi'));
		$valid->set_rules('password', 'Password','required|min_length[6]',
		array('required' 	=> 'Password harus diisi',
						'min_length'  => 'Password minimal 6 karakter'));

		if($valid->run()===FALSE){
			$data = array(
						'title'     => 'Login Reviewer Makalah',
						'isi'		=> 'rev/login_view'
					);
			$this->load->view('frontend/layout/wrapper', $data);
		}else{
			$i          = $this->input;
			$email      = $i->post('email');
			$password   = $i->post('password');
            $cek_login  = $this->Auth_rev_model->login($email, $password);
            //print_r($email); die;

			if(!empty($cek_login)==1){
				$s = $this->session;
				$s->set_userdata('id_reviewer', $cek_login->id_reviewer);
				$s->set_userdata('email', $cek_login->email);
				$s->set_userdata('nama_reviewer', $cek_login->nama_reviewer);
				$s->set_userdata('is_aktif', $cek_login->is_aktif);

				
				redirect(base_url(),'refresh');
				
			}else{
                $data = array(
                    'title'     => 'Login Reviewer Makalah',
                    'pesan_er'  => 'Email atau password tidak cocok',
                    'isi'		=> 'rev/login_view'
                );
                $this->load->view('frontend/layout/wrapper', $data);
			}
		}
	}


	function logout(){
		$s = $this->session;
		$s->unset_userdata('id_reviewer');
		$s->unset_userdata('email');
		$s->unset_userdata('nama_reviewer');
		$s->unset_userdata('is_aktif');
		redirect(base_url(),'refresh');
		
	}

}

/* End of file Controllername.php */
