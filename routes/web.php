<?php

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
// });




Route::get('/', 'HomeController@index')->name('landing');
Route::get('/about_us', 'HomeController@about_us')->name('about_us');
Route::get('/contact_us', 'HomeController@contact_us')->name('contact_us');
Route::get('/cookie', 'HomeController@cookie')->name('cookie');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/our_data', 'HomeController@our_data')->name('our_data');

Route::get('/sendEmail', 'HomeController@sendEmail')->name('sendEmail');



Route::post('/kofiAPI', 'HomeController@kofiAPI')->name('kofiAPI');