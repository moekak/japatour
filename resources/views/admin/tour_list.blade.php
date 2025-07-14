<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours Management - ShogunTours Admin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <link rel="shortcut icon" href="{{asset('img/logo2.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
        * {
            font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;
        }
    </style>
</head>

<body class="bg-[#fcf8f8]">
    @if(session('success'))
        <div class="fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg flex items-center gap-3 z-50 animate-slide-in">
            <i class="fas fa-check-circle"></i>
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="ml-4 text-green-700 hover:text-green-900">
                <i class="fas fa-times"></i>
            </button>
        </div>
    @endif
    <div class="relative flex size-full min-h-screen flex-col overflow-x-hidden">
        <!-- Header -->
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f3e7e7] px-10 py-3 sticky top-0 bg-[#fcf8f8] z-50">
            <div class="flex items-center gap-4 text-[#1b0e0e]">
                <div class="size-4">
                    <img src="{{asset('img/logo2.png')}}" alt="">
                </div>
                <h2 class="text-[#1b0e0e] text-lg font-bold leading-tight tracking-[-0.015em]">ShogunTours Admin</h2>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="flex items-center gap-9">
                    <a class="text-[#1b0e0e] text-base font-medium leading-normal hover:text-[#e92929] transition-colors" href="#">Dashboard</a>
                    <a class="text-[#1b0e0e] text-base font-medium leading-normal hover:text-[#e92929] transition-colors font-bold" href="#">Tours</a>
                    <a class="text-[#1b0e0e] text-base font-medium leading-normal hover:text-[#e92929] transition-colors" href="#">Bookings</a>
                    <a class="text-[#1b0e0e] text-base font-medium leading-normal hover:text-[#e92929] transition-colors" href="#">Users</a>
                    <a class="text-[#1b0e0e] text-base font-medium leading-normal hover:text-[#e92929] transition-colors" href="#">Settings</a>
                </div>
                <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1b0e0e] text-[#fcf8f8] text-base font-medium leading-normal tracking-[0.015em] hover:bg-[#2b1e1e] transition-colors">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    <span class="truncate">Logout</span>
                </button>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="max-w-[1400px] mx-auto px-6 py-8">
                <!-- Page Header -->
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h1 class="text-[#1b0e0e] text-[32px] font-bold leading-tight tracking-[-0.015em] mb-2">Tour Management</h1>
                        <p class="text-[#994d4d] text-base font-normal">Manage all your tours in one place</p>
                    </div>
                    <button onclick="window.location.href='{{route('admin.tour_create')}}'" class="flex items-center gap-2 px-6 py-3 bg-[#e92929] text-white rounded-lg font-medium hover:bg-[#d61f1f] transition-colors">
                        <i class="fas fa-plus"></i>
                        <span>Add New Tour</span>
                    </button>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                    <div class="bg-white rounded-lg p-6 border border-[#f3e7e7]">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-[#994d4d] text-sm font-medium">Total Tours</h3>
                            <div class="w-10 h-10 bg-[#e92929]/10 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marked-alt text-[#e92929]"></i>
                            </div>
                        </div>
                        <p class="text-[#1b0e0e] text-2xl font-bold">{{ $totalTours ?? 45 }}</p>
                        <p class="text-green-600 text-xs mt-1">+12% from last month</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 border border-[#f3e7e7]">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-[#994d4d] text-sm font-medium">Active Tours</h3>
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-check-circle text-green-600"></i>
                            </div>
                        </div>
                        <p class="text-[#1b0e0e] text-2xl font-bold">{{ $activeTours ?? 38 }}</p>
                        <p class="text-[#994d4d] text-xs mt-1">Currently available</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 border border-[#f3e7e7]">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-[#994d4d] text-sm font-medium">Total Bookings</h3>
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-users text-blue-600"></i>
                            </div>
                        </div>
                        <p class="text-[#1b0e0e] text-2xl font-bold">{{ $totalBookings ?? 234 }}</p>
                        <p class="text-green-600 text-xs mt-1">+8% from last week</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 border border-[#f3e7e7]">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-[#994d4d] text-sm font-medium">Revenue</h3>
                            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-yen-sign text-yellow-600"></i>
                            </div>
                        </div>
                        <p class="text-[#1b0e0e] text-2xl font-bold">¥{{ number_format($totalRevenue ?? 2850000) }}</p>
                        <p class="text-green-600 text-xs mt-1">+15% from last month</p>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-white rounded-lg p-4 mb-6 border border-[#f3e7e7]">
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="flex-1 min-w-[200px]">
                            <input type="text" placeholder="Search tours..." class="w-full px-4 py-2 rounded-lg border border-[#f3e7e7] focus:outline-none focus:border-[#e92929]">
                        </div>
                        <select class="px-4 py-2 rounded-lg border border-[#f3e7e7] focus:outline-none focus:border-[#e92929]">
                            <option>All Categories</option>
                            <option>Cultural</option>
                            <option>Adventure</option>
                            <option>Nature</option>
                            <option>City Tours</option>
                        </select>
                        <select class="px-4 py-2 rounded-lg border border-[#f3e7e7] focus:outline-none focus:border-[#e92929]">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Draft</option>
                            <option>Inactive</option>
                        </select>
                        <button class="px-4 py-2 bg-[#f3e7e7] text-[#1b0e0e] rounded-lg hover:bg-[#e7d0d0] transition-colors">
                            <i class="fas fa-filter mr-2"></i>
                            Filter
                        </button>
                    </div>
                </div>

                <!-- Tours Table -->
                <div class="bg-white rounded-lg border border-[#f3e7e7] overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-[#f3e7e7]">
                                    <th class="px-6 py-4 text-left text-xs font-medium text-[#1b0e0e] uppercase tracking-wider">Tour</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-[#1b0e0e] uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-[#1b0e0e] uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-[#1b0e0e] uppercase tracking-wider">ITINERARY</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-[#1b0e0e] uppercase tracking-wider">Bookings</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-[#1b0e0e] uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-[#1b0e0e] uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-[#f3e7e7]">
                                @foreach ($tours as $tour)
                                    <tr class="hover:bg-[#fcf8f8] transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <img class="h-10 w-10 rounded-lg object-cover" src="{{asset("storage/" . $tour->hero_image)}}" alt="">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-[#1b0e0e]">{{$tour->title}}</div>
                                                    <div class="text-sm text-[#994d4d]">{{$tour->subtitle}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-[#e92929]/10 text-[#e92929]">{{$tour->category["category"]}}</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-[#1b0e0e]">¥12,000~</td>
                                        <td class="px-6 py-4 text-sm text-[#1b0e0e]">{{count($tour->itineraries)}}</td>
                                        <td class="px-6 py-4 text-sm text-[#1b0e0e]">23</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Active</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium">
                                            <div class="flex items-center gap-2">
                                                <a class="text-blue-600 hover:text-blue-900 transition-colors" title="View" href="{{ route('tour.show', ['id' => $tour->id]) }}">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a class="text-yellow-600 hover:text-yellow-900 transition-colors" title="Edit" href="{{ route('tour.edit', ['id' => $tour->id]) }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a onclick="confirmDelete(1)" class="text-red-600 hover:text-red-900 transition-colors" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="bg-[#fcf8f8] px-6 py-3 flex items-center justify-between border-t border-[#f3e7e7]">
                        <div class="flex-1 flex justify-between sm:hidden">
                            <button class="relative inline-flex items-center px-4 py-2 border border-[#f3e7e7] text-sm font-medium rounded-md text-[#1b0e0e] bg-white hover:bg-[#f3e7e7]">
                                Previous
                            </button>
                            <button class="ml-3 relative inline-flex items-center px-4 py-2 border border-[#f3e7e7] text-sm font-medium rounded-md text-[#1b0e0e] bg-white hover:bg-[#f3e7e7]">
                                Next
                            </button>
                        </div>
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-[#994d4d]">
                                    Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of{' '}
                                    <span class="font-medium">45</span> results
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-[#f3e7e7] bg-white text-sm font-medium text-[#994d4d] hover:bg-[#f3e7e7]">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="z-10 bg-[#e92929] border-[#e92929] text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        1
                                    </button>
                                    <button class="bg-white border-[#f3e7e7] text-[#994d4d] hover:bg-[#f3e7e7] relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        2
                                    </button>
                                    <button class="bg-white border-[#f3e7e7] text-[#994d4d] hover:bg-[#f3e7e7] relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        3
                                    </button>
                                    <span class="relative inline-flex items-center px-4 py-2 border border-[#f3e7e7] bg-white text-sm font-medium text-[#994d4d]">
                                        ...
                                    </span>
                                    <button class="bg-white border-[#f3e7e7] text-[#994d4d] hover:bg-[#f3e7e7] relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        5
                                    </button>
                                    <button class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-[#f3e7e7] bg-white text-sm font-medium text-[#994d4d] hover:bg-[#f3e7e7]">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 max-w-sm w-full mx-4">
            <h3 class="text-lg font-bold text-[#1b0e0e] mb-4">Confirm Delete</h3>
            <p class="text-[#994d4d] mb-6">Are you sure you want to delete this tour? This action cannot be undone.</p>
            <div class="flex justify-end gap-3">
                <button onclick="closeDeleteModal()" class="px-4 py-2 border border-[#f3e7e7] rounded-lg text-[#1b0e0e] hover:bg-[#f3e7e7] transition-colors">
                    Cancel
                </button>
                <form id="deleteForm" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(tourId) {
            const modal = document.getElementById('deleteModal');
            const form = document.getElementById('deleteForm');
            form.action = `/admin/tours/${tourId}`;
            modal.classList.remove('hidden');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('deleteModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeDeleteModal();
            }
        });
    </script>
</body>

</html>