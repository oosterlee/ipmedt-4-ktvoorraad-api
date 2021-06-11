<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aantal_producten = 11;
        $category_array=["Communicatie","Ergonomie","Kabel", "Print", "Print", "Print", "Randapparatuur","Randapparatuur","Randapparatuur","Randapparatuur","werkplek"];
        $name_array=["Headset","Voetensteun","USB","Cartridge","Cartridge","Printer","Beeldscherm","Muis","Muis","Toetsenbord","Bureau"];
        $brand_array=["Poly","Fellowes","X","HP","HP","HP","HP","Logitech","HP","HP","none"];
        $model_array=["B825-m","159719","USB-A to USB-C 2.0 BLACK","953XL ","301XL","Officejet 6950","Elitedisplay 24","MX Master 3","200","450","Onbekend"];
        $price_array=["216","41","5.99","24.99","24.99","99.99","129.99","89.99","22.99","24.99","400"];
        $maximum_array=["1","1","1","10","10","1","1","1","1","1","1"];
        $condition_array=["none","per persoon, goedkeuring nodig van manager","none","per jaar","per year","none","per jaar, geen goedkeuring nodig","none","per jaar","per jaar","none"];
        $approval_array=[true, true, false, false, false, true, false, true, false, false, true];
        for($i = 0; $i < 11; $i++){
            DB::table('products')->insert([
                'category'=> $category_array[$i],
                'productname'=> $name_array[$i],
                'brand'=> $brand_array[$i],
                'model'=> $model_array[$i],
                'price'=> $price_array[$i],
                'maxorders'=> $maximum_array[$i],
                'condition'=> $condition_array[$i],
                'approval'=> $approval_array[$i],
            ]);

        }



        //
    }
}
