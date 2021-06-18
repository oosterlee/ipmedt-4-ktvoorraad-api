<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\ordered_products;
use Illuminate\Http\Request;

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
        $product->image = $request->image;
        try {
            $product->save();
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/product');
        }
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
