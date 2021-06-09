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

    public function store(Request $request){
        return products::create([
            'category' => $request->input('category'),
            'productname' => $request->input('productname'),
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'price' => $request->input('price'),
            'maxorders' => $request->input('maxorders'),
            'condition' => $request->input('condition'),
            'approval' => $request->input('approval'),

        ]);

            // $validated = $request->validate([
            //     'category' => 'required|max:40',
            //     'productname' => 'required|max:40',
            // ]);

            // return $validated;
        

        
    }
}
