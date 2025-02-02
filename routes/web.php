<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Shop;
use App\Http\Controllers\ShopController;


Route::domain('{shop}.technicaltest.me')->group(function () {
//priorité sur / (pour welcome)
    Route::get('/', function ($shop) {
            // Ajout du domaine complet à la requête
       $shop = Shop::where('domain_name', $shop . '.technicaltest.me')->first();
           
           // Vérifier si la boutique existe et l'utilisateur associé
           if ($shop) {
               $user = $shop->user;  // Accéder à l'utilisateur via la relation
   
               // Afficher la vue showShop avec les informations de l'utilisateur
               return view('showShop', compact('user', 'shop'));
           } else {
               return abort(404); // Si le sous-domaine ne correspond à aucune boutique
           }
       });


       //



   }); 
   
Route::middleware(['auth'])->group(function () {
    Route::get('shop/create', [ShopController::class, 'create'])->name('shop.create');
    Route::post('shop', [ShopController::class, 'store'])->name('shop.store');
   Route::get('shop/{shop}', [ShopController::class, 'show'])->name('shop.show');
    Route::get('my domains', [ShopController::class, 'myDomains'])->name('domains.list');
    Route::get('shopsuccess/{domain}', [ShopController::class, 'success'])->name('shopsuccess');


});









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






//petit test  session//

Route::get('/test-session', function () {
    session(['test' => 'Laravel fonctionne avec file !']);
    return session('test');
});


