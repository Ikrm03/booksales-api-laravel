<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// --- AUTHENTICATION ROUTES ---
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');



// 1. PUBLIC ROUTES (Bisa diakses siapa saja / Tanpa Login)

Route::apiResource('/books', BookController::class)->only(['index', 'show']);
Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);
Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);



// 2. PROTECTED ROUTES (Khusus Admin: Store, Update, Destroy)

Route::middleware(['auth:api', 'role:admin'])->group(function(){
    Route::apiResource('/books', BookController::class)->except(['index', 'show']);
    Route::apiResource('/genres', GenreController::class)->except(['index', 'show']);
    Route::apiResource('/authors', AuthorController::class)->except(['index', 'show']);
});