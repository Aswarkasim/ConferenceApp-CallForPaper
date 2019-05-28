<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'frontend/home';
$route['admin'] = 'admin/dashboard';
$route['login'] = 'admin/login';
$route['logout'] = 'admin/login/logout';



$route['register'] = 'frontend/auth/register';
$route['login_participant'] = 'frontend/auth/login';
$route['logout_participant'] = 'frontend/auth/logout';
$route['beranda'] = 'frontend/beranda';

$route['abstrak'] = 'frontend/abstrak';
$route['abstrak/add'] = 'frontend/abstrak/add';

$route['payment'] = 'frontend/payment';
$route['payment/add'] = 'frontend/payment/add';

$route['payment_part'] = 'frontend/home/payment';
$route['cek_status'] = 'frontend/home/cek_status';
// $route['payment/edit'] = 'frontend/payment/edit';


$route['paper'] = 'frontend/paper';
$route['profil'] = 'frontend/beranda/profil';


$route['reviewer'] = 'rev/auth';
$route['rev_out'] = 'rev/auth/logout';
$route['rev_beranda'] = 'rev/beranda';

$route['abstrakDone'] = 'rev/beranda/abstrakDone';
$route['paperDone'] = 'rev/beranda/paperDone';
$route['rev_paperList'] = 'rev/beranda/paper';
$route['detailAbstrak(:num)']['PUT'] = 'rev/beranda/detailAbstrak/$1';



// $route = array(
//   'admin' => 'admin/dashboard', );
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
