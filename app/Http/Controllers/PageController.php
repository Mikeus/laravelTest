<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
        var_dump('user', 'age', 'location');
 
       return view('pages/home', [
           'user' => 'Mikeu',
           'age' => 35,
           'location' => 'NYC'
       ]);
       
   }
   public function about(){
       return view('pages/about');
   }
   public function contact(){
       return view('pages/contact');
   }
}
