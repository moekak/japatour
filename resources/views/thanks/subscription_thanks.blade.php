<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Newsletter Subscription Confirmed - Thank You! - ShogunTours</title>
      <meta name="keywords" content="ShogunTours, thank you, newsletter subscription, Japan travel newsletter">
      <meta name="robots" content="noindex,nofollow">
      <meta name="description" content="Thank you for subscribing to the ShogunTours newsletter. You'll receive the best Japan travel tips and exclusive offers directly in your inbox.">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
      <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
      <link rel="shortcut icon" href="/img/logo2.png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
      <style>
            .success-icon {
                  animation: successPulse 2s infinite;
            }
            
            .checkmark {
                  animation: checkmarkDraw 0.8s ease-in-out forwards;
            }
            
            @keyframes successPulse {
                  0%, 100% { transform: scale(1); }
                  50% { transform: scale(1.05); }
            }
            
            @keyframes checkmarkDraw {
                  0% {
                        stroke-dasharray: 0, 100;
                        stroke-dashoffset: 0;
                  }
                  100% {
                        stroke-dasharray: 100, 0;
                        stroke-dashoffset: 0;
                  }
            }
            
            .fade-in {
                  animation: fadeIn 0.6s ease-in-out forwards;
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
      </style>
</head>

<body>
      <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
                  
                  <!-- Navigation -->
                  @include('components.nav')

                  <!-- Success Content Section -->
                  <section class="flex justify-center py-20 flex-1">
                        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                              <div class="px-4">
                                    
                                    <!-- Success State -->
                                    <div id="success-state" class="text-center fade-in">
                                          
                                          <!-- Success Icon -->
                                          <div class="mb-8">
                                                <div class="relative inline-flex items-center justify-center">
                                                      <div class="h-24 w-24 bg-green-100 rounded-full flex items-center justify-center success-icon">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#10b981" viewBox="0 0 256 256" class="checkmark">
                                                            <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path>
                                                      </svg>
                                                      </div>
                                                </div>
                                          </div>

                                          <!-- Success Text -->
                                          <h1 class="text-[#1b0e0e] text-3xl sm:text-4xl font-black leading-tight tracking-[-0.033em] mb-4">
                                                Welcome to Our Travel Community!
                                          </h1>
                                          <p class="text-[#994d4d] text-lg font-normal leading-normal mb-8 max-w-2xl mx-auto">
                                                Thank you for subscribing to the ShogunTours newsletter! You'll now receive the best Japan travel tips, cultural insights, and exclusive offers directly in your inbox. Your journey to discovering hidden gems begins here!
                                          </p>

                                          <!-- Action Buttons -->
                                          <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                                                <a href="{{route("top")}}" class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-[#f3e7e7] text-[#1b0e0e] text-base font-bold leading-normal tracking-[0.015em] hover:bg-[#e7d0d0] transition-colors">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256" class="mr-2">
                                                            <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                                                      </svg>
                                                      <span class="truncate">Back to Home</span>
                                                </a>
                                                <a href="{{route("tours")}}" class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-[#e92929] text-[#fcf8f8] text-base font-bold leading-normal tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                                                      <span class="truncate">Explore Tours</span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256" class="ml-2">
                                                            <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
                                                      </svg>
                                                </a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>

                  <!-- Footer -->
                  @include('components.footer')
            </div>
      </div>

      <script>
            // Mobile menu toggle
            document.addEventListener('DOMContentLoaded', function() {
                  const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
                  const mobileMenu = document.getElementById('mobile-menu');
                  
                  if (mobileMenuButton && mobileMenu) {
                  mobileMenuButton.addEventListener('click', function() {
                        const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                        mobileMenuButton.setAttribute('aria-expanded', !expanded);
                        mobileMenu.classList.toggle('hidden');
                  });
                  }
            });

            // Navigation functions
            function goBack() {
                  if (document.referrer && document.referrer.includes(window.location.host)) {
                  window.history.back();
                  } else {
                  window.location.href = '/';
                  }
            }

            function goToTours() {
                  window.location.href = '{{route("tours")}}';
            }

            // Add smooth entrance animation on page load
            window.addEventListener('load', function() {
                  const successState = document.getElementById('success-state');
                  if (successState) {
                  successState.style.opacity = '0';
                  successState.style.transform = 'translateY(20px)';
                  
                  setTimeout(() => {
                        successState.style.transition = 'all 0.6s ease-in-out';
                        successState.style.opacity = '1';
                        successState.style.transform = 'translateY(0)';
                  }, 100);
                  }
            });
      </script>

</body>
</html>