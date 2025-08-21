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
                  <!-- Featured Article -->
                  <section id="featured" class="flex justify-center py-12">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <h2
                                    class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-6">
                                    Featured Article
                              </h2>
                              <a class="px-4" href="{{route("blog.show", $featuredBlog->id)}}">
                                    <article
                                          class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer"
                                          onclick="openArticle('featured-article')">
                                          <div class="relative h-64 md:h-80 overflow-hidden">
                                                <img src="{{ asset('storage/' . $featuredBlog->featured_image) }}"
                                                      alt="Mount Fuji at sunrise"
                                                      class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                <div class="absolute top-4 left-4">
                                                      <span
                                                            class="bg-[#e92929] text-white px-3 py-1 rounded-full text-sm font-medium">Featured</span>
                                                </div>
                                                <div class="absolute top-4 right-4">
                                                      <span
                                                            class="bg-black/50 text-white px-3 py-1 rounded-full text-sm">{{$featuredBlog->blogCategory->category_name}}</span>
                                                </div>
                                          </div>
                                          <div class="p-6">
                                                <div class="flex items-center gap-4 mb-3 text-sm text-[#994d4d]">
                                                      <span>{{ \Carbon\Carbon::parse($featuredBlog->updated_at)->format('F d, Y') }}</span>
                                                      <span>•</span>
                                                      <span>{{$featuredBlog->reading_time}} min read</span>
                                                </div>
                                                <h3 class="text-[#1b0e0e] text-2xl font-bold mb-3 group-hover:text-[#e92929] transition-colors">
                                                      {{$featuredBlog->title}}
                                                </h3>
                                                <p class="text-[#994d4d] text-base leading-relaxed mb-4">
                                                      {{$featuredBlog->subtitle}}
                                                </p>
                                                <div class="flex items-center justify-between">
                                                      <div class="flex gap-2">
                                                      <div class="flex flex-wrap gap-2">
                                                            @php
                                                                  $tags = explode(",", $featuredBlog->tags);
                                                            @endphp
                                                            @foreach ($tags as $tag)
                                                                  <span class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs">{{$tag}}</span>
                                                            @endforeach
                                                      </div>
                                                </div>
                                          </div>
                                    </article>
                              </a>
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
                                    @foreach ($categories as $category)
                                          <a class="category-card bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all cursor-pointer group"
                                                href={{route("blogs", $category->id)}}>
                                                <div class="w-12 h-12 bg-[#e92929]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#e92929]/20 transition-colors">
                                                      <i class="text-[#e92929] {{$category->category_icon}}"></i>
                                                </div>
                                                <h3 class="text-[#1b0e0e] font-bold mb-2">{{$category->category_name}}</h3>
                                                <p class="text-[#994d4d] text-sm">{{$category->category_description}}</p>
                                                <span class="text-[#e92929] text-xs font-medium">{{count($category->blogs)}} articles</span>
                                          </a>
                                    @endforeach
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
                                    <a href={{route("blogs", "all")}}
                                          class="text-[#e92929] text-sm font-medium hover:text-[#d61f1f] transition-colors">
                                          View All →
                                    </a>
                              </div>

                              <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 p-4" id="articles-grid">
                                    @foreach ($categorizedBlogs as $category => $blogs)
                                          @foreach ($blogs as $blog)
                                                <article class="article-card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer"
                                                      data-category={{$blog->blog_category_id}} onclick="openArticle({{$blog->id}})">
                                                      <div class="relative h-48 overflow-hidden">
                                                            <img src="{{ asset('storage/' . $blog->featured_image) }}"
                                                                  alt="Tokyo streets"
                                                                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                            <div class="absolute top-3 left-3">
                                                                  <span
                                                                        class="bg-[#e92929] text-white px-2 py-1 rounded-full text-xs font-medium">{{$blog->blogCategory->category_name}}</span>
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
                                    @endforeach
                              </div>

                              <!-- Load More Button -->
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

                  console.log(category);
                  
                  articles.forEach(article => {
                        if (category === 'all' || article.dataset.category == category) {
                              console.log("2222");
                              
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
