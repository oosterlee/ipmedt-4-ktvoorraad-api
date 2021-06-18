<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){
        $product = \App\Models\products::where('id','=',$id)->first();
        return $product;
    }

    public function create(Request $request){
        return products::create([
            $product->productname => $request->input('productname'),
            $product->besteld_door = Auth::user()->name,
            $product->brand => $request->input('brand'),
            $product->mode => $request->input('model'),
            $product->price => $request->input('price'),
            $product->aantal => $$request->input('aantal'),
        ]);
    }

    public function getAll(){
        $products = \App\Models\products::all();
        return $products;
    }

    public function store(Request $request){
        return products::create([
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'productname' => $request->input('productname'),
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'price' => $request->input('price'),
            'maxorders' => $request->input('maxorders'),
            'condition' => $request->input('condition'),
            'approval' => $request->input('approval'),
            'image' => $request->input('image'),
        ]);  
           
    }
}
