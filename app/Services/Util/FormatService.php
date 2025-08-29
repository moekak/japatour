<?php

namespace App\Services\Util;


class FormatService
{

      public function __construct()
      {
                  
      }

      public static function generateStar($average){
            $star = "";
            $int = intval($average);
            for($i = 0; $i < $int; $i ++){
                  $star .= '<i class="fas fa-star text-yellow-400"></i>';
            }
            return $star;
      }



}
