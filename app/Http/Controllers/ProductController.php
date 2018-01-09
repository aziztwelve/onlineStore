<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;

class ProductController extends Controller
{
    public function getContent(){

    	$products = Product::all();
    	return view('content', ['products'=>$products]);
    }

    public function show($id){
        $product = Product::whereId($id)->firstOrFail();
        return  view('show.product',    compact('product'));

    }




    public function getAddToCart( Request $request, $id){
    	$product = Product::find($id);
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
        $product = Product::all();
    	return view('shop.shopping-cart', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 
            'product'=>$product]);
    }
}
	