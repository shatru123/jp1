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





Route::group(['middleware'=>'web'], function(){
    Route::resource('admin/jobs', 'AdminJobsController');
    Route::resource('admin/specialization', 'AdminSpecController');
    Route::resource('admin/sectors', 'AdminSectorController');
    Route::resource('admin/employees', 'EmployeesController');

});





