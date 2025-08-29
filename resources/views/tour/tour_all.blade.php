<!DOCTYPE html>
<html lang="ja">
<head>
      @include('components.head')
</head>
<body>
      <!-- Header -->
      @include('components.nav')
      <!-- Hero Section -->
      <div class="flex justify-center">
            <div class="layout-content-container flex flex-col max-w-[1900px] flex-1">
                  <div class="@container">
                        <div class="@[480px]:p-4">
                              <div class="flex min-h-[400px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4"
                                    style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://images.unsplash.com/photo-1528164344705-47542687000d?w=1200&h=600&fit=crop");'>
                                    <div class="flex flex-col gap-2 text-center">
                                          <h1
                                                class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                                                Discover Japan Through Stories
                                          </h1>
                                          <h2
                                                class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                                Expert travel tips, cultural insights, and hidden gems from
                                                local guides
                                          </h2>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!-- Search and Filter Section -->
      <section class="flex justify-center py-8 bg-[#f3e7e7] sticky top-0 z-10 shadow-sm backdrop-blur-sm">
            <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                  <div class="px-4">
                  <!-- Main Search Bar -->
                  <div class="mb-6">
                        <div class="relative max-w-2xl mx-auto">
                              <div class="relative">
                              <input type="text" id="main-search" placeholder="Search tours by destination, activity, or duration..." 
                                    class="w-full px-6 py-4 pl-14 pr-32 rounded-xl bg-white border-2 border-[#e7d0d0] text-[#1b0e0e] placeholder:text-[#994d4d] focus:outline-none focus:border-[#e92929] focus:ring-4 focus:ring-[#e92929]/10 transition-all text-lg shadow-lg">
                              <button class="absolute left-5 top-1/2 transform -translate-y-1/2" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#994d4d" viewBox="0 0 256 256">
                                          <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
                                    </svg>
                              </button>
                              </div>
                              
                              <!-- Search Suggestions -->
                              <div id="search-suggestions" class="hidden absolute top-full left-0 right-0 bg-white border border-[#e7d0d0] rounded-lg mt-2 shadow-lg z-20 max-h-64 overflow-y-auto">
                              <div id="recent-searches" class="p-3">
                                    <h4 class="text-sm font-medium text-[#1b0e0e] mb-2">Popular Searches</h4>
                                    <div class="flex flex-wrap gap-2">
                                          <span class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs cursor-pointer hover:bg-[#e7d0d0]">Tokyo</span>
                                          <span class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs cursor-pointer hover:bg-[#e7d0d0]">Mt. Fuji</span>
                                          <span class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs cursor-pointer hover:bg-[#e7d0d0]">Kyoto</span>
                                    </div>
                              </div>
                              </div>
                        </div>
                  </div>
                  
                  <!-- Results Info and Filters -->
                  <div class="flex items-center justify-between text-sm text-[#994d4d] mb-4">
                        <div class="flex items-center gap-4">
                              <span id="results-count">Showing 6 of 24 tours</span>
                              <div id="search-status" class="hidden">
                              <i class="fas fa-spinner fa-spin mr-1"></i>
                              Searching...
                              </div>
                        </div>
                        <div class="flex items-center gap-3">
                              <select class="px-3 py-2 border border-[#e7d0d0] rounded-lg text-sm focus:outline-none focus:border-[#e92929]">
                              <option>Sort by Price</option>
                              <option>Low to High</option>
                              <option>High to Low</option>
                              </select>
                              <select class="px-3 py-2 border border-[#e7d0d0] rounded-lg text-sm focus:outline-none focus:border-[#e92929]">
                              <option>All Durations</option>
                              <option>1-3 days</option>
                              <option>4-7 days</option>
                              <option>8+ days</option>
                              </select>
                        </div>
                  </div>
                  </div>
            </div>
      </section>

      <!-- Featured Tour Banner -->
      <!-- <section class="flex justify-center py-6">
            <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                  <div class="px-4">
                  <div class="bg-gradient-to-r from-[#e92929] to-[#d61f1f] rounded-xl p-6 text-white relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                        <div class="relative z-10">
                              <div class="flex items-center gap-2 mb-2">
                              <i class="fas fa-star text-yellow-300"></i>
                              <span class="text-sm font-medium">Featured Tour</span>
                              </div>
                              <h3 class="text-xl font-bold mb-2">Ultimate Tokyo Experience</h3>
                              <p class="text-sm opacity-90 mb-3">3 days exploring Tokyo's culture, cuisine, and hidden gems with expert local guides</p>
                              <div class="flex items-center justify-between">
                              <div class="flex items-center gap-4">
                                    <span class="text-lg font-bold">¥89,000</span>
                                    <span class="text-sm opacity-75">per person</span>
                              </div>
                              <button class="bg-white text-[#e92929] px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                                    View Details
                              </button>
                              </div>
                        </div>
                  </div>
                  </div>
            </div>
      </section> -->

      <!-- Tours Grid -->
      <section class="flex justify-center py-8">
            <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                  <div class="px-4">
                  <div id="tours-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-300">
                        @foreach ($tours as $tour)
                              <div class="tour-card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer" 
                                    data-price="45000" data-duration="1" data-category="cultural">
                                    <div class="relative h-48 overflow-hidden">
                                          <img src="{{ asset('storage/' . $tour['hero_image']) }}" alt="{{$tour->title}}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                          {{-- <div class="absolute top-3 left-3">
                                                <span class="bg-[#e92929] text-white px-2 py-1 rounded-full text-xs font-medium">{{$tour->badge}}</span>
                                          </div> --}}
                                          <div class="absolute top-3 right-3">
                                                <div class="bg-black/50 text-white px-2 py-1 rounded-full text-xs flex items-center gap-1">
                                                      <i class="fas fa-star text-yellow-300"></i>
                                                      <span>{{number_format($tour->average_rate, 1)}}</span>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="p-4">
                                          <div class="flex items-center gap-2 mb-2 text-xs text-[#994d4d]">
                                                <i class="fas fa-clock"></i>
                                                <span>Full Day ({{$tour->minimum_duration}} hours~)</span>
                                                <span>•</span>
                                                <i class="fas fa-users"></i>
                                                <span>Max 12 people</span>
                                          </div>
                                          <h3 class="text-[#1b0e0e] text-lg font-bold mb-2  transition-colors line-clamp-2">{{$tour->title}}</h3>
                                          <p class="text-[#994d4d] text-sm leading-relaxed mb-3 line-clamp-3">{{$tour->subtitle}}</p>
                                          <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-2">
                                                      <div class="flex items-center gap-1 text-[#994d4d]">
                                                            {{!!\App\Services\Util\FormatService::generateStar($tour->average_rate)!!}}
                                                            <span class="text-sm font-medium">{{number_format($tour->average_rate, 1)}}</span>
                                                      </div>
                                                      <span class="text-[#994d4d] text-xs">({{$tour->review_count ?? 0}} reviews)</span>
                                                </div>
                                                <div class="text-right">
                                                      <div class="text-[#e92929] text-lg font-bold">¥{{ number_format($tour->minimum_price) }}~</div>
                                                      {{-- <div class="text-[#994d4d] text-xs">per person</div> --}}
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        @endforeach
                  </div>
                  
                  <!-- Load More Button -->
                  <div class="text-center mt-8">
                        <button class="bg-[#e92929] text-white px-8 py-3 rounded-lg font-medium hover:bg-[#d61f1f] transition-colors">
                              Load More Tours
                        </button>
                  </div>
                  </div>
            </div>
      </section>

      <!-- Newsletter Section -->
      <section class="flex justify-center py-12 bg-[#f3e7e7]">
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
      </section>

      <!-- Footer -->
      @include('components.footer')

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