@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
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
                                                    <i class="fas fa-utensils"></i>
                                                    <span class="day-feature-text">{{$highlight}}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    
                                        <div class="day-actions">
                                            <div class="day-action-btn details">
                                                <i class="fas fa-info-circle"></i>
                                                <span>More Details</span>
                                            </div>
                                            <div class="day-action-btn map">
                                                <i class="fas fa-map"></i>
                                                <span>View on Map</span>
                                            </div>
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
                            <div class="rating-value">4.8</div>
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="rating-count">based on 127 reviews</div>
                        </div>
                    </div>
                    
                    <div class="reviews-grid">
                        <div class="review-card">
                            <div class="review-header">
                                <img src="/api/placeholder/100/100" alt="Sarah Johnson" class="reviewer-avatar">
                                <div class="reviewer-info">
                                        <div class="reviewer-name">Sarah Johnson</div>
                                        <div class="review-date">April 15, 2025</div>
                                </div>
                            </div>
                            <div class="reviewer-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="review-text">This tour exceeded all my expectations! Our guide was incredibly knowledgeable and passionate about the history of each location. The itinerary was perfectly balanced between guided exploration and free time.</p>
                        </div>
                        
                        <div class="review-card">
                            <div class="review-header">
                                <img src="/api/placeholder/100/101" alt="Michael Torres" class="reviewer-avatar">
                                <div class="reviewer-info">
                                        <div class="reviewer-name">Michael Torres</div>
                                        <div class="review-date">April 8, 2025</div>
                                </div>
                            </div>
                            <div class="reviewer-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="review-text">Absolutely worth every penny! The small group size made the experience feel personal and intimate. The accommodations were comfortable and the food was delicious. Highly recommend!</p>
                        </div>
                            
                        <div class="review-card">
                            <div class="review-header">
                                <img src="/api/placeholder/100/102" alt="Emma Wilson" class="reviewer-avatar">
                                <div class="reviewer-info">
                                        <div class="reviewer-name">Emma Wilson</div>
                                        <div class="review-date">March 30, 2025</div>
                                </div>
                            </div>
                            <div class="reviewer-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="review-text">My family and I had an amazing time on this tour. It was well-organized from start to finish. The guide was friendly and accommodating, especially with our young children. Would book again!</p>
                        </div>
                    </div>
                </section>

                <!-- FAQ Section -->
                <section class="faq-section">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <div class="faq-grid">
                        <div class="faq-item">
                                <div class="faq-question">What should I pack for this tour?</div>
                                <div class="faq-answer">We recommend packing comfortable walking shoes, weather-appropriate clothing, sunscreen, a hat, a reusable water bottle, and a camera. For specific tours, you might need additional items like swimwear or hiking gear, which will be specified in your confirmation email.</div>
                        </div>
                        <div class="faq-item">
                                <div class="faq-question">Is this tour suitable for children?</div>
                                <div class="faq-answer">Yes, this tour is family-friendly and suitable for children of all ages. However, for younger children, please note that some days involve extensive walking. Feel free to contact us if you have specific concerns about your child's comfort during the tour.</div>
                        </div>
                        <div class="faq-item">
                                <div class="faq-question">What is the cancellation policy?</div>
                                <div class="faq-answer">You can cancel up to 48 hours before the start of your tour for a full refund. Cancellations less than 48 hours before the tour start time are non-refundable. In case of unexpected weather conditions or other circumstances beyond our control, we may offer an alternative date or a full refund.</div>
                        </div> 
                        <div class="faq-item">
                                <div class="faq-question">Are meals included in the tour price?</div>
                                <div class="faq-answer">Some meals are included as specified in the "What's Included" section. Typically, breakfast is included daily if you're staying at our partner hotels, and some lunches or dinners at select locations. Your guide will recommend local restaurants for meals not included in the package.</div>
                        </div>
                        <div class="faq-item">
                                <div class="faq-question">Is transportation provided during the tour?</div>
                                <div class="faq-answer">Yes, all transportation between destinations listed in the itinerary is included. This may be a combination of private vehicles, trains, or boats depending on the specific tour. Airport transfers on arrival and departure are also included if you book the complete package.</div>
                        </div>
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
                        <a href="#" class="book-button">Book This Tour Now</a>
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
                          
                          calendarGrid.appendChild(dateElement);
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

        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
              const navLinks = document.querySelector('.nav-links');
              navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
        });
  </script>
  <script>
        // Expand/collapse functionality for day details
        document.querySelectorAll('.day-action-btn.details').forEach(btn => {
              btn.addEventListener('click', function() {
                    const dayElement = this.closest('.itinerary-day');
                    const scheduleElement = dayElement.querySelector('.day-schedule');
                    
                    if (scheduleElement.style.display === 'none') {
                          scheduleElement.style.display = 'block';
                          this.innerHTML = '<i class="fas fa-minus-circle"></i><span>Less Details</span>';
                    } else {
                          scheduleElement.style.display = 'none';
                          this.innerHTML = '<i class="fas fa-info-circle"></i><span>More Details</span>';
                    }
              });
        });
  </script>
@endsection