<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendContactMailRequest extends FormRequest
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
            "name" => ["required"],
            "email" => ["required", "email", "max:255"],
            "body" => ["required"],
            'g-recaptcha-response' => ['required'],
        ];
    }

    /**
     * バリデーション後の処理
     *
     * @return void
     */
    protected function passedValidation()
    {
        // reCAPTCHA検証
        $this->validateRecaptcha();
    }

    /**
     * reCAPTCHA検証を行う
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateRecaptcha()
    {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $this->input('g-recaptcha-response'),
            'remoteip' => $this->ip(),
        ]);

        // $response = Http::withoutVerifying()->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => env('RECAPTCHA_SECRET_KEY'),
        //     'response' => $this->input('g-recaptcha-response'),
        //     'remoteip' => $this->ip(),
        // ]);

        $body = $response->json();
            // デバッグ: APIレスポンスを確認
        Log::debug('reCAPTCHA API response: ' . json_encode($body));
        
        // 検証に失敗した場合
        if (!isset($body['success']) || $body['success'] !== true) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'g-recaptcha-response' => ['Human verification failed. Please try again.'],
            ]);
        }

        // スコアが低すぎる場合（ボットの可能性が高い）
        if (isset($body['score']) && $body['score'] < 0.5) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'g-recaptcha-response' => ['Security check failed. Please try again later.'],
            ]);
        }
    }

    /**
     * エラーメッセージのカスタマイズ
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Oops! We need your name to continue.',
            'email.required' => 'Please don\'t forget to enter your email address.',
            'email.email' => 'Hmm... that email doesn\'t look quite right. Mind checking it?',
            'email.max' => 'That email is a bit too long. Could you use a shorter one?',
            'body.required' => 'Don\'t forget to write your message!',
            'g-recaptcha-response.required' => 'Please complete the reCAPTCHA verification.',
        ];
    }
}