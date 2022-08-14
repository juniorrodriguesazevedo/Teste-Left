<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

//  Search
Route::any('products/search/', [ProductController::class, 'search'])->name('products.search');
Route::any('clients/search/', [ClientController::class, 'search'])->name('clients.search');

Route::resources([
    'products' => ProductController::class,
    'categories' => CategoryController::class,
    'clients' => ClientController::class,
    'address' => AddressController::class
]);
