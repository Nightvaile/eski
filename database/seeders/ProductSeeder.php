<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products =
            [
                [
                    'name'=>'ürün 1',
                    'description'=>'a',
                    'price'=>'100',
                    'amount'=>'100',
                    'image'=>'/images/shop/products/product-1.jpg',
                    'out_of_stock'=>'1',
                    'status'=>'1',
                ],
                [
                    'name'=>'ürün 2',
                    'description'=>'b',
                    'price'=>'200',
                    'amount'=>'200',
                    'image'=>'/images/shop/products/product-1.jpg',
                    'out_of_stock'=>'1',
                    'status'=>'1',
                ],
                [
                    'name'=>'ürün 3',
                    'description'=>'c',
                    'price'=>'300',
                    'amount'=>'300',
                    'image'=>'/images/shop/products/product-1.jpg',
                    'out_of_stock'=>'1',
                    'status'=>'1',
                ],
                [
                    'name'=>'ürün 4',
                    'description'=>'d',
                    'price'=>'400',
                    'amount'=>'400',
                    'image'=>'/images/shop/products/product-1.jpg',
                    'out_of_stock'=>'1',
                    'status'=>'1',
                ],
            ];

        foreach ($products as $product)
        {
            Product::create($product);
        }
    }
}
