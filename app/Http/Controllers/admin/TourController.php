<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateTourRequest;
use App\Models\Tour;
use App\Services\ImageService;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::getAllTours();
        // print_r($tours);
        return view("admin.tour_list", ["tours" => $tours]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTourRequest $request)
    {


        $validated = $request->validated();

        $validated["highlights"] = json_encode($validated["highlights"]);
        $validated["itinerary"] = json_encode($validated["itinerary"]);
        $validated["inclusions"] = json_encode($validated["inclusions"]);
        $validated["exclusions"] = json_encode($validated["exclusions"]);
        // 複数のギャラリー画像を処理
        $galleryPaths = [];
        foreach ($request->file('gallery_images') as $image) {
            $path = ImageService::saveImage($image, "gallery_images");
            $galleryPaths[] = $path;
        }

        // パスの配列をJSONとして保存
        $validated["gallery_images"] = json_encode($galleryPaths);

        $validated["hero_image"] = ImageService::saveImage($request->file('hero_image'), "hero_image");
        Tour::create($validated);

        return redirect()->route("tour_list")->with("success", "success to create Tours!");  
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
