<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', HomeController::class);

Route::prefix('/products')->controller(ProductController::class)->group(function(){
    Route::get('/','index')->name('products.index');
    Route::get('/create','create');
    Route::get('/{id}','show')->name('products.show');
});

Route::post('products', [ProductController::class, 'store'])->name('products.store');
