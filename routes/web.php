<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use App\Http\Controllers\SiswaController;

Route::get('/', [SiswaController::class, 'index']);

Route::get('/siswa/create', [SiswaController::class, 'create']);

Route::post('/siswa/store', [SiswaController::class, 'store']);