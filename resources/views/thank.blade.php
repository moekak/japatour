<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('css/thank.css') }}">
      <title>Booking Confirmed - Thank You!</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<body>
      <div class="container">
            <div class="success-section">
                  <!-- Success Header -->
                  <div class="success-icon">
                        <i class="fas fa-check"></i>
                  </div>
                  <h1 class="success-title">Booking Confirmed!</h1>
                  <p class="success-subtitle">Thank you for choosing our tour. Your adventure awaits and we can't wait to show you an amazing experience!</p>
                  
                  <!-- Booking Reference -->
                  <div class="booking-reference">
                        <div class="reference-label">Booking Reference Number</div>
                        <div class="reference-number">TK-2024-001573</div>
                  </div>

                  <!-- Email Notice -->
                  <div class="email-notice">
                        <div class="email-notice-header">
                              <div class="email-icon">
                                    <i class="fas fa-envelope"></i>
                              </div>
                              <h3>Confirmation Email Sent</h3>
                        </div>
                        <p>We've sent a detailed confirmation email with your booking details, e-ticket, and itinerary to your email address. Please check your inbox (and spam folder) within the next 5 minutes.</p>
                  </div>

                  <!-- Next Steps -->
                  <div class="next-steps">
                        <h2 class="steps-title">What Happens Next?</h2>
                        <ul class="steps-list">
                              <li class="step-item">
                                    <div class="step-title">Check Your Email</div>
                                    <div class="step-description">Review your confirmation email with all booking details and important information about your tour.</div>
                              </li>
                              <li class="step-item">
                                    <div class="step-title">Pre-Tour Contact</div>
                                    <div class="step-description">Our team will contact you 48 hours before your tour to confirm meeting details and answer any questions.</div>
                              </li>
                              <li class="step-item">
                                    <div class="step-title">Enjoy Your Tour</div>
                                    <div class="step-description">Meet your guide at the designated location and have an unforgettable experience exploring with us!</div>
                              </li>
                        </ul>
                  </div>

                  <!-- Action Buttons -->
                  <div class="action-buttons">
                        <a href="{{route("top")}}" class="action-btn btn-primary">
                              <i class="fas fa-home"></i>
                              Return to Homepage
                        </a>
                        <a href="#" class="action-btn btn-secondary">
                              <i class="fas fa-search"></i>
                              Book Another Tour
                        </a>
                  </div>

                  <!-- Contact Information -->
                  <div class="contact-section">
                        <h3 class="contact-title">Need Help?</h3>
                        <p class="contact-text">If you have any questions or need assistance, we're here to help!</p>
                        
                        <div class="contact-info">
                              <div class="contact-item">
                                    <i class="fas fa-phone"></i>
                                    +81 3-1234-5678
                              </div>
                              <div class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    info@japatour-official.com
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>
</html>