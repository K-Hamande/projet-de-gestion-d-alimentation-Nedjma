<?php

use App\Http\Controllers\ProductController;
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


Route::get('/',[ProductController::class,'Index'])->name('accueil');


Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('products', [ProductController::class, 'store'])->name('products.store');

Route::get('products/list_Products', [ProductController::class, 'list_Products'])->name('products.list');

Route::get('product/{id}',[ProductController::class,'editer'])->name('editer');

Route::post('products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::get('/products/{id}',[ProductController::class,'deleteProduct'])->name('deleteProduct');


Route::get('generateForty/{id}', [ProductController::class, 'printForty'])->name('generateForty');

Route::get('generateFiftySix/{id}', [ProductController::class, 'printFiftySix'])->name('generateFiftySix');

Route::get('generateSixtyFive/{id}', [ProductController::class, 'printSixtyFive'])->name('generateSixtyFive');

Route::get('generate/{id}', [ProductController::class, 'printPage'])->name('printPage');

});

require __DIR__.'/auth.php';
