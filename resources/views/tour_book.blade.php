@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/tour_book.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://pay.google.com/gp/p/js/pay.js"></script>

@endsection

@section("main")
      @include('components.header')
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
                        <!-- Step 1: Personal Details -->
                        <div class="form-section active" id="step-1">
                              <div class="form-group">
                                    <label class="form-label">Full Name<span class="required">*</span></label>
                                    <input type="text" id="customer-name" class="form-input" placeholder="Enter your full name" required>
                              </div>
                              
                              <div class="input-group">
                                    <div class="form-group">
                                          <label class="form-label">Email Address<span class="required">*</span></label>
                                          <input type="email" id="customer-email" class="form-input" placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-label">Phone Number<span class="required">*</span></label>
                                          <input type="tel" id="customer-phone" class="form-input" placeholder="Enter your phone number" required>
                                    </div>
                              </div>
                              
                              <div class="input-group">
                                    <div class="form-group">
                                          <label class="form-label">Country<span class="required">*</span></label>
                                          <select id="customer-country" class="form-select" required>
                                                <option value="" selected disabled>Select your country</option>
                                                <option value="us">United States</option>
                                                <option value="ca">Canada</option>
                                                <option value="uk">United Kingdom</option>
                                                <option value="au">Australia</option>
                                                <option value="jp">Japan</option>
                                          </select>
                                    </div>
                                    <div class="form-group">
                                          <label class="form-label">Number of Travelers<span class="required">*</span></label>
                                          <select id="travelers" class="form-select" required>
                                                <option value="Select number of travelers" selected disabled>Select number of travelers</option>
                                                <option value="1">1 Person</option>
                                                <option value="2">2 People</option>
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
                                    <input type="hidden" id="available_dates_input" name="available_dates">
                              </div>
                              
                              <div class="form-group">
                                    <label class="form-label">Itineary Options<span class="required">*</span></label>
                                    @foreach ($tour->itinerary as $index => $itinerary)
                                          <div class="option-card" {{$index == 0 ? "selected" : ""}} data-itinerary="{{$itinerary["title"]}}" data-price="1299">
                                                <div clasummary-itemsss="option-header">
                                                      <h3 class="option-title">{{$itinerary["title"]}}</h3>
                                                      <div class="option-price">￥{{$tour->price}}</div>
                                                </div>
                                                <p class="option-description">5-star luxury accommodations with premium services and exclusive experiences.</p>
                                                <div class="option-features">
                                                      @foreach ($itinerary["itinerary_highlight"] as $highlight)
                                                            <div class="option-feature"><i class="fas fa-bed"></i>{{$highlight}}</div>
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
                              <div class="total-value" id="grand-total"><span class="total-price">20,000</span></div>
                        </div>
                        
                        <div class="summary-note">
                              <i class="fas fa-info-circle"></i>
                              <div>A 20% deposit (<span id="deposit-amount">$519.60</span>) will be charged now to secure your booking. The remaining balance is due 30 days before the tour date.</div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<script src="{{mix("js/tour_book.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
      // Stripe初期化
      const stripe = Stripe('pk_test_51RFVYHIm3ld88wDBI6fJgwCohTKZhiE1L5bHpiNwvNczVxxQYlifsyNb5FVOYrFdo7ReMSsyOFRPzFjoMQCksqdk00fC6BwA2O');
      let paymentElement;
      let elements; // グローバル変数として宣言
      
      // PaymentIntent作成関数
      async function createPaymentIntent() {
            return fetch('/api/create-payment-intent', {
                  method: 'POST',
                  headers: {
                        'Content-Type': 'application/json',
                  },
            });
      }
      
      // Payment Element初期化関数
      
      async function initializePaymentElement() {
            try {
                  const response = await createPaymentIntent();
                  const data = await response.json();
                  
                  if (!response.ok) {
                        throw new Error(data.error || 'Payment Intent creation failed');
                  }
                  
                  // Payment Elementを初期化
                  elements = stripe.elements({
                        clientSecret: data.clientSecret,
                        locale: 'en', // この行を追加
                        appearance: {
                              theme: 'stripe',
                              // その他の外観設定
                        },
                        paymentMethods: {
                              applePay: 'always',
                              googlePay: 'always',
                              link: 'always'
                        }
                  });

            
                  // デバッグ：Payment Request の可用性を確認
                  const paymentRequest = stripe.paymentRequest({
                        country: 'US',
                        currency: 'usd',
                        total: {
                              label: 'Tour Booking',
                              amount: 259800,
                        },
                        requestPayerName: true,
                        requestPayerEmail: true,
                  });
                  
                  const result = await paymentRequest.canMakePayment();
                  paymentElement = elements.create('payment', {
                        layout: 'tabs',
                        defaultValues: {
                              billingDetails: {
                                    name: document.getElementById('customer-name')?.value || '',
                                    email: document.getElementById('customer-email')?.value || '',
                              }
                        }
                  });
            
                  // Payment Elementをマウント
                  paymentElement.mount('#payment-element');
                  
                  // デバッグ：Payment Elementに何が表示されているかを確認
                  paymentElement.on('ready', () => {
                        console.log('Payment Element is ready');
                  });
                  
                  // エラーハンドリング
                  paymentElement.on('change', (event) => {
                        console.log('Payment Element changed:', event);
                        const displayError = document.getElementById('card-errors');
                        if (event.error && displayError) {
                              displayError.textContent = event.error.message;
                        } else if (displayError) {
                              displayError.textContent = '';
                        }
                  });
            
            } catch (error) {
                  console.error('Error:', error);
                  const displayError = document.getElementById('card-errors');
                  if (displayError) {
                        displayError.textContent = 'Failed to initialize payment. Please try again.';
                  }
            }
      }






      // フラットピッカー初期化
      const rawValue = '<?php echo json_encode($date); ?>';
      let selectedDate

      if(rawValue){
            selectedDate = JSON.parse(rawValue);
            document.getElementById("selected-date").innerHTML = selectedDate
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
      
      // ステップ管理
      let currentStep = 1;
      let selectedPackage = 'standard';
      let packagePrice = 1299;
      
      function updateProgress(step) {
            const progressBar = document.querySelector('.progress-bar');
            const progressSteps = document.querySelectorAll('.progress-step');
            
            // Progress bar update
            const percent = ((step - 1) / (progressSteps.length - 1)) * 100;
            progressBar.style.width = `${percent}%`;
            
            // Step status update
            progressSteps.forEach((stepEl, idx) => {
                  const stepNum = idx + 1;
                  stepEl.classList.remove('active', 'completed');
                  
                  if (stepNum < step) {
                        stepEl.classList.add('completed');
                  } else if (stepNum === step) {
                        stepEl.classList.add('active');
                  }
            });
      }
      
      function showStep(step) {
            const formSections = document.querySelectorAll('.form-section');
            formSections.forEach((section, idx) => {
                  section.classList.remove('active');
                  if (idx + 1 === step) {
                        section.classList.add('active');
                  }
            });
            
            updateProgress(step);
            currentStep = step;
            
            // Step 3に移動したときにPayment Elementを初期化
            if (step === 3) {
                  initializePaymentElement();
            }
            
            updateSummary();
      }
      
      // Next/Previous button handlers
      document.querySelectorAll('.next-step').forEach(button => {
            button.addEventListener('click', () => {
                  if (currentStep < 3) {
                        showStep(currentStep + 1);
                  }
            });
      });
      
      document.querySelectorAll('.prev-step').forEach(button => {
            button.addEventListener('click', () => {
                  if (currentStep > 1) {
                        showStep(currentStep - 1);
                  }
            });
      });

      // // カンマを取り除いて数値に変換する関数
      // const parseNumericValue = (value) => {
      //       return Number(value.replace(/,/g, ''));
      // };
      

      // // 追加サービス選択
      // const servicePrice = document.querySelector(".additional-service-price")
      // const totalPrice = document.querySelector(".total-price")

      // document.querySelectorAll(".js_service_checkbox").forEach((service)=>{
      //       service.addEventListener("change", (e) => {
      //             const target = e.target
                  
      //             if(target.checked) {
      //                   const currentServicePrice = parseNumericValue(servicePrice.innerHTML);
      //                   const currentTotalPrice = parseNumericValue(totalPrice.innerHTML);
      //                   const addPrice = Number(target.dataset.price);
                        
      //                   servicePrice.innerHTML = (currentServicePrice + addPrice).toLocaleString('ja-JP');
      //                   totalPrice.innerHTML = (currentTotalPrice + addPrice).toLocaleString('ja-JP');
      //             } else {
      //                   const currentServicePrice = parseNumericValue(servicePrice.innerHTML);
      //                   const currentTotalPrice = parseNumericValue(totalPrice.innerHTML);
      //                   const subPrice = Number(target.dataset.price);
                        
      //                   servicePrice.innerHTML = (currentServicePrice - subPrice).toLocaleString('ja-JP');
      //                   totalPrice.innerHTML = (currentTotalPrice - subPrice).toLocaleString('ja-JP');
      //             }
      //       })
      // })
      
      // // パッケージ選択
      // document.querySelectorAll('.option-card').forEach(card => {
      //       card.addEventListener('click', () => {
      //             document.querySelectorAll('.option-card').forEach(c => c.classList.remove('selected'));
      //             card.classList.add('selected');
      //             selectedPackage = card.dataset.package;
      //             packagePrice = parseInt(card.dataset.price);
      //             updateSummary();
      //       });
      // });
      
      // 旅行者数変更
      // const number = document.querySelector(".js_number")
      // const tourPrice = document.querySelector(".tour-price")
      // document.getElementById('travelers').addEventListener('change', (e) => {
      //       document.getElementById('summary-travelers').textContent = e.target.value;
      //       number.textContent = e.target.value
      //       tourPrice.innerHTML = (20000 * Number(e.target.value)).toLocaleString('ja-JP')
      //       updateSummary();
      // });
      
      
      // サマリー更新
      function updateSummary() {
            // const travelers = parseInt(document.getElementById('travelers').value);
            // const airportTransfer = document.getElementById('airport-transfer').checked;
            // const guidedTour = document.getElementById('guided-tour').checked;
            // const travelInsurance = document.getElementById('travel-insurance').checked;
            
            // // 計算
            // const packageTotal = packagePrice <span class="required">*</span> travelers;
            // const transferTotal = airportTransfer ? 50 <span class="required">*</span> travelers : 0;
            // const guidedTotal = guidedTour ? 150 : 0;
            // const insuranceTotal = travelInsurance ? 75 <span class="required">*</span> travelers : 0;
            // const grandTotal = packageTotal + transferTotal + guidedTotal + insuranceTotal;
            // const deposit = grandTotal <span class="required">*</span> 0.2;
            
            // // 表示更新
            // document.getElementById('package-total').textContent = `$${packageTotal.toLocaleString()}.00`;
            // document.getElementById('transfer-total').textContent = `$${transferTotal.toLocaleString()}.00`;
            // document.getElementById('guided-total').textContent = `$${guidedTotal.toLocaleString()}.00`;
            // document.getElementById('insurance-total').textContent = `$${insuranceTotal.toLocaleString()}.00`;
            // document.getElementById('grand-total').textContent = `$${grandTotal.toLocaleString()}.00`;
            // document.getElementById('payment-total').textContent = `$${grandTotal.toLocaleString()}.00`;
            // document.getElementById('deposit-amount').textContent = `$${deposit.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
            
            // // パッケージ名更新
            // const selectedCard = document.querySelector('.option-card.selected');
            // if (selectedCard) {
            //       const packageName = selectedCard.querySelector('.option-title').textContent;
            //       const firstItemLabel = document.querySelector('.summary-item:first-child .item-label');
            //       if (firstItemLabel) {
            //             firstItemLabel.textContent = `${packageName} (${travelers} × $${packagePrice})`;
            //       }
            // }
      }
      
      // 決済処理
      document.addEventListener('DOMContentLoaded', () => {
            const submitButton = document.getElementById('submit-payment');
            if (submitButton) {
                  submitButton.addEventListener('click', async (e) => {
                        e.preventDefault();
                        
                        const button = e.target;
                        button.disabled = true;
                        button.classList.add('loading');
                        
                        try {
                              // Payment Elementが初期化されているか確認
                              if (!paymentElement) {
                                    throw new Error('Payment Element not initialized');
                              }
                              

                              console.log(paymentElement);
                              
                              // 決済確定
                              const {error} = await stripe.confirmPayment({
                                    elements,
                                    redirect: 'if_required',
                                    confirmParams: {
                                          return_url: window.location.origin + '/booking/success'
                                    }
                              });
                              
                              if (error) {
                                    const displayError = document.getElementById('card-errors');
                                    if (displayError) {
                                          displayError.textContent = error.message;
                                    }
                              } else {
                                    // 成功処理
                                    window.location.href = '/booking/success';
                              }
                        } catch (error) {
                              console.error('Error:', error);
                              const displayError = document.getElementById('card-errors');
                              if (displayError) {
                                    displayError.textContent = error.message || 'An unexpected error occurred.';
                              }
                        } finally {
                              button.disabled = false;
                              button.classList.remove('loading');
                        }
                  });
            }
      });
      
      // // 初期化
      // updateSummary();
</script>
@endsection