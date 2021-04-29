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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();


Route::get('/', 'Guest\GuestController@index')->name('homepage');
Route::get('/about', 'Guest\GuestController@about')->name('about');
Route::get('/vision-mission', 'Guest\GuestController@vissionMission')->name('vissionmission');
Route::get('/company', 'Guest\GuestController@company')->name('company');
Route::get('/product', 'Guest\GuestController@product')->name('product');
Route::get('/product/coffee', 'Guest\ProductController@coffee')->name('coffee');
Route::get('/product/rice', 'Guest\ProductController@rice')->name('rice');
Route::get('/product/herbs', 'Guest\ProductController@herbs')->name('herbs');
Route::get('/product/meats', 'Guest\ProductController@meats')->name('meats');
Route::get('/product/fruits', 'Guest\ProductController@fruits')->name('fruits');
Route::get('/product/others', 'Guest\ProductController@others')->name('others');

Route::get('/home', 'HomeController@index')->name('home');
