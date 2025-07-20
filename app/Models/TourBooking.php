<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    protected $fillable = [
        "tour_id",
        "customer_name",
        "customer_email",
        "cusomter_phone",
        "country",
        "number_of_participants",
        "special_requests",
        "total_price",
        "tour_date",
        "tour_itinerary",
        "additional_service"
    ];
}
