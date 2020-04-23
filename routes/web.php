<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'HomeController')->name('home');

Route::middleware('web')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

	Route::get('/', 'AdminController');

	Route::resource('/category', 'CategoryController');

	Route::resource('/role', 'RoleController');

});
