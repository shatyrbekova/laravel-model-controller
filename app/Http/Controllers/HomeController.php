<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use APP\Movie;
class HomeController extends Controller
{
    // 
    public function index(){
        // return view('welcome');
       
        $allMovies = Movie::all();
        dump($allMovies);

    }
     
}
