<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /** 
     * mostra la homepage del sito
     * **/
    public function index()
    {
        return view('home');
    }
}
