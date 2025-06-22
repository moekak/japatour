<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateTourRequest;
use App\Http\Requests\Admin\EditTourRequest;
use App\Models\AdditionalService;
use App\Models\Category;
use App\Models\Region;
use App\Services\TourService;
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
        $tours = $this->tourService->getAllData();
        return view("admin.tour_list", compact("tours"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::getAllCategories();
        $regions = Region::getAllRigions();
        $services = AdditionalService::getServices();
        return view("admin.tour_create2", compact("services",  "categories", "regions"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTourRequest $request)
    {
        try {
            $this->tourService->createTour($request);
            return redirect()->route("tour_list")->with("success", "success to create Tours!");;
        } catch (\Exception $e) {
            Log::debug($e);
            return redirect()->back()->with("error", "failed to create tours: " . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $tourData = $this->tourService->getTourById($id);
            $tour = $tourData["tour"];
            $averageRate = $tourData["averageRate"];
            return view("show2", compact("tour", "averageRate"));
        } catch (\Exception $e) {
            return redirect()->route("tour_list")->with("error", "faild to get Tour: " . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $tourData = $this->tourService->getTourById($id);
            $services = AdditionalService::getServices();
            $categories = Category::getAllCategories();
            $regions = Region::getAllRigions();
            $tour = $tourData["tour"];
            return view("admin.tour_edit", compact("tour", "services", "regions", "categories"));
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
