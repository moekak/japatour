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
                                                      <input type="text" id="main-search" name="search" placeholder="Search articles by title, content, or tags..." 
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
                                                            <h4 class="text-sm font-medium text-[#1b0e0e] mb-2">Recent Searches</h4>
                                                            <div class="text-sm text-[#994d4d]">No recent searches</div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    
                                    <!-- Results Info and View Toggle -->
                                    <div class="flex items-center justify-between text-sm text-[#994d4d]">
                                          <div class="flex items-center gap-4">
                                                <span id="results-count">Showing 6 of 156 articles</span>
                                                <div id="search-status" class="hidden">
                                                      <i class="fas fa-spinner fa-spin mr-1"></i>
                                                      Searching...
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- Articles Grid -->
                  <section class="flex justify-center py-12">
                        <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                              <div class="px-4">
                                    <div id="articles-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 transition-all duration-300">
                                          @foreach ($blogs as $blog)
                                                @if ($blog->blog_category_id == request()->route('category') || request()->route('category') === "all")
                                                      <a href={{route("blog.show", $blog->id)}} class="article-card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer" data-tag={{$blog->tags}} data-category={{$blog->blog_category_id}} data-date="2024-01-15" data-reading-time="8">
                                                            <div class="relative h-48 overflow-hidden">
                                                                  <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Mount Fuji" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                                  <div class="absolute top-3 left-3">
                                                                        <span class="bg-[#e92929] text-white px-2 py-1 rounded-full text-xs font-medium">{{$blog->blogCategory->category_name}}</span>
                                                                  </div>
                                                            </div>
                                                            <div class="p-4">
                                                                  <div class="flex items-center gap-2 mb-2 text-xs text-[#994d4d]">
                                                                        <span>{{ \Carbon\Carbon::parse($blog->updated_at)->format('F d, Y') }}</span>
                                                                        <span>•</span>
                                                                        <span>{{$blog->reading_time}} min read</span>
                                                                  </div>
                                                                  <h3 class="text-[#1b0e0e] text-lg font-bold mb-2 group-hover:text-[#e92929] transition-colors line-clamp-2">
                                                                        {{$blog->title}}
                                                                  </h3>
                                                                  <p class="text-[#994d4d] text-sm leading-relaxed mb-3 line-clamp-3">
                                                                        {{$blog->subtitle}}
                                                                  </p>
                                                                  <div class="flex items-center justify-between">
                                                                        @php
                                                                              $tags = explode(",", $blog->tags)
                                                                        @endphp
                                                                        <div class="flex gap-1 items-center overflow-hidden">
                                                                              @php
                                                                                    $maxVisibleTags = 2; // 表示する最大タグ数
                                                                                    $visibleTags = array_slice($tags, 0, $maxVisibleTags);
                                                                                    $hiddenCount = count($tags) - $maxVisibleTags;
                                                                              @endphp
                                                                              
                                                                              @foreach ($visibleTags as $tag)
                                                                                    <span class="bg-[#f3e7e7] text-[#1b0e0e] px-2 py-1 rounded-full text-xs whitespace-nowrap flex-shrink-0">{{$tag}}</span>
                                                                              @endforeach
                                                                              
                                                                              @if ($hiddenCount > 0)
                                                                                    <span class="bg-[#e7d0d0] text-[#994d4d] px-2 py-1 rounded-full text-xs whitespace-nowrap flex-shrink-0">+{{$hiddenCount}}</span>
                                                                              @endif
                                                                        </div>
                                                                        <div class="flex items-center gap-1 text-[#994d4d]">
                                                                              <i class="far fa-eye text-xs"></i>
                                                                              <span class="text-xs">2.1k</span>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                @endif
                                                
                                          @endforeach
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- Newsletter Section -->
                  <section class="flex justify-center py-12 bg-[#f3e7e7]">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <div class="text-center px-4">
                                    <h2 class="text-[#1b0e0e] text-[28px] font-bold leading-tight tracking-[-0.015em] mb-4">
                                          Never Miss a Travel Tip
                                    </h2>
                                    <p class="text-[#994d4d] text-lg mb-8">
                                          Get our latest travel guides, cultural insights, and exclusive Japan travel tips delivered to your inbox.
                                    </p>
                                    <div class="max-w-md mx-auto">
                                          <div class="flex gap-3">
                                                <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-lg border border-[#e7d0d0] bg-white text-[#1b0e0e] placeholder:text-[#994d4d] focus:outline-none focus:border-[#e92929] transition-colors">
                                                <button class="px-6 py-3 bg-[#e92929] text-white rounded-lg font-medium hover:bg-[#d61f1f] transition-colors whitespace-nowrap">
                                                      Subscribe
                                                </button>
                                          </div>
                                          <p class="text-[#994d4d] text-sm mt-3">
                                                Join 12,000+ travelers. Unsubscribe anytime.
                                          </p>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- Footer -->
                  <footer class="flex justify-center bg-[#1b0e0e] text-white">
                        <div class="flex max-w-[960px] flex-1 flex-col">
                              <div class="flex flex-col gap-6 px-5 py-10 text-center @container">
                                    <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                                          <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors" href="#tours">Tours</a>
                                          <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors" href="#blog">Blog</a>
                                          <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors" href="#">Privacy Policy</a>
                                          <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors" href="#">Terms of Service</a>
                                    </div>
                                    <p class="text-white text-sm font-normal leading-normal opacity-80">© 2024 ShogunTours. All rights reserved.</p>
                              </div>
                        </div>
                  </footer>
            </div>
      </div>

      <script>
            let activeFilters = {
                  categories: [],
                  tags: [],
                  readingTime: '',
                  searchTerm: ''
            };

            let recentSearches = JSON.parse(localStorage.getItem('recentSearches') || '[]');

            // Initialize
            document.addEventListener('DOMContentLoaded', function() {
                  updateRecentSearches();
                  updateResultsCount();
            });


            // Search functionality
            function handleSearch() {
                  const searchInput = document.getElementById('main-search');
                  const searchTerm = searchInput.value.toLowerCase().trim();
                  
                  activeFilters.searchTerm = searchTerm;
                  
                  if (searchTerm) {

                        addToRecentSearches(searchTerm);
                  } 
                  
                  filterArticles();
                  updateActiveFiltersDisplay();
            }

            function clearSearch() {
                  document.getElementById('main-search').value = '';
                  activeFilters.searchTerm = '';
                  filterArticles();
                  updateActiveFiltersDisplay();
            }

            function setSearchTerm(term) {
                  document.getElementById('main-search').value = term;
                  document.getElementById('search-suggestions').classList.add('hidden');
                  handleSearch();
            }

            // Search suggestions
            document.getElementById('main-search').addEventListener('focus', function() {
                  document.getElementById('search-suggestions').classList.remove('hidden');
            });

            document.getElementById('main-search').addEventListener('input', function() {
                  handleSearch();
            });

            document.addEventListener('click', function(e) {
                  if (!e.target.closest('#main-search') && !e.target.closest('#search-suggestions')) {
                        document.getElementById('search-suggestions').classList.add('hidden');
                  }
            });

            // Recent searches management
            function addToRecentSearches(term) {
                  if (term.length < 2) return;
                  
                  recentSearches = recentSearches.filter(search => search !== term);
                  recentSearches.unshift(term);
                  recentSearches = recentSearches.slice(0, 5);
                  
                  localStorage.setItem('recentSearches', JSON.stringify(recentSearches));
                  updateRecentSearches();
            }

            function updateRecentSearches() {
                  const container = document.getElementById('recent-searches');
                  if (recentSearches.length === 0) {
                        container.innerHTML = '<h4 class="text-sm font-medium text-[#1b0e0e] mb-2">Recent Searches</h4><div class="text-sm text-[#994d4d]">No recent searches</div>';
                        return;
                  }
                  
                  const html = `
                        <h4 class="text-sm font-medium text-[#1b0e0e] mb-2">Recent Searches</h4>
                        <div class="space-y-1">
                              ${recentSearches.map(search => `
                                    <button onclick="setSearchTerm('${search}')" class="block w-full text-left px-2 py-1 text-sm text-[#994d4d] hover:text-[#e92929] hover:bg-[#f3e7e7] rounded transition-colors">
                                          <i class="fas fa-history mr-2"></i>${search}
                                    </button>
                              `).join('')}
                        </div>
                  `;
                  container.innerHTML = html;
            }

            // Category filtering
            function updateCategoryFilter() {
                  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                  const allCheckbox = document.querySelector('input[value="all"]');
                  const categoryCheckboxes = Array.from(checkboxes).filter(cb => cb.value !== 'all');
                  
                  if (event.target.value === 'all') {
                        if (event.target.checked) {
                              categoryCheckboxes.forEach(cb => cb.checked = false);
                              activeFilters.categories = [];
                        }
                  } else {
                        if (event.target.checked) {
                              allCheckbox.checked = false;
                              activeFilters.categories.push(event.target.value);
                        } else {
                              activeFilters.categories = activeFilters.categories.filter(cat => cat !== event.target.value);
                              if (activeFilters.categories.length === 0) {
                                    allCheckbox.checked = true;
                              }
                        }
                  }
                  
                  filterArticles();
                  updateActiveFiltersDisplay();
            }

            // Tag filtering
            function toggleTag(tag) {
                  const button = event.target;
                  const isActive = button.classList.contains('active');
                  
                  if (isActive) {
                        button.classList.remove('active', 'bg-[#e92929]', 'text-white', 'border-[#e92929]');
                        button.classList.add('bg-[#f3e7e7]', 'text-[#1b0e0e]', 'border-transparent');
                        activeFilters.tags = activeFilters.tags.filter(t => t !== tag);
                  } else {
                        button.classList.add('active', 'bg-[#e92929]', 'text-white', 'border-[#e92929]');
                        button.classList.remove('bg-[#f3e7e7]', 'text-[#1b0e0e]', 'border-transparent');
                        activeFilters.tags.push(tag);
                  }
                  
                  filterArticles();
                  updateActiveFiltersDisplay();
            }


            // Main filter function
            function filterArticles() {
                  const articles = document.querySelectorAll('.article-card');
                  const searchStatus = document.getElementById('search-status');
                  
                  searchStatus.classList.remove('hidden');
                  
                  setTimeout(() => {
                        let visibleCount = 0;
                        
                        articles.forEach(article => {
                              let isVisible = true;
                              
                              // Search term filter
                              if (activeFilters.searchTerm) {
                                    const title = article.querySelector('h3').textContent.toLowerCase();
                                    const content = article.querySelector('p').textContent.toLowerCase();
                                    const articleTags = Array.from(article.querySelectorAll('.bg-\\[\\#f3e7e7\\]')).map(tag => tag.textContent.toLowerCase());
                                    
                                    const searchInTitle = title.includes(activeFilters.searchTerm);
                                    const searchInContent = content.includes(activeFilters.searchTerm);
                                    const searchInTags = articleTags.some(tag => tag.includes(activeFilters.searchTerm));
                                    
                                    if (!searchInTitle && !searchInContent && !searchInTags) {
                                          isVisible = false;
                                    }
                              }
                              
                              
                              if (isVisible) {
                                    article.style.display = 'block';
                                    article.style.animation = 'fadeIn 0.5s ease-in';
                                    visibleCount++;
                              } else {
                                    article.style.display = 'none';
                              }
                        });
                        
                        updateResultsCount(visibleCount);
                        searchStatus.classList.add('hidden');
                  }, 300);
            }


            // Update results count
            function updateResultsCount(count = null) {
                  const totalArticles = document.querySelectorAll('.article-card').length;
                  const visibleArticles = count !== null ? count : document.querySelectorAll('.article-card[style*="display: block"], .article-card:not([style*="display: none"])').length;
                  document.getElementById('results-count').textContent = `Showing ${visibleArticles} of ${totalArticles} articles`;
            }

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

            .article-card:hover {
                  transform: translateY(-2px);
            }

            .view-toggle.active {
                  background-color: white;
                  color: #e92929;
            }


            /* Enhanced hover effects */
            button:hover {
                  transform: translateY(-1px);
            }

            button:active {
                  transform: translateY(0);
            }

            input:focus {
                  box-shadow: 0 0 0 3px rgba(233, 41, 41, 0.1);
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                  .grid {
                        grid-template-columns: 1fr;
                  }
                  .md\:grid-cols-2 {
                        grid-template-columns: 1fr;
                  }
                  .lg\:grid-cols-3 {
                        grid-template-columns: 1fr;
                  }
            }

            @media (max-width: 640px) {
                  .flex-col.sm\:flex-row {
                        flex-direction: column;
                  }
            }
      </style>
</body>

</html>