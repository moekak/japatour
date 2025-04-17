<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class ImageService
{
      public static function saveImage($imageFile, $folder){
            try {
                  // 引数で渡されたファイルオブジェクトを使用
                  $path = $imageFile->store($folder, 'public');
                  
                  // S3に画像を保存する処理があればここに記述
                  
                  return $path;
            } catch (\Exception $e) {
            Log::error('Image save error: ' . $e->getMessage());
            return ['error' => 'Failed to save image'];
            }
      }
      
}
