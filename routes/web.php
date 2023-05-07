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


//Route::group(['middleware' =>[ 'auth']], function () {
    Route::get('/register', '\App\Http\Controllers\DonarController@index')->name('register');
    Route::post('register/store', '\App\Http\Controllers\DonarController@store')->name('register.store');
Route::get('/cpu/{id}', '\App\Http\Controllers\CpuController@index')->name('cbu');
Route::post('cpu/store', '\App\Http\Controllers\CpuController@store')->name('cbu.store');
Route::get('/contact/{id}', '\App\Http\Controllers\ContactController@index')->name('contact');
Route::post('contact/store', '\App\Http\Controllers\ContactController@store')->name('contact.store');
Route::get('/pendings', '\App\Http\Controllers\PendingController@index')->name('pending');
    Route::get('/report', '\App\Http\Controllers\PendingController@report')->name('report');
Route::get('/start/{id}', '\App\Http\Controllers\PendingController@start')->name('start');
Route::get('/final_report/{id}', '\App\Http\Controllers\PendingController@show')->name('show');
Route::get('/collection/{id}', '\App\Http\Controllers\CollectionController@index')->name('collection');
Route::post('collection/store', '\App\Http\Controllers\CollectionController@store')->name('collection.store');






//});
