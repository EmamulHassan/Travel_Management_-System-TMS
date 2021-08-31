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

Route::get('/', 'App\Http\Controllers\BackEnd\homeController@index')->name('homepage');

///Route::get('/booktrip', 'App\Http\Controllers\BackEnd\PageController@booktrip')->name('booktrip');

///Route::get('/trackOrder', 'App\Http\Controllers\BackEnd\PageController@trackOrder')->name('trackOrder');





Route::get('/booktrip', 'App\Http\Controllers\BackEnd\TaskController@booktrip')->name('booktrip');
Route::post('/store', 'App\Http\Controllers\BackEnd\TaskController@store')->name('store');

Route::get('/trackOrder', 'App\Http\Controllers\BackEnd\TaskController@trackOrder')->name('trackOrder');
Route::get('/search', 'App\Http\Controllers\BackEnd\TaskController@search')->name('search');


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




//this routes are for branch management
Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard', 'App\Http\Controllers\Backend\DashboardController@dashboard') ->name('admin.dashboard');
    Route::group(['prefix' => '/branch'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\BranchController@index')->name('branch.manage');
        Route::get('/create','App\Http\Controllers\Backend\BranchController@create')->name('branch.create');
        Route::post('/store','App\Http\Controllers\Backend\BranchController@store')->name('branch.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\BranchController@edit')->name('branch.edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\BranchController@update')->name('branch.update');
        Route::post('/destroy/{id}','App\Http\Controllers\Backend\BranchController@destroy')->name('branch.destroy');
    });

});




