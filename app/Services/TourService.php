<?php

namespace App\Services;

use App\Http\Requests\Admin\CreateTourRequest;
use App\Http\Requests\Admin\EditTourRequest;
use App\Models\Review;
use App\Services\Repository\AdditionalServiceRepository;
use App\Services\Repository\QaRepository;
use App\Services\Repository\ReviewRepository;
use App\Services\Repository\TourRepository;
use App\Services\Util\GenerateData;
use App\Services\Util\ImageService;
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
    public function createTour(CreateTourRequest $request)
    {
        $tourData = $this->generateData->prepareTourData($request);
        
        // ギャラリー画像の処理
        $tourData["gallery_images"] = json_encode(
            GenerateData::formatGalleryImages($request->file('gallery_images'))
        );
        
        // ヒーロー画像の処理
        $tourData["hero_image"] = $this->imageService->saveImage(
            $request->file('hero_image'), 
            "hero_image"
        );

        DB::beginTransaction();
        try {
            $tour = $this->tourRepository->create($tourData);
            $reviewData = $this->generateData->prepareReviewData($request, intval($tour["id"]));
            $qaData = $this->generateData->prepareQAData($request, intval($tour["id"]));
            $additionalServiceData = $this->generateData->prepareAdditionalServiceData($request);

            foreach($qaData as $qa) {
                $this->qaRepository->create($qa);; // 各qaを個別に作成
            }
            foreach($reviewData as $review) {
                $this->reviewRepository->create($review);; // 各レビューを個別に作成
            }
            foreach($additionalServiceData as $service) {
                $this->additionalServiceRepository->create($service);; // 各レビューを個別に作成
            }
            DB::commit();
        } catch (\Exception $e) {
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

        DB::beginTransaction();
        try {

            $this->tourRepository->update($id, $tourData);
            $this->reviewRepository->deleteWhere($tour["id"]);
            foreach($reviewData as $review){
                // print_r($review);
                // exit;
                $this->reviewRepository->create($review);
            }
            
            $this->qaRepository->deleteWhere($tour["id"]);
            foreach($qaData as $qa){
                $this->qaRepository->create($qa);
            }
            
            $this->additionalServiceRepository->deleteWhere();
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
