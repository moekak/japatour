<?php

namespace App\Services\Tour;

use App\Http\Requests\Admin\CreateTourRequest;
use App\Http\Requests\Admin\EditTourRequest;
use App\Services\GenerateData;
use App\Services\ImageService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TourService
{
    protected $tourRepository;
    protected $imageService;

    public function __construct(TourRepository $tourRepository, ImageService $imageService)
    {
        $this->tourRepository = $tourRepository;
        $this->imageService = $imageService;
    }

    /**
     * 全てのツアーを取得
     */
    public function getAllTours()
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
        $tourData = $this->prepareTourData($request);
        
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
            $this->tourRepository->create($tourData);
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
        $tourData = $this->prepareTourData($request);
        
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

    /**
     * ツアーデータの共通準備処理
     */
    private function prepareTourData($request)
    {
        $data = $request->validated();
        
        // JSON変換が必要なフィールド
        $jsonFields = ['highlights', 'itinerary', 'inclusions', 'exclusions'];
        
        foreach ($jsonFields as $field) {
            $data[$field] = json_encode($data[$field]);
        }
        
        return $data;
    }
}
