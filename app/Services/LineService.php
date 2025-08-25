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
            $data = [
                  'to' => $userId,
                  'messages' => [
                        [
                              'type' => 'flex',
                              'altText' => '🚨 New Tour Booking: ' . $bookingData['tour_name'],
                              'contents' => [
                                    'type' => 'bubble',
                                    'size' => 'giga',
                                    'header' => [
                                          'type' => 'box',
                                          'layout' => 'vertical',
                                          'contents' => [
                                                [
                                                      'type' => 'box',
                                                      'layout' => 'horizontal',
                                                      'contents' => [
                                                            [
                                                                  'type' => 'text',
                                                                  'text' => '🚨',
                                                                  'size' => 'xl',
                                                                  'flex' => 1,
                                                                  'gravity' => 'center'
                                                            ],
                                                            [
                                                                  'type' => 'text',
                                                                  'text' => 'NEW BOOKING',
                                                                  'weight' => 'bold',
                                                                  'size' => 'xl',
                                                                  'color' => '#FF4444',
                                                                  'flex' => 4,
                                                                  'gravity' => 'center'
                                                            ],
                                                            [
                                                                  'type' => 'text',
                                                                  'text' => '🚨',
                                                                  'size' => 'xl',
                                                                  'flex' => 1,
                                                                  'gravity' => 'center'
                                                            ]
                                                      ]
                                                ]
                                          ],
                                          'backgroundColor' => '#FFF8F8',
                                          'paddingAll' => 'md'
                                    ],
                                    'body' => [
                                          'type' => 'box',
                                          'layout' => 'vertical',
                                          'contents' => [
                                                // Tour Info Section
                                                [
                                                      'type' => 'box',
                                                      'layout' => 'vertical',
                                                      'contents' => [
                                                            [
                                                                  'type' => 'text',
                                                                  'text' => '🎯 TOUR DETAILS',
                                                                  'weight' => 'bold',
                                                                  'size' => 'md',
                                                                  'color' => '#333333',
                                                                  'margin' => 'none'
                                                            ],
                                                            [
                                                                  'type' => 'separator',
                                                                  'margin' => 'sm'
                                                            ],
                                                            [
                                                                  'type' => 'box',
                                                                  'layout' => 'vertical',
                                                                  'margin' => 'md',
                                                                  'spacing' => 'sm',
                                                                  'contents' => [
                                                                        [
                                                                              'type' => 'box',
                                                                              'layout' => 'baseline',
                                                                              'spacing' => 'sm',
                                                                              'contents' => [
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '📅',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 1
                                                                                    ],
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => $bookingData['tour_date'],
                                                                                          'wrap' => true,
                                                                                          'color' => '#666666',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 5,
                                                                                          'weight' => 'bold'
                                                                                    ]
                                                                              ]
                                                                        ],
                                                                        [
                                                                              'type' => 'box',
                                                                              'layout' => 'baseline',
                                                                              'spacing' => 'sm',
                                                                              'contents' => [
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '🎯',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 1
                                                                                    ],
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => $bookingData['tour_name'],
                                                                                          'wrap' => true,
                                                                                          'color' => '#333333',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 5,
                                                                                          'weight' => 'bold'
                                                                                    ]
                                                                              ]
                                                                        ]
                                                                  ]
                                                            ]
                                                      ],
                                                      'margin' => 'lg'
                                                ],

                                                // Customer Info Section
                                                [
                                                      'type' => 'box',
                                                      'layout' => 'vertical',
                                                      'contents' => [
                                                            [
                                                                  'type' => 'text',
                                                                  'text' => '👤 CUSTOMER INFO',
                                                                  'weight' => 'bold',
                                                                  'size' => 'md',
                                                                  'color' => '#333333',
                                                                  'margin' => 'xl'
                                                            ],
                                                            [
                                                                  'type' => 'separator',
                                                                  'margin' => 'sm'
                                                            ],
                                                            [
                                                                  'type' => 'box',
                                                                  'layout' => 'vertical',
                                                                  'margin' => 'md',
                                                                  'spacing' => 'sm',
                                                                  'contents' => [
                                                                        [
                                                                              'type' => 'box',
                                                                              'layout' => 'baseline',
                                                                              'spacing' => 'sm',
                                                                              'contents' => [
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '👤',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 1
                                                                                    ],
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => $bookingData['customer_name'],
                                                                                          'wrap' => true,
                                                                                          'color' => '#333333',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 5,
                                                                                          'weight' => 'bold'
                                                                                    ]
                                                                              ]
                                                                        ],
                                                                        [
                                                                              'type' => 'box',
                                                                              'layout' => 'baseline',
                                                                              'spacing' => 'sm',
                                                                              'contents' => [
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '📧',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 1
                                                                                    ],
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => $bookingData['customer_email'],
                                                                                          'wrap' => true,
                                                                                          'color' => '#666666',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 5
                                                                                    ]
                                                                              ]
                                                                        ],
                                                                        [
                                                                              'type' => 'box',
                                                                              'layout' => 'baseline',
                                                                              'spacing' => 'sm',
                                                                              'contents' => [
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '📱',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 1
                                                                                    ],
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => $bookingData['customer_phone'],
                                                                                          'wrap' => true,
                                                                                          'color' => '#666666',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 5
                                                                                    ]
                                                                              ]
                                                                        ]
                                                                  ]
                                                            ]
                                                      ]
                                                ],

                                                // Booking Details Section
                                                [
                                                      'type' => 'box',
                                                      'layout' => 'vertical',
                                                      'contents' => [
                                                            [
                                                                  'type' => 'text',
                                                                  'text' => '💰 BOOKING DETAILS',
                                                                  'weight' => 'bold',
                                                                  'size' => 'md',
                                                                  'color' => '#333333',
                                                                  'margin' => 'xl'
                                                            ],
                                                            [
                                                                  'type' => 'separator',
                                                                  'margin' => 'sm'
                                                            ],
                                                            [
                                                                  'type' => 'box',
                                                                  'layout' => 'vertical',
                                                                  'margin' => 'md',
                                                                  'spacing' => 'sm',
                                                                  'contents' => [
                                                                        [
                                                                              'type' => 'box',
                                                                              'layout' => 'baseline',
                                                                              'spacing' => 'sm',
                                                                              'contents' => [
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '👥',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 1
                                                                                    ],
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => $bookingData['participant_count'] . ' participants',
                                                                                          'wrap' => true,
                                                                                          'color' => '#666666',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 5
                                                                                    ]
                                                                              ]
                                                                        ],
                                                                        [
                                                                              'type' => 'box',
                                                                              'layout' => 'baseline',
                                                                              'spacing' => 'sm',
                                                                              'contents' => [
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '💰',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 1
                                                                                    ],
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '$' . number_format($bookingData['total_amount'], 2),
                                                                                          'wrap' => true,
                                                                                          'color' => '#009900',
                                                                                          'size' => 'md',
                                                                                          'flex' => 5,
                                                                                          'weight' => 'bold'
                                                                                    ]
                                                                              ]
                                                                        ],
                                                                        [
                                                                              'type' => 'box',
                                                                              'layout' => 'baseline',
                                                                              'spacing' => 'sm',
                                                                              'contents' => [
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '🆔',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 1
                                                                                    ],
                                                                                    [
                                                                                          'type' => 'text',
                                                                                          'text' => '#' . $bookingData['booking_id'],
                                                                                          'wrap' => true,
                                                                                          'color' => '#666666',
                                                                                          'size' => 'sm',
                                                                                          'flex' => 5,
                                                                                          'weight' => 'bold'
                                                                                    ]
                                                                              ]
                                                                        ]
                                                                  ]
                                                            ]
                                                      ]
                                                ]
                                          ]
                                    ],
                                    'footer' => [
                                          'type' => 'box',
                                          'layout' => 'vertical',
                                          'spacing' => 'sm',
                                          'contents' => [
                                                [
                                                      'type' => 'button',
                                                      'style' => 'primary',
                                                      'height' => 'sm',
                                                      'action' => [
                                                            'type' => 'uri',
                                                            'label' => '📱 View in Admin Panel',
                                                            'uri' => 'https://your-domain.com/admin/bookings/' . $bookingData['booking_id']
                                                      ],
                                                      'color' => '#FF6B6B'
                                                ],
                                                [
                                                      'type' => 'box',
                                                      'layout' => 'vertical',
                                                      'contents' => [
                                                            [
                                                                  'type' => 'text',
                                                                  'text' => '⏳ Status: ' . ucfirst($bookingData['status']),
                                                                  'color' => '#aaaaaa',
                                                                  'size' => 'sm',
                                                                  'align' => 'center'
                                                            ],
                                                            [
                                                                  'type' => 'text',
                                                                  'text' => '⏰ ' . $bookingData['created_at'],
                                                                  'color' => '#aaaaaa',
                                                                  'size' => 'xs',
                                                                  'align' => 'center',
                                                                  'margin' => 'sm'
                                                            ]
                                                      ],
                                                      'margin' => 'sm'
                                                ]
                                          ]
                                    ]
                              ]
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