<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\CreateBlogRequest;
use App\Http\Requests\Admin\Blog\EditBlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class BlogController extends Controller
{
    public function index()
    {
        $categorizedBlogs = Blog::getBlogsExceptFeatured();
        $featuredBlog = Blog::getFeaturedBlog();
        $categories = BlogCategory::getCategories();

        return view("blog.blog", compact("categorizedBlogs", "featuredBlog", "categories"));
    }

    public function all(string $category){
        $blogs = Blog::getBlogs();
        $categories = BlogCategory::getCategories();
        $tags = Blog::getTags();
        
        return view("blog.blog_all", compact("blogs", "categories", "tags"));
    }


    public function show($id){
        $blog = Blog::where("id", $id)->first();
        $relatedBlogs = Blog::getRelatedBlogs($blog->blog_category_id, $blog->id);
        return view("blog.blog_show", compact("blog", "relatedBlogs"));
    }


    public function list(){
        $blogs = Blog::getBlogs();
        return view("blog.blog_list", compact("blogs"));
    }

    public function create(Request $request){
        $categories = BlogCategory::all();
        return view("blog.blog_create", compact("categories"));
    }

    public function edit(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        return view("blog.blog_edit", compact("blog", "categories"));
    }

    public function store(CreateBlogRequest $request){
        $validated = $request->validated();

        if (isset($validated['is_featured']) && $validated['is_featured']) {
            Blog::where('is_featured', true)
                ->update(['is_featured' => false]);
        }

        $imagePath = null;
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('blog-images', 'public');
        }

        $validated["featured_image"] = $imagePath;
        Blog::create($validated);
        return response()->json([
            'status'  => 'ok',
        ], 200);
    }

    public function update(EditBlogRequest $request,Blog $blog){
        DB::transaction(function() use($blog, $request){
            $data = $request->validated();
            Log::debug($data);
            $blog->fill($data);

            if (isset($data['is_featured']) && $data['is_featured']) {
                Blog::where('id', '!=', $blog->id)
                    ->where('is_featured', true)
                    ->update(['is_featured' => false]);
            }


            if ($request->hasFile('featured_image')) {
                $imagePath = $request->file('featured_image')->store('blog-images', 'public');
                $blog->featured_image = $imagePath;
            }

            if ($blog->isDirty()) {
                $blog->save();
            }

        });

        return response()->json([
            'status'  => 'ok',
        ], 200);
    }

    public function destroy($id){
        $blog =Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.list');
    }


}
