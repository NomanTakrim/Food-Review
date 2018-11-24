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

//Home Controller Routes
Route::get('/','HomeController@home')->name('home');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/about','HomeController@about')->name('about');

//User Controller Routes
Route::get('signup', 'UserController@signup')->name('signup');
Route::post('signup', 'UserController@saveuser')->name('saveuser');
Route::get('signin', 'UserController@login')->name('signin');
Route::post('signin', 'UserController@userlogin')->name('userlogin');
