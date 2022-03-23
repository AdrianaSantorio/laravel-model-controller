<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    //index
    public function index()
    {
        $movies = Movie::all();

        dump("movies");

        return view('movies.index', compact('movies'));
    }
}
