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
        	'price'=>10
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'img/p2.jpg',
        	'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'price'=>12
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'img/p3.jpg',
        	'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'price'=>15
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'img/p4.jpg',
        	'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'price'=>12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=> 'img/p3.jpg',
            'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
            'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
            'price'=>18
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'img/p3.jpg',
        	'title'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'description'=>'Краситель сухой Food Colours 045 Фиолетовый 8',
        	'price'=>18
        ]);
        $product->save();
    }
}
