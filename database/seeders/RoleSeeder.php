<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([[
            'id' => 1,
            'name' => "admin",
            'is_delete' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],[
            'id' => 2,
            'name' => "user",
            'is_delete' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]
    ]);
    }
}
