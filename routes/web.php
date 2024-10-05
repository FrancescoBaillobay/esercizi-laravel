<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homepage');
});


Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});