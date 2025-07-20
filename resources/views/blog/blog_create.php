<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Blog Post - ShogunTours</title>
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

        .editor-toolbar {
            border-bottom: 1px solid #e5e7eb;
            padding: 12px 16px;
            background: #f9fafb;
            border-radius: 8px 8px 0 0;
        }

        .editor-content {
            min-height: 300px;
            padding: 16px;
            border: 1px solid #d1d5db;
            border-top: none;
            border-radius: 0 0 8px 8px;
            outline: none;
            font-family: inherit;
            line-height: 1.6;
        }

        .editor-content:focus {
            border-color: #e92929;
            box-shadow: 0 0 0 2px rgba(233, 41, 41, 0.2);
        }

        .tag-input {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            align-items: center;
            min-height: 48px;
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            background: white;
        }

        .tag-item {
            display: flex;
            align-items: center;
            gap: 4px;
            background: #f3e7e7;
            color: #1b0e0e;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 14px;
        }

        .tag-item button {
            background: none;
            border: none;
            color: #e92929;
            cursor: pointer;
            padding: 0;
            width: 16px;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tag-input input {
            border: none;
            outline: none;
            flex: 1;
            min-width: 120px;
            font-size: 14px;
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
                    <a href="#" class="text-gray-600 hover:text-[#e92929] transition-colors text-sm font-medium">Tours</a>
                    <a href="#" class="text-[#e92929] text-sm font-medium">Blog</a>
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
        <form class="container mx-auto px-6 max-w-[1100px]" action="#" method="POST" enctype="multipart/form-data">
            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center gap-2 text-sm text-gray-600 mb-4">
                    <a href="#" class="hover:text-[#e92929] transition-colors">Blog</a>
                    <i class="fas fa-chevron-right text-xs"></i>
                    <span class="text-gray-800 font-medium">Create New Post</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">Create New Blog Post</h1>
                <p class="text-gray-600 mt-2">Share your knowledge and experiences with our travel community</p>
            </div>

            <!-- Form Sections -->
            <div class="space-y-6">
                
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
                            <label class="block text-sm font-medium text-gray-700 mb-2">Article Title *</label>
                            <input type="text" name="title" placeholder="e.g., The Ultimate Guide to Climbing Mount Fuji"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                            <input type="text" name="subtitle" 
                                placeholder="e.g., Everything you need to know about climbing Japan's most iconic mountain"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        </div>

                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                                <select name="category" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                    <option value="">Select Category</option>
                                    <option value="destinations">Destinations</option>
                                    <option value="culture">Culture</option>
                                    <option value="travel-tips">Travel Tips</option>
                                    <option value="food">Food & Dining</option>
                                    <option value="adventure">Adventure</option>
                                    <option value="festivals">Festivals & Events</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Reading Time (minutes)</label>
                                <input type="number" name="reading_time" placeholder="e.g., 8" min="1" max="60"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">SEO Description</label>
                            <textarea rows="3" name="seo_description"
                                placeholder="Brief description for search engines (160 characters max)"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none"></textarea>
                            <p class="text-xs text-gray-500 mt-1">0/160 characters</p>
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
                    
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-[#e92929] transition-colors cursor-pointer h-[350px] flex items-center justify-center" id="featured-image-upload">
                        <div class="text-center">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                            <p class="text-gray-600 font-medium mb-2">Upload featured image</p>
                            <p class="text-sm text-gray-500">This will be displayed as the main article image</p>
                            <p class="text-sm text-gray-500 mb-4">Recommended size: 1200x630px</p>
                            <label for="featured_image" class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors font-medium text-sm cursor-pointer">
                                Select Featured Image
                            </label>
                            <input type="file" name="featured_image" id="featured_image" class="hidden" accept="image/*">
                        </div>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                            <i class="fab fa-markdown text-[#e92929]"></i>
                        </div>
                        Article Content (Markdown)
                    </h2>

                    <!-- Tabs for Editor/Preview -->
                    <div class="flex border-b border-gray-200 mb-4">
                        <button type="button" id="editor-tab" class="px-4 py-2 text-sm font-medium text-[#e92929] border-b-2 border-[#e92929]" onclick="showTab('editor')">
                            <i class="fas fa-edit mr-1"></i>Editor
                        </button>
                        <button type="button" id="preview-tab" class="px-4 py-2 text-sm font-medium text-gray-500 hover:text-gray-700" onclick="showTab('preview')">
                            <i class="fas fa-eye mr-1"></i>Preview
                        </button>
                    </div>

                    <!-- Markdown Quick Reference -->
                    <div class="bg-gray-50 rounded-lg p-4 mb-4">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-question-circle mr-1"></i>Markdown Quick Reference
                        </h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-xs text-gray-600">
                            <div><code class="bg-white px-1 rounded"># Heading 1</code></div>
                            <div><code class="bg-white px-1 rounded">## Heading 2</code></div>
                            <div><code class="bg-white px-1 rounded">**Bold text**</code></div>
                            <div><code class="bg-white px-1 rounded">*Italic text*</code></div>
                            <div><code class="bg-white px-1 rounded">[Link](url)</code></div>
                            <div><code class="bg-white px-1 rounded">![Image](url)</code></div>
                            <div><code class="bg-white px-1 rounded">- List item</code></div>
                            <div><code class="bg-white px-1 rounded">`Inline code`</code></div>
                        </div>
                    </div>

                    <!-- Editor Area -->
                    <div id="editor-area">
                        <textarea name="content" id="markdown-editor" 
                                  placeholder="# Article Title

Write your article content here using Markdown syntax...

## Section 1

Content for section 1 goes here. You can use **bold text**, *italic text*, and [links](https://example.com).

### Subsection

- List item 1
- List item 2
- List item 3

## Section 2

More content here. You can add images like this:

![Alt text](https://example.com/image.jpg)

### Code Example

```javascript
console.log('Hello, world!');
```

> This is a blockquote for highlighting important information.

---

## Conclusion

Final thoughts and wrap-up."
                                  class="w-full h-96 px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none font-mono text-sm leading-relaxed"></textarea>
                    </div>

                    <!-- Preview Area -->
                    <div id="preview-area" class="hidden">
                        <div id="markdown-preview" class="prose max-w-none p-4 border border-gray-300 rounded-lg min-h-96 bg-white">
                            <p class="text-gray-500 italic">Preview will appear here...</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between mt-4">
                        <p class="text-xs text-gray-500">
                            <i class="fab fa-markdown mr-1"></i>
                            Write using Markdown syntax. Use the Preview tab to see formatted output.
                        </p>
                        <div class="flex gap-2">
                            <button type="button" onclick="insertMarkdown('bold')" class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded text-xs font-medium" title="Bold">
                                <i class="fas fa-bold"></i>
                            </button>
                            <button type="button" onclick="insertMarkdown('italic')" class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded text-xs font-medium" title="Italic">
                                <i class="fas fa-italic"></i>
                            </button>
                            <button type="button" onclick="insertMarkdown('link')" class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded text-xs font-medium" title="Link">
                                <i class="fas fa-link"></i>
                            </button>
                            <button type="button" onclick="insertMarkdown('image')" class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded text-xs font-medium" title="Image">
                                <i class="fas fa-image"></i>
                            </button>
                            <button type="button" onclick="insertMarkdown('list')" class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded text-xs font-medium" title="List">
                                <i class="fas fa-list"></i>
                            </button>
                            <button type="button" onclick="insertMarkdown('code')" class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded text-xs font-medium" title="Code">
                                <i class="fas fa-code"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Table of Contents -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-list text-[#e92929]"></i>
                        </div>
                        Table of Contents
                    </h2>
                    
                    <p class="text-sm text-gray-600 mb-4">Add sections to help readers navigate your article</p>
                    
                    <div id="toc-wrapper" class="space-y-3">
                        <div class="toc-item">
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex items-start gap-4">
                                    <div class="flex-1">
                                        <input type="text" name="toc[0][title]" 
                                            placeholder="e.g., When to Climb Mount Fuji"
                                            class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                                        <input type="text" name="toc[0][anchor]" 
                                            placeholder="e.g., when-to-climb (URL anchor)"
                                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                                    </div>
                                    <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-toc-button">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="add-toc-button mt-4 w-full py-3 border-2 border-dashed border-gray-300 rounded-lg text-gray-600 hover:border-[#e92929] hover:text-[#e92929] transition-colors flex items-center justify-center gap-2">
                        <i class="fas fa-plus"></i>
                        <span class="font-medium">Add Section</span>
                    </button>
                </div>

                <!-- Tags -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-tags text-[#e92929]"></i>
                        </div>
                        Tags
                    </h2>
                    
                    <div class="tag-input" id="tag-input">
                        <input type="text" placeholder="Type tag and press Enter" id="tag-input-field">
                    </div>
                    <input type="hidden" name="tags" id="tags-hidden">
                    
                    <p class="text-xs text-gray-500 mt-2">Add relevant tags to help readers find your content</p>
                </div>

                <!-- Author Information -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-user-edit text-[#e92929]"></i>
                        </div>
                        Author Information
                    </h2>

                    <div class="space-y-5">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Author Name *</label>
                                <input type="text" name="author_name" placeholder="e.g., Yuki Tanaka"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Author Title</label>
                                <input type="text" name="author_title" placeholder="e.g., Mountain Guide & Travel Writer"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Author Bio</label>
                            <textarea rows="3" name="author_bio"
                                placeholder="Brief biography of the author..."
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all resize-none"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Author Photo</label>
                            <input type="file" name="author_photo" accept="image/*"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                        </div>
                    </div>
                </div>

                <!-- Publishing Options -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <div class="w-8 h-8 bg-[#e92929]/10 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-cog text-[#e92929]"></i>
                        </div>
                        Publishing Options
                    </h2>

                    <div class="space-y-5">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                                <select name="status" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                    <option value="scheduled">Scheduled</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Publish Date</label>
                                <input type="datetime-local" name="publish_date"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all">
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <input type="checkbox" name="featured" id="featured" value="1"
                                class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                            <label for="featured" class="text-sm text-gray-700">Feature this article (display prominently on homepage)</label>
                        </div>

                        <div class="flex items-center gap-3">
                            <input type="checkbox" name="allow_comments" id="allow_comments" value="1" checked
                                class="w-4 h-4 text-[#e92929] rounded focus:ring-[#e92929] focus:ring-2">
                            <label for="allow_comments" class="text-sm text-gray-700">Allow comments on this article</label>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-200">
                <button type="button" class="px-6 py-3 text-gray-600 hover:text-gray-800 transition-colors">
                    <i class="fas fa-save mr-2"></i>
                    Save as Draft
                </button>
                
                <div class="flex gap-3">
                    <button type="button" class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                        Preview
                    </button>
                    <button type="submit" class="px-8 py-3 bg-[#e92929] text-white rounded-lg hover:bg-[#d61f1f] transition-colors font-medium">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Publish Article
                    </button>
                </div>
            </div>

            <!-- Fixed Publish Button (Mobile) -->
            <button type="submit" title="Publish Article"
                class="fixed bottom-6 right-6 w-14 h-14 bg-gradient-to-r from-[#e92929] to-[#ff6b6b] text-white rounded-full hover:shadow-lg transition-all font-medium z-50 flex items-center justify-center md:hidden">
                <i class="fas fa-paper-plane text-xl"></i>
            </button>
        </form>
    </main>

    <script>
        // Character counter for SEO description
        document.querySelector('textarea[name="seo_description"]').addEventListener('input', function() {
            const count = this.value.length;
            const counter = this.parentNode.querySelector('.text-xs');
            counter.textContent = `${count}/160 characters`;
            
            if (count > 160) {
                counter.classList.add('text-red-500');
                counter.classList.remove('text-gray-500');
            } else {
                counter.classList.remove('text-red-500');
                counter.classList.add('text-gray-500');
            }
        });

        // Markdown Editor Functions
        let isPreviewMode = false;

        function showTab(tab) {
            const editorTab = document.getElementById('editor-tab');
            const previewTab = document.getElementById('preview-tab');
            const editorArea = document.getElementById('editor-area');
            const previewArea = document.getElementById('preview-area');

            if (tab === 'editor') {
                isPreviewMode = false;
                editorTab.classList.add('text-[#e92929]', 'border-b-2', 'border-[#e92929]');
                editorTab.classList.remove('text-gray-500');
                previewTab.classList.remove('text-[#e92929]', 'border-b-2', 'border-[#e92929]');
                previewTab.classList.add('text-gray-500');
                editorArea.classList.remove('hidden');
                previewArea.classList.add('hidden');
            } else {
                isPreviewMode = true;
                previewTab.classList.add('text-[#e92929]', 'border-b-2', 'border-[#e92929]');
                previewTab.classList.remove('text-gray-500');
                editorTab.classList.remove('text-[#e92929]', 'border-b-2', 'border-[#e92929]');
                editorTab.classList.add('text-gray-500');
                editorArea.classList.add('hidden');
                previewArea.classList.remove('hidden');
                updatePreview();
            }
        }

        function updatePreview() {
            const markdown = document.getElementById('markdown-editor').value;
            const preview = document.getElementById('markdown-preview');
            
            // Simple markdown to HTML conversion (you'd want to use a proper library like marked.js in production)
            let html = markdown
                .replace(/^### (.*$)/gim, '<h3>$1</h3>')
                .replace(/^## (.*$)/gim, '<h2>$1</h2>')
                .replace(/^# (.*$)/gim, '<h1>$1</h1>')
                .replace(/\*\*(.*)\*\*/gim, '<strong>$1</strong>')
                .replace(/\*(.*)\*/gim, '<em>$1</em>')
                .replace(/\[([^\]]*)\]\(([^\)]*)\)/gim, '<a href="$2" class="text-[#e92929] hover:underline">$1</a>')
                .replace(/!\[([^\]]*)\]\(([^\)]*)\)/gim, '<img src="$2" alt="$1" class="max-w-full h-auto rounded-lg my-4">')
                .replace(/`([^`]*)`/gim, '<code class="bg-gray-100 px-1 py-0.5 rounded text-sm">$1</code>')
                .replace(/^> (.*$)/gim, '<blockquote class="border-l-4 border-[#e92929] pl-4 italic text-gray-600 my-4">$1</blockquote>')
                .replace(/^- (.*$)/gim, '<li>$1</li>')
                .replace(/(<li>.*<\/li>)/s, '<ul class="list-disc pl-5 my-4">$1</ul>')
                .replace(/^\d+\. (.*$)/gim, '<li>$1</li>')
                .replace(/^---$/gim, '<hr class="my-6 border-gray-300">')
                .replace(/\n\n/gim, '</p><p class="mb-4">')
                .replace(/\n/gim, '<br>');

            // Wrap in paragraphs
            if (html && !html.startsWith('<h') && !html.startsWith('<ul') && !html.startsWith('<blockquote')) {
                html = '<p class="mb-4">' + html + '</p>';
            }

            preview.innerHTML = html || '<p class="text-gray-500 italic">Preview will appear here...</p>';
        }

        function insertMarkdown(type) {
            const editor = document.getElementById('markdown-editor');
            const start = editor.selectionStart;
            const end = editor.selectionEnd;
            const selectedText = editor.value.substring(start, end);
            let replacement = '';

            switch(type) {
                case 'bold':
                    replacement = `**${selectedText || 'bold text'}**`;
                    break;
                case 'italic':
                    replacement = `*${selectedText || 'italic text'}*`;
                    break;
                case 'link':
                    replacement = `[${selectedText || 'link text'}](https://example.com)`;
                    break;
                case 'image':
                    replacement = `![${selectedText || 'alt text'}](https://example.com/image.jpg)`;
                    break;
                case 'list':
                    replacement = selectedText ? selectedText.split('\n').map(line => `- ${line}`).join('\n') : '- List item 1\n- List item 2\n- List item 3';
                    break;
                case 'code':
                    if (selectedText.includes('\n')) {
                        replacement = `\`\`\`\n${selectedText || 'code here'}\n\`\`\``;
                    } else {
                        replacement = `\`${selectedText || 'code'}\``;
                    }
                    break;
            }

            editor.value = editor.value.substring(0, start) + replacement + editor.value.substring(end);
            
            // Set cursor position
            const newPos = start + replacement.length;
            editor.setSelectionRange(newPos, newPos);
            editor.focus();
        }

        // Auto-save functionality
        let autoSaveTimeout;
        document.getElementById('markdown-editor').addEventListener('input', function() {
            clearTimeout(autoSaveTimeout);
            autoSaveTimeout = setTimeout(function() {
                // Auto-save logic here
                console.log('Auto-saving draft...');
            }, 2000);
        });

        // Tab key handling for better editing experience
        document.getElementById('markdown-editor').addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                e.preventDefault();
                const start = this.selectionStart;
                const end = this.selectionEnd;
                
                this.value = this.value.substring(0, start) + '  ' + this.value.substring(end);
                this.selectionStart = this.selectionEnd = start + 2;
            }
        });

        // Featured Image Upload
        document.getElementById('featured_image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const uploadArea = document.getElementById('featured-image-upload');
                    uploadArea.innerHTML = `
                        <img src="${e.target.result}" alt="Featured Image" class="w-full h-full object-cover rounded-lg">
                        <div class="absolute inset-0 bg-black/50 opacity-0 hover:opacity-100 transition-opacity rounded-lg flex items-center justify-center">
                            <label for="featured_image" class="text-white font-medium cursor-pointer">
                                <i class="fas fa-edit mr-2"></i>Change Image
                            </label>
                        </div>
                    `;
                    uploadArea.classList.add('relative', 'overflow-hidden');
                    uploadArea.classList.remove('flex', 'items-center', 'justify-center');
                };
                reader.readAsDataURL(file);
            }
        });

        // Table of Contents Management
        let tocCount = 1;
        
        document.addEventListener('click', function(e) {
            if (e.target.closest('.add-toc-button')) {
                const wrapper = document.getElementById('toc-wrapper');
                const newItem = document.createElement('div');
                newItem.className = 'toc-item';
                newItem.innerHTML = `
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-start gap-4">
                            <div class="flex-1">
                                <input type="text" name="toc[${tocCount}][title]" 
                                    placeholder="e.g., Essential Gear and Equipment"
                                    class="w-full px-3 py-2 mb-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm font-medium">
                                <input type="text" name="toc[${tocCount}][anchor]" 
                                    placeholder="e.g., essential-gear (URL anchor)"
                                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:border-[#e92929] focus:outline-none focus:ring-2 focus:ring-[#e92929]/20 transition-all text-sm">
                            </div>
                            <button type="button" class="p-2 text-gray-400 hover:text-red-500 transition-colors remove-toc-button">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                `;
                wrapper.appendChild(newItem);
                tocCount++;
            }
            
            if (e.target.closest('.remove-toc-button')) {
                e.target.closest('.toc-item').remove();
            }
        });

        // Tags Management
        const tagInput = document.getElementById('tag-input-field');
        const tagContainer = document.getElementById('tag-input');
        const tagsHidden = document.getElementById('tags-hidden');
        let tags = [];

        tagInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const tagText = this.value.trim();
                if (tagText && !tags.includes(tagText)) {
                    addTag(tagText);
                    this.value = '';
                }
            }
        });

        function addTag(text) {
            tags.push(text);
            updateTagsDisplay();
            updateTagsInput();
        }

        function removeTag(text) {
            tags = tags.filter(tag => tag !== text);
            updateTagsDisplay();
            updateTagsInput();
        }

        function updateTagsDisplay() {
            const existingTags = tagContainer.querySelectorAll('.tag-item');
            existingTags.forEach(tag => tag.remove());

            tags.forEach(tag => {
                const tagElement = document.createElement('div');
                tagElement.className = 'tag-item';
                tagElement.innerHTML = `
                    <span>${tag}</span>
                    <button type="button" onclick="removeTag('${tag}')">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                tagContainer.insertBefore(tagElement, tagInput);
            });
        }

        function updateTagsInput() {
            tagsHidden.value = tags.join(',');
        }

        // Auto-generate anchor from title
        document.querySelectorAll('input[name*="[title]"]').forEach(input => {
            input.addEventListener('input', function() {
                const anchorInput = this.parentNode.querySelector('input[name*="[anchor]"]');
                if (anchorInput && !anchorInput.value) {
                    const anchor = this.value.toLowerCase()
                        .replace(/[^\w\s-]/g, '')
                        .replace(/\s+/g, '-')
                        .trim();
                    anchorInput.value = anchor;
                }
            });
        });

        // Form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const requiredFields = ['title', 'category', 'author_name'];
            let hasErrors = false;

            requiredFields.forEach(field => {
                const input = document.querySelector(`[name="${field}"]`);
                if (!input.value.trim()) {
                    input.classList.add('border-red-500');
                    hasErrors = true;
                } else {
                    input.classList.remove('border-red-500');
                }
            });

            const content = document.getElementById('article-content').textContent.trim();
            if (!content) {
                document.getElementById('article-content').style.borderColor = '#ef4444';
                hasErrors = true;
            } else {
                document.getElementById('article-content').style.borderColor = '#d1d5db';
            }

            if (hasErrors) {
                e.preventDefault();
                alert('Please fill in all required fields and add article content.');
            }
        });
    </script>
</body>

</html>