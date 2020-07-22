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


Route::get('/dashboard1', 'HomeController@loged')->name('dashboard1');
Route::get('/dashboard2', 'HomeController@loged')->name('dashboard2');
Route::get('/dashboard3', 'HomeController@loged')->name('dashboard3');



 Route::resource('country', 'CountryController');
/*Route::get('/country', 'CountryController@index')->name('country'); 
Route::post('/country', 'CountryController@create')->name('country.create');
Route::get('/country/{country}', 'CountryController@show')->name('country.show');
Route::get('country/{country}/edit', 'CountryController@edit')->name('country.edit');
Route::get('/country/{destroy}', 'CountryController@destroy')->name('country.destroy');*/
 

 Route::resource('city', 'CityController');
/*Route::get('/city', 'CityController@index')->name('city'); 
Route::post('/city', 'CityController@create')->name('city.create');
Route::get('/city/{city}', 'CityController@show')->name('city.show');
Route::get('city/{city}/edit', 'CityController@edit')->name('city.edit');
Route::get('/city/{destroy}', 'CityController@destroy')->name('city.destroy');*/
 


/* Route::resource('country', 'CityController');

Route::get('/country', 'CountryController@edit')->name('country.edit');
Route::post('/country', 'CountryController@create')->name('country.create');
Route::get('/country', 'CountryController@index')->name('country'); 
 */
/*Route::resource('/country', 'CountryController')->name('country');*/

Route::get('/team', 'HomeController@loged')->name('team');
Route::get('/pos', 'HomeController@loged')->name('pos'); 
Route::get('/profile', 'HomeController@loged')->name('profile'); 


Route::get('/customer', 'HomeController@loged')->name('customer');
Route::get('/pack', 'HomeController@loged')->name('pack');
Route::get('/shipping', 'HomeController@loged')->name('shipping');
Route::get('/message', 'HomeController@loged')->name('message');
Route::get('/package', 'HomeController@loged')->name('package');
Route::get('/shippingWay', 'HomeController@loged')->name('shippingWay'); 
Route::get('/alert', 'HomeController@loged')->name('alert');
Route::get('/calendar', 'HomeController@loged')->name('calendar');
Route::get('/help', 'HomeController@loged')->name('help');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function()
{
  Route::resource('users', 'UserController');
  
});


Route::get('login/locked', 'Auth\LoginController@locked')->middleware('auth')->name('login.locked');
Route::post('login/locked', 'Auth\LoginController@unlock')->name('login.unlock');

Route::get('/clear-cache', function() {
  Artisan::call('cache:clear');
  return "Cache is cleared";
});
