<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Cart;
use App\Product;

class OrderController extends Controller
{
    public function showOrder()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $product = Product::all();
        return view('order.order', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 
            'product'=>$product]);
    }


    public function postOrder()
    {
    	if (!Session::has('cart')) {
    		return view('shop.shopping-cart');
    	}

    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);


     //    $product = Product::all();
    	// return view('order.order', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 
     //        'product'=>$product]);




        Session::forget('cart');
        return redirect()->route('content')->with('success', 'Заказ оформлен. Спасибо за покупку!')
    }
}
