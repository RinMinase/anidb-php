<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'LandingPageController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['view/(:num)'] = 'LandingPageController/view/$1';
// $route['edit/(:num)'] = 'LandingPageController/edit/$1';
// $route['delete/(:num)'] = 'LandingPageController/delete/$1';

$route['index'] = 'LandingPageController/index';

$route['add'] = 'LandingPageController/add';
$route['addEntry'] = 'LandingPageController/addEntry';

$route['last-watch'] = 'OtherListsController/last_watch';
$route['by-name'] = 'OtherListsController/by_name';

$route['download-list'] = 'DownloadListController/download_list';
$route['download-list/add'] = 'DownloadListController/download_list_add';
$route['download-list/(:num)/(:any)'] = 'DownloadListController/download_list/$1/$2';

$route['hdd-list'] = 'HDDListController/hdd_list';
$route['hdd-list/simulator'] = 'HDDListController/hdd_simulator';

$route['about'] = 'GeneralPagesController/about';
