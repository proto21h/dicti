<?php

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

use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return 'Home Page';
});

Route::get('/users','UsersController@showUsers');

Route::get('/words','WordsController@index');

Route::get('/words/{filter}','WordsController@show');