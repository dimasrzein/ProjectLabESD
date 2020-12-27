<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $product =  Product::all();

        return view('order', ['product' => $product]);
    }
    public function order($id){
        $product =  Product::find($id);

        return view('order-product', ['product' => $product]);
    }
    public function formorder($id, Request $request){
        $product = Product::find($id);
        $order = new Order;
        // $order->product_id = $id;
        $order->amount = $request->amount;
        $order->buyer_name = $request->buyer_name;
        $order->buyer_contact = $request->buyer_contact;
        $order->save();

        return redirect('order');
    }
}
