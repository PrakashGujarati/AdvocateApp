<?php

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
        $roles = array(
            array('name'=>'Administrator'),
            array('name'=>'Distributer'),
            array('name'=>'Process'),
            array('name'=>'Search'),
            array('name'=>'Query'),
            array('name'=>'Checking'),
            array('name'=>'Ready'),
        );

        DB::table('roles')->insert($roles);
    }
}
