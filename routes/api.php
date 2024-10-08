<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'store'])->middleware('auth:sanctum');
Route::post('/users/login', [UsersController::class, 'login']);
Route::get('/users', [UsersController::class, 'index'])->middleware('auth:sanctum');
Route::patch('/products/{id}', [ProductsController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->middleware('auth:sanctum');