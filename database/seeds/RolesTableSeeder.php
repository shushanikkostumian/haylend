<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        $roleName = ['admin','bank','client'];

        foreach ($roleName as $name) {
              DB::table('roles')->insert([
                'name' => $name,
              ]);
        }
    }
}
