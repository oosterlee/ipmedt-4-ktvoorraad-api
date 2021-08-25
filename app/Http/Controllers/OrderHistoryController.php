<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderedProducts;
use App\Models\OrderedPack;

class OrderHistoryController extends Controller {
    public function index(Request $request, $id) {
    	return OrderedProducts::with('user', 'product')->where('user_id', $id)->get();
    }

    public function packShow(Request $request, $id) {
    	return OrderedPack::with('user', 'pack')->where('user_id', $id)->get();
    }
}
