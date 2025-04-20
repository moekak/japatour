<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable=[
        "title" ,
        "subtitle" ,
        "badge" ,
        "hours",
        "duration_days",
        "start_location",
        "destinations" ,
        "languages" ,
        "min_participants",
        "max_participants" ,
        "available_dates",
        "currency",
        "price",
        "discount_percentage",
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


    public function scopWithId($query, $id){
        return $query->where("id", $id);
    }

    public static function getSpecificTour($id){
        $tour = Tour::where("is_active", true)->where("id", $id)->first();
        // JSONフィールドを配列に変換
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
        return $tour;
    }

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

    public static function getTourInfo(){
        $tours = Tour::select("title", "overview", "price", "destinations", "hours", "languages", "id", "hero_image", "badge",)->where("is_active", true)->get();
        return $tours;
    }
}
