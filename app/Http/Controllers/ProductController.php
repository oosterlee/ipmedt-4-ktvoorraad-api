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

    public function getAll(){
        $products = \App\Models\products::all();
        return $products;
    }

    public function store(Request $request, \App\Models\Products $product){

        $request->validate([
            'image' => 'mimes:jpeg,bmp,png'
        ]);
        $random = Str::random(40);

        if($request->productname ==NULL){
            return redirect('/oops');
        }

        else{
            $path = $request->image->storeAs('product', $random .'.jpg', 'public_uploads');
            $product ->image = '/img/' . $path;
            $product->category = $request->input('category');
            $product->description = $request->input('description');
            $product->productname = $request->input('productname');
            $product->brand = $request->input('brand');
            $product->model = $request->input('model');
            $product->price = $request->input('price');
            $product->maxorders = $request->input('maxorders');
            $product->condition = $request->input('condition');
            $product->approval = $request->input('approval');

            try{ 
                $product->save();
                return redirect('/products');
            }
            catch(Exception $e){
                return redirect('/oops');
            }
        }

            // 'category' => $request->input('category'),
            // 'description' => $request->input('description'),
            // 'productname' => $request->input('productname'),
            // 'brand' => $request->input('brand'),
            // 'model' => $request->input('model'),
            // 'price' => $request->input('price'),
            // 'maxorders' => $request->input('maxorders'),
            // 'condition' => $request->input('condition'),
            // 'approval' => $request->input('approval'),        
    }
}
