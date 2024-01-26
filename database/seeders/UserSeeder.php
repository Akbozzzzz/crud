<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "name"=>"Admin User",
                "username"=>"adminuser",
                "email"=>"admin@gmail.com",
                "role"=>"admin",
                "status"=>"active",
                "password"=>bcrypt("password"),
            ],
            [
                "name"=>"Vendor",
                "username"=>"vendoruser",
                "email"=>"vendor@gmail.com",
                "role"=>"vendor",
                "status"=>"active",
                "password"=>bcrypt("password"),
            ],
            [
                "name"=>"User",
                "username"=>"user",
                "email"=>"user@gmail.com",
                "role"=>"user",
                "status"=>"active",
                "password"=>bcrypt("password"),
            ],
        ]);
    }
}