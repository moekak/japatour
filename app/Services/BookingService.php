<?php

namespace App\Services;

use App\Http\Requests\Admin\Booking\CreateBookingRequest;
use App\Mail\BookingMail;
use App\Models\Customer;
use App\Models\Itinerary;
use App\Models\Tour;
use App\Models\TourBooking;
use App\Services\Util\GenerateData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BookingService
{

      protected $generateData;
      protected $lineService;

      public function __construct(GenerateData $generateData, LineService $lineService)
      {
            $this->generateData = $generateData;
            $this->lineService = $lineService;
      }
      public function createBooking(CreateBookingRequest $request){
            try{
                  DB::beginTransaction();
                  $validated  = $request->validated();
                  $customerData = $this->generateData->prepareCustomerData($validated);
                  $customer = Customer::create($customerData);
                  $bookingData = $this->generateData->prepareBookingData($validated, $customer->id);
                  $booking = TourBooking::create($bookingData);

                  // $this->lineService->sendMessage("C4809840668b8c611a772a6fc325e62c4");
                  $itinerary = Itinerary::select("overview_title", "tour_id")->where("id", $validated["itinerary_id"])->first("overview_title");
                  $booking["tour_title"] = Tour::where("id", $itinerary->tour_id)->value("title");
                  $booking["itinerary_title"] = $itinerary->overview_title;

                  Mail::to($customer->email)->send(new BookingMail($customer, $booking));

                  DB::commit();
                  return ["customer" => $customer->toArray(), "booking" => $booking->toArray()];

            }catch(\Exception $e){
                  DB::rollBack();
                  Log::debug($e);
                  return redirect()->back()->with('error', 'Booking failed. Please try again.');
            }

      }
}
