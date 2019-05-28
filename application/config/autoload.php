<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database','session','upload','form_validation');

$autoload['drivers'] = array();


$autoload['helper'] = array('url','file','form','text');


$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('admin/Crud_model','frontend/Auth_model');
