<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'Tere Liye', 'photo' => 'tere.jpg', 'bio' => 'Penulis novel best-seller.'],
            ['name' => 'J.K. Rowling', 'photo' => 'jk.jpg', 'bio' => 'Penulis Harry Potter.'],
            ['name' => 'Andrea Hirata', 'photo' => 'andrea.jpg', 'bio' => 'Penulis Laskar Pelangi.'],
            ['name' => 'Dewi Lestari', 'photo' => 'dee.jpg', 'bio' => 'Penulis dan musisi.'],
            ['name' => 'Pramoedya Ananta Toer', 'photo' => 'pram.jpg', 'bio' => 'Sastrawan legendaris.'],
        ];
        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
