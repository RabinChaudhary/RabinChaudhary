<?php

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
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
Route::get('/home', [TestController::class, 'home']);

Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('loginhome/', [DeleteController::class, 'loginhome'])->name('viewhome');

Route::get('loginhome/{id}', [DeleteController::class, 'deleteUser'])->name('deleteUser');

Route::get('loginhome/{id}/update', [DeleteController::class, 'updateUser'])->name('updateUser');
Route::post('loginhome/update', [DeleteController::class, 'update'])->name('update');
