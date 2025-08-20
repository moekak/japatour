<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    static public function getAllRegions(){
        return Region::all();
    }
}
