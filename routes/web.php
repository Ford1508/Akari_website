<?php

use App\Http\Controllers\LogOnUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Client
Route::group(['namespace' => 'Client'], function () {
    Route::get('/', 'HomeController@index')->name('web.home');
    Route::get('/achiver', 'HomeController@achiver')->name('web.achiver');
    Route::get('/postgallery', 'HomeController@postgallery')->name('web.postgallery');
});

// Route::get('/userprofile', function () {
//     return view('web/userprofile');
// });

Route::get('/user/{id}', 'LogOnUserController@profile')->name('web.user.profile');
Route::get('/user/edit/{id}','LogOnUserController@edit')->name('web.user.edit.form');
Route::post('/user/edit/{id}', 'LogOnUserController@update')->name('web.user.edit');
Route::get('/user/editavatar/{id}', 'LogOnUserController@editimg')->name('web.user.uploadimg.form');
Route::post('/user/editavatar/{id}', 'LogOnUserController@updateimg')->name('web.user.uploadimg');

// Route::post('/user/{id}','LogOnUserController@update')->name('web.user.profile.edit');
// Route::get('/userprofile/{id}','UserController@userprofile')->name('web.userprofile');

Route::get('/editprofile', function () {
    return view('web/user/edit');
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

// Admin
Route::namespace('Admin')->prefix('ad')->group(function () {
    Route::get('/', function () {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('user.list');
        } else {
            return redirect()->route('admin.form.login');
        }
    });
    // Login, logout
    Route::get('/login', 'LoginController@showLoginForm')->name('admin.form.login');
    Route::post('/login', 'LoginController@login')->name('admin.handle.login');
    Route::get('/logout', 'LoginController@logout')->name('admin.handle.logout');

    Route::group(['middleware' => 'check.admin.login'], function() {
        // User
        Route::group(['prefix'=>'user'],function(){
            Route::get('list','UserController@index')->name('user.list');
            Route::get('edit/{id}','UserController@edit')->name('user.edit.form');
            Route::post('edit/{id}','UserController@update')->name('user.edit');
            Route::get('show/{id}','UserController@show')->name('user.show');
        });
        // Parent Category
        Route::group(['prefix'=>'parent_category'],function(){
            Route::get('list','ParentCategoryController@index')->name('parent_category.list');
            Route::get('edit/{id}','ParentCategoryController@edit')->name('parent_category.edit.form');
            Route::post('edit/{id}','ParentCategoryController@update')->name('parent_category.edit');
            Route::get('create','ParentCategoryController@create')->name('parent_category.create.form');
            Route::post('create','ParentCategoryController@store')->name('parent_category.create');
            Route::get('delete/{id}','ParentCategoryController@destroy')->name('parent_category.delete');
        });
        // Category
        Route::group(['prefix'=>'category'],function(){
            Route::get('list','CategoryController@index')->name('category.list');
            Route::get('edit/{id}','CategoryController@edit')->name('category.edit.form');
            Route::post('edit/{id}','CategoryController@update')->name('category.edit');
            Route::get('create','CategoryController@create')->name('category.create.form');
            Route::post('create','CategoryController@store')->name('category.create');
            Route::get('delete/{id}','CategoryController@destroy')->name('category.delete');
        });
        // Post
        Route::group(['prefix'=>'post'],function(){
            Route::get('list','PostController@index')->name('post.list');
            Route::get('ctvlist','PostController@ctvindex')->name('ctvpost.list');
            Route::get('edit/{id}','PostController@edit')->name('post.edit.form');
            Route::post('edit/{id}','PostController@update')->name('post.edit');
            Route::get('create','PostController@create')->name('post.create.form');
            Route::post('create','PostController@store')->name('post.create');
            Route::get('delete/{id}','PostController@destroy')->name('post.delete');
            Route::get('accept/{id}','PostController@accept')->name('post.accept');
            Route::get('show/{id}','PostController@show')->name('post.show');
            Route::get('ctvshow/{id}','PostController@ctvshow')->name('ctvpost.show');
        });
    });
});
Route::resource('/baiviet','BaivietController');
Route::get('/baiviet/accept/{id}','BaivietController@accept')->name('baiviet.accept');
Route::get('/baiviet/delete/{id}','BaivietController@destroy')->name('baiviet.destroy');
Route::resource('/ChiTietBaiViet','detailpostcontroller');

