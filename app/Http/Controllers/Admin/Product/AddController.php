<?php

namespace App\Http\Controllers\Admin\Product;

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
    	$brandList = Brand::all();
    	// dd($countryList);
    	return view('admin.product.add', ['brands'=>$brandList]);
    }



    public function postAdd(Request $request)
    {
    	// if ($request->hasFile('imagePath')) {
    	// 	//Get file name with the extesion
    	// 	$filenameWithExt = $request->file('imagePath')->getClientOriginalName();
    	// 	//Get just file name
    	// 	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    	// 	//Get just ext
    	// 	$extension = $request->file('imagePath')->getClientOriginalExtension();
    	// 	//Filename to store
    	// 	$fileNameToStore = $filename.'_'.time().'.'.$extension;
    	// 	//Upload image
    	// 	return $path = $request->file('imagePath')->storeAs('/public/img', $fileNameToStore);
    	// 	// if ($request->hasFile('imagePath')) {
    	// 	// 	$request->file->store('public/img');
    	// 	// }

    	// }else{
    	// 	$fileNameToStore = 'noimage.png';
    	// }




    	if ($request->isMethod('post')) {


            $this->validate($request, [
                'title' => 'required|max:45',
                'description' => 'max:255',
                'price' => 'required',
                'imagePath' => 'required|image'

                ]);
            
    		$product_add = new \App\Product;
    		$product_add->title = $request->get('title');
    		$product_add->description = $request->get('description');
    		$product_add->weight = $request->get('weight');
    		$product_add->pulldate = $request->get('pull-date');
    		$product_add->price = $request->get('price');
    		$product_add->brand_id = $request->get('brand_id');



    		//save our image
    		if ($request->hasFile('imagePath')) {
    			$image = $request->file('imagePath');
    			$filename = time() . '.' . $image->getClientOriginalExtension();
    			$location = public_path('images/'.$filename);
    			Image::make($image)->resize(934, 623)->save($location);

    			$product_add->imagePath = $filename;
    		}
    		 


    		$product_add->save();
    		return redirect('admin')->with('success', 'Товар добавлен');
    	}
    }
}
