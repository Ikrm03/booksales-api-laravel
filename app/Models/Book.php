<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    // private $books = [
    //     [
    //         'title' => 'Pulang',
    //         'description' => 'Petualngan seorang pemuda yang kembali ke kampung halamannya.',
    //         'price' => 40000,
    //         'stock' => 15,
    //         'cover_photo' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f',
    //         'genre_id' => 1,
    //         'author_id' => 1
    //     ],
    //     [
    //         'title' => 'Sebuah Seni Untuk Bersikap Bodo Amat',
    //         'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang.',
    //         'price' => 25000,
    //         'stock' => 5,
    //         'cover_photo' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f',
    //         'genre_id' => 2,
    //         'author_id' => 2
    //     ],
    //     [
    //         'title' => 'Naruto',
    //         'description' => 'Petualngan seorang pemuda yang ingin menjadi hokage.',
    //         'price' => 50000,
    //         'stock' => 25,
    //         'cover_photo' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f',
    //         'genre_id' => 3,
    //         'author_id' => 3
    //     ]
    // ];

    public function getBooks() {
        return $this->books;
    }
}
