@extends('layout.default')
@section('style')
<link rel="stylesheet" href="{{ asset('css/tour_book.css') }}">

@endsection

@section("main")
    @include('components.header')
    <!-- Booking Progress -->
  {{-- <section class="booking-progress">
    <div class="container">
      <div class="progress-container">
        <div class="progress-bar"></div>
        <div class="progress-step">
          <div class="step-icon active">
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="step-text active">Select Date</div>
        </div>
        <div class="progress-step">
          <div class="step-icon">
            <i class="fas fa-user"></i>
          </div>
          <div class="step-text">Guest Info</div>
        </div>
        <div class="progress-step">
          <div class="step-icon">
            <i class="fas fa-credit-card"></i>
          </div>
          <div class="step-text">Payment</div>
        </div>
        <div class="progress-step">
          <div class="step-icon">
            <i class="fas fa-check"></i>
          </div>
          <div class="step-text">Confirmation</div>
        </div>
      </div>
    </div>
  </section> --}}
  
  <!-- Main Booking Content -->
  <section class="booking-content">
    <div class="container">
      <div class="booking-grid">
        <!-- Left Column - Booking Form -->
        <div class="booking-form">
          <h2 class="form-title">Book Your Tour</h2>
          
          <!-- Calendar Section -->
          <div class="form-group">
            <label class="form-label">Select Date</label>
            <div class="calendar-container">
              <div class="calendar-widget">
                <div class="calendar-header">
                  <button class="nav-button" id="prev-month"><i class="fas fa-chevron-left"></i></button>
                  <div class="current-month">April 2025</div>
                  <button class="nav-button" id="next-month"><i class="fas fa-chevron-right"></i></button>
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
                  
                  <!-- Calendar dates will be dynamically inserted here -->
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
                  <div class="date today">19</div>
                  <div class="date available">20</div>
                  <div class="date available">21</div>
                  <div class="date available">22</div>
                  <div class="date discount">23</div>
                  <div class="date available">24</div>
                  <div class="date available">25</div>
                  <div class="date available">26</div>
                  <div class="date available">27</div>
                  <div class="date available">28</div>
                  <div class="date available">29</div>
                  <div class="date available">30</div>
                </div>
                
                <div class="calendar-legend">
                  <div class="legend-item">
                    <span class="legend-color available"></span>
                    <span>Available</span>
                  </div>
                  <div class="legend-item">
                    <span class="legend-color discount"></span>
                    <span>Special Discount</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Passengers Section -->
          <div class="form-group">
            <label class="form-label">Guests</label>
            <div class="passengers-selector">
              <div class="passenger-type">
                <span class="passenger-label">Adults</span>
                <div class="passenger-controls">
                  <button class="passenger-btn" id="decrease-adults"><i class="fas fa-minus"></i></button>
                  <span class="passenger-count" id="adult-count">2</span>
                  <button class="passenger-btn" id="increase-adults"><i class="fas fa-plus"></i></button>
                </div>
              </div>
              <div class="passenger-type">
                <span class="passenger-label">Children</span>
                <div class="passenger-controls">
                  <button class="passenger-btn" id="decrease-children"><i class="fas fa-minus"></i></button>
                  <span class="passenger-count" id="children-count">0</span>
                  <button class="passenger-btn" id="increase-children"><i class="fas fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Payment Method Section -->
          <div class="payment-methods">
            <h3 class="payment-title">Payment Method</h3>
            <div class="payment-options">
              <label class="payment-option selected">
                <input type="radio" name="payment-method" class="payment-radio" checked>
                <div class="payment-label">
                  <i class="fab fa-cc-stripe payment-icon stripe-icon"></i>
                  <span class="payment-text">Pay with Stripe</span>
                </div>
              </label>
            </div>
            
            <div class="secure-badge">
              <i class="fas fa-lock"></i>
              <span>All transactions are secure and encrypted</span>
            </div>
          </div>
          
          <!-- Form Fields -->
          <div class="form-group">
            <label class="form-label">Card Information</label>
            <div id="card-element" class="form-control" style="padding: 18px;">
              <!-- Stripe Card Element will be inserted here -->
              <div style="color: #999; font-size: 14px;">Card details will appear here when connected to Stripe</div>
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" placeholder="Enter your first name">
            </div>
            <div class="form-group">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" placeholder="Enter your last name">
            </div>
          </div>
          
          <div class="form-group">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" placeholder="Enter your email address">
          </div>
          
          <div class="form-group">
            <label class="form-label">Phone Number</label>
            <input type="tel" class="form-control" placeholder="Enter your phone number">
          </div>
          
          <button class="proceed-button">Complete Booking</button>
        </div>
        
        <!-- Right Column - Booking Summary -->
        <div class="booking-summary">
          <div class="summary-header">
            <h3 class="summary-title">Booking Summary</h3>
            <p class="tour-name">Kyoto Cultural Experience Tour</p>
          </div>
          
          <div class="summary-body">
            <div class="detail-row">
              <div class="detail-label time">Tour Date</div>
              <div class="detail-value" id="selected-date">Apr 23, 2025</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label time">Duration</div>
              <div class="detail-value">8 hours</div>
            </div>
            
            <div class="detail-row">
              <div class="detail-label guests">Guests</div>
              <div class="detail-value" id="guest-count">2 Adults, 0 Children</div>
            </div>
            
            <div class="price-breakdown">
              <div class="price-item">
                <span>Adult price (2)</span>
                <span>$398.00</span>
              </div>
              <div class="price-item">
                <span>Children (0)</span>
                <span>$0.00</span>
              </div>
              <div class="price-item">
                <span>Booking fee</span>
                <span>$15.00</span>
              </div>
              <div class="price-item">
                <span>Special discount</span>
                <span>-$39.80</span>
              </div>
              <div class="price-item total">
                <span>Total</span>
                <span>$373.20</span>
              </div>
            </div>
            
            <div class="promo-code">
              <label class="form-label">Promo Code</label>
              <div class="promo-input">
                <input type="text" class="form-control" placeholder="Enter promo code">
                <button class="promo-apply">Apply</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
  // Calendar date selection
  const dates = document.querySelectorAll('.date:not(.empty):not(.disabled)');
  const selectedDateEl = document.getElementById('selected-date');
  
  dates.forEach(date => {
    date.addEventListener('click', function() {
      // Remove selected class from all dates
      dates.forEach(d => d.classList.remove('selected'));
      
      // Add selected class to clicked date
      this.classList.add('selected');
      
      // Update selected date in summary
      const month = document.querySelector('.current-month').textContent.split(' ')[0];
      selectedDateEl.textContent = `${month} ${this.textContent}, 2025`;
    });
  });
  
  // Passenger count handlers
  const adultCount = document.getElementById('adult-count');
  const childrenCount = document.getElementById('children-count');
  const guestCountEl = document.getElementById('guest-count');
  
  document.getElementById('increase-adults').addEventListener('click', function() {
    let count = parseInt(adultCount.textContent);
    if (count < 10) {
      adultCount.textContent = count + 1;
      updateGuestCount();
    }
  });
  
  document.getElementById('decrease-adults').addEventListener('click', function() {
    let count = parseInt(adultCount.textContent);
    if (count > 1) {
      adultCount.textContent = count - 1;
      updateGuestCount();
    }
  });
  
  document.getElementById('increase-children').addEventListener('click', function() {
    let count = parseInt(childrenCount.textContent);
    if (count < 10) {
      childrenCount.textContent = count + 1;
      updateGuestCount();
    }
  });
  
  document.getElementById('decrease-children').addEventListener('click', function() {
    let count = parseInt(childrenCount.textContent);
    if (count > 0) {
      childrenCount.textContent = count - 1;
      updateGuestCount();
    }
  });
  
  function updateGuestCount() {
    const adults = parseInt(adultCount.textContent);
    const children = parseInt(childrenCount.textContent);
    
    guestCountEl.textContent = `${adults} Adult${adults !== 1 ? 's' : ''}, ${children} Child${children !== 1 ? 'ren' : ''}`;
    
    // Update price calculation in the future
  }
  
  // 曜日ヘッダーのHTMLを保存
  const weekdayHeaders = [];
  document.querySelectorAll('.weekday').forEach(weekday => {
    weekdayHeaders.push(weekday.outerHTML);
  });
  const weekdayHeadersHTML = weekdayHeaders.join('');
  
  // カレンダーを描画する関数
  function renderCalendar(year, month) {
    // カレンダーをクリアして曜日ヘッダーを再設定
    calendarGrid.innerHTML = weekdayHeadersHTML;
    
    // 月表示を更新
    currentMonthEl.textContent = `${monthNames[month]} ${year}`;
    
    // 月の最初の日
    const firstDay = new Date(year, month, 1);
    // 月の最後の日
    const lastDay = new Date(year, month + 1, 0);
    
    // 月の最初の日の曜日 (0: 日曜日, 1: 月曜日, ..., 6: 土曜日)
    const firstDayOfWeek = firstDay.getDay();
    // 月の日数
    const daysInMonth = lastDay.getDate();
    
    // 月の最初の日の前に空セルを追加
    for (let i = 0; i < firstDayOfWeek; i++) {
      const emptyDay = document.createElement('div');
      emptyDay.className = 'date empty';
      calendarGrid.appendChild(emptyDay);
    }
    
    // 現在の日付
    const today = new Date();
    const currentDate = new Date(today.getFullYear(), today.getMonth(), today.getDate());
    
    // 月の日を追加
    for (let day = 1; day <= daysInMonth; day++) {
      const date = new Date(year, month, day);
      const dateElement = document.createElement('div');
      dateElement.className = 'date';
      dateElement.textContent = day;
      
      // 過去の日付かどうかチェック
      const isPastDate = date < currentDate;
      
      // 適切なクラスを追加
      if (isPastDate) {
        dateElement.classList.add('disabled');
      } else {
        // サンプルとして、4月23日と各月の10日・20日は割引日に
        if ((day === 23 && month === 3) || day === 10 || day === 20) {
          dateElement.classList.add('discount');
        } else {
          dateElement.classList.add('available');
        }
        
        // クリックイベントを追加
        dateElement.addEventListener('click', function() {
          // 全ての日付から選択クラスを削除
          document.querySelectorAll('.date').forEach(d => d.classList.remove('selected'));
          
          // クリックされた日付に選択クラスを追加
          this.classList.add('selected');
          
          // 選択された日付を更新
          const monthName = currentMonthEl.textContent.split(' ')[0];
          const year = currentMonthEl.textContent.split(' ')[1];
          selectedDateEl.textContent = `${monthName} ${this.textContent}, ${year}`;
        });
      }
      
      // 今日の日付をハイライト
      if (date.getDate() === currentDate.getDate() && 
          date.getMonth() === currentDate.getMonth() && 
          date.getFullYear() === currentDate.getFullYear()) {
        dateElement.classList.add('today');
      }
      
      calendarGrid.appendChild(dateElement);
    }
  }
  
  // Calendar navigation
  const calendarGrid = document.querySelector('.calendar-grid');
  const currentMonthEl = document.querySelector('.current-month');
  const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  let currentMonth = 3; // April (0-indexed)
  let currentYear = 2025;
  
  document.getElementById('prev-month').addEventListener('click', function() {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    renderCalendar(currentYear, currentMonth);
  });
  
  document.getElementById('next-month').addEventListener('click', function() {
    currentMonth++;
    if (currentMonth > 11) {
      currentMonth = 0;
      currentYear++;
    }
    renderCalendar(currentYear, currentMonth);
  });

  // This would be where the Stripe integration code would go
  // 省略...
});
  </script>
@endsection