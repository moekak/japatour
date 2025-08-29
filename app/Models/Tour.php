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
        "overview_description",
        "is_featured"
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
    
    public function scopeWithId($query, $column, $id){
        return $query->where($column, $id);
    }

    public function scopeWithIsFeatured($query, $type){
        return $query->where("is_featured", $type);
    }

    public static function getAllToursByCategory(){
        $tours = static::withRelations()
            ->get()
            ->map(function($tour) {
                $tour->average_rate = $tour->tourReviews->avg('rating') ?? 0;
                $tour->minimum_price = $tour->itineraries->min('adult_price') ?? 0;
                $tour->minimum_duration = $tour->itineraries->min('duration') ?? 0;
                return $tour;
            })
            ->groupBy('category.category');
        return $tours;
    }

    public static function getAllToursByCategoryWithoutFeatured(){
        $tours = static::withRelations()
            ->withIsFeatured("0")
            ->get()
            ->map(function($tour) {
                $tour->average_rate = $tour->tourReviews->avg('rating') ?? 0;
                $tour->minimum_price = $tour->itineraries->min('adult_price') ?? 0;
                $tour->minimum_duration = $tour->itineraries->min('duration') ?? 0;
                return $tour;
            })
            ->groupBy('category.category');
        return $tours;
    }



    public static function getTourCount(){
        return static::withIsFeatured("0")->count();
    }
    public static function getFeaturedTour(){
        $featuredTour = static::withRelations()
            ->withIsFeatured("1")
            ->first();
        if ($featuredTour) {
            $featuredTour->average_rate = $featuredTour->tourReviews->avg('rating') ?? 0;
            $featuredTour->minimum_price = $featuredTour->itineraries->min('adult_price') ?? 0;
            $featuredTour->minimum_duration = $featuredTour->itineraries->min('duration') ?? 0;
        }

        return $featuredTour;
    }

    public static function getAllTours(){
        $tours = static::withRelations()
            ->get()
            ->map(function($tour) {
                    $tour->average_rate = $tour->tourReviews->avg('rating') ?? 0;
                    $tour->minimum_price = $tour->itineraries->min('adult_price') ?? 0;
                    $tour->minimum_duration = $tour->itineraries->min('duration') ?? 0;
                    return $tour;
                });
        return $tours;
    }

    public static function getSpecificTour($column, $id){
        $tours = static::withId($column, $id)
            ->withRelations()
            ->get()
            ->map(function($tour) {
                $tour->average_rate = $tour->tourReviews->avg('rating') ?? 0;
                $tour->minimum_price = $tour->itineraries->min('adult_price') ?? 0;
                $tour->minimum_duration = $tour->itineraries->min('duration') ?? 0;
                return $tour;
            });
        return $tours;
    }

}