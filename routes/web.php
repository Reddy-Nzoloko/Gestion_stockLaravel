<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect('/produits'); }); // Redirige l'accueil

Route::get('/produits', [ProductController::class, 'index'])->name('produits.index');
Route::get('/produits/creer', [ProductController::class, 'create'])->name('produits.create');
Route::post('/produits', [ProductController::class, 'store'])->name('produits.store');
//Route::delete('/produits/{product}', [ProductController::class, 'destroy'])->name('produits.destroy');
Route::get('/produits/{product}/modifier', [ProductController::class, 'edit'])->name('produits.edit');
Route::put('/produits/{product}', [ProductController::class, 'update'])->name('produits.update');
Route::delete('/produits/{product}', [ProductController::class, 'destroy'])->name('produits.destroy');
