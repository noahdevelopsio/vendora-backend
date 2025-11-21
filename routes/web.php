<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the Vendora API']);
});

Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
