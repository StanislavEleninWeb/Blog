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

Route::view('/welcome', 'welcome');

Route::middleware('admin.grp')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

	Route::get('/', 'AdminController');

	Route::resource('/user', 'UserController');

	Route::resource('/role', 'RoleController');

	Route::resource('/category', 'CategoryController');

});

//// Compose User Posts route
// Route::get('/users/{user}/posts/{post:slug}', function (User $user, Post $post) {
//     return $post;
// });

//// Custom Error page
// Route::fallback(function(){
// 	return view('error.404');
// });