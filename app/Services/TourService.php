<?php

namespace App\Services;

use App\Http\Requests\Admin\CreateTourRequest;
use App\Http\Requests\Admin\EditTourRequest;
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
    protected $qaRepository;
    protected $imageService;
    protected $generateData;

    public function __construct(TourRepository $tourRepository, ReviewRepository $reviewRepository, QaRepository $qaRepository, ImageService $imageService, GenerateData $generateData)
    {
        $this->tourRepository = $tourRepository;
        $this->reviewRepository = $reviewRepository;
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
        return $this->tourRepository->findById($id);
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
            $reviewData = $this->generateData->prepareReviewData($request, $tour["id"]);
            $qaData = $this->generateData->prepareQAData($request, $tour["id"]);

            foreach($qaData as $qa) {
                $this->qaRepository->create($qa);; // 各qaを個別に作成
            }
            foreach($reviewData as $review) {
                $this->reviewRepository->create($review);; // 各レビューを個別に作成
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

        DB::beginTransaction();
        try {
            $this->tourRepository->update($id, $tourData);
            DB::commit();
        } catch (\Exception $e) {
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
