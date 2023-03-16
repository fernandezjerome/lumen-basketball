<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function showAllBooks() {
        return response()->json(Book::all());
        //return response()->json(Book::join('authors', 'author_id', '=', 'authors.id')->get());


        //select specific
        // return response()->json(Book::join('authors', 'author_id', '=', 'authors.id')->select('books.id','published_date','name')->get());

    }

    public function showOneBooks($id) {
        return response()->json(Book::find($id));
    }

}


