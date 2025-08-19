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
}
