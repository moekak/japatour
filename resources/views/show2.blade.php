<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800"
    />
    <title>Tokyo City Highlights Tour - Adventure Tours</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
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
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        <!-- Minimal Header -->
        <header class="fixed top-0 left-0 right-0 bg-white/80 backdrop-blur-md z-50 transition-all duration-300" id="header">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-[#e92929] rounded-lg flex items-center justify-center">
                            <i class="fas fa-mountain text-white text-sm"></i>
                        </div>
                        <span class="font-bold text-xl">Adventure Tours</span>
                    </div>
                    <nav class="hidden md:flex items-center gap-8">
                        <a href="#overview" class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Overview</a>
                        <a href="#itinerary" class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Itinerary</a>
                        <a href="#gallery" class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Gallery</a>
                        <a href="#reviews" class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Reviews</a>
                    </nav>
                    <button class="bg-[#e92929] text-white px-6 py-2.5 rounded-full font-medium hover:bg-[#d61f1f] transition-all transform hover:scale-105">
                        Book Now
                    </button>
                </div>
            </div>
        </header>

        <!-- Hero Section - Full Screen -->
        <section class="relative h-screen flex items-center justify-center">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=1920&h=1080&fit=crop" alt="Tokyo City" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            </div>
            
            <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-6">
                <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                    <i class="fas fa-fire text-yellow-400"></i>
                    <span class="text-sm font-medium">Most Popular Tour</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">Tokyo City<br>Highlights Tour</h1>
                <p class="text-xl md:text-2xl mb-8 text-white/90">An unforgettable journey through Japan's vibrant capital</p>
                
                <div class="flex flex-wrap items-center justify-center gap-6 mb-12">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-clock text-white/80"></i>
                        <span>8 hours</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-users text-white/80"></i>
                        <span>Max 15 people</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-star text-yellow-400"></i>
                        <span>4.8 (245 reviews)</span>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-[#e92929] text-white px-8 py-4 rounded-full font-medium hover:bg-[#d61f1f] transition-all transform hover:scale-105">
                        Reserve Your Spot - ¥12,000
                    </button>
                    <button class="bg-white/20 backdrop-blur-sm text-white border-2 border-white/50 px-8 py-4 rounded-full font-medium hover:bg-white/30 transition-all">
                        Watch Video Tour
                    </button>
                </div>
            </div>
            
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
                <i class="fas fa-chevron-down text-2xl"></i>
            </div>
        </section>

        <!-- Quick Stats Bar -->
        <section class="bg-gray-50 py-8 border-y">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#e92929]">98%</div>
                        <p class="text-gray-600 text-sm mt-1">Satisfaction Rate</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#e92929]">2,500+</div>
                        <p class="text-gray-600 text-sm mt-1">Happy Travelers</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#e92929]">5</div>
                        <p class="text-gray-600 text-sm mt-1">Major Attractions</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#e92929]">1</div>
                        <p class="text-gray-600 text-sm mt-1">Unforgettable Day</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Overview Section -->
        <section id="overview" class="py-20">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl font-bold mb-6">Experience Tokyo Like Never Before</h2>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Immerse yourself in the perfect blend of ancient traditions and cutting-edge modernity. 
                            Our expert guides will take you beyond the tourist trails to discover the authentic heart of Tokyo.
                        </p>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-torii-gate text-[#e92929]"></i>
                                </div>
                                <div>
                                    <h4 className="font-semibold mb-1">Ancient Temples & Shrines</h4>
                                    <p class="text-gray-600 text-sm">Visit Tokyo's most sacred sites including the famous Senso-ji Temple</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-city text-[#e92929]"></i>
                                </div>
                                <div>
                                    <h4 className="font-semibold mb-1">Modern Metropolis</h4>
                                    <p class="text-gray-600 text-sm">Experience the energy of Shibuya Crossing and panoramic city views</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-utensils text-[#e92929]"></i>
                                </div>
                                <div>
                                    <h4 className="font-semibold mb-1">Authentic Cuisine</h4>
                                    <p class="text-gray-600 text-sm">Savor traditional Japanese lunch at a hidden local restaurant</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-[#e92929]">15+</div>
                                <p class="text-gray-600 text-sm">Years Experience</p>
                            </div>
                            <div class="text-center border-x px-6">
                                <div class="text-2xl font-bold text-[#e92929]">10+</div>
                                <p class="text-gray-600 text-sm">Expert Guides</p>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-[#e92929]">24/7</div>
                                <p class="text-gray-600 text-sm">Support</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?w=600&h=700&fit=crop" alt="Senso-ji Temple" class="rounded-2xl shadow-2xl">
                        <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-xl">
                            <div class="flex items-center gap-4">
                                <div class="w-16 h-16 bg-[#e92929]/10 rounded-full flex items-center justify-center">
                                    <i class="fas fa-award text-[#e92929] text-2xl"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-lg">TripAdvisor</p>
                                    <p class="text-gray-600">Certificate of Excellence</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tour Selection with Modern Cards -->
    <section id="tours" class="py-20 -mt-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Choose Your Tokyo Adventure</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    From cultural experiences to food tours, we have the perfect journey waiting for you
                </p>
            </div>
            
            <!-- Tour Cards -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Tokyo Highlights Card -->
                <div class="bg-white rounded-2xl overflow-hidden smooth-shadow-lg card-hover cursor-pointer" onclick="showTourDetails('highlights')">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?w=600&h=300&fit=crop" 
                             alt="Tokyo Temple" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white px-3 py-1 rounded-full text-xs font-semibold">
                                BESTSELLER
                            </span>
                        </div>
                        <div class="absolute bottom-4 right-4">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2">
                                <span class="text-2xl font-bold text-gray-800">¥12,000</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Tokyo Highlights Tour</h3>
                        <p class="text-gray-600 mb-4">Experience the perfect blend of ancient traditions and modern marvels in one unforgettable day</p>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-clock text-[#e92929]"></i> 8 hours</span>
                                <span><i class="fas fa-users text-[#e92929]"></i> Max 15</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm font-semibold">4.9</span>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">Senso-ji Temple</span>
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">Shibuya</span>
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">Tokyo Tower</span>
                        </div>
                        
                        <button class="w-full bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all">
                            View Details <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Cultural Experience Card -->
                <div class="bg-white rounded-2xl overflow-hidden smooth-shadow-lg card-hover cursor-pointer" onclick="showTourDetails('cultural')">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1492571350019-22de08371fd3?w=600&h=300&fit=crop" 
                             alt="Tea Ceremony" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                CULTURAL
                            </span>
                        </div>
                        <div class="absolute bottom-4 right-4">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2">
                                <span class="text-2xl font-bold text-gray-800">¥9,800</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Cultural Experience Tour</h3>
                        <p class="text-gray-600 mb-4">Immerse yourself in authentic Japanese traditions with hands-on cultural activities</p>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-clock text-[#e92929]"></i> 6 hours</span>
                                <span><i class="fas fa-users text-[#e92929]"></i> Max 10</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm font-semibold">4.8</span>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">Tea Ceremony</span>
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">Kimono</span>
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">Calligraphy</span>
                        </div>
                        
                        <button class="w-full bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all">
                            View Details <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Food Tour Card -->
                <div class="bg-white rounded-2xl overflow-hidden smooth-shadow-lg card-hover cursor-pointer" onclick="showTourDetails('food')">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=600&h=300&fit=crop" 
                             alt="Japanese Food" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                FOODIE FAVORITE
                            </span>
                        </div>
                        <div class="absolute bottom-4 right-4">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2">
                                <span class="text-2xl font-bold text-gray-800">¥8,500</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Tokyo Food Tour</h3>
                        <p class="text-gray-600 mb-4">Taste your way through Tokyo's incredible culinary scene with a local food expert</p>
                        
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-4 text-sm text-gray-500">
                                <span><i class="fas fa-clock text-[#e92929]"></i> 4 hours</span>
                                <span><i class="fas fa-users text-[#e92929]"></i> Max 12</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm font-semibold">4.9</span>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">Sushi Making</span>
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">Ramen</span>
                            <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">Izakaya</span>
                        </div>
                        
                        <button class="w-full bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white py-3 rounded-xl font-semibold hover:shadow-lg transition-all">
                            View Details <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
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
<section id="gallery" class="py-20">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Capture the Moments</h2>
            <p class="text-gray-600 text-lg">A visual journey through our tour highlights</p>
        </div>
        
        <!-- mx-auto を追加して中央寄せ -->
        <div class="grid grid-cols-3 gap-4 max-w-[1200px] mx-auto">
            <div class="space-y-4">
                <img src="https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?w=400&h=500&fit=crop" alt="Gallery" class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
                <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=400&h=300&fit=crop" alt="Gallery" class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
            </div>
            <div class="space-y-4">
                <img src="https://images.unsplash.com/photo-1554797589-7241bb691973?w=400&h=300&fit=crop" alt="Gallery" class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
                <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=400&h=500&fit=crop" alt="Gallery" class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
            </div>
            <div class="space-y-4">
                <img src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=400&h=400&fit=crop" alt="Gallery" class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
                <img src="https://images.unsplash.com/photo-1490761668535-35497054764d?w=400&h=400&fit=crop" alt="Gallery" class="rounded-lg shadow-lg hover:shadow-xl transition-shadow cursor-pointer">
            </div>
        </div>
    </div>
</section>

        <!-- Reviews Section - Card Style -->
        <section id="reviews" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4">What Our Travelers Say</h2>
                    <div class="flex items-center justify-center gap-4">
                        <div class="flex gap-1">
                            <i class="fas fa-star text-yellow-400 text-xl"></i>
                            <i class="fas fa-star text-yellow-400 text-xl"></i>
                            <i class="fas fa-star text-yellow-400 text-xl"></i>
                            <i class="fas fa-star text-yellow-400 text-xl"></i>
                            <i class="fas fa-star-half-alt text-yellow-400 text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold">4.8</span>
                        <span class="text-gray-600">from 245 reviews</span>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="https://i.pravatar.cc/60?img=1" alt="Sarah" class="w-12 h-12 rounded-full">
                            <div>
                                <h4 class="font-semibold">Sarah Johnson</h4>
                                <div class="flex gap-1">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            "Absolutely incredible experience! Our guide was so knowledgeable and passionate about Tokyo's history. 
                            The perfect blend of traditional and modern sights."
                        </p>
                        <p class="text-sm text-gray-400">March 2024</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="https://i.pravatar.cc/60?img=2" alt="Michael" class="w-12 h-12 rounded-full">
                            <div>
                                <h4 class="font-semibold">Michael Chen</h4>
                                <div class="flex gap-1">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            "The food tour portion was outstanding! We tried authentic dishes we never would have found on our own. 
                            Highly recommend for first-time visitors."
                        </p>
                        <p class="text-sm text-gray-400">March 2024</p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="https://i.pravatar.cc/60?img=3" alt="Emma" class="w-12 h-12 rounded-full">
                            <div>
                                <h4 class="font-semibold">Emma Wilson</h4>
                                <div class="flex gap-1">
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="fas fa-star text-yellow-400 text-xs"></i>
                                    <i class="far fa-star text-yellow-400 text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            "Great tour with lots of photo opportunities. The Tokyo Tower views were breathtaking! 
                            Would have liked more time at some locations."
                        </p>
                        <p class="text-sm text-gray-400">February 2024</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Booking Section - Floating Card -->
        <section class="py-20">
            <div class="container mx-auto px-6">
                <div class="bg-gradient-to-r from-[#e92929] to-[#f04040] rounded-2xl p-8 md:p-12 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>
                    
                    <div class="relative z-10 max-w-4xl mx-auto text-center">
                        <h2 class="text-4xl font-bold mb-4">Ready to Explore Tokyo?</h2>
                        <p class="text-xl mb-8 opacity-90">
                            Limited spots available for the upcoming season. Book now and save 20%!
                        </p>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 md:p-8 max-w-2xl mx-auto">
                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div class="text-left">
                                    <label class="text-sm opacity-80 block mb-2">Select Date</label>
                                    <div class="bg-white/20 rounded-lg px-4 py-3 flex items-center justify-between cursor-pointer hover:bg-white/30 transition-colors">
                                        <span>April 15, 2025</span>
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div>
                                <div class="text-left">
                                    <label class="text-sm opacity-80 block mb-2">Number of Guests</label>
                                    <div class="bg-white/20 rounded-lg px-4 py-3 flex items-center justify-between">
                                        <button class="hover:bg-white/20 w-8 h-8 rounded-full transition-colors">-</button>
                                        <span>2 Adults</span>
                                        <button class="hover:bg-white/20 w-8 h-8 rounded-full transition-colors">+</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between mb-6">
                                <div class="text-left">
                                    <p class="text-sm opacity-80">Total Price</p>
                                    <p class="text-3xl font-bold">¥24,000</p>
                                    <p class="text-sm opacity-80 line-through">¥30,000</p>
                                </div>
                                <button class="bg-white text-[#e92929] px-8 py-4 rounded-full font-bold hover:scale-105 transition-transform">
                                    Book Now & Save 20%
                                </button>
                            </div>
                            
                            <p class="text-sm opacity-80">
                                <i class="fas fa-shield-alt mr-2"></i>
                                Free cancellation up to 24 hours before the tour
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6 max-w-3xl">
                <h2 class="text-4xl font-bold text-center mb-12">Common Questions</h2>
                
                <div class="space-y-4">
                    <div class="bg-white rounded-lg shadow-sm">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                            <span class="font-semibold">What is included in the tour price?</span>
                            <i class="fas fa-plus text-gray-400"></i>
                        </button>
                        <div class="hidden px-6 pb-4">
                            <p class="text-gray-600">
                                The tour includes hotel pickup/drop-off, professional English-speaking guide, 
                                all entrance fees, traditional Japanese lunch, and bottled water.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                            <span class="font-semibold">Is this tour suitable for children?</span>
                            <i class="fas fa-plus text-gray-400"></i>
                        </button>
                        <div class="hidden px-6 pb-4">
                            <p class="text-gray-600">
                                Yes! This tour is family-friendly. Children under 5 join free, and we provide 
                                special rates for children 6-12. We can adjust the pace for families.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                            <span class="font-semibold">What should I bring?</span>
                            <i class="fas fa-plus text-gray-400"></i>
                        </button>
                        <div class="hidden px-6 pb-4">
                            <p class="text-gray-600">
                                Comfortable walking shoes, camera, sunscreen, and weather-appropriate clothing. 
                                We'll be walking approximately 5km throughout the day.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="flex items-center gap-2 mb-4 md:mb-0">
                        <div class="w-8 h-8 bg-[#e92929] rounded-lg flex items-center justify-center">
                            <i class="fas fa-mountain text-white text-sm"></i>
                        </div>
                        <span class="font-bold text-xl">Adventure Tours</span>
                    </div>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-[#e92929] transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-[#e92929] transition-colors">Terms of Service</a>
                        <a href="#" class="hover:text-[#e92929] transition-colors">Contact</a>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                    <p>&copy; 2024 Adventure Tours. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // FAQ toggle
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            }
        }

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
        const tourDetails = {
            highlights: {
                title: 'Tokyo Highlights Tour',
                subtitle: 'The Perfect Introduction to Tokyo',
                price: '¥12,000',
                duration: '8 hours',
                image: 'https://images.unsplash.com/photo-1524413840807-0c3cb6fa808d?w=800&h=400&fit=crop',
                description: 'Experience the best of Tokyo in one amazing day! This comprehensive tour takes you through the must-see attractions of Japan\'s vibrant capital.',
                highlights: [
                    'Visit the iconic Senso-ji Temple',
                    'Experience the famous Shibuya Crossing',
                    'Enjoy panoramic views from Tokyo Tower',
                    'Traditional Japanese lunch included',
                    'Small group (max 15 people)'
                ],
                itinerary: [
                    {
                        time: '9:00 AM',
                        title: 'Hotel Pickup',
                        description: 'Your guide will meet you at your hotel lobby',
                        icon: 'fa-hotel'
                    },
                    {
                        time: '9:30 AM',
                        title: 'Senso-ji Temple',
                        description: 'Explore Tokyo\'s oldest Buddhist temple and shop at Nakamise Street',
                        icon: 'fa-torii-gate'
                    },
                    {
                        time: '11:00 AM',
                        title: 'Tokyo Skytree (Photo Stop)',
                        description: 'Perfect photo opportunity with Japan\'s tallest structure',
                        icon: 'fa-camera'
                    },
                    {
                        time: '12:00 PM',
                        title: 'Traditional Lunch',
                        description: 'Enjoy authentic Japanese cuisine at a local restaurant',
                        icon: 'fa-utensils'
                    },
                    {
                        time: '2:00 PM',
                        title: 'Shibuya Crossing',
                        description: 'Experience the world\'s busiest pedestrian crossing',
                        icon: 'fa-walking'
                    },
                    {
                        time: '3:30 PM',
                        title: 'Tokyo Tower',
                        description: 'Breathtaking 360-degree views of the city',
                        icon: 'fa-landmark'
                    },
                    {
                        time: '5:00 PM',
                        title: 'Return to Hotel',
                        description: 'Drop-off at your hotel',
                        icon: 'fa-home'
                    }
                ]
            },
            cultural: {
                title: 'Cultural Experience Tour',
                subtitle: 'Immerse Yourself in Japanese Traditions',
                price: '¥9,800',
                duration: '6 hours',
                image: 'https://images.unsplash.com/photo-1492571350019-22de08371fd3?w=800&h=400&fit=crop',
                description: 'Dive deep into Japanese culture with hands-on experiences and traditional activities guided by cultural experts.',
                highlights: [
                    'Authentic tea ceremony experience',
                    'Dress in traditional kimono',
                    'Learn Japanese calligraphy',
                    'Try origami paper folding',
                    'Small intimate groups (max 10)'
                ],
                itinerary: [
                    {
                        time: '10:00 AM',
                        title: 'Cultural Center Arrival',
                        description: 'Meet at the traditional cultural center',
                        icon: 'fa-building'
                    },
                    {
                        time: '10:30 AM',
                        title: 'Tea Ceremony',
                        description: 'Participate in a traditional Japanese tea ceremony',
                        icon: 'fa-mug-hot'
                    },
                    {
                        time: '12:00 PM',
                        title: 'Kimono Dressing',
                        description: 'Get dressed in beautiful traditional kimono',
                        icon: 'fa-user'
                    },
                    {
                        time: '1:00 PM',
                        title: 'Kaiseki Lunch',
                        description: 'Multi-course traditional Japanese meal',
                        icon: 'fa-utensils'
                    },
                    {
                        time: '2:30 PM',
                        title: 'Calligraphy Class',
                        description: 'Learn the art of Japanese calligraphy',
                        icon: 'fa-paint-brush'
                    },
                    {
                        time: '4:00 PM',
                        title: 'Tour Conclusion',
                        description: 'Receive your calligraphy artwork to take home',
                        icon: 'fa-gift'
                    }
                ]
            },
            food: {
                title: 'Tokyo Food Tour',
                subtitle: 'A Culinary Journey Through Tokyo',
                price: '¥8,500',
                duration: '4 hours',
                image: 'https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=800&h=400&fit=crop',
                description: 'Taste your way through Tokyo\'s incredible food scene with a local food expert guiding you to the best spots.',
                highlights: [
                    'Visit famous Tsukiji Outer Market',
                    'Hands-on sushi making class',
                    'Sample various ramen styles',
                    'Traditional wagashi sweets',
                    'Local izakaya experience'
                ],
                itinerary: [
                    {
                        time: '11:00 AM',
                        title: 'Tsukiji Market',
                        description: 'Explore the bustling market and taste fresh seafood',
                        icon: 'fa-fish'
                    },
                    {
                        time: '12:00 PM',
                        title: 'Sushi Workshop',
                        description: 'Learn to make sushi from a professional chef',
                        icon: 'fa-utensils'
                    },
                    {
                        time: '1:30 PM',
                        title: 'Ramen Tasting',
                        description: 'Compare different styles of authentic ramen',
                        icon: 'fa-bowl-food'
                    },
                    {
                        time: '2:30 PM',
                        title: 'Sweet Treats',
                        description: 'Try traditional Japanese sweets with matcha',
                        icon: 'fa-cookie'
                    },
                    {
                        time: '3:00 PM',
                        title: 'Izakaya Visit',
                        description: 'Experience local pub culture with small dishes',
                        icon: 'fa-beer'
                    }
                ]
            }
        };

        function showTourDetails(tourType) {
            const tour = tourDetails[tourType];
            const modal = document.getElementById('tour-details-modal');
            const content = document.getElementById('tour-details-content');
            
            // Generate timeline HTML
            const timelineHTML = tour.itinerary.map((item, index) => `
                <div class="flex gap-4 relative">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-[#e92929] to-[#ff6b6b] rounded-full flex items-center justify-center text-white z-10">
                            <i class="fas ${item.icon}"></i>
                        </div>
                        ${index < tour.itinerary.length - 1 ? '<div class="w-0.5 h-full timeline-line mt-2"></div>' : ''}
                    </div>
                    <div class="flex-1 pb-8">
                        <div class="bg-gray-50 rounded-xl p-4">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="font-semibold text-gray-800">${item.title}</h4>
                                <span class="text-sm text-[#e92929] font-medium">${item.time}</span>
                            </div>
                            <p class="text-gray-600 text-sm">${item.description}</p>
                        </div>
                    </div>
                </div>
            `).join('');

            content.innerHTML = `
                <div class="relative">
                    <button onclick="closeTourDetails()" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-all">
                        <i class="fas fa-times text-gray-600"></i>
                    </button>
                    
                    <div class="relative h-64 overflow-hidden">
                        <img src="${tour.image}" alt="${tour.title}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h2 class="text-3xl font-bold mb-2">${tour.title}</h2>
                            <p class="text-lg opacity-90">${tour.subtitle}</p>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <span class="text-3xl font-bold text-gray-800">${tour.price}</span>
                                <span class="text-gray-600 ml-2">per person</span>
                            </div>
                            <div class="flex items-center gap-4 text-gray-600">
                                <span><i class="fas fa-clock text-[#e92929]"></i> ${tour.duration}</span>
                                <span><i class="fas fa-users text-[#e92929]"></i> Small group</span>
                            </div>
                        </div>
                        
                        <p class="text-gray-600 mb-6">${tour.description}</p>
                        
                        <div class="bg-gradient-to-r from-[#e92929]/10 to-[#ff6b6b]/10 rounded-xl p-6 mb-6">
                            <h3 class="font-semibold text-gray-800 mb-3">Tour Highlights</h3>
                            <ul class="space-y-2">
                                ${tour.highlights.map(highlight => `
                                    <li class="flex items-center gap-2 text-gray-700">
                                        <i class="fas fa-check-circle text-[#e92929]"></i>
                                        <span>${highlight}</span>
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
                                <p class="text-gray-600 text-sm">Your hotel lobby or designated meeting spot</p>
                            </div>
                            <div class="bg-gray-50 rounded-xl p-4">
                                <h4 class="font-semibold text-gray-800 mb-2">Languages</h4>
                                <p class="text-gray-600 text-sm">English, Japanese, Chinese</p>
                            </div>
                        </div>
                        
                        <button class="w-full bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white py-4 rounded-xl font-semibold hover:shadow-lg transition-all">
                            Book This Tour Now
                        </button>
                        
                        <p class="text-center text-sm text-gray-500 mt-4">
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

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

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
            0%, 100% {
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
</body>
</html>