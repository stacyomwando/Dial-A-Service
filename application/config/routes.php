<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['default_controller'] = 'Workers';
$route['default_controller'] = 'login';
$route['default_controller'] = 'Employee_controller';
$route['default_controller'] = 'Customer_controller';
$route['default_controller'] = 'Booking_controller';
=======
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
>>>>>>> ebed5ad3b86332ae7be72da26387cd609e332731
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['employee'] = "Employee_controller"; 
$route['employee/add_view'] = 'Employee_controller/add_employee_view'; 
$route['employee/edit/(\d+)'] = 'Employee_controller/update_employee_view/$1'; 
$route['employee/delete/(\d+)'] = 'Employee_controller/delete_employee/$1';

$route['customer'] = "Customer_controller"; 
$route['customer/add_view'] = 'Customer_controller/add_customer_view'; 
$route['customer/edit/(\d+)'] = 'Customer_controller/update_customer_view/$1'; 
$route['customer/delete/(\d+)'] = 'Customer_controller/delete_customer/$1';

$route['booking'] = "Booking_controller"; 
$route['booking/add_view'] = 'Booking_controller/add_booking_view'; 
$route['booking/edit/(\d+)'] = 'Booking_controller/update_booking_view/$1'; 
$route['booking/delete/(\d+)'] = 'Booking_controller/delete_booking/$1';

