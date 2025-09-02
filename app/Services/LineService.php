<?php

namespace App\Services;

use App\Services\Util\Template;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LineService
{
      private $channelAccessToken;
      
      public function __construct()
      {
            $this->channelAccessToken = env('LINE_CHANNEL_ACCESS_TOKEN');
      }
      
      public function sendMessage($userId,$customer, $booking)
      {

            $bookingData = [
                  'admin_user_id' => "222",
                  'booking_id' => 'TKO-2024-001',
                  'tour_name' => 'Tokyo City Highlights & Shibuya Crossing Tour',
                  'tour_date' => '2024-08-28 09:00',
                  'customer_name' => 'John Smith',
                  'customer_email' => 'john.smith@email.com',
                  'customer_phone' => '+1-555-123-4567',
                  'participant_count' => 4,
                  'total_amount' => 280.00,
                  'status' => 'pending',
                  'created_at' => '2024-08-25 18:30:15'
            ];
            $url = 'https://api.line.me/v2/bot/message/push';
            $data = Template::createLineFlexMessage($userId,$booking, $customer);
            
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