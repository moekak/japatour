@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section("main")
@include('components.menu_modal')
@include('components.header')
<div id="tourData" data-tour-id="{{ $tour->id }}"></div>
<!-- Hero Section -->
<section class="hero">
    <img src="{{ asset('storage/' . $tour->hero_image) }}" alt="{{ $tour->title }}" class="hero-image">
    <div class="discount-badge">{{$tour->badge}}</div>
    <div class="hero-content">
            <h1 class="hero-title">{{$tour->title}}</h1>
            <p class="hero-subtitle">{{$tour->subtitle}}</p>
    </div>
</section>

<!-- Quick Info -->
<div class="container">
    <div class="quick-info">
        <div class="info-item">
            <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
            <div class="info-title">Duration</div>
            <div class="info-content">{{$tour->hours}} hours</div>
        </div>
        <div class="info-item">
            <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="info-title">Destinations</div>
            <div class="info-content">{{$tour->destinations}}</div>
        </div>
        <div class="info-item">
            <div class="info-icon"><i class="fas fa-users"></i></div>
            <div class="info-title">Group Size</div>
            <div class="info-content">Max {{$tour->max_participants}}</div>
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
                <section class="section tour-itinerary">
                    <h2 class="section-title">Detailed Itinerary</h2>
                    <div class="itinerary-container">
                        <div class="itinerary-timeline"></div>
                        <div class="itinerary-days">
                            @foreach ($tour->itinerary as $index => $itinerary)
                                <div class="itinerary-day">
                                    <div class="itinerary-day-marker">{{$index + 1}}</div>
                                    <div class="itinerary-day-left">
                                        <h3 class="itinerary-day-title">{{$itinerary["title"]}}</h3>
                                        <p class="itinerary-day-description">{{$itinerary["description"]}}</p>
                                        
                                        <div class="day-features itinerary-day-features">
                                            @foreach ($itinerary["itinerary_highlight"] as $highlight)
                                                <div class="day-feature">
                                                    <i class="fa-solid fa-bullhorn"></i>
                                                    <span class="day-feature-text">{{$highlight}}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    
                                        <div class="day-actions">
                                            <div class="day-action-btn details">
                                                <i class="fas fa-info-circle"></i>
                                                <span>Show Itinerary</span>
                                            </div>
                                            @if ($itinerary["map"])
                                                <div class="day-action-btn map">
                                                    <i class="fas fa-map"></i>
                                                    <span><a href="{{$itinerary["map"]}}" target="_blank" rel="noopener noreferrer">View on Map</a></span>
                                                </div>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="itinerary-day-right">
                                        <img src="{{ asset('storage/' . $itinerary["itinerary_image"]) }}" alt="{{ $tour->title }}"  class="itinerary-day-image">
                                        <div class="day-schedule">
                                            <h4 class="schedule-title">
                                                <i class="fas fa-clock"></i>
                                                Tour Schedule
                                            </h4>
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
                        </div>
                    </div>
                </section>

                <!-- Customer Reviews Section -->
                <section class="customer-reviews">
                    <div class="reviews-header">
                        <h2 class="reviews-title">Customer Reviews</h2>
                        <div class="avg-rating">
                            <div class="rating-value">{{$averageRate}}</div>
                            <div class="rating-stars">
                                @php
                                    $integerPart = intval($averageRate);
                                    $decimalPart = $averageRate - $integerPart;  // 0.4
                                    $emptyPart = 5 - $averageRate;
                                    for($i = 0; $i < $integerPart; $i ++){
                                        echo '<i class="fas fa-star"></i>';
                                    }
                                @endphp
                                @if ($decimalPart > 0)
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                @endif
                                @if ($emptyPart > 1)
                                    <i class="fa-regular fa-star"></i>
                                @endif
                            </div>
                            <div class="rating-count">based on {{count($tour->reviews)}} reviews</div>
                        </div>
                    </div>
                    
                    <div class="reviews-grid">
                        @foreach ($tour->reviews as $review)
                            <div class="review-card">
                                <div class="review-header">
                                    <div class="reviewer-info">
                                        <div class="reviewer-name">{{$review->name}}</div>
                                        <div class="review-date">{{ \Carbon\Carbon::parse($review->review_date)->format('F j, Y') }}</div>
                                    </div>
                                </div>
                                <div class="reviewer-rating">
                                    @php
                                        $emptyStar = 5 - intval($review->rate);
                                        for($i = 0; $i < $review->rate; $i++){
                                            echo '<i class="fas fa-star"></i>';
                                        }
                                        for($i = 0; $i < $emptyStar; $i++){
                                            echo '<i class="fa-regular fa-star"></i>';
                                        }
                                    @endphp
                                </div>
                                <div class="review-text-container">
                                    <p class="review-text truncated">{{$review->review}}</p>
                                    <button class="expand-btn">Read more</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                <!-- FAQ Section -->
                <section class="faq-section">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <div class="faq-grid">
                        @foreach ($tour->questions as $question)
                            <div class="faq-item">
                                    <div class="faq-question">{{$question->question}}</div>
                                    <div class="faq-answer">{{$question->answer}}</div>
                            </div> 
                        @endforeach
                    </div>
            </section>
        </div>
    
        <!-- Right Content (Pricing Information) -->
        <div class="content-right">
            <div class="tour-details">
                    <div class="pricing-header">
                        <div class="price">{{$tour->currency}}{{ number_format($tour->price) }}</div>
                        <p class="price-note">per person (based on double occupancy)</p>
                    </div>
                    <div class="pricing-body">
                        <div class="calendar-container">
                            <div class="calendar-widget">
                                <div class="calendar-header">
                                        <button class="nav-button">←</button>
                                        <div class="current-month">April 2025</div>
                                        <button class="nav-button">→</button>
                                </div>
                
                                <div class="calendar-grid">
                                    <!-- Weekday headers -->
                                    <div class="weekday">Sun</div>
                                    <div class="weekday">Mon</div>
                                    <div class="weekday">Tue</div>
                                    <div class="weekday">Wed</div>
                                    <div class="weekday">Thu</div>
                                    <div class="weekday">Fri</div>
                                    <div class="weekday">Sat</div>
                                    
                                    <!-- Dates will be dynamically generated by JavaScript -->
                                    <div class="date empty"></div>
                                    <div class="date empty"></div>
                                    <div class="date">1</div>
                                    <div class="date">2</div>
                                    <div class="date">3</div>
                                    <div class="date">4</div>
                                    <div class="date">5</div>
                                    <div class="date">6</div>
                                    <div class="date">7</div>
                                    <div class="date">8</div>
                                    <div class="date">9</div>
                                    <div class="date">10</div>
                                    <div class="date">11</div>
                                    <div class="date">12</div>
                                    <div class="date">13</div>
                                    <div class="date">14</div>
                                    <div class="date">15</div>
                                    <div class="date">16</div>
                                    <div class="date">17</div>
                                    <div class="date">18</div>
                                    <div class="date">19</div>
                                    <div class="date">20</div>
                                    <div class="date">21</div>
                                    <div class="date">22</div>
                                    <div class="date">23</div>
                                    <div class="date">24</div>
                                    <div class="date today">25</div>
                                    <div class="date">26</div>
                                    <div class="date">27</div>
                                    <div class="date">28</div>
                                    <div class="date">29</div>
                                    <div class="date">30</div>
                                </div>
                                <div class="calendar-legend">
                                        <div class="legend-item">
                                            <span class="legend-color available"></span>
                                            <span>Available dates</span>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="limited-spots urgent">
                                <i class="fas fa-exclamation-circle"></i> {{$tour->limited_spots}}
                        </div>
                        <a href="{{route("tour.book", ["id" => $tour->id])}}" class="book-button">Book This Tour Now</a>
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

    <!-- Call to Action Section -->
    <section class="cta-section">
            <div class="cta-content">
                <h2 class="cta-title">Ready for an Unforgettable Experience?</h2>
                <p class="cta-text">Book this tour today and create memories that will last a lifetime. Limited spots available for the upcoming season!</p>
                <a href="#" class="cta-button">Reserve Your Spot Now</a>
            </div>
    </section>
</div>

<script>
        document.addEventListener('DOMContentLoaded', function() {
              // Configuration for available dates and special pricing
              const availableDates = {!! json_encode($tour->available_dates) !!};
              const availableDatesArr = availableDates ? JSON.parse(availableDates) : [];
              
              // Current selected date
              let selectedDate = null;
              
              // Current view month and year
              const today = new Date();
              let currentMonthIndex = today.getMonth();
              let currentYear = today.getFullYear();
        
              // Month names
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
                    
                    // Update the current month display
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
                    
                          }
                          
                        dateElement.dataset.date = formattedDate
                        calendarGrid.appendChild(dateElement);
                        const tourId = document.getElementById('tourData').dataset.tourId;

                        dateElement.addEventListener("click", ()=>{
                              window.location.href = `/tour/book/${tourId}/${dateElement.dataset.date}`;
                        })
                    }
              }
              
              // Function to select a date
              function selectDate(date) {
                    selectedDate = date;
                    // Reset all previously selected dates
                    document.querySelectorAll('.date.selected').forEach(el => {
                          el.classList.remove('selected');
                    });
                    
                    // Find and select the clicked date
                    document.querySelectorAll('.date').forEach(el => {
                          if (!el.classList.contains('empty') && 
                                new Date(`${currentYear}-${currentMonthIndex+1}-${el.textContent}`).toISOString().split('T')[0] === date) {
                                el.classList.add('selected');
                          }
                    });
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
              
              // Initialize FAQ accordion
              initFaqAccordion();
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
                          if (thumbs[index]) thumbs[index].classList.add('active');
                          
                          dots.forEach(dot => dot.classList.remove('active'));
                          if (dots[index]) dots[index].classList.add('active');
                          
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

        // Function to initialize FAQ accordion
        function initFaqAccordion() {
              const faqQuestions = document.querySelectorAll('.faq-question');
              const faqAnswers = document.querySelectorAll('.faq-answer');
              
              faqQuestions.forEach((question, index) => {
                    question.addEventListener('click', () => {
                          const isActive = question.classList.contains('active');
                          
                          // Close all questions
                          faqQuestions.forEach(q => q.classList.remove('active'));
                          faqAnswers.forEach(a => a.classList.remove('active'));
                          
                          // If the clicked question wasn't active, open it
                          if (!isActive) {
                                question.classList.add('active');
                                faqAnswers[index].classList.add('active');
                          }
                    });
              });
        }

        // // Mobile menu toggle
        // document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
        //       const navLinks = document.querySelector('.nav-links');
        //       navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
        // });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const reviewTexts = document.querySelectorAll('.review-text');
        
        reviewTexts.forEach(text => {
            const container = text.parentElement;
            const expandBtn = container.querySelector('.expand-btn');
            
            // テキストが切り詰められているかチェック
            if (text.scrollHeight > text.clientHeight) {
            expandBtn.style.display = 'block';
            
            // ボタンクリックで展開/折りたたみを切り替え
            expandBtn.addEventListener('click', function() {
                if (text.classList.contains('truncated')) {
                text.classList.remove('truncated');
                expandBtn.textContent = 'Show less';
                } else {
                text.classList.add('truncated');
                expandBtn.textContent = 'Read more';
                }
            });
            }
        });
    });
    </script>
    <script>
        // Expand/collapse functionality for day details
        document.querySelectorAll('.day-action-btn.details').forEach(btn => {
            btn.addEventListener('click', function() {
                    const dayElement = this.closest('.itinerary-day');
                    const scheduleElement = dayElement.querySelector('.day-schedule');
                    const computedStyle = window.getComputedStyle(scheduleElement);

                    console.log(computedStyle.display);
                    
                    
                    if (computedStyle.display=== 'none') {
                        scheduleElement.style.display = 'block';
                        this.innerHTML = '<i class="fas fa-minus-circle"></i><span>Hide Itinerary</span>';
                    } else {
                        scheduleElement.style.display = 'none';
                        this.innerHTML = '<i class="fas fa-info-circle"></i><span>Show Itinerary</span>';
                    }
            });
        });
</script>
<script src="{{mix("js/common.js")}}"></script>
@endsection