<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [ExercicioController::class,'abrirFormExer1']);

Route::post('/exer1resp', [ExercicioController::class, 'respostaExer1']);