<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        "title",
        'subtitle',
        'featured_image',
        'blog_category_id',
        'meta_description',
        'content',
        'tags',
        'reading_time',
        'is_featured'
    ];

    static public function getlatesetBlogs(){
        return static::latest()->take(3)->get();
    }

    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class, "blog_category_id", "id");
    }

    public function scopeWithRelations($query){
        return $query->with(["blogCategory:id,category_name"]);
    }

    static public function getRelatedBlogs($category_id, $id){
        return static::withRelations()->where("blog_category_id", $category_id)->where("id", "!=", $id)->get();
    }

    static public function getBlogsExceptFeatured(){
        return static::withRelations()->where("is_featured", false)->get()->groupBy("blogCategory.category_name");
    }

    static public function getFeaturedBlog(){
        return static::withRelations()->where("is_featured", true)->first();
    }

    static public function getBlogs(){
        return static::withRelations()->get();
    }


    static public function getSortedBlogs($id){
        return static::withRelations()->where("blog_category_id", $id)->get();
    }

    static public function getTags(){
        return static::pluck("tags")
            ->map(function($tag) {
                return explode(",", $tag);
            })
            ->unique()
            ->flatten();
    }

}
