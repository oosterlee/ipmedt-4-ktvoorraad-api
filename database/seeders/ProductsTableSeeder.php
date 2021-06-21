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
        $description_array=["Geen","Geen","Geen","Geen","Geen","Geen","Geen","Geen","Geen","Geen","Geen",];
        $name_array=["Headset","Voetensteun","USB-A naar USB-C","Cartridge 953XL","Cartridge 301XL","Printer","Beeldscherm","Muis Logitech","Muis HP","Toetsenbord","Bureau"];
        $brand_array=["Poly","Fellowes","X","HP","HP","HP","HP","Logitech","HP","HP","none"];
        $model_array=["B825-m","159719","USB-A to USB-C 2.0 BLACK","953XL ","301XL","Officejet 6950","Elitedisplay 24","MX Master 3","200","450","Onbekend"];
        $price_array=["216","41","5.99","24.99","24.99","99.99","129.99","89.99","22.99","24.99","400"];
        $max_orders_array=["1","1","1","10","10","1","1","1","1","1","1"];
        $condition_array=["Altijd te bestellen","Maximaal 1 per persoon, goedkeuring nodig van de manager","Altijd te bestellen","Maximaal 10 per jaar","Maximaal 10 per jaar","Altijd te bestellen","Maximaal 1 per jaar, geen goedkeuring nodig","Altijd te bestellen","Maximaal 1 per jaar","Maximaal 1 per jaar","Altijd te bestellen"];
        $approval_array=[true, true, false, false, false, true, false, true, false, false, true];
        $image_array=["/img/headset.jpg","/img/voetensteun.jpg","/img/usb.jpg","/img/cartridge953xl.jpg","/img/cartridge301xl.jpg","/img/printer.jpg","/img/beeldscherm.jpg","/img/muislogitech.jpg","/img/muishp.jpg","/img/toetsenbord.jpg","/img/bureau.jpg",];
        for($i = 0; $i < $aantal_producten; $i++){
            DB::table('products')->insert([
                'category'=> $category_array[$i],
                'productname'=> $name_array[$i],
                'description'=> $description_array[$i],
                'brand'=> $brand_array[$i],
                'model'=> $model_array[$i],
                'price'=> $price_array[$i],
                'maxorders'=> $max_orders_array[$i],
                'condition'=> $condition_array[$i],
                'approval'=> $approval_array[$i],
                'image' => $image_array[$i],
            ]);

        }



        //
    }
}
