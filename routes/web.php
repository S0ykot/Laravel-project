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


Route::get('/login', 'login@index')->name('login');
Route::post('/login', 'login@verify');



Route::group(['middleware'=>['sess']],function(){


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

	Route::get('/admin/activeStudent', 'adminActiveStudentList@index')->name('activeStudentList.index');
	Route::get('/admin/inactiveStudent', 'adminInactiveStudentList@index')->name('inactiveStudentList.index');

	Route::get('/admin/updateStudent/{id}', 'adminStudentAccountManage@studentUpdate')->name('adminUpdateStudent');
	Route::post('/admin/updateStudent/{id}', 'adminStudentAccountManage@studentUpdateDone');

	Route::get('/admin/blockStudent/{id}', 'adminStudentAccountManage@studentBlock')->name('adminBlockStudent');
	Route::post('/admin/blockStudent/{id}', 'adminStudentAccountManage@studentBlockDone');

	Route::get('/admin/deleteStudent/{id}', 'adminStudentAccountManage@studentDelete')->name('adminDeleteStudent');
	Route::post('/admin/deleteStudent/{id}', 'adminStudentAccountManage@studentDeleteDone');

	Route::get('/admin/unblockStudent/{id}', 'adminStudentAccountManage@studentUnblock')->name('adminUnblockStudent');
	Route::post('/admin/unblockStudent/{id}', 'adminStudentAccountManage@studentUnblockDone');

	Route::get('/admin/approveStudent', 'adminApproveStudentList@index')->name('approveStudentList.index');
	Route::get('/admin/studentProfile/{id}', 'adminApproveStudentList@studentProfile')->name('adminStudentProfile');
	Route::get('/admin/file/download/{id}', 'adminApproveStudentList@download')->name('adminStudentFileDownload');
	Route::get('/admin/studentApproval/accept/{id}', 'adminApproveStudentList@accept')->name('adminStudentApprovalAccept');
	Route::post('/admin/studentApproval/accept/{id}', 'adminApproveStudentList@acceptDone');
	Route::get('/admin/studentApproval/decline/{id}', 'adminApproveStudentList@decline')->name('adminStudentApprovalDecline');
	Route::post('/admin/studentApproval/decline/{id}', 'adminApproveStudentList@declineDone');


	Route::get('/logout', 'logout@index');
});