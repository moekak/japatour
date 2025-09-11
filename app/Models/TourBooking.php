<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    protected $fillable = [
        "itinerary_id",
        "customer_id",
        "youth_number",
        "youth_price",
        "adult_number",
        "adult_price",
        "request",
        "tour_date",
        "created_at",
        "updated_at"
    ];
}
