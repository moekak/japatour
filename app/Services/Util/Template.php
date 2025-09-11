<?php

namespace App\Services\Util;

class Template{
      static public function createLineFlexMessage($userId, $bookingData, $personalInfo){
            // データの安全性チェック
            $tourTitle = $bookingData["tour_title"] ?? "Tour Name";
            $itineraryTitle = $bookingData["itinerary_title"] ?? "Itinerary";
            $tourDate = $bookingData["tour_date"] ?? "TBD";
            $firstName = $personalInfo["first_name"] ?? "";
            $lastName = $personalInfo["last_name"] ?? "";
            $email = $personalInfo["email"] ?? "";
            $phone = $personalInfo["phone_number"] ?? "";
            $adultNumber = $bookingData['adult_number'] ?? 0;
            $childrenNumber = $bookingData['youth_number'] ?? 0;
            $adultPrice = $bookingData["adult_price"] ?? 0;
            $childrenPrice = $bookingData["youth_price"] ?? 0;

            $data = [
                  'to' => $userId,
                  "messages" => [
                        [
                              "type" => "flex",
                              "altText" => "New Booking Request",
                              "contents" => [
                                    "type" => "bubble",
                                    "body" => [
                                          "type" => "box",
                                          "layout" => "vertical",
                                          "contents" => [
                                                [
                                                      "type" => "text",
                                                      "text" => "NEW BOOKING REQUEST",
                                                      "weight" => "bold",
                                                      "color" => "#1DB446",
                                                      "size" => "sm"
                                                ],
                                                [
                                                      "type" => "text",
                                                      "text" => $tourTitle,
                                                      "weight" => "bold",
                                                      "size" => "lg",
                                                      "margin" => "md",
                                                      "wrap" => true
                                                ],
                                                [
                                                      "type" => "text",
                                                      "text" => $itineraryTitle,
                                                      "size" => "xs",
                                                      "color" => "#aaaaaa",
                                                      "margin" => "sm",
                                                      "wrap" => true
                                                ],
                                                [
                                                      "type" => "separator",
                                                      "margin" => "xxl"
                                                ],
                                                [
                                                      "type" => "box",
                                                      "layout" => "vertical",
                                                      "margin" => "xxl",
                                                      "spacing" => "sm",
                                                      "contents" => [
                                                            [
                                                                  "type" => "box",
                                                                  "layout" => "horizontal",
                                                                  "contents" => [
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => "Name",
                                                                              "size" => "sm",
                                                                              "color" => "#555555",
                                                                              "flex" => 0
                                                                        ],
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => trim($firstName . " " . $lastName),
                                                                              "size" => "sm",
                                                                              "color" => "#111111",
                                                                              "align" => "end",
                                                                              "wrap" => true
                                                                        ]
                                                                  ]
                                                            ],
                                                            [
                                                                  "type" => "box",
                                                                  "layout" => "horizontal",
                                                                  "contents" => [
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => "Email",
                                                                              "size" => "sm",
                                                                              "color" => "#555555",
                                                                              "flex" => 0
                                                                        ],
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => $email,
                                                                              "size" => "sm",
                                                                              "color" => "#111111",
                                                                              "align" => "end",
                                                                              "wrap" => true
                                                                        ]
                                                                  ]
                                                            ],
                                                            [
                                                                  "type" => "box",
                                                                  "layout" => "horizontal",
                                                                  "contents" => [
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => "Phone",
                                                                              "size" => "sm",
                                                                              "color" => "#555555",
                                                                              "flex" => 0
                                                                        ],
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => $phone,
                                                                              "size" => "sm",
                                                                              "color" => "#111111",
                                                                              "align" => "end"
                                                                        ]
                                                                  ]
                                                            ],
                                                      ]
                                                ],
                                                [
                                                      "type" => "separator",
                                                      "margin" => "xxl"
                                                ],
                                                [
                                                      "type" => "box",
                                                      "layout" => "vertical",
                                                      "margin" => "xxl",
                                                      "spacing" => "sm",
                                                      "contents" => [
                                                            [
                                                                  "type" => "box",
                                                                  "layout" => "horizontal",
                                                                  "contents" => [
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => "Tour",
                                                                              "size" => "sm",
                                                                              "color" => "#555555",
                                                                              "flex" => 1
                                                                        ],
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => $tourTitle,
                                                                              "size" => "sm",
                                                                              "color" => "#111111",
                                                                              "align" => "end",
                                                                              "wrap" => true,
                                                                              "flex" => 2
                                                                        ]
                                                                  ]
                                                            ],
                                                            [
                                                                  "type" => "box",
                                                                  "layout" => "horizontal",
                                                                  "contents" => [
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => "Itinerary",
                                                                              "size" => "sm",
                                                                              "color" => "#555555",
                                                                              "flex" => 0
                                                                        ],
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => $itineraryTitle,
                                                                              "size" => "sm",
                                                                              "color" => "#111111",
                                                                              "align" => "end",
                                                                              "wrap" => true
                                                                        ]
                                                                  ]
                                                            ],
                                                            [
                                                                  "type" => "box",
                                                                  "layout" => "horizontal",
                                                                  "contents" => [
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => "Date",
                                                                              "size" => "sm",
                                                                              "color" => "#555555",
                                                                              "flex" => 0
                                                                        ],
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => $tourDate,
                                                                              "size" => "sm",
                                                                              "color" => "#111111",
                                                                              "align" => "end"
                                                                        ]
                                                                  ]
                                                            ],
                                                      ]
                                                ],
                                                [
                                                      "type" => "separator",
                                                      "margin" => "xxl"
                                                ],
                                                [
                                                      "type" => "box",
                                                      "layout" => "vertical",
                                                      "margin" => "xxl",
                                                      "spacing" => "sm",
                                                      "contents" => [
                                                            [
                                                                  "type" => "box",
                                                                  "layout" => "horizontal",
                                                                  "contents" => [
                                                                        [
                                                                              "type" => "text",
                                                                              "text" =>  "Adults (" . $adultNumber . ")",
                                                                              "size" => "sm",
                                                                              "color" => "#555555",
                                                                              "flex" => 0
                                                                        ],
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => "¥" . number_format($adultPrice),
                                                                              "size" => "sm",
                                                                              "color" => "#111111",
                                                                              "align" => "end",
                                                                              "wrap" => true
                                                                        ]
                                                                  ]
                                                            ],
                                                            [
                                                                  "type" => "box",
                                                                  "layout" => "horizontal",
                                                                  "contents" => [
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => "Children (" . $childrenNumber . ")",
                                                                              "size" => "sm",
                                                                              "color" => "#555555",
                                                                              "flex" => 0
                                                                        ],
                                                                        [
                                                                              "type" => "text",
                                                                              "text" => "¥" . number_format($childrenPrice),
                                                                              "size" => "sm",
                                                                              "color" => "#111111",
                                                                              "align" => "end",
                                                                              "wrap" => true
                                                                        ]
                                                                  ]
                                                            ],
                                                      ]
                                                ],
                                                [
                                                      "type" => "separator",
                                                      "margin" => "xxl"
                                                ],
                                                [
                                                      "type" => "box",
                                                      "layout" => "horizontal",
                                                      "backgroundColor" => "#f0f8ff",
                                                      "paddingAll" => "md",
                                                      "cornerRadius" => "md",
                                                      "contents" => [
                                                            [
                                                                  "type" => "text",
                                                                  "text" => "TOTAL",
                                                                  "size" => "md",
                                                                  "color" => "#1DB446",
                                                                  "weight" => "bold"
                                                            ],
                                                            [
                                                                  "type" => "text",
                                                                  "text" => "¥" . number_format($adultPrice + $childrenPrice),
                                                                  "size" => "xl",
                                                                  "color" => "#1DB446",
                                                                  "weight" => "bold",
                                                                  "align" => "end"
                                                            ]
                                                      ]
                                                ]
                                          ]
                                    ]
                              ]
                        ]
                  ]
            ];

            return $data;
      }
}