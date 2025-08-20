<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        "title",
        'subtitle',
        'featured_image',
        'category',
        'status',
        'meta_description',
        'content',
        'tags',
        'reading_time',
    ];

    static public function getlatesetBlogs(){
        return static::latest()->take(3)->get();
    }

    static public function getRelatedBlogs($category){
        return static::where("category", $category)->get();
    }
}
