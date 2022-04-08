<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index']);
Route::get('/about',  [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

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

Route::get('/products', [ProductController::class, 'index']);



