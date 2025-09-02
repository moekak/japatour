<!DOCTYPE html>
<html lang="en">

<head>
      @include('components.head')
</head>

<body class="bg-[#fcf8f8] min-h-screen">
      <!-- Header -->
      @include('components.nav')

      <div class="max-w-[1200px] mx-auto px-4 py-12">
            <!-- Success Message -->
            <div class="text-center mb-12">
                  <div class=" mb-6">
                        <div class="w-12 h-12 md:w-24 md:h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                              <i class="fas fa-check text-2xl md:text-4xl text-green-600"></i>
                        </div>
                        <h1 class="text-[#1b0e0e] text-3xl md:text-4xl font-black mb-2">Thank You!</h1>
                        <p class="text-[#994d4d] text-base md:text-lg">Your booking request has been submitted successfully</p>
                  </div>

                  <div class="bg-green-50 border border-green-200 rounded-lg p-6 max-w-2xl mx-auto">
                        <div class="flex items-center justify-center gap-3 text-green-700 mb-2">
                              <i class="fas fa-paper-plane text-lg"></i>
                              <span class="font-semibold">Request Submitted</span>
                        </div>
                        <p class="text-green-600 text-sm">
                              We've received your tour booking request and will contact you shortly to confirm availability and provide next steps.
                        </p>
                  </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 max-w-4xl mx-auto">
                  <!-- What's Next -->
                  <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-[#1b0e0e] text-lg font-bold mb-6">What Happens Next?</h3>

                        <div class="space-y-6">
                              <div class="flex items-start gap-4">
                                    <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                          <i class="fas fa-check text-white text-sm"></i>
                                    </div>
                                    <div>
                                          <h4 class="text-[#1b0e0e] font-semibold text-sm">Request Received</h4>
                                          <p class="text-[#994d4d] text-sm">Your booking request has been submitted</p>
                                          <span class="text-green-600 text-sm font-medium">✓ Completed</span>
                                    </div>
                              </div>

                              <div class="flex items-start gap-4">
                                    <div class="w-8 h-8 bg-[#e92929] rounded-full flex items-center justify-center flex-shrink-0">
                                          <span class="text-white text-sm font-bold">2</span>
                                    </div>
                                    <div>
                                          <h4 class="text-[#1b0e0e] font-semibold text-sm">Team Review</h4>
                                          <p class="text-[#994d4d] text-sm">We'll check availability for your selected date</p>
                                          <span class="text-[#e92929] text-sm font-medium">⏳ In Progress</span>
                                    </div>
                              </div>

                              <div class="flex items-start gap-4">
                                    <div class="w-8 h-8 bg-[#f3e7e7] border-2 border-[#e7d0d0] rounded-full flex items-center justify-center flex-shrink-0">
                                          <span class="text-[#994d4d] text-sm font-bold">3</span>
                                    </div>
                                    <div>
                                          <h4 class="text-[#994d4d] font-semibold text-sm">Contact & Confirmation</h4>
                                          <p class="text-[#994d4d] text-sm">We'll email you within 72 hours with confirmation</p>
                                          <span class="text-[#994d4d] text-sm">⏳ Upcoming</span>
                                    </div>
                              </div>

                              <div class="flex items-start gap-4">
                                    <div class="w-8 h-8 bg-[#f3e7e7] border-2 border-[#e7d0d0] rounded-full flex items-center justify-center flex-shrink-0">
                                          <span class="text-[#994d4d] text-sm font-bold">4</span>
                                    </div>
                                    <div>
                                          <h4 class="text-[#994d4d] font-semibold text-sm">Payment & Final Details</h4>
                                          <p class="text-[#994d4d] text-sm">Payment instructions and meeting details</p>
                                          <span class="text-[#994d4d] text-sm">⏳ Upcoming</span>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <!-- Support -->
                  <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-[#1b0e0e] text-lg font-bold mb-4">Need Help?</h3>

                        <div class="space-y-4 mb-6">
                              <a href="mailto:info@shoguntoursjapan.com" class="flex items-center gap-3 p-3 bg-[#f3e7e7] rounded-lg hover:bg-[#e7d0d0] transition-colors">
                                    <div class="w-10 h-10 bg-[#e92929] rounded-lg flex items-center justify-center">
                                          <i class="fas fa-envelope text-white"></i>
                                    </div>
                                    <div>
                                          <div class="text-[#1b0e0e] font-medium text-sm">Email Support</div>
                                          <div class="text-[#994d4d] text-sm">info@shoguntoursjapan.com</div>
                                    </div>
                              </a>
                        </div>

                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                              <div class="flex items-center gap-2 text-blue-700 mb-2">
                                    <i class="fas fa-info-circle"></i>
                                    <span class="font-medium text-sm">Quick Tip</span>
                              </div>
                              <p class="text-blue-600 text-sm">
                                    Check your email (including spam folder) for our confirmation message within 72 hours.
                              </p>
                        </div>

                        <!-- Free Cancellation -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                              <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                          <i class="fas fa-shield-alt text-green-600"></i>
                                    </div>
                                    <div>
                                          <h4 class="text-[#1b0e0e] font-bold text-sm">Book now, pay later</h4>
                                          <p class="text-[#994d4d] text-sm">Flexible & worry-free booking</p>
                                    </div>
                              </div>

                              <div class="space-y-2 text-sm">
                                    <div class="flex items-center gap-2">
                                          <i class="fas fa-check text-green-600"></i>
                                          <span class="text-[#1b0e0e]">Payment due 14 days before tour</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                          <i class="fas fa-check text-green-600"></i>
                                          <span class="text-[#1b0e0e]">Free cancellation up to 7 days before tour</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                          <i class="fas fa-check text-green-600"></i>
                                          <span class="text-[#1b0e0e]">100% refund guarantee for eligible cancellations</span>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>

            <!-- Action Buttons -->
            <div class="text-center mt-12 slide-in">
                  <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{route("tours")}}" class="bg-[#e92929] text-white py-3 px-8 rounded-lg font-medium hover:bg-[#d61f1f] transition-all duration-300 flex items-center justify-center gap-2">
                              <i class="fas fa-plus-circle"></i>
                              Book Another Tour
                        </a>
                        <a href={{route("top")}} class="bg-white border-2 border-[#e7d0d0] text-[#994d4d] py-3 px-8 rounded-lg font-medium hover:border-[#994d4d] hover:bg-[#f3e7e7] transition-all duration-300 flex items-center justify-center gap-2">
                              <i class="fas fa-home"></i>
                              Back to Home
                        </a>
                  </div>
            </div>
      </div>

      <!-- Footer -->
      @include('components.footer')

      <script>
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