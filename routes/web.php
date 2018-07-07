<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('id{number?}', function ($number) {

    if ($number == 123) {
        echo $number;
    }
    else {
        echo 'пользователь не зарегистрирован';
    }

});

Route::get('/form', function () {
    return view('form');
});


Route::post('form', function () {
    echo 'форма принята';
});


