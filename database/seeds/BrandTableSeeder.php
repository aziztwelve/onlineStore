<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $brand = new \App\Brand([
        	'imagePath'=> 'img/p1.jpg',
        	'name'=>'Краситель',
        	
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'img/p1.jpg',
        	'name'=>'Краситель',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'img/p1.jpg',
        	'name'=>'Краситель',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'img/p1.jpg',
        	'name'=>'Краситель',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'img/p1.jpg',
        	'name'=>'Краситель',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'img/p1.jpg',
        	'name'=>'Краситель',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'img/p1.jpg',
        	'name'=>'Краситель',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'img/p1.jpg',
        	'name'=>'Краситель',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'img/p1.jpg',
        	'name'=>'Краситель',
        ]);
        $brand->save();


        
    }
}
