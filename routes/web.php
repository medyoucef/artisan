<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\SocieteArtisanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\AdminDevisController;

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


Route::get('/login', [AuthController::class, 'index'])->name('login');

// route pour la page admin
Route::middleware(['auth'])->group(function () { Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard'); });

// route pour le chat en ligne


Route::middleware('auth')->group(function () {

    Route::get('/chat/{artisan}', [ChatController::class, 'startConversation'])->name('chat.start');

    Route::get('/conversation/{id}', [ChatController::class, 'show'])->name('chat.show');

    Route::post('/conversation/{id}/send', [ChatController::class, 'send'])->name('chat.send');
});

Route::middleware('auth')->group(function () {
    Route::get('/messages', [ChatController::class, 'inbox'])->name('messages.inbox');
});

Route::get('/admin/artisans', [DashboardController::class, 'artisans'])->name('admin.artisans');
Route::get('/admin/societes', [DashboardController::class, 'societes'])->name('admin.societes');
Route::get('/admin/users', [DashboardController::class, 'users'])->name('admin.users');
Route::get('/admin/messages', [DashboardController::class, 'messages'])->name('admin.messages');
Route::get('/admin/professions', [DashboardController::class, 'professions'])->name('admin.professions');

Route::delete('/admin/users/{id}', [DashboardController::class, 'deleteUser'])->name('admin.users.delete');
Route::delete('/admin/artisans/{id}', [DashboardController::class, 'deleteArtisan'])->name('admin.artisans.delete');
Route::delete('/admin/societes/{id}', [DashboardController::class, 'deleteSociete'])->name('admin.societes.delete');
Route::delete('/admin/messages/{id}', [DashboardController::class, 'deleteMessage'])->name('admin.messages.delete');
Route::delete('/admin/professions/{id}', [DashboardController::class, 'deleteProfession'])->name('admin.professions.delete');

// modifier user
Route::get('/admin/users/{id}/edit', [DashboardController::class, 'editUser'])->name('admin.users.edit');
Route::put('/admin/users/{id}', [DashboardController::class, 'updateUser'])->name('admin.users.update');

// modifier profession

Route::get('/admin/professions/{id}/edit', [DashboardController::class, 'editProfession'])->name('admin.professions.edit');
Route::put('/admin/professions/{id}', [DashboardController::class, 'updateProfession'])->name('admin.professions.update');

// ajouter profession
Route::get('/admin/professions/create', [DashboardController::class, 'createProfession'])->name('admin.professions.create');
Route::post('/admin/professions', [DashboardController::class, 'storeProfession'])->name('admin.professions.store');

// modifier artisan
Route::get('/admin/artisans/{id}/edit', [DashboardController::class, 'editArtisan'])->name('admin.artisans.edit');
Route::put('/admin/artisans/{id}', [DashboardController::class, 'updateArtisan'])->name('admin.artisans.update');

// modifier societe
Route::get('/admin/societes/{id}/edit', [DashboardController::class, 'editSociete'])->name('admin.societes.edit');
Route::put('/admin/societes/{id}', [DashboardController::class, 'updateSociete'])->name('admin.societes.update');

// envoie de devis 

Route::middleware(['auth'])->group(function () {
    Route::get('/conversation/{id}/devis/create', [DevisController::class, 'create'])->name('devis.create');
    Route::post('/conversation/{id}/devis', [DevisController::class, 'store'])->name('devis.store');

    Route::post('/devis/{id}/accepter', [DevisController::class, 'accepter'])->name('devis.accepter');
    Route::post('/devis/{id}/refuser', [DevisController::class, 'refuser'])->name('devis.refuser');
});



Route::middleware(['auth'])->group(function () {

    // Page "Mes devis" pour le client
    Route::get('/mes-devis', [DevisController::class, 'clientDevis'])
        ->name('client.devis');

});

Route::get('/admin/devis', [AdminDevisController::class, 'index']) ->name('admin.devis');

// ajout d'un artisan via la dashboard
Route::get('/admin/artisans/create', [ArtisanController::class, 'create']) ->name('admin.artisans.create');
Route::post('/admin/artisans/store', [ArtisanController::class, 'store']) ->name('admin.artisans.store');

// ajout d'une societé via la dashboard

Route::get('/admin/societes/create', [SocieteArtisanController::class, 'create']) ->name('admin.societes.create'); 
Route::post('/admin/societes/store', [SocieteArtisanController::class, 'store']) ->name('admin.societes.store');