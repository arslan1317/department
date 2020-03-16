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
Route::get('admin/login', 'Auth\LoginController@showAdminLoginForm')->name('adminlogin');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['user']], function () {
    // Route::get('user/dashboard', 'HomeController@index')->name('home');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/dashboard', 'Admin\AdminDashboard@index');
    Route::get('admin/subdepartment', 'Admin\AdminSubDepartmentController@index');
});