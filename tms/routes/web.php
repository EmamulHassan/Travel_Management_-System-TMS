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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard', 'App\Http\Controllers\Backend\DashboardController@dashboard') ->name('admin.dashboard');
    Route::group(['prefix' => 'mytask'], function(){
        Route::get('/manage', 'App\Http\Controllers\Backend\TaskController@index') ->name('task.manage');
        Route::get('/create', 'App\Http\Controllers\Backend\TaskController@create') ->name('task.create');
    
    });
});

Route::get('/order', function () {
    return view('order');
});