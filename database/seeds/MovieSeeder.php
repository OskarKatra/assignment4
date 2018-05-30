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
                "name" => "Solo: A Star Wars Story",
                "duration" => "135",
            ],
            [
                "name" => "A Quiet Place",
                "duration" => "91",
            ],
            [
                "name" => "Darkest Hour",
                "duration" => "125",
            ],
            [
                "name" => "Deadpool 2",
                "duration" => "119",
            ],
            [
                "name" => "Isle of Dogs",
                "duration" => "101",
            ],
            [
                "name" => "Tomb Raider",
                "duration" => "117",
            ],
            [
                "name" => "The Post",
                "duration" => "116",
            ],
            [
                "name" => "Black Panther",
                "duration" => "134",
            ],
            [
                "name" => "Ghostland",
                "duration" => "91",
            ],
            [
                "name" => "Good Bye Christopher Robin",
                "duration" => "107",
            ],
            [
                "name" => "Jumanji",
                "duration" => "119",
            ],
        ]);
    }
}
