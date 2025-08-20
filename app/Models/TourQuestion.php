<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourQuestion extends Model
{
    protected $fillable = [
        "tour_id",
        "question",
        "answer"
    ];
}
