<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class WinnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('winners')->insert([
            'country' => "Finland",
            'artist' => "Abba",
            'song' => "Lordi",
            'video' => "/videos/2006.mp4",
            'year' => 2006,

        ]);
        DB::table('winners')->insert([
            'country' => "Norway",
            'artist' => "Rybak",
            'song' => "Fairytale",
            'video' => "/videos/2009.mp4",
            'year' => 2009,

        ]);
        DB::table('winners')->insert([
            'country' => "Sweden",
            'artist' => "Loreen",
            'song' => "Euphoria",
            'video' => "/videos/2012.mp4",
            'year' => 2012,

        ]);
        DB::table('winners')->insert([
            'country' => "The Netherlands",
            'artist' => "Duncan",
            'song' => "Arcade",
            'video' => "/videos/2019.mp4",
            'year' => 2019,
        ]);
    }
}
