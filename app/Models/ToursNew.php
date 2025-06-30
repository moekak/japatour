<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToursNew extends Model
{
    protected $fillable = [
        "title",
        "subtitle",
        "badge",
        "category_id",
        "region_id",
        "hero_image",
        "overview_title",
        "overview_description"
    ];

    public function itineraries(){
        return $this->hasMany(Itinerary::class, "tour_id", "id");
    }

    public function tourHighlights(){
        return $this->hasMany(TourHighlight::class, "tour_id", "id");
    }

    public function tourGalleryImages(){
        return $this->hasMany(TourGalleryImage::class, "tour_id", "id");
    }

    public function category(){
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    

    public function scopeWithRelations($query){
        return $query->with(["category","itineraries", "tourHighlights", "tourGalleryImages", "itineraries.itineraryActivities", "itineraries.itineraryHighlights", "itineraries.itineraryLanguages"]);
    }
    
    public function scopeWithId($query, $id){
        return $query->where("id", $id);
    }

    public static function getAllTours(){
        $tours = static::withRelations()->get()->groupBy('category.category');
        return $tours;
    }

    public static function getSpecificTour($id){
        $tours = static::withId($id)->withRelations()->first();
        return $tours;
    }

}
