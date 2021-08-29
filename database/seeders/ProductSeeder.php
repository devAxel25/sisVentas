<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'LARAVEL Y LIVEWIRE',
            'cost'=>200,
            'price'=>350,
            'barcode'=>'75010065987',
            'stock'=>100,
            'alerts'=>10,
            'category_id'=>1,
            'image'=>'curso.png'
        ]);
        Product::create([
            'name'=>'OMNIVAL',
            'cost'=>120,
            'price'=>300,
            'barcode'=>'75010065955',
            'stock'=>80,
            'alerts'=>10,
            'category_id'=>2,
            'image'=>'omnival.png'
        ]);
        Product::create([
            'name'=>'TORTA DE 3 LECHES',
            'cost'=>100,
            'price'=>200,
            'barcode'=>'75010066787',
            'stock'=>100,
            'alerts'=>10,
            'category_id'=>3,
            'image'=>'torta3leches.png'
        ]);
        Product::create([
            'name'=>'TORTA HELADA',
            'cost'=>250,
            'price'=>450,
            'barcode'=>'75010065934',
            'stock'=>100,
            'alerts'=>10,
            'category_id'=>4,
            'image'=>'tortahelada.png'
        ]);
    }
}
