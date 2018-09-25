<?php

use Illuminate\Database\Seeder;

class advocate_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advocates')->insert([
            ['name' => 'Rajendra Bhatt'],['name' => 'Vishal Bhatt']
        ]);
    }
}
