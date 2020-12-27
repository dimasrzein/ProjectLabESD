<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class HistoryController extends Controller
{
    public function index(){
        $order =  Order::all();
        $product = Product::all();

        return view('history', ['order' => $order]);
    }

    public function list(){
        $product= Product::all();
        $order= Order::All();
        $sama= Order::where('product_id','$product->id')->get();
        return view('testing', ['sama'=>$sama]);
    }
}
