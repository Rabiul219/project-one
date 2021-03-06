<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   Route::get('/','WelcomeController@index');
   Route::get('/support','WelcomeController@support');
   Route::get('/about','WelcomeController@about');
   Route::get('/contact','WelcomeController@contact');
    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
