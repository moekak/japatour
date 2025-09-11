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

}
