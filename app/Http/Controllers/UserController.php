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
        echo 'форма принята';
    }

    public function number($number = null)
    {


        if ($number == 123) {
            echo $number;
        } else {
            echo 'пользователь не зарегистрирован';
        }

    }


}
