<!DOCTYPE html>
<html lang="en">

<head>
      @include('components.head')

      <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

      * {
            font-family: 'Inter', sans-serif;
      }

      .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
      }

      .gradient-text {
            background: linear-gradient(135deg, #e92929 0%, #ff6b6b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
      }

      .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      }

      .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
      }

      .smooth-shadow {
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      }

      .smooth-shadow-lg {
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
      }

      @keyframes fadeIn {
            from {
                  opacity: 0;
                  transform: translateY(20px);
            }

            to {
                  opacity: 1;
                  transform: translateY(0);
            }
      }

      .fade-in {
            animation: fadeIn 0.6s ease-out forwards;
      }

      .timeline-line {
            background: linear-gradient(180deg, #e92929 0%, #ff6b6b 100%);
      }
      </style>
</head>

<body>
      <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
            style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
            <!-- Minimal Header -->
           @include('components.nav')


            <!-- Hero Section - Full Screen -->
            <section class="flex justify-center" id="tour">
                  <div class="layout-content-container flex flex-col max-w-[1900px] flex-1">
                        <div class="@container">
                        <div class="@[480px]:p-4">
                              <div id="hero" class="relative flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4 overflow-hidden">
                                    <img src="{{ asset('storage/' . $tour[0]->hero_image) }}" alt="{{ $tour[0]->title }}" class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-100 z-0 w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>
                                    <!-- Badge -->
                                    <div class="relative z-10 inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                                          <i class="fas fa-fire text-yellow-400"></i>
                                          <span class="text-sm font-medium text-white">Bestseller</span>
                                    </div>

                                    <!-- テキストとボタン -->
                                    <div class="relative z-10 flex flex-col gap-2 text-center">
                                          <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                                                {{$tour[0]->title}}
                                          </h1>
                                          <h2 class="text-white text-base font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                                {{$tour[0]->subtitle}}
                                          </h2>
                                    </div>

                                    <a href="{{route("tour.book", $tour[0]->id)}}" class="relative z-10 flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#e92929] text-[#fcf8f8] text-base font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                                          <span class="truncate">Reserve Your Spot - ¥12,000</span>
                                    </a>
                              </div>
                        </div>
                        </div>
                  </div>
            </section>

            <!-- Quick Stats Bar -->
            {{-- <section class="bg-gray-50 py-8 border-y">
                  <div class="container mx-auto px-4">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                              <div class="text-center">
                                    <div class="text-3xl font-bold text-[#e92929]">98%</div>
                                    <p class="text-gray-600 test-base mt-1">Satisfaction Rate</p>
                              </div>
                              <div class="text-center">
                                    <div class="text-3xl font-bold text-[#e92929]">2,500+</div>
                                    <p class="text-gray-600 test-base mt-1">Happy Travelers</p>
                              </div>
                              <div class="text-center">
                                    <div class="text-3xl font-bold text-[#e92929]">5</div>
                                    <p class="text-gray-600 test-base mt-1">Major Attractions</p>
                              </div>
                              <div class="text-center">
                                    <div class="text-3xl font-bold text-[#e92929]">1</div>
                                    <p class="text-gray-600 test-base mt-1">Unforgettable Day</p>
                              </div>
                        </div>
                  </div>
            </section> --}}

            <!-- Overview Section -->
            <section id="overview" class="my-20 pb-20 max-w-[1100px] m-auto">
                  <div class="container mx-auto px-4">
                        <div class="grid grid-cols-1 [@media(min-width:900px)]:grid-cols-2 gap-12 items-center">
                              <div>
                                    <h2 class="text-[25px] sm:text-3xl font-bold mb-6">{{$tour[0]->overview_title}}</h2>
                                    <p class="text-gray-600 text-base font-normal mb-6">
                                          {{$tour[0]->overview_description}}
                                    </p>

                                    <div class="space-y-4 mb-8">
                                          @foreach ($tour[0]->tourHighlights as $highlight)
                                                <div class="flex items-start gap-4">
                                                      <div
                                                            class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                                            <i class="fas fa-torii-gate text-[#e92929]"></i>
                                                      </div>
                                                      <div>
                                                            <h4 className="font-semibold mb-1">{{$highlight->title}}</h4>
                                                            <p class="text-gray-600 test-base">{{$highlight->description}}</p>
                                                      </div>
                                                </div>
                                          @endforeach
                                    </div>
                              </div>

                              <div class="relative hidden [@media(min-width:900px)]:block" >
                                    <img src="https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?w=600&h=700&fit=crop"
                                          alt="Senso-ji Temple" class="rounded-2xl shadow-2xl">
                              </div>
                        </div>
                  </div>
            </section>

            <!-- Tour Selection with Modern Cards -->
            <section id="itineraries" class="py-20 -mt-20  bg-gray-50 ">
                  <div class="mx-auto px-4 max-w-[1100px] m-auto">
                        <div class="text-center mb-12">
                              <h2 class="text-[25px] sm:text-3xl font-bold text-gray-800 mb-4 text-left sm:text-center">Choose Your {{$tour[0]->category["category"]}} Adventure</h2>
                              <p class="text-gray-600 text-base max-w-2xl mx-auto text-left sm:text-center">
                                    From cultural experiences to food tours, we have the perfect journey waiting for you
                              </p>
                        </div>

                        <!-- Tour Cards -->
                        <div class="grid md:grid-cols-3 gap-8 ">
                              @foreach ($tour[0]->itineraries as $index => $itinerary)
                                    <div class="bg-white rounded-2xl overflow-hidden smooth-shadow-lg card-hover cursor-pointer"
                                          onclick="showTourDetails({{$index }})">
                                          <div class="relative h-48 overflow-hidden">
                                                <img src="{{ asset('storage/' . $itinerary->image) }}" alt="{{ $tour[0]->title }}" class="w-full h-full object-cover">
                                                <div class="absolute bottom-4 right-4">
                                                      <div class="bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2">
                                                            <span class="text-xl font-bold text-gray-800">¥{{$itinerary["adult_price"]}}~</span>
                                                      </div>
                                                </div>
                                          </div>

                                          <div class="p-4">
                                                <h3 class="text-xl font-bold text-gray-800 mb-2">{{$itinerary->overview_title}}</h3>
                                                <p class="text-gray-600 mb-4 line-clamp-3 text-sm">
                                                      {{$itinerary->overview_description}}
                                                </p>

                                                <div class="flex items-center justify-between mb-4">
                                                      <div class="flex items-center gap-4 test-sm text-gray-500">
                                                            <span class="text-sm">
                                                                  <i class="fas fa-clock text-[#e92929]"></i>
                                                                  {{$itinerary->duration}}hours
                                                            </span>
                                                            <span class="text-sm">
                                                                  <i class="fas fa-users text-[#e92929]"></i>
                                                                  Max {{$itinerary->max_participants}}
                                                            </span>
                                                      </div>
                                                </div>

                                                <div class="flex flex-wrap gap-2 mb-4">
                                                      @foreach ($itinerary["itineraryHighlights"] as $highlight)
                                                      <span
                                                            class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">{{$highlight["itinerary_highlight"]}}</span>
                                                      @endforeach
                                                </div>

                                                <button
                                                      class="w-full bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white py-3 rounded-xl text-sm font-semibold hover:shadow-lg transition-all">
                                                      View Details <i class="fas fa-arrow-right ml-2"></i>
                                                </button>
                                          </div>
                                    </div>
                              @endforeach
                        </div>
                  </div>
            </section>
            <!-- Tour Details Modal-style Section -->
            <div id="tour-details-modal" class="fixed inset-0 z-50 hidden">
                  <div class="absolute inset-0 bg-black/50" onclick="closeTourDetails()"></div>
                  <div class="absolute right-0 top-0 h-full w-full max-w-3xl bg-white overflow-y-auto">
                        <div id="tour-details-content">
                              <!-- Details will be inserted here -->
                        </div>
                  </div>
            </div>

            <!-- Gallery Section - Masonry Grid -->
            <section id="gallery" class="py-10">
                  <div class="container mx-auto px-4">
                        <div class="text-center mb-12">
                              <h2 class="text-[25px] sm:text-3xl font-bold mb-2 text-left sm:text-center">Gallery</h2>
                              <p class="text-gray-600 text-base text-left sm:text-center">A visual journey through our tour highlights</p>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-4 max-w-[1100px] mx-auto sm:px-4">
                              <!-- 左列 -->
                              <div class="space-y-1 sm:space-y-2">
                                    <div class="w-full aspect-[3/4] sm:h-[400px] lg:h-[500px]">
                                          <img src="{{ asset('storage/' . $tour[0]->tourGalleryImages[0]['gallery_image']) }}" 
                                          alt="Gallery" 
                                          class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer w-full h-full object-cover">
                                    </div>
                                    <div class="w-full aspect-[5/4] sm:h-[250px] lg:h-[300px]">
                                          <img src="{{ asset('storage/' . $tour[0]->tourGalleryImages[1]['gallery_image']) }}" 
                                          alt="Gallery" 
                                          class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer w-full h-full object-cover">
                                    </div>
                              </div>
                              
                              <!-- 中央列 -->
                              <div class="space-y-1 sm:space-y-2">
                                    <div class="w-full aspect-[5/4] sm:h-[250px] lg:h-[300px]">
                                          <img src="{{ asset('storage/' . $tour[0]->tourGalleryImages[2]['gallery_image']) }}" 
                                          alt="Gallery" 
                                          class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer w-full h-full object-cover">
                                    </div>
                                    <div class="w-full aspect-[3/4] sm:h-[400px] lg:h-[500px]">
                                          <img src="{{ asset('storage/' . $tour[0]->tourGalleryImages[3]['gallery_image']) }}" 
                                          alt="Gallery" 
                                          class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer w-full h-full object-cover">
                                    </div>
                              </div>
                              
                              <!-- 右列 -->
                              <div class="space-y-1 sm:space-y-2 sm:col-span-2 lg:col-span-1">
                                    <div class="w-full aspect-square sm:h-[320px] lg:h-[400px]">
                                          <img src="{{ asset('storage/' . $tour[0]->tourGalleryImages[4]['gallery_image']) }}" 
                                          alt="Gallery" 
                                          class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer w-full h-full object-cover">
                                    </div>
                                    <div class="w-full aspect-square sm:h-[320px] lg:h-[400px]">
                                          <img src="{{ asset('storage/' . $tour[0]->tourGalleryImages[5]['gallery_image']) }}" 
                                          alt="Gallery" 
                                          class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer w-full h-full object-cover">
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>

            <!-- Reviews Section - Card Style -->
            <section id="reviews" class="py-10 bg-gray-50">
                  <div class="container mx-auto px-4">
                        <div class="text-center mb-10">
                              <h2 class="text-[25px] sm:text-3xl font-bold mb-4">What Our Travelers Say</h2>
                              <div class="hidden sm:flex items-center justify-center gap-4">
                                    <div class="flex gap-1">
                                          <i class="fas fa-star text-yellow-400 text-xl"></i>
                                          <i class="fas fa-star text-yellow-400 text-xl"></i>
                                          <i class="fas fa-star text-yellow-400 text-xl"></i>
                                          <i class="fas fa-star text-yellow-400 text-xl"></i>
                                          <i class="fas fa-star-half-alt text-yellow-400 text-xl"></i>
                                    </div>
                                    <span class="text-2xl font-bold">4.8</span>
                                    <span class="text-gray-600">from {{count($tour[0]->tourReviews)}}reviews</span>
                              </div>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                              @foreach ($tour[0]->tourReviews as $review)
                                   
                                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                                          <div class="flex items-center gap-4 mb-4">
                                                <div>
                                                      <h4 class="font-semibold">{{ $review->name }}</h4>
                                                      <div class="flex gap-1">
                                                                  @php
                                                                  $emptyStar = 5 - intval($review->rating);
                                                                  for ($i = 0; $i < $review->rating; $i++) {
                                                                        echo '<i class="fas fa-star text-yellow-400 text-xs"></i>';
                                                                  }
                                                                  for ($i = 0; $i < $emptyStar; $i++) {
                                                                        echo '<i class="fa-regular fa-star text-yellow-400 text-xs"></i>';
                                                                  }
                                                            @endphp
                                                      </div>
                                                </div>
                                          </div>

                                          <div class="review-content mb-4">
                                                <p class="text-gray-600 review-text line-clamp-6">{{ $review->content }}</p>
                                                @if(strlen($review->content) > 200)
                                                      <button class="see-more-btn mt-2 text-blue-600 hover:text-blue-800 font-medium text-sm transition-colors focus:outline-none">
                                                            See more
                                                      </button>
                                                      <button class="see-less-btn mt-2 text-blue-600 hover:text-blue-800 font-medium text-sm transition-colors focus:outline-none hidden">
                                                            See less
                                                      </button>
                                                @endif
                                          </div>

                                          <p class="text-base text-gray-400">{{ \Carbon\Carbon::parse($review->date)->format('F j, Y') }}</p>
                                    </div>
                              @endforeach

                        </div>
            </section>

            <!-- Booking Section - Floating Card -->
            <section class="py-12 sm:py-16 lg:py-20">
                  <div class="container mx-auto px-4">
                        <div class="bg-gradient-to-r from-[#e92929] to-[#f04040] rounded-2xl p-6 sm:p-8 lg:p-12 text-white relative overflow-hidden">
                              <!-- 装飾的な背景要素 -->
                              <div class="absolute top-0 right-0 w-32 h-32 sm:w-48 sm:h-48 lg:w-64 lg:h-64 bg-white/10 rounded-full -mr-16 -mt-16 sm:-mr-24 sm:-mt-24 lg:-mr-32 lg:-mt-32"></div>
                              <div class="absolute bottom-0 left-0 w-24 h-24 sm:w-32 sm:h-32 lg:w-48 lg:h-48 bg-white/10 rounded-full -ml-12 -mb-12 sm:-ml-16 sm:-mb-16 lg:-ml-24 lg:-mb-24"></div>

                              <div class="relative z-10 max-w-4xl mx-auto">
                                    <!-- ヘッダー -->
                                    <div class="text-center mb-8">
                                          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4">
                                                Ready to Explore Tokyo?
                                          </h2>
                                          <p class="text-lg sm:text-xl opacity-90 max-w-2xl mx-auto">
                                                Limited spots available for the upcoming season. Book now and save 20%!
                                          </p>
                                    </div>

                                    <!-- 予約フォーム -->
                                    <div class="bg-white/20 backdrop-blur-sm rounded-xl p-4 sm:p-6 lg:p-8 max-w-3xl mx-auto">
                                          <!-- 日付とゲスト選択 -->
                                          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mb-6">
                                                <div>
                                                      <label class="text-sm sm:text-base opacity-80 block mb-2">Select Date</label>
                                                      <div class="bg-white/20 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-white/30 transition-colors">
                                                            <span class="text-sm sm:text-base">April 15, 2025</span>
                                                            <i class="fas fa-calendar-alt text-sm sm:text-base"></i>
                                                      </div>
                                                </div>
                                                <div>
                                                      <label class="text-sm sm:text-base opacity-80 block mb-2">Number of Guests</label>
                                                      <div class="bg-white/20 rounded-lg px-4 py-3 flex items-center justify-between">
                                                            <button class="hover:bg-white/20 w-8 h-8 rounded-full transition-colors flex items-center justify-center">
                                                                  <span class="text-lg">-</span>
                                                            </button>
                                                            <span class="text-sm sm:text-base">2 Adults</span>
                                                            <button class="hover:bg-white/20 w-8 h-8 rounded-full transition-colors flex items-center justify-center">
                                                                  <span class="text-lg">+</span>
                                                            </button>
                                                      </div>
                                                </div>
                                          </div>

                                          <!-- 価格と予約ボタン -->
                                          <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-6">
                                                <div class="text-center sm:text-left">
                                                      <p class="text-sm sm:text-base opacity-80">Total Price</p>
                                                      <div class="flex items-center gap-3 justify-center sm:justify-start">
                                                            <p class="text-2xl sm:text-3xl font-bold">¥24,000</p>
                                                            <p class="text-sm sm:text-base opacity-80 line-through">¥30,000</p>
                                                      </div>
                                                </div>
                                                <button class="bg-white text-[#e92929] px-6 sm:px-8 py-3 sm:py-4 rounded-full font-bold hover:scale-105 transition-transform text-sm sm:text-base w-full sm:w-auto">
                                                      Book Now & Save 20%
                                                </button>
                                          </div>

                                          <!-- キャンセルポリシー -->
                                          <div class="text-center">
                                                <p class="text-xs sm:text-sm opacity-80 flex items-center justify-center gap-2">
                                                      <i class="fas fa-shield-alt"></i>
                                                      <span>Free cancellation up to 24 hours before the tour</span>
                                                </p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>


            <section id="faq" class="flex justify-center py-12 bg-[#f3e7e7]">
                  <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        <h2 class="text-[25px] sm:text-3xl font-bold text-gray-800 mb-4 text-center"> Frequently Asked Questions</h2>
                        <div class="flex flex-col p-4 gap-3">
                              @foreach ($tour[0]->tourQuestions as $qa)
                                    <details
                                          class="flex flex-col rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] px-[15px] py-[7px] group">
                                          <summary class="cursor-pointer list-none appearance-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                                                <p class="text-[#1b0e0e] test-base font-medium leading-normal">{{$qa["question"]}}</p>
                                                <div class="text-[#1b0e0e] group-open:rotate-180 transition-transform"
                                                      data-icon="CaretDown" data-size="20px" data-weight="regular">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                            fill="currentColor" viewBox="0 0 256 256">
                                                            <path
                                                                  d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                                                            </path>
                                                      </svg>
                                                </div>
                                          </summary>
                                          <p class="text-[#994d4d] test-base font-normal leading-normal pt-2 pb-2">{{$qa["answer"]}}</p>
                                    </details>
                              @endforeach
                              
                        </div>
                  </div>
            </section>

            <!-- Footer -->
            @include('components.footer')
      </div>
      <script src="{{mix("js/common.js")}}"></script>
      <script>
            
            // Smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                  anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                              const headerOffset = 80;
                              const elementPosition = target.getBoundingClientRect().top;
                              const offsetPosition = elementPosition + window.pageYOffset -
                                    headerOffset;

                              window.scrollTo({
                                    top: offsetPosition,
                                    behavior: 'smooth'
                              });
                        }
                  });
            });

            // Gallery lightbox (simplified)
            document.querySelectorAll('#gallery img').forEach(img => {
                  img.addEventListener('click', function() {
                        // You can implement a lightbox here
                        console.log('Image clicked:', this.src);
                  });
            });
      </script>
      <script>
      // Tour details data
      const tourDetails = @json($tour[0]->itineraries);


      function showTourDetails(tourType) {
            const tour = tourDetails[tourType];
            console.log(tour);
            
            const modal = document.getElementById('tour-details-modal');
            const content = document.getElementById('tour-details-content');
            const languages = tour.itinerary_languages.reduce((acc, current)=>{
                  acc += `${current.language.language}, `
                  return acc
            }, "")


            // Generate timeline HTML
            const timelineHTML = tour.itinerary_activities.map((item, index) => {
                  return `
                        <div class="flex gap-4 relative">
                              <div class="flex flex-col items-center">
                                    <div class="w-12 h-12 bg-gradient-to-r from-[#e92929] to-[#ff6b6b] rounded-full flex items-center justify-center text-white z-10">
                                          <i class="fas ${item.activity_icon}"></i>
                                    </div>
                                    ${index < tour.itinerary_activities.length - 1 ? '<div class="w-0.5 h-full timeline-line mt-2"></div>' : ''}
                              </div>
                              <div class="flex-1 pb-8">
                                    <div class="bg-gray-50 rounded-xl p-4">
                                          <div class="flex justify-between items-start mb-2">
                                                <h4 class="font-semibold text-gray-800">${item.activity_title}</h4>
                              
                                          </div>
                                          <p class="text-gray-600 test-base">${item.activity_description}</p>
                                    </div>
                              </div>
                        </div>
                  `
            }).join('');

            content.innerHTML = `
                  <div class="relative">
                        <button onclick="closeTourDetails()" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-all">
                              <i class="fas fa-times text-gray-600"></i>
                        </button>
                        
                        <div class="relative h-64 overflow-hidden">
                              <img src="/storage/${tour.image}" alt="${tour.overview_title}" class="w-full h-full object-cover">
                              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                              <div class="absolute bottom-6 left-6 text-white">
                              <h2 class="text-3xl font-bold mb-2">${tour.overview_title}</h2>
                              </div>
                        </div>
                        
                        <div class="py-6 px-3 md:p-6">
                              <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-3">
                                    <div>
                                          <span class="text-3xl font-bold text-gray-800">￥${tour.adult_price}</span>
                                          <span class="text-gray-600 ml-2">per person</span>
                                    </div>
                                    <div class="flex items-center gap-4 text-gray-600">
                                          <span><i class="fas fa-clock text-[#e92929]"></i> ${tour.duration} hours</span>
                                          <span><i class="fas fa-users text-[#e92929]"></i> Private tour</span>
                                    </div>
                              </div>
                              
                              <p class="text-gray-600 mb-6">${tour.overview_description}</p>
                              
                              <div class="bg-gradient-to-r from-[#e92929]/10 to-[#ff6b6b]/10 rounded-xl p-6 mb-6">
                              <h3 class="font-semibold text-gray-800 mb-3">Tour Highlights</h3>
                              <ul class="space-y-2">
                                    ${tour.itinerary_highlights.map(highlight => `
                                          <li class="flex items-center gap-2 text-gray-700">
                                          <i class="fas fa-check-circle text-[#e92929]"></i>
                                          <span>${highlight["itinerary_highlight"]}</span>
                                          </li>
                                    `).join('')}
                              </ul>
                              </div>
                              
                              <h3 class="font-semibold text-gray-800 mb-4">Tour Schedule</h3>
                              <div class="mb-6">
                              ${timelineHTML}
                              </div>
                              
                              <div class="grid grid-cols-2 gap-4 mb-6">
                              <div class="bg-gray-50 rounded-xl p-4">
                                    <h4 class="font-semibold text-gray-800 mb-2">Meeting Point</h4>
                                    <p class="text-gray-600 test-base">${tour["meeting_point"]}</p>
                              </div>
                              <div class="bg-gray-50 rounded-xl p-4">
                                    <h4 class="font-semibold text-gray-800 mb-2">Languages</h4>
                                    <p class="text-gray-600 test-base">${languages}</p>
                              </div>
                              </div>
                              
                              <button class="w-full bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white py-4 rounded-xl font-semibold hover:shadow-lg transition-all">
                              Book This Tour Now
                              </button>
                              
                              <p class="text-center test-base text-gray-500 mt-4">
                              <i class="fas fa-shield-alt mr-2"></i>
                              Free cancellation up to 24 hours before the tour
                              </p>
                        </div>
                  </div>
            `;

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
      }

      function closeTourDetails() {
            document.getElementById('tour-details-modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
      }


      // Header scroll effect
      window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                  header.classList.add('shadow-lg');
            } else {
                  header.classList.remove('shadow-lg');
            }
      });
      </script>

      <style>
      /* Custom animations */
      @keyframes bounce {

            0%,
            100% {
                  transform: translateY(0);
            }

            50% {
                  transform: translateY(-10px);
            }
      }

      .animate-bounce {
            animation: bounce 2s infinite;
      }

      /* Smooth transitions */
      * {
            transition-property: transform, opacity;
            transition-duration: 0.3s;
            transition-timing-function: ease-out;
      }

      /* Custom scrollbar */
      ::-webkit-scrollbar {
            width: 10px;
      }

      ::-webkit-scrollbar-track {
            background: #f1f1f1;
      }

      ::-webkit-scrollbar-thumb {
            background: #e92929;
            border-radius: 5px;
      }

      ::-webkit-scrollbar-thumb:hover {
            background: #d61f1f;
      }
      </style>
      <script>
            document.addEventListener('DOMContentLoaded', function() {
                  // See more/See less機能
                  document.addEventListener('click', function(e) {
                  if (e.target.classList.contains('see-more-btn')) {
                        const reviewContent = e.target.closest('.review-content');
                        const reviewText = reviewContent.querySelector('.review-text');
                        const seeMoreBtn = reviewContent.querySelector('.see-more-btn');
                        const seeLessBtn = reviewContent.querySelector('.see-less-btn');
                        
                        // line-clampを削除して全文表示
                        reviewText.classList.remove('line-clamp-6');
                        
                        // ボタンを切り替え
                        seeMoreBtn.classList.add('hidden');
                        seeLessBtn.classList.remove('hidden');
                  }
                  
                  if (e.target.classList.contains('see-less-btn')) {
                        const reviewContent = e.target.closest('.review-content');
                        const reviewText = reviewContent.querySelector('.review-text');
                        const seeMoreBtn = reviewContent.querySelector('.see-more-btn');
                        const seeLessBtn = reviewContent.querySelector('.see-less-btn');
                        
                        // line-clampを追加して省略表示
                        reviewText.classList.add('line-clamp-6');
                        
                        // ボタンを切り替え
                        seeLessBtn.classList.add('hidden');
                        seeMoreBtn.classList.remove('hidden');
                  }
                  });
            });
      </script>
</body>

</html>