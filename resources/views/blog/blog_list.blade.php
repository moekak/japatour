<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>ShogunTours - Blog Admin Dashboard</title>
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
      <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
            href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
      <link rel="shortcut icon" href="img/logo3.svg">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
      <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root overflow-x-hidden"
            style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
                  <!-- Header -->
                  <header
                        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f3e7e7] px-10 py-3 sticky top-0 bg-[#fcf8f8] z-50">
                        <div class="flex items-center gap-4 text-[#1b0e0e]">
                              <div class="size-4">
                                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z"
                                                fill="currentColor"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M39.998 35.764C39.9944 35.7463 39.9875 35.7155 39.9748 35.6706C39.9436 35.5601 39.8949 35.4259 39.8346 35.2825C39.8168 35.2403 39.7989 35.1993 39.7813 35.1602C38.5103 34.2887 35.9788 33.0607 33.7095 32.5189C30.9875 31.8691 27.6413 31.4783 24 31.4783C20.3587 31.4783 17.0125 31.8691 14.2905 32.5189C12.0012 33.0654 9.44505 34.3104 8.18538 35.1832C8.17384 35.2075 8.16216 35.233 8.15052 35.2592C8.09919 35.3751 8.05721 35.4886 8.02977 35.589C8.00356 35.6848 8.00039 35.7333 8.00004 35.7388C8.00004 35.739 8 35.7393 8.00004 35.7388C8.00004 35.7641 8.0104 36.0767 8.68485 36.6314C9.34546 37.1746 10.4222 37.7531 11.9291 38.2772C14.9242 39.319 19.1919 40 24 40C28.8081 40 33.0758 39.319 36.0709 38.2772C37.5778 37.7531 38.6545 37.1746 39.3151 36.6314C39.9006 36.1499 39.9857 35.8511 39.998 35.764ZM4.95178 32.7688L21.4543 6.30267C22.6288 4.4191 25.3712 4.41909 26.5457 6.30267L43.0534 32.777C43.0709 32.8052 43.0878 32.8338 43.104 32.8629L41.3563 33.8352C43.104 32.8629 43.1038 32.8626 43.104 32.8629L43.1051 32.865L43.1065 32.8675L43.1101 32.8739L43.1199 32.8918C43.1276 32.906 43.1377 32.9246 43.1497 32.9473C43.1738 32.9925 43.2062 33.0545 43.244 33.1299C43.319 33.2792 43.4196 33.489 43.5217 33.7317C43.6901 34.1321 44 34.9311 44 35.7391C44 37.4427 43.003 38.7775 41.8558 39.7209C40.6947 40.6757 39.1354 41.4464 37.385 42.0552C33.8654 43.2794 29.133 44 24 44C18.867 44 14.1346 43.2794 10.615 42.0552C8.86463 41.4464 7.30529 40.6757 6.14419 39.7209C4.99695 38.7775 3.99999 37.4427 3.99999 35.7391C3.99999 34.8725 4.29264 34.0922 4.49321 33.6393C4.60375 33.3898 4.71348 33.1804 4.79687 33.0311C4.83898 32.9556 4.87547 32.8935 4.9035 32.8471C4.91754 32.8238 4.92954 32.8043 4.93916 32.7889L4.94662 32.777L4.95178 32.7688ZM35.9868 29.004L24 9.77997L12.0131 29.004C12.4661 28.8609 12.9179 28.7342 13.3617 28.6282C16.4281 27.8961 20.0901 27.4783 24 27.4783C27.9099 27.4783 31.5719 27.8961 34.6383 28.6282C35.082 28.7342 35.5339 28.8609 35.9868 29.004Z"
                                                fill="currentColor"></path>
                                    </svg>
                              </div>
                              <h2 class="text-[#1b0e0e] text-lg font-bold leading-tight tracking-[-0.015em]">ShogunTours Admin</h2>
                        </div>
                        <div class="flex items-center gap-4">
                              <div class="flex items-center gap-2 text-[#994d4d] text-sm">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=32&h=32&fit=crop&crop=face"
                                          alt="Admin" class="w-8 h-8 rounded-full">
                                    <span>Administrator</span>
                              </div>
                              <button onclick="window.location.href='blog.html'"
                                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-gray-500 text-white text-sm font-medium hover:bg-gray-600 transition-colors">
                                    <span class="truncate">View Site</span>
                              </button>
                        </div>
                  </header>

                  <!-- Page Title and Actions -->
                  <div class="flex justify-center pt-8">
                        <div class="layout-content-container flex flex-col max-w-[1400px] flex-1">
                              <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 px-4 mb-6">
                                    <div>
                                          <h1 class="text-[#1b0e0e] text-3xl font-bold leading-tight tracking-[-0.033em]">
                                                Blog Management
                                          </h1>
                                          <p class="text-[#994d4d] text-base mt-2">Create, edit, and manage your blog articles</p>
                                    </div>
                                    <a href="{{route("blog.create")}}"
                                          class="flex items-center gap-2 px-6 py-3 bg-[#e92929] text-white rounded-lg font-medium hover:bg-[#d61f1f] transition-colors">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256">
                                                <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path>
                                          </svg>
                                          Create New Article
                                    </a>
                              </div>
                        </div>
                  </div>
                  <!-- Articles Table -->
                  <section class="flex justify-center pb-12">
                        <div class="layout-content-container flex flex-col max-w-[1400px] flex-1">
                              <div class="px-4">
                                    <div class="bg-white rounded-lg shadow-sm border border-[#f3e7e7] overflow-hidden">
                                          <div class="overflow-x-auto">
                                                <table class="w-full">
                                                      <thead class="bg-[#f3e7e7]">
                                                            <tr>
                                                                  <th class="px-6 py-4 text-left text-[#1b0e0e] font-semibold">Article</th>
                                                                  <th class="px-6 py-4 text-left text-[#1b0e0e] font-semibold">Category</th>
                                                                  <th class="px-6 py-4 text-left text-[#1b0e0e] font-semibold">Views</th>
                                                                  <th class="px-6 py-4 text-left text-[#1b0e0e] font-semibold">Last Modified</th>
                                                                  <th class="px-6 py-4 text-left text-[#1b0e0e] font-semibold">Actions</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody id="articlesTableBody">
                                                            @foreach ($blogs as $blog)
                                                                  <tr>
                                                                        <td class="px-6 py-4">
                                                                              <div class="flex items-center gap-3">
                                                                                    <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="${article.title}" class="w-12 h-12 object-cover rounded-lg">
                                                                                    <div>
                                                                                          <div class="font-semibold text-[#1b0e0e] line-clamp-1">{{$blog->title}}</div>
                                                                                          <div class="text-sm text-[#994d4d] line-clamp-1">{{$blog->subtitle}}</div>
                                                                                    </div>
                                                                              </div>
                                                                        </td>
                                                                        <td class="px-6 py-4">
                                                                              <span class="px-3 py-1 bg-[#f3e7e7] text-[#1b0e0e] rounded-full text-sm">
                                                                                    {{$blog->category}}
                                                                              </span>
                                                                        </td>
                                                                        <td class="px-6 py-4 text-[#994d4d]">9</td>
                                                                        <td class="px-6 py-4 text-[#994d4d]">{{ \Carbon\Carbon::parse($blog->updated_at)->format('F d, Y') }}</td>
                                                                        <td class="px-6 py-4">
                                                                              <div class="flex items-center gap-2">
                                                                                    <a href="{{ route('blog.show', $blog->id)}}" 
                                                                                          class="p-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors"
                                                                                          title="Preview">
                                                                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                                                                <path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path>
                                                                                          </svg>
                                                                                    </a>
                                                                                    <a href="{{ route('blog.edit', $blog->id)}}"
                                                                                          class="p-2 text-gray-600 hover:text-green-600 hover:bg-green-50 rounded-lg transition-colors"
                                                                                          title="Edit">
                                                                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                                                                <path d="M227.31,73.37,182.63,28.69a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.69ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Z"></path>
                                                                                          </svg>
                                                                                    </a>
                                                                                    <button onclick="deleteArticle({{$blog->id}})" 
                                                                                          class="p-2 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors"
                                                                                          title="Delete">
                                                                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                                                                                                <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path>
                                                                                          </svg>
                                                                                    </button>
                                                                              </div>
                                                                        </td>
                                                                  </tr>
                                                            @endforeach
      
                                                            
                                                      </tbody>
                                                </table>
                                          </div>
                                    </div>

                                    <!-- Pagination -->
                                    <div class="flex items-center justify-between mt-6">
                                          <div class="text-[#994d4d] text-sm">
                                                Showing 1-10 of 47 articles
                                          </div>
                                          <div class="flex gap-2">
                                                <button class="px-3 py-2 text-[#994d4d] hover:text-[#1b0e0e] disabled:opacity-50" disabled>
                                                      ← Previous
                                                </button>
                                                <button class="px-3 py-2 bg-[#e92929] text-white rounded">1</button>
                                                <button class="px-3 py-2 text-[#994d4d] hover:text-[#1b0e0e]">2</button>
                                                <button class="px-3 py-2 text-[#994d4d] hover:text-[#1b0e0e]">3</button>
                                                <button class="px-3 py-2 text-[#994d4d] hover:text-[#1b0e0e]">
                                                      Next →
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>
            </div>
      </div>

      <!-- Delete Confirmation Modal -->
      <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-lg p-6 max-w-md w-full mx-4">
                  <h3 class="text-lg font-bold text-[#1b0e0e] mb-4">Delete Article</h3>
                  <p class="text-[#994d4d] mb-6">Are you sure you want to delete this article? This action cannot be undone.</p>
                  <div class="flex gap-3 justify-end">
                        <button onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                              Cancel
                        </button>
                        <form action="{{route("blog.destroy", $blog->id ?? "")}}" method="POST">
                              @csrf
                              @method("DELETE")
                              <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                                    Delete
                              </button>
                        </form>
                        
                  </div>
            </div>
      </div>

      <!-- Bulk Actions Bar -->
      <div id="bulkActionsBar" class="fixed bottom-6 left-1/2 transform -translate-x-1/2 bg-white rounded-lg shadow-lg border border-[#f3e7e7] px-6 py-3 hidden">
            <div class="flex items-center gap-4">
                  <span class="text-[#1b0e0e] font-medium"><span id="selectedCount">0</span> articles selected</span>
                  <div class="flex gap-2">
                        <button onclick="bulkEdit()" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                              Bulk Edit
                        </button>
                        <button onclick="bulkDelete()" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors text-sm">
                              Bulk Delete
                        </button>
                  </div>
            </div>
      </div>

      <style>
            .line-clamp-1 {
                  display: -webkit-box;
                  -webkit-line-clamp: 1;
                  -webkit-box-orient: vertical;
                  overflow: hidden;
            }

            /* Custom scrollbar */
            .overflow-x-auto::-webkit-scrollbar {
                  height: 6px;
            }

            .overflow-x-auto::-webkit-scrollbar-track {
                  background: #f1f1f1;
                  border-radius: 3px;
            }

            .overflow-x-auto::-webkit-scrollbar-thumb {
                  background: #c1c1c1;
                  border-radius: 3px;
            }

            .overflow-x-auto::-webkit-scrollbar-thumb:hover {
                  background: #a8a8a8;
            }

            /* Enhanced hover effects */
            tr:hover {
                  background-color: #fafafa !important;
            }

            button:hover {
                  transform: translateY(-1px);
            }

            button:active {
                  transform: translateY(0);
            }

            /* Modal animation */
            #deleteModal {
                  animation: fadeIn 0.2s ease-out;
            }

            @keyframes fadeIn {
                  from {
                        opacity: 0;
                        transform: scale(0.95);
                  }
                  to {
                        opacity: 1;
                        transform: scale(1);
                  }
            }

            /* Bulk actions bar animation */
            #bulkActionsBar {
                  animation: slideUp 0.3s ease-out;
            }

            @keyframes slideUp {
                  from {
                        opacity: 0;
                        transform: translateY(20px) translateX(-50%);
                  }
                  to {
                        opacity: 1;
                        transform: translateY(0) translateX(-50%);
                  }
            }
      </style>
      <script>
            function deleteArticle(id) {
                  currentDeleteId = id;
                  document.getElementById('deleteModal').classList.remove('hidden');
                  document.getElementById('deleteModal').classList.add('flex');
            }

            function closeDeleteModal() {
                  document.getElementById('deleteModal').classList.add('hidden');
                  document.getElementById('deleteModal').classList.remove('flex');
                  currentDeleteId = null;
            }

            function confirmDelete() {
                  if (currentDeleteId) {
                        closeDeleteModal();
                  }
            }
      </script>
</body>

</html>