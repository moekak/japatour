<?php

namespace App\Models;

use BcMath\Number;
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


    public function reviews() {
        return $this->hasMany(Review::class, "tour_id", "id");
    }
    public function questions() {
        return $this->hasMany(Question::class, "tour_id", "id");
    }
    
    public function category() {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    
    public function scopWithId($query, $id){
        return $query->where("id", $id);
    }

    public function scopeWithTables($query){
        return $query->with("reviews", "questions");
    }

    public function scopeWithReviewsAndCategories($query){
        return $query->with([
            'reviews:tour_id,rate', // 短縮記法
            'category'
        ]);
    }

    public static function getSpecificData($id){
        $tour = Tour::where("is_active", true)->where("id", $id)->withTables()->first();
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

    public static function getAllData(){
        $tours = Tour::where("is_active", true)->withTables()->get();
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
    $tours = Tour::select("id", "title", "overview", "price", "destinations", "hours", "languages", "hero_image", "badge", "category_id")
        ->withReviewsAndCategories()
        ->where("is_active", true)
        ->get();
    
    // カテゴリ名でグループ化（データ整形前に行う）
    $groupedTours = $tours->groupBy(function($tour) {
        // カテゴリ名を取得（最初の文字を大文字に）
        return ucfirst(strtolower($tour->category->category));
    });
    
    // 各グループのツアーデータを整形
    $result = [];
    foreach ($groupedTours as $category => $categoryTours) {
        $result[$category] = $categoryTours->map(function($tour) {
            $reviewCount = count($tour->reviews);
            $rating = 0;
            
            if ($reviewCount > 0) {
                $rating = $tour->reviews->avg('rate');
            }
            
            return [
                'id' => $tour->id,
                'title' => $tour->title,
                'description' => $tour->overview, // JSではdescriptionを使っている
                'price' => $tour->price,
                'duration' => $tour->hours . ' hours', // JSでは "8 hours" の形式
                'rating' => round($rating, 1), // 小数点1桁に丸める
                'reviews' => $reviewCount,
                'image' => '/storage/' . $tour->hero_image // 画像パスの整形
            ];
        })->values()->toArray();
    }
    
    return $result;
}
}