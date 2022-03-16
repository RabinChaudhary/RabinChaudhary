<?php

use App\Http\Controllers\TestController;
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
Route::get('/master', [TestController::class, 'index']);
Route::get('/home', [TestController::class, 'home']);
Route::get('/login', [TestController::class, 'login']);
Route::get('/register', [TestController::class, 'register']);
