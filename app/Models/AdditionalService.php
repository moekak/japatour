<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdditionalService extends Model
{
    protected $fillable = [
        "price",
        "service"
    ];

    public function getSpecificData($id){
        return AdditionalService::where("id", $id)->first();
    }

    public static function getServices(){
        return AdditionalService::all();
    }
}
