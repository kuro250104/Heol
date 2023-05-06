<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Delivery;


class PaymentController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $delivery = $user->deliveries()->latest()->first();

        return view('payment.index', compact('delivery'));
    }

    public function show()
    {
        $user = auth()->user();
        $delivery = $user->deliveries()->latest()->first();

        return view('payment.show', compact('delivery'));
    }
}
