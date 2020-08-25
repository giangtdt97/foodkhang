<?php

use Illuminate\Database\Seeder;

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

            'product_name'=>'',
            'price'=>'',
            'short_description'=>'',
            'description'=>'',
            'image'=>'',
            'slug'=>'',
            'status'=>'',
        ]);
    }
}
