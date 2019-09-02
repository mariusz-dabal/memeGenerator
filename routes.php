<?php 

$router->get('', 'MemeController@index');
$router->post('post', 'MemeController@store');