<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Region;
use App\Models\Tour;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(){
        $tours = Tour::getTourInfo();
        $categories = Category::getCateforiesDataWithRegion();
        $regions = Region::getAllRigions();
        return view("index2", compact("tours", "categories", "regions"));
    }
}
