<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/{id}', [StudentsController::class, 'show']);
Route::post('/students', [StudentsController::class, 'store']);
Route::put('/students/{id}', [StudentsController::class, 'update']);
Route::patch('/students/{id}', [StudentsController::class, 'patch']);
Route::delete('/students', [StudentsController::class, 'destroyAll']);
Route::delete('/students/{id}', [StudentsController::class, 'destroy']);