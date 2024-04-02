<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrayProducts = [

            [
                'title' => 'Pesas',
                'price' => '150.000',
                'image' => 'assets/css/storage/product-1.jpg'
            ],

            [
                'title' => 'Silla',
                'price' => '300.000',
                'image' => 'assets/css/storage/product-2.jpg'
            ],

            [
                'title' => 'Discos',
                'price' => '25.000',
                'image' => 'assets/css/storage/product-3.jpg'
            ],

            [
                'title' => 'Mancuernas',
                'price' => '20.000',
                'image' => 'assets/css/storage/product-4.jpg'
            ],

            [
                'title' => 'Pesas Grandes',
                'price' => '10.000',
                'image' => 'assets/css/storage/product-5.jpg'
            ],

            [
                'title' => 'Pera de box',
                'price' => '150.000',
                'image' => 'assets/css/storage/product-6.jpg'
            ],

        ];

        foreach ($arrayProducts as $product) {
            Product::create($product);
        }
    }
}
