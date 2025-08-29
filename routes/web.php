<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/tour', function () {
    return view('tour');
});

Route::get('/musik', function () {
    return view('musik');
});

Route::get('/merch', function () {
    return view('merch');
});

Route::get('/film', function () {
    return view('film');
});
