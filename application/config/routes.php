<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'PageController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['new'] = 'PageController/create';
$route['create'] = 'PageController/create';
$route['add'] = 'PageController/create';
$route['addEntry'] = 'DefaultController/addEntry';

$route['about'] = 'PageController/about';
