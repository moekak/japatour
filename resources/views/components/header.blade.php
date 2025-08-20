<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f3e7e7] px-10 py-3 sticky top-0 bg-[#fcf8f8] z-50">
        <a href={{route("top")}} class="flex items-center gap-4 text-[#1b0e0e]">
            <div class="size-8 items-center flex justify-center">
                    <img src="{{asset("img/logo2.png")}}" alt="">
            </div>
            <h2 class="text-[#1b0e0e] text-lg font-bold leading-tight tracking-[-0.015em]">ShogunTours</h2>
        </a>
    <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
                <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors"
                        href="#tours">Tours</a>
                <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors"
                        href="#gallery">Gallery</a>
                <a class="text-[#e92929] text-sm font-medium leading-normal hover:text-[#d61f1f] transition-colors font-bold"
                        href={{route("blog")}}>Blog</a>
                <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors"
                        href="#faq">FAQ</a>
                <a class="text-[#1b0e0e] text-sm font-medium leading-normal hover:text-[#e92929] transition-colors"
                        href="#contact">Contact</a>
            </div>
            <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#e92929] text-[#fcf8f8] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#d61f1f] transition-colors">
                <span class="truncate">Book Now</span>
            </button>
    </div>
</header>