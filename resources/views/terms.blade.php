<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terms and Conditions - ShogunTours</title>
    <meta name="keywords" content="ShogunTours terms, booking conditions, tour terms, Japan tour conditions">
    <meta name="robots" content="index,follow">
    <meta name="description" content="Terms and Conditions for ShogunTours - Important information about booking, payment, cancellations, and participation in our Japan tours.">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />
    <link rel="shortcut icon" href="/img/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
    <div class="relative flex size-full min-h-screen flex-col bg-[#fcf8f8] group/design-root" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            
            <!-- Navigation -->
            @include('components.nav')

            <!-- Hero Section -->
            <div class="flex justify-center bg-gradient-to-r from-[#e92929] to-[#f04040] relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full -ml-24 -mb-24"></div>
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1 relative z-10">
                    <div class="flex flex-col gap-6 py-16 px-4 text-center">
                        <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] sm:text-5xl">
                            Terms and Conditions
                        </h1>
                        <p class="text-white text-lg font-normal leading-normal opacity-90">
                            Important information about booking and participating in our tours.
                        </p>
                        <div class="text-white text-sm opacity-75">
                            Last updated: September 01, 2025
                        </div>
                    </div>
                </div>
            </div>

            <!-- Terms and Conditions Content -->
            <section class="flex justify-center py-12">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="px-4">
                        
                        <!-- Introduction -->
                        <div class="mb-10">
                            <div class="bg-[#f3e7e7] rounded-lg p-6 mb-6">
                                <div class="flex items-start gap-3">
                                    <div class="text-[#e92929] mt-1">
                                        <i class="fas fa-handshake text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-[#1b0e0e] text-lg font-bold mb-2">Welcome to ShogunTours!</h3>
                                        <p class="text-[#994d4d] text-base leading-relaxed">
                                            By booking a tour with us, you agree to the following terms and conditions. Please read them carefully, as they outline important information about your booking, payment, cancellations, and participation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Terms and Conditions Sections -->
                        <div class="space-y-8">
                            
                            <!-- 1. Booking and Payment -->
                            <div class="border-l-4 border-[#e92929] pl-6">
                                <h2 class="text-[#1b0e0e] text-2xl font-bold mb-4">1. Booking and Payment</h2>
                                <div class="text-[#994d4d] text-base leading-relaxed space-y-4">
                                    <h4 class="text-[#1b0e0e] font-semibold">1.1 Reservation Process</h4>
                                    <div class="grid md:grid-cols-2 gap-4">
                                        <div class="space-y-3">
                                            <div class="flex items-start gap-3">
                                                <span class="flex-shrink-0 w-6 h-6 bg-[#e92929] text-white rounded-full text-sm font-bold flex items-center justify-center">1</span>
                                                <p class="text-sm">Submit a booking request through our website, partner platforms, or by contacting us directly.</p>
                                            </div>
                                            <div class="flex items-start gap-3">
                                                <span class="flex-shrink-0 w-6 h-6 bg-[#e92929] text-white rounded-full text-sm font-bold flex items-center justify-center">2</span>
                                                <p class="text-sm">Our team will review your request and confirm availability.</p>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex items-start gap-3">
                                                <span class="flex-shrink-0 w-6 h-6 bg-[#e92929] text-white rounded-full text-sm font-bold flex items-center justify-center">3</span>
                                                <p class="text-sm">We will contact you to finalize details such as itinerary, timing, and meeting arrangements.</p>
                                            </div>
                                            <div class="flex items-start gap-3">
                                                <span class="flex-shrink-0 w-6 h-6 bg-[#e92929] text-white rounded-full text-sm font-bold flex items-center justify-center">4</span>
                                                <p class="text-sm">Payment is arranged depending on the type of tour.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-[#fcf8f8] border border-[#f3e7e7] rounded-lg p-4">
                                        <h5 class="font-semibold text-[#1b0e0e] mb-2">Payment Timing</h5>
                                        <ul class="text-sm space-y-1">
                                            <li>• For some tours, payment is required once the booking is confirmed</li>
                                            <li>• For others, payment is due no later than two weeks before the tour date</li>
                                        </ul>
                                    </div>

                                    <h4 class="text-[#1b0e0e] font-semibold">1.2 Payment Methods</h4>
                                    <p>We accept major credit cards, Japanese Yen cash, and other payment options arranged in advance with your guide.</p>
                                </div>
                            </div>

                            <!-- 2. Cancellation and Refund Policy -->
                            <div class="border-l-4 border-[#e92929] pl-6">
                                <h2 class="text-[#1b0e0e] text-2xl font-bold mb-4">2. Cancellation and Refund Policy</h2>
                                <div class="text-[#994d4d] text-base leading-relaxed space-y-4">
                                    <p>We understand plans can change. Our cancellation policy balances flexibility with respect for our guides' time:</p>
                                    
                                    <div class="grid md:grid-cols-2 gap-4">
                                        <div class="space-y-3">
                                            <div class="bg-green-50 border border-green-200 rounded-lg p-3">
                                                <div class="font-semibold text-green-800">More than 7 days before</div>
                                                <div class="text-green-600 font-bold">100% refund</div>
                                            </div>
                                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3">
                                                <div class="font-semibold text-yellow-800">5–6 days before</div>
                                                <div class="text-yellow-600 font-bold">75% refund</div>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="bg-orange-50 border border-orange-200 rounded-lg p-3">
                                                <div class="font-semibold text-orange-800">4 days before</div>
                                                <div class="text-orange-600 font-bold">50% refund</div>
                                            </div>
                                            <div class="bg-red-50 border border-red-200 rounded-lg p-3">
                                                <div class="font-semibold text-red-800">Within 72 hours</div>
                                                <div class="text-red-600 font-bold">No refund</div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="text-[#1b0e0e] font-semibold">Weather and Unexpected Events</h4>
                                    <div class="bg-[#f3e7e7] rounded-lg p-4">
                                        <p class="mb-2">If a tour is cancelled due to severe weather, natural disasters, or other safety concerns, you may choose between:</p>
                                        <ul class="text-sm space-y-1">
                                            <li>• Full refund</li>
                                            <li>• Rescheduling (subject to availability)</li>
                                        </ul>
                                        <p class="text-sm mt-3"><strong>Note:</strong> Itineraries are subject to change due to closures, local events, or unforeseen circumstances. In such cases, we will provide the best possible alternative.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Participation and Conduct -->
                            <div class="border-l-4 border-[#e92929] pl-6">
                                <h2 class="text-[#1b0e0e] text-2xl font-bold mb-4">3. Participation and Conduct</h2>
                                <div class="text-[#994d4d] text-base leading-relaxed space-y-4">
                                    <div class="grid md:grid-cols-3 gap-4">
                                        <div class="bg-[#fcf8f8] border border-[#f3e7e7] rounded-lg p-4 text-center">
                                            <i class="fas fa-child text-2xl text-[#e92929] mb-2"></i>
                                            <h5 class="font-semibold text-[#1b0e0e] mb-2">Age Policy</h5>
                                            <p class="text-sm">Children under 12 join free of charge (excluding personal transportation and meals). All minors must be accompanied by an adult.</p>
                                        </div>
                                        <div class="bg-[#fcf8f8] border border-[#f3e7e7] rounded-lg p-4 text-center">
                                            <i class="fas fa-walking text-2xl text-[#e92929] mb-2"></i>
                                            <h5 class="font-semibold text-[#1b0e0e] mb-2">Physical Requirements</h5>
                                            <p class="text-sm">Most tours require walking and may not be suitable for guests with significant mobility issues. Please inform us of any special needs when booking.</p>
                                        </div>
                                        <div class="bg-[#fcf8f8] border border-[#f3e7e7] rounded-lg p-4 text-center">
                                            <i class="fas fa-users text-2xl text-[#e92929] mb-2"></i>
                                            <h5 class="font-semibold text-[#1b0e0e] mb-2">Behavior</h5>
                                            <p class="text-sm">Guests must respect local customs, laws, and fellow participants. We reserve the right to end a tour without refund in cases of disruptive or unsafe behavior.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Liability and Insurance -->
                            <div class="border-l-4 border-[#e92929] pl-6">
                                <h2 class="text-[#1b0e0e] text-2xl font-bold mb-4">4. Liability and Insurance</h2>
                                <div class="text-[#994d4d] text-base leading-relaxed space-y-4">
                                    <h4 class="text-[#1b0e0e] font-semibold">Limited Liability</h4>
                                    <p>ShogunTours' liability is limited to the cost of the booked tour. We are not responsible for accidents, injuries, delays, itinerary changes, or loss of personal items.</p>

                                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <i class="fas fa-shield-alt text-yellow-600"></i>
                                            <strong class="text-yellow-800">Insurance Recommendation</strong>
                                        </div>
                                        <p class="text-sm text-yellow-700">We strongly recommend purchasing travel insurance that covers medical emergencies, cancellations, and personal belongings.</p>
                                    </div>

                                    <h4 class="text-[#1b0e0e] font-semibold">Personal Responsibility</h4>
                                    <p>Guests participate at their own risk and are responsible for their own safety and possessions.</p>
                                </div>
                            </div>

                            <!-- 5. Privacy and Data Protection -->
                            <div class="border-l-4 border-[#e92929] pl-6">
                                <h2 class="text-[#1b0e0e] text-2xl font-bold mb-4">5. Privacy and Data Protection</h2>
                                <div class="text-[#994d4d] text-base leading-relaxed space-y-4">
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-check text-[#e92929] mt-1 text-sm"></i>
                                            <span>We collect personal information only as needed to provide our services (e.g., for booking, communication, and emergencies).</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-check text-[#e92929] mt-1 text-sm"></i>
                                            <span>Your data is handled in accordance with Japanese privacy laws and our Privacy Policy.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <i class="fas fa-check text-[#e92929] mt-1 text-sm"></i>
                                            <span>Photos taken during tours may be used for promotional purposes unless you notify us otherwise.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- 6. Force Majeure -->
                            <div class="border-l-4 border-[#e92929] pl-6">
                                <h2 class="text-[#1b0e0e] text-2xl font-bold mb-4">6. Force Majeure</h2>
                                <div class="text-[#994d4d] text-base leading-relaxed space-y-4">
                                    <p>We are not liable for cancellations or changes caused by circumstances beyond our control, such as:</p>
                                    
                                    <div class="grid md:grid-cols-2 gap-4">
                                        <ul class="space-y-2">
                                            <li class="flex items-center gap-2">
                                                <i class="fas fa-exclamation-triangle text-amber-500 text-sm"></i>
                                                <span class="text-sm">Natural disasters, earthquakes, or severe weather</span>
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <i class="fas fa-virus text-red-500 text-sm"></i>
                                                <span class="text-sm">Public health emergencies or government restrictions</span>
                                            </li>
                                        </ul>
                                        <ul class="space-y-2">
                                            <li class="flex items-center gap-2">
                                                <i class="fas fa-ban text-orange-500 text-sm"></i>
                                                <span class="text-sm">Transportation strikes or technical failures</span>
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <i class="fas fa-exclamation-circle text-red-600 text-sm"></i>
                                                <span class="text-sm">War, terrorism, or civil unrest</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="bg-[#f3e7e7] rounded-lg p-4">
                                        <p class="text-sm">In such cases, we will work with you to reschedule or find the best alternative solution.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 7. Changes to Terms -->
                            <div class="border-l-4 border-[#e92929] pl-6">
                                <h2 class="text-[#1b0e0e] text-2xl font-bold mb-4">7. Changes to Terms</h2>
                                <div class="text-[#994d4d] text-base leading-relaxed space-y-3">
                                    <p>We may update these terms from time to time. The latest version will always be available on our website.</p>
                                    <div class="bg-[#fcf8f8] border border-[#f3e7e7] rounded-lg p-4">
                                        <p class="text-sm"><strong>Important:</strong> Bookings confirmed before updates will follow the terms in place at the time of booking.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 8. Governing Law and Dispute Resolution -->
                            <div class="border-l-4 border-[#e92929] pl-6">
                                <h2 class="text-[#1b0e0e] text-2xl font-bold mb-4">8. Governing Law and Dispute Resolution</h2>
                                <div class="text-[#994d4d] text-base leading-relaxed space-y-3">
                                    <p>These terms are governed by Japanese law. Any disputes shall be handled through the Japanese court system, unless mediation is mutually agreed upon.</p>
                                    <div class="bg-[#f3e7e7] rounded-lg p-4">
                                        <div class="flex items-center gap-2 mb-2">
                                            <i class="fas fa-comments text-[#e92929]"></i>
                                            <strong class="text-[#1b0e0e]">Contact Us First</strong>
                                        </div>
                                        <p class="text-sm">We encourage you to contact us directly with any concerns before pursuing formal action.</p>
                                        <p class="text-sm mt-2"><strong>Email:</strong> info@shoguntoursjapan.com</p>
                                    </div>
                                </div>
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
    </script>

</body>
</html>