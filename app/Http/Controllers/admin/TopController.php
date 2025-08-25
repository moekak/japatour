<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Region;
use App\Models\Tour;
use App\Models\Tour;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $tours =Tour::getAllToursByCategory();
        $categories = Category::getCateforiesDataWithRegion();
        $regions = Region::getAllRegions();
        $blogs = Blog::getlatesetBlogs();

        // print_r($tours);
        // exit;
        return view("index", compact("tours", "categories", "regions", "blogs"));
    }
}
