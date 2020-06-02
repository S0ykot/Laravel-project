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
Route::prefix('student')->group(function(){
	Route::get('/registration', 'studentReg@index')->name('studentReg');
	Route::post('/registration', 'studentReg@send');
});
Route::group(['middleware'=>['sess']],function(){
	
	Route::prefix('student')->group(function(){

		Route::get('/registration/credentials', 'studentReg@cred')->name('studentRegCred');

		Route::get('/home', 'studentHome@index')->name('studentHome');
		Route::post('/home', 'studentHome@update');

		Route::get('/research', 'studentResearch@index')->name('studentResearch');

		Route::get('/research/groupMembers', 'studentResearch@groupMembers')->name('groupMembers');

		Route::get('/availableTopics', 'studentTopicsWindow@index')->name('studentTopicsWindow');
		Route::post('/availableTopics', 'studentTopicsWindow@search');
		
		Route::get('/topicDetails/{id}', 'studentTopicsWindow@topicDetails')->name('topicDetails');
		Route::post('/topicDetails/{id}', 'studentTopicsWindow@apply');

		Route::get('/file/upload', 'studentFile@uploadIndex')->name('file.upload');
		Route::post('/file/upload', 'studentFile@upload');

		Route::get('/file/download', 'studentFile@downloadIndex')->name('file.download');
		Route::get('/file/download/{id}', 'studentFile@download')->name('file.downloadFile');

		Route::get('/passwordChange', 'studentPassword@index')->name('studentPassword');
		Route::post('/passwordChange', 'studentPassword@update');
	});
	Route::get('/logout', 'logout@index');

	//Route::resource('user', 'UserController');
	//Route::resource('student', 'StudentController');
});
