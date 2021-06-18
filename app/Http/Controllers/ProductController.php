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

    // public function create(Request $request){
    //     if($request->isMethod('post')){
    //         $producten = $request->input();
    //         echo "<pre>"; print_r($producten); die;
    //     }
    // }

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
