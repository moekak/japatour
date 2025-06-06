
@if (Route::currentRouteName() == 'top')  
    <header class="absolute z2 js_header_pc pc_header">
        <div class="header_right font_icon"><a href="#home">JapaTour</a></div>
        <div class="header_center">
            <ul>
                <li class="font_normal"><a href="#home" >Home</a></li>
                <li class="font_normal"><a href="#about" >About</a></li>
                <li class="font_normal"><a href="#tour" >Tour</a></li>
                <li class="font_normal"><a href="#hot">Hot</a></li>
                <li class="font_normal"><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <header class="sp_header js_header relative">
        <button class="hamburger js_header_btn" type="button">
            <span class="hamburger__line"></span>
            <span class="hamburger__line"></span>
            <span class="hamburger__line"></span>
        </button>
    </header>
@elseif(Route::currentRouteName() == 'tour.show' || Route::currentRouteName() == 'tour.book' ||  Route::currentRouteName() == 'tour.contact')

    <header class="pc_header" style="transform: none; border-bottom: 1px solid rgba(128, 128, 128, 0.371);">
        <div class="header_right font_icon" style="color: #52aaf9;"><a href="{{route("top")}}">JapaTour</a></div>
        <div class="header_center">
            <ul>
                <li class="font_normal header-style"><a href="{{route("top")}}" >Home</a></li>
                <li class="font_normal header-style"><a href="{{route("top")}}#about" >About</a></li>
                <li class="font_normal header-style"><a href="{{route("top")}}#tour" >Tour</a></li>
                <li class="font_normal header-style"><a href="{{route("top")}}#hot">Hot</a></li>
                <li class="font_normal header-style"><a href="{{route("top")}}#contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <header class="sp_header relative" style="transform: none;">
        <button class="hamburger js_header_btn" type="button">
            <span class="hamburger__line" style="background: #424242"></span>
            <span class="hamburger__line" style="background: #424242"></span>
            <span class="hamburger__line" style="background: #424242"></span>
        </button>
    </header>
@else
    <header class="pc_header header_style_law">
        <div class="header_right font_icon"><a href="{{route("top")}}">JapaTour</a></div>
        <div class="header_center_law">
            <ul>
                <li class="font_normal"><a href="{{route("top")}}" >Home</a></li>
                <li class="font_normal"><a href="{{route("top")}}#about" >About</a></li>
                <li class="font_normal"><a href="{{route("top")}}#tour" >Tour</a></li>
                <li class="font_normal"><a href="{{route("top")}}#hot">Hot</a></li>
                <li class="font_normal"><a href="{{route("top")}}#contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <header class="sp_header relative" style="transform: translateY(0px); border-bottom: 1px solid  rgba(95, 95, 95, 0.181);">
        <button class="hamburger js_header_btn" type="button">
            <span class="hamburger__line" style="background: rgba(95, 95, 95);"></span>
            <span class="hamburger__line" style="background: rgba(95, 95, 95);"></span>
            <span class="hamburger__line" style="background: rgba(95, 95, 95);"></span>
        </button>
    </header>
@endif

