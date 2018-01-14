<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use \Illuminate\Database\Query\Builder;

class OrdersController extends Controller
{
    public function getOrders()
    {
    	$orders = Order::all();
    	$orders->transform(function($order, $key){
    		$order->cart = unserialize($order->cart);
    		return $order;
    	});
    	return view('admin.orders.orders', ['orders'=>$orders]);
    }
}
