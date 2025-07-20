<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view("blog.blog");
    }

    public function show(){
        return view("blog.blog2");
    }

    public function create(){
        return view("blog.blog_create");
    }

}
