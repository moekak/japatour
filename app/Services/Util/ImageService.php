<?php

namespace App\Services\Util;

use Illuminate\Support\Facades\Log;

class ImageService
{
      public static function saveImage($imageFile, $folder){
            try {
                  // 引数で渡されたファイルオブジェクトを使用
                  $path = $imageFile->store($folder, 'public');
            
                  return $path;
            } catch (\Exception $e) {
                  Log::error('Image save error: ' . $e->getMessage());
                  return ['error' => 'Failed to save image'];
            }
      }
      
}
