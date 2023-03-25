<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Basketball;

class BasketballController extends Controller
{
    public function showAllStatement() {
        return response()->json(Basketball::all());
        //return response()->json(Book::join('authors', 'author_id', '=', 'authors.id')->get());


        //select specific
        // return response()->json(Book::join('authors', 'author_id', '=', 'authors.id')->select('books.id','published_date','name')->get());

    }

    public function showOneStatement($id) {
        return response()->json(Basketball::find($id));
    }

}


