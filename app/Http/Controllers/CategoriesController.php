<?php


namespace App\Http\Controllers;


use App\Entities\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return response()->json($categories);
    }

    public function show(int $categoryId)
    {
        $category = Category::find($categoryId);

        return response()->json($category);
    }

    public function showProducts($categoryId)
    {
        $products = Category::find($categoryId)->products->load('category');

        return response()->json($products);
    }
}
