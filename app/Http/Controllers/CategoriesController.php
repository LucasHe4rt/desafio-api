<?php


namespace App\Http\Controllers;


use App\Entities\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Category();
    }

    public function index(Request $request)
    {
        if($search = $request->get('search')){
            $condition = "%" . $search . "%";
            $this->model = $this->model->where('name','LIKE', $condition);
        }
        $categories = $this->model->paginate(15);
        return response()->json($categories);
    }

    public function show(int $categoryId)
    {
        $category = $this->model->find($categoryId);

        return response()->json($category);
    }

    public function showProducts($categoryId)
    {
        $products = $this->model->find($categoryId)->products->load('category');

        return response()->json($products);
    }
}
