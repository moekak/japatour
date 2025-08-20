<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\CreateBlogRequest;
use App\Http\Requests\Admin\Blog\EditBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        return view("blog.blog", compact("blogs"));
    }

    public function show($id){
        $blog = Blog::where("id", $id)->first();
        $relatedBlogs = Blog::getRelatedBlogs($blog->category);
        return view("blog.blog_show", compact("blog", "relatedBlogs"));
    }

    public function list(){
        $blogs = Blog::get();
        return view("blog.blog_list", compact("blogs"));
    }

    public function create(Request $request){
        return view("blog.blog_create");
    }

    public function edit(Request $request, $id){
        $blog = Blog::findOrFail($id);
        return view("blog.blog_edit", compact("blog"));
    }

    public function store(CreateBlogRequest $request){
        $validated = $request->validated();

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
        $data = $request->validated();
        $blog->fill($data);

        // 画像がアップロードされたときだけ保存
        if ($request->hasFile('cover')) {
            // 既存を削除（任意）
            if ($request->hasFile('featured_image')) {
                $imagePath = $request->file('featured_image')->store('blog-images', 'public');
                $blog->featured_image = $imagePath; 
            }

            // 保存先：public ディスク（`php artisan storage:link` 済を想定）
            $path = $request->file('cover')->store('blogs/covers', 'public');
            $blog->cover_path = $path; // DBのカラム名は適宜
        }

        if ($blog->isDirty()) {
            $blog->save();
        }


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
