<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('profesores', [ProfesorController::class, 'index'])->name('profesores.index');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
