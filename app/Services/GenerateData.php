<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class GenerateData
{
    // gallery imageで削除以外のデータを抽出
    public static function generateCurrentImageGalleries($validated){
        return collect($validated["current_gallery_images"])
        ->reject(function ($gallery_image) use ($validated) {
            return isset($validated["remove_gallery"]) && in_array($gallery_image, $validated["remove_gallery"]);
        })
        ->all(); // 配列に戻す場合
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
        if($request->file('new_gallery_images')){
            $newGalleryPaths = GenerateData::formatGalleryImages($request->file('new_gallery_images'));
        }
        array_push($newGalleryPaths, ...$current_image_galleries);

        return $newGalleryPaths;
    }
}
