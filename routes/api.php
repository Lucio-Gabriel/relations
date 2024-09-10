<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use App\Models\Invoice;
use Illuminate\Support\Facades\Route;

// u m usuario, inicialmente, tem um endereço
Route::get('/users', [UserController::class, 'index']);

// Buscar por um usuário pelo ID
Route::get('/users/{id}', [UserController::class, 'findOne']);

// Incluir um novo usuário
Route::post('/users',[UserController::class, 'insert']);

Route::get('/addresses', [AddressController::class, 'index']);

// Buscar por um endereço pelo ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

// Incluir um novo endereço
Route::post('/addresses',[AddressController::class, 'insert']);

Route::get('/invoice', [InvoiceController::class, 'index']);

Route::get('/invoice/{id}', [InvoiceController::class, 'findOne']);

Route::post('/invoice', [InvoiceController::class, 'createInvoice']);
