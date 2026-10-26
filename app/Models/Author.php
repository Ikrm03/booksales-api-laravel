<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    // private $authors = [
    //     ['id' => 1, 'name' => 'Tere Liye', 'photo' => 'tere_liye.jpg', 'bio' => 'Penulis novel best-seller Indonesia.'],
    //     ['id' => 2, 'name' => 'J.K. Rowling', 'photo' => 'jk_rowling.jpg', 'bio' => 'Penulis serial Harry Potter.'],
    //     ['id' => 3, 'name' => 'Andrea Hirata', 'photo' => 'andrea_hirata.jpg', 'bio' => 'Penulis novel Laskar Pelangi.'],
    //     ['id' => 4, 'name' => 'Dewi Lestari', 'photo' => 'dewi_lestari.jpg', 'bio' => 'Penulis dan penyanyi Indonesia.'],
    //     ['id' => 5, 'name' => 'Pramoedya Ananta Toer', 'photo' => 'pram.jpg', 'bio' => 'Sastrawan legendaris Indonesia.'],
    // ];

    public function getAuthors() {
        return $this->authors;
    }
}
