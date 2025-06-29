<?php

namespace App\Services\Util;

use Illuminate\Support\Facades\Log;

class GenerateData
{
    public $imageService;

    public function __construct()
    {
        $this->imageService = new ImageService;
    }
    // gallery imageで削除以外のデータを抽出
    public static function generateCurrentImageGalleries($all){
        if(isset($all["current_gallery_images"])){
            return collect($all["current_gallery_images"])
            ->reject(function ($gallery_image) use ($all) {
                return isset($all["remove_gallery"]) && in_array($gallery_image, $all["remove_gallery"]);
            })
            ->validated(); // 配列に戻す場合
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
        $tours = [];
        $tourFiled = ["title", "subtitle", "badge","category_id", "region_id", "overview_title", "overview_description", "hero_image"];
        foreach($tourFiled as $field){
            if($field === "hero_image"){
                if(isset($data[$field]) && $request->hasFile($field)){
                    $tours[$field] = $this->imageService->saveImage($data[$field], $field);
                }else{
                    $tours[$field] = $data["temp_hero_image"];
                }
                
            }elseif(isset($data[$field])){
                $tours[$field] = $data[$field];
            }
            
        }

        return $tours;
    }


    public function prepareTourGalleryImage($request, $tour_id){

        $data = $request->validated();
        $galleryImages = [];

        // 最大6枚まで処理
        for ($i = 0; $i < 6; $i++) {
            $imageData = null;
            
            // 新しい画像ファイルがアップロードされた場合
            if (isset($data["gallery_image"][$i]) && $request->hasFile($data["gallery_image"][$i])) {
                $imageData = [
                    'gallery_image' => $this->imageService->saveImage($request->file($data["gallery_image"][$i]), "gallery_image"),
                    'tour_id' => $tour_id,
                    'order' => $i,
                ];
            }
            // 一時的な画像データがある場合
            elseif (isset($data["temp_gallery_image"][$i]) && !empty($data["temp_gallery_image"][$i])) {
                $imageData = [
                    'gallery_image' => $data["temp_gallery_image"][$i],
                    'tour_id' => $tour_id,
                    'order' => $i,
                ];
            }
            
            // 画像データがある場合のみ配列に追加
            if ($imageData !== null) {
                $galleryImages[] = $imageData; // インデックスではなく、順番に追加
            }
        }
        
        return $galleryImages;
    }


    public function prepareItineraryData($request, $tour_id){
        $data = $request->validated();
        $itineraries = [];
        $itineraryField = ["duration", "max_participants", "tour_type", "meeting_point", "adult_price", "child_price", "image"];


        foreach($data["itinerary"] as $key => $itinerary){
        // print_r($itinerary);
        // exit;
            foreach($itineraryField as $field){
                if($field === "image"){
                    if($request->hasFile("itinerary.{$key}.image")){
                        $itineraries[$key][$field] = $this->imageService->saveImage($itinerary[$field], $field);
                    }elseif(isset($itinerary["temp_itinerary_image"])){
                        $itineraries[$key][$field] = $itinerary["temp_itinerary_image"];
                    }else{
                    }
                }else{
                    $itineraries[$key][$field] = $itinerary[$field];
                }
                
                $itineraries[$key]["tour_id"] = $tour_id;  
            }
            
        }

        return $itineraries;
    }
    public function prepareItineraryActivity($request, $itinerary_id, $key){
        $data = $request->validated();
        $itineraryActivities = [];
        $itineraryActivityField = ["activity_title", "activity_description"];

        foreach($data["itinerary"][$key]["activity"] as $key => $activity){
            foreach($itineraryActivityField as $field){
                $itineraryActivities[$key][$field] = $activity[$field];
                $itineraryActivities[$key]["itinerary_id"] = $itinerary_id;  
            }
            
        }

        return $itineraryActivities;
    }

    public function prepareItineraryHighlight($request, $itinerary_id,$key){
        $data = $request->validated();
        $itineraryHighlights = [];
        $itineraryHighlightField = ["itinerary_highlight"];

        foreach($data["itinerary"][$key]["itinerary_highlight"] as $key => $highlight){
            foreach($itineraryHighlightField as $field){
                $itineraryHighlights[$key][$field] = $highlight;
                $itineraryHighlights[$key]["itinerary_id"] = $itinerary_id;  
            }
            
        }

        return $itineraryHighlights;
    }

    public function prepareItineraryLanguage($request, $itinerary_id, $key){
        $data = $request->validated();
        $itineraryLanguages = [];
        $itineraryLanguageField = ["language_id"];

        foreach($data["itinerary"][$key]["languages"] as $key => $language){
            foreach($itineraryLanguageField as $field){
                $itineraryLanguages[$key][$field] = $language;
                $itineraryLanguages[$key]["itinerary_id"] = $itinerary_id;  
            }
            
        }

        return $itineraryLanguages;
    }

    public function prepareTourHighlight($request, $tour_id){
        $data = $request->validated();
        $tourHighlights = [];
        $tourHighlightField = ["title", "description"];

        foreach($data["highlights"] as $key => $itinerary){
            foreach($tourHighlightField as $field){
                $tourHighlights[$key][$field] = $itinerary[$field];
                $tourHighlights[$key]["tour_id"] = $tour_id;  
            }
            
        }

        return $tourHighlights;
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
            // バリデーション済みデータの構造を確認
    
        $insertingQAData = [];
        foreach($data["qa"] as $key => $qa){
            $insertingQAData[$key] = [
                "question" => $qa["question"],
                "answer" => $qa["answer"],
                "tour_id" => $tourId
            ];
        }

        return $insertingQAData;
    }

    /**
     * 追加サービスの共通準備処理
     */
    public function prepareAdditionalServiceData($request)
    {

        $data = $request->validated();
        // print_r($data["services"]);
        $insertingAdditionalServiceData = [];
        foreach($data["services"] as $key => $service){
            $insertingAdditionalServiceData[$key] = [
                "price" => $service["price"],
                "service" => $service["service"],
            ];
        }

        return $insertingAdditionalServiceData;
    }


}
