<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public $firstName = "Keihle";
    public $lastName = "Pascual";

    // public function HelloWorld () {
    //     return view('hello');
    // }

    //array() the same as if it was just []

    public function HelloWorld () {
        return view('hello', [  //an array
            "test" => "AUF",
            "case" => "Angeles City"
        ]);
    }
}
