<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Define an array of movie rentals
        $rentals = [
            ['title' => 'Inception', 'year' => 2010, 'genre' => 'Sci-Fi', 'price' => 4.99, 'available' => true],
            ['title' => 'The Dark Knight', 'year' => 2008, 'genre' => 'Action', 'price' => 3.99, 'available' => false],
            ['title' => 'Interstellar', 'year' => 2014, 'genre' => 'Sci-Fi', 'price' => 5.99, 'available' => true],
            ['title' => 'Parasite', 'year' => 2019, 'genre' => 'Thriller', 'price' => 4.49, 'available' => true],
            ['title' => 'Titanic', 'year' => 1997, 'genre' => 'Romance', 'price' => 2.99, 'available' => false]
        ];

        return view('products.index', compact('rentals'));
    }
}
