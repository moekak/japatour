<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdditionalService;
use App\Models\Customer;
use App\Models\Tour;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class BookingController extends Controller
{
    public function index($id, $date = null)
    {
        $tour = Tour::getSpecificData($id);
        $services = AdditionalService::getServices();
        return view("tour_book", compact("tour", "date", "services"));
    }

    public function createPaymentIntent(){
        Stripe::setApiKey(config('services.stripe.secret'));
    
        $intent = PaymentIntent::create([
            'amount' => 259800, // $2,598.00固定
            'currency' => 'jpy',
            'automatic_payment_methods' => ['enabled' => true],
        ]);
        
        return response()->json([
            'clientSecret' => $intent->client_secret
        ]);


    }


}
