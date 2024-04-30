<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Rack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::factory()->count(10)->create();
        $genres = Genre::factory()->count(15)->create();
        Rack::factory()->count(10)->create();

        Book::factory()->count(20)->create()->each(function($book) use($authors, $genres)
        {
            $book->authors()->attach($authors->random(rand(1, 3))->pluck('id')->toArray());

            $book->genres()->attach($genres->random(rand(2,4))->pluck('id')->toArray());

            $book->save();
        });


    }
}
