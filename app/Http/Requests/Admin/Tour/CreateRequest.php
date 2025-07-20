<?php

namespace App\Http\Requests\Admin\Tour;

use App\Services\TempImageService;
use App\Services\Util\ImageService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Number;
use Ramsey\Uuid\Type\Integer;

class CreateRequest extends FormRequest
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

        Log::debug($this->all());
        return [
            // Basic Tour Information
            'title' => ['required', 'string', 'max:50'],
            'subtitle' => ['required', 'string', 'max:1000'],
            'badge' => ['nullable', 'string', 'max:50'],
            'region_id' => ['required', 'integer', 'exists:regions,id'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'overview_title' => ['required', 'string', 'max:50'],
            'overview_description' => ['required', 'string', 'max:1000'],
            
            // Hero Image
            'hero_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048', 'required_without:temp_hero_image'],
            "temp_hero_image" => ["nullable", "string", 'required_without:hero_image'],
            
            // Tour Highlights
            'highlights' => ['required', 'array', 'min:1'],
            'highlights.*.title' => ['required', 'string', 'max:50'],
            'highlights.*.description' => ['required', 'string', 'max:500'],

            // Tour Reviews
            'reviews' => ['required', 'array', 'min:1'],
            'reviews.*.name' => ['required', 'string', 'max:50'],
            'reviews.*.rating' => ['required', 'integer'],
            'reviews.*.content' => ['required', 'string', 'max:3000'],
            'reviews.*.date' => ['required', 'date'],

            // Tour QA
            'questions' => ['required', 'array', 'min:1'],
            'questions.*.question' => ['required', 'string', 'max:1000'],
            'questions.*.answer' => ['required', 'string', 'max:1000'],
            
            // Itineraries
            'itinerary' => ['required', 'array', 'min:1'],
            'itinerary.*.duration' => ['required', 'integer', 'min:1', 'max:24'],
            'itinerary.*.max_participants' => ['required', 'integer', 'min:1', 'max:50'],
            'itinerary.*.tour_type' => ['required', 'string'],
            'itinerary.*.meeting_point' => ['required', 'string', 'max:255'],
            'itinerary.*.adult_price' => ['required', 'numeric', 'min:0', 'max:99999999.99'],
            'itinerary.*.child_price' => ['nullable', 'numeric', 'min:0', 'max:99999999.99'],
            'itinerary.*.overview_title' => ['required', 'string', 'max:100'],
            'itinerary.*.overview_description' => ['required', 'string', 'max:1000'],
            
            // Languages for each itinerary
            'itinerary.*.languages' => ['required', 'array', 'min:1'],
            'itinerary.*.languages.*' => ['required', 'string', 'exists:languages,id'],
            
            // Activities for each itinerary
            'itinerary.*.activity' => ['required', 'array', 'min:1'],
            'itinerary.*.activity.*.activity_title' => ['required', 'string', 'max:1000'],
            'itinerary.*.activity.*.activity_description' => ['required', 'string', 'max:1000'],
            
            // Itinerary highlights
            'itinerary.*.itinerary_highlight' => ['required', 'array', 'min:1'],
            'itinerary.*.itinerary_highlight.*' => ['required', 'string', 'max:50'],
            
            // Itinerary image
            'itinerary.*.image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            // Temp itinerary images (hidden fields)
            'itinerary.*.temp_itinerary_image' => ['nullable', 'string'],
            
            // Gallery images
            'gallery_image' => ['nullable', 'array'],
            'gallery_image.0' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'gallery_image.1' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'gallery_image.2' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'gallery_image.3' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'gallery_image.4' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'gallery_image.5' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            
            // Temp gallery images
            'temp_gallery_image' => ['nullable', 'array'],
            'temp_gallery_image_0' => ['nullable', 'string'],
            'temp_gallery_image_1' => ['nullable', 'string'],
            'temp_gallery_image_2' => ['nullable', 'string'],
            'temp_gallery_image_3' => ['nullable', 'string'],
            'temp_gallery_image_4' => ['nullable', 'string'],
            'temp_gallery_image_5' => ['nullable', 'string'],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            // Itinerary Images のチェック
            if ($this->has('itinerary')) {
                foreach ($this->input('itinerary', []) as $index => $itinerary) {
                    $hasNewImage = $this->hasFile("itinerary.{$index}.image");
                    $hasTempImage = $this->filled("itinerary.{$index}.temp_itinerary_image");
                    
                    if (!$hasNewImage && !$hasTempImage) {
                        $validator->errors()->add(
                            "itinerary.{$index}.image", 
                            "Image is required for itinerary " . ((int)$index + 1) . "."
                        );
                    }
                }
            }

            
            // Gallery Images のチェック（6つすべて必須）
            $missingGalleryImages = [];
            
            for ($i = 0; $i < 6; $i++) {
                $hasNewImage = $this->hasFile("gallery_image.{$i}");
                $hasTempImage = $this->filled("temp_gallery_image.{$i}");
                
                if (!$hasNewImage && !$hasTempImage) {
                    $missingGalleryImages[] = $i + 1;
                    $validator->errors()->add(
                        "gallery_image.{$i}", 
                        "Gallery image " . ($i + 1) . " is required."
                    );
                }
            }
            
            // 全体のエラーメッセージ
            if (!empty($missingGalleryImages)) {
                $validator->errors()->add(
                    'gallery_image', 
                    'All 6 gallery images are required. Missing images: ' . implode(', ', $missingGalleryImages)
                );
            }
        });
    }

    public function messages(): array
    {
        $messages = [
            // Basic Information
            'title.required' => 'Tour title is required.',
            'title.string' => 'Tour title must be a valid text.',
            'title.max' => 'Tour title cannot exceed 50 characters.',
            
            'subtitle.required' => 'Subtitle is required.',
            'subtitle.string' => 'Subtitle must be a valid text.',
            'subtitle.max' => 'Subtitle cannot exceed 1000 characters.',
            
            'badge.string' => 'Badge must be a valid text.',
            'badge.max' => 'Badge cannot exceed 50 characters.',

             // Category ID
            'category_id.required' => 'Category is required.',
            'category_id.integer' => 'Category ID must be a valid number.',
            'category_id.exists' => 'The selected category does not exist.',

            // Region
            'region_id.required' => 'Region is required.',
            'region_id.integer' => 'Region ID must be a valid number.',
            'region_id.exists' => 'The selected region does not exist.',
            
            'overview_title.required' => 'Overview title is required.',
            'overview_title.string' => 'Overview title must be a valid text.',
            'overview_title.max' => 'Overview title cannot exceed 50 characters.',
            
            'overview_description.required' => 'Overview description is required.',
            'overview_description.string' => 'Overview description must be a valid text.',
            'overview_description.max' => 'Overview description cannot exceed 1000 characters.',
            
            // Hero Image

            'hero_image.required' => 'Hero image is required.',
            'hero_image.required_without' => 'Please upload a hero image or ensure a previously uploaded image exists.',
            'hero_image.image' => 'Hero image must be a valid image file.',
            'hero_image.mimes' => 'Hero image must be a JPEG, PNG, JPG, or GIF file.',
            'hero_image.max' => 'Hero image size cannot exceed 2MB.',

            'temp_hero_image.required_without' => 'Hero image is required. Please upload an image.',
                

            
            // Highlights
            'highlights.required' => 'At least one highlight is required.',
            'highlights.array' => 'Highlights must be provided as a list.',
            'highlights.min' => 'At least one highlight is required.',
            'highlights.*.title.required' => 'Highlight title is required.',
            'highlights.*.title.max' => 'Highlight title cannot exceed 50 characters.',
            'highlights.*.description.required' => 'Highlight description is required.',
            'highlights.*.description.max' => 'Highlight description cannot exceed 500 characters.',

            // Reviews
            'reviews.required' => 'At least one review is required.',
            'reviews.array' => 'Reviews must be an array.',
            'reviews.min' => 'You must provide at least one review.',

            'reviews.*.name.required' => 'The reviewer name is required.',
            'reviews.*.name.string' => 'The reviewer name must be a valid string.',
            'reviews.*.name.max' => 'The reviewer name may not be greater than 50 characters.',

            'reviews.*.rating.required' => 'The rating is required.',
            'reviews.*.rating.integer' => 'The rating must be an integer.',

            'reviews.*.content.required' => 'The review content is required.',
            'reviews.*.content.string' => 'The review content must be a valid string.',
            'reviews.*.content.max' => 'The review content may not be greater than 3000 characters.',

            'reviews.*.date.required' => 'The review date is required.',
            'reviews.*.date.date' => 'The review date must be a valid date.',


            // QA 
            'questions.required' => 'At least one Q&A entry is required.',
            'questions.array' => 'The Q&A data must be provided as an array.',
            'questions.min' => 'Please add at least one Q&A item.',

            'questions.*.question.required' => 'Each Q&A must include a question.',
            'questions.*.question.string' => 'Each question must be a valid text string.',
            'questions.*.question.max' => 'Questions may not exceed 1000 characters.',

            'questions.*.answer.required' => 'Each Q&A must include an answer.',
            'questions.*.answer.string' => 'Each answer must be a valid text string.',
            'questions.*.answer.max' => 'Answers may not exceed 1000 characters.',

            
            // Itineraries
            'itinerary.required' => 'At least one itinerary is required.',
            'itinerary.array' => 'Itineraries must be provided as a list.',
            'itinerary.min' => 'At least one itinerary is required.',
            
            'itinerary.*.duration.required' => 'Duration is required for each itinerary.',
            'itinerary.*.duration.integer' => 'Duration must be a valid number.',
            'itinerary.*.duration.min' => 'Duration must be at least 1 hour.',
            'itinerary.*.duration.max' => 'Duration cannot exceed 24 hours.',
            
            'itinerary.*.max_participants.required' => 'Maximum participants is required for each itinerary.',
            'itinerary.*.max_participants.integer' => 'Maximum participants must be a valid number.',
            'itinerary.*.max_participants.min' => 'Maximum participants must be at least 1.',
            'itinerary.*.max_participants.max' => 'Maximum participants cannot exceed 50.',
            
            'itinerary.*.tour_type.required' => 'Tour type is required for each itinerary.',
            'itinerary.*.tour_type.string' => 'Tour type must be a valid text.',
            
            'itinerary.*.meeting_point.required' => 'Meeting point is required for each itinerary.',
            'itinerary.*.meeting_point.string' => 'Meeting point must be a valid text.',
            'itinerary.*.meeting_point.max' => 'Meeting point cannot exceed 255 characters.',
            
            'itinerary.*.adult_price.required' => 'Adult price is required for each itinerary.',
            'itinerary.*.adult_price.numeric' => 'Adult price must be a valid number.',
            'itinerary.*.adult_price.min' => 'Adult price cannot be negative.',
            'itinerary.*.adult_price.max' => 'Adult price cannot exceed 99,999,999.99.',
            
            'itinerary.*.child_price.numeric' => 'Child price must be a valid number.',
            'itinerary.*.child_price.min' => 'Child price cannot be negative.',
            'itinerary.*.child_price.max' => 'Child price cannot exceed 99,999,999.99.',

            'itinerary.*.overview_title.required' => 'Itinerary overview title is required.',
            'itinerary.*.overview_title.string' => 'Itinerary overview title must be a valid text.',
            'itinerary.*.overview_title.max' => 'Itinerary overview title cannot exceed 100 characters.',
            
            'itinerary.*.overview_description.required' => 'Itinerary overview description is required.',
            'itinerary.*.overview_description.string' => 'Itinerary overview description must be a valid text.',
            'itinerary.*.overview_description.max' => 'Itinerary overview description cannot exceed 1000 characters.',
            
            // Languages
            'itinerary.*.languages.required' => 'At least one language is required for each itinerary.',
            'itinerary.*.languages.array' => 'Languages must be provided as a list.',
            'itinerary.*.languages.min' => 'At least one language is required for each itinerary.',
            'itinerary.*.languages.*.required' => 'Language ID is required.',
            'itinerary.*.languages.*.exists' => 'The selected language does not exist.',
            
            // Activities
            'itinerary.*.activity.required' => 'At least one activity is required for each itinerary.',
            'itinerary.*.activity.array' => 'Activities must be provided as a list.',
            'itinerary.*.activity.min' => 'At least one activity is required for each itinerary.',
            'itinerary.*.activity.*.activity_title.required' => 'Activity title is required.',
            'itinerary.*.activity.*.activity_title.max' => 'Activity title cannot exceed 1000 characters.',
            'itinerary.*.activity.*.activity_description.required' => 'Activity description is required.',
            'itinerary.*.activity.*.activity_description.max' => 'Activity description cannot exceed 1000 characters.',
            
            // Itinerary Highlights
            'itinerary.*.itinerary_highlight.required' => 'At least one itinerary highlight is required.',
            'itinerary.*.itinerary_highlight.array' => 'Itinerary highlights must be provided as a list.',
            'itinerary.*.itinerary_highlight.min' => 'At least one itinerary highlight is required.',
            'itinerary.*.itinerary_highlight.*.required' => 'Itinerary highlight text is required.',
            'itinerary.*.itinerary_highlight.*.max' => 'Itinerary highlight cannot exceed 50 characters.',
            
            // Itinerary Image
            'itinerary.*.image.required' => 'Image is required for each itinerary.',
            'itinerary.*.image.required_without' => 'Itinerary image is required when no previous image exists.',
            'itinerary.*.image.image' => 'The file must be a valid image.',
            'itinerary.*.image.mimes' => 'Itinerary image must be a JPEG, PNG, JPG, or GIF file.',
            'itinerary.*.image.max' => 'Itinerary image size cannot exceed 2MB.',
            
            // Temp itinerary images
            'temp_itinerary_image_*.required_without' => 'Itinerary image is required.',

            // Gallery Images
            'gallery_image.required' => 'All 6 gallery images are required.',
            'gallery_image.array' => 'Gallery images must be provided as a list.',
            'gallery_image.size' => 'Exactly 6 gallery images are required.',
            
            'gallery_image.0.required' => 'Gallery image 1 is required.',
            'gallery_image.1.required' => 'Gallery image 2 is required.',
            'gallery_image.2.required' => 'Gallery image 3 is required.',
            'gallery_image.3.required' => 'Gallery image 4 is required.',
            'gallery_image.4.required' => 'Gallery image 5 is required.',
            'gallery_image.5.required' => 'Gallery image 6 is required.',
            
            'gallery_image.*.image' => 'Each gallery file must be a valid image.',
            'gallery_image.*.mimes' => 'Gallery images must be JPEG, PNG, JPG, or GIF files.',
            'gallery_image.*.max' => 'Each gallery image size cannot exceed 2MB.',
            
        ];


        return $messages;
    }

    public function attributes(): array
    {
        return [
            'title' => 'tour title',
            'subtitle' => 'subtitle',
            'badge' => 'badge',
            'overview_title' => 'overview title',
            'overview_description' => 'overview description',
            'hero_image' => 'hero image',
            'highlight.*.title' => 'highlight title',
            'highlight.*.description' => 'highlight description',
            'itinerary.*.duration' => 'duration',
            'itinerary.*.max_participants' => 'maximum participants',
            'itinerary.*.tour_type' => 'tour type',
            'itinerary.*.meeting_point' => 'meeting point',
            'itinerary.*.adult_price' => 'adult price',
            'itinerary.*.child_price' => 'child price',
            'itinerary.*.languages.*' => 'language',
            'itinerary.*.activity.*.activity_title' => 'activity title',
            'itinerary.*.activity.*.activity_description' => 'activity description',
            'itinerary.*.itinerary_highlight.*' => 'itinerary highlight',
            'itinerary.*.image' => 'itinerary image',
            'gallery.*' => 'gallery image',
        ];

    }
    protected function failedValidation(Validator $validator){
        // バリデーション失敗時に画像を一時保存
        $tempImageService = new TempImageService($this);
        $tempImageService->handleTempHeroImage($this);
        $tempImageService->handleTempItineraryImages($this);
        $tempImageService->handleTempGalleryImages($this);
        // 親クラスのメソッドを呼び出し
        parent::failedValidation($validator);
    }
}
