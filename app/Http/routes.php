<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});

//Login and Logout
Route::get('admin_login', 'Admin\SiteController@getLogin');
Route::post('admin_login', 'Admin\SiteController@postLogin');
Route::get('admin_logout', 'Admin\SiteController@logout');

// Controllers Within The "App\Http\Controllers\Admin" Namespace
Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::controller('admin', 'IndexController');
});
