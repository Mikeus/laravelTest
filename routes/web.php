<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/pokemon/my', function () {
    return "helooooo";
    // [
    //     "id" => 1,
    //     "range" => "Pikachy",
    //     "power" => "Electric",
    // ];
});

