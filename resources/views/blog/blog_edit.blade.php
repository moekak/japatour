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
                  min-height: 300px;
                  font-family: 'Inter', monospace;
            }

            .preview-content {
                  line-height: 1.6;
            }

            .preview-content h1 { font-size: 2rem; font-weight: 700; margin: 1.5rem 0 1rem; }
            .preview-content h2 { font-size: 1.75rem; font-weight: 600; margin: 1.25rem 0 0.75rem; }
            .preview-content h3 { font-size: 1.5rem; font-weight: 600; margin: 1rem 0 0.5rem; }
            .preview-content p { margin: 0.75rem 0; }
            .preview-content ul, .preview-content ol { margin: 0.75rem 0; padding-left: 1.5rem; }
            .preview-content li { margin: 0.25rem 0; }
            .preview-content strong { font-weight: 600; }
            .preview-content em { font-style: italic; }
            .preview-content code { background: #f3f4f6; padding: 0.125rem 0.25rem; border-radius: 0.25rem; font-size: 0.875rem; }
            .preview-content blockquote { border-left: 4px solid #e92929; padding-left: 1rem; margin: 1rem 0; font-style: italic; }
      </style>
</head>
<body class="bg-gray-50">
      <input type="hidden" value={{$blog->id}} id="blog_id">
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
            <div class="container mx-auto px-6 max-w-[1200px]">
                  <!-- Page Header -->
                  <div class="mb-8">
                        <div class="flex items-center gap-2 text-sm text-gray-600 mb-4">
                              <a href="#" class="hover:text-[#e92929] transition-colors">Blog</a>
                              <i class="fas fa-chevron-right text-xs"></i>
                              <span class="text-gray-800 font-medium">Edit Blog</span>
                        </div>
                        <h1 class="text-3xl font-bold text-gray-800">Edit Blog Post</h1>
                        <p class="text-gray-600 mt-2">Share your travel insights and stories with the world</p>
                  </div>

                  <!-- error display -->
                  <div id="js_alert" class="hidden p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
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

                  <!-- Form Layout -->
                  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        
                        <!-- Main Form Section -->
                        <div class="lg:col-span-2 space-y-6">
                              
                              <!-- Basic Information -->
                              <div class="bg-white rounded-xl shadow-sm p-6">
                                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                    <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                          <i class="fas fa-info-circle text-[#e92929]"></i>
                                    </div>
                                    Basic Information
                                    </h2>

                                    <div class="space-y-5">
                                    <div>
                                          <label class="block text-sm font-medium text-gray-700 mb-2">Post Title *</label>
                                          <input type="text" id="title" name="title" placeholder="e.g., The Ultimate Guide to Tokyo's Hidden Gems"  value="{{$blog->title}}"
                                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                    </div>

                                    <div>
                                          <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                                          <input type="text" id="subtitle" name="subtitle" value="{{$blog->subtitle}}" placeholder="e.g., Discover secret spots locals don't want tourists to know"
                                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                    </div>

                                    <div class="grid md:grid-cols-2 gap-4">
                                          <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                                                <select id="category" name="category" 
                                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                                <option value="">Choose a category</option>
                                                <option value="Travel Tips" {{$blog->category === "Travel Tips" ? "selected": ""}}>Travel Tips</option>
                                                <option value="Destinations" {{$blog->category === "Destinations" ? "selected": ""}}>Destinations</option>
                                                <option value="Culture" {{$blog->category === "Culture" ? "selected": ""}}>Culture</option>
                                                <option value="Food & Dining" {{$blog->category === "Food & Dining" ? "selected": ""}}>Food & Dining</option>
                                                <option value="Transportation" {{$blog->category === "Transportation" ? "selected": ""}}>Transportation</option>
                                                <option value="Accommodation" {{$blog->category === "Accommodation" ? "selected": ""}}>Accommodation</option>
                                                </select>
                                          </div>
                                    </div>

                                    <div>
                                          <label class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                                          <textarea id="meta_description" name="meta_description" rows="3" 
                                                placeholder="Brief description for search engines and social media..."
                                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none">{{$blog->meta_description}}</textarea>
                                          <p class="text-xs text-gray-500 mt-1">Recommended: 150-160 characters</p>
                                    </div>
                                    </div>
                              </div>

                              <!-- Featured Image -->
                              <div class="bg-white rounded-xl shadow-sm p-6">
                                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                    <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                          <i class="fas fa-image text-[#e92929]"></i>
                                    </div>
                                          Featured Image
                                    </h2>

                                    <div id="image-upload-area" class="hidden border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-[#e92929] transition-colors cursor-pointer">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                    <p class="text-gray-600 font-medium mb-2">Upload featured image</p>
                                    <p class="text-sm text-gray-500 mb-4">Drag and drop or click to select</p>
                                    <p class="text-sm text-gray-500 mb-4">Recommended: 1200x630px (16:9 ratio)</p>
                                    <input type="file" id="featured_image" accept="image/*" class="hidden">
                                    <button type="button" onclick="document.getElementById('featured_image').click()" 
                                                class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors font-medium">
                                          Select Image
                                    </button>
                                    </div>
                                    <div id="image-preview" class="mt-4">
                                    <img id="preview-img" src="{{ asset('storage/' . $blog->featured_image) }}" alt="Preview" class="w-full h-48 object-cover rounded-lg">
                                    <button type="button" onclick="removeImage()" class="mt-2 text-sm text-red-600 hover:text-red-800">
                                          <i class="fas fa-trash mr-1"></i>Remove Image
                                    </button>
                                    </div>
                              </div>

                              <!-- Content Editor -->
                              <div class="bg-white rounded-xl shadow-sm p-6">
                                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                    <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                          <i class="fas fa-edit text-[#e92929]"></i>
                                    </div>
                                          Content Editor
                                    </h2>

                                    <!-- Editor Toolbar -->
                                    <div class="editor-toolbar bg-gray-50 p-3 rounded-t-lg border border-gray-300 flex flex-wrap gap-2">
                                    <button type="button" onclick="insertMarkdown('**', '**')" title="Bold"
                                                class="px-3 py-1 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                                          <i class="fas fa-bold"></i>
                                    </button>
                                    <button type="button" onclick="insertMarkdown('*', '*')" title="Italic"
                                                class="px-3 py-1 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                                          <i class="fas fa-italic"></i>
                                    </button>
                                    <div class="border-l border-gray-300 mx-1"></div>
                                    <button type="button" onclick="insertMarkdown('## ', '')" title="Heading 2"
                                                class="px-3 py-1 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                                          H2
                                    </button>
                                    <button type="button" onclick="insertMarkdown('### ', '')" title="Heading 3"
                                                class="px-3 py-1 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                                          H3
                                    </button>
                                    <div class="border-l border-gray-300 mx-1"></div>
                                    <button type="button" onclick="insertMarkdown('- ', '')" title="Bullet List"
                                                class="px-3 py-1 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                                          <i class="fas fa-list-ul"></i>
                                    </button>
                                    <button type="button" onclick="insertMarkdown('1. ', '')" title="Numbered List"
                                                class="px-3 py-1 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                                          <i class="fas fa-list-ol"></i>
                                    </button>
                                    <div class="border-l border-gray-300 mx-1"></div>
                                    <button type="button" onclick="insertLink()" title="Insert Link"
                                                class="px-3 py-1 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                                          <i class="fas fa-link"></i>
                                    </button>
                                    <button type="button" onclick="insertImage()" title="Insert Image"
                                                class="px-3 py-1 bg-white border border-gray-300 rounded hover:bg-gray-100 transition-colors">
                                          <i class="fas fa-image"></i>
                                    </button>
                                    </div>

                                    <!-- Editor Textarea -->
                                    <textarea id="content" name="content" rows="20" 
                                          placeholder="Write your blog post content here using Markdown...    
                                                Examples:
                                                ## This is a heading
                                                **This is bold text**
                                                *This is italic text*
                                                - This is a bullet point
                                                1. This is a numbered list
                                                [Link text](https://example.com)
                                                ![Image alt text](image-url.jpg)"
                                          class="w-full px-4 py-4 border border-gray-300 border-t-0 rounded-b-lg focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all editor-content resize-none">{{$blog->content}}</textarea>
                              </div>

                              <!-- Tags -->
                              <div class="bg-white rounded-xl shadow-sm p-6">
                                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                    <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                                          <i class="fas fa-tags text-[#e92929]"></i>
                                    </div>
                                    Tags & SEO
                                    </h2>

                                    <div class="space-y-5">
                                    <div>
                                          <label class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                                          <input type="text" id="tags" name="tags" value={{$blog->tags}} placeholder="tokyo, Travel Tips, japan, Culture (separate with commas)"
                                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                          <p class="text-xs text-gray-500 mt-1">Separate tags with commas</p>
                                    </div>

                                    <div>
                                          <label class="block text-sm font-medium text-gray-700 mb-2">Reading Time (minutes)</label>
                                          <input type="number" id="reading_time" name="reading_time" min="1" max="60" placeholder="5" value={{$blog->reading_time}}
                                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                    </div>
                                    </div>
                              </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                              
                              <!-- Publish Actions -->
                              <div class="bg-white rounded-xl shadow-sm p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Publish</h3>
                                    <div class="space-y-4">
                                    <button type="button" onclick="previewPost()" 
                                                class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                                          <i class="fas fa-eye mr-2"></i>Preview
                                    </button>
                                    <button type="button" onclick="publishPost()" 
                                                class="w-full px-6 py-3 bg-[#e92929] text-white rounded-lg hover:bg-[#d61f1f] transition-colors font-medium">
                                          <i class="fas fa-globe mr-2"></i>Publish
                                    </button>
                                    </div>
                              </div>

                              <!-- Live Preview -->
                              <div class="bg-white rounded-xl shadow-sm p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Live Preview</h3>
                                    <div id="live-preview" class="border border-gray-200 rounded-lg p-4 max-h-96 overflow-y-auto preview-content">
                                    <p class="text-gray-500 text-sm">Start typing to see preview...</p>
                                    </div>
                              </div>

                              <!-- Post Statistics -->
                              <div class="bg-white rounded-xl shadow-sm p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Statistics</h3>
                                    <div class="space-y-3">
                                    <div class="flex justify-between">
                                          <span class="text-sm text-gray-600">Characters:</span>
                                          <span id="char-count" class="text-sm font-medium">0</span>
                                    </div>
                                    <div class="flex justify-between">
                                          <span class="text-sm text-gray-600">Words:</span>
                                          <span id="word-count" class="text-sm font-medium">0</span>
                                    </div>
                                    <div class="flex justify-between">
                                          <span class="text-sm text-gray-600">Estimated reading:</span>
                                          <span id="read-time" class="text-sm font-medium">0 min</span>
                                    </div>
                                    </div>
                              </div>

                              <!-- Recent Posts -->
                              <div class="bg-white rounded-xl shadow-sm p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Posts</h3>
                                    <div id="recent-posts" class="space-y-3">
                                    <!-- Recent posts will be populated here -->
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </main>

      <!-- Preview Modal -->
      <div id="preview-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
                  <div class="flex justify-between items-center p-6 border-b border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-800">Post Preview</h3>
                        <button onclick="closePreview()" class="text-gray-400 hover:text-gray-600">
                              <i class="fas fa-times text-xl"></i>
                        </button>
                  </div>
                  <div id="preview-content" class="p-6 overflow-y-auto max-h-[70vh] preview-content">
                        <!-- Preview content will be inserted here -->
                  </div>
            </div>
      </div>


    <script>
        // Initialize marked.js
        marked.setOptions({
            breaks: true,
            gfm: true,
            headerIds: false,
            mangle: false
        });

        // Global state
        let posts = JSON.parse(localStorage.getItem('blogPosts') || '[]');

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            loadRecentPosts();
            updateLivePreview();
        });

        function setupEventListeners() {
            // Content input for live preview and stats
            document.getElementById('content').addEventListener('input', function() {
                updateLivePreview();
                updateStats();
            });

            // Title input for live preview
            document.getElementById('title').addEventListener('input', updateLivePreview);
            document.getElementById('subtitle').addEventListener('input', updateLivePreview);
            document.getElementById('category').addEventListener('change', updateLivePreview);

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
            
            updateLivePreview();
            updateStats();
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

        // Live preview update
        function updateLivePreview() {
            const title = document.getElementById('title').value || 'Untitled Post';
            const subtitle = document.getElementById('subtitle').value;
            const category = document.getElementById('category').value || 'uncategorized';
            const content = document.getElementById('content').value || 'Start writing your content...';

            const categoryColors = {
                'Travel Tips': 'bg-blue-600',
                'Destinations': 'bg-[#e92929]',
                'Culture': 'bg-purple-600',
                'Food & Dining': 'bg-orange-600',
                'Transportation': 'bg-green-600',
                'Accommodation': 'bg-teal-600'
            };

            const categoryColor = categoryColors[category] || 'bg-gray-600';
            const renderedContent = marked.parse(content);

            

            const previewHtml = `
                <div class="mb-4">
                    <span class="${categoryColor} text-white px-3 py-1 rounded-full text-xs font-medium">${category.replace('-', ' ').toUpperCase()}</span>
                </div>
                <h1 class="text-2xl font-bold text-gray-900 mb-2">${title}</h1>
                ${subtitle ? `<p class="text-gray-600 text-lg mb-4">${subtitle}</p>` : ''}
                <div class="text-sm text-gray-500 mb-4">
                    ${new Date().toLocaleDateString()} • ${document.getElementById('reading_time').value || 'Auto'} min read
                </div>
                <hr class="mb-4">
                <div>${renderedContent}</div>
            `;

            
            document.getElementById('live-preview').innerHTML = previewHtml;
        }

        // Update statistics
        function updateStats() {
            const content = document.getElementById('content').value;
            const charCount = content.length;
            const wordCount = content.trim() ? content.trim().split(/\s+/).length : 0;
            const readTime = Math.ceil(wordCount / 200); // Assuming 200 words per minute

            document.getElementById('char-count').textContent = charCount.toLocaleString();
            document.getElementById('word-count').textContent = wordCount.toLocaleString();
            document.getElementById('read-time').textContent = `${readTime} min`;

            // Auto-update reading time if not manually set
            if (!document.getElementById('reading_time').value) {
                document.getElementById('reading_time').value = readTime;
            }
        }

        

        // Publish post
        const publishPost =async() =>{
            const postData = getFormData(); 
            const response = await fetch(`/api/blogs/${document.getElementById("blog_id").value}`, {
                  method: 'POST',
                  headers: {
                        'Accept': 'application/json', 
                  },
                  body: postData,
            });

            const data = await response.json();
            
            const errorContainer= document.getElementById("js_alert")
            if(data.status == "error"){
                  const errorListBox = document.getElementById("error-container")
                  errorListBox.innerHTML = ""
                  const errors = Object.entries(data.errors).flatMap(([title, error]) => error);
                  const errorContent = errors.map((error) => {
                        return `<li>${error}</li>`  // ✅ HTMLタグも修正（</li>）
                  }).join("");

                  errorListBox.innerHTML = errorContent
                  errorContainer.classList.remove("hidden")
                  errorContainer.classList.add("flex")

            }else{
                  errorContainer.classList.add("hidden")
                  errorContainer.classList.remove("flex")
                  window.location.href="/blog/list"
            }
      }

        // Preview post
        function previewPost() {

    
            const title = document.getElementById('title').value || 'Untitled Post';
            const subtitle = document.getElementById('subtitle').value;
            const category = document.getElementById('category').value || 'uncategorized';
            const content = document.getElementById('content').value || 'No content available';

            const categoryColors = {
                'Travel Tips': 'bg-blue-600',
                'Destinations': 'bg-[#e92929]',
                'Culture': 'bg-purple-600',
                'Food & Dining': 'bg-orange-600',
                'Transportation': 'bg-green-600',
                'Accommodation': 'bg-teal-600'
            };

            const categoryColor = categoryColors[category] || 'bg-gray-600';
            const renderedContent = marked.parse(content);

            const previewHtml = `
                <article class="max-w-none">
                    <header class="mb-8">
                        <div class="mb-4">
                            <span class="${categoryColor} text-white px-4 py-2 rounded-full text-sm font-medium">${category.replace('-', ' ').toUpperCase()}</span>
                        </div>
                        <h1 class="text-4xl font-bold text-gray-900 mb-4">${title}</h1>
                        ${subtitle ? `<p class="text-gray-600 text-xl leading-relaxed mb-6">${subtitle}</p>` : ''}
                        <div class="flex items-center gap-4 text-gray-500 text-sm mb-6">
                            <span>${new Date().toLocaleDateString()}</span>
                            <span>•</span>
                            <span>${document.getElementById('reading_time').value || 'Auto'} min read</span>
                        </div>
                    </header>
                    <div class="prose prose-lg max-w-none">
                        ${renderedContent}
                    </div>
                </article>
            `;

            document.getElementById('preview-content').innerHTML = previewHtml;
            document.getElementById('preview-modal').classList.remove('hidden');
        }

        function closePreview() {
            document.getElementById('preview-modal').classList.add('hidden');
        }

        // Get form data
        function getFormData() {
            const formData = new FormData();
            // テキストデータを追加
            formData.append('title', document.getElementById('title').value);
            formData.append('subtitle', document.getElementById('subtitle').value);
            formData.append('category', document.getElementById('category').value);
            formData.append('meta_description', document.getElementById('meta_description').value);
            formData.append('content', document.getElementById('content').value);
            formData.append('tags', document.getElementById('tags').value);
            formData.append('reading_time', document.getElementById('reading_time').value);
            
            // 画像ファイルを追加
            const imageFile = document.getElementById('featured_image').files[0];
            if (imageFile) {
                formData.append('featured_image', imageFile);
            }

            return formData
        }

        // Clear form
        function clearForm() {
            document.querySelectorAll('input, textarea, select').forEach(field => {
                if (field.type !== 'file') {
                    field.value = '';
                }
            });
            removeImage();
            updateLivePreview();
            updateStats();
        }

        // Load recent posts
        function loadRecentPosts() {
            const recentPostsContainer = document.getElementById('recent-posts');
            const recentPosts = posts.slice(0, 5);

            if (recentPosts.length === 0) {
                recentPostsContainer.innerHTML = '<p class="text-gray-500 text-sm">No recent posts</p>';
                return;
            }

            recentPostsContainer.innerHTML = recentPosts.map(post => `
                <div class="border-b border-gray-100 pb-2 last:border-b-0">
                    <h4 class="text-sm font-medium text-gray-800 truncate">${post.title}</h4>
                    <p class="text-xs text-gray-500">${new Date(post.createdAt).toLocaleDateString()} • ${post.status}</p>
                </div>
            `).join('');
        }

      // Modal close on outside click
      document.getElementById('preview-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                  closePreview();
            }
      });

        // Initialize stats on page load
        updateStats();
    </script>
</body>
</html>