<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'home']);



Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/create_room', [AdminController::class, 'create_room']);

Route::post('/add_room', [AdminController::class, 'add_room']);

Route::get('/view_room', [AdminController::class, 'view_room']);