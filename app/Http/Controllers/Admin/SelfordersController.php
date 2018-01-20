<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Selforder;
use \Illuminate\Database\Query\Builder;

class SelfordersController extends Controller
{
    public function getOrders()
    {
    	$selforders = Selforder::orderBy('id','desc')->get();
    	$selforders->transform(function($order, $key){
    		$order->cart = unserialize($order->cart);
    		return $order;
    	});
    	return view('admin.orders.ordersel', ['selforders'=>$selforders]);
    }
}
