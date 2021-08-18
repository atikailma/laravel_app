<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@dev.com",
            'role_id' => 1,
            'is_delete' => 0,
            'password' => Hash::make('12345678'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);    }
}
