<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/main', function () {
    return view('index');
})->name('home');


Route::get('/registration', [UserController::class, 'create'])->middleware('guest')->name('registration');
Route::post('/registration', [UserController::class, 'store'])->middleware('guest');

Route::get('/authorization', [AuthController::class, 'create'])->middleware('guest')->name('autho');
Route::post('/authorization', [AuthController::class, 'store'])->middleware('guest');

Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth')->name('logout');

Route::view('/tasks', 'tasks')->middleware('auth')->name('tasks');
Route::view('/main', 'index')->name('home');