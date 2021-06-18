<?php

namespace App\Http\Controllers;

use App\Models\ordered_products;
use Illuminate\Http\Request;

class OrderedProductsController extends Controller {
    public function create(Request $request){
            $producten = $request->input();
            echo "<pre>"; print_r($producten); die;
    }
}
