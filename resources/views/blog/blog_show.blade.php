<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog Template - ShogunTours</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
    <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root overflow-x-hidden"
        style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        
        <!-- Header -->
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f3e7e7] px-10 py-3 sticky top-0 bg-[#fcf8f8] z-50">
            <div class="flex items-center gap-4 text-[#1b0e0e]">
                <div class="size-4">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z" fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.998 35.764C39.9944 35.7463 39.9875 35.7155 39.9748 35.6706C39.9436 35.5601 39.8949 35.4259 39.8346 35.2825C39.8168 35.2403 39.7989 35.1993 39.7813 35.1602C38.5103 34.2887 35.9788 33.0607 33.7095 32.5189C30.9875 31.8691 27.6413 31.4783 24 31.4783C20.3587 31.4783 17.0125 31.8691 14.2905 32.5189C12.0012 33.0654 9.44505 34.3104 8.18538 35.1832C8.17384 35.2075 8.16216 35.233 8.15052 35.2592C8.09919 35.3751 8.05721 35.4886 8.02977 35.589C8.00356 35.6848 8.00039 35.7333 8.00004 35.7388C8.00004 35.739 8 35.7393 8.00004 35.7388C8.00004 35.7641 8.0104 36.0767 8.68485 36.6314C9.34546 37.1746 10.4222 37.7531 11.9291 38.2772C14.9242 39.319 19.1919 40 24 40C28.8081 40 33.0758 39.319 36.0709 38.2772C37.5778 37.7531 38.6545 37.1746 39.3151 36.6314C39.9006 36.1499 39.9857 35.8511 39.998 35.764ZM4.95178 32.7688L21.4543 6.30267C22.6288 4.4191 25.3712 4.41909 26.5457 6.30267L43.0534 32.777C43.0709 32.8052 43.0878 32.8338 43.104 32.8629L41.3563 33.8352C43.104 32.8629 43.1038 32.8626 43.104 32.8629L43.1051 32.865L43.1065 32.8675L43.1101 32.8739L43.1199 32.8918C43.1276 32.906 43.1377 32.9246 43.1497 32.9473C43.1738 32.9925 43.2062 33.0545 43.244 33.1299C43.319 33.2792 43.4196 33.489 43.5217 33.7317C43.6901 34.1321 44 34.9311 44 35.7391C44 37.4427 43.003 38.7775 41.8558 39.7209C40.6947 40.6757 39.1354 41.4464 37.385 42.0552C33.8654 43.2794 29.133 44 24 44C18.867 44 14.1346 43.2794 10.615 42.0552C8.86463 41.4464 7.30529 40.6757 6.14419 39.7209C4.99695 38.7775 3.99999 37.4427 3.99999 35.7391C3.99999 34.8725 4.29264 34.0922 4.49321 33.6393C4.60375 33.3898 4.71348 33.1804 4.79687 33.0311C4.83898 32.9556 4.87547 32.8935 4.9035 32.8471C4.91754 32.8238 4.92954 32.8043 4.93916 32.7889L4.94662 32.777L4.95178 32.7688ZM35.9868 29.004L24 9.77997L12.0131 29.004C12.4661 28.8609 12.9179 28.7342 13.3617 28.6282C16.4281 27.8961 20.0901 27.4783 24 27.4783C27.9099 27.4783 31.5719 27.8961 34.6383 28.6282C35.082 28.7342 35.5339 28.8609 35.9868 29.004Z" fill="currentColor"></path>
                    </svg>
                </div>
                <h2 class="text-[#1b0e0e] text-lg font-bold leading-tight tracking-[-0.015em]">ShogunTours</h2>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="flex items-center gap-9">
                    <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors" href="#home">Home</a>
                    <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors" href="#blog">Blog</a>
                    <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors" href="#about">About</a>
                    <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors" href="#contact">Contact</a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="flex justify-center">
            <div class="layout-content-container flex flex-col max-w-[900px] flex-1">
                
                <!-- Article Content -->
                <article class="px-6 py-8">
                    <header class="mb-8">
                        <!-- Category Badge -->
                        <div class="mb-4">
                            <span class="bg-[#e92929] text-white px-4 py-2 rounded-full text-sm font-medium">{{$blog->category}}</span>
                        </div>

                        <!-- Title -->
                        <h1 class="text-[#1b0e0e] text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] mb-6">
                            {{$blog->title}}
                        </h1>

                        <!-- Subtitle -->
                        <p class="text-[#994d4d] text-xl leading-relaxed mb-6">
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
                        {{-- <p class="text-[#1b0e0e] text-lg leading-relaxed mb-6">
                            Japan offers an incredible blend of ancient traditions and modern innovation, making it one of the world's most fascinating travel destinations. Whether you're planning your first visit or returning for another adventure, proper preparation ensures you'll make the most of your journey.
                        </p>

                        <h2 class="text-[#1b0e0e] text-3xl font-bold mb-6 mt-10">Getting Started</h2>
                        
                        <p class="text-[#1b0e0e] text-lg leading-relaxed mb-6">
                            The key to a successful trip lies in understanding both the practical aspects and cultural nuances of traveling in Japan. Here are the essential elements to consider when planning your adventure.
                        </p>

                        <h3 class="text-[#1b0e0e] text-2xl font-bold mb-4 mt-8">Transportation</h3>
                        
                        <p class="text-[#1b0e0e] text-lg leading-relaxed mb-6">
                            Japan's transportation system is world-renowned for its efficiency and punctuality. The JR Pass can be an excellent investment for travelers planning to visit multiple cities, while local IC cards make urban transportation seamless.
                        </p>

                        <img src="https://images.unsplash.com/photo-1464822759844-d150165c99fd?w=600&h=300&fit=crop"
                             alt="Japanese bullet train"
                             class="w-full h-48 object-cover rounded-lg mb-6">

                        <h3 class="text-[#1b0e0e] text-2xl font-bold mb-4 mt-8">Cultural Etiquette</h3>
                        
                        <p class="text-[#1b0e0e] text-lg leading-relaxed mb-6">
                            Respect and courtesy are fundamental in Japanese culture. Simple gestures like bowing, removing shoes when appropriate, and speaking quietly in public spaces will enhance your experience and show appreciation for local customs.
                        </p>

                        <h3 class="text-[#1b0e0e] text-2xl font-bold mb-4 mt-8">Must-Visit Destinations</h3>
                        
                        <p class="text-[#1b0e0e] text-lg leading-relaxed mb-6">
                            From the bustling streets of Tokyo to the serene temples of Kyoto, each region offers unique experiences. Consider balancing urban exploration with natural beauty, such as visiting Mount Fuji or the bamboo groves of Arashiyama.
                        </p>

                        <img src="https://images.unsplash.com/photo-1478436127897-769e1b3f0f36?w=600&h=300&fit=crop"
                             alt="Traditional Japanese temple"
                             class="w-full h-48 object-cover rounded-lg mb-6">

                        <h2 class="text-[#1b0e0e] text-3xl font-bold mb-6 mt-10">Final Thoughts</h2>
                        
                        <p class="text-[#1b0e0e] text-lg leading-relaxed mb-8">
                            Japan rewards travelers who approach it with curiosity and respect. Take time to savor each moment, from the precision of a tea ceremony to the energy of a busy crossing. Your adventure awaits – embrace it fully and create memories that will last a lifetime.
                        </p> --}}

                        <!-- Call to Action -->
                        <div class="bg-[#e92929]/10 border border-[#e92929]/20 rounded-lg p-6 text-center mt-8">
                            <h3 class="text-[#e92929] text-xl font-bold mb-3">Ready to Start Your Japan Adventure?</h3>
                            <p class="text-[#1b0e0e] mb-4">Let our experienced guides help you create the perfect itinerary.</p>
                            <button class="px-6 py-3 bg-[#e92929] text-white rounded-lg font-bold hover:bg-[#d61f1f] transition-colors">
                                Plan Your Trip
                            </button>
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
                                Facebook
                            </button>
                            <button class="flex items-center gap-2 px-3 py-2 bg-sky-500 text-white rounded-lg text-sm hover:bg-sky-600 transition-colors">
                                <i class="fab fa-twitter"></i>
                                Twitter
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
                    
                    <!-- Related Article 1 -->
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1545569341-9eb8b30979d9?w=400&h=300&fit=crop"
                                 alt="Japanese culture"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            <div class="absolute top-3 left-3">
                                <span class="bg-blue-600 text-white px-2 py-1 rounded-full text-xs font-medium">Culture</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-[#1b0e0e] text-lg font-bold mb-2 group-hover:text-[#e92929] transition-colors">
                                Essential Japanese Customs
                            </h3>
                            <p class="text-[#994d4d] text-sm leading-relaxed mb-3">
                                Learn the basic etiquette and customs that will help you navigate Japan respectfully.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-[#994d4d] text-xs">6 min read</span>
                                <span class="text-[#e92929] text-xs font-medium">Read More →</span>
                            </div>
                        </div>
                    </article>

                    <!-- Related Article 2 -->
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1464822759844-d150165c99fd?w=400&h=300&fit=crop"
                                 alt="Transportation"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            <div class="absolute top-3 left-3">
                                <span class="bg-[#e92929] text-white px-2 py-1 rounded-full text-xs font-medium">Transportation</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-[#1b0e0e] text-lg font-bold mb-2 group-hover:text-[#e92929] transition-colors">
                                Navigating Japan's Transport
                            </h3>
                            <p class="text-[#994d4d] text-sm leading-relaxed mb-3">
                                Master Japan's efficient transportation system with our practical guide.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-[#994d4d] text-xs">8 min read</span>
                                <span class="text-[#e92929] text-xs font-medium">Read More →</span>
                            </div>
                        </div>
                    </article>

                    <!-- Related Article 3 -->
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow group cursor-pointer">
                        <div class="relative h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1478436127897-769e1b3f0f36?w=400&h=300&fit=crop"
                                 alt="Destinations"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            <div class="absolute top-3 left-3">
                                <span class="bg-green-600 text-white px-2 py-1 rounded-full text-xs font-medium">Destinations</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-[#1b0e0e] text-lg font-bold mb-2 group-hover:text-[#e92929] transition-colors">
                                Top 10 Hidden Gems
                            </h3>
                            <p class="text-[#994d4d] text-sm leading-relaxed mb-3">
                                Discover Japan's best-kept secrets away from the tourist crowds.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-[#994d4d] text-xs">10 min read</span>
                                <span class="text-[#e92929] text-xs font-medium">Read More →</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="flex justify-center bg-[#1b0e0e] text-white">
            <div class="flex max-w-[1100px] flex-1 flex-col">
                <div class="flex flex-col gap-6 px-5 py-10 text-center @container">
                    <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                        <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors" href="#home">Home</a>
                        <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors" href="#blog">Blog</a>
                        <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors" href="#privacy">Privacy Policy</a>
                        <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors" href="#terms">Terms of Service</a>
                    </div>
                    <p class="text-white text-sm font-normal leading-normal opacity-80">© 2025 ShogunTours. All rights reserved.</p>
                </div>
            </div>
        </footer>
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

        console.log(md);
        
        const html = marked.parse(md);
        document.getElementById('content').innerHTML = html;

        console.log(document.getElementById('content').innerHTML);
        
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