<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(){
        $tours = Tour::getTourInfo();
        return view("index", compact("tours"));
    }
}
