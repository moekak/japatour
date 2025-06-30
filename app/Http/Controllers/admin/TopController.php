<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Region;
use App\Models\Tour;
use App\Models\ToursNew;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $tours =ToursNew::getAllTours();
        // print_r($tours->toArray());
        // exit;
        // $tours = Tour::getTourInfo();
        $categories = Category::getCateforiesDataWithRegion();
        $regions = Region::getAllRigions();
        return view("index2", compact("tours", "categories", "regions"));
    }
}
