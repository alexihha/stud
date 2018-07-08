<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function get()
    {
        return view('form');
    }

    public function post()
    {
        return view('formok');
    }

    public function number($number = null)
    {


        if ($number == 123) {
            return view('user', ['number'=>$number]);
        } else {
            return view('user404');
        }

    }


}
