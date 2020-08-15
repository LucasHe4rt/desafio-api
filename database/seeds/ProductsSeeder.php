<?php

use Illuminate\Database\Seeder;
use \App\Enums\Category\CategoryTypes;
use \App\Entities\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'category_id' => CategoryTypes::REFFER,
                'name' => 'Monster Ultra Zero Sugar',
                'description' => 'lorem',
                'price' => 7.90,
                'image' => 'zero-ultra.png'
            ]
        ];
        foreach ($products as $product){
            Product::create($product);
        }
    }
}
