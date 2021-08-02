<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Collection;

use App\Models\OrderedProducts;
// use Maatwebsite\Excel\Concerns\FromCollection;

class OrderedProductsExport extends Controller {
	protected $date;

	public function __construct($date = "") {
		$this->date = $date;
	}

    public function collection() {
    	// return OrderedProducts::all();
    	$collectionData = [[$this->date, 'Naam Persoon', 'Email Persoon', 'Adresregel Persoon', 'Huisnummer Persoon', 'Postcode Persoon', 'Product Naam', 'Product Merk', 'Product Model', 'Product Prijs per', 'Aantal', 'Totaal prijs']];
    	// Toevoegen Adres/Postcode van persoon
    	// Toevoegen 'Bestelling aangelevert op'
    	// Toevoegen 'Bestelling goedgekeurd op'

    	$ops = $this::get(new Request(), $this->date);
    	// $ops = [];

    	foreach($ops as $key => $op) {
    		$opuser = $op->user;
    		$opproduct = $op->product;
    		array_push($collectionData, ["", $opuser->name, $opuser->email, $opuser->address, $opuser->housenumber, $opuser->housenumber, $opproduct->productname, $opproduct->brand, $opproduct->model, $opproduct->price, $op->amount, $opproduct->price * $op->amount]);
    	}

    	// $ops->each(function($op) use ($collectionData) {
    		
    	// });

    	// var_dump($collectionData);

    	// array_push($collectionData, );

    	// return new Collection([
    	// 	['Naam Persoon', 'Email Persoon', 'Product Naam', 'Product Merk', 'Product Model', 'Product Prijs'], // Headers?
    	// 	[1, 2, 3],
    	// 	[6, 7, 8],
    	// 	[99, 99, 99],
    	// ]);
    	return new Collection($collectionData);
    }

    public function get(Request $request, $date) {
		$products = OrderedProducts::where("approved", 1)->get()->groupBy(function ($data) {return \Carbon\Carbon::parse($data->updated_at)->format('d-m-y');})->get($date);
		return $products == null ? [] : $products;
    }

    public function download($date) {
    	return Excel::download(new OrderedProductsExport($date), "goedgekeurdeorders_{$date}.xlsx");
    }
}
