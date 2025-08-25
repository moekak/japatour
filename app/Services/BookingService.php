<?php

namespace App\Services;

use App\Http\Requests\Admin\Booking\CreateBookingRequest;
use App\Models\Customer;
use App\Models\TourBooking;
use App\Services\Util\GenerateData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookingService
{

      protected $generateData;

      public function __construct(GenerateData $generateData)
      {
            $this->generateData = $generateData;
      }
      public function createBooking(CreateBookingRequest $request){
            try{
                  $validated  = $request->validated();
                  $customer = null;
                  $booking = null;
                  
                  DB::transaction(function () use($validated, &$customer, &$booking){
                        $customerData = $this->generateData->prepareCustomerData($validated);
                        $customer = Customer::create($customerData);

                        $bookingData = $this->generateData->prepareBookingData($validated, $customer->id);
                        $booking = TourBooking::create($bookingData);
                  });

                  return ["customer" => $customer, "booking" => $booking];

            }catch(\Exception $e){
                  Log::debug($e);
                  return redirect()->back()->with('error', 'Booking failed. Please try again.');
            }

      }
}
