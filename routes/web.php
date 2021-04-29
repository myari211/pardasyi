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

Route::get('/home', 'HomeController@index')->name('home');
