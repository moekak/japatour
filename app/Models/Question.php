<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        "tour_id", 
        "question",
        "answer"
    ];

    public function tour() {
        return $this->belongsTo(Tour::class, "tour_id", "id");
    }

}
