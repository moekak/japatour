<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourHighlight extends Model
{
    protected $fillable = [
        "tour_id",
        "title",
        "description"
    ];
    
}
