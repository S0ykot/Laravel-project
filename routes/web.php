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

Route::get('/login', 'login@index')->name('login');
Route::post('/login', 'login@verify');
Route::get('/student/registration', 'studentReg@index')->name('studentReg');
Route::post('/student/registration', 'studentReg@send');

Route::group(['middleware'=>['sess']],function(){
	
	Route::get('/student/registration/credentials', 'studentReg@cred')->name('studentRegCred');

	Route::get('/student/home', 'studentHome@index')->name('studentHome');
	Route::post('/student/home', 'studentHome@update');

	Route::get('/student/research', 'studentResearch@index')->name('studentResearch');

	Route::get('/student/availableTopics', 'studentTopicsWindow@index')->name('studentTopicsWindow');
	
	Route::get('/student/topicDetails/{id}', 'studentTopicsWindow@topicDetails')->name('topicDetails');
	Route::post('/student/topicDetails/{id}', 'studentTopicsWindow@apply');

	Route::get('/student/file/upload', 'studentFile@uploadIndex')->name('file.upload');

	Route::get('/student/file/download', 'studentFile@downloadIndex')->name('file.download');

	Route::get('/student/passwordChange', 'studentPassword@index')->name('studentPassword');
	Route::post('/student/passwordChange', 'studentPassword@update');

	Route::get('/logout', 'logout@index');

	//Route::resource('user', 'UserController');
	//Route::resource('student', 'StudentController');
});
