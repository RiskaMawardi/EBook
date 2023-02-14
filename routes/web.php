<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
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
    return view('landing');
});

// Route FE
Route::get('main', function () {
    return view('layouts.main');
});
Route::get('dashboard',[AdminController::class , 'index']);

// Route::get('user', function () {
//     return view('dashboard.user');
// });

Route::get('/users',[AdminController::class,'indexUsers']);

Route::get('book', function () {
    return view('dashboard.book');
});
Route::get('category', function () {
    return view('dashboard.category');
});
Route::get('rent-log', function () {
    return view('dashboard.rent-log');
});

//Route Register
Route::get('/index-register',[AuthController::class,'indexRegister'])->name('register');
Route::post('/store-register',[AuthController::class, 'storeRegist'])->name('storeRegist');

//Route Login
Route::get('/index-login',[AuthController::class,'indexLogin'])->name('login');
Route::post('/store-login',[AuthController::class,'storeLogin'])->name('storeLogin');

//edit
Route::get('/edit-usr/{$id}',[AdminController::class, 'indexEditUsers'])->name('Edit');
Route::post('/update-usr/{$id}',[AdminController::class,'updateUsr'])->name('updateUsr');


//Route Kirim pesan pada landing page
Route::post('/storeMessage',[MessageController::class,'storeMessage'])->name('storeMessage');
