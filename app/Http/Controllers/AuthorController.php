<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Fitur Read Data (GET)
    public function index() {
        $authors = Author::all();
        $data = new Author();
        // $authors = $data->getAuthors();

        if($authors->isEmpty()){
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Authors Resource",
            "data" => $authors
        ], 200);
    }

    // Fitur Create Data (POST)
    public function store(Request $request) {
        // Melakukan validasi 
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string',
            'bio' => 'nullable|string',
        ]);

        // Menyimpan data author 
        $author = Author::create($validatedData);

        // Mengembalikan respons 
        return response()->json([
            "success" => true,
            "message" => "Resource created successfully",
            "data" => $author
        ], 201);
    }
}