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

Route::get('/homepage','HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('home.search');

Route::get('login/facebook', 'SocialController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'SocialController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin'], function (){
   Route::get('/admin/dashboard', 'AdminController@index');
   Route::get('/admin/dashboard/user-table', 'UserTableController@list')->name('user.list');
   Route::get('/admin/dashboard/user-table/edit/{id}', 'UserTableController@edit')->name('user.edit');
   Route::delete('/admin/dashboard/user-table/delete/{id}', 'UserTableController@destroy')->name('user.destroy');
});


