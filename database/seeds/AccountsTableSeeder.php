<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
           'first_name' => 'admin',
           'address' => 'A. Manukyan 3/17',
           'email' => 'hasmik.isayan11@gmail.com',
           'password' => bcrypt('admin123'),
           'role_id' => 1,
        ]);
    }
}
