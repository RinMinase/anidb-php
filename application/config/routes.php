<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'PageController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['add'] = 'PageController/add';
$route['addEntry'] = 'DefaultController/addEntry';

$route['other-lists'] = 'PageController/other_lists';

$route['download-list'] = 'PageController/download_list';

$route['hdd-list'] = 'PageController/hdd_list';
$route['hdd-list/simulator'] = 'PageController/hdd_simulator';

$route['about'] = 'PageController/about';
