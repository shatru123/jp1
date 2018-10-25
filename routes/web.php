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


Route::get('test', function () {
    return view('admin.test');
});

Route::get('test1','test@test');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//
//Route::group(['middleware'=>'admin'], function(){
//
//    Route::get('/admin', function(){
//
//        return view('admin.index');
//
//    });
//
//    Route::resource('admin/jobs', 'AdminJobsController');
//    Route::resource('admin/sectors', 'AdminSectorController');
//    Route::resource('admin/specializations', 'AdminSpecController');
//    Route::resource('admin/employees', 'EmployeesController');
////  Route::resource('admin/comment/replies', 'CommentRepliesController');
//
//});

Route::get('admin/jobs', 'AdminJobsController@index');
Route::get('admin/sectors', 'AdminSectorController@index');
Route::get('admin/specialization', 'AdminSpecController@index');
Route::resource('sector/delete', 'AdminSectorController');

Route::resource('admin/add_sectors', 'AdminSectorController@create');
