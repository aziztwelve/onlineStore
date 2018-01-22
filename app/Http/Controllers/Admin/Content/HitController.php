<?php

namespace App\Http\Controllers\Admin\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Brand;
use Image;

class HitController extends Controller
{
    public function getProducts()
    {


        // $brands = Brand::find(1)->products()->get();
        // dd($brands);
        //$books = Product::where('brand_id', $id)->get();


    	$products = Product::with('brand')->orderBy('id','asc')->limit(30)->get();
    	// $products = Product::where('id', '>', 30)->get();
    	// $brand = Product::find(1);
    	// $brand = Product::find($id)->brand;
    	// dd($brand);
    	$data = array(
	    'products' => $products
	);
        // foreach ($products as $k => $v) {
        //         foreach ($v as $b) {
        //             // foreach ($b->brand as $p) {
                    // dd($v->brand->name);
        //         // }
        //     }
        // }
    	// dd($products);
    	// dd($products);
    	
    	return view('admin.content.hit.hit')->with($data);
    }














        public function AdminProducts($id, Request $request)
        {
                if ($request->isMethod('delete')) {
                    $delete = Product::whereId($id)->firstOrFail();
                    $delete->delete();
                    return redirect('admin/content/hit')->with('success', 'Товар Удален');
            }



            if ($request->isMethod('post')) {

                $this->validate($request, [
                'title' => 'required|max:45',
                'description' => 'max:255',
                'price' => 'required',
                'imagePath' => 'required|image'

                ]);


            $product_add = \App\Product::whereId($id)->firstOrFail();
            $product_add->id = $request->get('id');
            $product_add->title = $request->get('title');
            $product_add->description = $request->get('description');
            $product_add->weight = $request->get('weight');
            $product_add->pulldate = $request->get('pulldate');
            $product_add->price = $request->get('price');
            $product_add->brand_id = $request->get('brand_id');



            //save our image
            if ($request->hasFile('imagePath')) {
                $image = $request->file('imagePath');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = 'images/'.$filename;
                Image::make($image)->resize(934, 623)->save($location);

                $product_add->imagePath = $filename;
            }
             


            $product_add->save();
            return redirect('admin/content/hit')->with('success', 'Товар изменен');
        }







            $edit = Product::find($id);
            $editB = Product::find($id)->brand;
            // dd($editB);

            $brandList = Brand::all();
        // return view('admin.product.add', ['brands'=>$brandList]);

        if (view()->exists('admin.content.hit.edit')) {
            $data = [
                // 'title'=> 'Рудактирование страницы'.$edit['name'],
                'data' =>$edit
            ];


            // dd($data);
        return view('admin.content.hit.edit',['edit'=>$edit, 'brands'=>$brandList, 'brandId'=>$editB]);
        }
        }

}
