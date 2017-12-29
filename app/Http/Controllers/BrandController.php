<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function getBrands()
    {

    	 $brands = Brand::all();
    	 // foreach ($brands as $brand) {
  // dd($brands);
// }
    	  	
    	return view('brands.content',  compact('brands'));
    }








    public function show($id)
    {
    	 $brand = Brand::whereId($id)->firstOrFail();
        return  view('show.brand',    compact('brand'));
    }
}



