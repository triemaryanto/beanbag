<?php

use App\Livewire\Depan\Home;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', Home::class)->name('depan.home');

Route::get('template', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
