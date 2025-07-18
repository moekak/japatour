<?php

namespace App\Services;


use App\Http\Requests\Admin\Tour\CreateRequest;
use App\Http\Requests\Admin\Tour\EditTourRequest;
use App\Models\Itinerary;
use App\Models\ToursNew;
use App\Services\Repository\AdditionalServiceRepository;
use App\Services\Repository\QaRepository;
use App\Services\Repository\ReviewRepository;
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
    protected $reviewRepository;
    protected $additionalServiceRepository;
    protected $qaRepository;
    protected $imageService;
    protected $generateData;

    public function __construct(TourRepository $tourRepository, ReviewRepository $reviewRepository, QaRepository $qaRepository, AdditionalServiceRepository $additionalServiceRepository,ImageService $imageService, GenerateData $generateData)
    {
        $this->tourRepository = $tourRepository;
        $this->reviewRepository = $reviewRepository;
        $this->qaRepository = $qaRepository;
        $this->imageService = $imageService;
        $this->generateData = $generateData;
        $this->additionalServiceRepository = $additionalServiceRepository;
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
            $tour = ToursNew::create($tourData);

            // Tour highlightsの保存
            $itineraryHighlightData = $this->generateData->prepareTourHighlight($request, $tour->id);
            DB::table("tour_highlights")->insert($itineraryHighlightData);

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
    public function updateTour(EditTourRequest $request, string $id)
    {
        $tourData = $this->generateData->prepareTourData($request);
        $tour = $this->tourRepository->findById($id);

        $reviewData = $this->generateData->prepareReviewData($request, $tour["id"]);// review更新のデータ
        $qaData = $this->generateData->prepareQAData($request, $tour["id"]);// QA更新のデータ
        $additionalServiceData = $this->generateData->prepareAdditionalServiceData($request);
        // 既存のギャラリー画像を取得
        $currentGalleryImages = GenerateData::generateCurrentImageGalleries($tourData);
        
        // 新規と既存のギャラリー画像を結合
        $tourData["gallery_images"] = GenerateData::generateNewGalleryImagesPath(
            $request, 
            $currentGalleryImages
        );
        
        // ヒーロー画像の更新処理
        if ($request->file('hero_image')) {
            $tourData["hero_image"] = $this->imageService->saveImage(
                $request->file('hero_image'), 
                "hero_image"
            );
        } else {
            $tourData["hero_image"] = $tour->hero_image;
        }

        // itinerary画像の更新処理
        $itineraries = $request->input("itinerary"); 
        if ($itineraries) {
            foreach ($itineraries as $index => $itineraryData) {
                $fileKey = "itinerary.{$index}.itinerary_image";
                if ($request->hasFile($fileKey)) {

                    // 新しい画像がある場合、更新
                    $imageFile = $request->file($fileKey);
                    json_decode($tourData["itinerary"], true)[$index]["itinerary_image"] = $this->imageService->saveImage(
                        $imageFile, 
                        "itinerary_image"
                    );
                } elseif (isset($tour->itinerary[$index]["itinerary_image"])) {
                    // 新しい画像がなく、既存の画像がある場合、既存の画像を保持
                    $itineraryData = json_decode($tourData["itinerary"], true); // true を追加して配列として取得
                    $itineraryData[$index]["itinerary_image"] = $tour->itinerary[$index]["itinerary_image"];
                    $tourData["itinerary"] = json_encode($itineraryData); // 再度JSONに変換して戻す
                }
            }
        }

        try {

            DB::beginTransaction();
            $this->tourRepository->update($id, $tourData);
            $this->reviewRepository->deleteWhere($tour["id"]);
            foreach($reviewData as $review){
                $this->reviewRepository->create($review);
            }
            
            $this->qaRepository->deleteWhere($tour["id"]);
            foreach($qaData as $qa){
                $this->qaRepository->create($qa);
            }
            
            $this->additionalServiceRepository->deleteAll();
            foreach($additionalServiceData as $service){
                $this->additionalServiceRepository->create($service);
            }
            
            DB::commit();
        } catch (\Exception $e) {
            Log::debug($e);
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
