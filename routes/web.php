<?php

Route::get('/', "HomeController@index");
Route::get('/detail/{id}', "HomeController@detail");
Route::get('/login/page', "HomeController@loginpage");
Route::get('/edit/page/{id}', "HomeController@editpage");
Route::post('/user/login', "HomeController@login");
Route::get('/user/logout', "HomeController@logout");
Route::get('/dashboard/{id}', "HomeController@deletedashboard");
Route::get('/dashboard/edit/{id}', "HomeController@editdashboard");
Route::post('/dashboard/create', "HomeController@createdashboard");
Route::get('/create/page', "HomeController@createpage");
