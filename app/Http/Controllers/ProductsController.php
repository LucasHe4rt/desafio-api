<?php


namespace App\Http\Controllers;


use App\Entities\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json($products);
    }

    public function show(int $productId)
    {
        $product = Product::find($productId);

        return response()->json($product);
    }
}
