<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'PageController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['view/(:num)'] = 'PageController/view/$1';
// $route['edit/(:num)'] = 'PageController/edit/$1';
// $route['delete/(:num)'] = 'PageController/delete/$1';

$route['index'] = 'PageController/index';

$route['add'] = 'PageController/add';
$route['addEntry'] = 'DefaultController/addEntry';

$route['last-watch'] = 'PageController/last_watch';
$route['by-name'] = 'PageController/by_name';

$route['download-list'] = 'PageController/download_list';

$route['hdd-list'] = 'PageController/hdd_list';
$route['hdd-list/simulator'] = 'PageController/hdd_simulator';

$route['about'] = 'PageController/about';
