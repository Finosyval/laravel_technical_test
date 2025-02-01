<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


use App\Http\Controllers\ShopController;

Route::middleware(['auth'])->group(function () {
    Route::get('shop/create', [ShopController::class, 'create'])->name('shop.create');
    Route::post('shop', [ShopController::class, 'store'])->name('shop.store');
   // Route::get('shop/{shop}', [ShopController::class, 'show'])->name('shop.show');
    Route::get('my domains', [ShopController::class, 'myDomains'])->name('domains.list');
    Route::get('shopsuccess/{domain}', [ShopController::class, 'success'])->name('shopsuccess');

    Route::domain('{shop}.technicaltest.me')->group(function () {
        Route::get('/', function ($shop) {
            $user = auth()->user();
            return view('showShop', compact( 'user'));
        })->name('shop.show');
    });
    

});

