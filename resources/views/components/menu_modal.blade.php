

@if (Route::currentRouteName() == 'home')  
    <div class="menu_modal">
        <ul>
            <li><a href="#home" class="js_menu">Home</a></li>
            <li><a href="#about" class="js_menu">About</a></li>
            <li><a href="#tour" class="js_menu">Tour</a></li>
            <li><a href="#hot" class="js_menu">Hot</a></li>
            <li><a href="#contact" class="js_menu">Contact</a></li>
        </ul>
    </div>
@else
    <div class="menu_modal">
        <ul>
            <li><a href="{{route("home")}}" class="js_menu">Home</a></li>
            <li><a href="{{route("home")}}#about" class="js_menu">About</a></li>
            <li><a href="{{route("home")}}#tour" class="js_menu">Tour</a></li>
            <li><a href="{{route("home")}}#hot" class="js_menu">Hot</a></li>
            <li><a href="{{route("home")}}#contact" class="js_menu">Contact</a></li>
        </ul>
    </div>
@endif