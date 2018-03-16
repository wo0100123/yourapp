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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins/login','Admins\AdminsController@login');

Route::group(['middleware'=>'adminlogin'],function(){

	Route::get('/admins','Admins\AdminsController@index');
	Route::get('/admins/welcome','Admins\AdminsController@welcome');
});

Route::get('/admins/session',function(){
	session(['id'=>10]);
});

