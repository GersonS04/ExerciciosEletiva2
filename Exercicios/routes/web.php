<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [ExercicioController::class,'abrirFormExer1']);
Route::post('/exer1resp', [ExercicioController::class, 'respostaExer1']);

Route::get('/exer2', [ExercicioController::class, 'abrirFormExer2']);
Route::post('/exer2resp', [ExercicioController::class, 'respostaExer2']);