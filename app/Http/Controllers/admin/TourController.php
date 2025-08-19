<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tour\CreateRequest;
use App\Http\Requests\Admin\Tour\EditTourRequest;
use App\Models\Category;
use App\Models\Language;
use App\Models\Region;
use App\Models\ToursNew;
use App\Services\TempImageService;
use App\Services\TourService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TourController extends Controller
{
    protected $tourService;
    public function __construct(TourService $tourService)
    {
        $this->tourService = $tourService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = ToursNew::getAllTours();
        return view("admin.tour_list", compact("tours"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $languages = Language::getAllLanguages();
        $regions = Region::getAllRegions();
        $categories = Category::getAllCategories();
        return view("admin.tour_create", compact("languages", "regions", "categories"));
    }


    public function store(CreateRequest $request){
        try {
            $this->tourService->createTour($request);
            return redirect()->route("tour_list");
        
        } catch (\Exception $e) {
            // バリデーション失敗時に画像を一時保存
            $tempImageService = new TempImageService($request);
            $tempImageService->handleTempHeroImage($request);
            $tempImageService->handleTempItineraryImages($request);
            $tempImageService->handleTempGalleryImages($request);

            Log::error('failed to create a tour', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ]);
        
            return redirect()->back()
                ->with("error", "failed to create Tours. Please try it again " . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $tour = ToursNew::getSpecificTour($id);
            return view("show", compact("tour"));
        } catch (\Exception $e) {
            Log::debug($e);
            // return redirect()->route("show")->with("error", "faild to get Tour: " . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $tour = ToursNew::getSpecificTour($id)->toArray();
            $regions = Region::getAllRegions();
            $languages = Language::getAllLanguages();
            $categories = Category::getAllCategories();
 
            return view("admin.tour_edit", compact("tour",  "regions", "categories", "languages"));
        } catch (\Exception $e) {
            return redirect()->route("tour_list")->with("error", "faild to get Tour: " . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditTourRequest $request, string $id)
    {
        try {
            $this->tourService->updateTour($request, $id);
            return redirect()->route("tour_list")->with("success", "success to update Tour");
        } catch (\Exception $e) {
            Log::debug($e);
            return redirect()->back()->with("error", "faild to update Tour: " . $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->tourService->deleteTour($id);
            return redirect()->route("tour_list")->with("success", "success to delete Tour!");
        } catch (\Exception $e) {
            return redirect()->route("tour_list")->with("error", "faild to delere Tour: " . $e->getMessage());
        }
    }
}
