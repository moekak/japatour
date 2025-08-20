<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItineraryLanguage extends Model
{
    protected $fillable = [
        "itinerary_id",
        "language_id"
    ];

    public function language(){
        return $this->belongsTo(Language::class, "language_id");
    }
}
