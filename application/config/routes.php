<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/index_home'] = 'posts/index_home';
$route['posts/login_view_W'] = 'posts/login_view_W';
$route['posts/index_worker'] = 'posts/index_worker';
$route['posts/login_worker'] = 'posts/login_worker';
$route['posts/register_worker'] = 'posts/register_worker';
$route['posts/status'] = 'posts/status'; 
$route['posts/fetch'] = 'posts/fetch'; 
$route['posts/email'] = 'posts/email'; 
$route['posts/index_user'] = 'posts/index_user'; 
$route['posts/register_user'] = 'posts/register_user';
$route['posts/login_view'] = 'posts/login_view'; 
$route['posts/login_user'] = 'posts/login_user';
$route['posts/user_logout'] = 'posts/user_logout'; 
$route['posts/user_profile'] = 'posts/user_profile'; 
$route['posts/update_profile'] = 'posts/update_profile'; 
$route['posts/profile'] = 'posts/profile'; 
$route['posts/statusViews'] = 'posts/statusViews'; 
$route['posts/bookings'] = 'posts/bookings'; 
$route['posts/update'] = 'posts/update'; 
$route['posts/create'] = 'posts/create'; 
$route['posts/(:any)'] = 'posts/StatusViews/$1';
$route['posts'] = 'posts/index'; 
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
