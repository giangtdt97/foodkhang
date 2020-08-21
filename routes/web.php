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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('','HomeController@index')->name('home');
Route::get('about','AboutController@index')->name('about');
Route::get('reservation','ReservationController@index')->name('reservation');
Route::get('contact','ContactController@index')->name('contact');
Route::get('blog','BlogController@index')->name('blog');
Route::get('menu','MenuController@index')->name('menu');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
