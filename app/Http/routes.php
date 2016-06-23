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

// Controllers Within The "App\Http\Controllers\Admin" Namespace
Route::group(['namespace' => 'Admin'], function () {
    Route::controller('admin', 'IndexController');
});
