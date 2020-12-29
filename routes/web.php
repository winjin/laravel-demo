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
Route::get('users', 'Back\UserController@index');

// Http\Controllers\Back\LoginController.php

// Route::get('/home', 'HomeController@index');
// Http\Controllers\HomeController.php

// Route::post('changePic','Members\MembersController@changePic');
// D:\laragon\www\dcr_server_php\app\Http\Controllers\Members\MembersController.php