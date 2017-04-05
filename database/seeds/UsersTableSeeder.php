<?php

use Illuminate\Database\Seeder;

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
            'name' => 'administrator',
            'email' => 'administrator@nakination.com',
            'password' => bcrypt('nakinationisthebest'),
        ]);
    }
}
