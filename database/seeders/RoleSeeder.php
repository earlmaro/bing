<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = array(
            array('role' => 'SUPER ADMIN'),
            array('role' => 'ADMIN'),
            array('role' => 'EMPLOYEE'),
            array('role' => 'HR ADMIN'),
        );

        DB::table('roles')->insert($models);
    }
}
