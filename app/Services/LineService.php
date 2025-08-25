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
      
      public function sendMessage($userId)
      {
            $url = 'https://api.line.me/v2/bot/message/push';
            $message = "🚨 NEW TOUR BOOKING 🚨\n\n" .
                  "📅 Date: 2024-08-28 09:00\n" .
                  "🎯 Tour: Tokyo City Highlights & Shibuya Crossing Tour\n" .
                  "👤 Guest: John Smith\n" .
                  "📧 Email: john.smith@email.com\n" .
                  "📱 Phone: +1-555-123-4567\n" .
                  "👥 Participants: 4 pax\n" .
                  "💰 Total: $280.00\n" .
                  "🆔 Booking ID: #TKO-2024-001\n\n" .
                  "📝 Special Requests:\n" .
                  "Vegetarian lunch options required. One participant uses wheelchair.\n\n" .
                  "⏳ Status: Pending\n" .
                  "⏰ Booked at: 2024-08-25 18:30:15\n\n" .
                  "👆 Please review and confirm this booking in the admin panel.";
            
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