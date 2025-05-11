<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class BookingController extends Controller
{
    public function index()
    {
        return view("tour_book");
    }

    public function createPaymentIntent(){
        Stripe::setApiKey(config('services.stripe.secret'));
    
        $intent = PaymentIntent::create([
            'amount' => 259800, // $2,598.00固定
            'currency' => 'usd',
            'automatic_payment_methods' => ['enabled' => true],
        ]);
        
        return response()->json([
            'clientSecret' => $intent->client_secret
        ]);


    }


}
