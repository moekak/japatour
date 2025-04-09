@extends('layout.default')
@section("main")
      @include('components.header')
      <!-- Hero Section -->
      <section class="hero">
            <img src="{{asset("img/show/enoshima.jpg")}}" alt="Kyoto Temples" class="hero-image">
            <div class="discount-badge">SAVE 15%</div>
            <div class="hero-content">
                  <h1 class="hero-title">Kyoto, Nara & Osaka</h1>
                  <p class="hero-subtitle">3-Day Historical Journey Through Japan's Ancient Capitals</p>
                  <div class="hero-badge">Best Seller</div>
            </div>
      </section>
      
      <!-- Quick Info -->
      <div class="container">
            <div class="quick-info">
            <div class="info-item">
                  <div class="info-icon"><i class="fas fa-calendar-alt"></i></div>
                  
                  <div class="info-title">Duration</div>
                  <div class="info-content">3 Days / 2 Nights</div>
            </div>
            <div class="info-item">
                  <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                  <div class="info-title">Destinations</div>
                  <div class="info-content">Kyoto, Nara, Osaka</div>
            </div>
            <div class="info-item">
                  <div class="info-icon"><i class="fas fa-users"></i></div>
                  <div class="info-title">Group Size</div>
                  <div class="info-content">Max 12 People</div>
            </div>
            <div class="info-item">
                  <div class="info-icon"><i class="fas fa-language"></i></div>
                  <div class="info-title">Languages</div>
                  <div class="info-content">English, Japanese</div>
            </div>
            </div>
            
      <!-- Main Content -->
      <div class="main-content">
            <!-- Left Content -->
            <div class="content-left">
                  <!-- Tour Preview Images -->
                  <div class="tour-preview">
                        <img src="{{asset("img/show/enoshima2.jpg")}}" alt="Kinkaku-ji (Golden Pavilion)" class="preview-main">
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
                        <img src="{{asset("img/show/enoshima2.jpg")}}" alt="Kinkaku-ji (Golden Pavilion)" class="thumb active">
                        <img src="{{asset("img/show/enoshima3.jpg")}}" alt="Nara Park Deer" class="thumb">
                        <img src="{{asset("img/show/enoshima5.jpg")}}" alt="Osaka Castle" class="thumb">
                  </div>
            </div>
              
              <!-- Tour Overview -->
              <section class="section tour-overview">
                  <h2 class="section-title">Tour Overview</h2>
                  <p>Experience the best of Japan's cultural heritage in this 3-day journey through the historic cities of Kyoto, Nara, and Osaka. From ancient temples and shrines to modern culinary experiences, this tour offers a perfect blend of Japan's traditional past and vibrant present.</p>
                  <p>Beginning in Kyoto, Japan's cultural capital for over 1,000 years, you'll visit UNESCO World Heritage sites before traveling to Nara, home to friendly deer and impressive Buddhist monuments. The journey concludes in Osaka, where you'll experience contemporary Japan through its castle, lively districts, and renowned food culture.</p>
                  
                  <div class="highlights">
                      <h3 class="highlights-title">Tour Highlights</h3>
                      <ul class="highlights-list">
                          <li>Visit Kyoto's UNESCO World Heritage Sites</li>
                          <li>Interact with sacred deer at Nara Park</li>
                          <li>Explore the iconic Fushimi Inari Shrine</li>
                          <li>Tour Osaka Castle and its surroundings</li>
                          <li>Experience authentic Japanese cuisine</li>
                          <li>Optional traditional tea ceremony</li>
                      </ul>
                  </div>
              </section>
              
              <!-- Itinerary Details -->
              <section class="section tour-itinerary">
                  <h2 class="section-title">Detailed Itinerary</h2>
                  
                  <!-- Day 1 -->
                  <div class="itinerary-day">
                      <h3 class="day-title" data-day="1">Kyoto Exploration</h3>
                      <div class="day-content">
                          <p class="day-description">After meeting at Kyoto Station, we'll visit the iconic Golden Pavilion (Kinkaku-ji) and Kiyomizu Temple. In the afternoon, we'll explore the famous torii gates of Fushimi Inari Shrine, followed by a traditional Kyoto kaiseki dinner.</p>
                          <div class="day-timeline">
                              <div class="schedule-item">
                                  <div class="schedule-time">9:00 AM</div>
                                  <div class="schedule-description">Meet at Kyoto Station, tour orientation</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">10:00 AM</div>
                                  <div class="schedule-description">Visit Kinkaku-ji (Golden Pavilion)</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">12:00 PM</div>
                                  <div class="schedule-description">Lunch featuring Kyoto's famous tofu cuisine</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">2:00 PM</div>
                                  <div class="schedule-description">Explore Kiyomizu Temple & Sannenzaka slopes</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">4:00 PM</div>
                                  <div class="schedule-description">Visit Fushimi Inari Shrine's thousand torii gates</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">6:30 PM</div>
                                  <div class="schedule-description">Traditional Kyoto kaiseki dinner, hotel check-in</div>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <!-- Day 2 -->
                  <div class="itinerary-day">
                      <h3 class="day-title" data-day="2">Nara Day Trip</h3>
                      <div class="day-content">
                          <p class="day-description">Travel by train to Nara, Japan's first permanent capital. Visit Todai-ji Temple with its Great Buddha statue and explore Nara Park with its friendly deer. After visiting Kasuga Taisha Shrine, return to Kyoto for an evening at leisure.</p>
                          <div class="day-timeline">
                              <div class="schedule-item">
                                  <div class="schedule-time">8:30 AM</div>
                                  <div class="schedule-description">Depart hotel for Nara</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">9:30 AM</div>
                                  <div class="schedule-description">Arrive in Nara, visit Todai-ji Temple</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">11:00 AM</div>
                                  <div class="schedule-description">Explore Nara Park (interact with friendly deer)</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">12:30 PM</div>
                                  <div class="schedule-description">Lunch featuring Nara specialties</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">2:00 PM</div>
                                  <div class="schedule-description">Visit Kasuga Taisha Shrine</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">3:30 PM</div>
                                  <div class="schedule-description">Explore Naramachi historical district</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">5:00 PM</div>
                                  <div class="schedule-description">Return to Kyoto, evening at leisure</div>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                  <!-- Day 3 -->
                  <div class="itinerary-day">
                      <h3 class="day-title" data-day="3">Osaka Adventure</h3>
                      <div class="day-content">
                          <p class="day-description">Travel to vibrant Osaka and visit Osaka Castle and its surrounding park. Experience local Osaka cuisine with a street food lunch, then explore Tennoji district before finishing at the lively Dotonbori and Shinsaibashi areas.</p>
                          <div class="day-timeline">
                              <div class="schedule-item">
                                  <div class="schedule-time">9:00 AM</div>
                                  <div class="schedule-description">Hotel checkout, travel to Osaka</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">10:30 AM</div>
                                  <div class="schedule-description">Osaka Castle and park exploration</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">12:30 PM</div>
                                  <div class="schedule-description">Osaka street food experience (takoyaki & okonomiyaki)</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">2:00 PM</div>
                                  <div class="schedule-description">Tennoji area and Shinsekai district</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">4:00 PM</div>
                                  <div class="schedule-description">Dotonbori & Shinsaibashi exploration</div>
                              </div>
                              <div class="schedule-item">
                                  <div class="schedule-time">6:00 PM</div>
                                  <div class="schedule-description">Tour conclusion at Osaka Station</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
          </div>
          
          <!-- Right Content (Pricing Information) -->
          <div class="content-right">
              <div class="tour-details">
                  <div class="pricing-header">
                      <div class="price">$680</div>
                      <p class="price-note">per person (based on double occupancy)</p>
                  </div>
                  
                  <div class="pricing-body">
                      <div class="detail-row">
                          <span class="detail-label">Duration</span>
                          <span class="detail-value">3 Days</span>
                      </div>
                      <div class="detail-row">
                          <span class="detail-label">Start/End</span>
                          <span class="detail-value">Kyoto/Osaka</span>
                      </div>
                      <div class="detail-row">
                          <span class="detail-label">Min. Participants</span>
                          <span class="detail-value">4 people</span>
                      </div>
                      <div class="detail-row">
                          <span class="detail-label">Max. Group Size</span>
                          <span class="detail-value">12 people</span>
                      </div>
                      <div class="detail-row">
                          <span class="detail-label">Accommodation</span>
                          <span class="detail-value">4-star Kyoto hotel</span>
                      </div>
                      <div class="detail-row">
                          <span class="detail-label">Departure Dates</span>
                          <span class="detail-value">Tue, Thu, Sat</span>
                      </div>
                      
                      <div class="limited-spots">
                          <i class="fas fa-exclamation-circle"></i> Only 5 spots left for May dates!
                      </div>
                      
                      <a href="#" class="book-button">Book Now</a>
                      
                      <div class="includes-section">
                          <h3 class="includes-title">What's Included</h3>
                          <ul class="includes-list">
                              <li>Accommodation (2 nights with breakfast)</li>
                              <li>Lunch (all 3 days)</li>
                              <li>Welcome dinner (Day 1)</li>
                              <li>Professional English-speaking guide</li>
                              <li>All entrance fees to attractions</li>
                              <li>Transportation between Kyoto, Nara and Osaka</li>
                          </ul>
                          
                          <h3 class="includes-title">What's Not Included</h3>
                          <ul class="not-includes-list">
                              <li>Transportation to Kyoto/from Osaka</li>
                              <li>Dinner on Day 2</li>
                              <li>Optional activities and tours</li>
                              <li>Personal expenses</li>
                              <li>Travel insurance</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <script>
      // Thumbnail and gallery functionality
      const thumbs = document.querySelectorAll('.thumb');
      const mainImage = document.querySelector('.preview-main');
      const dots = document.querySelectorAll('.preview-dot');
      const prevBtn = document.querySelector('.prev-image');
      const nextBtn = document.querySelector('.next-image');
      
      // Image sources for the gallery
      const imageSources = [
            // 以下のいずれかの方法を使用
            '/img/show/enoshima2.jpg', // publicフォルダからの相対パス (/ から始まる)
            '/img/show/enoshima3.jpg',  // 現在のページからの相対パス
            '/img/show/enoshima5.jpg',  // 現在のページからの相対パス
      ];

      
      
      // Image alt texts
      const imageAlts = [
            'Kinkaku-ji (Golden Pavilion)',
            'Nara Park Deer',
            'Osaka Castle',
            'Fushimi Inari Shrine',
            'Dotonbori District'
      ];
      
      let currentImageIndex = 0;
      
      // Function to update active image
      function updateActiveImage(index) {
            mainImage.src = imageSources[index];
            mainImage.alt = imageAlts[index];
            
            // Update active thumb and dot
            thumbs.forEach(thumb => thumb.classList.remove('active'));
            thumbs[index].classList.add('active');
            
            dots.forEach(dot => dot.classList.remove('active'));
            dots[index].classList.add('active');
            
            currentImageIndex = index;
      }
      
      // Add click event to thumbnails
      thumbs.forEach((thumb, index) => {
            thumb.addEventListener('click', () => {
                  updateActiveImage(index);
            });
      });
      
      // Add click event to dots
      dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                  updateActiveImage(index);
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
      </script>
@endsection
