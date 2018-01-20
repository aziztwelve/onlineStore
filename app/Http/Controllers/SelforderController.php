<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Cart;
use App\Product;
use App\Selforder;

class SelforderController extends Controller
{
    public function postOrder( Request $request)
    {
    	if (!Session::has('cart')) {
    		return view('shop.shopping-cart');
    	}


        $this->validate($request, [
        'telephone' => 'required|max:20',
        'name' => 'max:255',
        'comment' => 'max:1000'

        ]);

    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);

        $order = new Selforder();
        $order->cart = serialize($cart);
        $order->telephone = $request->input('telephone');
        $order->name = $request->input('name');
        // $order->address = serialize($request->input('address'));
        $order->date = $request->input('date');
        $order->datetime = $request->input('datetime');
        $order->comment = $request->input('comment');
        // dd($order);

        $order->save();


     //    $product = Product::all();
    	// return view('order.order', ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 
     //        'product'=>$product]);




        Session::forget('cart');
        return redirect()->route('content')->with('success', 'Заказ оформлен. Спасибо за покупку!');
    }
}
