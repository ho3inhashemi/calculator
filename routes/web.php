<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

$isDigit = '[0-9]+' ;

$constraint = ['a' => $isDigit , 'b' => $isDigit ];

Route::get('/add/{a}/{b}', function ($a,$b) {
    return $a+$b;
})->where($constraint);

Route::get('/minus/{a}/{b}', function ($a,$b) {
    return $a-$b;
})->where($constraint);



