<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        $data = new Book();
        // $books = $data->getBooks();

        return response()->json([
            "success" => true,
            "message" => "Get All Books Resource",
            "data" => $books
        ], 200);
    }
}
