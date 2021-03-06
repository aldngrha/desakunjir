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
            "whatsapp_number" => "089761728391",
        ]);

        DB::table("users")->insert([
            "name" => "kim",
            "username" => "kimdk",
            "email" => "kimdesakunjir@gmail.com",
            "password" => bcrypt("adminkim"),
            "roles" => "KIM",
            "whatsapp_number" => "087819283121",
        ]);

        DB::table("users")->insert([
            "name" => "aldi",
            "username" => "aldngrha",
            "email" => "aldngrha@gmail.com",
            "password" => bcrypt("ayufeb"),
            "roles" => "USER",
            "whatsapp_number" => "089718392103",
        ]);
    }
}
