<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', 'HomeController@index');
Route::post('/storeNotAsync', 'HomeController@storeNotAsync')->name('storeNotAsync');
Route::post('/storeAsync', 'HomeController@storeAsync')->name('storeAsync');
Route::post('/search', 'HomeController@searchByWord')->name('searchByWord');
