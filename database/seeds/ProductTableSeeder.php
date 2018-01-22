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
            'id'=>'44',
        	'imagePath'=> 'p1.jpg',
        	'title'=>'Шоколад',
        	'description'=>'Шоколад',
            'weight'=> '3 кг',
            'pulldate'=>'3 дня',
            'price'=>10,
            'brand_id'=>1
        ]);
        $product->save();

        $product = new \App\Product([
            'id'=>'45',
        	'imagePath'=> 'p2.jpg',
        	'title'=>'пирог',
        	'description'=>'пирог',
            'weight'=> '3 кг',
            'pulldate'=>'3 дня',
        	'price'=>12,
            'brand_id'=>2
        ]);
        $product->save();

        $product = new \App\Product([
            'id'=>'46',
        	'imagePath'=> 'p3.jpg',
        	'title'=>'Медовик',
        	'description'=>'Медовик',
            'weight'=> '3 кг',
            'pulldate'=>'3 дня',
        	'price'=>15,
            'brand_id'=>4
        ]);
        $product->save();

        $product = new \App\Product([
            'id'=>'47',
        	'imagePath'=> 'p4.jpg',
        	'title'=>'Кекс',
        	'description'=>'Кекс',
            'weight'=> '3 кг',
            'pulldate'=>'3 дня',
        	'price'=>12,
            'brand_id'=>5
        ]);
        $product->save();

        $product = new \App\Product([
            'id'=>'48',
            'imagePath'=> 'p3.jpg',
            'title'=>'Сухарики',
            'description'=>'Сухарики',
            'weight'=> '3 кг',
            'pulldate'=>'3 дня',
            'price'=>18,
            'brand_id'=>5
        ]);
        $product->save();

        $product = new \App\Product([
            'id'=>'49',
        	'imagePath'=> 'p3.jpg',
        	'title'=>'Карамель',
        	'description'=>'Карамель',
            'weight'=> '3 кг',
            'pulldate'=>'3 дня',
        	'price'=>18,
            'brand_id'=>6
        ]);
        $product->save();
    }
}
