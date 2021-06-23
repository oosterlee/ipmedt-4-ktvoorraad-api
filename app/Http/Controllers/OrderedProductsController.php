<?php

namespace App\Http\Controllers;

use App\Models\ordered_products;
use Illuminate\Http\Request;

use App\Models\OrderedProducts;
use DB;
use Auth;

class OrderedProductsController extends Controller {

    public function store(Request $request) {
    	$validated = $request->validate([
    		// 'data' => 'required|array',
    		'*.product_id' => 'required|integer',
    		'*.amount' => 'required|integer'
    	]);

    	$res = [];

    	for ($i = 0; $i < sizeof($validated); $i++) {
    		$op = new OrderedProducts;

    		$op->user_id = Auth::user()->id;
    		// $op->user_id = 1;

	    	$op->product_id = $validated[$i]['product_id'];
	    	$op->amount = $validated[$i]['amount'];
	    	array_push($res, $op->save());
    	}

    	return $res;
    }

    public function getOrderRequests(Request $request) {
    	return OrderedProducts::with('user', 'product')->where('approved', 0)->get();
    }

    public function update(Request $request, $id) {
    	$validated = $request->validate([
    		'approved' => 'required'
    	]);

    	$op = OrderedProducts::where('id', $id)->firstOrFail();
    	$op->approved = $validated["approved"];
    	return $op->save();
    }

    public function getEachDay() {
    	DB::statement("SET SQL_MODE=''");
    	return OrderedProducts::where("approved", 1)->select(DB::raw('count(*) as count'), DB::raw("DATE_FORMAT(updated_at, '%d-%m-%y') as date"))->groupByRaw('DAY(updated_at)')->get()->toArray();
    }
}
