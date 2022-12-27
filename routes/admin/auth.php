<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin Auth routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/register', [RegisterController::class, "index"])->name('getAdminRegister');
Route::post('/register', [RegisterController::class, "register"])->name('postAdminRegister');

Route::get('/login', [LoginController::class, "index"])->name('getAdminLogin');
Route::post('/login', [LoginController::class, "login"])->name('postAdminLogin');

Route::post('/logout', [LoginController::class, "logout"])->name('adminLogout');

Route::get('/home', function () {
    return inertia('Dashboard/Home');
})->name('getAdminHome');
