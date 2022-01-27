<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function add($a,$b = 0) {
        return $a+$b;
    }

    function minus($a,$b = 0) {
        return $a-$b;
    }
}
