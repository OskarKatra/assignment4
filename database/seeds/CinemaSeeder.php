<?php

use Illuminate\Database\Seeder;

class CinemaTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {

        DB::table('cinemas')->insert([
            [
                "name" => "Filmstaden Heron City",
                "seats" => "200",
            ],
            [
                "name" => "Filmstaden Kista",
                "seats" => "330",
            ],
            [
                "name" => "Filmstaden Råsunda",
                "seats" => "220",
            ],
            [
                "name" => "Filmstaden Sickla",
                "seats" => "330",
            ],
            [
                "name" => "Filmstaden Söder",
                "seats" => "170",
            ],
            [
                "name" => "Filmstaden Täby",
                "seats" => "220",
            ],
            [
                "name" => "Rigoletto",
                "seats" => "300",
            ],
            [
                "name" => "Filmstaden Sergel",
                "seats" => "200",
            ],
            [
                "name" => "Filmstaden Vällingby",
                "seats" => "100",
            ],
            [
                "name" => "Filmstaden Scandinavia",
                "seats" => "200",
            ],
            [
                "name" => "Grand Lindingö",
                "seats" => "200",
            ],
        ]);

    }
}
