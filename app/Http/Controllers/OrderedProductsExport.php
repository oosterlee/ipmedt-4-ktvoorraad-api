<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Collection;

use App\Models\OrderedProducts;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrderedProductsExport extends Controller implements FromCollection {
    public function collection() {
    	// return OrderedProducts::all();
    	$collectionData = [['Naam Persoon', 'Email Persoon', 'Product Naam', 'Product Merk', 'Product Model', 'Product Prijs', 'Aantal']];
    	// Toevoegen Adres/Postcode van persoon
    	// Toevoegen 'Bestelling aangelevert op'
    	// Toevoegen 'Bestelling goedgekeurd op'

    	$ops = OrderedProducts::all();

    	foreach($ops as $key => $op) {
    		$opuser = $op->user;
    		$opproduct = $op->product;
    		array_push($collectionData, [$opuser->name, $opuser->email, $opproduct->productname, $opproduct->brand, $opproduct->model, $opproduct->price, $op->amount]);
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

    public function download() {
    	return Excel::download(new OrderedProductsExport, 'orderedproducts.xlsx');
    	// $data = [["test", "abc"], [1, 2], [6, 7]];
    	// return Excel::create('orderedproducts', function($excel) use ($data) {
    	// 	$excel->sheet('products', function($sheet) use ($data) {
    	// 		$sheet->fromArray($data);
    	// 	});
    	// });
    }
}
