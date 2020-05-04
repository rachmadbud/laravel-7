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
Route::get('users/profile', 'UserController@profile');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/edit', 'UserController@edit');
Route::patch('users/edit/{user}', 'UserController@update');
Route::get('users/tambah', 'UserController@create');

Route::post('users/tambah', 'UserController@store');

Route::get('users/lihat', 'SaudaraController@index');
