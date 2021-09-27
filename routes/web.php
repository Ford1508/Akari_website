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
Route::get('/',function() {
    return view('welcome');
});

Route::group(['namespace' => 'Auth'], function () {
    // Login, logout
    Route::get('/login', 'LoginController@showLoginForm')->name('web.form.login');
    Route::post('/login', 'LoginController@login')->name('web.handle.login');
    Route::get('/logout', 'LoginController@logout')->name('web.handle.logout');
    // Register
    Route::get('/register', 'RegisterController@showRegisterForm')->name('web.form.register');
    Route::post('/register', 'RegisterController@register')->name('web.handle.register');
    // Social Login
    Route::get('/oauth/{driver}', 'SocialLoginController@redirectToProvider')->name('web.social.oauth');
    Route::get('/oauth/{driver}/callback', 'SocialLoginController@handleProviderCallback')->name('web.social.callback');
});
