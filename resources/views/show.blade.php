@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
<style>
    /* Add fade transition for gallery */
    .preview-main {
        transition: opacity 0.3s ease;
    }
    .preview-main.fade-out {
        opacity: 0;
    }
    /* Custom styles for urgent notices */
    .limited-spots.urgent {
        background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%);
        color: #B71C1C;
        border-left: 4px solid #C62828;
        animation: pulse-urgent 2s infinite;
    }
    @keyframes pulse-urgent {
        0% { box-shadow: 0 0 0 0 rgba(198, 40, 40, 0.4); }
        70% { box-shadow: 0 0 0 10px rgba(198, 40, 40, 0); }
        100% { box-shadow: 0 0 0 0 rgba(198, 40, 40, 0); }
    }
</style>
@endsection

@section("main")
    @include('components.header')
    <!-- Hero Section -->
    <section class="hero">
        <img src="{{ asset('storage/' . $tour->hero_image) }}" alt="{{ $tour->title }}" class="hero-image">
        <div class="discount-badge">{{$tour->badge}}</div>
        <div class="hero-content">
            <h1 class="hero-title">{{$tour->title}}</h1>
            <p class="hero-subtitle">{{$tour->subtitle}}</p>
            <div class="hero-badge">{{$tour->badge}}</div>
        </div>
    </section>
    
    <!-- Quick Info -->
    <div class="container">
        <div class="quick-info">
            <div class="info-item">
                <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
                <div class="info-title">Hours</div>
                <div class="info-content">{{$tour->hours}}hrs</div>
            </div>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="info-title">Destinations</div>
                <div class="info-content">{{$tour->destinations}}</div>
            </div>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-users"></i></div>
                <div class="info-title">Group Size</div>
                <div class="info-content">Max {{$tour->max_participants}} People</div>
            </div>
            <div class="info-item">
                <div class="info-icon"><i class="fas fa-language"></i></div>
                <div class="info-title">Languages</div>
                <div class="info-content">{{$tour->languages}}</div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Left Content -->
            <div class="content-left">
                <!-- Tour Preview Images -->
                <div class="tour-preview">
                    <img src="{{ asset('storage/' . $tour->gallery_images[0]) }}" alt="{{ $tour->title }}" class="preview-main">
                    <div class="gallery-controls">
                        <div class="gallery-control prev-image"><i class="fas fa-chevron-left"></i></div>
                        <div class="gallery-control next-image"><i class="fas fa-chevron-right"></i></div>
                    </div>
                    <div class="preview-slider">
                        <div class="preview-dot active"></div>
                        <div class="preview-dot"></div>
                        <div class="preview-dot"></div>
                        <div class="preview-dot"></div>
                        <div class="preview-dot"></div>
                    </div>
                    <div class="preview-thumbs">
                        @foreach ($tour->gallery_images as $image)
                            <img src="{{ asset('storage/' . $image) }}" class="thumb">
                        @endforeach
                    </div>
                </div>
                
                <!-- Tour Overview -->
                <section class="section tour-overview">
                    <h2 class="section-title">Tour Overview</h2>
                    <p>{{$tour->overview}}</p>
                    
                    <div class="highlights">
                        <h3 class="highlights-title">Tour Highlights</h3>
                        <ul class="highlights-list">
                            @foreach ($tour->highlights as $highlight)
                                <li>{{$highlight}}</li>
                            @endforeach
                        </ul>
                    </div>
                </section>
                
                <!-- Itinerary Details -->
                <section class="section tour-itinerary">
                    <h2 class="section-title">Detailed Itinerary</h2>
                    
                    @foreach ($tour->itinerary as $index => $itinerary)
                        <div class="itinerary-day">
                            <h3 class="day-title" data-day="{{$index + 1}}">{{$itinerary["title"]}}</h3>
                            <div class="day-content">
                                <p class="day-description">{{$itinerary["description"]}}</p>
                                <div class="day-timeline">
                                    @foreach ($itinerary["schedule"] as $schedule)
                                        <div class="schedule-item">
                                            <div class="schedule-time">{{$schedule["time"]}}</div>
                                            <div class="schedule-description">{{$schedule["description"]}}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
            
            <!-- Right Content (Pricing Information) -->
            <div class="content-right">
                <div class="tour-details">
                    <div class="pricing-header">
                        <div class="price">{{$tour->currency}}{{$tour->price}}</div>
                        <p class="price-note">per person (based on double occupancy)</p>
                    </div>

                    {{-- Enhanced Calendar Widget --}}
                    <div class="calendar-container">
                        <div class="calendar-widget">
                            <div class="calendar-header">
                                <button class="nav-button">←</button>
                                <div class="current-month">4月 2025</div>
                                <button class="nav-button">→</button>
                            </div>
    
                            <div class="calendar-grid">
                                <!-- Weekday headers -->
                                <div class="weekday">日</div>
                                <div class="weekday">月</div>
                                <div class="weekday">火</div>
                                <div class="weekday">水</div>
                                <div class="weekday">木</div>
                                <div class="weekday">金</div>
                                <div class="weekday">土</div>
                            </div>
                            <div class="calendar-legend">
                                <div class="legend-item">
                                    <span class="legend-color available"></span>
                                    <span>Available</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pricing-body">
                        <div class="limited-spots">
                            <i class="fas fa-exclamation-circle"></i> {{$tour->limited_spots}}
                        </div>
                        
                        <a href="#" class="book-button">Book Now</a>
                        
                        <div class="includes-section">
                            <h3 class="includes-title">What's Included</h3>
                            <ul class="includes-list">
                                @foreach ($tour->inclusions as $inclusion)
                                    <li>{{$inclusion}}</li>
                                @endforeach
                            </ul>
                            
                            <h3 class="includes-title">What's Not Included</h3>
                            <ul class="not-includes-list">
                                @foreach ($tour->exclusions as $exclusion)
                                    <li>{{$exclusion}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Configuration for available dates and special pricing
    const availableDates = {!! json_encode($tour->available_dates) !!};
    const availableDatesArr = JSON.parse(availableDates)
    

    // Current selected date
    let selectedDate = null;
    
    // Current view month and year
    const today = new Date();
    let currentMonthIndex = today.getMonth();
    let currentYear = today.getFullYear();
    
    // Month names - Changed to English
    const months = [
        'January', 'February', 'March', 'April', 'May', 'June', 
        'July', 'August', 'September', 'October', 'November', 'December'
    ];
    
    // DOM elements
    const calendarGrid = document.querySelector('.calendar-grid');
    const currentMonthElement = document.querySelector('.current-month');
    const prevButton = document.querySelector('.nav-button:first-child');
    const nextButton = document.querySelector('.nav-button:last-child');
    
    // Save the weekday headers HTML
    const weekdayHeaders = document.querySelectorAll('.weekday');
    const weekdayHeadersHTML = Array.from(weekdayHeaders).map(day => day.outerHTML).join('');
    
    
    // Function to update the calendar
    function renderCalendar(year, month) {
        // Clear the calendar grid and reset the weekday headers
        calendarGrid.innerHTML = weekdayHeadersHTML;
        
        // Update the current month display - Changed to English format
        currentMonthElement.textContent = `${months[month]} ${year}`;
        
        // Month's first day
        const firstDay = new Date(year, month, 1);
        // Month's last day
        const lastDay = new Date(year, month + 1, 0);
        
        // First day of the week (0: Sunday, 1: Monday, ..., 6: Saturday)
        const firstDayOfWeek = firstDay.getDay();
        // Number of days in the month
        const daysInMonth = lastDay.getDate();
        
        // Add empty cells before the first day of the month
        for (let i = 0; i < firstDayOfWeek; i++) {
            const emptyDay = document.createElement('div');
            emptyDay.className = 'date empty';
            calendarGrid.appendChild(emptyDay);
        }
        
        // Current date for comparison
        const currentDate = new Date();
        const realToday = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate());
        
        // Helper function to format dates as YYYY-MM-DD
        function formatDate(date) {
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }
        
        // Add days of the month
        for (let day = 1; day <= daysInMonth; day++) {
            const date = new Date(year, month, day);
            const dateElement = document.createElement('div');
            dateElement.className = 'date';
            dateElement.textContent = day;
            
            // Check if the date is in the past
            const isPastDate = date < realToday;
            
            // Format current date to YYYY-MM-DD
            const formattedDate = formatDate(date);
            
            // Check if the date is available for booking
            const isAvailable = availableDatesArr.includes(formattedDate);

            // Add appropriate classes
            if (isPastDate) {
                dateElement.classList.add('disabled');
            } else if (isAvailable) {
                dateElement.classList.add('highlight-blue');
                // Add click event for booking
                dateElement.addEventListener('click', () => {
                    selectDate(formattedDate);
                });
            } else {
                dateElement.classList.add('disabled');
            }
            
            // Highlight today
            if (formatDate(realToday) === formattedDate) {
                dateElement.classList.add('today');
            }
            
            calendarGrid.appendChild(dateElement);
        }
    }
    
    
    // Initialize the calendar with current month
    renderCalendar(currentYear, currentMonthIndex);

    // Add event listeners to navigation buttons
    prevButton.addEventListener('click', function() {
        currentMonthIndex--;
        if (currentMonthIndex < 0) {
            currentMonthIndex = 11;
            currentYear--;
        }
        renderCalendar(currentYear, currentMonthIndex);
    });
    
    nextButton.addEventListener('click', function() {
        currentMonthIndex++;
        if (currentMonthIndex > 11) {
            currentMonthIndex = 0;
            currentYear++;
        }
        renderCalendar(currentYear, currentMonthIndex);
    });

    // Enhance gallery functionality
    enhanceGallery();
});

// Function to enhance the gallery
function enhanceGallery() {
    const thumbs = document.querySelectorAll('.thumb');
    const mainImage = document.querySelector('.preview-main');
    const dots = document.querySelectorAll('.preview-dot');
    const prevBtn = document.querySelector('.prev-image');
    const nextBtn = document.querySelector('.next-image');

    const galleryImages = {!! json_encode($tour->gallery_images) !!};

    // Image sources for the gallery (use full paths)
    const imageSources = [];
    galleryImages.forEach((image)=>{
        imageSources.push(`/storage/${image}`)
    })




    let currentImageIndex = 0;
    
    // Function to update active image with smooth transition
    function updateActiveImage(index) {
        // Add fade-out class to main image
        mainImage.classList.add('fade-out');
        
        // After a short delay, update the image and remove the fade-out class
        setTimeout(() => {
            mainImage.src = imageSources[index];
            // Update active thumb and dot
            thumbs.forEach(thumb => thumb.classList.remove('active'));
            thumbs[index].classList.add('active');
            
            dots.forEach(dot => dot.classList.remove('active'));
            dots[index].classList.add('active');
            
            currentImageIndex = index;
            
            // Remove fade-out class to fade the image back in
            mainImage.classList.remove('fade-out');
        }, 300);
    }
    
    // Add click event to thumbnails
    thumbs.forEach((thumb, index) => {
        thumb.addEventListener('click', () => {
            if (index !== currentImageIndex) {
                updateActiveImage(index);
            }
        });
    });
    
    // Add click event to dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            if (index !== currentImageIndex) {
                updateActiveImage(index);
            }
        });
    });
    
    // Previous button click
    prevBtn.addEventListener('click', () => {
        let newIndex = currentImageIndex - 1;
        if (newIndex < 0) newIndex = imageSources.length - 1;
        updateActiveImage(newIndex);
    });
    
    // Next button click
    nextBtn.addEventListener('click', () => {
        let newIndex = currentImageIndex + 1;
        if (newIndex >= imageSources.length) newIndex = 0;
        updateActiveImage(newIndex);
    });
    
    // Add keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            let newIndex = currentImageIndex - 1;
            if (newIndex < 0) newIndex = imageSources.length - 1;
            updateActiveImage(newIndex);
        } else if (e.key === 'ArrowRight') {
            let newIndex = currentImageIndex + 1;
            if (newIndex >= imageSources.length) newIndex = 0;
            updateActiveImage(newIndex);
        }
    });
    
    // Add swipe functionality for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    const galleryElement = document.querySelector('.tour-preview');
    
    galleryElement.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    galleryElement.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const minSwipeDistance = 50;
        if (touchEndX < touchStartX - minSwipeDistance) {
            // Swiped left, show next image
            let newIndex = currentImageIndex + 1;
            if (newIndex >= imageSources.length) newIndex = 0;
            updateActiveImage(newIndex);
        }
        if (touchEndX > touchStartX + minSwipeDistance) {
            // Swiped right, show previous image
            let newIndex = currentImageIndex - 1;
            if (newIndex < 0) newIndex = imageSources.length - 1;
            updateActiveImage(newIndex);
        }
    }
    
    // Auto-rotate gallery images
    let autoRotateInterval = setInterval(() => {
        let newIndex = currentImageIndex + 1;
        if (newIndex >= imageSources.length) newIndex = 0;
        updateActiveImage(newIndex);
    }, 5000);
    
    // Stop auto-rotate on user interaction
    const stopAutoRotate = () => {
        clearInterval(autoRotateInterval);
        // Restart after 15 seconds of inactivity
        setTimeout(() => {
            autoRotateInterval = setInterval(() => {
                let newIndex = currentImageIndex + 1;
                if (newIndex >= imageSources.length) newIndex = 0;
                updateActiveImage(newIndex);
            }, 5000);
        }, 15000);
    };
    
    thumbs.forEach(thumb => thumb.addEventListener('click', stopAutoRotate));
    dots.forEach(dot => dot.addEventListener('click', stopAutoRotate));
    prevBtn.addEventListener('click', stopAutoRotate);
    nextBtn.addEventListener('click', stopAutoRotate);
    galleryElement.addEventListener('touchstart', stopAutoRotate);
}
    </script>
@endsection