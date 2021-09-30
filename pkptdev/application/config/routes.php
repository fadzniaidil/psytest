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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/gad7'] = 'admin/gad7';
$route['admin/phq9'] = 'admin/phq9';
$route['admin/whooley'] = 'admin/whooley';
$route['admin/dass'] = 'admin/dass';
$route['admin/bdi'] = 'admin/bdi';
$route['admin/bai'] = 'admin/bai';
$route['admin/mbti'] = 'admin/mbti';
$route['admin/otr'] = 'admin/otr';
$route['admin/dm'] = 'admin/dm';
$route['admin/vc'] = 'admin/vc';
$route['admin/sudo'] = 'admin/sudo';

$route['counselor/dashboard'] = 'counselor/dashboard';
$route['counselor/appointment'] = 'counselor/appointment';
$route['counselor/info'] = 'counselor/info';
$route['counselor/d1/(:any)'] = 'counselor/d1/$1';
$route['counselor/d2/(:any)'] = 'counselor/d2/$1';
$route['counselor/data'] = 'counselor/data';

$route['client/dashboard'] = 'client/dashboard';
$route['client/appointment'] = 'client/appointment';
$route['client/assessment'] = 'client/assessment';
$route['client/history'] = 'client/history';

$route['test/gad7/(:any)'] = 'test/gad7/$1';
$route['test/phq9/(:any)'] = 'test/phq9/$1';
$route['test/whooley/(:any)'] = 'test/whooley/$1';
$route['test/bdi/(:any)'] = 'test/bdi/$1';
$route['test/bai/(:any)'] = 'test/bai/$1';
$route['test/dass/(:any)'] = 'test/dass/$1';
$route['test/mbti/(:any)'] = 'test/mbti/$1';

$route['result/gadresult'] = 'result/gadresult';