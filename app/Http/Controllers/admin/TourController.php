<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateTourRequest;
use App\Http\Requests\Admin\EditTourRequest;
use App\Models\Tour;
use App\Services\GenerateData;
use App\Services\ImageService;
use App\Services\Tour\TourService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TourController extends Controller{
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
        $tours = $this->tourService->getAllTours();
        return view("admin.tour_list", compact("tours"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.tour_create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTourRequest $request){
        try {
            $this->tourService->createTour($request);
            return redirect()->route("tour_list")->with("success", "success to create Tours!");  ;
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "failed to create tours: " . $e->getMessage())->withInput();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $tour = $this->tourService->getTourById($id);
            return view("show", compact("tour"));
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
            $tour = $this->tourService->getTourById($id);
            return view("admin.tour_edit", compact("tour"));
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
