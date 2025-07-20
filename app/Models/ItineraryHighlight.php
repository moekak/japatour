<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItineraryHighlight extends Model
{
    protected $fillable = [
        "itinerary_id",
        "itinerary_highlight"
    ];
}
