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
//Auth::routes();
Auth::routes(['register' => false]);
// Guest Member Non Authentication
Route::group(['middleware' => 'guest'], function () {

    Route::get('/', function () {
        return view('auth.login');
    });

});

