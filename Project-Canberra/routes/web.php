<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home.homepage');
});

Route::get('home', function () {
    return view('layouts.app');
});

Route::get('/user/register', 'App\Http\Controllers\UserController@register')->name('user.register');
Route::get('/user/view', 'App\Http\Controllers\UserController@view')->name('user.view');
Route::post('/user/store', 'App\Http\Controllers\UserController@store')->name('user.store');

Route::get('/user/login', 'App\Http\Controllers\UserController@login')->name('user.login');
Route::post('/user/auth', 'App\Http\Controllers\UserController@auth')->name('user.auth');

Route::get('/user/forgotpassword', 'App\Http\Controllers\UserController@forgotpassword')->name('user.forgotpassword');
Route::post('/user/resetpassword', 'App\Http\Controllers\UserController@resetpassword')->name('user.resetpassword');

Route::get('/user/{id}/edit', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::post('/user/update', 'App\Http\Controllers\UserController@update')->name('user.update');


Route::get('/admin',[UserController::class,'admin'])->name('admin');
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
