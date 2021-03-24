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

Route::middleware(['auth'])->namespace('App\\Http\\Controllers')->group(function () {
    Route::get('/', function () {
        return redirect()->route('index');
    })->name('index');
    Route::get('index', 'HomeController@index')->name('index');
    Route::get('search', 'HomeController@search')->name('search');
    Route::get('ad/create', 'HomeController@adCreate')->name('ad.create');
});
