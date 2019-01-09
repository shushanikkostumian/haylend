<?php

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
        DB::table('users')->insert([
            'first_name' => 'admin',
            'address' => 'A. Manukyan 3/17',
            'email' => 'hasmik.isayan11@gmail.com',
            'password' => bcrypt('admin123'),
            'role_id' => 1,
        ]);
    }
}
