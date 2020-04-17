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

Route::get('/', 'login@index')->name('rootLogin.index');
Route::post('/', 'login@verify');


Route::get('/login', 'login@index')->name('login.index');
Route::post('/login', 'login@verify');


Route::get('/admin/home', 'adminHome@index')->name('adminHome.index');

Route::get('/admin/addFaculty', 'adminAddFaculty@index')->name('adminAddFaculty.index');
Route::post('/admin/addFaculty', 'adminAddFaculty@facultyRegister');

Route::get('/admin/activeFaculty', 'adminActiveFacultyList@index')->name('activeFacultyList.index');
Route::get('/admin/inactiveFaculty', 'adminInactiveFacultyList@index')->name('inactiveFacultyList.index');

Route::get('/admin/updateFaculty/{id}', 'adminUpdateFaculty@index')->name('adminUpdateFaculty.index');
Route::post('/admin/updateFaculty/{id}', 'adminUpdateFaculty@facultyUpdate');

Route::get('/admin/deleteFaculty/{id}', 'adminDeleteFaculty@index')->name('adminDeleteFaculty.index');
Route::post('/admin/deleteFaculty/{id}', 'adminDeleteFaculty@facultyDelete');

Route::get('/admin/blockFaculty/{id}', 'adminFacultyAccountManage@facultyBlock')->name('adminBlockFaculty');
Route::post('/admin/blockFaculty/{id}', 'adminFacultyAccountManage@facultyBlockDone');

Route::get('/admin/unblockFaculty/{id}', 'adminFacultyAccountManage@facultyUnblock')->name('adminUnblockFaculty');
Route::post('/admin/unblockFaculty/{id}', 'adminFacultyAccountManage@facultyUnblockDone');

Route::get('/admin/addStudent', 'adminAddStudent@index')->name('adminAddStudent.index');
Route::post('/admin/addStudent', 'adminAddStudent@studentRegister');