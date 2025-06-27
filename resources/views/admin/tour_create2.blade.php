<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Tour - Adventure Tours</title>
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
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header
        class="fixed top-0 left-0 right-0 bg-white/80 backdrop-blur-md z-50 transition-all duration-300 border-b border-gray-100">
        <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-[#e92929] rounded-lg flex items-center justify-center">
                                <i class="fas fa-mountain text-white text-sm"></i>
                            </div>
                            <span class="font-bold text-xl">Japatour</span>
                    </div>
                    <nav class="hidden md:flex items-center gap-8">
                            <a href="#"
                                class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Dashboard</a>
                            <a href="#"
                                class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Tours</a>
                            <a href="#"
                                class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Analytics</a>
                            <a href="#"
                                class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Settings</a>
                    </nav>
                    <div class="flex items-center gap-4">
                            <button class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
                                <i class="fas fa-bell text-gray-600"></i>
                            </button>
                            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-gray-600"></i>
                            </div>
                    </div>
                </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-20 pb-10">
        <form class="container mx-auto px-6 max-w-[1100px]" action="{{ route('tours.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-4">
                            <a href="#" class="hover:text-[#e92929] transition-colors">Dashboard</a>
                            <i class="fas fa-chevron-right text-xs"></i>
                            <a href="#" class="hover:text-[#e92929] transition-colors">Tours</a>
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span class="text-gray-800 font-medium">Create New Tour</span>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-800">Create New Tour</h1>
                    <p class="text-gray-600 mt-2">Fill in the details below to create a new tour experience</p>
                </div>

                <!-- Form Sections -->
                <div class="space-y-6">
                    <!-- Basic Information -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                <div
                                        class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-info-circle text-[#e92929]"></i>
                                </div>
                                Basic Information
                            </h2>

                            <div class="space-y-5">
                                <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Tour Title
                                            *</label>
                                        <input type="text" name="title" placeholder="e.g., Tokyo City Highlights Tour"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                </div>

                                <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                                        <input type="text" name="subtitle"
                                            placeholder="e.g., An unforgettable journey through Japan's vibrant capital"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                </div>

                                <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Badge
                                            Label</label>
                                        <select name="badge"
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                            <option>Most Popular Tour</option>
                                            <option>Best Seller</option>
                                            <option>New Tour</option>
                                            <option>Limited Availability</option>
                                        </select>
                                </div>
                            </div>
                    </div>

                    <!-- Hero Image Section -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                <div
                                        class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-image text-[#e92929]"></i>
                                </div>
                                Hero Image
                            </h2>
                            <img src="" alt=""
                                class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-[#e92929] transition-colors cursor-pointer hidden preview_src">
                            <div
                                class="hero_image_element border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-[#e92929] transition-colors cursor-pointer">
                                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                <p class="text-gray-600 font-medium mb-2">Upload main tour image</p>
                                <p class="text-sm text-gray-500">This will be displayed as the main banner image</p>
                                <p class="text-sm text-gray-500 mb-4">Recommended size: 1920x1080px</p>
                                <label for="hero_image"
                                        class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors font-medium text-sm">
                                        Select Hero Image
                                </label>
                                <input type="file" name="hero_image" id="hero_image" class="hidden">
                            </div>
                    </div>

                    <!-- Overview Section -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                            <div
                                    class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-align-left text-[#e92929]"></i>
                            </div>
                            Overview Section
                        </h2>

                        <div class="space-y-5">
                            <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Overview Title
                                        *</label>
                                    <input type="text" name="overview_title"
                                        placeholder="e.g., Experience Tokyo Like Never Before"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Overview
                                    Description *</label>
                                <textarea rows="4" name="overview_description"
                                    placeholder="Describe what makes this tour special..."
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none"></textarea>
                                <p class="text-xs text-gray-500 mt-1">0/500 characters</p>
                            </div>
                        </div>
                    </div>

                    <!-- Highlights Section -->
                    <div class="bg-white rounded-xl shadow-sm p-6" id="highlight-section">
                            <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                <div
                                        class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-lightbulb text-[#e92929]"></i>
                                </div>
                                Tour Highlights
                            </h2>

                            <p class="text-sm text-gray-600 mb-4">Add key features and highlights that make this tour
                                special</p>

                            <div class="space-y-4" id="tour_highlight-wrapper">
                                <div class="highlight-item">
                                        <div class="bg-gray-50 rounded-lg p-4">
                                            <div class="flex items-start gap-4">
                                                    <div
                                                        class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                                        <i class="fas fa-torii-gate text-[#e92929]"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <input type="text" name="highlight_title[]"
                                                                placeholder="Highlight title (e.g., Ancient Temples & Shrines)"
                                                                class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                                                        <textarea rows="2" name="highlight_description[]"
                                                                placeholder="Brief description of this highlight..."
                                                                class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                                                    </div>
                                                    <button
                                                        class="p-2 text-gray-400 hover:text-red-500 transition-colors delete_highlight-button">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <button type="button"
                                class="duplicate_button mt-4 w-full py-3 border-2 border-dashed border-gray-300 rounded-lg text-gray-600 hover:border-[#e92929] hover:text-[#e92929] transition-colors flex items-center justify-center gap-2">
                                <i class="fas fa-plus"></i>
                                <span class="font-medium">Add Highlight</span>
                            </button>
                    </div>

                    <!-- Multiple Tour Itineraries Section -->
                    <div class="space-y-6" id="itinerary-section">
                        <h2 class="text-2xl font-bold text-gray-800">Tour Itineraries</h2>
                        <div id="itinerary-wrapper">
                            <div class="itinerary-item" data-id="0">
                                <div class="bg-white rounded-xl shadow-sm p-6 relative">
                                    <div class="absolute top-6 right-6">
                                        <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"
                                                title="Delete this itinerary">
                                                <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                        <div
                                                class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                                <i class="fas fa-route text-[#e92929]"></i>
                                        </div>
                                        Tour Itinerary & Details #1
                                    </h3>

                                    <!-- Tour Basic Details -->
                                    <div class="bg-gray-50 rounded-lg p-5 mb-6">
                                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                                <i class="fas fa-info-circle text-gray-400 mr-2"></i>
                                                Tour Information
                                        </h4>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Duration (hours) *</label>
                                                    <input  name="itinerary[0][duration]" type="number" placeholder="e.g., 8" min="1" max="24"
                                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">MaxParticipants *</label>
                                                    <input name="itinerary[0][max_participants]" type="number" placeholder="e.g., 15" min="1" max="50"
                                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Tour Type *</label>
                                                    <select name="itinerary[0][tour_type]"
                                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                            <option>City Tour</option>
                                                            <option>Cultural Experience</option>
                                                            <option>Food Tour</option>
                                                            <option>Nature & Adventure</option>
                                                            <option>Night Tour</option>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Meeting Point *</label>
                                                    <input type="text" name="itinerary[0][meeting_point]"
                                                            placeholder="e.g., Hotel lobby or JR Shibuya Station"
                                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Adult Price (¥) *</label>
                                                    <input name="itinerary[0][adult_price]" type="number" placeholder="e.g., 12000" min="0"
                                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-1">Child Price (¥)</label>
                                                    <input name="itinerary[0][child_price]" type="number" placeholder="e.g., 6000" min="0"
                                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>
                                        </div>

                                        <div class="mt-4">
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Languages
                                                    Available</label>
                                                <div class="flex flex-wrap gap-3">
                                                    <label class="flex items-center gap-2 cursor-pointer">
                                                            <input type="checkbox" checked name="itinerary[0][languages][]"
                                                                class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                                            <span class="text-sm text-gray-700">English</span>
                                                    </label>
                                                    <label class="flex items-center gap-2 cursor-pointer">
                                                            <input type="checkbox" checked name="itinerary[0][languages][]"
                                                                class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                                            <span class="text-sm text-gray-700">Japanese</span>
                                                    </label>
                                                    <label class="flex items-center gap-2 cursor-pointer">
                                                            <input type="checkbox" name="itinerary[0][languages][]"
                                                                class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                                            <span class="text-sm text-gray-700">Chinese</span>
                                                    </label>
                                                    <label class="flex items-center gap-2 cursor-pointer">
                                                            <input type="checkbox" name="itinerary[0][languages][]"
                                                                class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                                            <span class="text-sm text-gray-700">Korean</span>
                                                    </label>
                                                </div>
                                        </div>
                                    </div>

                                    <!-- Itinerary Items -->
                                    <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                        <i class="fas fa-list-ol text-gray-400 mr-2"></i>
                                        Itinerary Schedule
                                    </h4>

                                    <div class="space-y-4">
                                        <!-- Itinerary Item 1 -->
                                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                                                <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                    <div class="flex items-center justify-between">
                                                            <h5 class="font-semibold text-gray-800">Itinerary Item #1</h5>
                                                            <div class="flex gap-2">
                                                                <button
                                                                        class="p-1.5 text-gray-400 hover:text-gray-600 transition-colors">
                                                                        <i class="fas fa-grip-vertical"></i>
                                                                </button>
                                                                <button
                                                                        class="p-1.5 text-gray-400 hover:text-red-500 transition-colors">
                                                                        <i class="fas fa-trash"></i>
                                                                </button>
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="p-4 space-y-4">
                                                    <!-- Activities Section -->
                                                    <div>
                                                            <label class="block text-sm font-medium text-gray-700 mb-2">Activities</label>
                                                            <div class="space-y-3 activity-wrapper">
                                                                <!-- Activity Entry 1 -->
                                                                <div class="activity-item">
                                                                        <div class="bg-gray-50 rounded-lg p-3">
                                                                            <div class="flex items-start gap-3">
                                                                                    <div class="flex-1 space-y-3">
                                                                                        <div class="grid md:grid-cols-3 gap-3">
                                                                                                <div class="md:col-span-2">
                                                                                                    <input type="text"  name="itinerary[0][activity_title][0]"
                                                                                                            placeholder="e.g., Senso-ji Temple Visit"
                                                                                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                                                </div>
                                                                                        </div>
                                                                                        <div>
                                                                                                <textarea rows="2"
                                                                                                    name="itinerary[0][activity_description][0]"
                                                                                                    placeholder="Brief description of the activity..."
                                                                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <button type="button"
                                                                                        class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity_button">
                                                                                        <i class="fas fa-times"></i>
                                                                                    </button>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <!-- Add Activity Button -->
                                                            <button type="button" class="mt-3 text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-activity_button">
                                                                <i class="fas fa-plus-circle"></i>
                                                                Add activity
                                                            </button>
                                                    </div>

                                                    <div>
                                                            <label class="block text-sm font-medium text-gray-700 mb-2">Main
                                                                Image for this Activity</label>
                                                            <div
                                                                class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:border-[#e92929] transition-colors cursor-pointer">
                                                                <i class="fas fa-image text-2xl text-gray-400 mb-2"></i>
                                                                <p class="text-xs text-gray-500">Upload activity image</p>
                                                            </div>
                                                    </div>

                                                    <div>
                                                            <label class="block text-sm font-medium text-gray-700 mb-2">Activity Highlights</label>
                                                            <div class="space-y-2" id="itinerary_highlight-wrapper">
                                                                <div class="itinerary_highlight-item">
                                                                    <div class="flex items-center gap-2">
                                                                            <input type="text"
                                                                                name="itinerary[0][activity_highlight][]"
                                                                                placeholder="e.g., Tokyo's oldest Buddhist temple"
                                                                                class="flex-1 px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                            <button
                                                                            type="button"
                                                                                class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-itinerary-highlight_button">
                                                                                <i class="fas fa-times"></i>
                                                                            </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button"
                                                                    class="text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-itinerary-highlight_button mt-3">
                                                                    <i class="fas fa-plus-circle"></i>
                                                                    Add highlight
                                                            </button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <button
                                        class="mt-4 w-full py-3 border-2 border-dashed border-gray-300 rounded-lg text-gray-600 hover:border-[#e92929] hover:text-[#e92929] transition-colors flex items-center justify-center gap-2">
                                        <i class="fas fa-plus"></i>
                                        <span class="font-medium">Add Itinerary Item</span>
                                    </button>
                                </div> 
                            </div>
                        </div>

                        <!-- Add New Tour Itinerary Button -->
                        <button
                        type="button"
                            class="add-itinerary_button w-full py-4 border-2 border-dashed border-[#e92929] rounded-xl text-[#e92929] hover:bg-[#e92929]/5 transition-colors flex items-center justify-center gap-2 font-medium">
                            <i class="fas fa-plus-circle"></i>
                            <span>Add New Tour Itinerary & Details</span>
                        </button>
                    </div>

                    <!-- Gallery Section -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                <div
                                        class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-images text-[#e92929]"></i>
                                </div>
                                Tour Gallery
                            </h2>

                            <p class="text-sm text-gray-600 mb-4">Upload multiple images to showcase different aspects
                                of your tour</p>

                            <div
                                class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-[#e92929] transition-colors cursor-pointer">
                                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                <p class="text-gray-600 font-medium mb-2">Drop images here or click to upload</p>
                                <p class="text-sm text-gray-500">Support: JPG, PNG, WebP (Max 5MB per image)</p>
                                <p class="text-sm text-gray-500 mb-4">You can upload up to 10 images</p>
                                <button
                                        class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors font-medium text-sm">
                                        Browse Gallery Images
                                </button>
                            </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex items-center justify-between bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                            <i class="fas fa-save"></i>
                            <span>Auto-saved 2 minutes ago</span>
                    </div>

                    <div class="flex items-center gap-3">
                            <button type="button"
                                class="px-6 py-2.5 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors font-medium">
                                Cancel
                            </button>
                            <button type="submit"
                                class="px-6 py-2.5 bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white rounded-lg hover:shadow-lg transition-all font-medium">
                                Publish Tour
                            </button>
                    </div>
                </div>
        </form>
    </main>


    {{------------------------------------------------- TEMPLATE ---------------------------------------------------------------}}
    @include('admin.template.template')
    <script src="{{mix("js/tour_create2.js")}}"></script>
</body>

</html>