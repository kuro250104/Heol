<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.checkout');
    }

    public function payment()
    {
        return view('payment.payment');
    }

    public function confirmation_payment()
    {
        return view('payment.confirmation');
    }
}
