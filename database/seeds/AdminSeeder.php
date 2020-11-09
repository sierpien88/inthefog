<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'septen.pl',
            'email' => 'admin@septen.pl',
            'password' => bcrypt('1qaz.2wsx'),
        ]);
    }
}
