<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::TABLE('products')->insert([
            [
                'name'=>"Kids Dress 1",
                'price'=>'1800',
                'description'=>"Children's Dresses For Little Girls Cute Soft Bling Skirt Princess Dress Young Children Skirt Summer Baby Dress",
                'category'=>"dress",
                'gallery'=>"assets/img/kidress1.jpg"
            ],
            [
                'name'=>"Kids Dress 2",
                'price'=>'1500',
                'description'=>"Girls Clothes 2022 New Summer Princess Dresses Sleeveless Kids Shoulderless Casual Dress Toddler Wedding Dresses for Baby Girls",
                'category'=>"dress",
                'gallery'=>"assets/img/kidress1.jpg"
            ],
            [
                'name'=>"Kids Dress 2",
                'price'=>'1500',
                'description'=>"Girls Clothes 2022 New Summer Princess Dresses Sleeveless Kids Shoulderless Casual Dress Toddler Wedding Dresses for Baby Girls",
                'category'=>"dress",
                'gallery'=>"assets/img/kidress1.jpg"
            ]
        ]);
    }
}
