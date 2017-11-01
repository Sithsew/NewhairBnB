<?php
//
//$router->get('', 'WelcomeController');

$router->get('welcome','WelcomeController@welcome');
$router->get('logout','AccountController@logout');
$router->post('signUp','AccountController@signUp');
$router->post('login','AccountController@login');
$router->post('search','SearchController@search');
$router->post('advancedSearch/search','SearchController@search');
$router->get('advancedSearch','SearchController@searchView');
$router->get('activatingLogin','AccountController@activatingLogin');
$router->post('activatingLogin','AccountController@activateUser');

$router->get('signUp','AccountController@signUpView');
$router->get('stylist','AccountController@stylist');
$router->get('both','AccountController@home');
$router->get('salon','AccountController@salon');
//$router->get('search','AccountController@search');


//
//$router->get('users', 'UsersController@index');
//$router->post('users', 'UsersController@store');
