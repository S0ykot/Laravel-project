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

	Route::get('/changePassword','facultyHome@changePasswordView');
	Route::post('/changePassword','facultyHome@updatePassword');

	Route::get('/studentReg','StudentReg@studRegView');
	Route::post('/studentReg','StudentReg@addStudent');

	Route::get('/studentDetails','StudentDetails@index');
	Route::get('/studentApproval','StudentDetails@studentApproveView');

	Route::get('/studentApproval/approve/{id}','StudentDetails@approveStudent');


	Route::get('/topicAdd','Topic@index');
	Route::post('/topicAdd','Topic@addTopic');

	Route::get('/viewTopic','Topic@viewTopic');

	Route::get('/studentDetails/search/{id}','StudentDetails@studentSearch');
	Route::get('/studentApproval/search/{id}','StudentDetails@inactiveStudentSearch');

});

