<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokyo Tours - Discover Japan's Capital | Japatour</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-gray-50">
    <!-- Modern Header -->
    <header class="fixed top-0 w-full glass-effect z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-[#e92929] to-[#ff6b6b] rounded-xl flex items-center justify-center">
                        <i class="fas fa-torii-gate text-white text-lg"></i>
                    </div>
                    <span class="text-xl font-bold text-gray-800">Japatour</span>
                </div>
                
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#tours" class="text-gray-600 hover:text-[#e92929] transition-colors font-medium">Tours</a>
                    <a href="#experience" class="text-gray-600 hover:text-[#e92929] transition-colors font-medium">Experience</a>
                    <a href="#reviews" class="text-gray-600 hover:text-[#e92929] transition-colors font-medium">Reviews</a>
                    <a href="#contact" class="text-gray-600 hover:text-[#e92929] transition-colors font-medium">Contact</a>
                </nav>
                
                <button class="bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white px-6 py-2.5 rounded-full font-semibold hover:shadow-lg transition-all duration-300 hover:scale-105">
                    Book Your Tour
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section with Video Background -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=1920&h=1080&fit=crop" 
                 alt="Tokyo" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/20 to-black/60"></div>
        </div>
        
        <div class="relative z-10 text-center text-white max-w-5xl mx-auto px-6">
            <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-md px-4 py-2 rounded-full mb-6">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Limited spots available for this week</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6 fade-in">
                Discover Tokyo's
                <span class="gradient-text">Hidden Wonders</span>
            </h1>
            
            <p class="text-xl md:text-2xl mb-8 text-white/90 max-w-3xl mx-auto fade-in">
                Join our expertly crafted tours and experience Japan's capital through the eyes of locals
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
                <button class="bg-white text-gray-900 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-all hover:scale-105 smooth-shadow-lg">
                    <i class="fas fa-play-circle mr-2"></i> Watch Tour Preview
                </button>
                <button class="bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white px-8 py-4 rounded-full font-semibold hover:shadow-lg transition-all hover:scale-105">
                    Explore All Tours <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
            
            <div class="mt-16 grid grid-cols-3 gap-8 max-w-2xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-bold mb-1">4.9★</div>
                    <div class="text-sm text-white/80">Guest Rating</div>
                </div>
                <div class="text-center border-x border-white/30">
                    <div class="text-3xl font-bold mb-1">15K+</div>
                    <div class="text-sm text-white/80">Happy Travelers</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold mb-1">5+</div>
                    <div class="text-sm text-white/80">Years Experience</div>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-bounce"></div>
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

    <!-- Why Choose Us -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Travel With Japatour?</h2>
                <p class="text-gray-600 text-lg">We're committed to making your Tokyo experience unforgettable</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-[#e92929] to-[#ff6b6b] rounded-2xl flex items-center justify-center text-white">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Safe & Secure</h3>
                    <p class="text-gray-600 text-sm">Licensed guides and comprehensive insurance coverage</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-white">
                        <i class="fas fa-comments text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Local Expertise</h3>
                    <p class="text-gray-600 text-sm">Native guides sharing authentic local experiences</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white">
                        <i class="fas fa-calendar-check text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Flexible Booking</h3>
                    <p class="text-gray-600 text-sm">Free cancellation up to 24 hours before tour</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white">
                        <i class="fas fa-award text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Award Winning</h3>
                    <p class="text-gray-600 text-sm">TripAdvisor Certificate of Excellence 2024</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">What Our Guests Say</h2>
                <div class="flex items-center justify-center gap-2 mb-4">
                    <div class="flex gap-1">
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                        <i class="fas fa-star text-yellow-400 text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold text-gray-800">4.9</span>
                    <span class="text-gray-600">from 2,347 reviews</span>
                </div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://i.pravatar.cc/60?img=1" alt="Sarah" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-semibold text-gray-800">Sarah Johnson</h4>
                            <div class="flex gap-1">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-3">"An absolutely incredible experience! Our guide Yuki was so knowledgeable and made the tour feel personal and special."</p>
                    <p class="text-sm text-gray-400">Tokyo Highlights Tour • March 2024</p>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://i.pravatar.cc/60?img=2" alt="Michael" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-semibold text-gray-800">Michael Chen</h4>
                            <div class="flex gap-1">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-3">"The food tour exceeded all expectations. We discovered amazing local spots we never would have found on our own!"</p>
                    <p class="text-sm text-gray-400">Tokyo Food Tour • February 2024</p>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://i.pravatar.cc/60?img=3" alt="Emma" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-semibold text-gray-800">Emma Wilson</h4>
                            <div class="flex gap-1">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-3">"The cultural experience tour was the highlight of our Japan trip. Tea ceremony was magical!"</p>
                    <p class="text-sm text-gray-400">Cultural Experience • January 2024</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Contact/Booking Section -->
    <section id="contact" class="py-20 bg-gradient-to-r from-[#e92929] to-[#ff6b6b]">
        <div class="max-w-4xl mx-auto px-6 text-center text-white">
            <h2 class="text-4xl font-bold mb-4">Ready to Explore Tokyo?</h2>
            <p class="text-xl mb-8 text-white/90">Book your tour today and save 15% with code TOKYO2024</p>
            
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 max-w-2xl mx-auto">
                <div class="grid md:grid-cols-2 gap-4 mb-6">
                    <input type="text" placeholder="Your Name" 
                           class="bg-white/20 backdrop-blur-sm text-white placeholder-white/70 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/50">
                    <input type="email" placeholder="Your Email" 
                           class="bg-white/20 backdrop-blur-sm text-white placeholder-white/70 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/50">
                </div>
                <div class="grid md:grid-cols-2 gap-4 mb-6">
                    <select class="bg-white/20 backdrop-blur-sm text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/50">
                        <option value="" class="text-gray-800">Select Tour</option>
                        <option value="highlights" class="text-gray-800">Tokyo Highlights Tour</option>
                        <option value="cultural" class="text-gray-800">Cultural Experience Tour</option>
                        <option value="food" class="text-gray-800">Tokyo Food Tour</option>
                    </select>
                    <input type="date" placeholder="Select Date" 
                           class="bg-white/20 backdrop-blur-sm text-white placeholder-white/70 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/50">
                </div>
                <button class="w-full bg-white text-[#e92929] py-4 rounded-xl font-bold hover:bg-gray-100 transition-all hover:scale-105 smooth-shadow-lg">
                    Book Now & Save 15%
                </button>
                <p class="text-sm text-white/80 mt-4">
                    <i class="fas fa-lock mr-2"></i> Secure booking • Free cancellation • Instant confirmation
                </p>
            </div>
        </div>
    </section>

    <!-- Modern Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-[#e92929] to-[#ff6b6b] rounded-xl flex items-center justify-center">
                            <i class="fas fa-torii-gate text-white text-lg"></i>
                        </div>
                        <span class="text-xl font-bold">Japatour</span>
                    </div>
                    <p class="text-gray-400 text-sm">Creating unforgettable memories in Japan's vibrant capital since 2019.</p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Our Tours</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><i class="fas fa-phone mr-2"></i> +81 3-1234-5678</li>
                        <li><i class="fas fa-envelope mr-2"></i> hello@japatour.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Shibuya, Tokyo</li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Follow Us</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-gray-700 transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2024 Japatour. All rights reserved. | <a href="#" class="hover:text-white transition-colors">Privacy Policy</a> | <a href="#" class="hover:text-white transition-colors">Terms of Service</a></p>
            </div>
        </div>
    </footer>

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
</body>
</html>