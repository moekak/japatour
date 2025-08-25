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
                  DB::beginTransaction();
                  $validated  = $request->validated();
                  $customerData = $this->generateData->prepareCustomerData($validated);
                  $customer = Customer::create($customerData);

                  $bookingData = $this->generateData->prepareBookingData($validated, $customer->id);
                  $booking = TourBooking::create($bookingData);

                  print_r($validated );
                  exit;

                  DB::commit();
                  return ["customer" => $customer->toArray(), "booking" => $booking->toArray()];

            }catch(\Exception $e){
                  DB::rollBack();
                  Log::debug($e);
                  return redirect()->back()->with('error', 'Booking failed. Please try again.');
            }

      }
}
