<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video')->insert([
            'src' => "/videos/2006.mp4",
            'description' => "Beschrijving 1",

        ]);
        DB::table('video')->insert([
            'src' => "/videos/2009.mp4",
            'description' => "Beschrijving 2",

        ]);
        DB::table('video')->insert([
            'src' => "/videos/2012.mp4",
            'description' => "Beschrijving 3",

        ]);
        DB::table('video')->insert([
            'src' => "/videos/2019.mp4",
            'description' => "Beschrijving 4",

        ]);
    }
}
