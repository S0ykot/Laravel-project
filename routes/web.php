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

Route::get('/','Login@index');
Route::post('/','Login@authCheck');
Route::get('/login','Login@index');
Route::post('/login','Login@authCheck');

Route::get('/logout','facultyLogout@index');


Route::group(['middleware'=>['sessVerify']], function(){
	Route::get('/home','facultyHome@index');
	
	Route::get('/profile','facultyHome@profileDetails');
	Route::post('/profile','facultyHome@updateProfile');

});

