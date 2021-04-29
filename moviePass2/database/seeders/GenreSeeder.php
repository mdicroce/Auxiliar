<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new Genre();
        
        $genre->name = "action";
        $genre->id = 28;
        $genre->save();

        $genre2 = new Genre();
        $genre2->id = 12;
        $genre2->name = "Adventure";
        $genre2->save();

        $genre3 = new Genre();
        $genre3->id = 16;
        $genre3->name = "Animation";
        $genre3->save();

        $genre4 = new Genre();
        $genre4->id = 35;
        $genre4->name = "Comedy";
        $genre4->save();

        $genre5 = new Genre();
        $genre5->id = 80;
        $genre5->name = "Crime";
        $genre5->save();

        $genre6 = new Genre();
        $genre6->id = 99;
        $genre6->name = "Documenary";
        $genre6->save();

        $genre7 = new Genre();
        $genre7->id = 18;
        $genre7->name = "Drama";
        $genre7->save();

        $genre8 = new Genre();
        $genre8->id = 10751;
        $genre8->name = "Family";
        $genre8->save();

        $genre9 = new Genre();
        $genre9->id = 14;
        $genre9->name = "Fantasy";
        $genre9->save();

        $genre10 = new Genre();
        $genre10->id = 36;
        $genre10->name = "History";
        $genre10->save();

        $genre11 = new Genre();
        $genre11->id = 27;
        $genre11->name = "Horror";
        $genre11->save();

        $genre12 = new Genre();
        $genre12->id = 10402;
        $genre12->name = "Music";
        $genre12->save();

        $genre13 = new Genre();
        $genre13->id = 9648;
        $genre13->name = "Mystery";
        $genre13->save();

        $genre14 = new Genre();
        $genre14->id = 10749;
        $genre14->name = "Romance";
        $genre14->save();

        $genre15 = new Genre();
        $genre15->id = 878;
        $genre15->name = "Science Fiction";
        $genre15->save();

        $genre16 = new Genre();
        $genre16->id = 10770;
        $genre16->name = "TV Movie";
        $genre16->save();

        $genre17 = new Genre();
        $genre17->id = 53;
        $genre17->name = "Thriller";
        $genre17->save();

        $genre18 = new Genre();
        $genre18->id = 10752;
        $genre18->name = "War";
        $genre18->save();

        $genre19 = new Genre();
        $genre19->id = 37;
        $genre19->name = "Western";
        $genre19->save();

    }
}