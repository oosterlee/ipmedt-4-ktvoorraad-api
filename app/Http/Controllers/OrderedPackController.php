<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OrderedPack;

class OrderedPackController extends Controller {
    public function index() {
    	return OrderedPack::with('user', 'pack')->where('approved', 0)->get();
    }

    public function update(Request $request, $id) {
    	$validated = $request->validate([
    		'approved' => 'required',
    	]);

    	$op = OrderedPack::where('id', $id)->firstOrFail();
    	$op->approved = $validated["approved"];
    	return $op->save();
    }
}
