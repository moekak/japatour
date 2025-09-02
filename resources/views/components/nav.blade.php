<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f3e7e7] px-4 lg:px-10 py-3 sticky top-0  z-50 {{ Route::currentRouteName() === "tour.show" ? "bg-white" : "bg-[#fcf8f8]" }}">
    <!-- Logo -->
    <a href="{{route("top")}}" class="flex items-center gap-4 text-[#1b0e0e]">
        <div class="size-8 items-center flex justify-center">
            <img src="{{asset('img/logo2.png')}}" alt="ShogunTours Logo">
        </div>
        <h2 class="text-[#1b0e0e] text-lg font-bold leading-tight tracking-[-0.015em]">ShogunTours</h2>
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden lg:flex flex-1 justify-end gap-8">
        <div class="flex items-center gap-9">
            <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors"
            href="{{ route("tours") }}">Tours</a>
            {{-- <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors"
                href="#gallery">Gallery</a> --}}
            <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#d61f1f] transition-colors"
                href="{{ route("blogs") }}">Blogs</a>
            {{-- <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors"
                href="#faq">FAQ</a> --}}
            <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors"
                href="{{route("top")}}#contact">Contact</a>
        </div>
        <a href="{{ route("tours") }}"
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#e92929] text-[#fcf8f8] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
            <span class="truncate">Book Now</span>
        </a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" class="lg:hidden flex items-center justify-center p-2 text-[#1b0e0e] hover:text-[#e92929]">
        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden lg:hidden bg-[#fcf8f8] border-b border-[#f3e7e7] sticky top-[63px] z-40">
    <div class="px-4 py-4 space-y-3">
        <a class="block text-[#1b0e0e] text-base font-medium leading-normal hover:text-[#e92929] transition-colors py-2"
            href="{{ route("tours") }}">Tours</a>
        {{-- <a class="block text-[#1b0e0e] text-base font-medium leading-normal hover:text-[#e92929] transition-colors py-2"
            href="#gallery">Gallery</a> --}}
        <a class="block  text-base font-medium leading-normal hover:text-[#d61f1f] transition-colors py-2"
            href="{{ route("blogs") }}">Blogs</a>
        {{-- <a class="block text-[#1b0e0e] text-base font-medium leading-normal hover:text-[#e92929] transition-colors py-2"
            href="#faq">FAQ</a> --}}
        <a class="block text-[#1b0e0e] text-base font-medium leading-normal hover:text-[#e92929] transition-colors py-2"
            href="{{route("top")}}#contact">Contact</a>
        <div class="pt-3">
            <a href="{{ route("tours") }}"
                class="w-full flex cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#e92929] text-[#fcf8f8] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                <span class="truncate">Book Now</span>
            </a>
        </div>
    </div>
</div>


<script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    mobileMenuBtn.addEventListener('click', function() {
        const isHidden = mobileMenu.classList.contains('hidden');

        if (isHidden) {
            // Show mobile menu
            mobileMenu.classList.remove('hidden');
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            // Hide mobile menu
            mobileMenu.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });

    // Close mobile menu when clicking on links
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    });
</script>