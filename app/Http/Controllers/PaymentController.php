<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Delivery;
use App\Models\Cart;

class PaymentController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $delivery = $user->deliveries()->latest()->first();
        $product_user = $user->product_user()->latest()->first();

        $user = Auth::user();
        $userId = $user->id;
        $cart = Cart::with('products')->where('user_id', $userId)->first();
        $price_products = $cart->products;

        return view('payment.index', compact('delivery', 'product_user', 'price_products'));
    }

    public function show()
    {
        $user = auth()->user();
        $delivery = $user->deliveries()->latest()->first();
        $product_user = $user->product_user()->latest()->first();

        $user = Auth::user();
        $userId = $user->id;
        $cart = Cart::with('products')->where('user_id', $userId)->first();
        $products = $cart->products;

        return view('payment.show', compact('delivery', 'product_user', 'products'));
    }
}
