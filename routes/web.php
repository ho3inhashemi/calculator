<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;


$isDigit = '\-?[0-9]+';

$constraint = ['a' => $isDigit , 'b' => $isDigit ];

Route::get('/add/{a?}/{b?}',[CalculatorController::class, 'add'])->where($constraint);

Route::get('/minus/{a?}/{b?}', [CalculatorController::class, 'minus'])->where($constraint);

Route::post('/add' , [CalculatorController::class, 'addAction'])
->name('calc.add');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
