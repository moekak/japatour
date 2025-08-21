<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Blog Post - ShogunTours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
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

        .editor-toolbar {
            border-bottom: 1px solid #e5e7eb;
        }

        .editor-content {
            min-height: 400px;
            font-family: 'Inter', monospace;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 bg-white/80 backdrop-blur-md z-50 transition-all duration-300 border-b border-gray-100">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-[#e92929] rounded-lg flex items-center justify-center">
                        <i class="fas fa-mountain text-white text-sm"></i>
                    </div>
                    <span class="font-bold text-xl">ShogunTours</span>
                </div>
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#" class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Dashboard</a>
                    <a href="#" class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Blog Posts</a>
                    <a href="#" class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Analytics</a>
                    <a href="#" class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Settings</a>
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
        <div class="container mx-auto px-6 max-w-6xl">
            <!-- Page Header with Action Buttons -->
            <div class="mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="flex items-center gap-2 text-sm text-gray-600 mb-4">
                            <a href="#" class="hover:text-[#e92929] transition-colors">Blog</a>
                            <i class="fas fa-chevron-right text-xs"></i>
                            <span class="text-gray-800 font-medium">Create New Post</span>
                        </div>
                        <h1 class="text-3xl font-bold text-gray-800">Create New Blog Post</h1>
                        <p class="text-gray-600 mt-2">Share your travel insights and stories with the world</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <button type="button" onclick="publishPost()" 
                              class="px-8 py-3 bg-[#e92929] text-white rounded-lg hover:bg-[#d61f1f] transition-colors font-semibold text-lg shadow-lg hover:shadow-xl transform hover:scale-105">
                              <i class="fas fa-plus mr-2"></i>Create Post
                        </button>
                    </div>
                </div>
            </div>

            <!-- Error Display -->
            <div id="js_alert" class="hidden p-4 mb-6 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Danger</span>
                <div>
                    <span class="font-medium">Ensure that these requirements are met:</span>
                    <ul class="mt-1.5 list-disc list-inside" id="error-container">
                    </ul>
                </div>
            </div>

            <!-- Form Layout - Single Column for Better Space Usage -->
            <div class="space-y-8">
                
                <!-- Basic Information -->
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-8 flex items-center">
                        <div class="w-10 h-10 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-info-circle text-[#e92929]"></i>
                        </div>
                        Basic Information
                    </h2>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="lg:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Post Title *</label>
                            <input type="text" id="title" name="title" placeholder="e.g., The Ultimate Guide to Tokyo's Hidden Gems" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-lg">
                        </div>

                        <div class="lg:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                            <input type="text" id="subtitle" name="subtitle" placeholder="e.g., Discover secret spots locals don't want tourists to know"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                            <select id="category" name="category" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                <option value="">Choose a category</option>
                                @foreach ($categories as $category)
                                    <option value={{$category->id}}>{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Featured</label>
                            <div class="flex space-x-6 pt-2">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" id="featured-no" name="is_featured" value="0" 
                                        class="w-4 h-4 text-[#e92929] border-gray-300 focus:ring-[#e92929] focus:ring-2" checked>
                                    <span class="text-sm text-gray-700">No</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" id="featured-yes" name="is_featured" value="1" 
                                        class="w-4 h-4 text-[#e92929] border-gray-300 focus:ring-[#e92929] focus:ring-2">
                                    <span class="text-sm text-gray-700">Yes</span>
                                </label>
                            </div>
                        </div>

                        <div class="lg:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                            <textarea id="meta_description" name="meta_description" rows="3" 
                                placeholder="Brief description for search engines and social media..."
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none"></textarea>
                            <p class="text-xs text-gray-500 mt-1">Recommended: 150-160 characters</p>
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-8 flex items-center">
                        <div class="w-10 h-10 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-image text-[#e92929]"></i>
                        </div>
                        Featured Image
                    </h2>

                    <div id="image-upload-area" class="border-2 border-dashed border-gray-300 rounded-lg p-12 text-center hover:border-[#e92929] transition-colors cursor-pointer">
                        <i class="fas fa-cloud-upload-alt text-5xl text-gray-400 mb-6"></i>
                        <p class="text-gray-600 font-medium mb-2 text-lg">Upload featured image</p>
                        <p class="text-sm text-gray-500 mb-4">Drag and drop or click to select</p>
                        <p class="text-sm text-gray-500 mb-6">Recommended: 1200x630px (16:9 ratio)</p>
                        <input type="file" id="featured_image" accept="image/*" class="hidden">
                        <button type="button" onclick="document.getElementById('featured_image').click()" 
                                class="px-8 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors font-medium">
                            Select Image
                        </button>
                    </div>
                    <div id="image-preview" class="mt-4 hidden">
                        <img id="preview-img" src="" alt="Preview" class="w-full h-64 object-cover rounded-lg">
                        <button type="button" onclick="removeImage()" class="mt-4 text-sm text-red-600 hover:text-red-800 flex items-center">
                            <i class="fas fa-trash mr-2"></i>Remove Image
                        </button>
                    </div>
                </div>

                <!-- Content Editor - Larger -->
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-8 flex items-center">
                        <div class="w-10 h-10 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-edit text-[#e92929]"></i>
                        </div>
                        Content Editor
                    </h2>

                    <!-- Editor Toolbar -->
                    <div class="editor-toolbar bg-gray-50 p-4 rounded-t-lg border border-gray-300 flex flex-wrap gap-3">
                        <button type="button" onclick="insertMarkdown('**', '**')" title="Bold"
                                class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                            <i class="fas fa-bold"></i>
                        </button>
                        <button type="button" onclick="insertMarkdown('*', '*')" title="Italic"
                                class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                            <i class="fas fa-italic"></i>
                        </button>
                        <div class="border-l border-gray-300 mx-1"></div>
                        <button type="button" onclick="insertMarkdown('## ', '')" title="Heading 2"
                                class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors font-semibold">
                            H2
                        </button>
                        <button type="button" onclick="insertMarkdown('### ', '')" title="Heading 3"
                                class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors font-semibold">
                            H3
                        </button>
                        <div class="border-l border-gray-300 mx-1"></div>
                        <button type="button" onclick="insertMarkdown('- ', '')" title="Bullet List"
                                class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                            <i class="fas fa-list-ul"></i>
                        </button>
                        <button type="button" onclick="insertMarkdown('1. ', '')" title="Numbered List"
                                class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                            <i class="fas fa-list-ol"></i>
                        </button>
                        <div class="border-l border-gray-300 mx-1"></div>
                        <button type="button" onclick="insertLink()" title="Insert Link"
                                class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                            <i class="fas fa-link"></i>
                        </button>
                        <button type="button" onclick="insertImage()" title="Insert Image"
                                class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                            <i class="fas fa-image"></i>
                        </button>
                    </div>

                    <!-- Editor Textarea - Much Larger -->
                    <textarea id="content" name="content" rows="30" 
                            placeholder="Write your blog post content here using Markdown...    
Examples:
## This is a heading
**This is bold text**
*This is italic text*
- This is a bullet point
1. This is a numbered list
[Link text](https://example.com)
![Image alt text](image-url.jpg)"
                            class="w-full px-6 py-6 border border-gray-300 border-t-0 rounded-b-lg focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all editor-content resize-none text-base leading-relaxed"></textarea>
                </div>

                <!-- Tags & SEO -->
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-8 flex items-center">
                        <div class="w-10 h-10 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-tags text-[#e92929]"></i>
                        </div>
                        Tags & SEO
                    </h2>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                            <input type="text" id="tags" name="tags" placeholder="tokyo, travel-tips, japan, culture (separate with commas)"
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                            <p class="text-xs text-gray-500 mt-1">Separate tags with commas</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Reading Time (minutes)</label>
                            <input type="number" id="reading_time" name="reading_time" min="1" max="60" placeholder="5"
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        </div>
                    </div>
                </div>

                <!-- Bottom Action Bar -->
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex justify-between items-center">
                        <div class="text-gray-500">
                            <i class="fas fa-info-circle mr-2"></i>
                            Make sure to fill in all required fields before publishing
                        </div>
                        <button type="button" onclick="publishPost()" 
                              class="px-12 py-4 bg-[#e92929] text-white rounded-lg hover:bg-[#d61f1f] transition-colors font-semibold text-xl shadow-lg hover:shadow-xl transform hover:scale-105">
                              <i class="fas fa-plus mr-3"></i>Create Post
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Initialize marked.js
        marked.setOptions({
            breaks: true,
            gfm: true,
            headerIds: false,
            mangle: false
        });

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
        });

        function setupEventListeners() {
            // Image upload
            document.getElementById('featured_image').addEventListener('change', handleImageUpload);
        }

        // Markdown editor functions
        function insertMarkdown(before, after) {
            const textarea = document.getElementById('content');
            const start = textarea.selectionStart;
            const end = textarea.selectionEnd;
            const selectedText = textarea.value.substring(start, end);
            
            const replacement = before + selectedText + after;
            textarea.value = textarea.value.substring(0, start) + replacement + textarea.value.substring(end);
            
            const newPosition = start + before.length + selectedText.length;
            textarea.focus();
            textarea.setSelectionRange(newPosition, newPosition);
        }

        function insertLink() {
            const url = prompt('Enter the URL:');
            const text = prompt('Enter the link text:') || 'Link';
            if (url) {
                insertMarkdown(`[${text}](${url})`, '');
            }
        }

        function insertImage() {
            const url = prompt('Enter the image URL:');
            const alt = prompt('Enter the alt text:') || 'Image';
            if (url) {
                insertMarkdown(`![${alt}](${url})`, '');
            }
        }

        // Image upload handling
        function handleImageUpload(event) {
            const file = event.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-img').src = e.target.result;
                document.getElementById('image-preview').classList.remove('hidden');
                document.getElementById('image-upload-area').classList.add('hidden');
            };
            reader.readAsDataURL(file);
        }

        function removeImage() {
            document.getElementById('featured_image').value = '';
            document.getElementById('image-preview').classList.add('hidden');
            document.getElementById('image-upload-area').classList.remove('hidden');
        }

        // Publish post
        const publishPost = async() => {
            const postData = getFormData(); 
            const response = await fetch('/api/blog/create', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json', 
                },
                body: postData,
            });

            const data = await response.json()
            
            const errorContainer = document.getElementById("js_alert")
            if(data.status == "error"){
                const errorListBox = document.getElementById("error-container")
                errorListBox.innerHTML = ""
                const errors = Object.entries(data.errors).flatMap(([title, error]) => error);
                const errorContent = errors.map((error) => {
                    return `<li>${error}</li>`
                }).join("");

                errorListBox.innerHTML = errorContent
                errorContainer.classList.remove("hidden")
                errorContainer.classList.add("flex")
                
                // Scroll to top to show error
                window.scrollTo({ top: 0, behavior: 'smooth' });
                
            } else {
                errorContainer.classList.add("hidden")
                errorContainer.classList.remove("flex")
                localStorage.setItem("success", "Successfully created the blog post!")
                window.location.href = "/blog/list"
            }
        }

        // Get form data
        function getFormData() {
            const formData = new FormData();
            formData.append('title', document.getElementById('title').value);
            formData.append('subtitle', document.getElementById('subtitle').value);
            formData.append('blog_category_id', document.getElementById('category').value);
            formData.append('meta_description', document.getElementById('meta_description').value);
            formData.append('content', document.getElementById('content').value);
            formData.append('tags', document.getElementById('tags').value);
            formData.append('reading_time', document.getElementById('reading_time').value);
            const featuredElement = document.querySelector('input[name="is_featured"]:checked');
            const featuredValue = featuredElement ? featuredElement.value : '0';
            formData.append('is_featured', featuredValue);

            const imageFile = document.getElementById('featured_image').files[0];
            if (imageFile) {
                formData.append('featured_image', imageFile);
            }

            return formData
        }

    </script>
</body>
</html>