<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LineService
{
      private $channelAccessToken;
      
      public function __construct()
      {
            $this->channelAccessToken = env('LINE_CHANNEL_ACCESS_TOKEN');
      }
      
      public function sendMessage($userId, $message)
      {
            $url = 'https://api.line.me/v2/bot/message/push';
            
            $data = [
                  'to' => $userId,
                  'messages' => [
                        [
                              'type' => 'text',
                              'text' => $message
                        ]
                  ]
            ];
            
            try {
                  $response = Http::withHeaders([
                        'Authorization' => 'Bearer ' . $this->channelAccessToken,
                        'Content-Type' => 'application/json'
                  ])->post($url, $data);
                  
                  if ($response->successful()) {
                        return true;
                  } else {
                        Log::error('LINE送信エラー: ' . $response->body());
                        return false;
                  }
            } catch (\Exception $e) {
                  Log::error('LINE送信例外: ' . $e->getMessage());
                  return false;
            }
      }
}