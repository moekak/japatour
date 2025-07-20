<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        "tour_id",
        "name",
        "rate",
        "review",
        "review_date"
    ];

    public function tour() {
        return $this->belongsTo(Tour::class, "tour_id", "id");
    }

    public function getSpecificData($id){
        return Review::where("id", $id)->first();
    }
}
