<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    public function run(): void
    {
        $comics = include base_path('data/comics.php');

        foreach ($comics as $comic_item) {
            $comic = new Comic();
            $comic->title = $comic_item['title'];
            $comic->thumb = $comic_item['thumb'];
            $comic->description = $comic_item['description'];
            $comic->sale_date = $comic_item['sale_date'];
            $comic->writers = implode(', ', $comic_item['writers']);
            $comic->artists = implode(', ', $comic_item['artists']);
            $comic->type = $comic_item['type'];
            $comic->series = $comic_item['series'];
            $comic->price = (float) str_replace('$', '', $comic_item['price']);
            $comic->save();
        }
    }
}
