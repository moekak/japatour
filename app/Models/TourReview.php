<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourReview extends Model
{
    protected $fillable = [
        "tour_id",
        "name",
        "content",
        "rating",
        "date"
    ];
}
