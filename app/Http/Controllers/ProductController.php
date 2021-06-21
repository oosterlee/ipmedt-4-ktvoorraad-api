<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\ordered_products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function show($id){
        $product = \App\Models\products::where('id','=',$id)->first();
        return $product;
    }

    public function getAll(){
        $products = \App\Models\products::all();
        return $products;
    }

    public function update(Request $request){
        $product = products::find($request->id);
        $product->category = $request->category;
        $product->description = $request->description;
        $product->productname = $request->productname;
        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->price = $request->price;
        $product->maxorders = $request->maxorders;
        $product->condition = $request->condition;
        $product->approval = $request->approval;
        $product->image = $request->image->store('img/');
        try {
            $product->save();
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/product');
        }
    }

    public function store(Request $request, \App\Models\products $product){

        $random = Str::random(10);
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $request->image->storeAs('', $random . '.jpg', 'public_uploads');

        $product->category = $request->category;
        $product->description = $request->description;
        $product->productname = $request->productname;
        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->price = $request->price;
        $product->maxorders = $request->maxorders;
        $product->condition = $request->condition;
        $product->approval = $request->approval;
        $product->image = "/img/" . $path;
        try {
            $product->save();
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/product');
        }
        

 

           
    }
}
