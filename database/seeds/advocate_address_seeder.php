<?php

use Illuminate\Database\Seeder;

class advocate_address_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advocate_address')->insert([
            ['address' => '225-Heera Panna Complex, Dr. Yagnik Road, Rajkot-360001'],['address' => 'Ahmedabad']
        ]);
    }
}
