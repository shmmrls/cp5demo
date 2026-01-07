<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/create', [ArtistController::class, 'create']);
Route::post('/artists', [ArtistController::class, 'store']);