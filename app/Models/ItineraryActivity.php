<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItineraryActivity extends Model
{
    protected $fillable = [
        "itinerary_id",
        "activity_title",
        "activity_description",
        "activity_icon"
    ];
}
