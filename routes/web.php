<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ClasController;

// ROUTE SISWA
Route::get('/', [SiswaController::class, 'index']);

Route::get('/siswa/create', [SiswaController::class, 'create']);

Route::post('/siswa/store', [SiswaController::class, 'store']);

Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy']);

Route::get('/siswa/show/{id}', [SiswaController::class, 'show']);

Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);

Route::put('/siswa/update/{id}', [SiswaController::class, 'update']);

// ROUTE CLASS
Route::get('/clas', [ClasController::class, 'index']);

Route::get('/clas/create', [ClasController::class, 'create']);

Route::post('/clas/store', [ClasController::class, 'store']);

Route::get('/clas/delete/{id}', [ClasController::class, 'destroy']);

Route::get('/clas/show/{id}', [ClasController::class, 'show']);

Route::get('/clas/edit/{id}', [ClasController::class, 'edit']);

Route::put('/clas/update/{id}', [ClasController::class, 'update']);
