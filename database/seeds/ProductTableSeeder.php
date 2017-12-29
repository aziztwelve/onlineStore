<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath'=> 'img/p1.jpg',
        	'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
            'price'=>10,
            'brand_id'=>1
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'img/p2.jpg',
        	'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'price'=>12,
            'brand_id'=>2
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'img/p3.jpg',
        	'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'price'=>15,
            'brand_id'=>4
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'img/p4.jpg',
        	'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'price'=>12,
            'brand_id'=>3
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=> 'img/p3.jpg',
            'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
            'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
            'price'=>18,
            'brand_id'=>5
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'img/p3.jpg',
        	'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'price'=>18,
            'brand_id'=>6
        ]);
        $product->save();
    }
}
