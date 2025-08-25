<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Booking Confirmed - ShogunTours</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
      <style>
            body {
                  font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;
            }

            @keyframes fadeIn {
                  from {
                        opacity: 0;
                        transform: translateY(20px);
                  }

                  to {
                        opacity: 1;
                        transform: translateY(0);
                  }
            }

            @keyframes successPulse {
                  0% {
                        transform: scale(0.8);
                        opacity: 0;
                  }

                  50% {
                        transform: scale(1.05);
                  }

                  100% {
                        transform: scale(1);
                        opacity: 1;
                  }
            }

            @keyframes slideInFromRight {
                  from {
                        opacity: 0;
                        transform: translateX(50px);
                  }

                  to {
                        opacity: 1;
                        transform: translateX(0);
                  }
            }

            .fade-in {
                  animation: fadeIn 0.8s ease-out forwards;
            }

            .success-animation {
                  animation: successPulse 0.8s ease-out;
            }

            .slide-in {
                  animation: slideInFromRight 0.6s ease-out forwards;
            }

            .countdown-circle {
                  width: 120px;
                  height: 120px;
                  border-radius: 50%;
                  background: conic-gradient(#e92929 0deg, #f3e7e7 0deg);
                  transition: all 0.5s ease;
            }
      </style>
</head>

<body class="bg-[#fcf8f8] min-h-screen">
      <!-- Header -->
      <header class="bg-white shadow-sm border-b border-[#e7d0d0]">
            <div class="max-w-[1900px] mx-auto px-4 py-4">
                  <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                              <div class="w-10 h-10 bg-[#e92929] rounded-lg flex items-center justify-center">
                                    <i class="fas fa-torii-gate text-white text-lg"></i>
                              </div>
                              <div>
                                    <h1 class="text-[#1b0e0e] text-lg font-black">ShogunTours</h1>
                                    <p class="text-[#994d4d] text-xs">Authentic Tokyo Experiences</p>
                              </div>
                        </div>
                        <div class="text-[#994d4d] text-sm">
                              <i class="fas fa-phone mr-1"></i>
                              +81 3-1234-5678
                        </div>
                  </div>
            </div>
      </header>

      <div class="max-w-[1200px] mx-auto px-4 py-12">
            <!-- Success Message -->
            <div class="text-center mb-12 fade-in">
                  <div class="success-animation mb-6">
                        <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                              <i class="fas fa-check text-4xl text-green-600"></i>
                        </div>
                        <h1 class="text-[#1b0e0e] text-4xl font-black mb-2">Booking Confirmed!</h1>
                        <p class="text-[#994d4d] text-lg">Your Tokyo adventure is reserved</p>
                  </div>

                  <div class="bg-green-50 border border-green-200 rounded-lg p-6 max-w-2xl mx-auto">
                        <div class="flex items-center justify-center gap-3 text-green-700 mb-2">
                              <i class="fas fa-shield-alt text-lg"></i>
                              <span class="font-semibold">Reservation Secured</span>
                        </div>
                        <p class="text-green-600 text-sm">
                              Your spot is guaranteed! We'll send payment details shortly via email.
                        </p>
                  </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                  <!-- Main Content -->
                  <div class="lg:col-span-2 space-y-8">
                        <!-- Booking Details -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden slide-in">
                              <div class="bg-[#e92929] text-white p-6">
                                    <div class="flex items-center justify-between">
                                          <div>
                                                <h2 class="text-xl font-bold mb-1">Booking Reference</h2>
                                                <p class="text-red-100 text-sm">Keep this for your records</p>
                                          </div>
                                          <div class="text-right">
                                                <div class="text-2xl font-black">ST-2025-001234</div>
                                                <button onclick="copyToClipboard('ST-2025-001234')" class="text-red-100 text-sm hover:text-white transition-colors">
                                                      <i class="fas fa-copy mr-1"></i>Copy
                                                </button>
                                          </div>
                                    </div>
                              </div>

                              <div class="p-6">
                                    <!-- Tour Information -->
                                    <div class="mb-8">
                                          <h3 class="text-[#1b0e0e] text-lg font-bold mb-4">Tour Details</h3>
                                          <div class="bg-[#f3e7e7] rounded-lg p-6">
                                                <div class="flex items-start gap-4 mb-4">
                                                      <div class="w-16 h-16 bg-[#e92929]/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                                            <i class="fas fa-torii-gate text-[#e92929] text-xl"></i>
                                                      </div>
                                                      <div class="flex-1">
                                                            <h4 class="text-[#1b0e0e] text-lg font-bold mb-1">Traditional Tokyo Culture Tour</h4>
                                                            <p class="text-[#994d4d] text-sm mb-2">Full Day Experience • Max 8 people</p>
                                                            <div class="flex flex-wrap gap-2">
                                                                  <span class="bg-white text-[#1b0e0e] px-2 py-1 rounded text-xs">Senso-ji Temple</span>
                                                                  <span class="bg-white text-[#1b0e0e] px-2 py-1 rounded text-xs">Tea Ceremony</span>
                                                                  <span class="bg-white text-[#1b0e0e] px-2 py-1 rounded text-xs">Local Guide</span>
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="grid md:grid-cols-2 gap-4 text-sm">
                                                      <div class="flex items-center gap-2">
                                                            <i class="fas fa-calendar-alt text-[#994d4d]"></i>
                                                            <span class="text-[#1b0e0e]">Saturday, March 15, 2025</span>
                                                      </div>
                                                      <div class="flex items-center gap-2">
                                                            <i class="fas fa-clock text-[#994d4d]"></i>
                                                            <span class="text-[#1b0e0e]">9:00 AM - 5:00 PM</span>
                                                      </div>
                                                      <div class="flex items-center gap-2">
                                                            <i class="fas fa-users text-[#994d4d]"></i>
                                                            <span class="text-[#1b0e0e]">2 Adults, 1 Child</span>
                                                      </div>
                                                      <div class="flex items-center gap-2">
                                                            <i class="fas fa-map-marker-alt text-[#994d4d]"></i>
                                                            <span class="text-[#1b0e0e]">Meeting at Senso-ji Temple</span>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>

                                    <!-- Customer Information -->
                                    <div class="mb-8">
                                          <h3 class="text-[#1b0e0e] text-lg font-bold mb-4">Customer Information</h3>
                                          <div class="bg-[#f3e7e7] rounded-lg p-6">
                                                <div class="grid md:grid-cols-2 gap-6">
                                                      <div>
                                                            <div class="mb-4">
                                                                  <label class="text-[#994d4d] text-sm">Lead Guest</label>
                                                                  <p class="text-[#1b0e0e] font-medium">Yamada Taro</p>
                                                            </div>
                                                            <div>
                                                                  <label class="text-[#994d4d] text-sm">Phone</label>
                                                                  <p class="text-[#1b0e0e] font-medium">+81 90-1234-5678</p>
                                                            </div>
                                                      </div>
                                                      <div>
                                                            <div class="mb-4">
                                                                  <label class="text-[#994d4d] text-sm">Email</label>
                                                                  <p class="text-[#1b0e0e] font-medium">yamada@example.com</p>
                                                            </div>
                                                            <div>
                                                                  <label class="text-[#994d4d] text-sm">Special Requests</label>
                                                                  <p class="text-[#1b0e0e] font-medium">Vegetarian meal options</p>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>

                                    <!-- Payment Summary -->
                                    <div>
                                          <h3 class="text-[#1b0e0e] text-lg font-bold mb-4">Payment Summary</h3>
                                          <div class="bg-[#e92929]/5 border border-[#e92929]/20 rounded-lg p-6">
                                                <div class="space-y-3 mb-4">
                                                      <div class="flex justify-between">
                                                            <span class="text-[#994d4d]">Adults (×2)</span>
                                                            <span class="text-[#1b0e0e] font-medium">¥20,000</span>
                                                      </div>
                                                      <div class="flex justify-between">
                                                            <span class="text-[#994d4d]">Children (×1)</span>
                                                            <span class="text-[#1b0e0e] font-medium">¥7,000</span>
                                                      </div>
                                                      <div class="border-t border-[#e7d0d0] pt-3 flex justify-between">
                                                            <span class="text-[#1b0e0e] text-xl font-bold">Total Amount</span>
                                                            <span class="text-[#1b0e0e] text-2xl font-black">¥27,000</span>
                                                      </div>
                                                </div>
                                                <div class="bg-amber-50 border border-amber-200 rounded-lg p-4">
                                                      <div class="flex items-center gap-2 text-amber-700 mb-2">
                                                            <i class="fas fa-clock"></i>
                                                            <span class="font-semibold">Payment Due Later</span>
                                                      </div>
                                                      <p class="text-amber-600 text-sm">
                                                            We'll send secure payment instructions to your email within 24 hours.
                                                            No payment required now!
                                                      </p>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <!-- Actions -->
                        <div class="grid md:grid-cols-2 gap-4 slide-in">
                              <button onclick="window.print()" class="bg-white border-2 border-[#e7d0d0] text-[#994d4d] py-3 px-6 rounded-lg font-medium hover:border-[#994d4d] hover:bg-[#f3e7e7] transition-all duration-300 flex items-center justify-center gap-2">
                                    <i class="fas fa-print"></i>
                                    Print Confirmation
                              </button>
                              <button onclick="window.location.href='/tours'" class="bg-[#e92929] text-white py-3 px-6 rounded-lg font-medium hover:bg-[#d61f1f] transition-all duration-300 flex items-center justify-center gap-2">
                                    <i class="fas fa-plus-circle"></i>
                                    Book Another Tour
                              </button>
                        </div>
                  </div>

                  <!-- Sidebar -->
                  <div class="lg:col-span-1">
                        <div class="space-y-6">
                              <!-- Payment Timeline -->
                              <div class="bg-white rounded-lg shadow-lg p-6 slide-in">
                                    <h3 class="text-[#1b0e0e] text-lg font-bold mb-6">What Happens Next?</h3>

                                    <div class="space-y-6">
                                          <div class="flex items-start gap-4">
                                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                                      <i class="fas fa-check text-white text-sm"></i>
                                                </div>
                                                <div>
                                                      <h4 class="text-[#1b0e0e] font-semibold text-sm">Booking Confirmed</h4>
                                                      <p class="text-[#994d4d] text-xs">Your reservation is secured</p>
                                                      <span class="text-green-600 text-xs font-medium">✓ Completed</span>
                                                </div>
                                          </div>

                                          <div class="flex items-start gap-4">
                                                <div class="w-8 h-8 bg-[#e92929] rounded-full flex items-center justify-center flex-shrink-0">
                                                      <span class="text-white text-xs font-bold">2</span>
                                                </div>
                                                <div>
                                                      <h4 class="text-[#1b0e0e] font-semibold text-sm">Payment Link Sent</h4>
                                                      <p class="text-[#994d4d] text-xs">Check your email within 24 hours</p>
                                                      <span class="text-[#e92929] text-xs font-medium">⏳ In Progress</span>
                                                </div>
                                          </div>

                                          <div class="flex items-start gap-4">
                                                <div class="w-8 h-8 bg-[#f3e7e7] border-2 border-[#e7d0d0] rounded-full flex items-center justify-center flex-shrink-0">
                                                      <span class="text-[#994d4d] text-xs font-bold">3</span>
                                                </div>
                                                <div>
                                                      <h4 class="text-[#994d4d] font-semibold text-sm">Complete Payment</h4>
                                                      <p class="text-[#994d4d] text-xs">Pay securely online (due 48h before tour)</p>
                                                      <span class="text-[#994d4d] text-xs">⏳ Upcoming</span>
                                                </div>
                                          </div>

                                          <div class="flex items-start gap-4">
                                                <div class="w-8 h-8 bg-[#f3e7e7] border-2 border-[#e7d0d0] rounded-full flex items-center justify-center flex-shrink-0">
                                                      <span class="text-[#994d4d] text-xs font-bold">4</span>
                                                </div>
                                                <div>
                                                      <h4 class="text-[#994d4d] font-semibold text-sm">Final Details</h4>
                                                      <p class="text-[#994d4d] text-xs">Meeting instructions 24h before</p>
                                                      <span class="text-[#994d4d] text-xs">⏳ Upcoming</span>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <!-- Support -->
                              <div class="bg-white rounded-lg shadow-lg p-6 slide-in">
                                    <h3 class="text-[#1b0e0e] text-lg font-bold mb-4">Need Help?</h3>

                                    <div class="space-y-4">
                                          <a href="tel:+81312345678" class="flex items-center gap-3 p-3 bg-[#f3e7e7] rounded-lg hover:bg-[#e7d0d0] transition-colors">
                                                <div class="w-10 h-10 bg-[#e92929] rounded-lg flex items-center justify-center">
                                                      <i class="fas fa-phone text-white"></i>
                                                </div>
                                                <div>
                                                      <div class="text-[#1b0e0e] font-medium text-sm">Call Us</div>
                                                      <div class="text-[#994d4d] text-xs">+81 3-1234-5678</div>
                                                </div>
                                          </a>

                                          <a href="mailto:support@shoguntours.com" class="flex items-center gap-3 p-3 bg-[#f3e7e7] rounded-lg hover:bg-[#e7d0d0] transition-colors">
                                                <div class="w-10 h-10 bg-[#e92929] rounded-lg flex items-center justify-center">
                                                      <i class="fas fa-envelope text-white"></i>
                                                </div>
                                                <div>
                                                      <div class="text-[#1b0e0e] font-medium text-sm">Email Support</div>
                                                      <div class="text-[#994d4d] text-xs">support@shoguntours.com</div>
                                                </div>
                                          </a>

                                          <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                                <div class="flex items-center gap-2 text-blue-700 mb-2">
                                                      <i class="fas fa-info-circle"></i>
                                                      <span class="font-medium text-sm">Quick Tip</span>
                                                </div>
                                                <p class="text-blue-600 text-xs">
                                                      Save this confirmation page and check your email regularly for payment instructions.
                                                </p>
                                          </div>
                                    </div>
                              </div>

                              <!-- Free Cancellation -->
                              <div class="bg-white rounded-lg shadow-lg p-6 slide-in">
                                    <div class="flex items-center gap-3 mb-4">
                                          <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-shield-alt text-green-600"></i>
                                          </div>
                                          <div>
                                                <h3 class="text-[#1b0e0e] font-bold">Free Cancellation</h3>
                                                <p class="text-[#994d4d] text-sm">Peace of mind guaranteed</p>
                                          </div>
                                    </div>

                                    <div class="space-y-3 text-sm">
                                          <div class="flex items-center gap-2">
                                                <i class="fas fa-check text-green-600"></i>
                                                <span class="text-[#1b0e0e]">Cancel up to 24 hours before</span>
                                          </div>
                                          <div class="flex items-center gap-2">
                                                <i class="fas fa-check text-green-600"></i>
                                                <span class="text-[#1b0e0e]">100% refund guaranteed</span>
                                          </div>
                                          <div class="flex items-center gap-2">
                                                <i class="fas fa-check text-green-600"></i>
                                                <span class="text-[#1b0e0e]">Weather protection included</span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!-- Footer -->
      <footer class="bg-white border-t border-[#e7d0d0] mt-16">
            <div class="max-w-[1900px] mx-auto px-4 py-8">
                  <div class="text-center">
                        <div class="flex items-center justify-center gap-3 mb-4">
                              <div class="w-8 h-8 bg-[#e92929] rounded-lg flex items-center justify-center">
                                    <i class="fas fa-torii-gate text-white"></i>
                              </div>
                              <span class="text-[#1b0e0e] text-lg font-black">ShogunTours</span>
                        </div>
                        <p class="text-[#994d4d] text-sm mb-4">Creating unforgettable Tokyo experiences since 2020</p>
                        <div class="flex justify-center gap-6 text-sm">
                              <a href="#" class="text-[#994d4d] hover:text-[#e92929] transition-colors">Terms & Conditions</a>
                              <a href="#" class="text-[#994d4d] hover:text-[#e92929] transition-colors">Privacy Policy</a>
                              <a href="#" class="text-[#994d4d] hover:text-[#e92929] transition-colors">Contact</a>
                        </div>
                  </div>
            </div>
      </footer>

      <script>
            // Copy to clipboard function
            function copyToClipboard(text) {
                  navigator.clipboard.writeText(text).then(function() {
                        // Show feedback
                        const button = event.target;
                        const originalText = button.innerHTML;
                        button.innerHTML = '<i class="fas fa-check mr-1"></i>Copied!';
                        button.classList.add('text-white');

                        setTimeout(() => {
                              button.innerHTML = originalText;
                              button.classList.remove('text-white');
                        }, 2000);
                  });
            }

            // Add staggered animations
            document.addEventListener('DOMContentLoaded', function() {
                  const slideElements = document.querySelectorAll('.slide-in');
                  slideElements.forEach((el, index) => {
                        el.style.animationDelay = `${index * 0.2}s`;
                  });
            });
      </script>
</body>

</html>