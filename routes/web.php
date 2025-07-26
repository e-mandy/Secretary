<?php

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
});

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
], function() {
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});