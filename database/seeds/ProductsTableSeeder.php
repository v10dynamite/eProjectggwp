<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'title' => 'Váy ngắn ôm',
        	'thumbnail' => 'http://big.vn/wp-content/uploads/chanvaydep/2016/06/chan-vay-ngan-om-dep-cho-nang-cong-so-chan-ngan-he-2016-2.jpg',
        	'price' => '1.000.000đ',
        	'description' => 'Cái này tạm ổn + còn hàng',
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
