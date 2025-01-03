<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ConvertCase;

// just showing laravel page 
Route::view('/welcome', 'welcome');

// show main page here, using livewire ...
Route::get('/', ConvertCase::class);


/*
// save it for later :D
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
*/
// no need for auth for a while
// require __DIR__.'/auth.php';
