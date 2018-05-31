<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('movies')->insert([
            [
                "title" => "Solo: A Star Wars Story",
                "genre" => "Fantasy/Science fiction",
                "runtime" => 135,
            ],
            // [
            //     "title" => "A Quiet Place",
            //     "runtime" => 91,
            // ],
            // [
            //     "title" => "Darkest Hour",
            //     "runtime" => 125,
            // ],
            // [
            //     "title" => "Deadpool 2",
            //     "runtime" => 119,
            // ],
            // [
            //     "title" => "Isle of Dogs",
            //     "runtime" => 101,
            // ],
            // [
            //     "title" => "Tomb Raider",
            //     "runtime" => 117,
            // ],
            // [
            //     "title" => "The Post",
            //     "runtime" => 116,
            // ],
            // [
            //     "title" => "Black Panther",
            //     "runtime" => 134,
            // ],
            // [
            //     "title" => "Ghostland",
            //     "runtime" => 91,
            // ],
            // [
            //     "title" => "Good Bye Christopher Robin",
            //     "runtime" => 107,
            // ],
            // [
            //     "title" => "Jumanji",
            //     "runtime" => 119,
            // ],
        ]);
    }
}
