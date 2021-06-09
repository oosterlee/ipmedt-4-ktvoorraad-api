<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){
        $product = \App\Models\products::where('id','=',$id)->first();

        return $product;
    }

    public function destroy($id) {
        DB::delete('delete from products where id = ?',[$id]);
        return redirect('/products');
        
        }
}
