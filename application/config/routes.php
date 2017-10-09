<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'LandingPageController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/* LANDING PAGE */

$route['view/(:num)'] = 'LandingPageController/view/$1';
$route['edit/(:num)'] = 'LandingPageController/edit/$1';
// $route['delete/(:num)'] = 'LandingPageController/delete/$1';

$route['index'] = 'LandingPageController/index';

$route['add'] = 'LandingPageController/add';
$route['addEntry'] = 'LandingPageController/addEntry';


/* OTHER LISTS */

$route['last-watch'] = 'OtherListsController/last_watch';
$route['by-name'] = 'OtherListsController/by_name';
$route['summer-list'] = 'OtherListsController/summer_list';
$route['summer-list/add'] = 'OtherListsController/summer_list_add';


/* DOWNLOAD LISTS */

$route['download-list'] = 'DownloadListController/download_list';
$route['download-list/add'] = 'DownloadListController/download_list_add';
$route['download-list/(:num)/(:any)'] = 'DownloadListController/download_list/$1/$2';


/* HDD LISTS */

$route['hdd-list'] = 'HDDListController/hdd_list';
$route['hdd-list/simulator'] = 'HDDListController/hdd_simulator';


/* GENERAL PAGES */

$route['about'] = 'GeneralPagesController/about';


/* Disable direct access to any controller */
$route['DownloadListController/(:any)'] = 'GeneralPagesController/error_404';
$route['HDDListController/(:any)'] = 'GeneralPagesController/error_404';
$route['OtherListsController/(:any)'] = 'GeneralPagesController/error_404';
$route['LandingPageController/(:any)'] = 'GeneralPagesController/error_404';
$route['GeneralPagesController/(:any)'] = 'GeneralPagesController/error_404';
