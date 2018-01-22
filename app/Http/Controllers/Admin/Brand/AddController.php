<?php

namespace App\Http\Controllers\Admin\Brand;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use Image;

class AddController extends Controller
{
    public function getAdd()
    {
    	// $product = Product::all();
    	// $product->brand()->lists('name', 'id')->all();
    	// $brandList = Brand::all();
    	// dd($countryList);
    	return view('admin.brand.add');
    }



    public function postAdd(Request $request)
    {
    	




    	if ($request->isMethod('post')) {
    		$brand_add = new Brand;
    		$brand_add->name = $request->get('name');
    		// $product_add->description = $request->get('description');
    		// $product_add->weight = $request->get('weight');
    		// $product_add->pulldate = $request->get('pull-date');
    		// $product_add->price = $request->get('price');
    		// $product_add->brand_id = $request->get('brand_id');



    		//save our image
    		if ($request->hasFile('imagePath')) {
    			$image = $request->file('imagePath');
    			$filename = time() . '.' . $image->getClientOriginalExtension();
    			$location = 'images/brand/'.$filename;
                
    			Image::make($image)->resize(800, 400)->save($location);

    			$brand_add->imagePath = $filename;
    		}
    		 


    		$brand_add->save();
    		return redirect('admin')->with('status', 'Товар добавлен');
    	}
    }
}
