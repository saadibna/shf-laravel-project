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

Route::get('/admin/main','AdminController@dashboard')->name('main');
Route::get('/admin/add-blog','AdminController@blog')->name('add-blog');
Route::get('/admin/add-service','AdminController@service')->name('add-service');
Route::get('/admin/add-lawyer','AdminController@lawyer')->name('add-lawyer');
Route::get('/admin/add-category','AdminController@category')->name('add-category');
Route::get('/admin/add-case-study','AdminController@case')->name('add-case-study');

Route::get('/admin/appointment','AdminController@appoint')->name('appoint');
Route::get('/admin/add-testimonial','AdminController@test')->name('test');
Route::get('/admin/blogtable','AdminController@table')->name('showtable');
Route::get('/admin/testimonialtable','AdminController@table1')->name('showtable1');
Route::get('/admin/servicetable','AdminController@table2')->name('showtable2');
Route::get('/admin/lawyertable','AdminController@table3')->name('showtable3');
Route::get('/admin/categorytable','AdminController@table4')->name('showtable4');







Route::get('/admin/appointment','AdminController@appoint')->name('appoint');
Route::get('/admin/add-testimonials','AdminController@testimonial')->name('add-testimonial');
Route::get('/admin/case-study-table','AdminController@tableCaseStudy')->name('table-case');
Route::get('/admin/appointment-table','AdminController@tableAppointment')->name('table-appointment');



Route::get('/general','AdminController@general');




