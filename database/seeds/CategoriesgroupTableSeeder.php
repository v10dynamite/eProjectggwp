<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesgroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'categorygroup_id' => 'CG1',
    			'categorygroup_name' => 'Thời Trang Công Sở',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG2',
    			'categorygroup_name' => 'Thời Trang Trẻ',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG3',
    			'categorygroup_name' => 'Mẹ Và Bé',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		]
    	];

        DB::table('categoriesgroup')->insert($data);
    }
}
