<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Booking\CreateBookingRequest;
use App\Models\AdditionalService;
use App\Models\Tour;
use App\Services\BookingService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class BookingController extends Controller
{

    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }
    public function index(string $id)
    {
        $tour = Tour::getSpecificTour("id", $id);
        return view("book.booking", compact("tour"));
    }
    public function confirmation(){
        return view("book.book_confirmation");
    }

    public function store(CreateBookingRequest $request){

        $bookingData = $this->bookingService->createBooking($request);
        return redirect()->to("/tour/confirmation")->with(["customer" => $bookingData["customer"], "booking" => $bookingData["booking"]]);
    }

    // public function createPaymentIntent(Request $request){
    //     try{
    //         Log::debug($request->all());
    //         $tourId = $request->input("tour_id");
    //         $fullName = $request->input("customer_name");
    //         $email = $request->input("customer_email");
    //         $phone = $request->input("cusomter_phone");
    //         $number = $request->input("number_of_participants");
    //         $country = $request->input("country");
    //         $additional_services = json_decode($request->input("additional_services"), true);
    //         $tour_date = $request->input("tour_date");
    //         $itinearies = $request->input("itineary");
    //         $total = $request->input("total");

    //         $additionalCost = 0;
    //         $totalPrice = 0;

        
    //         foreach($additional_services as $service){
    //             $price = AdditionalService::findOrFail($service["id"]);
    //             $additionalCost += $price->price;
    //         }


    //         $tour = Tour::findOrFail($tourId);
    //         $tourPrice = $tour->price * $number;
    //         $totalPrice = $tourPrice + $additionalCost;
            

    //         $cleanPrice = str_replace(['￥', ','], '', $total);
    //         $numericPrice = (int) $cleanPrice; // 36000
    //         if($numericPrice == $totalPrice){
    //             Stripe::setApiKey(config('services.stripe.secret'));
    
    //             $intent = PaymentIntent::create([
    //                 'amount' => $totalPrice, // $2,598.00固定
    //                 'currency' => 'jpy',
    //                 'automatic_payment_methods' => ['enabled' => true],
    //             ]);
                
    //             return response()->json([
    //                 'clientSecret' => $intent->client_secret
    //             ]);

    //         }else{
    //             Log::debug("fail");
    //             return response()->json([
    //                 'status' => 501
    //             ]);
    //         }
    //     }catch(\Exception $e){
    //         Log::debug($e);
    //             return response()->json([
    //                 'status' => 501
    //             ]);
    //     }


    // }


}
