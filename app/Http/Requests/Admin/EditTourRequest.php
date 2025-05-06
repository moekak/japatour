<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class EditTourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [
            "title" => ["required", "string", "max:255"],
            "subtitle" => ["required", "string", "max:255"],
            "badge" => ["nullable", "string", "max:255"],
            "hours" => ["required", "integer"],
            "start_location" => ["required", "string", "max:255"],
            "destinations" => ["required", "string", "max:255"],
            "languages" => ["required", "string", "max:255"],
            "min_participants" => ["required", "integer"],
            "max_participants" => ["required", "integer"],
            "available_dates" => ["required", "string"],
            "currency" => ["required", "string", "max:5"],
            "price" => ["required", "numeric", "min:0", "max:99999999.99"],
            "discount_percentage" => ["required", "integer"],
            "limited_spots" => ["nullable", "string", "max:255"],
            "overview" => ["required", "string"],
            "highlights" => ["required", "array"],
            // itineraryのバリデーションルール
            "itinerary" => ["required", "array"],
            "itinerary.*" => ["required", "array"],
            "itinerary.*.title" => ["required", "string", "max:255"],
            "itinerary.*.description" => ["required", "string"], 
            "itinerary.*.itinerary_highlight" => ["required", "array"], 
            "itinerary.*.itinerary_highlight.*" => ["required", "string"], 
            "itinerary.*.schedule" => ["required", "array"], 
            "itinerary.*.schedule.*" => ["required", "array"], 
            "itinerary.*.schedule.*.time" => ["required", "string"], 
            "itinerary.*.schedule.*.description" => ["required", "string"], 
            'itinerary.*.itinerary_image' => ["nullable", "image"],
            "inclusions" => ["required", "array"],
            "exclusions" => ["required", "array"],
            "hero_image" => ["nullable", "image", "mimes:jpeg,png,jpg,gif", "max:2048"],
            "gallery_images" => ["nullable", "array"],
            "gallery_images.*" => ["image", "mimes:jpeg,png,jpg,gif", "max:2048"],
            "current_gallery_images" => ["nullable", "array"],
            "current_gallery_images.*" => ["string", "max:2048"],
            "remove_gallery" => ["nullable", "array"],
            "remove_gallery.*" => ["string", "max:2048"],
            // reviewのバリデーションルール
            "review_id" => ["required", "exists:reviews,id"],
            "review" => ["required", "array"],
            "review.*" => ["required", "array"],
            "review.*.name" => ["required", "string", "max:255"],
            "review.*.date" => ["required", "date", "date_format:Y-m-d"],
            "review.*.rate" => ["required", "integer", "min:1", "max:5"],
            "review.*.review" => ["required", "string", "max:2000"],
            //QAのバリデーションルール
            "qa_id" => ["required", "exists:questions,id"],
            "qa" => ["required", "array"],
            "qa.*" => ["required", "array"],
            "qa.*.question" => ["required", "string", "max:2000"],
            "qa.*.answer" => ["required", "string", "max:2000"],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title must not exceed 255 characters.',
            
            'subtitle.required' => 'The subtitle field is required.',
            'subtitle.string' => 'The subtitle must be a string.',
            'subtitle.max' => 'The subtitle must not exceed 255 characters.',
            
            'badge.string' => 'The badge must be a string.',
            'badge.max' => 'The badge must not exceed 255 characters.',
            
            'hours.required' => 'The hours field is required.',
            'hours.integer' => 'The hours must be an integer.',
            
            'start_location.required' => 'The start location field is required.',
            'start_location.string' => 'The start location must be a string.',
            'start_location.max' => 'The start location must not exceed 255 characters.',
            
            'destinations.required' => 'The destinations field is required.',
            'destinations.string' => 'The destinations must be a string.',
            'destinations.max' => 'The destinations must not exceed 255 characters.',
            
            'languages.required' => 'The languages field is required.',
            'languages.string' => 'The languages must be a string.',
            'languages.max' => 'The languages must not exceed 255 characters.',
            
            'min_participants.required' => 'The minimum participants field is required.',
            'min_participants.integer' => 'The minimum participants must be an integer.',
            
            'max_participants.required' => 'The maximum participants field is required.',
            'max_participants.integer' => 'The maximum participants must be an integer.',

            'available_dates.required' => 'The available dates field is required.',
            'available_dates.json' => 'The available dates must be an json object.',
            
            'currency.required' => 'The currency field is required.',
            'currency.string' => 'The currency must be a string.',
            'currency.max' => 'The currency must not exceed 5 characters.',
            
            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a decimal number with up to 2 decimal places.',
            'price.min' => 'The price must be at least 0.',
            'price.max' => 'The price must not exceed 99,999,999.99.',
            
            'discount_percentage.required' => 'The discount percentage field is required.',
            'discount_percentage.integer' => 'The discount percentage must be an integer.',
            
            'limited_spots.string' => 'The limited spots must be a string.',
            'limited_spots.max' => 'The limited spots must not exceed 255 characters.',
            
            'overview.required' => 'The overview field is required.',
            'overview.string' => 'The overview must be a string.',
            
            'highlights.required' => 'The highlights field is required.',
            'highlights.array' => 'The highlights must be a valid array format.',
    
            // itineraryのバリデーションメッセージ
            'itinerary.required' => 'The itinerary field is required.',
            'itinerary.array' => 'The itinerary must be a valid array format.',
            'itinerary.*.required' => 'Each itinerary item is required.',
            'itinerary.*.array' => 'Each itinerary item must be a valid array format.',
            'itinerary.*.title.required' => 'The itinerary title is required.',
            'itinerary.*.title.string' => 'The itinerary title must be a string.',
            'itinerary.*.title.max' => 'The itinerary title must not exceed 255 characters.',
            'itinerary.*.description.required' => 'The itinerary description is required.',
            'itinerary.*.description.string' => 'The itinerary description must be a string.',
            'itinerary.*.itinerary_highlight.required' => 'The itinerary highlight is required.',
            'itinerary.*.itinerary_highlight.array' => 'The itinerary highlight must be a valid array format.',
            'itinerary.*.itinerary_highlight.*.required' => 'Each itinerary highlight item is required.',
            'itinerary.*.itinerary_highlight.*.string' => 'Each itinerary highlight item must be a string.',
            'itinerary.*.schedule.required' => 'The schedule is required.',
            'itinerary.*.schedule.array' => 'The schedule must be a valid array format.',
            'itinerary.*.schedule.*.required' => 'Each schedule item is required.',
            'itinerary.*.schedule.*.array' => 'Each schedule item must be a valid array format.',
            'itinerary.*.schedule.*.time.required' => 'The schedule time is required.',
            'itinerary.*.schedule.*.time.string' => 'The schedule time must be a string.',
            'itinerary.*.schedule.*.description.required' => 'The schedule description is required.',
            'itinerary.*.schedule.*.description.string' => 'The schedule description must be a string.',
            'itinerary.*.itinerary_image.*image' => 'The itinerary image must be an image file.',
            
            'inclusions.required' => 'The inclusions field is required.',
            'inclusions.array' => 'The inclusions must be a valid array format.',
            
            'exclusions.required' => 'The exclusions field is required.',
            'exclusions.array' => 'The exclusions must be a valid array format.',
            
            'hero_image.image' => 'The hero image must be an image file.',
            'hero_image.mimes' => 'The hero image must be a file of type: jpeg, png, jpg, gif.',
            'hero_image.max' => 'The hero image must not exceed 2MB.',

            'gallery_images.array' => 'The gallery images must be an array of files.',
            'gallery_images.*.image' => 'All gallery files must be images.',
            'gallery_images.*.mimes' => 'All gallery images must be a file of type: jpeg, png, jpg, gif.',
            'gallery_images.*.max' => 'Each gallery image must not exceed 2MB.',

            'current_gallery_images.array' => 'The current gallery images must be an array of files.',
            'remove_gallery.array' => 'The remove gallery images must be an array of files.',

            // reviewのバリデーションメッセージ
            'review.required' => 'The review field is required.',
            'review.array' => 'The review must be a valid array format.',
            'review.*.required' => 'Each review item is required.',
            'review.*.array' => 'Each review item must be a valid array format.',
            'review.*.name.required' => 'The reviewer name is required for each review.',
            'review.*.name.string' => 'The reviewer name must be a string.',
            'review.*.name.max' => 'The reviewer name must not exceed 255 characters.',
            'review.*.date.required' => 'The review date is required for each review.',
            'review.*.date.date' => 'The review date must be a valid date.',
            'review.*.date.date_format' => 'The review date must be in the format YYYY-MM-DD.',
            'review.*.rate.required' => 'The review rating is required for each review.',
            'review.*.rate.integer' => 'The review rating must be an integer.',
            'review.*.rate.min' => 'The review rating must be at least 1.',
            'review.*.rate.max' => 'The review rating must not exceed 5.',
            'review.*.review.required' => 'The review content is required for each review.',
            'review.*.review.string' => 'The review content must be a string.',
            'review.*.review.max' => 'The review content must not exceed 2000 characters.',

            // QAのバリデーションメッセージ
            'qa.required' => 'The Q&A section is required.',
            'qa.array' => 'The Q&A must be in a valid array format.',
            'qa.*.required' => 'Each Q&A item is required.',
            'qa.*.array' => 'Each Q&A item must be in a valid array format.',
            'qa.*.question.required' => 'The question field is required for each Q&A item.',
            'qa.*.question.string' => 'The question must be a string.',
            'qa.*.question.max' => 'The question must not exceed 2000 characters.',
            'qa.*.answer.required' => 'The answer field is required for each Q&A item.',
            'qa.*.answer.string' => 'The answer must be a string.',
            'qa.*.answer.max' => 'The answer must not exceed 2000 characters.',

            'review_id.required' => 'The review ID is required.',
            'review_id.exists' => 'The selected review ID is invalid or does not exist.',

            'qa_id.required' => 'The question ID is required.',
            'qa_id.exists' => 'The selected question ID is invalid or does not exist.',
            
        ];
    }


    // EditTourRequestクラスに追加
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        Log::error('バリデーションエラー in EditTourRequest:', $validator->errors()->toArray());
        parent::failedValidation($validator);
    }
}
