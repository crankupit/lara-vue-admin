<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;

/*
|--------------------------------------------------------------------------
| User Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register User Auth routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "user" middleware group. Now create something great!
|
*/

Route::get('/register', [RegisterController::class, "index"])->name('getUserRegister');
Route::post('/register', [RegisterController::class, "register"])->name('postUserRegister');

Route::get('/login', [LoginController::class, "index"])->name('getUserLogin');
Route::post('/login', [LoginController::class, "login"])->name('postUserLogin');

Route::post('/logout', [LoginController::class, "logout"])->name('userLogout');

Route::get('/home', function () {
    return inertia('Dashboard/Home');
})->middleware('auth:user')->name('getUserHome');
