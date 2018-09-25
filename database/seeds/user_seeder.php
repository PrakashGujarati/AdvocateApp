<?php

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Administrator','email' => 'administrator@gmail.com','password' => bcrypt('administrator')],
            ['name' => 'Distributer','email' => 'distributer@gmail.com','password' => bcrypt('distributer')],
            ['name' => 'Process','email' => 'process@gmail.com','password' => bcrypt('process')],
            ['name' => 'Search','email' => 'search@gmail.com','password' => bcrypt('search')],
            ['name' => 'Query','email' => 'query@gmail.com','password' => bcrypt('query')],
            ['name' => 'Checking','email' => 'checking@gmail.com','password' => bcrypt('checking')],
            ['name' => 'Ready','email' => 'ready@gmail.com','password' => bcrypt('ready')],
        ]);
    }
}
