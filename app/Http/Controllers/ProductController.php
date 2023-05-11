<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Size;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function show($id)
    {

        $product = Product::find($id);
        $sizes = Size::all();
        return view('products.show', compact('product', 'sizes'));
    }
//    public function store()
//    {
//        Product::create();
//        return redirect()->route('product.index');
//    }

}
