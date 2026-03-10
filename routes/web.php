<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FakePaymentController;
use App\Http\Controllers\HistoryController;
use App\Models\Client;
use App\Models\FakePayment;

// =========================================
//               Home Page
// =========================================
Route::get('/home-page', function () {
    return view('welcome');
})->name('home-page');

// =========================================
//                 Catalog
// =========================================
Route::get('/catalog', [ProductController::class, 'index'])->name('catalog.index');
Route::get('/catalog/{product}', [ProductController::class, 'show'])->name('catalog.show');
Route::get('/catalog/create', [ProductController::class, 'create'])->name('catalog.create');
Route::post('/catalog', [ProductController::class, 'store'])->name('catalog.store');
Route::get('/catalog/{product}/edit', [ProductController::class, 'edit'])->name('catalog.edit');
Route::put('/catalog/{product}', [ProductController::class, 'update'])->name('catalog.update');
Route::delete('/catalog/{product}', [ProductController::class, 'destroy'])->name('catalog.destroy');

// =========================================
//                Cart
// =========================================
Route::get('/cart/{item}/edit', [CartController::class, 'edit'])->name('cart.edit');
Route::put('/cart/{item}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{item}', [CartController::class, 'destroy'])->name('cart.destroy');

// =========================================
//             Fake Payment
// =========================================
Route::get('/fake-payment/{id}/create', [FakePaymentController::class, 'create'])->name('fake-payment.create');
Route::post('/fake-payment/{id}', [FakePaymentController::class, 'store'])->name('fake-payment.store');

// =========================================
//             History
// =========================================
Route::get('/history/{id}', [HistoryController::class, 'show'])->name('history.show');



Route::get('/client', [ClientController::class, 'create'])->name('client.create');
Route::post('/client', [ClientController::class, 'store'])->name('client.store');





Route::get('/login',[ClientController::class, 'show'])->name('login.client');
