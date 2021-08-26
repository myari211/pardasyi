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
Route::get('/maps', 'Guest\GuestController@maps')->name('maps');
Route::get('/product', 'Guest\GuestController@product')->name('product');
Route::get('/product/coffee', 'Guest\ProductController@coffee')->name('coffee');
Route::get('/product/rice', 'Guest\ProductController@rice')->name('rice');
Route::get('/product/herbs', 'Guest\ProductController@herbs')->name('herbs');
Route::get('/product/meats', 'Guest\ProductController@meats')->name('meats');
Route::get('/product/fruits', 'Guest\ProductController@fruits')->name('fruits');
Route::get('/product/fish', 'Guest\ProductController@fish')->name('fish');
Route::get('/product/others', 'Guest\ProductController@others')->name('others');

//coffee
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/coffee/post', 'HomeController@coffe_post')->name('coffe.post');
Route::post('/coffee/update/{id}', 'HomeController@coffe_update')->name('coffe.update');
Route::post('/coffee/delete/{id}', 'HomeController@coffe_delete')->name('coffe.delete');

//rice
Route::get('/admin/rice', 'HomeController@rice')->name('rice');
Route::post('/admin/rice', 'HomeController@createRice')->name('admin.rice.post');
Route::post('/admin/rice/update/{id}', 'HomeController@updateRice')->name('admin.rice.update');
Route::post('/admin/delete/rice/{id}', 'HomeController@deleteRice')->name('admin.rice.delete');

//fish
Route::get('/admin/fish', 'HomeController@fish')->name('fish');
Route::post('/admin/fish', 'HomeController@createFish')->name('create.fish');
Route::post('/admin/edit/fish/{id}', 'HomeController@updateFish')->name('admin.fish.update');
Route::post('/admin/fish/delete/{id}', 'HomeController@deleteFish')->name('admin.fish.delete');

//herbs
Route::get('/admin/herbs', 'HomeController@herbs')->name('herbs');
Route::post('/admin/herbs', 'HomeController@createHerbs')->name('create.herbs');
Route::post('/admin/herbs/update/{id}', 'HomeController@updateHerbs')->name('update.herbs');
Route::post('/admin/herbs/delete/{id}', 'HomeController@deleteHerbs')->name('delete.herbs');

//fruit
Route::get('/admin/fruits', 'HomeController@fruits')->name('fruits');
Route::post('/admin/fruits', 'HomeController@createFruits')->name('create.fruits');
Route::post('/admin/edit/fruits/{id}', 'HomeController@editFruits')->name('edit.fruits');
Route::post('/admin/delete/fruits/{id}', 'HomeController@deleteFruits')->name('delete.fruits');

//meats
Route::get('/admin/meats', 'HomeController@meats')->name('meats');
Route::post('/admin/meats', 'HomeController@createMeats')->name('create.meats');
Route::post('/admin/edit/meats/{id}', 'HomeController@editMeats')->name('edit.meats');
Route::post('/admin/delete/meats/{id}', 'HomeController@deleteMeats')->name('delete.meats');