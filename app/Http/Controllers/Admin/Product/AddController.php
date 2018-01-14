<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;

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
}
