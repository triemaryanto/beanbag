<?php

use App\Livewire\Belakang\Home as BelakangHome;
use App\Livewire\Belakang\Page\Profile;
use App\Livewire\Belakang\Page\User;
use App\Livewire\Belakang\Page\Role;
use App\Livewire\Belakang\Page\Permission;
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
    Route::get('/home', BelakangHome::class)->name('home');
    Route::get('/user', User::class)->name('user');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/role', Role::class)->name('role');
    Route::get('/permission', Permission::class)->name('permission');
});