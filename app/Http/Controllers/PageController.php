<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    /** 
     * mostra la homepage del sito
     * **/
    public function index()
    {
        $movies = Movie::all();
        dd($movies);

        return view('home');
    }
}
