
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
                                <p>
                                    @if(strlen($tour->overview) > 100)
                                        {{ substr($tour->overview, 0, 100) }}...
                                        <a href="#" class="see-more" data-tour-id="{{ $tour->id }}">see more</a>
                                    @else
                                        {{ $tour->overview }}
                                    @endif
                                </p>
                                <div class="tour-card-meta">
                                    <div class="tour-meta-item">
                                        <i class="fas fa-map-marker-alt"></i> {{ $tour->destinations }}
                                    </div>
                                    <div class="tour-meta-item">
                                        <i class="fa-solid fa-clock"></i> {{ $tour->hours }} hrs
                                    </div>
                                    <div class="tour-meta-item">
                                        <i class="fa-solid fa-language"></i>{{ $tour->languages }}
                                    </div>
                                </div>
                                <div class="tour-card-price">
                                    ¥{{ number_format($tour->price) }}
                                    <span class="price-note">per person</span>
                                </div>
                                <div class="tour-card-actions">
                                    <!-- From Uiverse.io by vinodjangid07 --> 
                                    <a href="{{ route('tour.edit', $tour->id) }}" style="color: inherit; display: flex; text-decoration: none;"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('tour.show', $tour->id) }}" style="color: inherit; display: flex; text-decoration: none;"><i class="fa-solid fa-eye"></i></a>
                                    <i class="fa-solid fa-trash delete-tour" data-tour-id="{{ $tour->id }}" data-tour-title="{{ $tour->title }}"></i>
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