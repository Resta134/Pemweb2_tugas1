<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\HomepageController; 

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('product', [HomepageController::class, 'product'])->name('product');
Route::get('categories', [HomepageController::class, 'categories'])->name('categories');


Route::get('product/{slug}', function($slug){ 
    return view('web.single_product'); 
 });

Route::get('/about', function () {
    return "About Page";
});

Route::get('/contact', function () {
    return "Contact Page";
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
