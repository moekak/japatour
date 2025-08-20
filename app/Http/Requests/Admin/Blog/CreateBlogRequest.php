<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

;

class CreateBlogRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'subtitle' => ['required', 'string'],
            'category' => ['required', 'string'],
            'status' => ['required', 'string'],
            'meta_description' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'tags' => ['required', 'string'],
            'reading_time' => ['required', 'string'],
            'featured_image' => ['required', 'image', "mimes:jpeg,png,jpg,gif", "max:2048"],
        ];
    }

    public function messages(): array
{
    return [
        'title.required' => 'Please enter a title.',
        'title.string'   => 'The title must be a text string.',

        'subtitle.required' => 'Please enter a subtitle.',
        'subtitle.string'   => 'The subtitle must be a text string.',

        'category.required' => 'Please select a category.',
        'category.string'   => 'The category must be a text string.',

        'status.required' => 'Please select a status.',
        'status.string'   => 'The status must be a text string.',

        'meta_description.string' => 'The meta description must be a text string.',

        'content.required' => 'Please enter the content.',
        'content.string'   => 'The content must be a text string.',

        'tags.required' => 'Please provide at least one tag.',
        'tags.string'   => 'The tags field must be a comma-separated text string.',

        'reading_time.required' => 'Please provide an estimated reading time.',
        'reading_time.string'   => 'The reading time must be a text string (e.g., "3 min").',

        'featured_image.required' => 'Please upload a featured image.',
        'featured_image.image' => 'The file must be a valid image.',
        'featured_image.mimes' => 'Please upload a JPEG, PNG, JPG, or GIF image.',
        'featured_image.max' => 'The image size must not exceed 2MB.',
    ];
}

    protected function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(response()->json([
            'status'  => 'error',
            'message' => 'Validation failed.',
            'errors'  => $validator->errors(), // そのまま返すならこちら
        ], 422));
    }

}
