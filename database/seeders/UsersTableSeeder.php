<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "pokdarwis",
            "username" => "pokdarwisdk",
            "email" => "pokdarwisdesakunjir@gmail.com",
            "password" => bcrypt("adminpokdarwis"),
            "roles" => "POKDARWIS",
        ]);

        DB::table("users")->insert([
            "name" => "kim",
            "username" => "kimdk",
            "email" => "kimdesakunjir@gmail.com",
            "password" => bcrypt("adminkim"),
            "roles" => "KIM",
        ]);

        DB::table("users")->insert([
            "name" => "ayu",
            "username" => "ayfbrni",
            "email" => "ayufebriyani@gmail.com",
            "password" => bcrypt("ayufeb"),
            "roles" => "USER",
        ]);
    }
}
