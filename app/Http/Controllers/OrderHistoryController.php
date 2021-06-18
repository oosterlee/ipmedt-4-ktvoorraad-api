<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderedProducts;

class OrderHistoryController extends Controller {
    public function index(Request $request, $id) {
    	return OrderedProducts::with('user', 'product')->where('user_id', $id)->get();
    }
}
