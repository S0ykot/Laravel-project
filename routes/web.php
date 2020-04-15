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

Route::get('/admin/updateFaculty', 'adminUpdateFaculty@index')->name('adminUpdateFaculty.index');
Route::post('/admin/updateFaculty', 'adminUpdateFaculty@facultyUpdate');