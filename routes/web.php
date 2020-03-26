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
    /*news*/
    Route::get('user/news', 'NewsController@index')->name('news.home');
    Route::post('user/news', 'NewsController@store')->name('news.store');
    Route::post('user/news/{id}', 'NewsController@update')->name('news.update');
    Route::post('user/newsdelete/{id}', 'NewsController@destroy')->name('news.destroy');

    /*events*/
    Route::get('user/events', 'EventController@index')->name('events.home');
    Route::post('user/events', 'EventController@store')->name('events.store');
    Route::post('user/events/{id}', 'EventController@update')->name('events.update');
    Route::post('user/eventsdelete/{id}', 'EventController@destroy')->name('events.destroy');

    /*source*/
    Route::get('user/source', 'SourceController@index')->name('source.home');
    Route::post('user/import', 'SourceController@importexcel')->name('import.excel');

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

    /*notification*/
    Route::get('admin/notification', 'Admin\Notification@index')->name('notification.show');

    /*event*/
    Route::get('admin/events/{depart}/{name}/{id}', 'EventController@viewbysubdepartmentid')->name('events.view');
    Route::get('admin/events-all', 'EventController@allevents')->name('events.all');
    Route::get('admin/events/single/{depart}/{name}/{id}', 'EventController@viewsingleevent')->name('events.single');

    /*news*/
    Route::get('admin/news/{depart}/{name}/{id}', 'NewsController@viewbysubdepartmentid')->name('news.view');
    Route::get('admin/news-all', 'NewsController@allnews')->name('news.all');
    Route::get('admin/news/single/{depart}/{name}/{id}', 'NewsController@viewsinglenews')->name('news.single');


    /*Add Main department Events*/
    Route::get('admin/events', 'EventController@adminindex')->name('events.admin.home');
    Route::post('admin/events', 'EventController@adminstore')->name('events.admin.store');
    Route::post('admin/events/{id}', 'EventController@adminupdate')->name('events.admin.update');
    Route::post('admin/eventsdelete/{id}', 'EventController@destroy')->name('events.admin.destroy');

    /*Add Main department News*/
    Route::get('admin/news', 'NewsController@adminindex')->name('news.admin.home');
    Route::post('admin/news', 'NewsController@adminstore')->name('news.admin.store');
    Route::post('admin/news/{id}', 'NewsController@adminupdate')->name('news.admin.update');
    Route::post('admin/newsdelete/{id}', 'NewsController@destroy')->name('news.admin.destroy');

    /*basic setting*/
    Route::get('admin/basic', 'BasicSettingController@index')->name('basic.index');
});