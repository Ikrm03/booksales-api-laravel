<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::all();
        $data = new Author();
        // $authors = $data->getAuthors();

        return view('author', ['authors' => $authors]);
    }
}