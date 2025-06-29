<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourGalleryImage extends Model
{
    protected $fillable = [
        "tour_id",
        "gallery_image",
        "order"
    ];
}
