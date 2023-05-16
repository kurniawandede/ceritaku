<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['admin'] = 'admin/login/index';
$route['admin/dashboard/akun'] = 'admin/user';
$route['admin/dashboard/akun/tambah'] = 'admin/user/tambah';
$route['admin/dashboard/akun/edit/(:num)'] = 'admin/user/edit/$1';
$route['admin/dashboard/akun/tambah/proses'] = 'admin/user/proses_tambah';
$route['admin/dashboard/cerita'] = 'admin/cerita';
$route['admin/dashboard/cerita/tambah'] = 'admin/cerita/tambahCerita';
$route['admin/dashboard/cerita/edit/(:num)'] = 'admin/cerita/edit/$1';
$route['admin/dashboard/kategori'] = 'admin/kategori';
$route['admin/dashboard/kategori/edit/(:num)'] = 'admin/kategori/edit/$1';
$route['admin/dashboard/kategori/tambah'] = 'admin/kategori/tambah';
$route['admin/dashboard/review'] = 'admin/review';
$route['user/login'] = 'login';
$route['user/register'] = 'register';
$route['user/register/proses'] = 'register/proses_tambah';
$route['cerita'] = 'cerita';
$route['cerita/top-view'] = 'cerita/topview';
$route['cerita/top-rating'] = 'cerita/toprating';
$route['profile'] = 'profiles';
$route['profile/publis'] = 'profiles/publis';
$route['profile/ceritamu'] = 'profiles/ceritamu';
$route['profile/input'] = 'profiles/input';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
