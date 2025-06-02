<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\BroadcastController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\SectionController;

// Rota pública principal
Route::get('/', [HomeController::class, 'index'])->name('home');
// recebe o formulário de contato e dispara WhatsApp
Route::post('/contato', [ContactController::class, 'store'])->name('contact.store');

// autenticação (Breeze / Jetstream)
require __DIR__.'/auth.php';

// Painel admin
Route::prefix('admin')
     ->middleware(['auth','verified'])
     ->name('admin.')
     ->group(function(){

    // dashboard
    Route::get('dashboard', [DashboardController::class,'index'])
         ->name('dashboard');

    // CRUD básico
    Route::resource('services',     ServiceController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('clients',      ClientController::class);
    Route::resource('sections',     SectionController::class);

    // lista de contatos recebidos
    Route::get('contatos', [AdminContactController::class,'index'])
         ->name('contacts.index');

    // broadcast (envio em massa)
    Route::get('broadcasts/create', [BroadcastController::class,'create'])
         ->name('broadcasts.create');
    Route::post('broadcasts', [BroadcastController::class,'store'])
         ->name('broadcasts.store');
});
