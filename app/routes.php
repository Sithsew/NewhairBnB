<?php
//
//$router->get('', 'WelcomeController');

$router->get('welcome','WelcomeController@welcome');
$router->post('welcome','AccountController@signUp');

$router->get('contacts','PagesController@contacts');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');