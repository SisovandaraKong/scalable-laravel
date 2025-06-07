<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\UserController;

// List all users
Route::get('/users', [UserController::class, 'index']);

// Create a new user
Route::post('/users', [UserController::class, 'store']);

// Get a single user by ID
Route::get('/users/{id}', [UserController::class, 'show']);

// Update a user by ID
Route::put('/users/{id}', [UserController::class, 'update']);

// Delete a user by ID
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// Product routes
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);

// Job routes
Route::get('/jobs', [JobController::class, 'index']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{id}', [JobController::class, 'show']);
Route::put('/jobs/{id}', [JobController::class, 'update']);
Route::patch('/jobs/{id}', [JobController::class, 'update']);
Route::delete('/jobs/{id}', [JobController::class, 'destroy']);

// Cache routes
Route::get('/cache', [CacheController::class, 'index']);
Route::post('/cache', [CacheController::class, 'store']);
Route::get('/cache/{key}', [CacheController::class, 'show']);
Route::delete('/cache/{key}', [CacheController::class, 'destroy']);