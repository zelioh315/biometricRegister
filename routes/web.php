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



Route::get('/student-login','PagesController@studentLogin');
Route::get('/staff-login','PagesController@staffLogin');
Route::get('/services','PagesController@services');
Route::resource('attendance','AttendanceController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
