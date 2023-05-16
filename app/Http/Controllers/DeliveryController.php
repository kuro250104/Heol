<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Delivery;
use App\Models\Cart;
use App\Models\Cart_Product;

class DeliveryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = $user->id;

        $cart = Cart::with('products')->where('user_id', $userId)->first();
        $products = $cart->products;
        $cart_product = Cart_Product::with('size')->get();


        return view('delivery.index', compact('products', 'cart_product'));
    }


    public function store(Request $request){
        $delivery = new Delivery;
        $delivery->name = $request->get('name');
        $delivery->email = $request->get('email');
        $delivery->delivery_address = $request->get('delivery_address');
        $delivery->postal_code = $request->get('postal_code');
        $delivery->city = $request->get('city');
        $user_id = auth()->user()->id;
        $delivery->user_id = $user_id;
        $delivery->save();

        return redirect()->route("payment.index");
    }
}
