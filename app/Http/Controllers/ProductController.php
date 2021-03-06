<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;

class ProductController extends Controller
{
    public function getContent(){

    	// $products = Product::all();
        $products = Product::with('brand')->orderBy('id','asc')->where('id', '>=', 90)->limit(30)->get();
        // dd($products);
    	return view('content', ['products'=>$products]);
    }

    public function show($id){
        $product = Product::whereId($id)->firstOrFail();
        return  view('show.product',    compact('product'));

    }




    public function getAddToCart( Request $request, $id){
    	$product = Product::find($id);
        // dd($product);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);

    	$request->session()->put('cart', $cart);
    	return redirect()->back();
        // return Response::json($request);
    	
    }


    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('shoppingCart');
    }

    public function getBoostByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->boostByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('shoppingCart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return redirect()->route('shoppingCart');

    }








    public function getCart(){
    	if (!Session::has('cart')) {
    		return view('shop.shopping-cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
        // dd($cart->items);
        $product = Product::with('brand')->get();
    	return view('shop.shopping-cart', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 
            'productB'=>$product]);
    }












    // ============================Hit=============================
    public function getHit()
    {
        $products = Product::with('brand')->orderBy('id','asc')->limit(30)->get();
        // dd($products);

        // return view('content_hit')->with($products);
        return view('content_hit', ['products'=>$products]);

    }


    // ============================Novelty=============================
    public function getNovelty()
    {
        $products = Product::with('brand')->orderBy('id','asc')->where('id', '>=', 30)->limit(30)->get();
        // dd($products);

        // return view('content_hit')->with($products);
        return view('content_novelty', ['products'=>$products]);

    }




    // ============================Hit=============================
    public function getSale()
    {
        $products = Product::with('brand')->orderBy('id','asc')->where('id', '>=', 60)->limit(30)->get();
        // dd($products);

        // return view('content_hit')->with($products);
        return view('content_sale', ['products'=>$products]);

    }
}
	