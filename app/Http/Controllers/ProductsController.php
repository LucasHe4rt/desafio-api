<?php


namespace App\Http\Controllers;


use App\Entities\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function index(Request $request)
    {
        if ($search = $request->get('search')) {
            $condition = "%" . $search . "%";
            $this->model = $this->model->where('name', 'LIKE', $condition);
        }
        $this->model = $this->model->with('category');
        return response()->json($this->model->paginate(15));
    }

    public function show(int $productId)
    {
        $product = $this->model->find($productId)->load('category');
        return response()->json($product);
    }
}
