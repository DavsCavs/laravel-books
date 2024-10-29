<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('books', [BookController::class, 'index']);
Route::post('books', [BookController::class, 'store']);
Route::get('books/create', [BookController::class, 'create']);
Route::get('books/{id}/edit', [BookController::class, 'edit']);
Route::put('books/{id}/update', [BookController::class, 'update']);
