<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Product;
use App\Models\Size;
use App\Models\Category;
use App\Models\Product_user;
use App\Models\Cart;
use App\Models\Cart_product;


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

    public function store(Request $request, $id)
    {
        $user = Auth::user();
        $userId = $user->id;
        $product = Product::find($id);
        $cart = Cart::firstOrCreate(['user_id' => $userId]);
        $cart->products()->attach($product, ['size_id' => $request->input('size_id')]);
        Session::put('cart_id', $cart->id);
        
        return redirect()->route('delivery.index');
    }
}
