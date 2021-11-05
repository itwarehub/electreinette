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


Route::get('/clear/38272792641843447511','ClearController@clear');


Route::get('/', function () {
    return view('main');
});
// Route::post('paynow','MainController@donate_now');
Route::get('donate','MainController@donate');
// Route::get('donate','MainController@donate');

Route::view('shop','shop');
Route::view('events','events');