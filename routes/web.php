<?php

use GuzzleHttp\Middleware;
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
    return view('login');
});

Route::get('create','Users@create');
Route::post('createsub','Users@createsub');
Route::post('loginsub','Users@loginsub');



Route::group(['middleware'=>['check']],function(){
    Route::get('list','Users@list');
});
