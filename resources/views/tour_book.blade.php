@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/tour_book.css') }}">

@endsection

@section("main")
      @include('components.header')
      <!-- Hero Section for Booking -->
      <section class="booking-hero">
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

            <form id="payment-form">
                  <!-- Step 1: Personal Details -->
                  <div class="form-section active" id="step-1">
                        <div class="form-group">
                              <label class="form-label">Full Name*</label>
                              <input type="text" class="form-input" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="input-group">
                              <div class="form-group">
                                    <label class="form-label">Email Address*</label>
                                    <input type="email" class="form-input" placeholder="Enter your email" required>
                              </div>
                              <div class="form-group">
                                    <label class="form-label">Phone Number*</label>
                                    <input type="tel" class="form-input" placeholder="Enter your phone number" required>
                              </div>
                        </div>
                        
                        <div class="input-group">
                              <div class="form-group">
                                    <label class="form-label">Country*</label>
                                    <select class="form-select" required>
                                          <option value="" selected disabled>Select your country</option>
                                          <option value="us">United States</option>
                                          <option value="ca">Canada</option>
                                          <option value="uk">United Kingdom</option>
                                          <option value="au">Australia</option>
                                          <option value="jp">Japan</option>
                                          <!-- More countries -->
                                    </select>
                              </div>
                              <div class="form-group">
                                    <label class="form-label">Number of Travelers*</label>
                                    <select class="form-select" required>
                                          <option value="1">1 Person</option>
                                          <option value="2" selected>2 People</option>
                                          <option value="3">3 People</option>
                                          <option value="4">4 People</option>
                                          <option value="5">5 People</option>
                                          <option value="6">6 People</option>
                                    </select>
                              </div>
                        </div>
                        
                        <div class="form-group">
                              <label class="form-label">Special Requests (Optional)</label>
                              <textarea class="form-input" rows="4" placeholder="Any special requirements or requests?"></textarea>
                        </div>
                        
                        <div class="form-actions">
                              <a href="#" class="btn"><i class="fas fa-arrow-left"></i> Back to Tour</a>
                              <button type="button" class="btn btn-primary next-step">Continue <i class="fas fa-arrow-right"></i></button>
                        </div>
                  </div>
                  
                  <!-- Step 2: Tour Options -->
                  <div class="form-section" id="step-2">
                        <div class="form-group">
                              <label class="form-label">Select Tour Date*</label>
                              <input type="date" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                              <label class="form-label">Accommodation Options*</label>
                              <div class="option-card selected">
                                    <div class="option-header">
                                          <h3 class="option-title">Standard Package</h3>
                                          <div class="option-price">$1,299</div>
                                    </div>
                                    <p class="option-description">Comfortable 3-star hotels with all the essential amenities for a pleasant stay.</p>
                                    <div class="option-features">
                                          <div class="option-feature"><i class="fas fa-bed"></i> Private Room</div>
                                          <div class="option-feature"><i class="fas fa-wifi"></i> Free WiFi</div>
                                          <div class="option-feature"><i class="fas fa-utensils"></i> Breakfast</div>
                                    </div>
                              </div>
                              
                              <div class="option-card">
                                    <div class="option-header">
                                          <h3 class="option-title">Premium Package</h3>
                                          <div class="option-price">$1,699</div>
                                    </div>
                                    <p class="option-description">Upscale 4-star accommodations with additional amenities and more spacious rooms.</p>
                                    <div class="option-features">
                                          <div class="option-feature"><i class="fas fa-bed"></i> Deluxe Room</div>
                                          <div class="option-feature"><i class="fas fa-wifi"></i> Free WiFi</div>
                                          <div class="option-feature"><i class="fas fa-utensils"></i> Breakfast & Dinner</div>
                                          <div class="option-feature"><i class="fas fa-swimmer"></i> Pool Access</div>
                                    </div>
                              </div>
                        
                              <div class="option-card">
                                    <div class="option-header">
                                          <h3 class="option-title">Luxury Package</h3>
                                          <div class="option-price">$2,299</div>
                                    </div>
                                    <p class="option-description">5-star luxury accommodations with premium services and exclusive experiences.</p>
                                    <div class="option-features">
                                          <div class="option-feature"><i class="fas fa-bed"></i> Suite</div>
                                          <div class="option-feature"><i class="fas fa-wifi"></i> Free WiFi</div>
                                          <div class="option-feature"><i class="fas fa-utensils"></i> All Meals</div>
                                          <div class="option-feature"><i class="fas fa-swimmer"></i> Pool & Spa</div>
                                          <div class="option-feature"><i class="fas fa-glass-cheers"></i> Welcome Drink</div>
                                    </div>
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="form-label">Additional Services</label>
                              
                              <div class="checkbox-group">
                                    <input type="checkbox" id="airport-transfer" class="form-checkbox">
                                    <label for="airport-transfer">Airport Transfer ($50 per person)</label>
                              </div>
                              
                              <div class="checkbox-group">
                                    <input type="checkbox" id="guided-tour" class="form-checkbox">
                                    <label for="guided-tour">Private Guided Tour ($150 per group)</label>
                              </div>
                              
                              <div class="checkbox-group">
                                    <input type="checkbox" id="travel-insurance" class="form-checkbox">
                                    <label for="travel-insurance">Travel Insurance ($75 per person)</label>
                              </div>
                        </div>
                        
                        <div class="form-actions">
                              <button type="button" class="btn btn-secondary prev-step"><i class="fas fa-arrow-left"></i> Back</button>
                              <button type="button" class="btn btn-primary next-step">Continue <i class="fas fa-arrow-right"></i></button>
                        </div>
                  </div>
                  <!-- Step 3: Payment -->
                  <div class="form-section" id="step-3">
                        <div class="form-group">
                              <label class="form-label">Payment Method</label>
                              
                              {{-- <div class="payment-option selected">
                                    <input type="radio" name="payment-method" id="credit-card" class="payment-radio" checked>
                                    <label for="credit-card">Credit/Debit Card</label>
                                    <img src="https://picsum.photos/120/40" alt="Credit Cards" class="payment-logo">
                              </div> --}}
                              
                              <div class="payment-option">
                                    <input type="radio" name="payment-method" id="paypal" class="payment-radio">
                                    <label for="paypal">PayPal</label>
                                    <img src="https://picsum.photos/80/40" alt="PayPal" class="payment-logo">
                              </div>
                        </div>
                        
                        <div class="form-group">
                              <div id="card-element"><!-- Stripeがここにカード入力欄を描画 --></div>
                              <div id="card-errors" role="alert" style="color:red;"></div>
                              {{-- <label class="form-label">Card Information</label>
                              <!-- Stripe Card Element would go here -->
                              <div class="card-element">
                                    <!-- Stripe Elements Placeholder -->
                                    <p style="color: #95A5A6; text-align: center;">Stripe Card Element will be rendered here</p>
                              </div>
                              
                              <div class="input-group">
                                    <div class="form-group">
                                          <label class="form-label">Name on Card</label>
                                          <input type="text" class="form-input" placeholder="Enter name as it appears on card">
                                    </div>
                                    <div class="form-group">
                                          <label class="form-label">Billing Zip/Postal Code</label>
                                          <input type="text" class="form-input" placeholder="Enter billing zip code">
                                    </div>
                              </div> --}}
                        </div>
                        
                        <div class="checkbox-group">
                              <input type="checkbox" id="terms" class="form-checkbox" required>
                              <label for="terms">I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Cancellation Policy</a></label>
                        </div>
                        
                        <div class="form-actions">
                              <button type="button" class="btn btn-secondary prev-step"><i class="fas fa-arrow-left"></i> Back</button>
                              <button type="button" class="btn btn-success" id="complete-booking"><i class="fas fa-check"></i> Complete Booking</button>
                        </div>
                  </div>
                  
                  <!-- Confirmation (Hidden initially) -->
                  <div class="form-section" id="confirmation">
                        <div class="booking-confirmation">
                              <div class="confirmation-icon">
                                    <i class="fas fa-check"></i>
                              </div>
                              <h2 class="confirmation-title">Booking Confirmed!</h2>
                              <p class="confirmation-message">
                              Thank you for booking with us! We've sent a confirmation email to your provided email address with all the details of your booking.
                              </p>
                              
                              <div class="booking-details">
                                    <div class="booking-detail">
                                          <div class="detail-label">Booking Reference:</div>
                                          <div class="detail-value">TE-23456789</div>
                                    </div>
                                    <div class="booking-detail">
                                          <div class="detail-label">Tour:</div>
                                          <div class="detail-value">Majestic Mountain Explorer</div>
                                    </div>
                                    <div class="booking-detail">
                                          <div class="detail-label">Date:</div>
                                          <div class="detail-value">May 15, 2025</div>
                                    </div>
                                    <div class="booking-detail">
                                          <div class="detail-label">Travelers:</div>
                                          <div class="detail-value">2 Adults</div>
                                    </div>
                                    <div class="booking-detail">
                                          <div class="detail-label">Total Amount:</div>
                                          <div class="detail-value">$2,598.00</div>
                                    </div>
                              </div>
                              <a href="#" class="btn btn-primary"><i class="fas fa-home"></i> Back to Home</a>
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
                        <h3 class="tour-name">Majestic Mountain Explorer</h3>
                        <div class="tour-date-wrapper">
                              <p class="tour-date"><i class="far fa-calendar-alt"></i> May 15, 2025</p>
                              <p class="tour-date"><i class="fas fa-users"></i> 2 Travelers</p>   
                        </div>
                        
                  </div>
                  
                  <div class="summary-items">
                        <div class="summary-item">
                              <div class="item-label">Tour Package (2 × $1,299)</div>
                              <div class="item-value">$2,598.00</div>
                        </div>
                        <div class="summary-item">
                              <div class="item-label">Accommodation Upgrade</div>
                              <div class="item-value">$0.00</div>
                        </div>
                        <div class="summary-item">
                              <div class="item-label">Additional Services</div>
                              <div class="item-value">$0.00</div>
                        </div>
                        <div class="summary-item">
                              <div class="item-label">Taxes & Fees</div>
                              <div class="item-value">Included</div>
                        </div>
                  </div>
                  
                  <div class="summary-total">
                        <div class="total-label">Total</div>
                        <div class="total-value">$2,598.00</div>
                  </div>
                  
                  <div class="summary-note">
                        <i class="fas fa-info-circle"></i>
                        <div>A 20% deposit ($519.60) will be charged now to secure your booking. The remaining balance is due 30 days before the tour date.</div>
                  </div>
            </div>
            </div>
      </div>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script>
      const stripe = Stripe("{{ config('services.stripe.key') }}", {locale: 'en'});
      let elements = stripe.elements();
      const style = {
            base: {
                  color: "#000",
                  fontSize: "16px",
                  fontFamily: "'Helvetica Neue', sans-serif",
                  fontSmoothing: "antialiased",
                  "::placeholder": {
                        color: "#888"
                  },
                  iconColor: "#666"
            },
            invalid: {
                  color: "#e3342f",
                  iconColor: "#e3342f"
            }
      };
      let card = elements.create('card', { style: style });
      card.mount('#card-element');

      card.on('change', function(event) {
          const displayError = document.getElementById('card-errors');
          displayError.textContent = event.error ? event.error.message : '';
      });

      const form = document.getElementById('payment-form');
      form.addEventListener('submit', async function(e) {
            e.preventDefault();

          // LaravelからPaymentIntentのclient_secretを取得
          const response = await fetch('/payment-intent', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
          });
          const { clientSecret } = await response.json();

          const result = await stripe.confirmCardPayment(clientSecret, {
              payment_method: {
                  card: card,
                  billing_details: { name: 'テストユーザー' }
              }
          });

          if (result.error) {
            console.log(result.error);
            
              document.getElementById('card-errors').textContent = result.error.message;
          } else {
              if (result.paymentIntent.status === 'succeeded') {
                  alert('支払いが完了しました！');
                  // location.href = '/thanks'; // 任意でリダイレクトも可
              }
          }
      });
  </script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get form sections and progress steps
        const formSections = document.querySelectorAll('.form-section');
        const progressSteps = document.querySelectorAll('.progress-step');
        const progressBar = document.querySelector('.progress-bar');
        
        // Navigation buttons
        const nextButtons = document.querySelectorAll('.next-step');
        const prevButtons = document.querySelectorAll('.prev-step');
        const completeButton = document.getElementById('complete-booking');
        
        // Current step tracker
        let currentStep = 1;
        
        // Update the progress bar
        function updateProgress(step) {
            const percent = ((step - 1) / (progressSteps.length - 1)) * 100;
            progressBar.style.width = `${percent}%`;
            
            // Update step status
            progressSteps.forEach((stepEl, idx) => {
                const stepNum = idx + 1;
                if (stepNum < step) {
                  //   stepEl.classList.add('completed');
                  //   stepEl.classList.remove('active');
                } else if (stepNum === step) {
                    stepEl.classList.add('active');
                  //   stepEl.classList.remove('completed');
                } else {
                  //   stepEl.classList.remove('active', 'completed');
                }
            });
        }
        
        // Show a specific step
        function showStep(step) {
            formSections.forEach((section, idx) => {
                if (idx + 1 === step) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
            
            updateProgress(step);
            currentStep = step;
            
            // Update summary based on selections
            updateSummary();
        }
        
        // Handle next button clicks
        nextButtons.forEach(button => {
            button.addEventListener('click', () => {
                if (currentStep < formSections.length) {
                    showStep(currentStep + 1);
                }
            });
        });
        
        // Handle previous button clicks
        prevButtons.forEach(button => {
            button.addEventListener('click', () => {
                if (currentStep > 1) {
                    showStep(currentStep - 1);
                }
            });
        });
        
        // Handle complete booking button
        completeButton.addEventListener('click', () => {
            // In a real app, you would validate and process the payment here
            // For this demo, we'll just show the confirmation
            showStep(4); // The confirmation is the 4th section
        });
        
        // Handle accommodation option selection
        const optionCards = document.querySelectorAll('.option-card');
        optionCards.forEach(card => {
            card.addEventListener('click', () => {
                optionCards.forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
                updateSummary();
            });
        });
        
        // Handle payment option selection
        const paymentOptions = document.querySelectorAll('.payment-option');
        paymentOptions.forEach(option => {
            option.addEventListener('click', () => {
                paymentOptions.forEach(o => o.classList.remove('selected'));
                option.classList.add('selected');
                const radio = option.querySelector('input[type="radio"]');
                radio.checked = true;
            });
        });
        
        // Update order summary based on selections
        function updateSummary() {
            // In a real app, you would calculate the totals based on all selections
            const selectedPackage = document.querySelector('.option-card.selected .option-title');
            const packagePrice = document.querySelector('.option-card.selected .option-price');
            
            if (selectedPackage && packagePrice) {
                document.querySelector('.summary-item:first-child .item-label').textContent = 
                    `${selectedPackage.textContent} (2 × ${packagePrice.textContent})`;
                
                // Calculate and update total
                const price = parseFloat(packagePrice.textContent.replace('$', ''));
                const total = price * 2;
                document.querySelector('.summary-item:first-child .item-value').textContent = `$${total.toFixed(2)}`;
                document.querySelector('.total-value').textContent = `$${total.toFixed(2)}`;
                
                // Update deposit note
                const deposit = total * 0.2;
                document.querySelector('.summary-note div').textContent = 
                    `A 20% deposit ($${deposit.toFixed(2)}) will be charged now to secure your booking. The remaining balance is due 30 days before the tour date.`;
            }
            
            // Add additional services if selected
            const additionalServices = [];
            const checkboxes = document.querySelectorAll('.form-checkbox:checked');
            checkboxes.forEach(checkbox => {
                if (checkbox.id !== 'terms') {
                    additionalServices.push(checkbox.nextElementSibling.textContent);
                }
            });
            
            // In a real app, you would update the additional services line item too
        }
        
        // Initialize the form
        showStep(1);
    });
</script>
@endsection