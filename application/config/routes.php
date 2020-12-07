<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['pages/get_project_details'] = 'pages/get_project_details';
$route['pages/get_project_details/(:any)'] = 'pages/get_project_details/$1';
$route['pages/update_data'] = 'pages/update_data';

$route['pages/view'] = 'pages/view';
$route['pages/(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
