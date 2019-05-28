<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
     
    }
    

    public function index()
    {

        $this->load->library('email');

        $this->email->from('cakikarossa@gmail.com', 'Aswar Kasim');
        $this->email->to('aswarkasim@gmail.com');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);

        $this->email->send();

                
        
    }

}

/* End of file Controllername.php */
