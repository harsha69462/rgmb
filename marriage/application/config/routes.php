<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// login logout routes
$route['login'] = 'LoginController/login';
$route['register'] = 'RegisterController/register';
$route['aboutus'] = 'Welcome/about';
$route['contactus'] = 'Welcome/contact';

// admin routes
$route['admin'] = 'AdminController/login';
$route['admin/dashboard'] = 'AdminController/dashboard';
$route['admin/matches'] = 'AdminController/matches';
$route['admin/adminpage'] = 'AdminController/dashboard';
$route['admin/logout'] = 'AdminController/logout';
$route['admin/newsUpdate'] = 'AdminController/news';
$route['admin/exchange'] = 'AdminController/exchange';

//user routes
$route['user/profile'] = 'UserController/profile';
$route['user/logout'] = 'UserController/logout';
$route['user/mymatches'] = 'UserController/match';
$route['user/updateprofile'] = 'UserController/profileUpdate';
$route['user/updatepropic'] = 'UserController/propicchange';
$route['user/settings'] = 'UserController/settings';
$route['user/delete'] = 'UserController/delete';
