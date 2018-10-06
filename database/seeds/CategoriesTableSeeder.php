<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
    		[//CG1
    			'categorygroup_id' => 'CG1',
    			'categoryid' => 'C01',
    			'categoryname' => 'Đầm Nữ',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG1',
    			'categoryid' => 'C02',
    			'categoryname' => 'Áo Nữ',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG1',
    			'categoryid' => 'C03',
    			'categoryname' => 'Quần Nữ',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG1',
    			'categoryid' => 'C04',
    			'categoryname' => 'Chân Váy',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG1',
    			'categoryid' => 'C05',
    			'categoryname' => 'Bộ Liền',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],//END CG1
    		[//CG2
    			'categorygroup_id' => 'CG2',
    			'categoryid' => 'C06',
    			'categoryname' => 'Đầm Nữ',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG2',
    			'categoryid' => 'C07',
    			'categoryname' => 'Áo Nữ',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG2',
    			'categoryid' => 'C08',
    			'categoryname' => 'Quần Nữ',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG2',
    			'categoryid' => 'C09',
    			'categoryname' => 'Chân Váy',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG2',
    			'categoryid' => 'C10',
    			'categoryname' => 'Bộ Liền',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		],//END CG2
    		[//CG3
    			'categorygroup_id' => 'CG3',
    			'categoryid' => 'C11',
    			'categoryname' => 'Sản Phẩm Mẹ',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		], [
    			'categorygroup_id' => 'CG3',
    			'categoryid' => 'C12',
    			'categoryname' => 'Sản Phẩm Bé',
    			'created_at' => date('Y-m-d H:i:s'),
    			'updated_at' => date('Y-m-d H:i:s'),
    		]
    	];

        DB::table('categories')->insert($data);
    }
}
