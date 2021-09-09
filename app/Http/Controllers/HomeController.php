<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
class HomeController extends Controller
{
    // 
    public function index(){
        // return view('welcome');
       
        $allMovies = Movie::all();
        // dump($allMovies);
        // dump($allMovies[0]->title);
          return view('home', compact('allMovies'));

    }
     
}
