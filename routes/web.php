<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artists/create', [ArtistController::class, 'create'])->name('artists.create');
Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');
Route::get('/artists/{id}/edit', [ArtistController::class, 'edit'])->name('artists.edit');
Route::post('/artists/{id}/update', [ArtistController::class, 'update'])->name('artists.update');
Route::get('/artists/{id}/delete', [ArtistController::class, 'delete'])->name('artists.delete');
Route::resource('albums', AlbumController::class);