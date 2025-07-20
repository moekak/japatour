<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    static public function getAllLanguages(){
        return static::all();
    }
}
