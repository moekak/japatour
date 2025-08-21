<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [
        "category_name",
        "category_description",
        "category_icon"
    ];

    public function blogs(){
        return $this->hasMany(Blog::class, "blog_category_id", "id");
    }

    static public function getCategories(){
        return static::with(["blogs"])->get();
    }

}
