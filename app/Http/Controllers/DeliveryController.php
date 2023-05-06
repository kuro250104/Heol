<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function index(){
        return view('delivery.index');
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
