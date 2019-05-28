<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Error_page extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    

    public function index()
    {
        $data = array(
            'title'         => 'Error Page',
            'isi'           => 'frontend/404_page'
            );
        $this->load->view('frontend/layout/wrapper', $data);        
    }

}
