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
        	'name' => 'Ngo Huy Hoang',
        	'email' => 'ngohuyhoangb2@gmail.com',
        	'password' => bcrypt('tatastaosb2'),
        	'birthday' => '1999/09/06',
        	'gender' => 'Male',
        	'address' => 'Ha Noi',
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
