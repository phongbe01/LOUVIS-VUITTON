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
Route::get('/','HomeController@index')->name('home');
Route::get('/homepage','HomeController@index')->name('home');

Route::get('login/facebook', 'SocialController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'SocialController@handleProviderCallback');

Auth::routes();

Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin', 'prefix' => '/admin/dashboard'], function (){
   Route::get('', 'AdminController@index');
   Route::resource('/users', 'UserController');
   Route::resource('/roles', 'RoleController');

});


