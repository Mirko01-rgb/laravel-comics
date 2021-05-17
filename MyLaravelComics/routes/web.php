<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'TestController@home');
Route::get('home2', 'TestController@home2');
