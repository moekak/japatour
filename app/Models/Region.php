<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    static public function getAllRigions(){
        return Region::all();
    }
}
