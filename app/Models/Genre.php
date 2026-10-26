<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    // private $genres = [
    //     ['id' => 1, 'name' => 'Fiksi', 'description' => 'Buku yang berisi cerita imajinatif.'],
    //     ['id' => 2, 'name' => 'Romantis', 'description' => 'Buku yang berfokus pada kisah percintaan.'],
    //     ['id' => 3, 'name' => 'Teknologi', 'description' => 'Buku seputar ilmu komputer dan teknologi.'],
    //     ['id' => 4, 'name' => 'Sejarah', 'description' => 'Buku yang membahas peristiwa masa lalu.'],
    //     ['id' => 5, 'name' => 'Motivasi', 'description' => 'Buku pengembangan diri dan inspirasi hidup.'],
    // ];

    public function getGenres() {
        return $this->genres;
    }
}
