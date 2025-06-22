<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('css/thank.css') }}">
      <title>Booking Confirmed - Thank You!</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<body>
      <div id="success-state" class="text-center hidden">
            <!-- Success Icon -->
            <div class="mb-8">
                  <div class="relative inline-flex items-center justify-center">
                        <div class="h-24 w-24 bg-green-100 rounded-full flex items-center justify-center success-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#10b981"
                                    viewBox="0 0 256 256" class="checkmark">
                                    <path
                                          d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z">
                                    </path>
                              </svg>
                        </div>
                  </div>
            </div>

            <!-- Success Text -->
            <h1 class="text-[#1b0e0e] text-3xl font-black leading-tight tracking-[-0.033em] mb-4">
                  Message Sent Successfully!
            </h1>
            <p class="text-[#994d4d] text-lg font-normal leading-normal mb-6">
                  Thank you for contacting us. We'll get back to you within 24 hours to
                  help plan your perfect Japan adventure.
            </p>

            <!-- Success Details -->
            <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-8 max-w-md mx-auto">
                  <div class="flex items-center gap-3 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#10b981"
                              viewBox="0 0 256 256">
                              <path
                                    d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z">
                              </path>
                        </svg>
                        <span class="text-green-800 font-medium">Confirmation sent to your
                              email</span>
                  </div>
                  <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#10b981"
                              viewBox="0 0 256 256">
                              <path
                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a8,8,0,0,1-8,8H136v24a8,8,0,0,1-16,0V156H96a8,8,0,0,1,0-16h24V116a8,8,0,0,1,16,0v24h24A8,8,0,0,1,168,148Z">
                              </path>
                        </svg>
                        <span class="text-green-800 font-medium">Response time: Within 24
                              hours</span>
                  </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                  <button onclick="goBack()"
                        class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-[#f3e7e7] text-[#1b0e0e] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#e7d0d0] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              viewBox="0 0 256 256" class="mr-2">
                              <path
                                    d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                              </path>
                        </svg>
                        <span class="truncate">Back to Contact</span>
                  </button>
                  <button onclick="goToTours()"
                        class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-[#e92929] text-[#fcf8f8] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                        <span class="truncate">Explore Tours</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              viewBox="0 0 256 256" class="ml-2">
                              <path
                                    d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z">
                              </path>
                        </svg>
                  </button>
            </div>
      </div>
      <!-- Footer -->
      <footer class="flex justify-center bg-[#1b0e0e] text-white">
            <div class="flex max-w-[960px] flex-1 flex-col">
                  <div class="flex flex-col gap-6 px-5 py-10 text-center @container">
                        <div
                              class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                              <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors"
                                    href="#tours">Tours</a>
                              <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors"
                                    href="#blog">Blog</a>
                              <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors"
                                    href="#">Privacy Policy</a>
                              <a class="text-white text-sm font-normal leading-normal min-w-40 hover:text-[#e92929] transition-colors"
                                    href="#">Terms of Service</a>
                        </div>
                        <p class="text-white text-sm font-normal leading-normal opacity-80">© 2024 Adventure
                              Tours. All rights reserved.</p>
                  </div>
            </div>
      </footer>
</body>

</html>