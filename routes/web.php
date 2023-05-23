<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\NivelesController;
use App\Http\Controllers\OtroController;


Route::get('/usuarios', [NivelesController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [NivelesController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [NivelesController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{id}', [NivelesController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{id}/edit', [NivelesController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [NivelesController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [NivelesController::class, 'destroy'])->name('usuarios.destroy');

Route::get('/otro',[OtroController::class,'index']);
Route::get('/otro/nuevo',[OtroController::class, 'create']);
Route::post('/otro/save',[OtroController::class, 'store']);
Route::get('/otro/show/{id}',[OtroController::class, 'show']);
Route::post('/otro/update',[OtroController::class, 'update']);
Route::get('/otro/del/{id}',[OtroController::class, 'destroy']);
