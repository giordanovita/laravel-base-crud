<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'TestController@home')
   -> name('home');


Route::get('/ospite{id}', 'TestController@ospite')
   ->name ('ospite');


Route::get('/create/ospite', 'TestController@create')
   ->name ('create');

Route::post('/store/ospite', 'TestController@store')
   ->name('store');