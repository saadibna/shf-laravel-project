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
// Route::get('/','Homecontroller@master')->name('master');
Route::get('/','Homecontroller@index')->name('index');
Route::get('/about','Homecontroller@about')->name('about');
Route::get('/contact','Homecontroller@contact')->name('contact');
