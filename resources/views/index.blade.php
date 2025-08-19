<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>ShogunTours</title>
      <!-- 検索用キーワード -->
      <meta name="keywords"
            content="ShogunTours, ShogunTours-official, Japan tour, tokyo tour, Tokyo travel, Kyoto experience, Osaka trip, Japanese culture, foreign tourist guide, Japan travel package, Mt. Fuji tour, onsen experience, Japan sightseeing">
      <!-- robots設定 -->
      <!-- カノニカルURL設定 -->
      <meta rel="canonical" href="https://shoguntoursjapan.com/">
      <meta name="robots" content="index,follow">
      <!-- OGP設定（SNSでシェアされた時の表示設定） -->
      <meta property="og:title" content="ShogunTours">
      <meta property="og:type" content="website">
      <meta name="description"
            content="Specialized travel service for international tourists visiting Japan. We offer multilingual tours exploring Tokyo, Kyoto, Osaka and beyond. Let us guide you through traditional cultural experiences to cutting-edge technology, supporting you in discovering all of Japan's wonders.">
      <meta property="og:url" content="https://shoguntoursjapan.com/">
      <meta property="og:image" content="{{asset("img/logo2.png")}}">
      <meta property="og:site_name" content="ShogunTours">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
      <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
            href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
      <link rel="shortcut icon" href="{{asset("img/logo2.png")}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
      <!-- sending view -->
      @include("sending")
      <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root overflow-x-hidden js_main"
            style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
            
                  <nav class="bg-[#fcf8f8] border-b border-solid border-b-[#f3e7e7]">
                        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                              <div class="relative flex h-16 items-center justify-between">
                                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                                          <!-- Mobile menu button-->
                                          <button type="button" aria-controls="mobile-menu" aria-expanded="false" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset">
                                                <span class="absolute -inset-0.5"></span>
                                                <span class="sr-only">Open main menu</span>
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="block size-6">
                                                      <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="hidden size-6">
                                                      <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                          </button>
                                    </div>
                                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between">
                                          <div class="flex shrink-0 items-center justify-center gap-3 text-[#1b0e0e]">
                                                <div class="size-8 items-center flex justify-center">
                                                      <img src="{{asset("img/logo2.png")}}" alt="">
                                                </div>
                                                <h2 class="text-[#1b0e0e] text-lg font-bold leading-tight tracking-[-0.015em]">ShogunTours</h2>
                                          </div>
                                          <div class="hidden sm:ml-6 sm:flex items-center justify-center">
                                                <div class="flex space-x-4 items-center justify-center">
                                                      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                                      <a href="#tours"  class="text-[#1b0e0e] test-base font-medium leading-normal hover:text-[#e92929] transition-colors">Tours</a>
                                                      <a href="#instagram" class="text-[#1b0e0e] test-base font-medium leading-normal hover:text-[#e92929] transition-colors">Gallery</a>
                                                      <a href="#blog" class="text-[#1b0e0e] test-base font-medium leading-normal hover:text-[#e92929] transition-colors">Blog</a>
                                                      <a href="#faq" class="text-[#1b0e0e] test-base font-medium leading-normal hover:text-[#e92929] transition-colors">FAQ</a>
                                                      <a href="#contact" class="text-[#1b0e0e] test-base font-medium leading-normal hover:text-[#e92929] transition-colors">Contact</a>
                                                      <button
                                                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#e92929] text-[#fcf8f8] test-base font-bold leading-normal tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                                                            <span class="truncate">Book Now</span>
                                                      </button>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <!-- Mobile menu, show/hide based on menu state. -->
                        <div id="mobile-menu" class="sm:hidden hidden transition-all duration-300 ease-out overflow-hidden max-h-0">
                              <div class="space-y-1 px-2 pt-2 pb-3">
                                    <a href="#tours" class="block rounded-md px-3 py-2 text-base font-medium text-[#1b0e0e] hover:bg-gray-800 hover:text-white">Tours</a>
                                    <a href="#instagram" class="block rounded-md px-3 py-2 text-base font-medium text-[#1b0e0e] hover:bg-gray-800 hover:text-white">Gallery</a>
                                    <a href="#blog" class="block rounded-md px-3 py-2 text-base font-medium text-[#1b0e0e] hover:bg-gray-800 hover:text-white">Blog</a>
                                    <a href="#faq" class="block rounded-md px-3 py-2 text-base font-medium text-[#1b0e0e] hover:bg-gray-800 hover:text-white">FAQ</a>
                                    <a href="#contact" class="block rounded-md px-3 py-2 text-base font-medium text-[#1b0e0e] hover:bg-gray-800 hover:text-white">Contact</a>
                              </div>
                        </div>

                  </nav>


                  <!-- Hero Section -->
                  <div class="flex justify-center">
                        <div class="layout-content-container flex flex-col max-w-[1900px] flex-1">
                              <div class="@container">
                                    <div class="@[480px]:p-4">
                                          <div id="hero" class="relative flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4 overflow-hidden">
                                                
                                                <!-- 背景レイヤー -->
                                                <div id="bgA" class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-100 z-0"></div>
                                                <div id="bgB" class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000 opacity-0 z-0"></div>

                                                <!-- テキストとボタン -->
                                                <div class="relative z-10 flex flex-col gap-2 text-center">
                                                <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                                                      Where Legends Walked, You Follow
                                                </h1>
                                                <h2 class="text-white text-base font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                                      Step into old Japan with unforgettable tours crafted for modern explorers.
                                                </h2>
                                                </div>

                                                <a href="#tours"
                                                class="relative z-10 flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#e92929] text-[#fcf8f8] text-base font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                                                <span class="truncate">Find Your Adventure</span>
                                                </a>
                                          </div>


                                    </div>
                              </div>
                        </div>
                  </div>

                  <!-- Tours Section -->
                  <section id="tours" class="flex justify-center py-12">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <!-- Destinations Section -->
                              <div id="destinations-section">
                                    <h2
                                          class="text-[#1b0e0e] text-[25px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                          Popular Destinations</h2>
                                    <p class="text-[#994d4d] test-base font-normal leading-normal px-4 pb-3">Choose your
                                          destination and explore our amazing tours</p>

                                    <!-- Filter Tabs -->
                                    <div class="flex flex-wrap gap-2 px-4 pb-3">
                                          <button
                                                class="filter-tab active px-4 py-2 rounded-lg bg-[#e92929] text-white test-base font-medium transition-all hover:bg-[#d61f1f]"
                                                onclick="filterDestinations('all')">All Destinations</button>
                                    
                                    </div>

                                    <!-- Destinations Grid -->
                                    <div class="grid grid-cols-[repeat(auto-fit,minmax(250px,1fr))] gap-4 p-4">
                                          @foreach ($categories as $category)
                                          <div class="destination-card relative overflow-hidden rounded-lg cursor-pointer group"
                                                data-region="kanto" onclick="showTours('{{$category->category}}')">
                                                <img src="/img/{{$category->category}}_category.jpg"
                                                      alt="{{$category->category}}" class="w-full h-48 object-cover">
                                                <div
                                                      class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent group-hover:from-black/80 transition-all">
                                                      <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                                                            <h3 class="text-lg font-bold">{{$category->category}}</h3>
                                                            <p class="text-base opacity-90">
                                                                  <i class="fas fa-map-marked-alt mr-1"></i>
                                                                  {{ count($tours[$category->category] ?? []) }} Tours
                                                            </p>
                                                      </div>
                                                </div>
                                          </div>
                                          @endforeach


                                    </div>
                              </div>

                              <!-- Tours List Section (Hidden by default) -->
                              <div id="tours-list-section" class="hidden">
                                    <div class="flex items-center justify-between px-4 pb-3 pt-5">
                                          <h2
                                                class="text-[#1b0e0e] text-[20px] sm:text-[25px] font-bold leading-tight tracking-[-0.015em]">
                                                <span id="destination-name">Tokyo</span> Tours
                                          </h2>
                                          <button
                                                class="sm:flex hidden items-center gap-2 px-4 py-2 rounded-lg bg-[#f3e7e7] text-[#1b0e0e] test-base font-medium hover:bg-[#e7d0d0] transition-colors"
                                                onclick="showDestinations()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                      fill="currentColor" viewBox="0 0 256 256">
                                                      <path
                                                            d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                                                      </path>
                                                </svg>
                                                Back to Destinations
                                          </button>
                                          <button  onclick="showDestinations()" class="sm:hidden flex items-center gap-2 px-4 py-2 rounded-lg bg-[#f3e7e7] text-[#1b0e0e] test-base font-medium hover:bg-[#e7d0d0] transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                      fill="currentColor" viewBox="0 0 256 256">
                                                      <path
                                                            d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                                                      </path>
                                                </svg>
                                          </button>
                                    </div>

                                    <div id="tours-grid" class="grid grid-cols-[repeat(auto-fit,350px)] gap-4 p-4">
                                          <!-- Tours will be dynamically loaded here -->
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- Instagram Section -->
                  <section id="instagram" class="flex justify-center py-12 bg-[#f3e7e7] px-4">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <h2
                                    class="text-[#1b0e0e] text-[25px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                    Follow Our Adventures</h2>
                              <!-- LightWidget WIDGET -->
                              <!-- LightWidget WIDGET -->
                              <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe
                                    src="//lightwidget.com/widgets/520d757f035853c08e16d6504e9175bc.html" scrolling="no"
                                    allowtransparency="true" class="lightwidget-widget"
                                    style="width:100%;border:0;overflow:hidden;"></iframe>
                  </section>

                  <!-- Blog Section -->
                  <section id="blog" class="flex justify-center py-12">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <h2
                                    class="text-[#1b0e0e] text-[25px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                    Latest Articles</h2>
                              <div class="pb-4">
                                    <div class="flex flex-col sm:flex-row items-stretch gap-4 rounded-lg hover:bg-[#f3e7e7] transition-colors p-4">
                                          <!-- テキストエリア -->
                                          <div class="flex flex-col gap-4 sm:w-2/3">
                                                <div class="flex flex-col gap-1">
                                                      <p class="text-[#1b0e0e] text-base sm:text-lg font-bold leading-tight">
                                                      Exploring the Hidden Gems of the Pacific Northwest
                                                      </p>
                                                      <p class="text-[#994d4d] text-sm sm:text-base font-normal leading-normal">
                                                      Discover the untouched beauty of the Pacific Northwest, from its lush rainforests to its rugged coastlines. This guide takes you off the beaten path to find secluded spots and breathtaking views.
                                                      </p>
                                                </div>
                                                <button
                                                      class="flex min-w-[84px] max-w-[480px] items-center justify-center rounded-lg h-8 px-4 bg-[#f3e7e7] text-[#1b0e0e] text-sm sm:text-base font-medium w-fit hover:bg-[#e7d0d0] transition-colors">
                                                      <span class="truncate">Read More</span>
                                                </button>
                                          </div>

                                          <!-- 画像エリア -->
                                          <div class="w-full sm:w-1/3 aspect-video bg-center bg-no-repeat bg-cover rounded-lg"
                                                style='background-image: url("https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?w=400&h=300&fit=crop");'>
                                          </div>
                                    </div>
                              </div>
                              <div class="pb-4">
                                    <div class="flex flex-col sm:flex-row items-stretch gap-4 rounded-lg hover:bg-[#f3e7e7] transition-colors p-4">
                                          <!-- テキストエリア -->
                                          <div class="flex flex-col gap-4 sm:w-2/3">
                                                <div class="flex flex-col gap-1">
                                                      <p class="text-[#1b0e0e] text-base sm:text-lg font-bold leading-tight">
                                                      Exploring the Hidden Gems of the Pacific Northwest
                                                      </p>
                                                      <p class="text-[#994d4d] text-sm sm:text-base font-normal leading-normal">
                                                      Discover the untouched beauty of the Pacific Northwest, from its lush rainforests to its rugged coastlines. This guide takes you off the beaten path to find secluded spots and breathtaking views.
                                                      </p>
                                                </div>
                                                <button
                                                      class="flex min-w-[84px] max-w-[480px] items-center justify-center rounded-lg h-8 px-4 bg-[#f3e7e7] text-[#1b0e0e] text-sm sm:text-base font-medium w-fit hover:bg-[#e7d0d0] transition-colors">
                                                      <span class="truncate">Read More</span>
                                                </button>
                                          </div>

                                          <!-- 画像エリア -->
                                          <div class="w-full sm:w-1/3 aspect-video bg-center bg-no-repeat bg-cover rounded-lg"
                                                style='background-image: url("https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?w=400&h=300&fit=crop");'>
                                          </div>
                                    </div>
                              </div>
                              <div class="pb-4">
                                    <div class="flex flex-col sm:flex-row items-stretch gap-4 rounded-lg hover:bg-[#f3e7e7] transition-colors p-4">
                                          <!-- テキストエリア -->
                                          <div class="flex flex-col gap-4 sm:w-2/3">
                                                <div class="flex flex-col gap-1">
                                                      <p class="text-[#1b0e0e] text-base sm:text-lg font-bold leading-tight">
                                                      Exploring the Hidden Gems of the Pacific Northwest
                                                      </p>
                                                      <p class="text-[#994d4d] text-sm sm:text-base font-normal leading-normal">
                                                      Discover the untouched beauty of the Pacific Northwest, from its lush rainforests to its rugged coastlines. This guide takes you off the beaten path to find secluded spots and breathtaking views.
                                                      </p>
                                                </div>
                                                <button
                                                      class="flex min-w-[84px] max-w-[480px] items-center justify-center rounded-lg h-8 px-4 bg-[#f3e7e7] text-[#1b0e0e] text-sm sm:text-base font-medium w-fit hover:bg-[#e7d0d0] transition-colors">
                                                      <span class="truncate">Read More</span>
                                                </button>
                                          </div>

                                          <!-- 画像エリア -->
                                          <div class="w-full sm:w-1/3 aspect-video bg-center bg-no-repeat bg-cover rounded-lg"
                                                style='background-image: url("https://images.unsplash.com/photo-1442850473887-0fb77cd0b337?w=400&h=300&fit=crop");'>
                                          </div>
                                    </div>
                              </div>

                        </div>
                  </section>

                  <!-- FAQ Section -->
                  <section id="faq" class="flex justify-center py-12 bg-[#f3e7e7]">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <h2
                                    class="text-[#1b0e0e] text-[25px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                    Frequently Asked Questions</h2>
                              <div class="flex flex-col p-4 gap-3">
                                    <details
                                          class="flex flex-col rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] px-[15px] py-[7px] group">
                                           <summary class="cursor-pointer list-none appearance-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                                                <p class="text-[#1b0e0e] test-base font-medium leading-normal">⁠What
                                                      areas
                                                      do your tours cover?
                                                </p>
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
                                          <p class="text-[#994d4d] test-base font-normal leading-normal pt-2 pb-2">We offer
                                                unforgettable tours across Tokyo, Yokohama, Kamakura, Enoshima, Kyoto,
                                                Osaka, Nara, Matsumoto, and the scenic Nakasendo trail. From historic
                                                temples to modern cityscapes and countryside charm — we’ve got Japan
                                                covered.
                                          </p>
                                    </details>
                                    <details
                                          class="flex flex-col rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] px-[15px] py-[7px] group">
                                           <summary class="cursor-pointer list-none appearance-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                                                <p class="text-[#1b0e0e] test-base font-medium leading-normal">Can we
                                                      customize our tour itinerary?</p>
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
                                          <p class="text-[#994d4d] test-base font-normal leading-normal pt-2 pb-2">
                                                Absolutely!
                                                All our private tours are fully customizable. Let us know your
                                                interests, preferred pace, and any must-see spots — we’ll craft a unique
                                                experience just for you.
                                          </p>
                                    </details>
                                    <details
                                          class="flex flex-col rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] px-[15px] py-[7px] group">
                                           <summary class="cursor-pointer list-none appearance-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                                                <p class="text-[#1b0e0e] test-base font-medium leading-normal">⁠How do I
                                                      book a tour and when do I pay?
                                                </p>
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
                                          <p class="text-[#994d4d] test-base font-normal leading-normal pt-2 pb-2">You can
                                                book
                                                directly through our website or our trusted partner platforms. Feel free
                                                to contact us before booking if you'd like to discuss ideas,
                                                preferences, or questions — we're happy to help.
                                                We use a “book now, pay later” system. No payment is needed at the time
                                                of booking. Your tour guide will contact you about a week before your
                                                tour to finalize the itinerary. Payment (by credit card, cash, or other
                                                options) is then made prior to the tour date.

                                          </p>
                                    </details>
                                    <details
                                          class="flex flex-col rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] px-[15px] py-[7px] group">
                                           <summary class="cursor-pointer list-none appearance-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                                                <p class="text-[#1b0e0e] test-base font-medium leading-normal">Are your
                                                      tours family-friendly or suitable for elderly guests?
                                                </p>
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
                                          <p class="text-[#994d4d] test-base font-normal leading-normal pt-2 pb-2">Yes! Our
                                                tours are perfect for guests of all ages. We can adjust routes and
                                                pacing to suit families with kids, elderly travelers, or anyone with
                                                mobility needs.
                                                Children under 12 join for free (excluding their own transportation or
                                                meal costs).
                                          </p>
                                    </details>
                                    <details
                                          class="flex flex-col rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] px-[15px] py-[7px] group">
                                          <summary class="cursor-pointer list-none appearance-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                                                <p class="text-[#1b0e0e] test-base font-medium leading-normal">What
                                                      languages do you offer tours in?
                                                </p>
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
                                          <p class="text-[#994d4d] test-base font-normal leading-normal pt-2 pb-2">We offer
                                                tours in English, Spanish, Italian, French, German, and Russian.
                                                Please note: Language availability depends on our guide schedule, so we
                                                recommend requesting your preferred language in advance.
                                          </p>
                                    </details>
                                    <details
                                          class="flex flex-col rounded-lg border border-[#e7d0d0] bg-[#fcf8f8] px-[15px] py-[7px] group">
                                          <summary class="cursor-pointer list-none appearance-none [&::-webkit-details-marker]:hidden flex items-center justify-between">
                                                <p class="text-[#1b0e0e] test-base font-medium leading-normal">What is
                                                      your cancellation and refund policy?

                                                </p>
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
                                          <p class="text-[#994d4d] test-base font-normal leading-normal pt-2 pb-2">We
                                                understand plans can change. Here’s our cancellation policy:
                                                <li class="text-[#994d4d] test-base font-normal leading-normal pb-2">
                                                      Within 24 hours of the tour: No refund</li>
                                                <li class="text-[#994d4d] test-base font-normal leading-normal pb-2">
                                                      24–48
                                                      hours before: 50% refund</li>
                                                <li class="text-[#994d4d] test-base font-normal leading-normal pb-2">
                                                      48–72
                                                      hours before: 75% refund</li>
                                                <li class="text-[#994d4d] test-base font-normal leading-normal pb-2">4
                                                      days or more before the tour: 100% full refund</li>
                                          </p>
                                    </details>
                              </div>
                        </div>
                  </section>

                  <!-- Contact Section -->
                  <section id="contact" class="flex justify-center py-12">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <h2
                                    class="text-[#1b0e0e] text-[25px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                                    Contact Us</h2>
                              <p class="text-[#1b0e0e] text-base font-normal leading-normal pb-3 pt-1 px-4">
                                    We're here to help! Whether you have questions about our tours, need assistance with
                                    booking, or just want to chat about your travel plans, feel free to reach out.
                                    Our team is dedicated to providing you with the best possible service and ensuring
                                    your experience with us is seamless and enjoyable.
                              </p>
                              <div class="grid md:grid-cols-2 gap-8 p-4">
                                    <form action="{{route("sendMessage")}}" method="POST" class="js_form">
                                          @csrf
                                          <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
                                                <label class="flex flex-col min-w-40 flex-1">
                                                      <input placeholder="Your Name"
                                                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#1b0e0e] focus:outline-0 focus:ring-0 border-none bg-[#f3e7e7] focus:border-none h-14 placeholder:text-[#994d4d] p-4 text-base font-normal leading-normal"
                                                            value="" name="name" />
                                                </label>
                                          </div>
                                          <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
                                                <label class="flex flex-col min-w-40 flex-1">
                                                      <input placeholder="Your Email"
                                                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#1b0e0e] focus:outline-0 focus:ring-0 border-none bg-[#f3e7e7] focus:border-none h-14 placeholder:text-[#994d4d] p-4 text-base font-normal leading-normal"
                                                            value="" name="email" />
                                                </label>
                                          </div>
                                          <div class="flex max-w-[480px] flex-wrap items-end gap-4 py-3">
                                                <label class="flex flex-col min-w-40 flex-1">
                                                      <textarea placeholder="Your Message" name="body"
                                                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#1b0e0e] focus:outline-0 focus:ring-0 border-none bg-[#f3e7e7] focus:border-none min-h-36 placeholder:text-[#994d4d] p-4 text-base font-normal leading-normal"></textarea>
                                                </label>
                                          </div>
                                          <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                                          <div class="flex py-3 justify-start">
                                                <button
                                                      class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#e92929] text-[#fcf8f8] test-base font-bold leading-normal tracking-[0.015em] hover:bg-[#d61f1f] transition-colors"
                                                      type="submit" id="js_submit_btn">
                                                      <span class="truncate">Send Message</span>
                                                </button>
                                          </div>
                                    </form>
                                    <div>
                                          <h3
                                                class="text-[#1b0e0e] text-lg font-bold leading-tight tracking-[-0.015em] pb-3">
                                                Our Details</h3>
                                          <div class="flex items-center gap-4 bg-[#fcf8f8] min-h-[72px] py-2">
                                                <div class="text-[#1b0e0e] flex items-center justify-center rounded-lg bg-[#f3e7e7] shrink-0 size-12"
                                                      data-icon="MapPin" data-size="24px" data-weight="regular">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                            fill="currentColor" viewBox="0 0 256 256">
                                                            <path
                                                                  d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                                                            </path>
                                                      </svg>
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                      <p
                                                            class="text-[#1b0e0e] text-base font-medium leading-normal line-clamp-1">
                                                            Address</p>
                                                      <p
                                                            class="text-[#994d4d] test-base font-normal leading-normal line-clamp-2">
                                                            123 Adventure Lane, Travel Town, 90210</p>
                                                </div>
                                          </div>
                                          <div class="flex items-center gap-4 bg-[#fcf8f8] min-h-[72px] py-2">
                                                <div class="text-[#1b0e0e] flex items-center justify-center rounded-lg bg-[#f3e7e7] shrink-0 size-12"
                                                      data-icon="Phone" data-size="24px" data-weight="regular">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                            fill="currentColor" viewBox="0 0 256 256">
                                                            <path
                                                                  d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z">
                                                            </path>
                                                      </svg>
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                      <p
                                                            class="text-[#1b0e0e] text-base font-medium leading-normal line-clamp-1">
                                                            Phone</p>
                                                      <p
                                                            class="text-[#994d4d] test-base font-normal leading-normal line-clamp-2">
                                                            +1 (555) 123-4567</p>
                                                </div>
                                          </div>
                                          <div class="flex items-center gap-4 bg-[#fcf8f8] min-h-[72px] py-2">
                                                <div class="text-[#1b0e0e] flex items-center justify-center rounded-lg bg-[#f3e7e7] shrink-0 size-12"
                                                      data-icon="Envelope" data-size="24px" data-weight="regular">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                            fill="currentColor" viewBox="0 0 256 256">
                                                            <path
                                                                  d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z">
                                                            </path>
                                                      </svg>
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                      <p
                                                            class="text-[#1b0e0e] text-base font-medium leading-normal line-clamp-1">
                                                            Email</p>
                                                      <p
                                                            class="text-[#994d4d] test-base font-normal leading-normal line-clamp-2">
                                                            info@shoguntoursjapan.com</p>
                                                </div>
                                          </div>
                                          <div class="flex gap-4 pt-4">
                                                <a href="#"
                                                      class="rounded-full bg-[#f3e7e7] p-2.5 hover:bg-[#e7d0d0] transition-colors">
                                                      <div class="text-[#1b0e0e]" data-icon="FacebookLogo"
                                                            data-size="20px" data-weight="regular">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                                                                  height="20px" fill="currentColor"
                                                                  viewBox="0 0 256 256">
                                                                  <path
                                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z">
                                                                  </path>
                                                            </svg>
                                                      </div>
                                                </a>
                                                <a href="#"
                                                      class="rounded-full bg-[#f3e7e7] p-2.5 hover:bg-[#e7d0d0] transition-colors">
                                                      <div class="text-[#1b0e0e]" data-icon="TwitterLogo"
                                                            data-size="20px" data-weight="regular">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                                                                  height="20px" fill="currentColor"
                                                                  viewBox="0 0 256 256">
                                                                  <path
                                                                        d="M247.39,68.94A8,8,0,0,0,240,64H209.57A48.66,48.66,0,0,0,168.1,40a46.91,46.91,0,0,0-33.75,13.7A47.9,47.9,0,0,0,120,88v6.09C79.74,83.47,46.81,50.72,46.46,50.37a8,8,0,0,0-13.65,4.92c-4.31,47.79,9.57,79.77,22,98.18a110.93,110.93,0,0,0,21.88,24.2c-15.23,17.53-39.21,26.74-39.47,26.84a8,8,0,0,0-3.85,11.93c.75,1.12,3.75,5.05,11.08,8.72C53.51,229.7,65.48,232,80,232c70.67,0,129.72-54.42,135.75-124.44l29.91-29.9A8,8,0,0,0,247.39,68.94Zm-45,29.41a8,8,0,0,0-2.32,5.14C196,166.58,143.28,216,80,216c-10.56,0-18-1.4-23.22-3.08,11.51-6.25,27.56-17,37.88-32.48A8,8,0,0,0,92,169.08c-.47-.27-43.91-26.34-44-96,16,13,45.25,33.17,78.67,38.79A8,8,0,0,0,136,104V88a32,32,0,0,1,9.6-22.92A30.94,30.94,0,0,1,167.9,56c12.66.16,24.49,7.88,29.44,19.21A8,8,0,0,0,204.67,80h16Z">
                                                                  </path>
                                                            </svg>
                                                      </div>
                                                </a>
                                                <a href="#"
                                                      class="rounded-full bg-[#f3e7e7] p-2.5 hover:bg-[#e7d0d0] transition-colors">
                                                      <div class="text-[#1b0e0e]" data-icon="InstagramLogo"
                                                            data-size="20px" data-weight="regular">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                                                                  height="20px" fill="currentColor"
                                                                  viewBox="0 0 256 256">
                                                                  <path
                                                                        d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z">
                                                                  </path>
                                                            </svg>
                                                      </div>
                                                </a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- Footer -->
                  @include('components.footer')
            </div>
      </div>

      <script src="https://www.google.com/recaptcha/api.js?render=6LfsOIkrAAAAAK9nICyBNQeanLgdeQjHa2Go_Myb"></script>
      <script src="{{mix("js/common.js")}}"></script>
      <script src="{{mix("js/main.js")}}"></script>
      <script>


      const tourData = @json($tours);
      // Show tours for selected destination
      function showTours(destination) {
            // Hide destinations, show tours
            document.getElementById('destinations-section').style.display = 'none';
            document.getElementById('tours-list-section').classList.remove('hidden');

            // Update destination name
            document.getElementById('destination-name').textContent = destination;

            // Get tours for this destination
            const tours = tourData[destination] || [];

            // Render tours
            const toursGrid = document.getElementById('tours-grid');

            if (tours.length === 0) {
                  toursGrid.innerHTML = `
            <div class="col-span-full text-center py-8">
              <p class="text-[#994d4d] text-lg">No tours available for this destination yet.</p>
            </div>
          `;
                  return;
            }

            toursGrid.innerHTML = tours.map(tour => `
          <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow cursor-pointer group">
            <div class="relative h-48 overflow-hidden">
              <img src="storage/${tour.hero_image}" alt="${tour.title}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
              <div class="absolute top-4 right-4 bg-[#e92929] text-white px-3 py-1 rounded-full test-base font-medium">
                ¥${tour.minimum_price}~
              </div>
            </div>
            <div class="p-4">
              <h3 class="text-[#1b0e0e] text-lg font-bold mb-2">${tour.title}</h3>
              <p class="text-[#994d4d] test-base mb-3 line-clamp-2">${tour.subtitle}</p>
              <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-1">
                  ${generateStars(tour.average_rate.toFixed(1))}
                  <span class="test-base text-[#994d4d] ml-1">${tour.average_rate.toFixed(1)} (${tour.tour_reviews.length})</span>
                </div>
              </div>
              <div class="flex items-center justify-between">
                <span class="test-base text-[#994d4d]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256" class="inline mr-1">
                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a8,8,0,0,1-8,8H136v24a8,8,0,0,1-16,0V156H96a8,8,0,0,1,0-16h24V116a8,8,0,0,1,16,0v24h24A8,8,0,0,1,168,148Z"></path>
                  </svg>
                  ${tour.minimum_duration} hours~
                </span>
                <button onclick="window.location.href='/tour/show/${tour.id}'" class="bg-[#e92929] text-white px-4 py-2 rounded-lg test-base font-medium hover:bg-[#d61f1f] transition-colors">
                  Book Now
                </button>
              </div>
            </div>
          </div>
        `).join('');
      }

      // Show destinations (back button)
      function showDestinations() {
            document.getElementById('tours-list-section').classList.add('hidden');
            document.getElementById('destinations-section').style.display = 'block';
      }

      // Filter destinations by region
      function filterDestinations(region) {
            const cards = document.querySelectorAll('.destination-card');
            const tabs = document.querySelectorAll('.filter-tab');

            // Update active tab styling
            tabs.forEach(tab => {
                  tab.classList.remove('active', 'bg-[#e92929]', 'text-white');
                  tab.classList.add('bg-[#f3e7e7]', 'text-[#1b0e0e]');
            });
            event.target.classList.add('active', 'bg-[#e92929]', 'text-white');
            event.target.classList.remove('bg-[#f3e7e7]', 'text-[#1b0e0e]');

            // Filter cards with animation
            cards.forEach(card => {
                  if (region === 'all' || card.dataset.region === region) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeIn 0.3s ease-in';
                  } else {
                        card.style.display = 'none';
                  }
            });
      }

      // Helper function to generate star ratings
      function generateStars(rating) {
            let stars = '';
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 >= 0.5;
            
            for (let i = 1; i <= 5; i++) {
                  if (i <= fullStars) {
                        stars +=
                              '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e92929" viewBox="0 0 256 256" class="inline"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>';
                  } else if (i === fullStars + 1 && hasHalfStar){
                        stars += `
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256" class="inline">
                                    <defs>
                                    <linearGradient id="half" x1="0" x2="1" y1="0" y2="0">
                                          <stop offset="50%" stop-color="#e92929"/>
                                          <stop offset="50%" stop-color="transparent"/>
                                    </linearGradient>
                                    </defs>
                                    <path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z" fill="url(#half)" />
                              </svg>
                                    `;
                  } else {
                        stars +=
                              '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e7d0d0" viewBox="0 0 256 256" class="inline"><path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path></svg>';
                  }
            }
            return stars;
      }

      setTimeout(() => {
            console.log(document.querySelectorAll(".es-media-card-container"));
      }, 3000);



      Array.from(document.querySelectorAll(".es-media-card-container")).forEach((index, card) => {
            console.log(index);
            console.log(card);


      })
      </script>

      <style>
      @keyframes fadeIn {
            from {
                  opacity: 0;
                  transform: translateY(10px);
            }

            to {
                  opacity: 1;
                  transform: translateY(0);
            }
      }

      .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
      }

      .feed-powered-by-es {
            display: none !important;
      }
      </style>

      <script>
            document.addEventListener("DOMContentLoaded", function () {
                  const images = [
                        "/img/main1.jpg",
                        "/img/main2.jpg",
                        "/img/main3.jpg",
                        "/img/main4.jpg"
                  ];

                  const bgA = document.getElementById("bgA");
                  const bgB = document.getElementById("bgB");

                  let index = 0;
                  let showA = true;

                  // 初期画像設定
                  bgA.style.backgroundImage = `linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.4)), url('${images[0]}')`;

                  setInterval(() => {
                  index = (index + 1) % images.length;
                  const nextImage = `linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.4)), url('${images[index]}')`;

                  if (showA) {
                        bgB.style.backgroundImage = nextImage;
                        bgB.style.opacity = "1";
                        bgA.style.opacity = "0";
                  } else {
                        bgA.style.backgroundImage = nextImage;
                        bgA.style.opacity = "1";
                        bgB.style.opacity = "0";
                  }

                  showA = !showA;
                  }, 4000);
            });
      </script>


</body>

</html>