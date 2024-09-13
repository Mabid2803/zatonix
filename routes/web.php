<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
