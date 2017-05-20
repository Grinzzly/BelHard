<?php

$router->get('', 'App\MainController@index');
$router->get('todo-list', 'App\TodoController@index');
$router->post('add-task', 'App\TodoController@add');