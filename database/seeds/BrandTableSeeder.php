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
        	'imagePath'=> 'p1.jpg',
        	'name'=>'Конти',
        	
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'p1.jpg',
        	'name'=>'Атаг',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'p1.jpg',
        	'name'=>'Киндер',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'p1.jpg',
        	'name'=>'Каролина',
        ]);
        $brand->save();
        $brand = new \App\Brand([
        	'imagePath'=> 'p1.jpg',
        	'name'=>'Интелс',
        ]);
        $brand->save();


        
    }
}
