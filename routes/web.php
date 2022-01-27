<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add/{a}/{b}', function ($a,$b) {
    return $a+$b;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);

Route::get('/minus/{a}/{b}', function ($a,$b) {
    return $a-$b;
})->where(['a' => '[0-9]+', 'b' => '[0-9]+']);



