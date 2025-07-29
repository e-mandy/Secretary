<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProfesseurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::prefix('admin')->as('admin.')->group(function(){
    Route::get('/inscription', function(){
        return view('auth.register');
    })->name('register');
    Route::get('/connexion', function(){
        return view('auth.login');
    })->name('login');

    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
], function() {
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/professeur', ProfesseurController::class);
    Route::resource('/documents', DocumentController::class);
});