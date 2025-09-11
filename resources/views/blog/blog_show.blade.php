<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <style>
        #content h1{font-size:2rem;font-weight:700;margin:1.2em 0 .6em}
        #content h2{font-size:1.75rem;font-weight:700;margin:1.1em 0 .55em}
        #content h3{font-size:1.5rem;font-weight:600;margin:1em 0 .5em}
        #content p{margin:1em 0;line-height:1.75}
        #content ul,
        #content ol{
            margin: 1em 0;
            padding-left: 1.25em;         /* お好みで */
            list-style-position: inside;  /* ← これで内側に */
            line-height: 1.7;
        }

        #content ul{ list-style: disc; }
        #content ul ul{ list-style: circle; margin-top:.3em; }
        #content ul ul ul{ list-style: square; margin-top:.2em; }

        #content ol{ list-style: decimal; }
        #content li{ margin: .35em 0; }
        #content li p{ margin: .25em 0; }
        /* Links */
        #content a {
            color: #1d4ed8;          /* 青 */
            text-decoration: underline;
            transition: color 0.2s;
        }
        #content a:hover {
            color: #2563eb;          /* 少し濃い青 */
        }
        #content a:visited {
            color: #6b21a8;          /* 紫 (訪問済みリンク) */
        }

          /* images */
        #content img{
            display: block;        /* 行間の隙間対策 */
            width: 100%;           /* w-full */
            height: 16rem;         /* h-64 */
            object-fit: cover;     /* object-cover */
            border-radius: .5rem;  /* rounded-lg (8px) */
        }
        @media (min-width: 768px){ /* md: */
            #content img{
                height: 20rem;       /* md:h-80 */
            }
        }
        /* もし「大文字」にしたいなら↓ */
        /* #content h2, #content h3 { text-transform: uppercase; } */
    </style>
</head>
<body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root"
        style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        
        @include('components.nav')

        <!-- Main Content -->
        <div class="flex justify-center">
            <div class="layout-content-container flex flex-col max-w-[900px] flex-1">
                
                <!-- Article Content -->
                <article class="py-6 px-4 md:px-6 md:py-8">
                    <header class="mb-8">
                        <!-- Category Badge -->
                        <div class="mb-4">
                            <span class="bg-[#e92929] text-white px-4 py-2 rounded-full text-sm font-medium">{{$blog->blogCategory->category_name}}</span>
                        </div>

                        <!-- Title -->
                        <h1 class="text-[#1b0e0e] text-3xl ms:text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] mb-6">
                            {{$blog->title}}
                        </h1>

                        <!-- Subtitle -->
                        <p class="text-[#994d4d] text-base ms:text-xl leading-relaxed mb-6">
                            {{$blog->subtitle}}
                        </p>

                        <!-- Meta Info -->
                        <div class="flex items-center gap-4 text-[#994d4d] text-sm mb-6">
                            <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</span>
                            <span>•</span>
                            <span>{{$blog->reading_time}} min read</span>
                        </div>
                    </header>

                    <!-- Featured Image -->
                    <div class="mb-8">
                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="" class="w-full h-64 md:h-80 object-cover rounded-lg">
                    </div>

                    <!-- Article Content -->
                    <div class="prose prose-lg max-w-none">
                        <div id="content"></div>
                        <!-- Call to Action -->
                        <div class="bg-[#e92929]/10 border border-[#e92929]/20 rounded-lg p-6 text-center mt-8">
                            <h3 class="text-[#e92929] text-lg md:text-xl font-bold mb-3">Ready to Start Your Japan Adventure?</h3>
                            <p class="text-[#1b0e0e] text-base mb-4">Let our experienced guides help you create the perfect itinerary.</p>
                            <a href="{{route("tours")}}" class="px-6 py-3 bg-[#e92929] text-sm md:text-base text-white rounded-lg font-bold hover:bg-[#d61f1f] transition-colors">
                                Plan Your Trip
                            </a>
                        </div>
                    </div>

                    <!-- Article Footer -->
                    <footer class="border-t border-[#f3e7e7] pt-8 mt-12">
                        <!-- Tags -->
                        <div class="mb-6">
                            <h4 class="text-[#1b0e0e] font-bold mb-3">Tags:</h4>
                            <div class="flex flex-wrap gap-2">
                                @php
                                    $tags = explode(",", $blog->tags);
                                @endphp
                                @foreach ($tags as $tag)
                                    <span class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-sm">{{$tag}}</span> 
                                @endforeach
                            </div>
                        </div>

                        <!-- Share -->
                        <div class="flex items-center gap-4 mb-8">
                            <span class="text-[#994d4d] text-sm font-medium">Share this article:</span>
                            <button class="flex items-center gap-2 px-3 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700 transition-colors">
                                <i class="fab fa-facebook-f"></i>
                                <span class="hidden md:block">Facebook</span>
                            </button>
                            <button class="flex items-center gap-2 px-3 py-2 bg-sky-500 text-white rounded-lg text-sm hover:bg-sky-600 transition-colors">
                                <i class="fab fa-twitter"></i>
                                <span class="hidden md:block">Twitter</span>
                            </button>
                        </div>
                    </footer>
                </article>
            </div>
        </div>

        <!-- Related Articles -->
        <section class="flex justify-center py-12 bg-[#f3e7e7]">
            <div class="layout-content-container flex flex-col max-w-[1100px] flex-1">
                <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-6">
                    Related Articles
                </h2>
                <div class="grid md:grid-cols-3 gap-6 p-4">
                    @foreach ($relatedBlogs as $blog)
                    {{-- @php
                        print_r($blog);
                        exit;
                    @endphp --}}
                        <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer">
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $blog->featured_image) }}"
                                    alt="Japanese culture"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                <div class="absolute top-3 left-3">
                                    <span class="bg-[#e92929] text-white px-2 py-1 rounded-full text-xs font-medium">{{$blog->blogCategory->category_name}}</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-[#1b0e0e] text-lg font-bold mb-2 group-hover:text-[#e92929] transition-colors">
                                    {{$blog->title}}
                                </h3>
                                <p class="text-[#994d4d] text-sm leading-relaxed mb-3">
                                    {{$blog->subtitle}}
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-[#994d4d] text-xs">{{$blog->reading_time}}min read</span>
                                    <a href="{{route("blog.show", $blog->id)}}"><span class="text-[#e92929] text-xs font-medium">Read More →</span></a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Footer -->
        @include('components.footer')
    </div>

    <style>
        /* Enhanced hover effects */
        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }

        .group:hover .group-hover\:text-\[#e92929\] {
            color: #e92929;
        }

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Button hover effects */
        button:hover {
            transform: translateY(-1px);
        }

        button:active {
            transform: translateY(0);
        }

        /* Link hover effects */
        a:hover {
            transition: all 0.2s ease;
        }

        /* Responsive typography */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 2rem;
            }

            .prose {
                font-size: 1rem;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
        const md = {!! json_encode($blog->content) !!}; // JSで正しい文字列になる
        const html = marked.parse(md);
        document.getElementById('content').innerHTML = html;
        
    </script>

    <script>
        // Social sharing functionality
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function() {
                const text = this.textContent.trim();
                if (text === 'Facebook') {
                    window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}`, '_blank');
                } else if (text === 'Twitter') {
                    window.open(`https://twitter.com/intent/tweet?url=${encodeURIComponent(window.location.href)}&text=Simple Travel Guide: Planning Your Perfect Japan Adventure`, '_blank');
                }
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

</body>
</html>