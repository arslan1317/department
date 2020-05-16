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

Route::get('/', 'FrontEndController@index');
Route::get('/news', 'FrontEndController@news');
Route::get('/news/department/{id}', 'FrontEndController@news_department');
Route::get('/news/single/{id}', 'FrontEndController@news_single');

Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

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

    /* Edit Profile */
    Route::get('user/profile', 'UserController@profile')->name('profile.home');
    Route::post('user/profile/{id}', 'UserController@update')->name('profile.update');

    /* Change Password */
    Route::get('user/password', 'UserController@password')->name('password.home');
    Route::post('user/password/{id}', 'UserController@updatepassword')->name('password.update');
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

    /* Edit Profile */
    Route::get('admin/profile', 'Admin\AdminDashboard@profile')->name('admin.profile.home');
    Route::post('admin/profile/{id}', 'Admin\AdminDashboard@update')->name('admin.profile.update');

    /* Change Password */
    Route::get('admin/password', 'Admin\AdminDashboard@password')->name('admin.password.home');
    Route::post('admin/password/{id}', 'Admin\AdminDashboard@updatepassword')->name('admin.password.update');

    /*basic setting*/
    Route::get('admin/basic', 'BasicSettingController@index')->name('basic.index');
    /* basic setting - Social Icons*/
    Route::post('admin/basic/social', 'BasicSettingController@social')->name('basic.social');
    Route::post('admin/basic/social/update/{id}', 'BasicSettingController@updatesocial')->name('basic.social.update');
    Route::post('admin/basic/delete/{id}', 'BasicSettingController@deletebasic')->name('basic.delete');

    /* basic setting - Slider Lower*/
    Route::post('admin/basic/sliderlower/update/{id}', 'BasicSettingController@updatesliderlower')->name('basic.sliderlower');

    /* basic setting - Info Box*/
    Route::post('admin/basic/info/', 'BasicSettingController@infobox')->name('basic.infobox');
    Route::post('admin/basic/info/update/{id}', 'BasicSettingController@updateinfobox')->name('basic.infobox.update');
});