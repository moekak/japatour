<?php

namespace App\Services\Util;

use Carbon\Carbon;
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
                if(isset($data[$field])){
                    if($request->hasFile($field)){
                        $tours[$field] = $this->imageService->saveImage($data[$field], $field);
                    }else{
                        $tours[$field] = $data[$field];
                    }
                    
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
            if (isset($data["gallery_image"][$i])) {
                // echo "22222";
                $imageData = [
                    'gallery_image' => $request->hasFile("gallery_image.$i") ? $this->imageService->saveImage($data["gallery_image"][$i], "gallery_image") : $data["gallery_image"][$i],
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
        $itineraryField = ["duration", "max_participants", "tour_type", "meeting_point", "adult_price", "child_price", "image", "overview_title", "overview_description"];


        foreach($data["itinerary"] as $key => $itinerary){
            foreach($itineraryField as $field){
                if($field === "image"){
                    if(isset($itinerary["image"])){
                        $itineraries[$key][$field] = $request->hasFile("itinerary.{$key}.image") ? $this->imageService->saveImage($itinerary[$field], $field) : $itinerary["image"];
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
        $itineraryActivityField = ["activity_title", "activity_description", "activity_icon"];

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

    public function prepareTourReview($request, $tour_id){
        $data = $request->validated();
        $tourReviews = [];
        $tourReviewtField = ["name", "content", "rating", "date"];

        foreach($data["reviews"] as $key => $itinerary){
            foreach($tourReviewtField as $field){
                $tourReviews[$key][$field] = $itinerary[$field];
                $tourReviews[$key]["tour_id"] = $tour_id;  
            }
            
        }

        return $tourReviews;
    }

    public function prepareTourQA($request, $tour_id){
        $data = $request->validated();
        $tourQuestions = [];
        $tourQuestionField = ["question", "answer"];

        foreach($data["questions"] as $key => $itinerary){
            foreach($tourQuestionField as $field){
                $tourQuestions[$key][$field] = $itinerary[$field];
                $tourQuestions[$key]["tour_id"] = $tour_id;  
            }
            
        }

        return $tourQuestions;
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


    public function prepareCustomerData($data){
        return [
            "first_name" => $data["first_name"],
            "first_name" => $data["last_name"],
            "phone_number" => $data["phone_number"],
            "email" => $data["email"],
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ];
    }

    public function prepareBookingData($data, $customer_id){
        return [
            "itinerary_id" => (int) $data["itinerary_id"],
            "customer_id" => (int) $customer_id,
            "children_number" =>(int) $data["children_number"],
            "children_price" => (int) $data["children_price"],
            "adult_number" => (int) $data["adult_number"],
            "adult_price" => (int) $data["adult_price"],
            "request" => $data["request"],
            "tour_date" => Carbon::parse($data["tour_date"])->format('Y-m-d'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ];
    }

}
