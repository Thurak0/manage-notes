<?php

use App\Http\Controllers\Note\CreateController;
use App\Http\Controllers\Note\DestroyController;
use App\Http\Controllers\Note\IndexController;
use App\Http\Controllers\Note\ShowController;
use App\Http\Controllers\Note\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/notes', [IndexController::class, 'index'])->name('notes.index');
Route::get('/notes/create', [CreateController::class, 'create'])->name('notes.create');
Route::get('/notes/{note}', [ShowController::class, 'show'])->name('notes.show');
Route::post('/notes/store', [StoreController::class, 'store'])->name('notes.store');
Route::delete('/notes/{note}', [DestroyController::class, 'destroy'])->name('notes.destroy');

/*
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
*/
require __DIR__.'/settings.php';
