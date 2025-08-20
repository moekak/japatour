<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    protected $fillable = [
        "tour_id",
        "overview_title",
        "overview_description",
        "duration",
        "image",
        "max_participants",
        "tour_type",
        "meeting_point",
        "adult_price",
        "child_price"
    ];

    public function itineraryActivities(){
        return $this->hasMany(ItineraryActivity::class, "itinerary_id", "id");
    }

    public function itineraryHighlights(){
        return $this->hasMany(ItineraryHighlight::class, "itinerary_id", "id");
    }

    public function itineraryLanguages(){
        return $this->hasMany(ItineraryLanguage::class, "itinerary_id", "id");
    }
}
