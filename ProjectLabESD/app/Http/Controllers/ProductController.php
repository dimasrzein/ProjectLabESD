<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function index(){
        $product =  Product::all();

        return view('product', ['product' => $product]);
    }
    public function input(){
        return view('input-product');
    }
    public function forminput(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images", $name);
            $product->img_path = $name;
            echo "Gambar berhasil di upload";
        }else{
            echo "Gagal upload gambar";
        }
        $product->save();

        return redirect('product');
    }

    public function delete($id)
    {
       $product = Product::find($id);
       $product->delete();

        return redirect('product');
    }

    public function update($id, Request $request){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images", $name);
            $product->img_path = $name;
            echo "Gambar berhasil di upload";
        }else{
            echo "Gagal upload gambar";
        }
        $product->save();

        return redirect('product');
    }
    public function updateproduct($id){
        $product = Product::find($id);
        
        return view('update-product', ['product'=>$product]);
    }
}
