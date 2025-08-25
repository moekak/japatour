<?php

namespace App\Services;


use App\Http\Requests\Admin\Tour\CreateRequest;
use App\Http\Requests\Admin\Tour\EditTourRequest;
use App\Models\Itinerary;
use App\Models\Tour;
use App\Services\Repository\QaRepository;
use App\Services\Repository\TourRepository;
use App\Services\Util\GenerateData;
use App\Services\Util\ImageService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TourService
{
    protected $tourRepository;
    protected $qaRepository;
    protected $imageService;
    protected $generateData;

    public function __construct(TourRepository $tourRepository,  QaRepository $qaRepository,ImageService $imageService, GenerateData $generateData)
    {
        $this->tourRepository = $tourRepository;
        $this->qaRepository = $qaRepository;
        $this->imageService = $imageService;
        $this->generateData = $generateData;
    }

    /**
     * 全てのツアーを取得
     */
    public function getAllData()
    {
        return $this->tourRepository->getAll();
    }

    /**
     * ID指定でツアーを取得
     */
    public function getTourById(string $id)
    {
    
        $tour = $this->tourRepository->findById($id);
        $tourReview = $tour->reviews;
        $tourReviewRate = 0;
        foreach($tourReview as $reveiw){
            $tourReviewRate += intval($reveiw["rate"]);
        }

        $averageRate = $tourReviewRate / count($tourReview);
        return ["tour" => $tour, "averageRate" => $averageRate ];
    }

    /**
     * ツアーを新規作成
     */
    public function createTour(CreateRequest $request)
    {
        try{
            DB::beginTransaction();
            $tourData = $this->generateData->prepareTourData($request);

            // ツアー作成
            $tour = Tour::create($tourData);

            // Tour highlightsの保存
            $itineraryHighlightData = $this->generateData->prepareTourHighlight($request, $tour->id);
            DB::table("tour_highlights")->insert($itineraryHighlightData);

            // Tour reviewsの保存
            $reviewData = $this->generateData->prepareTourReview($request, $tour->id);
            DB::table("tour_reviews")->insert($reviewData);

            // Tour QAの保存
            $qaData = $this->generateData->prepareTourQA($request, $tour->id);
            DB::table("tour_questions")->insert($qaData);

            // Tour Gallery Imageの保存
            $tourGalleryImages = $this->generateData->prepareTourGalleryImage($request, $tour->id);
            // print_r($tourGalleryImages);
            // exit;
            DB::table("tour_gallery_images")->insert($tourGalleryImages);

            $itineraryData = $this->generateData->prepareItineraryData($request, $tour->id);
            foreach($itineraryData as $key => $data){
                $itinerary = Itinerary::create($data);
                // Itinerary Activityの保存
                $itineraryActivityData = $this->generateData->prepareItineraryActivity($request, $itinerary->id, $key);
                DB::table("itinerary_activities")->insert($itineraryActivityData);

                // Itinerary Highlightの保存
                $itineraryHighlightData = $this->generateData->prepareItineraryHighlight($request, $itinerary->id, $key);
                DB::table("itinerary_highlights")->insert($itineraryHighlightData);

                // Itinerary Languageの保存
                $itineraryLanguages = $this->generateData->prepareItineraryLanguage($request, $itinerary->id, $key);
                DB::table("itinerary_languages")->insert($itineraryLanguages);
            }
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            throw $e;
        }
    }
    
    

    /**
     * ツアーを更新
     */
    public function updateTour(EditTourRequest $request)
    {
        try{
            DB::beginTransaction();
            // 元のデータを削除する
            Tour::find($request->input("tour_id"))->delete();
            $tourData = $this->generateData->prepareTourData($request);
            // ツアー作成
            $tour = Tour::create($tourData);

            // Tour highlightsの保存
            $itineraryHighlightData = $this->generateData->prepareTourHighlight($request, $tour->id);
            DB::table("tour_highlights")->insert($itineraryHighlightData);

            // Tour reviewsの保存
            $reviewData = $this->generateData->prepareTourReview($request, $tour->id);
            DB::table("tour_reviews")->insert($reviewData);

            // Tour QAの保存
            $qaData = $this->generateData->prepareTourQA($request, $tour->id);
            DB::table("tour_questions")->insert($qaData);

            // Tour Gallery Imageの保存
            $tourGalleryImages = $this->generateData->prepareTourGalleryImage($request, $tour->id);
            DB::table("tour_gallery_images")->insert($tourGalleryImages);

            $itineraryData = $this->generateData->prepareItineraryData($request, $tour->id);

            foreach($itineraryData as $key => $data){
                $itinerary = Itinerary::create($data);
                // Itinerary Activityの保存
                $itineraryActivityData = $this->generateData->prepareItineraryActivity($request, $itinerary->id, $key);
                DB::table("itinerary_activities")->insert($itineraryActivityData);

                // Itinerary Highlightの保存
                $itineraryHighlightData = $this->generateData->prepareItineraryHighlight($request, $itinerary->id, $key);
                DB::table("itinerary_highlights")->insert($itineraryHighlightData);

                // Itinerary Languageの保存
                $itineraryLanguages = $this->generateData->prepareItineraryLanguage($request, $itinerary->id, $key);
                DB::table("itinerary_languages")->insert($itineraryLanguages);
            }
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            throw $e;
        }
    }

    /**
     * ツアーを削除
     */
    public function deleteTour(string $id)
    {
        DB::beginTransaction();
        try {
            $this->tourRepository->delete($id);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

}
