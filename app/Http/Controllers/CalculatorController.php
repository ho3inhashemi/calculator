<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a,$b = 0) {
        $c =  $a+$b;

        $data = [
            'a' => $a,
            'b' => $b,
            'c' => $c
        ];
        
        return view('calculate',$data);
    }

    public function minus($a,$b = 0) {
        return $a-$b;
    }
}
