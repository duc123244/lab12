<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $highPriceBooks = DB::table('books')->orderBy('price', 'desc')->take(8)->get();
        $lowPriceBooks = DB::table('books')->orderBy('price', 'asc')->take(8)->get();
        return view('home', compact('highPriceBooks', 'lowPriceBooks'));
    }

    public function showByCategory($id)
    {
        $category = DB::table('categories')->find($id);
        $books = DB::table('books')->where('category_id', $id)->get();
        return view('category', compact('category', 'books'));
    }

    public function show($id)
    {
        $book = DB::table('books')->find($id);
        return view('book', compact('book'));
    }
}

