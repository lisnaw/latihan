<?php

use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::post('/create', [DaftarController::class, 'daftar']);
Route::get('/show', [DaftarController::class, 'show']);

Route::get('/daftar/{id}/edit', [DaftarController::class, "edit"]);

Route::put('/daftar/{id}', [DaftarController::class, 'update']);

Route::delete('/daftar/{id}', [DaftarController::class, 'destroy']);


Route::get('/input', [DaftarController::class, 'input']);
