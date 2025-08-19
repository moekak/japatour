/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/pages/blog_create.js ***!
  \*******************************************/
__webpack_require__.r(__webpack_exports__);
// Initialize marked.js
marked.setOptions({
  breaks: true,
  gfm: true,
  headerIds: false,
  mangle: false
});

// Global state
var posts = JSON.parse(localStorage.getItem('blogPosts') || '[]');

// Initialize the application
document.addEventListener('DOMContentLoaded', function () {
  setupEventListeners();
  loadRecentPosts();
  updateLivePreview();
});
function setupEventListeners() {
  // Content input for live preview and stats
  document.getElementById('content').addEventListener('input', function () {
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
  var textarea = document.getElementById('content');
  var start = textarea.selectionStart;
  var end = textarea.selectionEnd;
  var selectedText = textarea.value.substring(start, end);
  var replacement = before + selectedText + after;
  textarea.value = textarea.value.substring(0, start) + replacement + textarea.value.substring(end);
  var newPosition = start + before.length + selectedText.length;
  textarea.focus();
  textarea.setSelectionRange(newPosition, newPosition);
  updateLivePreview();
  updateStats();
}
function insertLink() {
  var url = prompt('Enter the URL:');
  var text = prompt('Enter the link text:') || 'Link';
  if (url) {
    insertMarkdown("[".concat(text, "](").concat(url, ")"), '');
  }
}
function insertImage() {
  var url = prompt('Enter the image URL:');
  var alt = prompt('Enter the alt text:') || 'Image';
  if (url) {
    insertMarkdown("![".concat(alt, "](").concat(url, ")"), '');
  }
}

// Image upload handling
function handleImageUpload(event) {
  var file = event.target.files[0];
  if (!file) return;
  var reader = new FileReader();
  reader.onload = function (e) {
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
  var title = document.getElementById('title').value || 'Untitled Post';
  var subtitle = document.getElementById('subtitle').value;
  var category = document.getElementById('category').value || 'uncategorized';
  var content = document.getElementById('content').value || 'Start writing your content...';
  var categoryColors = {
    'travel-tips': 'bg-blue-600',
    'destinations': 'bg-[#e92929]',
    'culture': 'bg-purple-600',
    'food': 'bg-orange-600',
    'transportation': 'bg-green-600',
    'accommodation': 'bg-teal-600'
  };
  var categoryColor = categoryColors[category] || 'bg-gray-600';
  var renderedContent = marked.parse(content);
  var previewHtml = "\n      <div class=\"mb-4\">\n            <span class=\"".concat(categoryColor, " text-white px-3 py-1 rounded-full text-xs font-medium\">").concat(category.replace('-', ' ').toUpperCase(), "</span>\n      </div>\n      <h1 class=\"text-2xl font-bold text-gray-900 mb-2\">").concat(title, "</h1>\n      ").concat(subtitle ? "<p class=\"text-gray-600 text-lg mb-4\">".concat(subtitle, "</p>") : '', "\n      <div class=\"text-sm text-gray-500 mb-4\">\n            ").concat(new Date().toLocaleDateString(), " \u2022 ").concat(document.getElementById('reading_time').value || 'Auto', " min read\n      </div>\n      <hr class=\"mb-4\">\n      <div>").concat(renderedContent, "</div>\n");
  document.getElementById('live-preview').innerHTML = previewHtml;
}

// Update statistics
function updateStats() {
  var content = document.getElementById('content').value;
  var charCount = content.length;
  var wordCount = content.trim() ? content.trim().split(/\s+/).length : 0;
  var readTime = Math.ceil(wordCount / 200); // Assuming 200 words per minute

  document.getElementById('char-count').textContent = charCount.toLocaleString();
  document.getElementById('word-count').textContent = wordCount.toLocaleString();
  document.getElementById('read-time').textContent = "".concat(readTime, " min");

  // Auto-update reading time if not manually set
  if (!document.getElementById('reading_time').value) {
    document.getElementById('reading_time').value = readTime;
  }
}

// Save post
function savePost() {
  var postData = getFormData();
  if (!postData.title.trim()) {
    alert('Please enter a title for your post');
    return;
  }
  postData.id = Date.now().toString();
  postData.status = 'draft';
  postData.createdAt = new Date().toISOString();
  postData.updatedAt = new Date().toISOString();
  posts.unshift(postData);
  localStorage.setItem('blogPosts', JSON.stringify(posts));
  alert('Post saved as draft successfully!');
  loadRecentPosts();
}

// Publish post
function publishPost() {
  var postData = getFormData();
  if (!postData.title.trim() || !postData.content.trim()) {
    alert('Please enter both title and content before publishing');
    return;
  }
  postData.id = Date.now().toString();
  postData.status = 'published';
  postData.createdAt = new Date().toISOString();
  postData.updatedAt = new Date().toISOString();
  posts.unshift(postData);
  localStorage.setItem('blogPosts', JSON.stringify(posts));
  alert('Post published successfully!');
  clearForm();
  loadRecentPosts();
}

// Preview post
function previewPost() {
  var title = document.getElementById('title').value || 'Untitled Post';
  var subtitle = document.getElementById('subtitle').value;
  var category = document.getElementById('category').value || 'uncategorized';
  var content = document.getElementById('content').value || 'No content available';
  var categoryColors = {
    'travel-tips': 'bg-blue-600',
    'destinations': 'bg-[#e92929]',
    'culture': 'bg-purple-600',
    'food': 'bg-orange-600',
    'transportation': 'bg-green-600',
    'accommodation': 'bg-teal-600'
  };
  var categoryColor = categoryColors[category] || 'bg-gray-600';
  var renderedContent = marked.parse(content);
  var previewHtml = "\n      <article class=\"max-w-none\">\n            <header class=\"mb-8\">\n            <div class=\"mb-4\">\n                  <span class=\"".concat(categoryColor, " text-white px-4 py-2 rounded-full text-sm font-medium\">").concat(category.replace('-', ' ').toUpperCase(), "</span>\n            </div>\n            <h1 class=\"text-4xl font-bold text-gray-900 mb-4\">").concat(title, "</h1>\n            ").concat(subtitle ? "<p class=\"text-gray-600 text-xl leading-relaxed mb-6\">".concat(subtitle, "</p>") : '', "\n            <div class=\"flex items-center gap-4 text-gray-500 text-sm mb-6\">\n                  <span>").concat(new Date().toLocaleDateString(), "</span>\n                  <span>\u2022</span>\n                  <span>").concat(document.getElementById('reading_time').value || 'Auto', " min read</span>\n            </div>\n            </header>\n            <div class=\"prose prose-lg max-w-none\">\n            ").concat(renderedContent, "\n            </div>\n      </article>\n");
  document.getElementById('preview-content').innerHTML = previewHtml;
  document.getElementById('preview-modal').classList.remove('hidden');
}
function closePreview() {
  document.getElementById('preview-modal').classList.add('hidden');
}

// Get form data
function getFormData() {
  return {
    title: document.getElementById('title').value,
    subtitle: document.getElementById('subtitle').value,
    category: document.getElementById('category').value,
    status: document.getElementById('status').value,
    meta_description: document.getElementById('meta_description').value,
    content: document.getElementById('content').value,
    tags: document.getElementById('tags').value,
    reading_time: document.getElementById('reading_time').value
  };
}

// Clear form
function clearForm() {
  document.querySelectorAll('input, textarea, select').forEach(function (field) {
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
  var recentPostsContainer = document.getElementById('recent-posts');
  var recentPosts = posts.slice(0, 5);
  if (recentPosts.length === 0) {
    recentPostsContainer.innerHTML = '<p class="text-gray-500 text-sm">No recent posts</p>';
    return;
  }
  recentPostsContainer.innerHTML = recentPosts.map(function (post) {
    return "\n      <div class=\"border-b border-gray-100 pb-2 last:border-b-0\">\n            <h4 class=\"text-sm font-medium text-gray-800 truncate\">".concat(post.title, "</h4>\n            <p class=\"text-xs text-gray-500\">").concat(new Date(post.createdAt).toLocaleDateString(), " \u2022 ").concat(post.status, "</p>\n      </div>\n");
  }).join('');
}

// Modal close on outside click
document.getElementById('preview-modal').addEventListener('click', function (e) {
  if (e.target === this) {
    closePreview();
  }
});

// Initialize stats on page load
updateStats();
/******/ })()
;