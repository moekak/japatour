
@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('css/admin/admin-tours.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection

@section('title', 'Tour Management Dashboard')

@section('content')
    <div class="container">
        <!-- Flash Messages for status updates -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <div class="alert-content">{{ session('success') }}</div>
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                <div class="alert-content">{{ session('error') }}</div>
            </div>
        @endif

        <!-- Dashboard Header with Stats -->
        <div class="admin-header">
            <div class="admin-header-title">
                <h1>Tour Management</h1>
                <p>Create, update, and manage all your tour packages in one place</p>
            </div>
            <button class="create-tour">
                <span>
                    <svg
                        height="24"
                        width="24"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                    </svg>
                        Create New Tour
                    </span>
            </button>
              
        </div>
        
        <!-- Enhanced Filter Section with Visual Improvements -->
        <div class="tours-filters">
            <form action="" method="GET" class="filter-form">
                <div class="filter-row">
                    <div class="filter-group">
                        <label for="search">Search Tours</label>
                        <input type="text" id="search" name="search" value="{{ request('search') }}" 
                            placeholder="Search by title, description or destination...">
                    </div>
                    <div class="filter-group">
                        <label for="destination">Destination</label>
                        <select id="destination" name="destination">
                            <option value="">All Destinations</option>
                            {{-- @foreach($destinations as $destination)
                                <option value="{{ $destination }}" {{ request('destination') == $destination ? 'selected' : '' }}>
                                    {{ $destination }}
                                </option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="duration">Duration</label>
                        <select id="duration" name="duration">
                            <option value="">Any Duration</option>
                            <option value="1-3" {{ request('duration') == '1-3' ? 'selected' : '' }}>1-3 Days</option>
                            <option value="4-7" {{ request('duration') == '4-7' ? 'selected' : '' }}>4-7 Days</option>
                            <option value="8+" {{ request('duration') == '8+' ? 'selected' : '' }}>8+ Days</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="price_range">Price Range</label>
                        <select id="price_range" name="price_range">
                            <option value="">Any Price</option>
                            <option value="budget" {{ request('price_range') == 'budget' ? 'selected' : '' }}>Budget (Under ¥50,000)</option>
                            <option value="standard" {{ request('price_range') == 'standard' ? 'selected' : '' }}>Standard (¥50,000-¥150,000)</option>
                            <option value="premium" {{ request('price_range') == 'premium' ? 'selected' : '' }}>Premium (¥150,000+)</option>
                        </select>
                    </div>
                    <div class="filter-actions">
                        <button type="submit" class="btn-secondary">
                            <i class="fas fa-filter"></i> Apply Filters
                        </button>
                        <a href="" class="btn-outline">
                            <i class="fas fa-redo"></i> Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tours Results Section -->
        <div class="tours-list">
            <div class="tours-header">
                <div class="tours-count">
                    {{-- Showing <span>{{ $tours->firstItem() ?: 0 }}</span> to <span>{{ $tours->lastItem() ?: 0 }}</span> of <span>{{ $tours->total() }}</span> tours --}}
                </div>
                <div class="tours-sort">
                    <label for="sort">Sort by:</label>
                    <select id="sort" name="sort" class="sort-select">
                        <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest First</option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
                        <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name (A-Z)</option>
                        <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name (Z-A)</option>
                        <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price (Low to High)</option>
                        <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price (High to Low)</option>
                        <option value="popularity" {{ request('sort') == 'popularity' ? 'selected' : '' }}>Most Popular</option>
                    </select>
                </div>
            </div>

            @if($tours->isEmpty())
                <div class="empty-state">
                    <div class="empty-state-icon">
                        <i class="fas fa-suitcase-rolling"></i>
                    </div>
                    <h3>No Tours Found</h3>
                    <p>There are no tours matching your current filters. Try adjusting your search criteria or create a new tour.</p>
                    <a href="" class="btn-primary">
                        <i class="fas fa-plus"></i> Create New Tour
                    </a>
                </div>
            @else
                <div class="tours-grid">
                    @foreach ($tours as $tour)
                        <div class="tour-card" data-id="{{ $tour->id }}">
                            <div class="tour-card-image">
                                <img src="{{ asset('storage/' . $tour->hero_image) }}" alt="{{ $tour->title }}">
                                @if($tour->badge)
                                    <div class="tour-card-badge">{{ $tour->badge }}</div>
                                @endif
                            </div>
                            <div class="tour-card-content">
                                <h3 class="tour-card-title">{{ $tour->title }}</h3>
                                <div class="tour-card-meta">
                                    <div class="tour-meta-item">
                                        <i class="fas fa-map-marker-alt"></i> {{ $tour->destinations }}
                                    </div>
                                    <div class="tour-meta-item">
                                        <i class="fas fa-calendar-alt"></i> {{ $tour->duration_days }} Days
                                    </div>
                                    <div class="tour-meta-item">
                                        <i class="fas fa-users"></i> {{ $tour->group_size ?? 'Any' }} People
                                    </div>
                                </div>
                                <div class="tour-card-price">
                                    ¥{{ number_format($tour->price) }}
                                    <span class="price-note">per person</span>
                                </div>
                                <div class="tour-card-actions">
                                    <!-- From Uiverse.io by vinodjangid07 --> 
                                    <button class="Btn">Edit 
                                        <svg class="svg" viewBox="0 0 512 512">
                                            <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg>
                                    </button>
                                    <button class="Btn">
                                        <a href="{{ route('tour.show', $tour->id) }}">
                                            View 
                                            <svg class="svg" viewBox="0 0 576 512">
                                                <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                            </svg>
                                        </a> 
                                    </button>
                                    
                                    <button class="Btn delete-tour" type="button" data-tour-id="{{ $tour->id }}" data-tour-title="{{ $tour->title }}">Delete
                                        <svg class="svg" viewBox="0 0 448 512" style="width: 14px; height: 16px;">
                                            <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="pagination-container">
                    {{-- {{ $tours->appends(request()->query())->links() }} --}}
                </div>
            @endif
        </div>
    </div>

    <!-- Enhanced Delete Confirmation Modal -->
    <div id="delete-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2><i class="fas fa-exclamation-triangle text-danger"></i> Confirm Deletion</h2>
                <button type="button" class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <strong id="tour-title-placeholder"></strong>?</p>
                <p class="warning-text">This action cannot be undone and all related data will be permanently deleted.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-outline close-modal">Cancel</button>
                <form id="delete-form" action="" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">
                        <i class="fas fa-trash-alt"></i> Delete Tour
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Delete tour confirmation
            const modal = document.getElementById('delete-modal');
            const deleteButtons = document.querySelectorAll('.delete-tour');
            const closeButtons = document.querySelectorAll('.close-modal');
            const deleteForm = document.getElementById('delete-form');
            const tourTitlePlaceholder = document.getElementById('tour-title-placeholder');
            
            // Modal toggle functions with animation
            function openModal() {
                modal.style.display = 'flex';
                // Add a small delay before adding active class for smooth animation
                setTimeout(() => {
                    modal.classList.add('active');
                }, 10);
            }
            
            function closeModal() {
                modal.classList.remove('active');
                // Wait for animation to complete before hiding
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 300);
            }
            
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tourId = this.getAttribute('data-tour-id');
                    const tourTitle = this.getAttribute('data-tour-title');
                    
                    deleteForm.action = `/tour/destroy/${tourId}`;
                    tourTitlePlaceholder.textContent = tourTitle;
                    openModal();
                });
            });
            
            closeButtons.forEach(button => {
                button.addEventListener('click', closeModal);
            });
            
            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    closeModal();
                }
            });

            // Auto-submit form when sort is changed
            const sortSelect = document.querySelector('.sort-select');
            if (sortSelect) {
                sortSelect.addEventListener('change', function() {
                    const currentUrl = new URL(window.location.href);
                    currentUrl.searchParams.set('sort', this.value);
                    window.location.href = currentUrl.toString();
                });
            }
            
            // Enhance cards with hover effects
            const tourCards = document.querySelectorAll('.tour-card');
            tourCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.classList.add('hover');
                });
                
                card.addEventListener('mouseleave', function() {
                    this.classList.remove('hover');
                });
            });
            
            // Fade in for alerts
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.classList.add('fade-in');
                }, 100);
                
                // Auto dismiss alerts after 5 seconds
                setTimeout(() => {
                    alert.classList.add('fade-out');
                    setTimeout(() => {
                        alert.remove();
                    }, 500);
                }, 5000);
            });
        });
    </script>
@endsection