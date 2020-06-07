<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['authentication/login'] = 'authentication/login';
$route['admissions/studentapplicationform'] = 'admissions/studentapplicationform';
// $route['admissions/admissionapplicationform'] = 'admissions/admissionapplicationform';
// $route['admissions/applicationform'] = 'admissions/applicationform';
$route['admissions/createaccount'] = 'admissions/createaccount';
$route['admissions/login'] = 'admissions/login';
$route['admissions/confirm_email']= 'admissions/confirm_email';
$route['admisssions/payment_verify']='admissions/payment_verify';
$route['posts/create'] = 'posts/create';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin/admin_officer'] = 'admin/admin_officer';

 