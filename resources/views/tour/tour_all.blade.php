<!DOCTYPE html>
<html lang="ja">
<head>
      @include('components.head')
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
      </style>
</head>
<body style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
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
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      {{-- <section class="flex justify-center py-8 bg-[#f3e7e7] shadow-sm backdrop-blur-sm">
            <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                  <div class="px-4">
                  <!-- Main Search Bar -->
                  <div class="mb-6">
                        <div class="max-w-4xl mx-auto">
                              <div class="relative flex gap-5 items-center">
                                    <div class="relative flex-1">
                                          <input type="text" id="main-search" placeholder="Search tours by destination, activity, or keywords..." 
                                                class="w-full px-6 py-4 pl-14 pr-32 rounded-xl bg-white border-2 border-[#e7d0d0] text-[#1b0e0e] placeholder:text-[#994d4d] focus:outline-none focus:border-[#e92929] focus:ring-4 focus:ring-[#e92929]/10 transition-all text-lg shadow-lg">
                                          <button class="absolute left-5 top-1/2 transform -translate-y-1/2" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#994d4d" viewBox="0 0 256 256">
                                                      <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                                                </svg>
                                          </button>
                                          <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-[#e92929] text-white px-6 py-2 rounded-lg hover:bg-[#d41f1f] transition-colors font-medium">
                                                Search
                                          </button> 
                                    </div>
                                    <button id="advanced-filter-toggle" class="w-12 h-12 bg-[#e92929] rounded-full flex items-center justify-center hover:bg-[#d41f1f] transition-colors shadow-lg group">
                                          <i class="fas fa-sliders-h text-white text-lg"></i>
                                    </button>
                              </div>
                              
                              <!-- Search Suggestions -->
                              <div id="search-suggestions" class="hidden absolute top-full left-0 right-0 bg-white border border-[#e7d0d0] rounded-lg mt-2 shadow-lg z-20 max-h-64 overflow-y-auto">
                              <div id="recent-searches" class="p-3">
                                    <h4 class="text-sm font-medium text-[#1b0e0e] mb-2">Popular Searches</h4>
                                    <div class="flex flex-wrap gap-2">
                                          <span class="search-suggestion bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs cursor-pointer hover:bg-[#e7d0d0] transition-colors">Tokyo</span>
                                          <span class="search-suggestion bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs cursor-pointer hover:bg-[#e7d0d0] transition-colors">Mt. Fuji</span>
                                          <span class="search-suggestion bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs cursor-pointer hover:bg-[#e7d0d0] transition-colors">Kyoto</span>
                                          <span class="search-suggestion bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs cursor-pointer hover:bg-[#e7d0d0] transition-colors">Osaka</span>
                                          <span class="search-suggestion bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs cursor-pointer hover:bg-[#e7d0d0] transition-colors">Cultural</span>
                                          <span class="search-suggestion bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs cursor-pointer hover:bg-[#e7d0d0] transition-colors">Food Tour</span>
                                    </div>
                              </div>
                              </div>
                        </div>
                  </div>

                  
                  <!-- Advanced Filters Panel -->
                  <div id="advanced-panel" class="mb-6 bg-white rounded-xl border hidden border-[#e7d0d0] shadow-sm overflow-hidden transition-all duration-300">
                        <div class="p-8">
                              <div class="text-center mb-6">
                                    <h3 class="text-lg font-semibold text-[#1b0e0e] mb-2">Filter Your Perfect Tour</h3>
                                    <p class="text-sm text-[#994d4d]">Use the filters below to find exactly what you're looking for</p>
                              </div>
                              
                              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                              
                              <!-- Destination Filter -->
                              <div class="space-y-3">
                                    <label class="block text-sm font-semibold text-[#1b0e0e] flex items-center gap-2">
                                          <div class="w-6 h-6 bg-[#e92929] rounded-full flex items-center justify-center">
                                                <i class="fas fa-map-marker-alt text-white text-xs"></i>
                                          </div>
                                          Destination
                                    </label>
                                    <select id="destination-filter" class="w-full px-4 py-3 border border-[#e7d0d0] rounded-lg text-sm focus:outline-none focus:border-[#e92929] focus:ring-2 focus:ring-[#e92929]/20 bg-white transition-all shadow-sm">
                                          <option value="">All Destinations</option>
                                          @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                          @endforeach
                                    </select>
                              </div>

                              <!-- Rating Filter -->
                              <div class="space-y-3">
                                    <label class="block text-sm font-semibold text-[#1b0e0e] flex items-center gap-2">
                                          <div class="w-6 h-6 bg-[#e92929] rounded-full flex items-center justify-center">
                                                <i class="fas fa-star text-white text-xs"></i>
                                          </div>
                                          Minimum Rating
                                    </label>
                                    <div class="space-y-3 bg-[#f8f9fa] p-3 rounded-lg">
                                          <label class="flex items-center gap-3 cursor-pointer hover:bg-white p-2 rounded transition-colors">
                                                <input type="radio" name="rating" value="4.5" id="rating-45" class="rating-filter text-[#e92929] focus:ring-[#e92929] focus:ring-2">
                                                <div class="flex items-center gap-2">
                                                      <div class="flex text-yellow-400">
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star-half-alt text-sm"></i>
                                                      </div>
                                                      <span class="text-sm text-[#1b0e0e] font-medium">4.5+</span>
                                                </div>
                                          </label>
                                          <label class="flex items-center gap-3 cursor-pointer hover:bg-white p-2 rounded transition-colors">
                                                <input type="radio" name="rating" value="4.0" id="rating-40" class="text-[#e92929] focus:ring-[#e92929] focus:ring-2 rating-filter">
                                                <div class="flex items-center gap-2">
                                                      <div class="flex text-yellow-400">
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="far fa-star text-sm"></i>
                                                      </div>
                                                      <span class="text-sm text-[#1b0e0e] font-medium">4.0+</span>
                                                </div>
                                          </label>
                                          <label class="flex items-center gap-3 cursor-pointer hover:bg-white p-2 rounded transition-colors">
                                                <input type="radio" name="rating" value="3.5" id="rating-35" class="text-[#e92929] focus:ring-[#e92929] focus:ring-2 rating-filter">
                                                <div class="flex items-center gap-2">
                                                      <div class="flex text-yellow-400">
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star text-sm"></i>
                                                            <i class="fas fa-star-half-alt text-sm"></i>
                                                            <i class="far fa-star text-sm"></i>
                                                      </div>
                                                      <span class="text-sm text-[#1b0e0e] font-medium">3.5+ </span>
                                                </div>
                                          </label>
                                          <label class="flex items-center gap-3 cursor-pointer hover:bg-white p-2 rounded transition-colors">
                                                <input type="radio" name="rating" value="" id="rating-all" class="text-[#e92929] focus:ring-[#e92929] focus:ring-2 rating-filter" checked>
                                                <span class="text-sm text-[#1b0e0e] font-medium">All Ratings</span>
                                          </label>
                                    </div>
                              </div>

                              <!-- Price Range -->
                              <div class="space-y-3">
                                    <label class="block text-sm font-semibold text-[#1b0e0e] flex items-center gap-2">
                                          <div class="w-6 h-6 bg-[#e92929] rounded-full flex items-center justify-center">
                                                <i class="fas fa-yen-sign text-white text-xs"></i>
                                          </div>
                                          Price Range
                                    </label>
                                    <div class="space-y-3">
                                          <div class="flex items-center gap-3">
                                                <input type="number" id="min-price" placeholder="Min ¥" 
                                                      class="w-full px-3 py-3 border border-[#e7d0d0] rounded-lg text-sm focus:outline-none focus:border-[#e92929] focus:ring-2 focus:ring-[#e92929]/20 shadow-sm">
                                                <span class="text-[#994d4d] text-sm font-medium">to</span>
                                                <input type="number" id="max-price" placeholder="Max ¥" 
                                                      class="w-full px-3 py-3 border border-[#e7d0d0] rounded-lg text-sm focus:outline-none focus:border-[#e92929] focus:ring-2 focus:ring-[#e92929]/20 shadow-sm">
                                          </div>
                                          
                                          <div class="text-xs text-[#994d4d] text-center mb-2">Quick Select</div>
                                          <div class="grid grid-cols-2 gap-2">
                                                <button type="button" class="price-quick-btn px-3 py-2 border border-[#e7d0d0] rounded-lg text-xs text-[#994d4d] hover:border-[#e92929] hover:text-[#e92929] hover:bg-[#f3e7e7] transition-colors font-medium" data-min="0" data-max="5000">Under ¥5K</button>
                                                <button type="button" class="price-quick-btn px-3 py-2 border border-[#e7d0d0] rounded-lg text-xs text-[#994d4d] hover:border-[#e92929] hover:text-[#e92929] hover:bg-[#f3e7e7] transition-colors font-medium" data-min="5000" data-max="15000">¥5K - ¥15K</button>
                                                <button type="button" class="price-quick-btn px-3 py-2 border border-[#e7d0d0] rounded-lg text-xs text-[#994d4d] hover:border-[#e92929] hover:text-[#e92929] hover:bg-[#f3e7e7] transition-colors font-medium" data-min="15000" data-max="30000">¥15K - ¥30K</button>
                                                <button type="button" class="price-quick-btn px-3 py-2 border border-[#e7d0d0] rounded-lg text-xs text-[#994d4d] hover:border-[#e92929] hover:text-[#e92929] hover:bg-[#f3e7e7] transition-colors font-medium" data-min="30000" data-max="">¥30K+</button>
                                          </div>
                                    </div>
                              </div>

                              <!-- Duration -->
                              <div class="space-y-3">
                                    <label class="block text-sm font-semibold text-[#1b0e0e] flex items-center gap-2">
                                          <div class="w-6 h-6 bg-[#e92929] rounded-full flex items-center justify-center">
                                                <i class="fas fa-clock text-white text-xs"></i>
                                          </div>
                                          Duration
                                    </label>
                                    <div class="space-y-2 bg-[#f8f9fa] p-3 rounded-lg">
                                          <label class="flex items-center gap-3 cursor-pointer hover:bg-white p-2 rounded transition-colors">
                                                <input type="checkbox" class="duration-filter text-[#e92929] focus:ring-[#e92929] focus:ring-2 rounded" value="half-day">
                                                <span class="text-sm text-[#1b0e0e] font-medium">Half day (2-4 hours)</span>
                                          </label>
                                          <label class="flex items-center gap-3 cursor-pointer hover:bg-white p-2 rounded transition-colors">
                                                <input type="checkbox" class="duration-filter text-[#e92929] focus:ring-[#e92929] focus:ring-2 rounded" value="full-day">
                                                <span class="text-sm text-[#1b0e0e] font-medium">Full day (4-8 hours)</span>
                                          </label>
                                          <label class="flex items-center gap-3 cursor-pointer hover:bg-white p-2 rounded transition-colors">
                                                <input type="checkbox" class="duration-filter text-[#e92929] focus:ring-[#e92929] focus:ring-2 rounded" value="multi-day-short">
                                                <span class="text-sm text-[#1b0e0e] font-medium">2-3 days</span>
                                          </label>
                                          <label class="flex items-center gap-3 cursor-pointer hover:bg-white p-2 rounded transition-colors">
                                                <input type="checkbox" class="duration-filter text-[#e92929] focus:ring-[#e92929] focus:ring-2 rounded" value="multi-day-long">
                                                <span class="text-sm text-[#1b0e0e] font-medium">4+ days</span>
                                          </label>
                                    </div>
                              </div>
                              
                              </div>
                              
                              <!-- Filter Actions -->
                              <div class="mt-8 pt-6 border-t border-[#e7d0d0]">
                                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                                          <button id="clear-filters" class="text-[#994d4d] hover:text-[#e92929] text-sm font-medium transition-colors flex items-center gap-2">
                                                <i class="fas fa-undo text-sm"></i>
                                                Clear All Filters
                                          </button>
                                          <div class="flex gap-3">
                                                <button id="cancel-filters" class="px-6 py-3 border border-[#e7d0d0] text-[#994d4d] rounded-lg hover:bg-[#f3e7e7] transition-colors font-medium">
                                                      Reset
                                                </button>
                                                <button id="apply-filters" class="px-8 py-3 bg-[#e92929] text-white rounded-lg hover:bg-[#d41f1f] transition-colors font-medium flex items-center gap-2 shadow-lg">
                                                      <i class="fas fa-search text-sm"></i>
                                                      Apply Filters
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  
                  <!-- Active Filters Display -->
                  <div id="active-filters-container" class="mb-4 hidden">
                        <div class="flex items-center gap-2 text-sm">
                              <span class="font-medium text-[#1b0e0e]">Active filters:</span>
                              <div id="active-filters" class="flex flex-wrap gap-2"></div>
                              <button id="clear-all-filters" class="text-[#e92929] hover:text-[#d41f1f] font-medium ml-2 text-xs">
                              Clear all
                              </button>
                        </div>
                  </div>
                  
                  <!-- Results Header with Sort Options -->
                  <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-4">
                        <!-- Results Count -->
                        <div class="flex items-center gap-4">
                              <span id="results-count" class="text-[#1b0e0e] font-medium">Showing 6 of 24 tours</span>
                              <div id="search-status" class="hidden text-[#994d4d] text-sm">
                                    <i class="fas fa-spinner fa-spin mr-1"></i>
                                    Searching...
                              </div>
                        </div>
                        
                        <!-- Sort and View Options -->
                        <div class="flex items-center gap-3">
                              <!-- Sort Dropdown -->
                              <div class="relative">
                              <select id="sort-select" class="px-4 py-2 border border-[#e7d0d0] rounded-lg text-sm font-medium text-[#1b0e0e] focus:outline-none focus:border-[#e92929] focus:ring-2 focus:ring-[#e92929]/10 bg-white">
                                    <option value="price-low">Price: Low to High</option>
                                    <option value="price-high">Price: High to Low</option>
                                    <option value="rating">Highest Rating</option>
                                    <option value="duration-short">Duration: Short to Long</option>
                                    <option value="duration-long">Duration: Long to Short</option>
                                    <option value="popularity">Most Popular</option>
                              </select>
                              </div>

                              <!-- Results per page -->
                              <select id="per-page-select" class="px-3 py-2 border border-[#e7d0d0] rounded-lg text-sm font-medium text-[#1b0e0e] focus:outline-none focus:border-[#e92929] focus:ring-2 focus:ring-[#e92929]/10 bg-white">
                                    <option value="6">Show 6</option>
                                    <option value="12">Show 12</option>
                                    <option value="24">Show 24</option>
                              </select>
                        </div>
                  </div>

                  </div>
            </div>
      </section> --}}


      <!-- Tours Grid -->
      <section class="flex justify-center py-8">
            <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                  <div class="px-4">
                  <div id="tours-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-300">
                        @foreach ($tours as $tour)
                              <div class="tour-card  bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer"  style="display: block;"
                                    data-price="{{$tour->minimum_price}}" data-duration="1" data-destination="{{$tour->category_id}}" data-rating={{$tour->average_rate}} onclick="window.location.href='/tour/show/{{$tour->id}}'"> 
                                    <div class="relative h-48 overflow-hidden">
                                          <img src="{{ asset('storage/' . $tour['hero_image']) }}" alt="{{$tour->title}}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                          <div class="absolute top-4 right-4">
                                                <span class="bg-black/50 text-white px-3 py-1 rounded-full text-sm">{{$tour->badge}}</span>
                                          </div>
                                    </div>
                                    <div class="p-4">
                                          <div class="flex items-center gap-2 mb-2 text-xs text-[#994d4d]">
                                                <i class="fas fa-clock"></i>
                                                <span>{{$tour->minimum_duration}} hours~</span>
                                                <span>•</span>
                                                <i class="fas fa-users"></i>
                                                <span>Max 12 people</span>
                                          </div>
                                          <h3 class="text-[#1b0e0e] text-lg font-bold mb-2  transition-colors line-clamp-2">{{$tour->title}}</h3>
                                          <p class="text-[#994d4d] text-sm leading-relaxed mb-3 line-clamp-3">{{$tour->subtitle}}</p>
                                          <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                      <div class="flex items-center gap-1 text-[#994d4d]">
                                                            {!!\App\Services\Util\FormatService::generateStar($tour->average_rate)!!}
                                                            <span class="text-sm font-medium">{{number_format($tour->average_rate, 1)}}</span>
                                                      </div>
                                                      {{-- <span class="text-[#994d4d] text-xs"><span class="hidden md:block">({{count($tour->tourReviews) ?? 0}} reviews)</span></span> --}}
                                                </div>
                                                <div class="text-right">
                                                      <div class="text-[#e92929] text-2xl font-bold">¥{{ number_format($tour->minimum_price) }}~</div>
                                                      {{-- <div class="text-[#994d4d] text-xs">per person</div> --}}
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        @endforeach
                  </div>
                  
                  <!-- Load More Button -->
                  {{-- <div class="text-center mt-8">
                        <button class="bg-[#e92929] text-white px-8 py-3 rounded-lg font-medium hover:bg-[#d61f1f] transition-colors">
                              Load More Tours
                        </button>
                  </div> --}}
                  </div>
            </div>
      </section>

      <!-- Newsletter Section -->
      {{-- <section class="flex justify-center py-12 bg-[#f3e7e7]">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                  <div class="text-center px-4">
                  <h2 class="text-[#1b0e0e] text-[28px] font-bold leading-tight tracking-[-0.015em] mb-4">
                        Get Exclusive Tour Offers
                  </h2>
                  <p class="text-[#994d4d] text-lg mb-8">
                        Be the first to know about new tours, special discounts, and limited-time experiences across Japan.
                  </p>
                  <div class="max-w-md mx-auto">
                        <div class="flex gap-3">
                              <input type="email" placeholder="Enter your email" 
                              class="flex-1 px-4 py-3 rounded-lg border border-[#e7d0d0] bg-white text-[#1b0e0e] placeholder:text-[#994d4d] focus:outline-none focus:border-[#e92929] transition-colors">
                              <button class="px-6 py-3 bg-[#e92929] text-white rounded-lg font-medium hover:bg-[#d61f1f] transition-colors whitespace-nowrap">
                              Subscribe
                              </button>
                        </div>
                        <p class="text-[#994d4d] text-sm mt-3">
                              Join 8,500+ travelers. Unsubscribe anytime.
                        </p>
                  </div>
                  </div>
            </div>
      </section> --}}

      <!-- Footer -->
      @include('components.footer')

      <script src="{{mix("js/tour_all.js")}}"></script>

      <script>
            // Search functionality
            document.getElementById('main-search').addEventListener('focus', function() {
                  document.getElementById('search-suggestions').classList.remove('hidden');
            });

            document.addEventListener('click', function(e) {
                  if (!e.target.closest('#main-search') && !e.target.closest('#search-suggestions')) {
                  document.getElementById('search-suggestions').classList.add('hidden');
                  }
            });

            // Simple search filter
            document.getElementById('main-search').addEventListener('input', function(e) {
                  const searchTerm = e.target.value.toLowerCase();
                  const tourCards = document.querySelectorAll('.tour-card');
                  let visibleCount = 0;
                  
                  tourCards.forEach(card => {
                  const title = card.querySelector('h3').textContent.toLowerCase();
                  const description = card.querySelector('p').textContent.toLowerCase();
                  const tags = card.querySelectorAll('.bg-\\[\\#f3e7e7\\]');
                  let tagText = '';
                  tags.forEach(tag => tagText += tag.textContent.toLowerCase() + ' ');
                  
                  if (title.includes(searchTerm) || description.includes(searchTerm) || tagText.includes(searchTerm)) {
                        card.style.display = 'block';
                        visibleCount++;
                  } else {
                        card.style.display = 'none';
                  }
                  });
                  
                  document.getElementById('results-count').textContent = `Showing ${visibleCount} of ${tourCards.length} tours`;
            });

            // Sort functionality
            document.querySelector('select').addEventListener('change', function(e) {
                  const sortBy = e.target.value;
                  const grid = document.getElementById('tours-grid');
                  const cards = Array.from(grid.querySelectorAll('.tour-card'));
                  
                  if (sortBy === 'Low to High') {
                  cards.sort((a, b) => parseInt(a.dataset.price) - parseInt(b.dataset.price));
                  } else if (sortBy === 'High to Low') {
                  cards.sort((a, b) => parseInt(b.dataset.price) - parseInt(a.dataset.price));
                  }
                  
                  cards.forEach(card => grid.appendChild(card));
            });
      </script>
</body>
</html>