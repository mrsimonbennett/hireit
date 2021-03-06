<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HireIt\Controllers\HomeController@getIndex');
Route::controller('/search','HireIt\Controllers\Home\SearchController');

Route::get('/admin','HireIt\Controllers\Admin\MainAdminController@getIndex');
Route::controller('/admin/auth','HireIt\Controllers\Admin\AuthController');