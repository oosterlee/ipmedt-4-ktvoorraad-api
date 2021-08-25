<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pack;
use App\Models\PackProduct;

use Illuminate\Support\Str;

class PackController extends Controller {
    
    public function index() {
    	return Pack::all();
    }

    public function store(Request $request) {
    	$validated = $request->validate([
            'name' => 'required|max:40',
            'description' => 'required|max:500',
            'products' => 'required|array',
            'products.*' => 'required'
        ]);

        $pack = new Pack();

        $packid = Str::uuid();
        $pack->uuid = $packid;

        $pack->name = $validated["name"];
        $pack->description = $validated["description"];

        $res = $pack->save();

        if ($res == true) {

        	foreach ($validated["products"] as $key => $value) {
        		$pp = new PackProduct();
        		$pp->pack_id = $pack->uuid;
        		$pp->product_id = $value;
        		$pp->save();
        	}

        	return true;
        }

        return false;
    }

    public function update(Request $request, $id) {
    	$validated = $request->validate([
            'name' => 'required|max:40',
            'description' => 'required|max:500',
            'products' => 'required|array',
            'products.*' => 'required'
        ]);

        $pack = Pack::where('uuid', $id)->firstOrFail();

        // $pack->name = $validated["name"];
        // $pack->description = $validated["description"];

    	// Remove all PackProduct and add the ones send
        PackProduct::where('pack_id', $id)->delete();

        foreach ($validated["products"] as $key => $value) {
    		$pp = new PackProduct();
    		$pp->pack_id = $pack->uuid;
    		$pp->product_id = $value;
    		$pp->save();
    	}

    	// return $pack->save();
    	return Pack::where('uuid', $id)->update(['name' => $validated["name"], 'description' => $validated["description"]]);
    }

    public function delete($id) {
    	// PackProduct::where('pack_id', $id)->delete();
    	return Pack::where('uuid', $id)->delete();
    }

    public function show($id) {
    	return Pack::where('uuid', $id)->with(["products"])->firstOrFail();
    }
}
