@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/tour_book.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://pay.google.com/gp/p/js/pay.js"></script>

@endsection

@section("main")
      @include('components.header')
      <input type="hidden" value="{{$tour->price}}" id="js_basic_price">
      <!-- Hero Section -->
      <section class="booking-hero">
            {{-- <img src="{{ asset('storage/' . $tour->hero_image) }}" alt="{{ $tour->title }}" class="booking-hero-image"> --}}
            <img src="https://picsum.photos/1920/500" alt="Booking" class="booking-hero-image">
            <div class="booking-hero-content">
                  <h1 class="booking-hero-title">Complete Your Booking</h1>
                  <p class="booking-hero-subtitle">Just a few steps away from your unforgettable adventure!</p>
            </div>
      </section>
<!-- Main Booking Section -->
<div class="container">
      <div class="booking-container">
            <!-- Booking Form -->
            <div class="booking-form-container">      
                  <h2 class="section-title">Book Your Tour</h2>
                  <!-- Error Display (Initially Hidden) -->
                  <div class="error-container" id="errorContainer">
                        <div class="error-box">
                              <div class="error-header">
                                    <div class="error-title">
                                          <div class="error-icon">
                                          <i class="fas fa-exclamation"></i>
                                          </div>
                                          Please fix the following errors:
                                    </div>
                                    <button class="error-close" onclick="hideError()">
                                          <i class="fas fa-times"></i>
                                    </button>
                              </div>
                              <ul class="error-list" id="errorList">
                                    <!-- Errors will be dynamically added here -->
                              </ul>
                        </div>
                  </div>
                  <!-- Form Progress -->
                  <div class="form-progress">
                        <div class="progress-bar"></div>
                              <div class="progress-step active" data-step="1">
                              <div class="step-number">1</div>
                              <div class="step-label">Personal Details</div>
                        </div>
                        <div class="progress-step" data-step="2">
                              <div class="step-number">2</div>
                              <div class="step-label">Tour Options</div>
                        </div>
                        <div class="progress-step" data-step="3">
                              <div class="step-number">3</div>
                              <div class="step-label">Payment</div>
                        </div>
                  </div>

                  <form id="booking-form">
                        <input type="hidden" value="{{$tour->id}}" name="tour_id">
                        <!-- Step 1: Personal Details -->
                        <div class="form-section active" id="step-1">
                              <div class="form-group">
                                    <label class="form-label">Full Name<span class="required">*</span></label>
                                    <input type="text" name="fullName" id="customer-name input-required" class="form-input" placeholder="Enter your full name" required>
                                    <div class="field-error hidden">Please enter your full name</div>
                              </div>
                              
                              <div class="input-group">
                                    <div class="form-group">
                                          <label class="form-label">Email Address<span class="required">*</span></label>
                                          <input type="email" name="email" id="customer-email" class="form-input input-required" placeholder="Enter your email" required>
                                          <div class="field-error hidden">Please enter a valid email address</div>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-label">Phone Number<span class="required">*</span></label>
                                          <input type="tel" name="phone" id="customer-phone" class="form-input input-required" placeholder="Enter your phone number" required>
                                          <div class="field-error hidden">Please enter a valid phone number</div>
                                    </div>
                              </div>
                              
                              <div class="input-group">
                                    <div class="form-group">
                                          <label class="form-label">Country<span class="required">*</span></label>
                                          <select id="customer-country" name="country" class="form-select select-required" required>
                                                <option value="" selected disabled>Select your country</option>
                                                <option value="us">United States</option>
                                                <option value="ca">Canada</option>
                                                <option value="uk">United Kingdom</option>
                                                <option value="au">Australia</option>
                                                <option value="jp">Japan</option>
                                          </select>
                                          <div class="field-error hidden">Please select your country</div>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-label">Number of Travelers<span class="required">*</span></label>
                                          <select id="travelers" name="number" class="form-select select-required" required>
                                                <option value="Select number of travelers" selected disabled>Select number of travelers</option>
                                                @php
                                                      for ($i = 1; $i < 100; $i++) { 
                                                            echo '<option value="' . $i . '">' . $i . ' Person</option>';
                                                      }
                                                @endphp
                                          </select>
                                          <div class="field-error hidden">Please select number of travelers</div>
                                    </div>
                              </div>
                              
                              <div class="form-group">
                                    <label class="form-label">Special Requests (Optional)</label>
                                    <textarea class="form-input" name="requests" rows="4" placeholder="Any special requirements or requests?"></textarea>
                              </div>
                              
                              <div class="form-actions">
                                    <button type="button" class="btn btn-secondary" onclick="history.back()">
                                          <i class="fas fa-arrow-left"></i> Back to Tour
                                    </button>
                                    <button type="button" class="btn btn-primary next-step">
                                          Continue <i class="fas fa-arrow-right"></i>
                                    </button>
                              </div>
                        </div>
                        
                        <!-- Step 2: Tour Options -->
                        <div class="form-section" id="step-2">
                              <div class="form-group">
                                    <label class="form-label">Select Tour Date<span class="required">*</span></label>
                                    <input type="text" id="date_range_start" placeholder="Choose a date" class="form-input">
                                    <input type="hidden" id="available_dates_input" >
                              </div>
                              
                              <div class="form-group">
                                    <label class="form-label">Itineary Options<span class="required">*</span></label>
                                    @foreach ($tour->itinerary as $index => $itinerary)
                                          <div class="option-card" {{$index == 0 ? "selected" : ""}} data-itinerary="{{$itinerary["title"]}}" data-price="{{$tour->price}}">
                                                <div classummary-itemsss="option-header">
                                                      <h3 class="option-title">{{$itinerary["title"]}}</h3>
                                                      <div class="option-price">￥{{ number_format($tour->price) }}</div>
                                                </div>
                                                <p class="option-description">{{$itinerary["description"]}}</p>
                                                <div class="option-features">
                                                      @foreach ($itinerary["itinerary_highlight"] as $highlight)
                                                            <div class="option-feature"><i class="fas fa-asterisk"></i>{{$highlight}}</div>
                                                      @endforeach
                                                </div>
                                          </div> 
                                    @endforeach
                              </div>
                              <div class="form-group">
                                    <label class="form-label">Additional Services</label>
                                    @foreach ($services as $index => $service)
                                          <div class="checkbox-group">
                                                <input type="checkbox" id="{{$service->id}}" data-price="{{$service->price}}" class="form-checkbox js_service_checkbox">
                                                <label for="{{$service->id}}">{{$service->service}} (￥{{$service->price}} per group)</label>
                                          </div>  
                                    @endforeach

                              </div>
                              
                              <div class="form-actions">
                                    <button type="button" class="btn btn-secondary prev-step">
                                          <i class="fas fa-arrow-left"></i> Back
                                    </button>
                                    <button type="button" class="btn btn-primary next-step">
                                          Continue <i class="fas fa-arrow-right"></i>
                                    </button>
                              </div>
                        </div>
                        
                        <!-- Step 3: Payment -->
                        <div class="form-section"  id="step-3">
                              <div class="payment-section">
                                    <div class="payment-header">
                                          <div class="payment-icon">
                                                <i class="fas fa-credit-card"></i>
                                          </div>
                                          <h3>Secure Payment</h3>
                                          <p>Complete your booking securely</p>
                                    </div>
                                    
                                    <div class="total-display">
                                          <div class="total-label">Total Amount</div>
                                          <div class="total-amount" id="payment-total">$2,598.00</div>
                                    </div>
                                    
                                    <!-- Payment Element-->
                                    <div id="payment-element">
                                          <!-- ここにGoogle Pay、Apple Pay、クレジットカード等が表示される -->
                                    </div>
                                    
                                    <div id="card-errors"></div>
                                    
                                    <!-- 決済ボタンを追加 -->
                                    <button id="submit-payment" class="payment-button">
                                          Complete Payment
                                    </button>
                                    
                                    <div class="security-badges">
                                          <div class="security-badge">
                                                <i class="fas fa-shield-alt"></i>
                                                <span>SSL Encrypted</span>
                                          </div>
                                          <div class="security-badge">
                                                <i class="fas fa-lock"></i>
                                                <span>Secure Payment</span>
                                          </div>
                                          <div class="security-badge">
                                                <i class="fas fa-credit-card"></i>
                                                <span>All Cards Accepted</span>
                                          </div>
                                    </div>
                              </div>
                              
                              <div class="form-actions">
                                    <button type="button" class="btn btn-secondary prev-step">
                                          <i class="fas fa-arrow-left"></i> Back
                                    </button>
                              </div>
                        </div>
                  </form>
            </div>
      
            <!-- Order Summary -->
            <div class="order-summary">
                  <div class="summary-header">
                        <h3 class="summary-title">Order Summary</h3>
                        <p class="summary-subtitle">Review your booking details</p>
                  </div>
                  
                  <div class="summary-body">
                        <div class="summary-tour">
                              <div class="tour-img-container">
                                    <img src="https://picsum.photos/400/200" alt="Tour" class="tour-img">
                              </div>
                              <h3 class="tour-name">{{$tour->title}}</h3>
                              <div class="tour-date-wrapper">
                                    <p class="tour-date"><i class="far fa-calendar-alt"></i> <span id="selected-date">Select date</span></p>
                                    <p class="tour-date"><i class="fas fa-users"></i> <span id="summary-travelers">1</span> Travelers</p>   
                              </div>
                        </div>
                        
                        <div class="summary-items">
                              <div class="summary-item">
                                    <div class="item-label">Basic price (per person) × <span class="js_number">1</span></div>
                                    <div class="item-value" id="package-total">￥<span class="tour-price">20,000</span></div>
                              </div>
                              <div class="summary-item">
                                    <div class="item-label">Taxes & Fees</div>
                                    <div class="item-value">Included</div>
                              </div>
                              <div class="summary-item">
                                    <div class="item-label">Additional services</div>
                                    <div class="item-value"><span class="additional-service-price">0</span></div>
                              </div>
                        </div>
                        
                        <div class="summary-total">
                              <div class="total-label">Total</div>
                              <div class="total-value" id="grand-total"><span class="total-price">￥{{$tour->price}}</span></div>
                        </div>
                        
                        <div class="summary-note">
                              <i class="fas fa-info-circle"></i>
                              <div>A 20% deposit (<span id="deposit-amount">$519.60</span>) will be charged now to secure your booking. The remaining balance is due 30 days before the tour date.</div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="{{mix("js/tour_book.js")}}"></script>
<script>
      
      // フラットピッカー初期化
      const rawValue = '<?php echo json_encode($date); ?>';
      let selectedDate;

      if(rawValue){
      selectedDate = JSON.parse(rawValue);
      document.getElementById("selected-date").innerHTML = selectedDate;
      }

      const singleDatePicker = flatpickr("#date_range_start", {
            dateFormat: "Y-m-d",
            minDate: "today",
            mode: "single",
            defaultDate: selectedDate,
            onChange: function(selectedDates, dateStr, instance) {
                  if (selectedDates.length > 0) {
                        const formattedDate = dateStr;
                        document.getElementById('available_dates_input').value = formattedDate;
                        document.getElementById('selected-date').textContent = formattedDate;
                  } else {
                        document.getElementById('available_dates_input').value = '';
                        document.getElementById('selected-date').textContent = 'Select date';
                  }
            }
      });

      
</script>
@endsection