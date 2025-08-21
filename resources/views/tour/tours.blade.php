<!DOCTYPE html>
<html lang="en">

<head>
      @include('components.head')
</head>

<body>
      <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root overflow-x-hidden"
            style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
                  <!-- Header -->
                  @include('components.nav')

                  <!-- Hero Section -->
                  <div class="flex justify-center">
                        <div class="layout-content-container flex flex-col max-w-[1900px] flex-1">
                              <div class="@container">
                                    <div class="@[480px]:p-4">
                                          <div class="flex min-h-[400px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4"
                                                style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=1200&h=600&fit=crop");'>
                                                <div class="flex flex-col gap-2 text-center">
                                                      <h1
                                                            class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                                                            Authentic Japan Experiences
                                                      </h1>
                                                      <h2
                                                            class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                                            Discover Japan's hidden treasures with expert local guides
                                                      </h2>
                                                </div>
                                                <div class="flex gap-4 flex-wrap justify-center">
                                                      <button onclick="scrollToSection('tours')"
                                                            class="flex min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#e92929] text-[#fcf8f8] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                                                            <span class="truncate">View Tours</span>
                                                      </button>
                                                      <button onclick="scrollToSection('popular')"
                                                            class="flex min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-white/20 backdrop-blur-sm text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-white/30 transition-colors border border-white/30">
                                                            <span class="truncate">Popular Tours</span>
                                                      </button>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <!-- Search and Filter Section -->
                  <section class="flex justify-center py-8 bg-[#f3e7e7]">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <div class="px-4">
                                    <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                                          <!-- Search Bar -->
                                          <div class="flex-1 max-w-md">
                                                <div class="relative">
                                                      <input type="text" placeholder="Search tours..."
                                                            class="w-full px-4 py-3 pl-12 rounded-lg bg-white border border-[#e7d0d0] text-[#1b0e0e] placeholder:text-[#994d4d] focus:outline-none focus:border-[#e92929] transition-colors">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            fill="#994d4d" viewBox="0 0 256 256"
                                                            class="absolute left-4 top-1/2 transform -translate-y-1/2">
                                                            <path
                                                                  d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                                            </path>
                                                      </svg>
                                                </div>
                                          </div>

                                          <!-- Filter Buttons -->
                                          <div class="flex gap-2 flex-wrap">
                                                <button onclick="filterTours('all')"
                                                      class="filter-btn active px-4 py-2 rounded-lg bg-[#e92929] text-white text-sm font-medium transition-all hover:bg-[#d61f1f]">
                                                      All Tours
                                                </button>
                                                <button onclick="filterTours('cultural')"
                                                      class="filter-btn px-4 py-2 rounded-lg bg-white text-[#1b0e0e] text-sm font-medium transition-all hover:bg-[#f3e7e7] border border-[#e7d0d0]">
                                                      Cultural
                                                </button>
                                                <button onclick="filterTours('adventure')"
                                                      class="filter-btn px-4 py-2 rounded-lg bg-white text-[#1b0e0e] text-sm font-medium transition-all hover:bg-[#f3e7e7] border border-[#e7d0d0]">
                                                      Adventure
                                                </button>
                                                <button onclick="filterTours('food')"
                                                      class="filter-btn px-4 py-2 rounded-lg bg-white text-[#1b0e0e] text-sm font-medium transition-all hover:bg-[#f3e7e7] border border-[#e7d0d0]">
                                                      Food Tours
                                                </button>
                                                <button onclick="filterTours('private')"
                                                      class="filter-btn px-4 py-2 rounded-lg bg-white text-[#1b0e0e] text-sm font-medium transition-all hover:bg-[#f3e7e7] border border-[#e7d0d0]">
                                                      Private
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- Featured Tour -->
                  <section id="featured" class="flex justify-center py-12">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <h2
                                    class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-6">
                                    Featured Tour
                              </h2>
                              <div class="px-4">
                                    <article
                                          class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer"
                                          onclick="openTour('featured-tour')">
                                          <div class="relative h-64 md:h-80 overflow-hidden">
                                                <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=800&h=400&fit=crop"
                                                      alt="Mount Fuji Tour"
                                                      class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                <div class="absolute top-4 left-4">
                                                      <span
                                                            class="bg-[#e92929] text-white px-3 py-1 rounded-full text-sm font-medium">Featured</span>
                                                </div>
                                                <div class="absolute top-4 right-4">
                                                      <span
                                                            class="bg-black/50 text-white px-3 py-1 rounded-full text-sm">Adventure</span>
                                                </div>
                                                <div class="absolute bottom-4 left-4">
                                                      <div class="flex items-center gap-2 text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                                  <path d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"></path>
                                                            </svg>
                                                            <span class="text-sm">Tokyo • Mount Fuji</span>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="p-6">
                                                <div class="flex items-center justify-between mb-3">
                                                      <div class="flex items-center gap-4 text-sm text-[#994d4d]">
                                                            <div class="flex items-center gap-1">
                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                                        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path>
                                                                  </svg>
                                                                  <span>Full Day (8 hours)</span>
                                                            </div>
                                                            <span>•</span>
                                                            <div class="flex items-center gap-1">
                                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                                        <path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,87.63a8,8,0,0,1-11.07,2.22A79.75,79.75,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,195.63Z"></path>
                                                                  </svg>
                                                                  <span>Max 8 people</span>
                                                            </div>
                                                      </div>
                                                      <div class="text-right">
                                                            <span class="text-2xl font-bold text-[#e92929]">¥15,800</span>
                                                            <span class="text-sm text-[#994d4d] block">per person</span>
                                                      </div>
                                                </div>
                                                <h3
                                                      class="text-[#1b0e0e] text-2xl font-bold mb-3 group-hover:text-[#e92929] transition-colors">
                                                      Mount Fuji & Hakone Day Tour with Lake Ashi Cruise
                                                </h3>
                                                <p class="text-[#994d4d] text-base leading-relaxed mb-4">
                                                      Experience the majesty of Mount Fuji on this full-day adventure. Visit the 5th Station, cruise on Lake Ashi, and ride the Hakone Ropeway for breathtaking views. Includes traditional Japanese lunch and expert English-speaking guide.
                                                </p>
                                                <div class="flex items-center justify-between">
                                                      <div class="flex gap-2">
                                                            <span
                                                                  class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs">Mount Fuji</span>
                                                            <span
                                                                  class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs">Hakone</span>
                                                            <span
                                                                  class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs">Nature</span>
                                                      </div>
                                                      <div class="flex items-center gap-2 text-[#994d4d]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                                  <path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path>
                                                            </svg>
                                                            <span class="text-sm font-medium">4.8 (127 reviews)</span>
                                                      </div>
                                                </div>
                                          </div>
                                    </article>
                              </div>
                        </div>
                  </section>

                  <!-- Tour Categories -->
                  <section id="categories" class="flex justify-center py-12 bg-[#f3e7e7]">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <h2
                                    class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-6">
                                    Tour Categories
                              </h2>
                              <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
                                    <div class="category-card bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all cursor-pointer group"
                                          onclick="filterTours('cultural')">
                                          <div
                                                class="w-12 h-12 bg-[#e92929]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#e92929]/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                      fill="#e92929" viewBox="0 0 256 256">
                                                      <path
                                                            d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM48,48H208V88H48ZM48,208V104H208V208Z">
                                                      </path>
                                                </svg>
                                          </div>
                                          <h3 class="text-[#1b0e0e] font-bold mb-2">Cultural Tours</h3>
                                          <p class="text-[#994d4d] text-sm">Temples, traditions & history</p>
                                          <span class="text-[#e92929] text-xs font-medium">12 tours</span>
                                    </div>

                                    <div class="category-card bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all cursor-pointer group"
                                          onclick="filterTours('adventure')">
                                          <div
                                                class="w-12 h-12 bg-[#e92929]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#e92929]/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                      fill="#e92929" viewBox="0 0 256 256">
                                                      <path
                                                            d="M128,18A110,110,0,1,0,238,128,110.12,110.12,0,0,0,128,18Zm0,208a98,98,0,1,1,98-98A98.11,98.11,0,0,1,128,226ZM172.49,99.51a12,12,0,0,1,0,17l-32,32a12,12,0,0,1-17,0l-32-32a12,12,0,0,1,17-17L128,119l19.51-19.52A12,12,0,0,1,172.49,99.51Z">
                                                      </path>
                                                </svg>
                                          </div>
                                          <h3 class="text-[#1b0e0e] font-bold mb-2">Adventure Tours</h3>
                                          <p class="text-[#994d4d] text-sm">Hiking, nature & outdoor activities</p>
                                          <span class="text-[#e92929] text-xs font-medium">8 tours</span>
                                    </div>

                                    <div class="category-card bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all cursor-pointer group"
                                          onclick="filterTours('food')">
                                          <div
                                                class="w-12 h-12 bg-[#e92929]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#e92929]/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                      fill="#e92929" viewBox="0 0 256 256">
                                                      <path
                                                            d="M208,88H180.36A103.95,103.95,0,0,0,128,64V32a8,8,0,0,0-16,0V64A103.95,103.95,0,0,0,59.64,88H32a8,8,0,0,0,0,16H59.64A103.95,103.95,0,0,0,112,192v32a8,8,0,0,0,16,0V192a103.95,103.95,0,0,0,52.36-88H208a8,8,0,0,0,0-16ZM128,176a72,72,0,1,1,72-72A72.08,72.08,0,0,1,128,176Z">
                                                      </path>
                                                </svg>
                                          </div>
                                          <h3 class="text-[#1b0e0e] font-bold mb-2">Food Tours</h3>
                                          <p class="text-[#994d4d] text-sm">Culinary experiences & local cuisine</p>
                                          <span class="text-[#e92929] text-xs font-medium">15 tours</span>
                                    </div>

                                    <div class="category-card bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all cursor-pointer group"
                                          onclick="filterTours('private')">
                                          <div
                                                class="w-12 h-12 bg-[#e92929]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#e92929]/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                      fill="#e92929" viewBox="0 0 256 256">
                                                      <path
                                                            d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,87.63a8,8,0,0,1-11.07,2.22A79.75,79.75,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,195.63Z">
                                                      </path>
                                                </svg>
                                          </div>
                                          <h3 class="text-[#1b0e0e] font-bold mb-2">Private Tours</h3>
                                          <p class="text-[#994d4d] text-sm">Customized experiences</p>
                                          <span class="text-[#e92929] text-xs font-medium">6 tours</span>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- All Tours -->
                  <section id="tours" class="flex justify-center py-12">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <div class="flex items-center justify-between px-4 mb-6">
                                    <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em]">
                                          All Tours
                                    </h2>
                                    <div class="text-sm text-[#994d4d]">
                                          Showing 41 tours
                                    </div>
                              </div>

                              <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 p-4" id="tours-grid">
                                    <!-- Tour Card 1 -->
                                    @foreach ($categorizedTours as $date => $tours)
                                          @foreach ($tours as $tour)
                                                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow cursor-pointer group">
                                                      <div class="relative h-48 overflow-hidden">
                                                            <img src="{{ asset('storage/' . $tour["hero_image"]) }}" alt="${tour.title}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                            <div class="absolute top-4 right-4 bg-[#e92929] text-white px-3 py-1 rounded-full test-base font-medium">
                                                                  {{$tour["minimum_price"]}}￥
                                                            </div>
                                                      </div>
                                                      <div class="p-4">
                                                            <h3 class="text-[#1b0e0e] text-lg font-bold mb-2">{{$tour["title"]}}</h3>
                                                            <p class="text-[#994d4d] test-base mb-3 line-clamp-2">{{$tour["subtitle"]}}</p>
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
                                                                        {{$tour["minimum_duration"]}}hours~
                                                                  </span>
                                                                  <button onclick="window.location.href='/tour/show/${tour.id}'" class="bg-[#e92929] text-white px-4 py-2 rounded-lg test-base font-medium hover:bg-[#d61f1f] transition-colors">
                                                                        Book Now
                                                                  </button>
                                                            </div>
                                                      </div>
                                                </div>
                                          @endforeach
                                    @endforeach
                              </div>

                              <!-- Load More Button -->
                              <div class="text-center pt-8">
                                    <button
                                          class="px-8 py-3 bg-[#e92929] text-white rounded-lg font-medium hover:bg-[#d61f1f] transition-colors">
                                          Load More Tours
                                    </button>
                              </div>
                        </div>
                  </section>

                  <!-- CTA Section -->
                  <section class="flex justify-center py-12 bg-[#f3e7e7]">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <div class="text-center px-4">
                                    <h2
                                          class="text-[#1b0e0e] text-[28px] font-bold leading-tight tracking-[-0.015em] mb-4">
                                          Ready for Your Japan Adventure?
                                    </h2>
                                    <p class="text-[#994d4d] text-lg mb-8">
                                          Book your perfect Japan tour today and create unforgettable memories with our expert local guides.
                                    </p>
                                    <div class="flex gap-4 justify-center flex-wrap">
                                          <button
                                                class="px-8 py-4 bg-[#e92929] text-white rounded-lg font-bold hover:bg-[#d61f1f] transition-colors text-lg">
                                                Book a Tour Now
                                          </button>
                                          <button
                                                class="px-8 py-4 bg-white text-[#e92929] rounded-lg font-bold hover:bg-gray-50 transition-colors text-lg border-2 border-[#e92929]">
                                                Contact Us
                                          </button>
                                    </div>
                                    <p class="text-[#994d4d] text-sm mt-4">
                                          Free cancellation up to 24 hours before your tour starts
                                    </p>
                              </div>
                        </div>
                  </section>

                  <!-- Footer -->
                  @include('components.footer')
            </div>
      </div>

      <script>

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
            // Smooth scrolling function
            function scrollToSection(sectionId) {
                  document.getElementById(sectionId).scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                  });
            }

            // Filter tours function
            function filterTours(category) {
                  const tours = document.querySelectorAll('.tour-card');
                  const buttons = document.querySelectorAll('.filter-btn');

                  // Update button styles
                  buttons.forEach(btn => {
                        btn.classList.remove('active', 'bg-[#e92929]', 'text-white');
                        btn.classList.add('bg-white', 'text-[#1b0e0e]', 'border', 'border-[#e7d0d0]');
                  });

                  event.target.classList.add('active', 'bg-[#e92929]', 'text-white');
                  event.target.classList.remove('bg-white', 'text-[#1b0e0e]', 'border', 'border-[#e7d0d0]');

                  // Filter tours
                  tours.forEach(tour => {
                        if (category === 'all' || tour.dataset.category === category) {
                              tour.style.display = 'block';
                              tour.style.animation = 'fadeIn 0.5s ease-in';
                        } else {
                              tour.style.display = 'none';
                        }
                  });

                  // Update showing count
                  const visibleTours = document.querySelectorAll('.tour-card[style*="block"], .tour-card:not([style*="none"])').length;
                  document.querySelector('.text-sm.text-\\[\\#994d4d\\]').textContent = `Showing ${visibleTours} tours`;
            }

            // Open tour function
            function openTour(tourId) {
                  window.location.href = `/tours/${tourId}`;
            }

            // Search functionality
            document.querySelector('input[type="text"]').addEventListener('input', function(e) {
                  const searchTerm = e.target.value.toLowerCase();
                  const tours = document.querySelectorAll('.tour-card');
                  let visibleCount = 0;

                  tours.forEach(tour => {
                        const title = tour.querySelector('h3').textContent.toLowerCase();
                        const description = tour.querySelector('p').textContent.toLowerCase();
                        const location = tour.querySelector('.bottom-3 span').textContent.toLowerCase();

                        if (title.includes(searchTerm) || description.includes(searchTerm) || location.includes(searchTerm)) {
                              tour.style.display = 'block';
                              visibleCount++;
                        } else {
                              tour.style.display = searchTerm === '' ? 'block' : 'none';
                              if (searchTerm === '') visibleCount++;
                        }
                  });

                  // Update count
                  if (searchTerm === '') {
                        document.querySelector('.text-sm.text-\\[\\#994d4d\\]').textContent = 'Showing 41 tours';
                  } else {
                        document.querySelector('.text-sm.text-\\[\\#994d4d\\]').textContent = `Showing ${visibleCount} tours`;
                  }
            });

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                  anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                              target.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                              });
                        }
                  });
            });

            // Book tour buttons
            document.querySelectorAll('button').forEach(button => {
                  if (button.textContent.includes('Book')) {
                        button.addEventListener('click', function(e) {
                              e.stopPropagation();
                              alert('Booking system will be implemented. Thank you for your interest!');
                        });
                  }
            });

            // Load more functionality
            document.querySelector('button').addEventListener('click', function(e) {
                  if (e.target.textContent.trim() === 'Load More Tours') {
                        // Simulate loading more tours
                        alert('Loading more tours... This feature will be implemented with backend integration.');
                  }
            });

            // Add scroll effect for header
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

            .line-clamp-3 {
                  display: -webkit-box;
                  -webkit-line-clamp: 3;
                  -webkit-box-orient: vertical;
                  overflow: hidden;
            }

            /* Enhanced hover effects */
            .tour-card:hover {
                  transform: translateY(-2px);
            }

            .category-card:hover {
                  transform: translateY(-2px);
            }

            /* Button hover effects */
            button:hover {
                  transform: translateY(-1px);
            }

            button:active {
                  transform: translateY(0);
            }

            /* Search input focus effect */
            input:focus {
                  box-shadow: 0 0 0 3px rgba(233, 41, 41, 0.1);
            }

            /* Header transition */
            header {
                  transition: box-shadow 0.3s ease;
            }

            /* Tour card animations */
            .tour-card {
                  transition: all 0.3s ease;
            }

            .tour-card:hover .tour-card img {
                  transform: scale(1.05);
            }

            /* Price highlight effect */
            .tour-card:hover .text-lg.font-bold.text-\\[\\#e92929\\] {
                  color: #d61f1f;
            }

            /* Category filter active state */
            .filter-btn.active {
                  background-color: #e92929 !important;
                  color: white !important;
                  border: none !important;
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                  .grid {
                        grid-template-columns: 1fr;
                  }

                  .md\\:grid-cols-2 {
                        grid-template-columns: 1fr;
                  }

                  .md\\:grid-cols-4 {
                        grid-template-columns: repeat(2, 1fr);
                  }

                  .lg\\:grid-cols-3 {
                        grid-template-columns: 1fr;
                  }

                  .flex-wrap {
                        justify-content: center;
                  }

                  /* Mobile header adjustments */
                  header .hidden.md\\:flex {
                        display: none;
                  }

                  /* Mobile hero text */
                  .text-4xl {
                        font-size: 2.5rem;
                  }

                  .text-5xl {
                        font-size: 3rem;
                  }
            }

            @media (max-width: 480px) {
                  .filter-btn {
                        font-size: 12px;
                        padding: 8px 12px;
                  }

                  .tour-card .p-4 {
                        padding: 1rem;
                  }

                  .text-lg {
                        font-size: 1rem;
                  }
            }

            /* Loading animation for future use */
            @keyframes spin {
                  0% { transform: rotate(0deg); }
                  100% { transform: rotate(360deg); }
            }

            .loading {
                  animation: spin 1s linear infinite;
            }

            /* Parallax effect for hero section */
            @media (min-width: 768px) {
                  .hero-parallax {
                        background-attachment: fixed;
                  }
            }
      </style>
</body>

</html>