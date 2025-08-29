<?php

namespace App\Services\Util;


class FormatService
{


      public static function generateStar($average){
            $star = "";
            $int = intval($average);
            $fractional_part = fmod($average, 1);
            $empty = 5 - $int;
            for($i = 0; $i < $int; $i ++){
                  $star .= '<i class="fas fa-star text-yellow-400"></i>';
            }
            if($fractional_part > 0){
                  $star .= '<i class="fas fa-star-half-alt text-yellow-400"></i>';
            }
            if($empty >= 1){
                  $star .= '<i class="far fa-star text-gray-300"></i>';
            }

            return $star;
      }



}
