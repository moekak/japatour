<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>

    <style>
        /* Flatpickr customization */
        .flatpickr-calendar {
            background: #fcf8f8 !important;
            border: 2px solid #e7d0d0 !important;
            border-radius: 12px !important;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1) !important;
        }

        .flatpickr-months {
            background: #f3e7e7 !important;
            border-bottom: 1px solid #e7d0d0 !important;
        }

        .flatpickr-month {
            color: #1b0e0e !important;
        }

        .flatpickr-prev-month,
        .flatpickr-next-month {
            color: #994d4d !important;
        }

        .flatpickr-prev-month:hover,
        .flatpickr-next-month:hover {
            color: #e92929 !important;
        }

        .flatpickr-weekday {
            color: #994d4d !important;
            background: #fcf8f8 !important;
        }

        .flatpickr-day {
            color: #1b0e0e !important;
            border: none !important;
        }

        .flatpickr-day:hover {
            background: #f3e7e7 !important;
            border-color: #e92929 !important;
        }

        .flatpickr-day.selected,
        .flatpickr-day.selected:hover {
            background: #e92929 !important;
            border-color: #e92929 !important;
            color: white !important;
        }

        .flatpickr-day.today {
            border-color: #e92929 !important;
            color: #e92929 !important;
        }

        .flatpickr-day.disabled {
            color: #ccc !important;
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

        .fade-in {
            animation: fadeIn 0.6s ease-out forwards;
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

        .success-animation {
            animation: successPulse 0.6s ease-out;
        }

        /* Enhanced hover effects */
        .tour-option:hover {
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }

        .step-indicator-item:hover {
            transform: translateY(-1px);
            transition: all 0.3s ease;
        }

        /* Button hover effects */
        button:hover {
            transform: translateY(-1px);
            transition: all 0.3s ease;
        }

        button:active {
            transform: translateY(0);
        }

        /* Input focus effects */
        input:focus,
        textarea:focus {
            box-shadow: 0 0 0 3px rgba(233, 41, 41, 0.1);
        }
    </style>
</head>

<body>
    {{-- ツアー情報 --}}
    <input type="hidden" value="" id="js_itinerary_id">
    <input type="hidden" value="" id="js_adult_number">
    <input type="hidden" value="" id="js_adult_price">
    <input type="hidden" value="" id="js_child_number">
    <input type="hidden" value="" id="js_child_price">
    <input type="hidden" value="" id="js_total_price">
    <input type="hidden" value="" id="js_date">
    <input type="hidden" value="" id="js_firstName">
    <input type="hidden" value="" id="js_lastName">
    <input type="hidden" value="" id="js_email">
    <input type="hidden" value="" id="js_phone">
    <input type="hidden" value="" id="js_request">
    <input type="hidden" value={{$tour->title}} id="js_tour_name">
    <input type="hidden" value={{$tour->title}} id="js_itinerary_name">

    <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root overflow-x-hidden"
        style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">

            <!-- Header -->
            @include('components.nav')

            <!-- Hero Section -->
            <div class="flex justify-center">
                <div class="layout-content-container flex flex-col max-w-[1900px] flex-1">
                    <div class="@container">
                        <div class="@[480px]:p-4">
                            <div class="flex min-h-[400px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4"
                                style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://images.unsplash.com/photo-1545569341-9eb8b30979d9?w=1200&h=600&fit=crop");'>
                                <div class="flex flex-col gap-2 text-center">
                                    <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                                        Book Your Perfect Tokyo Adventure
                                    </h1>
                                    <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                        Personalized tours with expert local guides • Small groups • Authentic experiences
                                    </h2>
                                </div>
                                <div class="flex gap-4 flex-wrap justify-center">
                                    <button onclick="scrollToBooking()" class="flex min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#e92929] text-[#fcf8f8] text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                                        <span class="truncate">Book Now</span>
                                    </button>
                                    <button onclick="window.location.href='/tours'" class="flex min-w-[120px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-white/20 backdrop-blur-sm text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-white/30 transition-colors border border-white/30">
                                        <span class="truncate">View All Tours</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Section -->
            <section class="flex justify-center py-12">
                <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">

                    <!-- Progress Indicator -->
                    <div class="px-4 mb-8">
                        <div class="flex items-center justify-center">
                            <div class="flex items-center space-x-4">
                                <!-- Step 1 -->
                                <div class="flex items-center">
                                    <div id="step-1" class="flex items-center justify-center w-10 h-10 rounded-full bg-[#e92929] text-[#fcf8f8] text-sm font-bold transition-all duration-300 step-indicator-item">
                                        1
                                    </div>
                                    <div class="ml-2 text-sm font-medium text-[#1b0e0e]">Tour Selection</div>
                                </div>

                                <!-- Progress Line 1 -->
                                <div class="w-16 h-1 bg-[#f3e7e7] rounded-full overflow-hidden">
                                    <div id="progress-1" class="h-full bg-[#e92929] transition-all duration-500" style="width: 0%"></div>
                                </div>

                                <!-- Step 2 -->
                                <div class="flex items-center">
                                    <div id="step-2" class="flex items-center justify-center w-10 h-10 rounded-full bg-[#f3e7e7] text-[#994d4d] text-sm font-bold transition-all duration-300 step-indicator-item">
                                        2
                                    </div>
                                    <div class="ml-2 text-sm font-medium text-[#994d4d]">Information</div>
                                </div>

                                <!-- Progress Line 2 -->
                                <div class="w-16 h-1 bg-[#f3e7e7] rounded-full overflow-hidden">
                                    <div id="progress-2" class="h-full bg-[#e92929] transition-all duration-500" style="width: 0%"></div>
                                </div>

                                <!-- Step 3 -->
                                <div class="flex items-center">
                                    <div id="step-3" class="flex items-center justify-center w-10 h-10 rounded-full bg-[#f3e7e7] text-[#994d4d] text-sm font-bold transition-all duration-300 step-indicator-item">
                                        3
                                    </div>
                                    <div class="ml-2 text-sm font-medium text-[#994d4d]">Confirmation</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-3 gap-8 px-4">
                        <!-- Booking Form -->
                        <div class="lg:col-span-2">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">

                                <!-- Step 1: Tour Selection -->
                                <div id="step-1-content" class="fade-in p-6 lg:p-8">
                                    <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">Choose Your Adventure</h2>

                                    <!-- Tour Options -->
                                    <div class="space-y-4 mb-8">
                                        @foreach ($tour->itineraries as $itinerary)
                                        <div class="js_tour_option tour-option border-2 border-[#e7d0d0] bg-white rounded-lg p-6 cursor-pointer hover:border-[#e92929] hover:shadow-lg transition-all duration-300" data-tour="cultural" data-child-price="{{$itinerary->child_price}}" data-adult-price="{{$itinerary->adult_price}}" data-duration="6">
                                            <div class="flex items-start justify-between">
                                                <div class="flex-1">
                                                    <div class="flex items-center gap-3 mb-3">
                                                        <div class="w-12 h-12 bg-[#e92929]/10 rounded-lg flex items-center justify-center">
                                                            <i class="fas fa-torii-gate text-[#e92929]"></i>
                                                        </div>
                                                        <div>
                                                            <h3 class="text-[#1b0e0e] text-lg font-bold itinerary-title" data-id={{$itinerary->id}}>{{$itinerary["overview_title"]}}</h3>
                                                            <p class="text-[#994d4d] text-sm">{{$itinerary["duration"]}} hours • Max {{$itinerary["max_participants"]}} people</p>
                                                        </div>
                                                    </div>
                                                    <p class="text-[#994d4d] text-sm leading-relaxed mb-4">{{$itinerary["overview_description"]}}</p>
                                                    <div class="flex flex-wrap gap-2">
                                                        @foreach ($itinerary["itineraryHighlights"] as $highlight)
                                                        <span class="bg-[#f3e7e7] text-[#1b0e0e] px-3 py-1 rounded-full text-xs">{{$highlight->itinerary_highlight}}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="text-right ml-4">
                                                    <div class="text-[#1b0e0e] text-2xl font-black">¥{{$itinerary["adult_price"]}}</div>
                                                    <p class="text-[#994d4d] text-sm">per person</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>

                                    <!-- Date Selection -->
                                    <div class="mb-8">
                                        <h3 class="text-[#1b0e0e] text-lg font-bold mb-4">Select Date</h3>

                                        <!-- Date Input with Flatpickr -->
                                        <div class="relative">
                                            <input
                                                type="text"
                                                id="date-input"
                                                class="w-full px-4 py-3 border-2 border-[#e7d0d0] bg-[#fcf8f8] rounded-lg focus:border-[#e92929] focus:outline-none transition-colors duration-300 text-[#1b0e0e] text-sm cursor-pointer"
                                                placeholder="Select date"
                                                readonly>
                                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                                <i class="fas fa-calendar-alt text-[#994d4d]"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Participants -->
                                    <div class="mb-8">
                                        <h3 class="text-[#1b0e0e] text-lg font-bold mb-4">Number of Participants</h3>
                                        <div class="grid md:grid-cols-2 gap-6">
                                            <div class="flex items-center justify-between bg-[#f3e7e7] rounded-lg p-4">
                                                <div>
                                                    <div class="text-[#1b0e0e] text-sm font-medium">Adults</div>
                                                    <div class="text-[#994d4d] text-sm">Age 13+</div>
                                                </div>
                                                <div class="flex items-center gap-3">
                                                    <button id="js_decrement-adult" class="w-10 h-10 border-2 border-[#e7d0d0] bg-white rounded-full flex items-center justify-center hover:border-[#e92929] hover:text-[#e92929] transition-all duration-300">
                                                        <i class="fas fa-minus text-sm"></i>
                                                    </button>
                                                    <span id="adults-count" class="w-8 text-center text-[#1b0e0e] text-lg font-bold">2</span>
                                                    <button id="js_increment-adult" class="w-10 h-10 border-2 border-[#e7d0d0] bg-white rounded-full flex items-center justify-center hover:border-[#e92929] hover:text-[#e92929] transition-all duration-300">
                                                        <i class="fas fa-plus text-sm"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="flex items-center justify-between bg-[#f3e7e7] rounded-lg p-4">
                                                <div>
                                                    <div class="text-[#1b0e0e] text-sm font-medium">Children</div>
                                                    <div class="text-[#994d4d] text-sm">Age 6-12</div>
                                                </div>
                                                <div class="flex items-center gap-3">
                                                    <button id="js_decrement-child" class="w-10 h-10 border-2 border-[#e7d0d0] bg-white rounded-full flex items-center justify-center hover:border-[#e92929] hover:text-[#e92929] transition-all duration-300">
                                                        <i class="fas fa-minus text-sm"></i>
                                                    </button>
                                                    <span id="children-count" class="w-8 text-center text-[#1b0e0e] text-lg font-bold">0</span>
                                                    <button id="js_increment-child" class="w-10 h-10 border-2 border-[#e7d0d0] bg-white rounded-full flex items-center justify-center hover:border-[#e92929] hover:text-[#e92929] transition-all duration-300">
                                                        <i class="fas fa-plus text-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button id="continue-to-step-2" class="w-full bg-[#e92929] text-white py-3 rounded-lg font-medium hover:bg-[#d61f1f] transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                                        Continue to Personal Information
                                    </button>
                                </div>

                                <!-- Step 2: Personal Information -->
                                <div id="step-2-content" class="hidden p-6 lg:p-8">
                                    <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">Personal Information</h2>

                                    <form id="booking-form" class="space-y-6">
                                        <div class="grid md:grid-cols-2 gap-6">
                                            <div>
                                                <label class="block text-[#1b0e0e] text-sm font-medium mb-2">First Name *</label>
                                                <input type="text" id="first-name" class="w-full px-4 py-3 border-2 border-[#e7d0d0] bg-[#fcf8f8] rounded-lg focus:border-[#e92929] focus:outline-none transition-colors duration-300 text-[#1b0e0e] text-sm" placeholder="Enter your first name" required>
                                            </div>
                                            <div>
                                                <label class="block text-[#1b0e0e] text-sm font-medium mb-2">Last Name *</label>
                                                <input type="text" id="last-name" class="w-full px-4 py-3 border-2 border-[#e7d0d0] bg-[#fcf8f8] rounded-lg focus:border-[#e92929] focus:outline-none transition-colors duration-300 text-[#1b0e0e] text-sm" placeholder="Enter your last name" required>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-[#1b0e0e] text-sm font-medium mb-2">Email Address *</label>
                                            <input type="email" id="email" class="w-full px-4 py-3 border-2 border-[#e7d0d0] bg-[#fcf8f8] rounded-lg focus:border-[#e92929] focus:outline-none transition-colors duration-300 text-[#1b0e0e] text-sm" placeholder="your.email@example.com" required>
                                        </div>

                                        <div>
                                            <label class="block text-[#1b0e0e] text-sm font-medium mb-2">Phone Number *</label>
                                            <input type="tel" id="phone" class="w-full px-4 py-3 border-2 border-[#e7d0d0] bg-[#fcf8f8] rounded-lg focus:border-[#e92929] focus:outline-none transition-colors duration-300 text-[#1b0e0e] text-sm" placeholder="+81 90-1234-5678" required>
                                        </div>
                                        <div>
                                            <label class="block text-[#1b0e0e] text-sm font-medium mb-2">Special Requests or Dietary Restrictions</label>
                                            <textarea id="special-requests" rows="4" class="w-full px-4 py-3 border-2 border-[#e7d0d0] bg-[#fcf8f8] rounded-lg focus:border-[#e92929] focus:outline-none transition-colors duration-300 text-[#1b0e0e] text-sm" placeholder="Please let us know about any allergies, dietary restrictions, or special requests..."></textarea>
                                        </div>

                                        <div class="flex gap-4">
                                            <button type="button" id="back-to-step-1" class="flex-1 border-2 border-[#e7d0d0] text-[#994d4d] py-3 rounded-lg font-medium hover:border-[#994d4d] transition-colors duration-300">
                                                Back
                                            </button>
                                            <button type="button" id="continue-to-step-3" class="flex-1 bg-[#e92929] text-white py-3 rounded-lg font-medium hover:bg-[#d61f1f] transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                                                Review Booking
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Step 3: Confirmation -->
                                <div id="step-3-content" class="hidden p-6 lg:p-8">
                                    <h2 class="text-[#1b0e0e] text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">Booking Confirmation</h2>

                                    <div id="booking-summary" class="space-y-6 mb-8">
                                        <div class="bg-[#f3e7e7] rounded-lg p-6">
                                            <h4 class="text-[#1b0e0e] text-lg font-bold mb-4">Tour Details</h4>
                                            <div class="space-y-3 text-sm">
                                                <div class="flex justify-between">
                                                    <span class="text-[#994d4d]">Tour:</span>
                                                    <span class="text-[#1b0e0e] font-medium tour_name"></span>
                                                    <div class="text-[#994d4d] text-xs mt-1 itinerary_name"></div>
                                                </div>
                                                <div class="flex justify-between">
                                                    <span class="text-[#994d4d]">Date:</span>
                                                    <span class="text-[#1b0e0e] font-medium date"></span>
                                                </div>
                                                <div class="flex justify-between">
                                                    <span class="text-[#994d4d]">Participants:</span>
                                                    <span class="text-[#1b0e0e] font-medium"><span class="adult_number"></span> Adults, <span class="child_number"></span> Children</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-[#f3e7e7] rounded-lg p-6">
                                            <h4 class="text-[#1b0e0e] text-lg font-bold mb-4">Contact Information</h4>
                                            <div class="space-y-2 text-sm">
                                                <p class="flex justify-between"><span class="text-[#994d4d]">Name:</span><span><span class="text-[#1b0e0e] font-medium lastName"></span> <span class="text-[#1b0e0e] font-medium firstName"></span></span></p>
                                                <p class="flex justify-between"><span class="text-[#994d4d]">Email:</span> <span class="text-[#1b0e0e] font-medium email"></span></p>
                                                <p class="flex justify-between"><span class="text-[#994d4d]">Phone:</span> <span class="text-[#1b0e0e] font-medium phone"></span></p>
                                            </div>
                                        </div>

                                        <div class="bg-[#e92929]/5 border border-[#e92929]/20 rounded-lg p-6">
                                            <h4 class="text-[#1b0e0e] text-lg font-bold mb-4">Payment Summary</h4>
                                            <div class="space-y-2 text-sm mb-4">
                                                <div class="flex justify-between">
                                                    <span class="text-[#994d4d]">Adults (×$<span class="adult_number"></span>)</span>
                                                    <span class="text-[#1b0e0e] font-medium">¥<span class="adult_price"></span></span>
                                                </div>
                                                <div class="flex justify-between">
                                                    <span class="text-[#994d4d]">Children (×$<span class="child_number"></span>)</span>
                                                    <span class="text-[#1b0e0e] font-medium">¥<span class="child_price"></span></span>
                                                </div>
                                                <div class="border-t border-[#e7d0d0] pt-2 flex justify-between">
                                                    <span class="text-[#1b0e0e] text-lg font-bold">Total</span>
                                                    <span class="text-[#1b0e0e] text-lg font-black">¥<span class="total_price"></span></span>
                                                </div>
                                            </div>
                                            <p class="text-[#994d4d] text-xs">
                                                <i class="fas fa-info-circle mr-1"></i>
                                                Payment will be collected on the day of the tour. No upfront payment required.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex gap-4">
                                        <button type="button" id="back-to-step-2" class="flex-1 border-2 border-[#e7d0d0] text-[#994d4d] py-3 rounded-lg font-medium hover:border-[#994d4d] transition-colors duration-300">
                                            Back
                                        </button>
                                        <button type="button" id="confirm-booking" class="flex-1 bg-[#e92929] text-white py-3 rounded-lg font-medium hover:bg-[#d61f1f] transition-all duration-300">
                                            Confirm & Book Now
                                        </button>
                                    </div>
                                </div>

                                <!-- Success Message -->
                                <div id="success-message" class="hidden text-center py-12 p-6 lg:p-8">
                                    <div class="success-animation">
                                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                            <i class="fas fa-check text-3xl text-green-600"></i>
                                        </div>
                                        <h2 class="text-[#1b0e0e] text-3xl font-bold mb-4">Booking Confirmed!</h2>
                                        <p class="text-[#994d4d] text-sm mb-6">Thank you for choosing ShogunTours. We've sent a confirmation email with all the details.</p>
                                        <p class="text-[#994d4d] text-sm">Booking Reference: <span class="text-[#1b0e0e] font-bold">ST-2025-001234</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Booking Summary Sidebar -->
                        <div class="lg:col-span-1">
                            <div class="bg-white rounded-lg shadow-lg p-6 sticky top-8">
                                <h3 class="text-[#1b0e0e] text-lg font-bold mb-6">Booking Summary</h3>

                                <div id="summary-content">
                                    <div class="text-center text-[#994d4d] py-8">
                                        <i class="fas fa-clipboard-list text-4xl mb-4"></i>
                                        <p class="text-sm">Select a tour to see pricing details</p>
                                    </div>
                                </div>

                                <div id="price-breakdown" class="hidden">
                                    <!-- ツアー情報セクション -->
                                    <div class="border-b border-[#e7d0d0] pb-4 mb-6">
                                        <div class="space-y-3">
                                            <div>
                                                <!-- メインツアータイトル -->
                                                <h4 class="text-[#1b0e0e] font-semibold text-base line-clamp-2 mb-2">
                                                    {{$tour->title}}
                                                </h4>

                                                <!-- itineraryタイトル（小さく表示） -->
                                                <div class="bg-[#f8f4f4] rounded-md px-3 py-2">
                                                    <div class="flex items-center gap-2">
                                                        <i class="fas fa-route text-[#994d4d] text-xs"></i>
                                                        <span class="text-[#994d4d] text-xs font-medium uppercase tracking-wide">Itinerary</span>
                                                    </div>
                                                    <p class="text-[#1b0e0e] text-sm mt-1 line-clamp-1" id="js_itinerary_title"></p>
                                                </div>
                                            </div>

                                            <div class="flex items-center gap-2 text-[#994d4d] text-sm">
                                                <i class="fas fa-calendar-alt"></i>
                                                <span id="js_tour-date">March 15, 2025 (Saturday)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 価格内訳 -->
                                    <div class="space-y-3 mb-6">
                                        <div class="flex justify-between">
                                            <span class="text-[#994d4d] text-sm">Adults (×<span id="summary-adults">0</span>)</span>
                                            <span id="adult-total" class="text-[#1b0e0e] text-sm font-medium">¥0</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-[#994d4d] text-sm">Children (×<span id="summary-children">0</span>)</span>
                                            <span id="children-total" class="text-[#1b0e0e] text-sm font-medium">¥0</span>
                                        </div>
                                        <div class="border-t border-[#e7d0d0] pt-3">
                                            <div class="flex justify-between items-center">
                                                <span class="text-[#1b0e0e] text-lg font-bold">Total</span>
                                                <span id="grand-total" class="text-[#1b0e0e] text-2xl font-black">¥0</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
                                        <div class="flex items-center gap-2 text-green-700">
                                            <i class="fas fa-shield-alt"></i>
                                            <span class="text-sm font-medium">Free Cancellation</span>
                                        </div>
                                        <p class="text-green-600 text-sm mt-1">Up to 24 hours before the tour</p>
                                    </div>

                                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                        <div class="flex items-center gap-2 text-blue-700 mb-2">
                                            <i class="fas fa-info-circle"></i>
                                            <span class="text-sm font-medium">What's Included</span>
                                        </div>
                                        <ul class="text-blue-600 text-sm space-y-1">
                                            <li>• Professional guide</li>
                                            <li>• All entrance fees</li>
                                            <li>• Transportation</li>
                                            <li>• Small group experience</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('components.footer')
        </div>
    </div>

    <script src="{{mix("js/booking.js")}}"></script>

    <script>
        // State management
        let bookingState = {
            step: 1,
            selectedTour: null,
            selectedDate: null,
            adults: 2,
            children: 0,
            tourPrice: 0,
            personalInfo: {}
        };

        // Flatpickr instance
        let datePicker;

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            updateStepIndicator();
            initializeDatePicker();
        });

        function initializeDatePicker() {
            // Get today's date
            const today = new Date();

            // Initialize Flatpickr
            datePicker = flatpickr("#date-input", {
                dateFormat: "l, F j, Y", // Monday, April 15, 2025
                minDate: today,
                maxDate: new Date().fp_incr(365), // 1 year from today
                locale: "en",
                disable: [
                    // Disable some random dates as "booked"
                    "2025-04-18",
                    "2025-04-25",
                    "2025-05-01",
                    "2025-05-15"
                ],
                onChange: function(selectedDates, dateStr, instance) {
                    if (selectedDates.length > 0) {
                        bookingState.selectedDate = selectedDates[0].toISOString().split('T')[0];
                        // checkStep1Complete();
                    }
                },
                onReady: function(selectedDates, dateStr, instance) {
                    // Add custom class to calendar
                    instance.calendarContainer.classList.add('shogun-calendar');
                }
            });
        }

        function setupEventListeners() {
            // // Tour selection
            // document.querySelectorAll('.tour-option').forEach(option => {
            //     option.addEventListener('click', function() {
            //         selectTour(this);
            //     });
            // });

            // // Navigation buttons
            // document.getElementById('continue-to-step-2').addEventListener('click', () => goToStep(2));
            // document.getElementById('back-to-step-1').addEventListener('click', () => goToStep(1));
            // document.getElementById('continue-to-step-3').addEventListener('click', () => goToStep(3));
            // document.getElementById('back-to-step-2').addEventListener('click', () => goToStep(2));
            // document.getElementById('confirm-booking').addEventListener('click', confirmBooking);

            // // Form validation
            // document.querySelectorAll('#step-2-content input, #step-2-content textarea').forEach(input => {
            //     input.addEventListener('input', validateStep2);
            // });
        }

        function selectTour(element) {
            // Remove previous selection
            document.querySelectorAll('.tour-option').forEach(opt => {
                opt.classList.remove('border-[#e92929]', 'bg-red-50');
                opt.classList.add('border-[#e7d0d0]');
            });

            // Add selection styles
            element.classList.remove('border-[#e7d0d0]');
            element.classList.add('border-[#e92929]', 'bg-red-50');

            // Update state
            bookingState.selectedTour = element.dataset.tour;
            bookingState.tourPrice = parseInt(element.dataset.price);

            // updateSummary();
            // checkStep1Complete();
        }


        // function checkStep1Complete() {
        //     const continueBtn = document.getElementById('continue-to-step-2');
        //     const isComplete = bookingState.selectedTour && bookingState.selectedDate;

        //     continueBtn.disabled = !isComplete;
        //     continueBtn.classList.toggle('opacity-50', !isComplete);
        //     continueBtn.classList.toggle('cursor-not-allowed', !isComplete);
        // }

        function validateStep2() {
            const requiredFields = ['first-name', 'last-name', 'email', 'phone', 'terms'];
            const isValid = requiredFields.every(field => {
                const element = document.getElementById(field);
                return element.type === 'checkbox' ? element.checked : element.value.trim() !== '';
            });

            const continueBtn = document.getElementById('continue-to-step-3');
            continueBtn.disabled = !isValid;
            continueBtn.classList.toggle('opacity-50', !isValid);
        }

        // function updateSummary() {
        //     const summaryContent = document.getElementById('summary-content');
        //     const priceBreakdown = document.getElementById('price-breakdown');

        //     if (!bookingState.selectedTour) {
        //         summaryContent.innerHTML = `
        //             <div class="text-center text-[#994d4d] py-8">
        //                 <i class="fas fa-clipboard-list text-4xl mb-4"></i>
        //                 <p class="text-sm">Select a tour to see pricing details</p>
        //             </div>
        //         `;
        //         priceBreakdown.classList.add('hidden');
        //         return;
        //     }

        //     const tourNames = {
        //         'cultural': 'Cultural Heritage Tour',
        //         'food': 'Tokyo Food Adventure', 
        //         'modern': 'Modern Tokyo Experience'
        //     };

        //     const adultTotal = bookingState.adults * bookingState.tourPrice;
        //     const childrenTotal = bookingState.children * Math.round(bookingState.tourPrice * 0.7);
        //     const grandTotal = adultTotal + childrenTotal;

        //     summaryContent.innerHTML = `
        //         <div class="border-b border-[#e7d0d0] pb-4 mb-4">
        //             <h4 class="text-[#1b0e0e] text-sm font-bold">${tourNames[bookingState.selectedTour]}</h4>
        //             ${bookingState.selectedDate ? `<p class="text-[#994d4d] text-sm mt-1">${new Date(bookingState.selectedDate).toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' })}</p>` : ''}
        //         </div>
        //     `;

        //     document.getElementById('summary-adults').textContent = bookingState.adults;
        //     document.getElementById('summary-children').textContent = bookingState.children;
        //     document.getElementById('adult-total').textContent = `¥${adultTotal.toLocaleString()}`;
        //     document.getElementById('children-total').textContent = `¥${childrenTotal.toLocaleString()}`;
        //     document.getElementById('grand-total').textContent = `¥${grandTotal.toLocaleString()}`;

        //     priceBreakdown.classList.remove('hidden');
        // }

        function goToStep(step) {
            // Hide all steps
            document.querySelectorAll('[id^="step-"][id$="-content"]').forEach(el => {
                el.classList.add('hidden');
            });

            // Show current step
            document.getElementById(`step-${step}-content`).classList.remove('hidden');

            // Update state
            bookingState.step = step;

            // Handle step 3 - show summary
            if (step === 3) {
                showBookingSummary();
            }

            updateStepIndicator();
        }

        function updateStepIndicator() {
            const steps = [1, 2, 3];

            steps.forEach(stepNum => {
                const stepEl = document.getElementById(`step-${stepNum}`);
                const progressEl = document.getElementById(`progress-${stepNum}`);

                if (stepNum < bookingState.step) {
                    // Completed step
                    stepEl.className = 'flex items-center justify-center w-10 h-10 rounded-full bg-green-500 text-white text-sm font-bold transition-all duration-300 step-indicator-item';
                    stepEl.innerHTML = '<i class="fas fa-check"></i>';
                    if (progressEl) progressEl.style.width = '100%';
                } else if (stepNum === bookingState.step) {
                    // Current step
                    stepEl.className = 'flex items-center justify-center w-10 h-10 rounded-full bg-[#e92929] text-[#fcf8f8] text-sm font-bold transition-all duration-300 step-indicator-item';
                    stepEl.textContent = stepNum;
                    if (progressEl) progressEl.style.width = '50%';
                } else {
                    // Future step
                    stepEl.className = 'flex items-center justify-center w-10 h-10 rounded-full bg-[#f3e7e7] text-[#994d4d] text-sm font-bold transition-all duration-300 step-indicator-item';
                    stepEl.textContent = stepNum;
                    if (progressEl) progressEl.style.width = '0%';
                }
            });
        }

        function showBookingSummary() {
            const tourNames = {
                'cultural': 'Cultural Heritage Tour',
                'food': 'Tokyo Food Adventure',
                'modern': 'Modern Tokyo Experience'
            };

            const adultTotal = bookingState.adults * bookingState.tourPrice;
            const childrenTotal = bookingState.children * Math.round(bookingState.tourPrice * 0.7);
            const grandTotal = adultTotal + childrenTotal;

            const summaryHtml = `
                <div class="bg-[#f3e7e7] rounded-lg p-6">
                    <h4 class="text-[#1b0e0e] text-lg font-bold mb-4">Tour Details</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between">
                            <span class="text-[#994d4d]">Tour:</span>
                            <span class="text-[#1b0e0e] font-medium">${tourNames[bookingState.selectedTour]}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#994d4d]">Date:</span>
                            <span class="text-[#1b0e0e] font-medium">${new Date(bookingState.selectedDate).toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' })}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-[#994d4d]">Participants:</span>
                            <span class="text-[#1b0e0e] font-medium">${bookingState.adults} Adults, ${bookingState.children} Children</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#f3e7e7] rounded-lg p-6">
                    <h4 class="text-[#1b0e0e] text-lg font-bold mb-4">Contact Information</h4>
                    <div class="space-y-2 text-sm">
                        <p><span class="text-[#994d4d]">Name:</span> <span class="text-[#1b0e0e] font-medium">${document.getElementById('first-name').value} ${document.getElementById('last-name').value}</span></p>
                        <p><span class="text-[#994d4d]">Email:</span> <span class="text-[#1b0e0e] font-medium">${document.getElementById('email').value}</span></p>
                        <p><span class="text-[#994d4d]">Phone:</span> <span class="text-[#1b0e0e] font-medium">${document.getElementById('phone').value}</span></p>
                        ${document.getElementById('hotel').value ? `<p><span class="text-[#994d4d]">Hotel:</span> <span class="text-[#1b0e0e] font-medium">${document.getElementById('hotel').value}</span></p>` : ''}
                    </div>
                </div>

                <div class="bg-[#e92929]/5 border border-[#e92929]/20 rounded-lg p-6">
                    <h4 class="text-[#1b0e0e] text-lg font-bold mb-4">Payment Summary</h4>
                    <div class="space-y-2 text-sm mb-4">
                        <div class="flex justify-between">
                            <span class="text-[#994d4d]">Adults (×${bookingState.adults})</span>
                            <span class="text-[#1b0e0e] font-medium">¥${adultTotal.toLocaleString()}</span>
                        </div>
                        ${bookingState.children > 0 ? `
                        <div class="flex justify-between">
                            <span class="text-[#994d4d]">Children (×${bookingState.children})</span>
                            <span class="text-[#1b0e0e] font-medium">¥${childrenTotal.toLocaleString()}</span>
                        </div>` : ''}
                        <div class="border-t border-[#e7d0d0] pt-2 flex justify-between">
                            <span class="text-[#1b0e0e] text-lg font-bold">Total</span>
                            <span class="text-[#1b0e0e] text-lg font-black">¥${grandTotal.toLocaleString()}</span>
                        </div>
                    </div>
                    <p class="text-[#994d4d] text-xs">
                        <i class="fas fa-info-circle mr-1"></i>
                        Payment will be collected on the day of the tour. No upfront payment required.
                    </p>
                </div>
            `;

            document.getElementById('booking-summary').innerHTML = summaryHtml;
        }

        function confirmBooking() {
            // Simulate booking process
            document.getElementById('confirm-booking').innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing...';
            document.getElementById('confirm-booking').disabled = true;

            setTimeout(() => {
                // Hide confirmation content
                document.getElementById('step-3-content').classList.add('hidden');

                // Show success message
                document.getElementById('success-message').classList.remove('hidden');

                // Update step indicator to show completion
                bookingState.step = 4;
                updateStepIndicator();
            }, 2000);
        }

        function scrollToBooking() {
            const bookingSection = document.querySelector('section');
            if (bookingSection) {
                bookingSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    </script>
</body>

</html>