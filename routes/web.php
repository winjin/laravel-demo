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

Route::get('/', function () {
    return view('welcome');
    // return view('back/login');
});

Route::get('login', 'Back\LoginController@index');
Route::post('login/login', 'Back\LoginController@login');
Route::get('user', 'Back\UserController@index');
Route::get('test', 'Back\TestController@index');

Route::get('child', function () {
    return view('layouts.child');
});

Route::get('first', 'Back\FirstController@index');