<?php

use App\Http\Controllers\BuyerController\BuyerController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ======= Byer ==========
Route::resource('buyer', BuyerController::class, ['only' => 'index', 'show']);

// ======= Category ==========
Route::resource('categories', CategoryController::class, ['except' => 'create', 'edit']);

// ======= Byer ==========
Route::resource('product', ProductController::class, ['only' => 'index', 'show']);


// ======= Byer ==========
Route::resource('transactions', TransactionController::class, ['only' => 'index', 'show']);



// ======= Seller ==========
Route::resource('sellers', SellerController::class, ['only' => 'index', 'show']);




// ======= Byer ==========
Route::resource('users', UserController::class, ['only' => 'index', 'show']);

