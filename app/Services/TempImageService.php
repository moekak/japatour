<?php
namespace App\Services;

use App\Services\Util\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TempImageService
{
      protected $imageService;

      public function __construct()
      {
            $this->imageService = new ImageService();
      }

      public function handleTempHeroImage(Request $request)
      {
            if(Session::has("temp_hero_image")){
                  return;
            }
            if ($request->hasFile('hero_image')) {
                  $heroImage = $request->file('hero_image');
                  $path = $this->imageService->saveImage($heroImage, "hero_image");
                  Session::flash('temp_hero_image', $path);
            } elseif ($request->input("temp_hero_image")) {
                  Session::flash('temp_hero_image', $request->input("temp_hero_image"));
            }
      }

      public function handleTempItineraryImages(Request $request)
      {
            foreach ($request->input("itinerary", []) as $index => $itinerary) {
                  if(Session::has("temp_itinerary_image.{$index}")){
                        continue;
                  }
                  if ($request->hasFile("itinerary.{$index}.image")) {
                        $path = $this->imageService->saveImage($request->file("itinerary.{$index}.image"), "itinerary_image");
                        Session::flash("temp_itinerary_image.{$index}", $path);
                  } elseif ($request->input("itinerary.{$index}.temp_itinerary_image")) {
                        Session::flash("temp_itinerary_image.{$index}", $request->input("itinerary.{$index}.temp_itinerary_image"));
                  }
            }
      }

      public function handleTempGalleryImages(Request $request)
      {
            for ($i = 0; $i < 6; $i++) {
                  if(Session::has("temp_gallery_image.{$i}")){
                        continue;
                  }
                  if ($request->hasFile("gallery_image.{$i}")) {
                        $path = $this->imageService->saveImage($request->file("gallery_image.{$i}"), "gallery_image");
                        Session::flash("temp_gallery_image.{$i}", $path);
                  } elseif ($request->input("temp_gallery_image.{$i}")) {
                        Session::flash("temp_gallery_image.{$i}", $request->input("temp_gallery_image.{$i}"));
                  }
            }
      }
}
