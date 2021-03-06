<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Order;
use Illuminate\Support\Facades\Input;

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

if (App::environment('production', 'staging')) {
    URL::forceScheme('https');
}

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('','HomeController@index')->name('home');
Route::get('about','AboutController@index')->name('about');
Route::get('reservation','ReservationController@index')->name('reservation');
Route::get('contact','ContactController@index')->name('contact');


Route::get('blog','BlogController@index')->name('blog');
Route::get('blog/{slug}','BlogController@show' )->name('blog.detail');
Route::get('tag/{slug}','BlogController@showTag')->name('tag.detail');
Route::get('set','BlogController@set')->name('set');
Route::get('get','BlogController@get')->name('get');


Route::get('menu','ProductController@index')->name('menu');
Route::get('product/{slug}', 'ProductController@show')->name('product.show');
Route::get('service/{slug}', 'ProductController@showService')->name('service.show');
Route::get('category/{slug}', 'ProductController@showCategory')->name('category.show');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
