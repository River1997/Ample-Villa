<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'FrontController@index')->name('home');

Route::get('/admin/news/create', 'NewsController@create');

Route::middleware(['auth', 'can:admin'])->prefix('admin')->group(function(){

Route::get('/news', 'NewsController@index');
Route::get('/news/create', 'NewsController@create');
Route::post('/news/store', 'NewsController@store');
Route::get('/news/edit/{id}', 'NewsController@edit');
Route::post('/news/update/{id}', 'NewsController@update');
Route::delete('/news/delete/{id}', 'NewsController@delete');

Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::get('/user/update', 'UserController@update');
Route::get('/user/delete', 'UserController@delete');

Route::get('/contact_us', 'ContactUsController@index');
Route::post('/contact_us/create', 'ContactUsController@create');
Route::post('/contact_us/update', 'ContactUsController@update');
Route::get('/contact_us/delete', 'ContactUsController@delete');

});

Route::get('/about_us', 'FrontController@about_us');

Route::get('/member/register', 'FrontController@register');



// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
