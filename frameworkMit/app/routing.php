<?php

$app->get('/', 'Mit\Controllers\HomeController:index');

$app->get('/users', 'Mit\Controllers\UserController:getAll');

// $app->get('/users/add', 'Mit\Controllers\UserController:add');
