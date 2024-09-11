<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function books(){

        //SELECT * FROM 'books';
        $books = Book::all();

        return view('books', compact('books'));
    }

    public function contacts(){
        return view(view: 'contacts');
    }

    public function about(){
        return view('about');
    }
}
