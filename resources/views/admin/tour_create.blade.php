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
                    <span class="font-bold text-xl">ShogunTours</span>
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
                    <a href="{{route("tour_list")}}" class="hover:text-[#e92929] transition-colors">Tours</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span class="text-gray-800 font-medium">Create New Tour</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">Create New Tour</h1>
                <p class="text-gray-600 mt-2">Fill in the details below to create a new tour experience</p>
            </div>

            <!-- Form Sections -->
            <div class="space-y-6" id="tour-section">
                @if ($errors->any())
                    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg class="shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Danger</span>
                        <div>
                            <span class="font-medium">Ensure that these requirements are met:</span>
                            <ul class="mt-1.5 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
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
                            <input type="text" name="title" placeholder="e.g., Tokyo City Highlights Tour" value="{{old("title")}}"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                            <input type="text" name="subtitle" value="{{old("subtitle")}}"
                                placeholder="e.g., An unforgettable journey through Japan's vibrant capital"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">BadgeLabel</label>
                            <input type="text" name="badge" value="{{old("badge")}}" placeholder="e.g., Best seller" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        </div>
                        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Region</label>
                                <select name="region_id" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                    <option selected disabled >Choose a region</option>
                                    @foreach ($regions as $region)
                                        <option {{old("region_id") == $region->id ? "selected" : ""}} value="{{$region->id}}" >{{$region->region}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                                <select name="category_id" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                    <option selected disabled >Choose a category</option>
                                    @foreach ($categories as $category)
                                        <option {{old("category_id") == $category->id ? "selected" : ""}} value="{{$category->id}}" >{{$category->category}}</option>
                                    @endforeach
                                </select>
                            </div>
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
                    @if (session("temp_hero_image"))
                        <div class="preview_container border-2 border-dashed border-gray-300 rounded-lg p-5 text-center hover:border-[#e92929] transition-colors cursor-pointer h-[350px]">
                            <label for="hero_image" class="h-full block">
                                <img src="{{asset("storage/" . session("temp_hero_image"))}}" alt="" class="preview_src h-full w-full object-cover">
                            </label>
                            <input type="hidden" name="temp_hero_image" value="{{session("temp_hero_image")}}">
                        </div>
                        <div class="hero_image_element">
                                <input type="file"  name="hero_image" id="hero_image" class="hidden">
                        </div>
                        
                    @else
                        <div class="preview_container border-2 border-dashed border-gray-300 rounded-lg p-5 text-center hover:border-[#e92929] transition-colors cursor-pointer hidden h-[350px]">
                            <label for="hero_image" class="h-full block">
                                <img src="" alt="" class="preview_src h-full w-full object-cover">
                            </label>
                        </div>
                        <div
                            class="hero_image_element border-2 border-dashed border-gray-300 rounded-lg p-8 text-center flex items-center flex-col justify-center hover:border-[#e92929] transition-colors cursor-pointer h-[350px]">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                            <p class="text-gray-600 font-medium mb-2">Upload main tour image</p>
                            <p class="text-sm text-gray-500">This will be displayed as the main banner image</p>
                            <p class="text-sm text-gray-500 mb-4">Recommended size: 1920x1080px</p>
                            <label for="hero_image"
                                class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors font-medium text-sm w-fit">
                                Select Hero Image
                            </label>
                            <input type="file"  name="hero_image" id="hero_image" class="hidden">
                        </div>
                    @endif
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
                            <input type="text" name="overview_title" value="{{old("overview_title")}}"
                                placeholder="e.g., Experience Tokyo Like Never Before"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Overview
                                Description *</label>
                            <textarea rows="4" name="overview_description"
                                placeholder="Describe what makes this tour special..."
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none">{{old("overview_description")}}</textarea>
                            <p class="text-xs text-gray-500 mt-1">0/500 characters</p>
                        </div>
                    </div>
                </div>

                <!-- QA Section -->
                <div class="bg-white rounded-xl shadow-sm p-6" id="highlight-section">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <div
                            class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-question-circle text-[#e92929]"></i>
                        </div>
                        QA
                    </h2>
                    <p class="text-sm text-gray-600 mb-4">Add common questions and answers that help customers understand the experience.</p>
                    <div id="qa-wrapper">
                        @if (old("questions"))
                            @foreach (old("questions") as $qaIndex => $qa)
                                <div class="qa-item">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-start gap-4">
                                            <div class="flex-1">
                                                <input type="text" name="questions[{{$qaIndex}}][question]" value="{{$qa["question"]}}"
                                                    placeholder="Type a frequently asked question..."
                                                    class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                                                <textarea rows="2"  name="questions[{{$qaIndex}}][answer]"
                                                    placeholder="Type your answer here..."
                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none">{{$qa["answer"]}}</textarea>
                                            </div>
                                            <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-qa_button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="qa-item">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-start gap-4">
                                            <div class="flex-1">
                                                <input type="text" name="questions[0][question]" 
                                                    placeholder="Type a frequently asked question..."
                                                    class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                                                <textarea rows="2"  name="questions[0][answer]"
                                                    placeholder="Type your answer here..."
                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                                            </div>
                                            <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-qa_button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        @endif

                    </div>

                    <button type="button"
                        class="add-qa_button mt-4 w-full py-3 border-2 border-dashed border-gray-300 rounded-lg text-gray-600 hover:border-[#e92929] hover:text-[#e92929] transition-colors flex items-center justify-center gap-2">
                        <i class="fas fa-plus"></i>
                        <span class="font-medium">Add QA</span>
                    </button>
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

                    <p class="text-sm text-gray-600 mb-4">Add key features and highlights that make this tour special</p>
                    <div id="tour_highlight-wrapper">
                        @if (old("highlights"))
                            @foreach (old("highlights") as $highlightIndex => $highlight)
                                <div class="highlight-item">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-start gap-4">
                                            <div
                                                class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <i class="fas fa-torii-gate text-[#e92929]"></i>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" name="highlights[{{$highlightIndex}}][title]" value="{{$highlight["title"]}}"
                                                    placeholder="Highlight title (e.g., Ancient Temples & Shrines)"
                                                    class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                                                <textarea rows="2" name="highlights[{{$highlightIndex}}][description]"
                                                    placeholder="Brief description of this highlight..."
                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none">{{$highlight["description"]}}</textarea>
                                            </div>
                                            <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-highlight_button">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="highlight-item">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <i class="fas fa-torii-gate text-[#e92929]"></i>
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="highlights[0][title]"
                                                placeholder="Highlight title (e.g., Ancient Temples & Shrines)"
                                                class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                                            <textarea rows="2" name="highlights[0][description]"
                                                placeholder="Brief description of this highlight..."
                                                class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                                        </div>
                                        <button
                                            type="button"
                                            class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-highlight_button">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>

                    <button type="button"
                        class="add-highlight_button mt-4 w-full py-3 border-2 border-dashed border-gray-300 rounded-lg text-gray-600 hover:border-[#e92929] hover:text-[#e92929] transition-colors flex items-center justify-center gap-2">
                        <i class="fas fa-plus"></i>
                        <span class="font-medium">Add Highlight</span>
                    </button>
                </div>

                <!-- Reviews Section -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-star text-[#e92929]"></i>
                        </div>
                        Reviews
                    </h2>

                    <div class="space-y-6">
                        <!-- Review 1 -->
                        <div id="review-wrapper" class="space-y-3">
                            @if (old("reviews"))
                                @foreach (old("reviews") as $index => $review)
                                    <div class="review-item">
                                        <div class="border border-gray-200 rounded-lg p-4">
                                            <div class="flex items-center justify-between mb-4">
                                                <h3 class="text-lg font-medium text-gray-800">Review #{{$index + 1}}</h3>
                                                <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-review_button" title="Delete this review">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                            
                                            <div class="grid md:grid-cols-2 gap-4 mb-4">
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-2">Reviewer Name *</label>
                                                    <input type="text" name="reviews[{{$index}}][name]" value="{{$review["name"]}}"
                                                        placeholder="e.g., Sarah Johnson"
                                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                                </div>
                                                
                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700 mb-2">Rating *</label>
                                                    <select name="reviews[{{$index}}[rating]" 
                                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                                        <option value="">Select Rating</option>
                                                        <option value="5" {{$review["rating"] === 5 ? "selected" : ""}}>⭐⭐⭐⭐⭐ (5 stars)</option>
                                                        <option value="4" {{$review["rating"] === 4 ? "selected" : ""}}>⭐⭐⭐⭐ (4 stars)</option>
                                                        <option value="3" {{$review["rating"] === 3 ? "selected" : ""}}>⭐⭐⭐ (3 stars)</option>
                                                        <option value="2" {{$review["rating"] === 2 ? "selected" : ""}}>⭐⭐ (2 stars)</option>
                                                        <option value="1" {{$review["rating"] === 1 ? "selected" : ""}}>⭐ (1 star)</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Review Content *</label>
                                                <textarea rows="3" name="reviews[{{$index}}][content]"
                                                    placeholder="Share what made this tour amazing..."
                                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none">{{$review["content"]}}</textarea>
                                                <p class="text-xs text-gray-500 mt-1">0/300 characters</p>
                                            </div>

                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Review Date</label>
                                                <input type="date" name="reviews[{{$index}}][date]" value="{{$review["date"]}}"
                                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="review-item">
                                    <div class="border border-gray-200 rounded-lg p-4">
                                        <div class="flex items-center justify-between mb-4">
                                            <h3 class="text-lg font-medium text-gray-800">Review #1</h3>
                                            <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-review_button" title="Delete this review">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                        
                                        <div class="grid md:grid-cols-2 gap-4 mb-4">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Reviewer Name *</label>
                                                <input type="text" name="reviews[0][name]" value=""
                                                    placeholder="e.g., Sarah Johnson"
                                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                            </div>
                                            
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Rating *</label>
                                                <select name="reviews[0][rating]" 
                                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                                    <option value="">Select Rating</option>
                                                    <option value="5">⭐⭐⭐⭐⭐ (5 stars)</option>
                                                    <option value="4">⭐⭐⭐⭐ (4 stars)</option>
                                                    <option value="3">⭐⭐⭐ (3 stars)</option>
                                                    <option value="2">⭐⭐ (2 stars)</option>
                                                    <option value="1">⭐ (1 star)</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Review Content *</label>
                                            <textarea rows="3" name="reviews[0][content]"
                                                placeholder="Share what made this tour amazing..."
                                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none"></textarea>
                                            <p class="text-xs text-gray-500 mt-1">0/300 characters</p>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Review Date</label>
                                            <input type="date" name="reviews[0][date]" value=""
                                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>




                        <!-- Add New Review Button -->
                        <button type="button"
                            class="mt-3 text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-review_button">
                            <i class="fas fa-plus-circle"></i>
                            Add review
                        </button>
                    </div>
                </div>

                <!-- Multiple Tour Itineraries Section -->
                <div class="space-y-6" id="itinerary-section">
                    <h2 class="text-2xl font-bold text-gray-800">Tour Itineraries</h2>
                    <div id="itinerary-wrapper">
                        @if (old("itinerary"))
                            @foreach(old('itinerary') as $itineraryIndex => $itinerary)
                                <div class="itinerary-item mt-8" data-id="0">
                                    <div class="bg-white rounded-xl shadow-sm p-6 relative">
                                        <div class="absolute top-6 right-6">
                                            <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-itinerary_button" title="Delete this itinerary">
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
                                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                                            <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                <div class="flex items-center justify-between">
                                                    <h5 class="font-semibold text-gray-800">
                                                        <i class="fas fa-info-circle text-gray-400 mr-2"></i>
                                                        Tour Information
                                                    </h5>
                                                    
                                                </div>
                                            </div>

                                            <div class="m-8 grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                                                <div>
                                                    <label
                                                        class="block text-sm font-medium text-gray-700 mb-1">Duration
                                                        (hours) *</label>
                                                    <input name="itinerary[{{$itineraryIndex}}][duration]" type="number" value="{{$itinerary["duration"]}}"
                                                        placeholder="e.g., 8" min="1" max="24"
                                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>

                                                <div>
                                                    <label
                                                        class="block text-sm font-medium text-gray-700 mb-1">MaxParticipants
                                                        *</label>
                                                    <input name="itinerary[{{$itineraryIndex}}][max_participants]" value="{{$itinerary["max_participants"]}}"
                                                        type="number" placeholder="e.g., 15" min="1"
                                                        max="50"
                                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>

                                                <div>
                                                    <label
                                                        class="block text-sm font-medium text-gray-700 mb-1">Tour Type *</label>
                                                    <select name="itinerary[{{$itineraryIndex}}][tour_type]"
                                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                        <option {{old("itinerary.{$itineraryIndex}.tour_type") === "public" ? "selected" : ""}}>public</option>
                                                        <option {{old("itinerary.{$itineraryIndex}.tour_type") === "private" ? "selected" : ""}}>private</option>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label
                                                        class="block text-sm font-medium text-gray-700 mb-1">Meeting
                                                        Point *</label>
                                                    <input type="text" name="itinerary[{{$itineraryIndex}}][meeting_point]" value="{{old("itinerary.{$itineraryIndex}.meeting_point")}}"
                                                        placeholder="e.g., Hotel lobby or JR Shibuya Station"
                                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>

                                                <div>
                                                    <label
                                                        class="block text-sm font-medium text-gray-700 mb-1">Adult
                                                        Price (¥) *</label>
                                                    <input name="itinerary[{{$itineraryIndex}}][adult_price]" type="number" value="{{old("itinerary.{$itineraryIndex}.adult_price")}}"
                                                        placeholder="e.g., 12000" min="0"
                                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>

                                                <div>
                                                    <label
                                                        class="block text-sm font-medium text-gray-700 mb-1">Child
                                                        Price (¥)</label>
                                                    <input name="itinerary[{{$itineraryIndex}}][child_price]" type="number" value="{{old("itinerary.{$itineraryIndex}.child_price")}}"
                                                        placeholder="e.g., 6000" min="0"
                                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                </div>
                                            </div>

                                            <div class="m-8">
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Languages
                                                    Available</label>
                                                <div class="flex flex-wrap gap-3">
                                                    @php
                                                        $selectedLanguages = old("itinerary.{$itineraryIndex}.languages", []);
                                                        $selectedLanguages = is_array($selectedLanguages) ? $selectedLanguages : [];
                                                    @endphp

                                                    @foreach ($languages as $language)
                                                        <label class="flex items-center gap-2 cursor-pointer">
                                                            <input type="checkbox" 
                                                                value="{{ $language->id }}"
                                                                name="itinerary[{{$itineraryIndex}}][languages][]"{{ in_array($language->id, $selectedLanguages) ? 'checked' : '' }}
                                                                class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                                            <span class="text-sm text-gray-700">{{$language->language}}</span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Itinerary Overview-->
                                        <div class="mt-8">
                                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                                <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                    <div class="flex items-center justify-between">
                                                        <h5 class="font-semibold text-gray-800">Overview</h5>
                                                    </div>
                                                </div>
                                                <div class="p-8">
                                                    <div>
                                                        <div class="space-y-5">
                                                            <div>
                                                                <label class="block text-sm font-medium text-gray-700 mb-2">Overview Title *</label>
                                                                <input type="text" name="itinerary[{{$itineraryIndex}}][overview_title]"
                                                                    value="{{old("itinerary.{$itineraryIndex}.overview_title")}}"
                                                                    placeholder="e.g., Experience Tokyo Like Never Before"
                                                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                                            </div>

                                                            <div>
                                                                <label class="block text-sm font-medium text-gray-700 mb-2">Overview Description *</label>
                                                                <textarea rows="4"  name="itinerary[{{$itineraryIndex}}][overview_description]"
                                                                    placeholder="Describe what makes this tour special..."
                                                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none">{{old("itinerary.{$itineraryIndex}.overview_description")}}</textarea>
                                                                <p class="text-xs text-gray-500 mt-1">0/500 characters</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-8">
                                            <!-- Itinerary Item 1 -->
                                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                                <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                    <div class="flex items-center justify-between">
                                                        <h5 class="font-semibold text-gray-800">
                                                            Itinerary Item</h5>
                                                        
                                                    </div>
                                                </div>

                                                <div class="p-8">
                                                    <!-- Activities Section -->
                                                    <div>
                                                        <label class="block text-sm font-medium text-gray-700 mb-2">Activities</label>
                                                        <div class="space-y-3 activity-wrapper">
                                                            <!-- Activity Entry 1 -->
                                                            @if (isset($itinerary["activity"]) && is_array($itinerary["activity"]))
                                                                @foreach ($itinerary["activity"] as $activityIndex => $activity)
                                                                    <div class="activity-item">
                                                                        <div class="bg-gray-50 rounded-lg p-3">
                                                                            <div class="flex items-start gap-3">
                                                                                <div class="flex-1 space-y-3">
                                                                                    <div class="grid md:grid-cols-3 gap-3">
                                                                                        <div class="md:col-span-2">
                                                                                            <input type="text" value="{{$activity["activity_title"]}}"
                                                                                                name="itinerary[{{$itineraryIndex}}][activity][{{$activityIndex}}][activity_title]"
                                                                                                placeholder="e.g., Senso-ji Temple Visit"
                                                                                                class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <textarea
                                                                                            rows="2"
                                                                                            name="itinerary[{{$itineraryIndex}}][activity][{{$activityIndex}}][activity_description]"
                                                                                            placeholder="Brief description of the activity..."
                                                                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none">{{$activity["activity_description"]}}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity_button">
                                                                                    <i class="fas fa-times"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                @endforeach
                                                            @else
                                                                <div class="activity-item">
                                                                    <div class="bg-gray-50 rounded-lg p-3">
                                                                        <div class="flex items-start gap-3">
                                                                            <div class="flex-1 space-y-3">
                                                                                <div class="grid md:grid-cols-3 gap-3">
                                                                                    <div class="md:col-span-2">
                                                                                        <input type="text"
                                                                                            name="itinerary[0][activity][0][activity_title]"
                                                                                            placeholder="e.g., Senso-ji Temple Visit"
                                                                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <textarea
                                                                                        rows="2"
                                                                                        name="itinerary[0][activity][0][activity_description]"
                                                                                        placeholder="Brief description of the activity..."
                                                                                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <button type="button"
                                                                                class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity_button">
                                                                                <i
                                                                                    class="fas fa-times"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            @endif

                                                        </div>

                                                        <!-- Add Activity Button -->
                                                        <button type="button"
                                                            class="mt-3 text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-activity_button">
                                                            <i class="fas fa-plus-circle"></i>
                                                            Add activity
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border border-gray-200 rounded-lg overflow-hidden mt-8">
                                                <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                    <div class="flex items-center justify-between">
                                                        <h5 class="font-semibold text-gray-800">
                                                            Main Image for this Itinerary</h5>
                                                        
                                                    </div>
                                                </div>
                                                @if (session("temp_itinerary_image.{$itineraryIndex}"))
                                                    <div class="preview_container temp_container border-2 border-dashed border-gray-300 rounded-lg p-5 text-center hover:border-[#e92929] transition-colors cursor-pointer h-[350px]">
                                                        <label for="itinerary_{{$itineraryIndex}}" class="h-full block">
                                                            <img src="{{asset("storage/" . session("temp_itinerary_image.{$itineraryIndex}"))}}" alt="itineray main image" class="itinerary_preview_src{{$itineraryIndex}} h-full w-full object-cover">
                                                        </label>
                                                        <input type="hidden" name="itinerary[{{$itineraryIndex}}][temp_itinerary_image]" value="{{session("temp_itinerary_image.{$itineraryIndex}")}}">
                                                    </div>
                                                    <div class="itinerary_image_element{{$itineraryIndex}}">
                                                        <input type="file" name="itinerary[{{$itineraryIndex}}][image]" id="itinerary_{{$itineraryIndex}}" class="hidden">
                                                    </div>
                                                @else
                                                    <div class="preview_container border-2 border-dashed border-gray-300 rounded-lg p-5 text-center hover:border-[#e92929] transition-colors cursor-pointer hidden h-[350px]">
                                                        <label for="itinerary_{{$itineraryIndex}}" class="h-full block">
                                                            <img src="" alt="" class="itinerary_preview_src{{$itineraryIndex}} h-full w-full object-cover">
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="m-8 itinerary_image_element{{$itineraryIndex}} border-2 border-dashed border-gray-300 rounded-lg p-8 text-center flex items-center flex-col justify-center hover:border-[#e92929] transition-colors cursor-pointer h-[350px]">
                                                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                                        <p class="text-gray-600 font-medium mb-2">Upload itinerary image</p>
                                                        <p class="text-sm text-gray-500">This will be displayed as the itinerary banner image</p>
                                                        <p class="text-sm text-gray-500 mb-4">Recommended size: 1920x1080px</p>
                                                        <label for="itinerary_{{$itineraryIndex}}"
                                                            class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors font-medium text-sm w-fit">
                                                            Select Itinerary Image
                                                        </label>
                                                        <input type="file" name="itinerary[{{$itineraryIndex}}][image]" id="itinerary_{{$itineraryIndex}}" class="hidden">
                                                    </div>
                                                @endif
                                                
                                            </div>

                                            <div class="border border-gray-200 rounded-lg overflow-hidden mt-8">
                                                <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                    <div class="flex items-center justify-between">
                                                        <h5 class="font-semibold text-gray-800">Activity Highlights</h5>
                                                    </div>
                                                </div>
                                                <div class="m-8 space-y-2 itinerary_highlight-wrapper">
                                                    @if (isset($itinerary["itinerary_highlight"]) && is_array($itinerary["itinerary_highlight"]))
                                                        @foreach ($itinerary["itinerary_highlight"] as $highlightIndex => $highlight)
                                                            <div class="itinerary_highlight-item">
                                                                <div
                                                                    class="flex items-center gap-2">
                                                                    <input type="text" value="{{$highlight}}"
                                                                        name="itinerary[{{$itineraryIndex}}][itinerary_highlight][]"
                                                                        placeholder="e.g., Tokyo's oldest Buddhist temple"
                                                                        class="flex-1 px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                    <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-itinerary-highlight_button">
                                                                        <i class="fas fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="itinerary_highlight-item">
                                                            <div
                                                                class="flex items-center gap-2">
                                                                <input type="text"
                                                                    name="itinerary[0][itinerary_highlight][]"
                                                                    placeholder="e.g., Tokyo's oldest Buddhist temple"
                                                                    class="flex-1 px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                <button type="button"
                                                                    class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-itinerary-highlight_button">
                                                                    <i
                                                                        class="fas fa-times"></i>
                                                                </button>
                                                            </div>
                                                    @endif
                                                </div>
                                                <button type="button" class="m-8 text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-itinerary-highlight_button mt-3">
                                                    <i class="fas fa-plus-circle"></i>
                                                    Add highlight
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="itinerary-item mt-8" data-id="0">
                                <div class="bg-white rounded-xl shadow-sm p-6 relative">
                                    <div class="absolute top-6 right-6">
                                        <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-itinerary_button" title="Delete this itinerary">
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
                                    <div class="mt-8 border border-gray-200 rounded-lg overflow-hidden">
                                        <div class="bg-gray-50 p-4 border-b border-gray-200">
                                            <div class="flex items-center justify-between">
                                                <h5 class="font-semibold text-gray-800">
                                                    <i class="fas fa-info-circle text-gray-400 mr-2"></i>
                                                    Tour Information
                                                </h5>
                                                
                                            </div>
                                        </div>

                                        <div class="m-8 grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                                            <div>
                                                <label
                                                    class="block text-sm font-medium text-gray-700 mb-1">Duration
                                                    (hours) *</label>
                                                <input name="itinerary[0][duration]" type="number"
                                                    placeholder="e.g., 8" min="1" max="24"
                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                            </div>

                                            <div>
                                                <label
                                                    class="block text-sm font-medium text-gray-700 mb-1">MaxParticipants
                                                    *</label>
                                                <input name="itinerary[0][max_participants]"
                                                    type="number" placeholder="e.g., 15" min="1"
                                                    max="50"
                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                            </div>

                                            <div>
                                                <label
                                                    class="block text-sm font-medium text-gray-700 mb-1">Tour
                                                    Type *</label>
                                                <select name="itinerary[0][tour_type]"
                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                    <option>public</option>
                                                    <option>private</option>
                                                </select>
                                            </div>

                                            <div>
                                                <label
                                                    class="block text-sm font-medium text-gray-700 mb-1">Meeting
                                                    Point *</label>
                                                <input type="text" name="itinerary[0][meeting_point]"
                                                    placeholder="e.g., Hotel lobby or JR Shibuya Station"
                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                            </div>

                                            <div>
                                                <label
                                                    class="block text-sm font-medium text-gray-700 mb-1">Adult
                                                    Price (¥) *</label>
                                                <input name="itinerary[0][adult_price]" type="number"
                                                    placeholder="e.g., 12000" min="0"
                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                            </div>

                                            <div>
                                                <label
                                                    class="block text-sm font-medium text-gray-700 mb-1">Child
                                                    Price (¥)</label>
                                                <input name="itinerary[0][child_price]" type="number"
                                                    placeholder="e.g., 6000" min="0"
                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                            </div>
                                        </div>

                                        <div class="m-8">
                                            <label class="block text-sm font-medium text-gray-700 mb-2">Languages
                                                Available</label>
                                            <div class="flex flex-wrap gap-3">
                                                @foreach ($languages as $language)
                                                    <label class="flex items-center gap-2 cursor-pointer">
                                                        <input type="checkbox" value="{{ $language->id }}"
                                                            name="itinerary[0][languages][]"
                                                            class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                                                        <span
                                                            class="text-sm text-gray-700">{{$language->language}}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Itinerary Overview-->
                                    <div class="mt-8">
                                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                                            <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                <div class="flex items-center justify-between">
                                                    <h5 class="font-semibold text-gray-800">Overview</h5>
                                                </div>
                                            </div>
                                            <div class="p-8">
                                                <div>
                                                    <div class="space-y-5">
                                                        <div>
                                                            <label class="block text-sm font-medium text-gray-700 mb-2">Overview Title *</label>
                                                            <input type="text" name="itinerary[0][overview_title]"
                                                                placeholder="e.g., Experience Tokyo Like Never Before"
                                                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                                        </div>

                                                        <div>
                                                            <label class="block text-sm font-medium text-gray-700 mb-2">Overview
                                                                Description *</label>
                                                            <textarea rows="4"  name="itinerary[0][overview_description]"
                                                                placeholder="Describe what makes this tour special..."
                                                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none"></textarea>
                                                            <p class="text-xs text-gray-500 mt-1">0/500 characters</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <!-- Itinerary Item 1 -->
                                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                                            <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                <div class="flex items-center justify-between">
                                                    <h5 class="font-semibold text-gray-800">
                                                        Itinerary Item</h5>
                                                    
                                                </div>
                                            </div>

                                            <div class="p-8">
                                                <!-- Activities Section -->
                                                <div>
                                                    <label
                                                        class="block text-sm font-medium text-gray-700 mb-2">Activities</label>
                                                    <div class="space-y-3 activity-wrapper">
                                                        <!-- Activity Entry 1 -->
                                                        <div class="activity-item">
                                                            <div class="bg-gray-50 rounded-lg p-3">
                                                                <div class="flex items-start gap-3">
                                                                    <div class="flex-1 space-y-3">
                                                                        <div class="grid md:grid-cols-3 gap-3">
                                                                            <div class="md:col-span-2">
                                                                                <input type="text"
                                                                                    name="itinerary[0][activity][0][activity_title]"
                                                                                    placeholder="e.g., Senso-ji Temple Visit"
                                                                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <textarea
                                                                                rows="2"
                                                                                name="itinerary[0][activity][0][activity_description]"
                                                                                placeholder="Brief description of the activity..."
                                                                                class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm resize-none"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button"
                                                                        class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-activity_button">
                                                                        <i
                                                                            class="fas fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Add Activity Button -->
                                                    <button type="button"
                                                        class="mt-3 text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-activity_button">
                                                        <i class="fas fa-plus-circle"></i>
                                                        Add activity
                                                    </button>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="border border-gray-200 rounded-lg overflow-hidden mt-8">
                                            <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                <div class="flex items-center justify-between">
                                                    <h5 class="font-semibold text-gray-800">
                                                        Main Image for this Itinerary</h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="preview_container border-2 border-dashed border-gray-300 rounded-lg p-5 text-center hover:border-[#e92929] transition-colors cursor-pointer hidden h-[350px]">
                                                <label for="itinerary_0" class="h-full block">
                                                    <img src="" alt="" class="itinerary_preview_src0 h-full w-full object-cover">
                                                </label>
                                            </div>
                                            <div
                                                class="m-8 itinerary_image_element0 border-2 border-dashed border-gray-300 rounded-lg p-8 text-center flex items-center flex-col justify-center hover:border-[#e92929] transition-colors cursor-pointer h-[350px]">
                                                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                                <p class="text-gray-600 font-medium mb-2">Upload itinerary image</p>
                                                <p class="text-sm text-gray-500">This will be displayed as the itinerary banner image</p>
                                                <p class="text-sm text-gray-500 mb-4">Recommended size: 1920x1080px</p>
                                                <label for="itinerary_0"
                                                    class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors font-medium text-sm w-fit">
                                                    Select Itinerary Image
                                                </label>
                                                <input type="file" name="itinerary[0][image]" id="itinerary_0" class="hidden">
                                            </div>
                                        </div>

                                        <div class="border border-gray-200 rounded-lg overflow-hidden mt-8">
                                            <div class="bg-gray-50 p-4 border-b border-gray-200">
                                                <div class="flex items-center justify-between">
                                                    <h5 class="font-semibold text-gray-800">Activity Highlights</h5>
                                                </div>
                                            </div>
                                            <div class="m-8 space-y-2 itinerary_highlight-wrapper">
                                                <div class="itinerary_highlight-item">
                                                    <div
                                                        class="flex items-center gap-2">
                                                        <input type="text"
                                                            name="itinerary[0][itinerary_highlight][]"
                                                            placeholder="e.g., Tokyo's oldest Buddhist temple"
                                                            class="flex-1 px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                                        <button type="button"
                                                            class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-itinerary-highlight_button">
                                                            <i
                                                                class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button"
                                                class="m-8 text-[#e92929] hover:text-[#d61f1f] text-sm font-medium flex items-center gap-1 add-itinerary-highlight_button mt-3">
                                                <i class="fas fa-plus-circle"></i>
                                                Add highlight
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Add New Tour Itinerary Button -->
                    <button type="button"
                        class="add-itinerary_button w-full py-4 border-2 border-dashed border-[#e92929] rounded-xl text-[#e92929] hover:bg-[#e92929]/5 transition-colors flex items-center justify-center gap-2 font-medium">
                        <i class="fas fa-plus-circle"></i>
                        <span>Add New Tour Itinerary & Details</span>
                    </button>
                </div>

                <!-- Gallery Section -->
                @include('components.gallery')

            </div>



            <!-- Fixed Publish Button -->
            <button type="submit" title="Publish Tour"
                class="fixed bottom-6 right-6 w-14 h-14 bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white rounded-full hover:shadow-lg transition-all font-medium z-50 flex items-center justify-center">
                <i class="fas fa-check text-xl"></i>
            </button>
        </form>
    </main>
    @include('admin.template.template')
    <script src="{{mix("js/tour_create2.js")}}"></script>

    <script>
        // Basic functionality for the form
        document.addEventListener('DOMContentLoaded', function() {
            // Character counter for overview description
            const overviewDescription = document.querySelector('textarea[name="overview_description"]');
            const charCounter = document.querySelector('.text-xs.text-gray-500');
            
            if (overviewDescription && charCounter) {
                overviewDescription.addEventListener('input', function() {
                    const count = this.value.length;
                    charCounter.textContent = `${count}/500 characters`;
                });
            }

        });
    </script>
</body>

</html>