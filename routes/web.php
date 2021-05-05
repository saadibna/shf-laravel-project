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
// Route::get('/','myController@master')->name('master');
Route::get('/index','myController@index')->name('index');
Route::get('/about','myController@about')->name('about');
Route::get('/service','myController@service')->name('service');
Route::get('/caseStudy','myController@case')->name('case');
Route::get('/blog','myController@blog')->name('blog');
Route::get('/contact','myController@contact')->name('contact');
Route::get('/appointment','myController@appointment')->name('appointment');

Auth::routes();

Route::get('/home', 'Homecontroller@index')->name('home');

Route::get('/admin','AdminController@home');
Route::get('/general','AdminController@general');
