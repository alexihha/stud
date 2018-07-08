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


}
