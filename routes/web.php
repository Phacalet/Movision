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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@loged')->name('dashboard');
Route::get('/country', 'HomeController@located')->name('country');

/* Route::get('/dashboard', 'HomeController@loged')->name('dashboard');
Route::get('/dashboard', 'HomeController@loged')->name('dashboard');
Route::get('/dashboard', 'HomeController@loged')->name('dashboard');
Route::get('/dashboard', 'HomeController@loged')->name('dashboard'); */

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function()
{
  Route::resource('users', 'UserController');
});


Route::get('login/locked', 'Auth\LoginController@locked')->middleware('auth')->name('login.locked');
Route::post('login/locked', 'Auth\LoginController@unlock')->name('login.unlock');


