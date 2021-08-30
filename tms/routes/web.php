<?php

use App\Models\Backend\Branch;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/*
|--------------------------------------------------------------------------
| Backend Admin Panel Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

///Route::get('/booktrip', 'App\Http\Controllers\BackEnd\PageController@booktrip')->name('booktrip');

///Route::get('/trackOrder', 'App\Http\Controllers\BackEnd\PageController@trackOrder')->name('trackOrder');

Route::get('/booktrip', 'App\Http\Controllers\BackEnd\TaskController@booktrip')->name('booktrip');
Route::post('/store', 'App\Http\Controllers\BackEnd\TaskController@store')->name('store');

Route::get('/trackOrder', 'App\Http\Controllers\BackEnd\TaskController@trackOrder')->name('trackOrder');


