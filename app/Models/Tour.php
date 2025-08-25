<?php

namespace App\Models;

use BcMath\Number;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
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

    public function tourReviews(){
        return $this->hasMany(TourReview::class, "tour_id", "id");
    }

    public function tourQuestions(){
        return $this->hasMany(TourQuestion::class, "tour_id", "id");
    }

    public function category(){
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    

    public function scopeWithRelations($query){
        return $query->with(["category","itineraries","tourReviews","tourQuestions", "tourHighlights", "tourGalleryImages", "itineraries.itineraryActivities", "itineraries.itineraryHighlights", "itineraries.itineraryLanguages", "itineraries.itineraryLanguages.language"]);
    }
    
    public function scopeWithId($query, $id){
        return $query->where("id", $id);
    }

    public static function getAllToursByCategory(){
        $tours = static::withRelations()
            ->get()
            ->map(function($tour) {
                // レビューの平均点を計算してプロパティに追加
                $tour->average_rate = $tour->tourReviews->avg('rating') ?? 0;
                return $tour;
            })
            ->map(function($tour) {
                // レビューの平均点を計算してプロパティに追加
                $tour->minimum_price = $tour->itineraries->min('adult_price') ?? 0;
                return $tour;
            })
            ->map(function($tour) {
                // レビューの平均点を計算してプロパティに追加
                $tour->minimum_duration = $tour->itineraries->min('duration') ?? 0;
                return $tour;
            })
            ->groupBy('category.category');
        return $tours;
    }

    public static function getAllTours(){
        $tours = static::withRelations()->get();
        return $tours;
    }

    public static function getSpecificTour($id){
        $tour = static::withId($id)->withRelations()->first();
        return $tour;
    }

}