<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable=[
        "title" ,
        "subtitle" ,
        "badge" ,
        "duration_days",
        "start_location",
        "end_location" ,
        "destinations" ,
        "languages" ,
        "min_participants",
        "max_participants" ,
        "currency",
        "price",
        "discount_percentage",
        "accommodation",
        "departure_dates",
        "limited_spots",
        "overview",
        "highlights",
        "itinerary",
        "inclusions" ,
        "exclusions",
        "hero_image" ,
        "gallery_images",
        "is_active"
    ];


    public static function getAllTours(){
        $tours = Tour::where("is_active", true)->get();
        // JSONフィールドを配列に変換
        foreach ($tours as $tour) {
            // もし highlights, gallery_images などがJSON型の場合
            if (isset($tour->highlights) && is_string($tour->highlights)) {
                $tour->highlights = json_decode($tour->highlights, true);
            }
            
            if (isset($tour->gallery_images) && is_string($tour->gallery_images)) {
                $tour->gallery_images = json_decode($tour->gallery_images, true);
            }
            
            if (isset($tour->itinerary) && is_string($tour->itinerary)) {
                $tour->itinerary = json_decode($tour->itinerary, true);
            }
            
            if (isset($tour->inclusions) && is_string($tour->inclusions)) {
                $tour->inclusions = json_decode($tour->inclusions, true);
            }
            
            if (isset($tour->exclusions) && is_string($tour->exclusions)) {
                $tour->exclusions = json_decode($tour->exclusions, true);
            }
        }
        return $tours;
    }
}
