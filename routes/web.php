<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resources([
    'products' => ProductController::class,
    'categories' => CategoryController::class,
    'clients' => ClientController::class,
    'address' => AddressController::class
]);
