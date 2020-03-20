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

Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::group(['middleware' => ['user']], function () {
    Route::get('user/dashboard', 'UserController@index')->name('home');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/dashboard', 'Admin\AdminDashboard@index');
    Route::get('admin/subdepartment', 'Admin\AdminSubDepartmentController@index');

    /*SUBDEPARTMENT*/
    Route::post('admin/subdepartment', 'Admin\AdminSubDepartmentController@store')->name('subdepartment.store');
    Route::post('admin/subdepartment/{id}', 'Admin\AdminSubDepartmentController@update')->name('subdepartment.update');
    Route::post('admin/subdepartmentdelete/{id}', 'Admin\AdminSubDepartmentController@destroy')->name('subdepartment.destroy');
    Route::post('admin/subdepartmentapproved/{id}', 'Admin\AdminSubDepartmentController@approved')->name('subdepartment.approved');

});