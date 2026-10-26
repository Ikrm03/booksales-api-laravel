<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['title' => 'Pulang', 'description' => 'Petualangan pulang ke desa.', 'price' => 40000, 'stock' => 15, 'cover_photo' => 'pulang.jpg', 'genre_id' => 1, 'author_id' => 1],
            ['title' => 'Harry Potter', 'description' => 'Kisah dunia sihir.', 'price' => 95000, 'stock' => 10, 'cover_photo' => 'hp.jpg', 'genre_id' => 1, 'author_id' => 2],
            ['title' => 'Laskar Pelangi', 'description' => 'Perjuangan anak Belitung.', 'price' => 55000, 'stock' => 20, 'cover_photo' => 'laskar.jpg', 'genre_id' => 1, 'author_id' => 3],
            ['title' => 'Supernova', 'description' => 'Fiksi ilmiah filosofis.', 'price' => 75000, 'stock' => 8, 'cover_photo' => 'supernova.jpg', 'genre_id' => 1, 'author_id' => 4],
            ['title' => 'Bumi Manusia', 'description' => 'Kisah era kolonial.', 'price' => 85000, 'stock' => 12, 'cover_photo' => 'bumi.jpg', 'genre_id' => 1, 'author_id' => 5],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
