<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // public function HelloWorld () {
    //     return view('hello');
    // }

    //array() the same as if it was just []

    public function HelloWorld () {
        $firstName = "Keihle";
        $lastName = "Pascual";

        $num1 = 1;
        $num2 = 2;
        $sum = $num1 + $num2;
        
        return view('hello', [  //an array
            "first" => $firstName,
            "last" => $lastName,
            "num1" => $num1,
            "num2" => $num2,
            "sum" => $sum,
        ]);
    }
}
