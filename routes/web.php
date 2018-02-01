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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::GET('/admin/home', 'AdminController@index');
Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin', 'Admin\LoginController@login');
Route::POST('admin/logout', 'Admin\LoginController@logout');
Route::POST('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset', 'ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');