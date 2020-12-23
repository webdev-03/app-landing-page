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

Auth::routes();

Route::get('/', 'Frontend\HomeController@home');
Route::get('blog', 'Frontend\HomeController@blog')->name('blog');
Route::get('contact', 'Frontend\HomeController@contact')->name('contact');
Route::get('elements', 'Frontend\HomeController@elements')->name('elements');
Route::get('feature', 'Frontend\HomeController@feature')->name('feature');
Route::get('home', 'Frontend\HomeController@home')->name('home');
Route::get('industries', 'Frontend\HomeController@industries')->name('industries');
Route::get('pricing', 'Frontend\HomeController@pricing')->name('pricing');
Route::get('services', 'Frontend\HomeController@services')->name('services');
Route::get('single-blog', 'Frontend\HomeController@singleBlog')->name('single.blog');

Route::get('/home', 'HomeController@index')->name('home');
