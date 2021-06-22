<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> "test admin",
            'email'=> "test@gmail.com",
            'password'=> bcrypt("laravel"),
            'role' => "Admin",
            'address' => "Teststraat",
            'housenumber' => "9A",
            'postalcode' => "1234AB",
        ]);

        DB::table('users')->insert([
            'name'=> "test manager",
            'email'=> "test2@gmail.com",
            'password'=> bcrypt("laravel"),
            'role' => "Manager",
            'address' => "Teststraat",
            'housenumber' => "9B",
            'postalcode' => "1234AB",
        ]);

        DB::table('users')->insert([
            'name'=> "test medewerker",
            'email'=> "test3@gmail.com",
            'password'=> bcrypt("laravel"),
            'role' => "Medewerker",
            'address' => "Teststraat",
            'housenumber' => "9C",
            'postalcode' => "1234AB",
        ]);
    }
}
