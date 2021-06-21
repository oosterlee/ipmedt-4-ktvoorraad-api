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
        $beschrijving_pd1 = "Met de Poly Voyager Focus B825-M Bluetooth Office Headset met Basisstation ga je altijd en overal het gesprek aan. Je koppelt deze headset namelijk via bluetooth aan je smartphone, pc, laptop en bluetooth deskphone. Of je nou in de trein zit of aan je bureau werkt, de accu van deze Poly headset gaat tot 12 uur mee.";
        $beschrijving_pd2 = "RSI klachten in de toekomst voorkom je door een juiste zithouding. De positie van je benen en voeten is hierin ook van belang. Met de Fellowes Voetensteun zorg je ervoor dat je benen in de juiste houding komen te staan, wanneer je plaats neemt achter je bureau.";
        $beschrijving_pd3 = "Als jij je laptop of pc wilt uitbreiden met 4 USB A poorten, is deze hub precies wat je nodig hebt. Dit model beschikt over USB 3.0 poorten die een snelle dataoverdracht garanderen. ";
        $beschrijving_pd4 = "Met de zwarte HP 953 (L0S58AE) inktcartridge produceert uw printer afdrukken van hoge kwaliteit. De inkt droogt snel, waardoor geen vlekken ontstaan en tekst geschikt is voor het gebruik van markeerstiften.";
        $beschrijving_pd5 = "Met de HP Cartridge 301 in huis weet je zeker dat je op belangrijke momenten nooit in de steek wordt gelaten. De documenten die uit je printer rollen zijn namelijk keer op keer voorzien met letters van laserkwaliteit.";
        $beschrijving_pd6 = "De HP OfficeJet 6950 e-all-in-One is een uitgebreide kleuren inkjet printer voor kantoren. Voer meerdere taken uit zoals scannen, kopiëren en printen op een hoge printresolutie van 4.800 bij 1.200 dpi. Bovendien verstuur je via wifi een printopdracht vanaf je telefoon of tablet.";
        $beschrijving_pd7 = "De HP EliteDisplay E243i is een 24 inch monitor waarmee je een ergonomische werkplek creëert op kantoor of thuis. Deze monitor is namelijk kantelbaar, roteerbaar en in hoogte verstelbaar. Zo pas je hem volledig aan jouw werkhouding aan en verminder de kans op klachten aan je nek en schouders.";
        $beschrijving_pd8 = "De Logitech MX Master 3 is de opvolger van de succesvolle MX Master 2S. Het MagSpeed scrollwiel is nu nog sneller en stiller dan eerder. Zo scroll je weer in no-time door al je Excelregels heen. Ook is Logitech Flow weer terug, dus gebruik de muis op meerdere apparaten op hetzelfde moment en wissel tussen deze apparaten met een druk op de knop.";
        $beschrijving_pd9 = "Met de HP Draadloze Muis 200 Zwart is dankzij zijn vorm grootte comfortabel in gebruik en ontlast hierdoor de pols. Doordat de muis draadloos is, zit je niet in de knoop met draden die op je bureau liggen. En dankzij de draadloze connectiviteit van 2,4 Ghz heb je een bereik tot 10 meter en een hoek van 360 graden.";
        $beschrijving_pd10 = "De toetsenbordindeling van dit toetsenbord is QWERTY en de taalindeling is US International.";
        $beschrijving_pd11 = "Plaats gemakkelijk je monitoren en andere werkspullen op het werkblad. Je verbetert de productiviteit als je zittend en staand werken afwisselt. Deze afwisseling is ook goed voor de ergonomie. Hiermee verminder je de kans op lichamelijke klachten.";
        $category_array=["Communicatie","Ergonomie","Kabel", "Print", "Print", "Print", "Randapparatuur","Randapparatuur","Randapparatuur","Randapparatuur","werkplek"];
        $description_array=[$beschrijving_pd1,$beschrijving_pd2,$beschrijving_pd3,$beschrijving_pd4,$beschrijving_pd5,$beschrijving_pd6,$beschrijving_pd7,$beschrijving_pd8,$beschrijving_pd9,$beschrijving_pd10,$beschrijving_pd11];
        $name_array=["Headset","Voetensteun","USB","Cartridge","Cartridge","Printer","Beeldscherm","Muis","Muis","Toetsenbord","Bureau"];
        $brand_array=["Poly","Fellowes","X","HP","HP","HP","HP","Logitech","HP","HP","Bureau"];
        $model_array=["B825-m","159719","USB-A to USB-C 2.0 BLACK","953XL ","301XL","Officejet 6950","Elitedisplay 24","MX Master 3","200","450","Groot"];
        $price_array=["216","41","5.99","24.99","24.99","99.99","129.99","89.99","22.99","24.99","400"];
        $max_orders_array=["1","1","1","10","10","1","1","1","1","1","1"];
        $condition_array=["none","per persoon, goedkeuring nodig van manager","none","per jaar","per year","none","per jaar, geen goedkeuring nodig","none","per jaar","per jaar","none"];
        $approval_array=[true, true, false, false, false, true, false, true, false, false, true];
        $image_array=["/img/headset.jpg","/img/voetensteun.jpg","/img/usb.jpg","/img/cartridge.jpg","/img/cartridge.jpg","/img/printer.jpg","/img/beeldscherm.jpg","/img/muis.jpg","/img/muis.jpg","/img/toetsenbord.jpg","/img/bureau.jpg",];
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
