<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Fitur Read Data (GET)
    public function index() {
        $genres = Genre::all();

        if($genres->isEmpty()){
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $genres
        ], 200);
    }

    // Fitur Create Data (POST)
    public function store(Request $request) {
        // Melakukan validasi data 
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Menyimpan data baru 
        $genre = Genre::create($validatedData);

        // Mengembalikan respons 
        return response()->json([
            "success" => true,
            "message" => "Resource created successfully",
            "data" => $genre
        ], 201);
    }
}