<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a,$b = 0) {

         $data = [
            'a' => $a,
            'b' => $b,
            'c' => $a+$b
        ];

        return view('calculate',$data);
    }


    function addAction(){

        $a = request('a');
        $b = request('b');

        return $this->add($a,$b);
    }

    public function minus($a,$b = 0) {
        return $a-$b;
    }

}
