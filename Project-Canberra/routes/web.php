<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
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
//home
Route::get('/', [PostController::class,'index']);
Route::get('/contact', [PostController::class,'contact'])->name('contact');


// Admin ROutes

Route::post('/admin',[AdminController::class,'admin'])->name('admin');
Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/logouts',[AdminController::class,'logouts'])->name('logouts');
Route::get('/admin/{id}/edit', [AdminController::class,'edit'])->name('user.edit');
Route::get('/admin/view', [AdminController::class,'getUsers'])->name('users.view');
Route::get('/admin/add', [AdminController::class,'addUsers'])->name('users.add');
Route::get('/admin/save',  [AdminController::class,'addUser']);
Route::post('/admin/save', [AdminController::class,'addUser'])->name('users.save');
Route::get('/admin/dashboard', [AdminController::class,'getDashboard'])->name('admin.dashboard');


Route::post('/user/update', 'App\Http\Controllers\UserController@update')->name('user.update');


//Post
Route::get('/admin/post/add',[PostController::class,'add']);
Route::post('/admin/post/add',[PostController::class,'store'])->name('addPost');
Route::get('/admin/post/action',[PostController::class,'action'])->name('action');
Route::get('/admin/post/action/edit/{id}',[PostController::class,'edit'])->name('edit');
Route::post('/admin/post/action/edit',[PostController::class,'update'])->name('updatePost');
Route::delete('/admin/post/action/delete/{id}',[PostController::class,'destroy'])->name('posts.destroy');









Auth::routes();
//user
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', App\Http\Controllers\UserController::class);

Route::get('/status-update/{id}',[UserController::class,'status_update']);

Route::get('user/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::post('user/edit',[UserController::class,'update'])->name('update');

