@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/admin/admin-tours.css') }}">
@endsection

@section('title', 'Tour Management')

@section('main')
    @include('components.header')

    <div class="container">
        <div class="admin-header">
            <div class="admin-header-title">
                <h1>Tour Management</h1>
                <p>Manage all your tour packages</p>
            </div>
            <div class="admin-header-actions">
                <a href="" class="btn-primary">
                    <i class="fas fa-plus"></i> Create New Tour
                </a>
            </div>
        </div>

        <div class="tours-filters">
            <form action="" method="GET" class="filter-form">
                <div class="filter-row">
                    <div class="filter-group">
                        <label for="search">Search</label>
                        <input type="text" id="search" name="search" value="" placeholder="Search by title or destination...">
                    </div>
                    <div class="filter-group">
                        <label for="destination">Destination</label>
                        <select id="destination" name="destination">
                            <option value="">All Destinations</option>
                            <option value="Kyoto">Kyoto</option>
                            <option value="Tokyo">Tokyo</option>
                            <option value="Osaka">Osaka</option>
                            <option value="Hokkaido">Hokkaido</option>
                            <option value="Fukuoka">Fukuoka</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="duration">Duration</label>
                        <select id="duration" name="duration">
                            <option value="">Any Duration</option>
                            <option value="1-3">1-3 Days</option>
                            <option value="4-7">4-7 Days</option>
                            <option value="8+">8+ Days</option>
                        </select>
                    </div>
                    <div class="filter-actions">
                        <button type="submit" class="btn-secondary">Filter</button>
                        <a href="" class="btn-outline">Reset</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="tours-list">
            <div class="tours-header">
                <div class="tours-count">
                    Showing <span>1</span> to <span>5</span> of <span>5</span> tours
                </div>
                <div class="tours-sort">
                    <label for="sort">Sort by:</label>
                    <select id="sort" name="sort">
                        <option value="newest" selected>Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="name_asc">Name (A-Z)</option>
                        <option value="name_desc">Name (Z-A)</option>
                        <option value="price_low">Price (Low to High)</option>
                        <option value="price_high">Price (High to Low)</option>
                    </select>
                </div>
            </div>

            <div class="tours-grid">
                @foreach ($tours as $tour)
                    <div class="tour-card">
                        <div class="tour-card-image">
                            <img src="{{ asset('storage/' . $tour->hero_image) }}" alt="{{ $tour->title }}">
                            <div class="tour-card-badge">{{$tour->badge}}</div>
                        </div>
                        <div class="tour-card-content">
                            <h3 class="tour-card-title">{{$tour->title}}</h3>
                            <div class="tour-card-meta">
                                <div class="tour-meta-item">
                                    <i class="fas fa-map-marker-alt"></i>{{$tour->destinations}}
                                </div>
                                <div class="tour-meta-item">
                                    <i class="fas fa-calendar-alt"></i>{{$tour->duration_days}}Days
                                </div>
                            </div>
                            <div class="tour-card-price">
                                {{$tour->price}}
                                <span class="price-note">per person</span>
                            </div>
                            <div class="tour-card-actions">
                                <a href="#" class="btn-secondary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="#" class="btn-outline">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <button type="button" class="btn-icon delete-tour" data-tour-id="1" data-tour-title="Kyoto, Nara & Osaka">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Confirm Deletion</h2>
                <button type="button" class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <strong id="tour-title-placeholder"></strong>?</p>
                <p class="warning-text">This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-outline close-modal">Cancel</button>
                <form id="delete-form" action="" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">Delete Tour</button>
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
            
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tourId = this.getAttribute('data-tour-id');
                    const tourTitle = this.getAttribute('data-tour-title');
                    
                    deleteForm.action = `/tours/${tourId}`;
                    tourTitlePlaceholder.textContent = tourTitle;
                    modal.style.display = 'flex';
                });
            });
            
            closeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    modal.style.display = 'none';
                });
            });
            
            window.addEventListener('click', function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            });

            // Sorting functionality
            document.getElementById('sort').addEventListener('change', function() {
                // In a real app, this would redirect with sort parameters
                console.log('Sort changed to: ' + this.value);
            });
        });
    </script>
@endsection