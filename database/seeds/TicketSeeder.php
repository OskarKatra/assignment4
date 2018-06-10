<?php

use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('tickets')->insert([
            [
                "time" => "2018-05-28 16:15:00",
                "seat" => 5,
                "price" => 120,
                "cinema_id" => 1,
                "movie_id" => 1,
                "user_id" => null,
            ],
            [
                "time" => "2018-08-25 21:40:00",
                "seat" => 10,
                "price" => 140,
                "cinema_id" => 2,
                "movie_id" => 2,
                "user_id" => null,
            ],
            [
                "time" => "2018-09-05 19:00:00",
                "seat" => 20,
                "price" => 110,
                "cinema_id" => 3,
                "movie_id" => 3,
                "user_id" => null,
            ],
        ]);
    }
}
