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

Route::get('news','NewsController@index')->name('add-news');
Route::get('localization/{locale}','LocalizationController@index');


Route::get('post/{post}','PostController@show')->name('post');
Route::get('video/{video}','VideoController@show')->name('video');
Route::get('/', function () {
  return redirect('/login');
});
Route::get('/admin', 'AuthController@create');
Route::post('/admin', 'AuthController@store');
Route::post('/admin/logout', 'AuthController@logout');
Route::resource('admin/posts', 'PostsController');
Route::resource('admin/create', 'PostsController@create');
Route::resource('companies','CompaniesController');
Route::resource('employees','EmployeesController');
Route::get('sendmail','MailController@index');
Route::get('users', 'HomeController@users');
