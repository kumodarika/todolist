<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list','ListController@practice1-1');
Route::post('list','ListController@post');
