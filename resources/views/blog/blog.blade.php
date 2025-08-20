<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>ShogunTours - Travel Blog</title>
      <meta name="keywords"
            content="ShogunTours, ShogunTours-official, Japan tour, tokyo tour, Tokyo travel, Kyoto experience, Osaka trip, Japanese culture, foreign tourist guide, Japan travel package, Mt. Fuji tour, onsen experience, Japan sightseeing, travel blog, Japan travel tips">
      <meta rel="canonical" href="https://shoguntoursjapan.com/blog">
      <meta name="robots" content="index,follow">
      <meta property="og:title" content="ShogunTours - Travel Blog">
      <meta property="og:type" content="website">
      <meta name="description"
            content="Discover Japan through our travel blog. Get insider tips, cultural insights, and travel guides for your perfect Japan adventure. Expert advice from local guides.">
      <meta property="og:url" content="https://shoguntoursjapan.com/blog">
      <meta property="og:image" content="img/logo3.svg">
      <meta property="og:site_name" content="ShogunTours">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
      <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
            href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
      <link rel="shortcut icon" href="img/logo3.svg">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
      <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root overflow-x-hidden"
            style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
                  <!-- Header -->
                  @include('components.header')

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
                                                <div class="flex gap-4 flex-wrap justify-center">
                                                      <button onclick="scrollToSection('featured')"
                                                            class="flex min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#e92929] text-[#fcf8f8] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                                                            <span class="truncate">Featured Posts</span>
                                                      </button>
                                                      <button onclick="scrollToSection('categories')"
                                                            class="flex min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-white/20 backdrop-blur-sm text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-white/30 transition-colors border border-white/30">
                                                            <span class="truncate">Browse Topics</span>
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
                                                      <input type="text" placeholder="Search articles..."
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
                                                <button onclick="filterPosts('all')"
                                                      class="filter-btn active px-4 py-2 rounded-lg bg-[#e92929] text-white text-sm font-medium transition-all hover:bg-[#d61f1f]">
                                                      All Posts
                                                </button>
                                                <button onclick="filterPosts('travel-tips')"
                                                      class="filter-btn px-4 py-2 rounded-lg bg-white text-[#1b0e0e] text-sm font-medium transition-all hover:bg-[#f3e7e7] border border-[#e7d0d0]">
                                                      Travel Tips
                                                </button>
                                                <button onclick="filterPosts('culture')"
                                                      class="filter-btn px-4 py-2 rounded-lg bg-white text-[#1b0e0e] text-sm font-medium transition-all hover:bg-[#f3e7e7] border border-[#e7d0d0]">
                                                      Culture
                                                </button>
                                                <button onclick="filterPosts('food')"
                                                      class="filter-btn px-4 py-2 rounded-lg bg-white text-[#1b0e0e] text-sm font-medium transition-all hover:bg-[#f3e7e7] border border-[#e7d0d0]">
                                                      Food & Dining
                                                </button>
                                                <button onclick="filterPosts('destinations')"
                                                      class="filter-btn px-4 py-2 rounded-lg bg-white text-[#1b0e0e] text-sm font-medium transition-all hover:bg-[#f3e7e7] border border-[#e7d0d0]">
                                                      Destinations
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- Featured Article -->
                  <section id="featured" class="flex justify-center py-12">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <h2
                                    class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-6">
                                    Featured Article
                              </h2>
                              <div class="px-4">
                                    <article
                                          class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer"
                                          onclick="openArticle('featured-article')">
                                          <div class="relative h-64 md:h-80 overflow-hidden">
                                                <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=800&h=400&fit=crop"
                                                      alt="Mount Fuji at sunrise"
                                                      class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                <div class="absolute top-4 left-4">
                                                      <span
                                                            class="bg-[#e92929] text-white px-3 py-1 rounded-full text-sm font-medium">Featured</span>
                                                </div>
                                                <div class="absolute top-4 right-4">
                                                      <span
                                                            class="bg-black/50 text-white px-3 py-1 rounded-full text-sm">Destinations</span>
                                                </div>
                                          </div>
                                          <div class="p-6">
                                                <div class="flex items-center gap-4 mb-3 text-sm text-[#994d4d]">
                                                      <div class="flex items-center gap-2">
                                                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=32&h=32&fit=crop&crop=face"
                                                                  alt="Author" class="w-8 h-8 rounded-full">
                                                            <span>Yuki Tanaka</span>
                                                      </div>
                                                      <span>•</span>
                                                      <span>December 15, 2024</span>
                                                      <span>•</span>
                                                      <span>8 min read</span>
                                                </div>
                                                <h3
                                                      class="text-[#1b0e0e] text-2xl font-bold mb-3 group-hover:text-[#e92929] transition-colors">
                                                      The Ultimate Guide to Climbing Mount Fuji: Everything You Need to
                                                      Know
                                                </h3>
                                                <p class="text-[#994d4d] text-base leading-relaxed mb-4">
                                                      Mount Fuji, Japan's most iconic landmark, attracts millions of
                                                      visitors each year. But climbing this sacred mountain requires
                                                      careful planning and preparation. Our comprehensive guide covers
                                                      everything from the best climbing routes to essential gear, safety
                                                      tips, and cultural etiquette to ensure your Fuji adventure is both
                                                      safe and unforgettable.
                                                </p>
                                                <div class="flex items-center justify-between">
                                                      <div class="flex gap-2">
                                                            <span
                                                                  class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs">Hiking</span>
                                                            <span
                                                                  class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs">Mount
                                                                  Fuji</span>
                                                            <span
                                                                  class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs">Adventure</span>
                                                      </div>
                                                      <div class="flex items-center gap-2 text-[#994d4d]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                  height="16" fill="currentColor" viewBox="0 0 256 256">
                                                                  <path
                                                                        d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.69,146.26,196.16,128,206.8Z">
                                                                  </path>
                                                            </svg>
                                                            <span class="text-sm">247</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                  height="16" fill="currentColor" viewBox="0 0 256 256"
                                                                  class="ml-2">
                                                                  <path
                                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z">
                                                                  </path>
                                                            </svg>
                                                            <span class="text-sm">45</span>
                                                      </div>
                                                </div>
                                          </div>
                                    </article>
                              </div>
                        </div>
                  </section>

                  <!-- Categories Section -->
                  <section id="categories" class="flex justify-center py-12 bg-[#f3e7e7]">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <h2
                                    class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-6">
                                    Explore by Category
                              </h2>
                              <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
                                    <div class="category-card bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all cursor-pointer group"
                                          onclick="filterPosts('travel-tips')">
                                          <div
                                                class="w-12 h-12 bg-[#e92929]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#e92929]/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                      fill="#e92929" viewBox="0 0 256 256">
                                                      <path
                                                            d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                                                      </path>
                                                </svg>
                                          </div>
                                          <h3 class="text-[#1b0e0e] font-bold mb-2">Travel Tips</h3>
                                          <p class="text-[#994d4d] text-sm">Essential advice for visiting Japan</p>
                                          <span class="text-[#e92929] text-xs font-medium">24 articles</span>
                                    </div>

                                    <div class="category-card bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all cursor-pointer group"
                                          onclick="filterPosts('culture')">
                                          <div
                                                class="w-12 h-12 bg-[#e92929]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#e92929]/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                      fill="#e92929" viewBox="0 0 256 256">
                                                      <path
                                                            d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM48,48H208V88H48ZM48,208V104H208V208Z">
                                                      </path>
                                                </svg>
                                          </div>
                                          <h3 class="text-[#1b0e0e] font-bold mb-2">Culture</h3>
                                          <p class="text-[#994d4d] text-sm">Traditions, festivals, and customs</p>
                                          <span class="text-[#e92929] text-xs font-medium">18 articles</span>
                                    </div>

                                    <div class="category-card bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all cursor-pointer group"
                                          onclick="filterPosts('food')">
                                          <div
                                                class="w-12 h-12 bg-[#e92929]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#e92929]/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                      fill="#e92929" viewBox="0 0 256 256">
                                                      <path
                                                            d="M208,88H180.36A103.95,103.95,0,0,0,128,64V32a8,8,0,0,0-16,0V64A103.95,103.95,0,0,0,59.64,88H32a8,8,0,0,0,0,16H59.64A103.95,103.95,0,0,0,112,192v32a8,8,0,0,0,16,0V192a103.95,103.95,0,0,0,52.36-88H208a8,8,0,0,0,0-16ZM128,176a72,72,0,1,1,72-72A72.08,72.08,0,0,1,128,176Z">
                                                      </path>
                                                </svg>
                                          </div>
                                          <h3 class="text-[#1b0e0e] font-bold mb-2">Food & Dining</h3>
                                          <p class="text-[#994d4d] text-sm">Culinary adventures and local cuisine</p>
                                          <span class="text-[#e92929] text-xs font-medium">31 articles</span>
                                    </div>

                                    <div class="category-card bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all cursor-pointer group"
                                          onclick="filterPosts('destinations')">
                                          <div
                                                class="w-12 h-12 bg-[#e92929]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#e92929]/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                      fill="#e92929" viewBox="0 0 256 256">
                                                      <path
                                                            d="M240,208H224V96a16,16,0,0,0-16-16H164.94l-13.71-20.56A16,16,0,0,0,138,53H118a16,16,0,0,0-13.23,6.44L91.06,80H48A16,16,0,0,0,32,96V208H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,96H96a16,16,0,0,0,13.23-6.44L122,69h16l13.77,20.56A16,16,0,0,0,165,96h43V208H48Z">
                                                      </path>
                                                </svg>
                                          </div>
                                          <h3 class="text-[#1b0e0e] font-bold mb-2">Destinations</h3>
                                          <p class="text-[#994d4d] text-sm">Hidden gems and popular spots</p>
                                          <span class="text-[#e92929] text-xs font-medium">27 articles</span>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- Latest Articles -->
                  <section class="flex justify-center py-12">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <div class="flex items-center justify-between px-4 mb-6">
                                    <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em]">
                                          Latest Articles
                                    </h2>
                                    <button
                                          class="text-[#e92929] text-sm font-medium hover:text-[#d61f1f] transition-colors">
                                          View All →
                                    </button>
                              </div>

                              <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 p-4" id="articles-grid">
                                    @foreach ($blogs as $blog)
                                          <article
                                                class="article-card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer"
                                                data-category="travel-tips" onclick="openArticle({{$blog->id}})">
                                                <div class="relative h-48 overflow-hidden">
                                                      <img src="{{ asset('storage/' . $blog->featured_image) }}"
                                                            alt="Tokyo streets"
                                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                      <div class="absolute top-3 left-3">
                                                            <span
                                                                  class="bg-[#e92929] text-white px-2 py-1 rounded-full text-xs font-medium">{{$blog->category}}</span>
                                                      </div>
                                                </div>
                                                <div class="p-4">
                                                      <h3
                                                            class="text-[#1b0e0e] text-lg font-bold mb-2 group-hover:text-[#e92929] transition-colors line-clamp-2">
                                                            {{$blog->title}}
                                                      </h3>
                                                      <p class="text-[#994d4d] text-sm leading-relaxed mb-3 line-clamp-3">
                                                            {{$blog->subtitle}}
                                                      </p>
                                                      <div class="flex items-center justify-between">
                                                            <span class="text-[#994d4d] text-xs">{{$blog->reading_time}} min read</span>
                                                            
                                                      </div>
                                                </div>
                                          </article>
                                    @endforeach
                              </div>

                              <!-- Load More Button -->
                              <div class="text-center pt-8">
                                    <button
                                          class="px-8 py-3 bg-[#e92929] text-white rounded-lg font-medium hover:bg-[#d61f1f] transition-colors">
                                          Load More Articles
                                    </button>
                              </div>
                        </div>
                  </section>

                  <!-- Newsletter Section -->
                  <section class="flex justify-center py-12 bg-[#f3e7e7]">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <div class="text-center px-4">
                                    <h2
                                          class="text-[#1b0e0e] text-[28px] font-bold leading-tight tracking-[-0.015em] mb-4">
                                          Never Miss a Travel Tip
                                    </h2>
                                    <p class="text-[#994d4d] text-lg mb-8">
                                          Get our latest travel guides, cultural insights, and exclusive Japan travel
                                          tips delivered to your inbox.
                                    </p>
                                    <div class="max-w-md mx-auto">
                                          <div class="flex gap-3">
                                                <input type="email" placeholder="Enter your email"
                                                      class="flex-1 px-4 py-3 rounded-lg border border-[#e7d0d0] bg-white text-[#1b0e0e] placeholder:text-[#994d4d] focus:outline-none focus:border-[#e92929] transition-colors">
                                                <button
                                                      class="px-6 py-3 bg-[#e92929] text-white rounded-lg font-medium hover:bg-[#d61f1f] transition-colors whitespace-nowrap">
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
                                    <div
                                          class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                                          <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors"
                                                href="#tours">Tours</a>
                                          <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors"
                                                href="#blog">Blog</a>
                                          <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors"
                                                href="#">Privacy Policy</a>
                                          <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors"
                                                href="#">Terms of Service</a>
                                    </div>
                                    <p class="text-white text-sm font-normal leading-normal opacity-80">© 2024 ShogunTours.
                                          All rights reserved.</p>
                              </div>
                        </div>
                  </footer>
            </div>
      </div>

      <script>
            // Smooth scrolling function
            function scrollToSection(sectionId) {
                  document.getElementById(sectionId).scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                  });
            }

            // Filter posts function
            function filterPosts(category) {
                  const articles = document.querySelectorAll('.article-card');
                  const buttons = document.querySelectorAll('.filter-btn');

                  // Update button styles
                  buttons.forEach(btn => {
                        btn.classList.remove('active', 'bg-[#e92929]', 'text-white');
                        btn.classList.add('bg-white', 'text-[#1b0e0e]', 'border', 'border-[#e7d0d0]');
                  });

                  event.target.classList.add('active', 'bg-[#e92929]', 'text-white');
                  event.target.classList.remove('bg-white', 'text-[#1b0e0e]', 'border', 'border-[#e7d0d0]');

                  // Filter articles
                  articles.forEach(article => {
                        if (category === 'all' || article.dataset.category === category) {
                              article.style.display = 'block';
                              article.style.animation = 'fadeIn 0.5s ease-in';
                        } else {
                              article.style.display = 'none';
                        }
                  });
            }

            // Open article function (placeholder)
            function openArticle(articleId) {
                  window.location.href = `/blog/${articleId}`

            }

            // Search functionality
            document.querySelector('input[type="text"]').addEventListener('input', function(e) {
                  const searchTerm = e.target.value.toLowerCase();
                  const articles = document.querySelectorAll('.article-card');

                  articles.forEach(article => {
                        const title = article.querySelector('h3').textContent.toLowerCase();
                        const content = article.querySelector('p').textContent.toLowerCase();

                        if (title.includes(searchTerm) || content.includes(searchTerm)) {
                              article.style.display = 'block';
                        } else {
                              article.style.display = searchTerm === '' ? 'block' : 'none';
                        }
                  });
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

            // Newsletter subscription
            document.querySelector('button').addEventListener('click', function(e) {
                  if (e.target.textContent.trim() === 'Subscribe') {
                        const email = document.querySelector('input[type="email"]').value;
                        if (email) {
                              alert('Thank you for subscribing! We\'ll send you amazing Japan travel content.');
                              document.querySelector('input[type="email"]').value = '';
                        } else {
                              alert('Please enter your email address.');
                        }
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
            .article-card:hover {
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

            /* Responsive adjustments */
            @media (max-width: 768px) {
                  .grid {
                        grid-template-columns: 1fr;
                  }

                  .md\:grid-cols-2 {
                        grid-template-columns: 1fr;
                  }

                  .md\:grid-cols-4 {
                        grid-template-columns: repeat(2, 1fr);
                  }
            }
      </style>
</body>

</html>
