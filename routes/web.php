<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

Route::get('/', [ComicController::class, 'index'])
    ->name('users.index');


Route::get('/users/create', [ComicController::class, 'create'])
    ->name('users.create');

Route::post('/users/store', [ComicController::class, 'store'])
    ->name('users.store');

Route::get('/users/{id}', [ComicController::class, 'show'])
    ->name('users.show');


Route::delete('/users/{id}', [ComicController::class, 'destroy'])
    ->name('users.destroy');

Route::get('/users/{id}/edit', [ComicController::class, 'edit'])
    ->name('users.edit');

Route::put('/users/{id}/edit', [ComicController::class, 'update'])
    ->name('users.update');
