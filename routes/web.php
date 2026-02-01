<?php

use App\Http\Controllers\Note\CreateController;
use App\Http\Controllers\Note\DestroyController;
use App\Http\Controllers\Note\IndexController;
use App\Http\Controllers\Note\ShowController;
use App\Http\Controllers\Note\StoreController;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', [Welcome::class, 'render'])->name('home');

Route::get('/notes', [IndexController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('notes.index');
Route::get('/notes/create', [CreateController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('notes.create');
Route::get('/notes/{note}', [ShowController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('notes.show');
Route::post('/notes/store', [StoreController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('notes.store');
Route::delete('/notes/{note}', [DestroyController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('notes.destroy');


require __DIR__.'/settings.php';
