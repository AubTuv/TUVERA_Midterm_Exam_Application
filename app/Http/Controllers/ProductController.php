<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Define an array of movies
        $movies = [
            ['title' => 'Inception', 'year' => 2010, 'genre' => 'Sci-Fi'],
            ['title' => 'The Dark Knight', 'year' => 2008, 'genre' => 'Action'],
            ['title' => 'Interstellar', 'year' => 2014, 'genre' => 'Sci-Fi'],
            ['title' => 'Parasite', 'year' => 2019, 'genre' => 'Thriller'],
            ['title' => 'Titanic', 'year' => 1997, 'genre' => 'Romance']
        ];

        return view('products.index', compact('movies'));
    }
}
