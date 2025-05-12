<?php

namespace App\Services\Util;

class GenerateData
{
    public $imageService;

    public function __construct()
    {
        $this->imageService = new ImageService;
    }
    // gallery imageで削除以外のデータを抽出
    public static function generateCurrentImageGalleries($validated){
        if(isset($validated["current_gallery_images"])){
            return collect($validated["current_gallery_images"])
            ->reject(function ($gallery_image) use ($validated) {
                return isset($validated["remove_gallery"]) && in_array($gallery_image, $validated["remove_gallery"]);
            })
            ->all(); // 配列に戻す場合
        }

        return [];
        
    }

    //複数のギャラリー画像を処理
    public static function formatGalleryImages($images){
        $galleryPaths = [];
        foreach ($images as $image) {
            $path = ImageService::saveImage($image, "gallery_images");
            $galleryPaths[] = $path;
        }
        return $galleryPaths;
    }

    // 新しく追加されたギャラリー画像と既存の画像を一つにまとめる処理
    public static function generateNewGalleryImagesPath($request, $current_image_galleries){
        $newGalleryPaths = [];
        if($request->file('gallery_images')){
            $newGalleryPaths = GenerateData::formatGalleryImages($request->file('gallery_images'));
        }
        array_push($newGalleryPaths, ...$current_image_galleries);

        return $newGalleryPaths;
    }

    
    /**
     * ツアーデータの共通準備処理
     */
    public function prepareTourData($request)
    {

        $data = $request->validated();

        foreach($data["itinerary"] as $key => $itinerary){
            if(isset($itinerary["itinerary_image"])){
                $data["itinerary"][$key]["itinerary_image"] = $this->imageService->saveImage($itinerary["itinerary_image"], "itinerary_image");
            }
            
        }

        // JSON変換が必要なフィールド
        $jsonFields = ['highlights', 'itinerary', 'inclusions', 'exclusions'];
        
        foreach ($jsonFields as $field) {
            $data[$field] = json_encode($data[$field]);
        }

        return $data;
    }

    /**
     * レビューの共通準備処理
     */
    public function prepareReviewData($request,$tourId)
    {

        $data = $request->validated();
        $insertingReviewData = [];
        foreach($data["review"] as $key => $review){
            $insertingReviewData[$key] = [
                "name" => $review["name"],
                "rate" => $review["rate"],
                "review" => $review["review"],
                "review_date" => $review["date"],
                "tour_id" => $tourId
            ];
        }

        return $insertingReviewData;
    }

    /**
     * QAーの共通準備処理
     */
    public function prepareQAData($request,$tourId)
    {

        $data = $request->validated();
        $insertingReviewData = [];
        foreach($data["qa"] as $key => $qa){
            $insertingReviewData[$key] = [
                "question" => $qa["question"],
                "answer" => $qa["answer"],
                "tour_id" => $tourId
            ];
        }

        return $insertingReviewData;
    }

    /**
     * 追加サービスの共通準備処理
     */
    public function prepareAdditionalServiceData($request)
    {

        $data = $request->validated();
        $insertingAdditionalServiceData = [];
        foreach($data["services"] as $key => $service){
            $insertingReviewData[$key] = [
                "price" => $service["price"],
                "service" => $service["service"],
            ];
        }

        print_r($insertingAdditionalServiceData);
        exit;
        return $insertingAdditionalServiceData;
    }


}
