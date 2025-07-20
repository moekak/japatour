<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    static public function getAllCategories(){
        return Category::all();
    }

    public function region(){
        return $this->belongsTo(Region::class, "region_id", "id");
    }

    public function tours(){
        return $this->hasMany(Tour::class, "category_id", "id");
    }

    public function scopeWithRegion($query){
        return $query->with("region");
    }

    public function scopeWithToursCount($query)
    {
        return $query->withCount('tours');
    }

    static public function scopeWithTour($query){
        return $query->with("tour")->count();
    }



    static public function getCateforiesDataWithRegion(){
        return Category::withRegion()->withToursCount()->get();
    }
}
