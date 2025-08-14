<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/tour', function () {
    return view('tour');
});
