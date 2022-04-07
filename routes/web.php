<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/blog/new')-> group(function(){
   Route::get('/march/{title}', function (Request $request, $title) {
    // dd($request -> query("max"));
    return "<h1>{$title} {$request -> query("min")} : {$request -> query("max")}</h1>";
}); 
   Route::get('/april/{title}', function (Request $request, $title) {
    // dd($request -> query("max"));
    return "<h1>{$title} {$request -> query("min")} : {$request -> query("max")}</h1>";
}); 
   Route::get('/about', function () {

    return "<h1>About</h1>";
});
});



