<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\SocieteArtisanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfessionController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');


Route::get('/services', [ProfessionController::class, 'index'])->name('service');
Route::get('/company', [SocieteArtisanController::class, 'index'])->name('company');
Route::get('/societes/search', [SocieteArtisanController::class, 'search'])->name('societes.search');


Route::get('/artisans', [ArtisanController::class, 'index'])->name('artisan');
Route::get('/artisans/search', [ArtisanController::class, 'search'])->name('artisans.search');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

Route::get('/auth', [AuthController::class, 'index'])->name('auth');

Route::post('/login', [AuthController::class, 'login'])->name('login.custom');

Route::post('/register', [AuthController::class, 'register'])->name('register.custom');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::post('/rejoindre-artisan', [ArtisanController::class, 'rejoindre'])->name('artisan.rejoindre');


Route::post('/rejoindre-societe', [ProfileController::class, 'rejoindreSociete'])->name('societe.rejoindre');
