<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Models\Client;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/client', [ClientController::class, 'create'])->name('client.create');
Route::post('/client', [ClientController::class, 'store'])->name('client.store');





Route::get('/login',[ClientController::class, 'show'])->name('login.client');
