<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['KelolaOutdoor/(:any)'] = 'KelolaOutdoor/$1';
$route['KelolaOutdoor/(:any)/(:any)'] = 'KelolaOutdoor/$1/$2';
$route['KelolaOutdoor/(:any)/(:any)/(:any)'] = 'KelolaOutdoor/$1/$2/$3';
