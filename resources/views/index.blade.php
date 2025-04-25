@extends('layout.default')
@section('main')
    @include('components.menu_modal')
    <main id="home">
        <div class="loader hidden">
            <div id="rotate">
                <div id="move">
                    <div id="dot"></div>
                </div>
                    <div id="ring"></div>
                </div>
                <p class="sending_txt">sending...</p>
        </div>
        <section class="section_top" id="home">
            <img src="{{asset("img/bg.jpg")}}" alt="" class="top_img image" />
            @include('components.header')
            <div class="top_container absolute z2">
                <h1 class="top_title z2 js_title">Let Us Take You Away</h1>
                <p class="section_top_desc font_normal z2 js_title">
                    Discover the beauty of bespoke travel with us, where your dreams of
                    perfect escapes turn into vivid realities filled with unforgettable
                    memories.
                </p>
            </div>
        </section>

        <!-- WHY CHOOSE US SECTION -->
        <section class="section_second z3 padding_section relative" id="about">
            <div class="section_second_wrapper">
                <h2 class="font_subtitle" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                    data-aos-duration="1000">
                    Why choose JapaTour?
                </h2>
                <p class="section_third_desc font_normal" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                    data-aos-duration="1000">
                    Choose JapaTour for an unforgettable journey that combines
                    affordability, customization, seasonal highlights, expertise, and
                    safety.
                </p>
                <div class="reason_card_container">
                    <div class="reason_card" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                        data-aos-duration="1000">
                        <img src="{{asset("img/icons8-dollar-coin-80.png")}}" alt="" /><br />
                        <small class="num reason_card_padding" style="display: block">01</small>
                        <p class="reason_sub reason_card_padding">Budget-Friendly</p>
                        <p class="reason_desc reason_card_padding js_reason_card">
                            At JapaTour, we pride ourselves on offering budget-friendly
                            itineraries and tours without compromising on quality. Our
                            services provide excellent value for your money and time,
                            ensuring you get the most out of your visit to Japan.
                        </p>
                        {{-- <div class="reason_btn_box reason_card_padding">
                            <button class="reason_see_more_btn">see more</button>
                        </div> --}}
                    </div>
                    <div class="reason_card" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                        data-aos-duration="1000">
                        <img class="reason_card-img2" src="{{asset("img/icons8-customize-80.png")}}" alt="" /><br />
                        <small class="num reason_card_padding" style="display: block">02</small>
                        <p class="reason_sub reason_card_padding">Customizable Tours</p>
                        <p class="reason_desc reason_card_padding js_reason_card">
                            Our tours are highly customizable, tailored to fit your unique
                            schedule and interests. Whether you're looking to explore the
                            bustling cities, serene temples, or the natural beauty of the
                            countryside, we can design an itinerary that perfectly matches
                            your desires.
                        </p>
                    </div>

                    <div class="reason_card second-item" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                        data-aos-duration="1000">
                        <img src="{{asset("img/icons8-guide-80.png")}}" alt="" /><br />
                        <small class="num reason_card_padding" style="display: block">03</small>
                        <p class="reason_sub reason_card_padding">Experienced Guides</p>
                        <p class="reason_desc reason_card_padding js_reason_card">
                            Our experienced guides are not only local experts but also
                            bilingual and multicultural. They bring a wealth of knowledge
                            and a deep understanding of Japan's rich history and culture,
                            ensuring you have an enriching and immersive experience.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_third z3 relative">
            <div class="section_third_wrapper">
                <div class="secttion_third-left-area">
                    <h2>We're Hiring Tour Guides!</h2>
                    <p>Exciting opportunity! Japatour is seeking passionate Tour Guides. Apply today!</p>
                    <button class="section_third_wrapper_btn"><a href="#contact">Become a tour guide</a></button>
                </div>
                <img src="{{asset("img/tourguide2.png")}}" alt="" class="tourguide_img">
            </div>
        </section>
        <section class="section_forth z3 relative padding_section" id="tour">
            <div class="section_forth_wrapper">
                <h2 class="font_subtitle" data-aos="fade-up" 
                    data-aos-duration="1000">
                    Popular Destinations
                </h2>
                <div class="destinations_area" data-aos="fade-up" 
                    data-aos-duration="1000">
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/tokyo.jpg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Tokyo</h5>
                                <p class="card-text">
                                    Immerse yourself in Tokyo’s vibrant energy, where cutting-edge modernity meets traditional charm. From bustling markets to tranquil gardens, the city offers endless adventures.
                                </p>
                            </div>
                            
                            <a href="https://www.getyourguide.com/tokyo-l193/tokyo-private-personalized-walking-tours-with-local-guide-t690681/?preview=2AYLCAQH0UHSL8J57ZNTRII3EWED6M3O" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/enoshima.jpeg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Enoshima</h5>
                                <p class="card-text">
                                    Venture to Enoshima Island for breathtaking ocean views, fascinating caves, and ancient shrines. A seaside gem perfect for nature lovers and adventurers.
                                </p> 
                            </div>                           
                            <a href="https://www.getyourguide.com/tokyo-l193/enoshima-island-private-walking-tours-with-local-guide-t746962/?preview=YXO3ZGDVG6LFLS54WKFNLRWSG72CKGP7" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/yokohama.jpeg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Yokohama</h5>
                                <p class="card-text">
                                    Explore Yokohama’s scenic waterfront, historic architecture, and dynamic attractions like Chinatown and the Red Brick Warehouses. A perfect blend of culture and coastal beauty.
                                </p>  
                            </div>
                            
                            <a href="https://www.getyourguide.com/tokyo-l193/yokohama-private-personalized-tours-with-local-guide-t746936/?preview=UAJ52MRGL3EKZHRPKE6AD4GQMJ0W6D62" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/sankeien.jpeg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Sankeien Garden
                                </h5>
                                <p class="card-text">
                                    Step into the peaceful haven of Sankeien Garden, a picturesque escape filled with historic buildings, koi ponds, and seasonal blooms that change throughout the year.
                                </p>  
                            </div>
                            
                            <a href="https://www.getyourguide.com/yokohama-l2128/sankeien-garden-private-walking-tour-with-local-expert--t845779/?preview=X1I5T00029M5BXTX5IQ8CTZJGOT6ZIRT" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/kamakura.jpg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Kamakura</h5>
                                <p class="card-text">
                                    Discover Kamakura, a city of timeless history and natural beauty. Marvel at the Great Buddha, wander through serene bamboo groves, and explore ancient Zen temples surrounded by lush greenery.
                                </p>  
                            </div>
                            
                            <a href="https://www.getyourguide.com/tokyo-l193/tokyo-kamakura-private-personalized-tour-with-local-guide-t725344/?preview=RJL35JEW6ICYG1C4CAW3APIJYY205HMO" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="destinations_area" data-aos="fade-up" 
                    data-aos-duration="1000">
                    @foreach ($tours as $tour)
                        <div class="tour-card" data-id="{{ $tour->id }}">
                            <!-- Image Section -->
                            <div class="image-wrapper">
                                <img src="{{ asset('storage/' . $tour->hero_image) }}" alt="{{ $tour->title }}" class="tour-image">
        
                                @if($tour->badge)
                                    <div class="badge">{{ $tour->badge }}</div>
                                @endif
                                <div class="price-tag">¥{{ number_format($tour->price) }}<span class="price-note">per person</span></div>
                            </div>
                            
                            <!-- Content Section -->
                            <div class="card-content">
                                <h3 class="title">{{$tour->title}}</h3>
                                
                                <p class="overview">
                                    {{mb_strlen($tour->overview) > 90 ? mb_substr($tour->overview, 0, 90) . '...' : $tour->overview}}
                                </p>
                                
                                <!-- Features -->
                                <div class="features">
                                    <div class="feature">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        {{ $tour->destinations }}
                                    </div>
                                    <div class="feature">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        {{ $tour->hours }} hrs
                                    </div>
                                    <div class="feature">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                            <path d="M2 12h20"></path>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                        </svg>
                                        {{ $tour->languages }}
                                    </div>
                                </div>
                                <button class="see-tour-btn">
                                    <a href="{{ route('tour.show', $tour->id) }}">See Tour</a>
                                </button>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="card" style="width: 25rem">
                        <img src="{{asset("img/tokyo.jpg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Tokyo</h5>
                                <p class="card-text">
                                    Immerse yourself in Tokyo’s vibrant energy, where cutting-edge modernity meets traditional charm. From bustling markets to tranquil gardens, the city offers endless adventures.
                                </p>
                            </div>
                            
                            <a href="https://www.getyourguide.com/tokyo-l193/tokyo-private-personalized-walking-tours-with-local-guide-t690681/?preview=2AYLCAQH0UHSL8J57ZNTRII3EWED6M3O" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/enoshima.jpeg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Enoshima</h5>
                                <p class="card-text">
                                    Venture to Enoshima Island for breathtaking ocean views, fascinating caves, and ancient shrines. A seaside gem perfect for nature lovers and adventurers.
                                </p> 
                            </div>                           
                            <a href="https://www.getyourguide.com/tokyo-l193/enoshima-island-private-walking-tours-with-local-guide-t746962/?preview=YXO3ZGDVG6LFLS54WKFNLRWSG72CKGP7" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/yokohama.jpeg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Yokohama</h5>
                                <p class="card-text">
                                    Explore Yokohama’s scenic waterfront, historic architecture, and dynamic attractions like Chinatown and the Red Brick Warehouses. A perfect blend of culture and coastal beauty.
                                </p>  
                            </div>
                            
                            <a href="https://www.getyourguide.com/tokyo-l193/yokohama-private-personalized-tours-with-local-guide-t746936/?preview=UAJ52MRGL3EKZHRPKE6AD4GQMJ0W6D62" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/sankeien.jpeg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Sankeien Garden
                                </h5>
                                <p class="card-text">
                                    Step into the peaceful haven of Sankeien Garden, a picturesque escape filled with historic buildings, koi ponds, and seasonal blooms that change throughout the year.
                                </p>  
                            </div>
                            
                            <a href="https://www.getyourguide.com/yokohama-l2128/sankeien-garden-private-walking-tour-with-local-expert--t845779/?preview=X1I5T00029M5BXTX5IQ8CTZJGOT6ZIRT" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/kamakura.jpg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Kamakura</h5>
                                <p class="card-text">
                                    Discover Kamakura, a city of timeless history and natural beauty. Marvel at the Great Buddha, wander through serene bamboo groves, and explore ancient Zen temples surrounded by lush greenery.
                                </p>  
                            </div>
                            
                            <a href="https://www.getyourguide.com/tokyo-l193/tokyo-kamakura-private-personalized-tour-with-local-guide-t725344/?preview=RJL35JEW6ICYG1C4CAW3APIJYY205HMO" class="btn destination-btn" target="blank">See details</a>
                        </div>
                    </div> --}}
                {{-- </div>  --}}
            </div>
        </section>

        <section class="section_fifth z3 relative padding_section">
            <h2 class="font_subtitle aos-init aos-animate review_title" data-aos="fade-up" data-aos-duration="1000" style="color: #fff;">
                Customers Review
            </h2>
            <div class="section_fifth_wrapper">
                <div class="slider" id="js-slick">
                    <a href="https://www.getyourguide.com/yokohama-l2128/sankeien-garden-private-walking-tour-with-local-expert--t845779/?preview=X1I5T00029M5BXTX5IQ8CTZJGOT6ZIRT" class="review_link" target="blank">
                        <div class="review_container js_review_container relative">
                            <p class="review_container_txt js_review relative review">
                                Dean's Sankeien tour was very enjoyable. We were an elderly couple from England, but he was able to accommodate our pace at a relaxed pace. The couple seemed to enjoy themselves and were very pleased.
                            </p>
                            <div>
                                <span class="star">
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                </span>
                                <p class="review_name review_container_txt js_review relative">
                                    Akemi – Japan
                                </p>
                            </div>
                            <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />

                        </div>
                    </a>
                    <a href="https://www.getyourguide.com/tokyo-l193/tokyo-private-personalized-walking-tours-with-local-guide-t690681/?preview=2AYLCAQH0UHSL8J57ZNTRII3EWED6M3O" class="review_link"  target="blank">
                        <div class="review_container js_review_container relative">
                            <p class="review_container_txt js_review relative review">
                                Dean is amazing! Not only he knows everything about Tokyo but he was showing me all the tips to take great pictures with the best spots. He has been very flexible stopping to buy water, finding air portable machine, staying more or less in the places that I preferred… He has also been very helpful along our walk. It is my first time in Japan and he showed me how the “basics” work and what to do or not to do! He also helped when people did not understand my English :-) I am so thankful I booked the tour with him! I will recommend him really strongly to anyone!
                            </p>
                            <div>
                                <span class="star">
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                </span>
                                <p class="review_name review_container_txt js_review relative">
                                    Florence – Belgium
                                </p> 
                            </div>
                            
                            <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />

                        </div>
                    </a>
                    <a href="https://www.getyourguide.com/tokyo-l193/tokyo-private-personalized-walking-tours-with-local-guide-t690681/?preview=2AYLCAQH0UHSL8J57ZNTRII3EWED6M3O" class="review_link" target="blank">
                        <div class="review_container js_review_container relative">
                            <p class="review_container_txt js_review relative review">
                                Our guide, Dean, flexible, knowledgeable and fluent in English— all things that are important when touring with 4 teenagers. Dean was very good about managing our time and showing us some highlights of Tokyo. He was also very engaged with our teens and answered all their questions whether it was about a historical site or Japanese gaming culture. We highly recommend this tour, especially if you have kids / teens
                            </p>
                            <div>
                                <span class="star">
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                </span>
                                <p class="review_name review_container_txt js_review relative">
                                    Keith – United States
                                </p>
                            </div>
                            
                            <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />

                        </div>
                    </a>
                    <a href="https://www.getyourguide.com/tokyo-l193/tokyo-private-personalized-walking-tours-with-local-guide-t690681/?preview=2AYLCAQH0UHSL8J57ZNTRII3EWED6M3O" class="review_link" target="blank">
                        <div class="review_container js_review_container relative">
                            <p class="review_container_txt js_review relative review">
                                Great attitude, knowledgable, flexible, great small talk, pleasure to be on this tour with Dean, and he knows special places with real food, no scam, fully recommend!!!
                            </p>
                            <div>
                                <span class="star">
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                </span>
                                <p class="review_name review_container_txt js_review relative">
                                    Michał – Poland
                                </p>
                            </div>
                            
                            <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />

                        </div>
                    </a>
                    <a href="https://www.getyourguide.com/tokyo-l193/yokohama-private-personalized-tours-with-local-guide-t746936/?preview=UAJ52MRGL3EKZHRPKE6AD4GQMJ0W6D62" class="review_link" target="blank">
                        <div class="review_container js_review_container relative">
                            <p class="review_container_txt js_review relative review">
                                The tour was excellent! Dean was very nice and let us personalized the itinerary to our requirements. 100% recommended!
                            </p>
                            <div>
                                <span class="star">
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                </span>
                                <p class="review_name review_container_txt js_review relative">
                                    Patricia – Spain
                                </p> 
                            </div>
                            
                            <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />

                        </div>
                    </a>
                    <a href="https://www.getyourguide.com/tokyo-l193/enoshima-island-private-walking-tours-with-local-guide-t746962/?preview=YXO3ZGDVG6LFLS54WKFNLRWSG72CKGP7" class="review_link" target="blank">
                        <div class="review_container js_review_container relative">
                            <p class="review_container_txt js_review relative review">
                                Incredible experience, highly recommend booking with Dean! We did a full day in Kamakura and he showed us so much of the rich history of the city and the surrounding area. Dean let us experience everything at our own pace and we never felt rushed. Felt like a friend showing us around town and we enjoyed the sightseeing very much (especially the stories he told us of the places we went to - which we would not have known if we attempted to do this ourselves lol). Again, had a really great time and highly recommend, especially if you’re looking for an escape from the hustle and bustle of Tokyo
                            </p>
                            <div>
                                <span class="star">
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                </span>
                                <p class="review_name review_container_txt js_review relative">
                                    Emily – United States
                                </p>
                            </div>
                            <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />
                        </div>
                    </a>
                    <a href="https://www.getyourguide.com/tokyo-l193/tokyo-kamakura-private-personalized-tour-with-local-guide-t725344/?preview=RJL35JEW6ICYG1C4CAW3APIJYY205HMO" class="review_link" target="blank">
                        <div class="review_container js_review_container relative">
                            <p class="review_container_txt js_review relative review">
                                We absolutely loved this tour! Dean was incredibly helpful and friendly, ensuring the entire day was planned nicely. The itinerary was well thought out, and his casual conversations made the experience even more enjoyable. He shared some fascinating insights and tips about Japanese culture that added so much value to our trip. If we had more time, we would have definitely booked his other tours as well. Highly recommended!
                            </p>
                            <div>
                                <span class="star">
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                </span>
                                <p class="review_name review_container_txt js_review relative">
                                    Rei – Turkey
                                </p>  
                            </div>
                            
                            <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />
                        </div>
                    </a>
                    <a href="https://www.getyourguide.com/tokyo-l193/tokyo-kamakura-private-personalized-tour-with-local-guide-t725344/?preview=RJL35JEW6ICYG1C4CAW3APIJYY205HMO" class="review_link" target="blank">
                        <div class="review_container js_review_container relative">
                            <p class="review_container_txt js_review relative review">
                                Dean was very flexible with our schedule. He suggested a shrine wrhat that wasn’t on my schedule but it turned out to be a beautiful site. So glad to be able to see Kamakura with Dean.
                            </p>
                            <div>
                                <span class="star">
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                </span>
                                <p class="review_name review_container_txt js_review relative">
                                    Helen – United States
                                </p> 
                            </div>
                            
                            <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />
                        </div>
                    </a>
                    <a href="https://www.getyourguide.com/tokyo-l193/tokyo-kamakura-private-personalized-tour-with-local-guide-t725344/?preview=RJL35JEW6ICYG1C4CAW3APIJYY205HMO" class="review_link" target="blank">
                        <div class="review_container js_review_container relative">
                            <p class="review_container_txt js_review relative review">
                                This tour was nothing short of incredible! Dean was so knowledgeable, kind, and funny throughout the tour. I had my one-year-old daughter with me and he helped me plan for navigating Kamakura with a toddler, which relieved the stress I had in doing a solo tour. The photos we received were stunning and so special because it’s difficult to get photos of the two of us when we’re traveling solo. I highly recommend adding them when booking. We were so impressed, that we’re also doing his tour of Enoshima and Yokohama!
                            </p>
                            <div>
                                <span class="star">
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                    <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                                </span>
                                <p class="review_name review_container_txt js_review relative">
                                    Shaina – United States
                                </p>
                            </div>
                            
                            <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />
                        </div>
                    </a>
            </div>
        </section>
        <section class="section_sixth z3 relative padding_section" id="hot">
            <div class="section_sixth_area">
                <h2 class="font_subtitle" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                    data-aos-duration="1000" style="max-width: 1200px">
                    Seasonal Highlights
                </h2>
                <div class="section_sixth_wrapper">
                    <div class="hot_left_wrapper">
                        <div class="hot_container"  data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                            <div class="hot_container_left">
                                <img src="https://img.freepik.com/free-photo/cherry-blossoms-castle-himeji-japan_335224-167.jpg?semt=ais_hybrid" alt="" class="hot_img" />
                            </div>
                            <div class="hot_container_right">
                                <p class="hot_normal_txt">
                                    <span class="hot_exlarge_txt bold" style="color: #52aaf9">01</span>
                                    Spring
                                </p>
                                <p class="hot_large_txt bold">Cherry Blossoms</p>
                                <p class="hot_sml_txt">LIFESTYLE & TRAVEL</p>
                                <p class="hot_normal_txt">
                                    Spring in Japan is all about cherry blossoms, where parks in Kyoto and Tokyo bloom with pink petals, creating the perfect "Hanami" picnic spots. Vibrant spring festivals add cultural charm with colorful parades and traditional performances.
                                </p>
                                <div class="reason_btn_box reason_card_padding">
                                    <button class="reason_see_more_btn">see more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hot_container"  data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                            <div class="hot_container_left">
                                <img src="{{asset("img/summer.jpeg")}}" alt="" class="hot_img" />
                            </div>
                            <div class="hot_container_right">
                                <p class="hot_normal_txt">
                                    <span class="hot_exlarge_txt bold" style="color: #52aaf9">02</span>
                                    Summer
                                </p>
                                <p class="hot_large_txt bold">Fireworks, Festivals</p>
                                <p class="hot_sml_txt">LIFESTYLE & TRAVEL</p>
                                <p class="hot_normal_txt">
                                    In summer, dazzling fireworks illuminate the night skies, while lively festivals like Bon Odori bring people together for music, dance, and delicious street food.
                                </p>
                                <div class="reason_btn_box reason_card_padding">
                                    <button class="reason_see_more_btn">see more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hot_container"  data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                            <div class="hot_container_left">
                                <img src="{{asset("img/fall.jpeg")}}" alt="" class="hot_img" />
                            </div>
                            <div class="hot_container_right">
                                <p class="hot_normal_txt">
                                    <span class="hot_exlarge_txt bold" style="color: #52aaf9">03</span>
                                    Autumn
                                </p>
                                <p class="hot_large_txt bold">Autumn Foliage, Seasonal Cuisine
                                </p>
                                <p class="hot_sml_txt">LIFESTYLE & TRAVEL</p>
                                <p class="hot_normal_txt">
                                    Autumn offers breathtaking foliage in places like Nikko and Kyoto, with fiery red and golden leaves, complemented by seasonal delights such as matsutake mushrooms and sweet Kyoho grapes.
                                </p>
                                <div class="reason_btn_box reason_card_padding">
                                    <button class="reason_see_more_btn">see more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hot_container"  data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                            <div class="hot_container_left">
                                <img src="https://www.theinvisibletourist.com/wp-content/uploads/2019/05/nagano-3068677_1920_e.jpg" alt="" class="hot_img" />
                            </div>
                            <div class="hot_container_right">
                                <p class="hot_normal_txt">
                                    <span class="hot_exlarge_txt bold" style="color: #52aaf9">04</span>
                                    Winter
                                </p>
                                <p class="hot_large_txt bold">Snow Festivals, Onsen Hot Springs
                                </p>
                                <p class="hot_sml_txt">LIFESTYLE & TRAVEL</p>
                                <p class="hot_normal_txt">
                                    Winter transforms Japan into a wonderland with snow festivals in Hokkaido, featuring impressive ice sculptures and romantic lights. To complete the experience, relaxing in an onsen hot spring while surrounded by snowy landscapes provides the ultimate winter retreat.
                                </p>
                                <div class="reason_btn_box reason_card_padding">
                                    <button class="reason_see_more_btn">see more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_seventh z3 relative padding_section" id="contact">
            <div class="contact_wrapper">
                <h2 class="font_subtitle aos-init aos-animate review_title relative z3" data-aos="fade-up" data-aos-duration="1000">
                    Contat Us
                <p class="contact_sml c z3 relative">Have questions about your tour or job openings? Leave a message below, and we’ll get back to you shortly!</p>
                <form action="{{route("sendMessage")}}" method="POST">
                    @csrf
                    <div class="contact_filed_container relative z3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="contact_filed_box">
                            <div class="input_container">
                                <label for="">name</label>
                                <input type="text" class="input_field" name="name"/>
                            </div>
                            <div class="input_container">
                                <label for="">email</label>
                                <input type="text" class="input_field" name="email"/>
                            </div> 
                            <div class="input_container">
                                <label for="">Message</label>
                                <textarea  id="" class="textarea" name="body" rows="10"></textarea>  
                            </div>
                            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">


                            

                            <div class="btn_container relative z3">
                                <button type="submit" id="js_submit_btn">Submit</button>
                            </div>
                        </div>
                        <svg class="animated" data-aos="fade-up" data-aos-duration="1000" id="freepik_stories-contact-us" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><style>svg#freepik_stories-contact-us:not(.animated) .animable {opacity: 0;}svg#freepik_stories-contact-us.animated #freepik--Icons--inject-2 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideUp,1.5s Infinite  linear floating;animation-delay: 0s,1s;}            @keyframes slideUp {                0% {                    opacity: 0;                    transform: translateY(30px);                }                100% {                    opacity: 1;                    transform: inherit;                }            }                    @keyframes floating {                0% {                    opacity: 1;                    transform: translateY(0px);                }                50% {                    transform: translateY(-10px);                }                100% {                    opacity: 1;                    transform: translateY(0px);                }            }        </style><g id="freepik--Floor--inject-2" class="animable" style="transform-origin: 250px 377.35px;"><ellipse cx="250" cy="377.35" rx="197.05" ry="111.94" style="fill: rgb(245, 245, 245); transform-origin: 250px 377.35px;" id="elgejraxbzxap" class="animable"></ellipse></g><g id="freepik--Shadows--inject-2" class="animable" style="transform-origin: 221.843px 391.992px;"><path d="M332,447.93,184.91,363a8.5,8.5,0,0,1,0-14.73l14.51-9.15a16.5,16.5,0,0,1,16.47,0L363,424.06a8.5,8.5,0,0,1,0,14.73l-14.51,9.14A16.46,16.46,0,0,1,332,447.93Z" style="fill: rgb(224, 224, 224); transform-origin: 273.955px 393.531px;" id="eltcqglp7ey2" class="animable"></path><ellipse cx="108.35" cy="352.17" rx="31.92" ry="18.33" style="fill: rgb(230, 230, 230); transform-origin: 108.35px 352.17px;" id="elzew5meqhdah" class="animable"></ellipse></g><g id="freepik--Plants--inject-2" class="animable animator-active" style="transform-origin: 403.941px 344.214px;"><path d="M384.16,374.7l14,8.05s-7.15-22.47-3.34-45.12c1.44-8.56,4.53-12.81,5.61-15.1s9.45-16.44,2-22.92-24.78,6.55-23.84,41.42A135.23,135.23,0,0,0,384.16,374.7Z" style="fill: #52AAF9; transform-origin: 392.02px 340.378px;" id="elul7j23s1krr" class="animable"></path><g id="elk6eqqycjtp"><path d="M384.16,374.7l14,8.05s-7.15-22.47-3.34-45.12c1.44-8.56,4.53-12.81,5.61-15.1s9.45-16.44,2-22.92-24.78,6.55-23.84,41.42A135.23,135.23,0,0,0,384.16,374.7Z" style="opacity: 0.5; transform-origin: 392.02px 340.378px;" class="animable" id="el33hwx5m7ahu"></path></g><path d="M390.67,378.94a.49.49,0,0,1-.47-.32c-.05-.15-5.4-14.77-5.23-38.27s12.52-36.26,12.64-36.38a.5.5,0,0,1,.71,0,.5.5,0,0,1,0,.71c-.12.12-12.18,12.5-12.35,35.68s5.11,37.78,5.17,37.92a.5.5,0,0,1-.3.64A.47.47,0,0,1,390.67,378.94Z" style="fill: rgb(255, 255, 255); transform-origin: 391.717px 341.382px;" id="elwiywz8hpkit" class="animable"></path><path d="M390,378.14l19.14,11a9.21,9.21,0,0,0,12.22-2.63,10,10,0,0,0,1.51-6.65c-.92-9.94-5.24-12.23.05-16.66s6.67-4.74,6.37-9-3.21-6.12-4.59-7.8-5.2-5.2-2.6-10.4,6.15-10.23.77-12.53c-3.21-1.38-8.56.46-12.08,4.28s-6.42,6.57-9.79,7.49-10.39,1.07-10.09,6.88,1.84,7.8.46,10.39C388.77,357.35,377.46,360.1,390,378.14Z" style="fill: #52AAF9; transform-origin: 406.764px 356.718px;" id="ele3b45nhrrke" class="animable"></path><path d="M399.46,384.06a.52.52,0,0,1-.5-.46c0-.34-2.94-34.66,20.66-57.5a.5.5,0,0,1,.69.72c-23.26,22.51-20.38,56.35-20.35,56.69a.5.5,0,0,1-.45.54Z" style="fill: rgb(255, 255, 255); transform-origin: 409.641px 355.023px;" id="elsjedu46z76" class="animable"></path><path d="M403.25,354.52a.5.5,0,0,1-.5-.46,19.64,19.64,0,0,0-7.23-13.73.5.5,0,0,1-.12-.7.49.49,0,0,1,.69-.12A20.37,20.37,0,0,1,403.75,354a.51.51,0,0,1-.46.55Z" style="fill: rgb(255, 255, 255); transform-origin: 399.529px 346.984px;" id="el2ml1lqzcw7i" class="animable"></path><path d="M401.62,360.41a.5.5,0,0,1-.33-.12.51.51,0,0,1-.05-.71c.24-.28,6.15-6.8,20-5.07a.5.5,0,0,1,.43.56.51.51,0,0,1-.56.44c-13.3-1.67-19.07,4.67-19.13,4.73A.51.51,0,0,1,401.62,360.41Z" style="fill: rgb(255, 255, 255); transform-origin: 411.397px 357.314px;" id="elanv17tnvmlf" class="animable"></path></g><g id="freepik--Device--inject-2" class="animable" style="transform-origin: 270.315px 235.548px;"><path d="M327.52,437.78,198.16,363.09c-9.13-5.27-16.53-19.41-16.53-31.58v-277c0-12.17,7.4-17.76,16.53-12.49l129.36,74.69c9.13,5.27,16.53,19.41,16.53,31.58v277C344.05,437.45,336.65,443.05,327.52,437.78Z" style="fill: rgb(69, 90, 100); transform-origin: 262.84px 239.899px;" id="elx5rwiiv1haa" class="animable"></path><path d="M342.42,108,213.05,33.31c-3.9-2.25-7.48-2.51-10.31-1.13h0a8.45,8.45,0,0,0-1,.59l-14.5,8.43c2.92-1.75,6.74-1.62,10.93.8l129.36,74.69c9.13,5.27,16.53,19.41,16.53,31.58v277c0,6.44-2.07,11-5.37,13.16L353,430.1h0c3.65-1.94,6-6.69,6-13.5v-277C359,127.41,351.55,113.27,342.42,108Z" style="fill: rgb(55, 71, 79); transform-origin: 273.12px 234.882px;" id="elux2xpwn87rs" class="animable"></path><path d="M344.05,148.27v277c0,6.44-2.07,11-5.37,13.16L353,430.1h0c3.65-1.94,6-6.69,6-13.5v-277l-14.9,8.65Z" style="fill: rgb(38, 50, 56); transform-origin: 348.84px 289.015px;" id="elsctkk44dcwb" class="animable"></path><polygon points="358.95 161.09 344.05 169.69 344.05 176.41 358.95 167.8 358.95 161.09" style="fill: rgb(55, 71, 79); transform-origin: 351.5px 168.75px;" id="elpvuf1ceazq" class="animable"></polygon><path d="M352.42,205.78h0c-1.33.77-2.41-.05-2.41-1.82V189.51a5.78,5.78,0,0,1,2.41-4.61h0c1.33-.77,2.41,0,2.41,1.82v14.45A5.78,5.78,0,0,1,352.42,205.78Z" style="fill: rgb(55, 71, 79); transform-origin: 352.42px 195.336px;" id="elmshfov0hvid" class="animable"></path><path d="M350,204V189.51a5.78,5.78,0,0,1,2.41-4.61,1.54,1.54,0,0,1,1.52-.14v0l-1.81-.93h0a1.56,1.56,0,0,0-1.56.12,5.8,5.8,0,0,0-2.42,4.61V203a2.17,2.17,0,0,0,.82,1.93h0l1.89,1v0A2.08,2.08,0,0,1,350,204Z" style="fill: rgb(69, 90, 100); transform-origin: 351.029px 194.803px;" id="elb08aui61jpc" class="animable"></path><path d="M352.42,240.75h0c-1.33.77-2.41,0-2.41-1.82V224.48a5.79,5.79,0,0,1,2.41-4.61h0c1.33-.77,2.41,0,2.41,1.83v14.44A5.76,5.76,0,0,1,352.42,240.75Z" style="fill: rgb(55, 71, 79); transform-origin: 352.42px 230.31px;" id="el3krt0sb7z0x" class="animable"></path><path d="M350,238.93V224.48a5.79,5.79,0,0,1,2.41-4.61,1.57,1.57,0,0,1,1.52-.14h0l-1.81-.94v0a1.51,1.51,0,0,0-1.56.12,5.77,5.77,0,0,0-2.42,4.61V238a2.16,2.16,0,0,0,.82,1.93h0l1.89,1v0A2.07,2.07,0,0,1,350,238.93Z" style="fill: rgb(69, 90, 100); transform-origin: 351.029px 229.779px;" id="el7b767d4fmb9" class="animable"></path><path d="M323,124.48,195.88,51.06a3.51,3.51,0,0,0-5.26,3V331.51c0,9.26,6.57,20.63,14.59,25.26l124,71.63a3.87,3.87,0,0,0,5.8-3.35V145.31C335.06,137.67,329.64,128.3,323,124.48Z" style="fill: #52AAF9; transform-origin: 262.815px 239.754px;" id="eldg6sn6ojq3f" class="animable"></path><g id="elp5pkvkegema"><path d="M323,124.48,195.88,51.06a3.51,3.51,0,0,0-5.26,3V331.51c0,9.26,6.57,20.63,14.59,25.26l124,71.63a3.87,3.87,0,0,0,5.8-3.35V145.31C335.06,137.67,329.64,128.3,323,124.48Z" style="fill: rgb(255, 255, 255); opacity: 0.9; transform-origin: 262.815px 239.754px;" class="animable" id="elzhl7bpnclr"></path></g><polygon points="233.9 70.23 235.87 78.52 278.01 102.82 285.29 98.94 233.9 70.23" style="fill: rgb(69, 90, 100); transform-origin: 259.595px 86.525px;" id="elrs7xa5j4mjk" class="animable"></polygon><path d="M246.29,78.24c0,1.38-1,1.93-2.16,1.25A4.78,4.78,0,0,1,242,75.75c0-1.37,1-1.93,2.16-1.24A4.76,4.76,0,0,1,246.29,78.24Z" style="fill: rgb(38, 50, 56); transform-origin: 244.145px 76.9977px;" id="el6a5u9cc2wcb" class="animable"></path><path d="M274.68,95.79a1.41,1.41,0,0,1-.66-.17l-21.52-12a1.35,1.35,0,0,1,1.31-2.36l21.53,12a1.35,1.35,0,0,1-.66,2.53Z" style="fill: rgb(38, 50, 56); transform-origin: 263.934px 88.448px;" id="elxk6z99cxbv" class="animable"></path><path d="M217.28,108.8c-1.31-.76-2.26-.1-2.26,1.57a5.07,5.07,0,0,0,2.26,4.22,2.38,2.38,0,0,0,2.47,0l2.09,3.78a4.53,4.53,0,0,1-4.75-.23,12.11,12.11,0,0,1-5.78-9.84c0-3.71,2.49-5,5.92-3a13.54,13.54,0,0,1,4.61,5l-2.09,1.66A7.37,7.37,0,0,0,217.28,108.8Z" style="fill: #52AAF9; transform-origin: 216.575px 111.648px;" id="elr98j3rzv89" class="animable"></path><path d="M233.87,121.33c0,3.74-2.53,5-6,3a12.35,12.35,0,0,1-6-10c0-3.74,2.53-5,6-3A12.28,12.28,0,0,1,233.87,121.33Zm-8.29-4.77a5.42,5.42,0,0,0,2.34,4.35c1.24.72,2.24,0,2.24-1.7a5.23,5.23,0,0,0-2.24-4.27C226.66,114.21,225.58,114.83,225.58,116.56Z" style="fill: #52AAF9; transform-origin: 227.87px 117.83px;" id="elrfompl44atp" class="animable"></path><path d="M237.9,117.36l4.32,9v-6.48l3.27,1.89v12.61l-3-1.74-4.3-8.92v6.44l-3.29-1.9V115.62Z" style="fill: #52AAF9; transform-origin: 240.195px 125px;" id="el4tlgdiplli8" class="animable"></path><path d="M256.18,127.91v3.3l-3.12-1.8v9.32l-3.61-2.09v-9.32l-3.1-1.79v-3.29Z" style="fill: #52AAF9; transform-origin: 251.265px 130.485px;" id="el150tcgp5u6k" class="animable"></path><path d="M263.22,142.81l-4.1-2.37-.56,1.46-3.7-2.14,4.61-9.95,3.71,2.14,4.44,15.18-3.85-2.22Zm-.89-3.5L261.21,135l-1.15,3Z" style="fill: #52AAF9; transform-origin: 261.24px 138.47px;" id="elj6tzxqqzxla" class="animable"></path><path d="M273.35,141.17c-1.31-.75-2.26-.1-2.26,1.58a5.09,5.09,0,0,0,2.26,4.22,2.42,2.42,0,0,0,2.48,0l2.09,3.78a4.59,4.59,0,0,1-4.76-.23,12.11,12.11,0,0,1-5.78-9.85c0-3.71,2.5-5,5.92-3a13.76,13.76,0,0,1,4.62,5l-2.09,1.65A7.53,7.53,0,0,0,273.35,141.17Z" style="fill: #52AAF9; transform-origin: 272.65px 144.019px;" id="elzfojea081dk" class="animable"></path><path d="M287.78,146.16v3.29l-3.12-1.8V157l-3.61-2.09v-9.32l-3.1-1.79v-3.29Z" style="fill: #52AAF9; transform-origin: 282.865px 148.755px;" id="el3ob0oetprkp" class="animable"></path><path d="M298.45,161.64c.89.51,1.57.11,1.57-1.14v-7.27l3.62,2.08v7.27c0,3.35-2,4.35-5.2,2.52a10.3,10.3,0,0,1-5.29-8.57v-7.27l3.62,2.09v7.27A3.71,3.71,0,0,0,298.45,161.64Z" style="fill: #52AAF9; transform-origin: 298.395px 157.632px;" id="elahxz6nzclo" class="animable"></path><path d="M309.47,161.68c-.41-.23-.67-.24-.67.14,0,1.58,5.65,3.86,5.65,8.43,0,2.8-2.13,2.81-4.59,1.39a18.27,18.27,0,0,1-5.47-5.17l1.34-2.36a16.08,16.08,0,0,0,4.16,4.36c.53.31.87.31.87-.14,0-1.64-5.66-3.82-5.66-8.25,0-2.52,1.84-3,4.68-1.4a17.42,17.42,0,0,1,4.75,4.23l-1.31,2.42A19.69,19.69,0,0,0,309.47,161.68Z" style="fill: #52AAF9; transform-origin: 309.46px 165.163px;" id="elpnyi5m74n4" class="animable"></path></g><g id="freepik--speech-bubble--inject-2" class="animable" style="transform-origin: 179.174px 155.62px;"><path d="M199.09,170.94a25.69,25.69,0,1,0-6.74,5.83l12.52,5.44Z" style="fill: #52AAF9; transform-origin: 179.174px 155.62px;" id="elwnfzzv1jb1j" class="animable"></path><g id="ele5c6ykk7psl"><path d="M199.09,170.94a25.69,25.69,0,1,0-6.74,5.83l12.52,5.44Z" style="opacity: 0.4; transform-origin: 179.174px 155.62px;" class="animable" id="elewn2q1ulscu"></path></g><path d="M169.65,153.34c0-.39-.28-.61-.79-.61a5.72,5.72,0,0,0-3.16,1.49l-1.42-2.76a9.08,9.08,0,0,1,5.17-1.82c2.4,0,4.22,1.26,4.22,3.14,0,1.34-1,2.63-2.28,3.92l-1.79,1.77h4.23v2.94h-9.09V159l4.05-4.19A2.73,2.73,0,0,0,169.65,153.34Z" style="fill: rgb(255, 255, 255); transform-origin: 169.055px 155.525px;" id="el69000isg6ds" class="animable"></path><path d="M181.23,149.81l-2.76,6.62h1.13V154.2h3.48v2.23h1.32v2.73h-1.32v2.25H179.6v-2.25h-4.95v-2.48l3-6.87Z" style="fill: rgb(255, 255, 255); transform-origin: 179.525px 155.61px;" id="elagoom3v7p8p" class="animable"></path><path d="M195.14,155.64v5.77h-3.72v-4.7a1.08,1.08,0,0,0-1.07-1.23c-.73,0-1.19.57-1.19,1.45v4.48h-3.72V149.15h3.72v4.51a3.14,3.14,0,0,1,2.74-1.46A3.17,3.17,0,0,1,195.14,155.64Z" style="fill: rgb(255, 255, 255); transform-origin: 190.296px 155.28px;" id="eld5ujhfe3xvs" class="animable"></path></g><g id="freepik--Character--inject-2" class="animable" style="transform-origin: 241.879px 274.784px;"><path d="M316.44,248.56V372.81a8,8,0,0,1-12,6.94l-66.92-38.64-11.86-6.84A26.95,26.95,0,0,1,212.2,311V186.74a8,8,0,0,1,12-6.94L303,225.29A26.87,26.87,0,0,1,316.44,248.56Z" style="fill: #52AAF9; transform-origin: 264.32px 279.775px;" id="ellehmyjasb3" class="animable"></path><g id="elr9zbzrosn7"><path d="M316.44,248.56V372.81a8,8,0,0,1-12,6.94l-66.92-38.64-11.86-6.84A26.95,26.95,0,0,1,212.2,311V186.74a8,8,0,0,1,12-6.94L303,225.29A26.87,26.87,0,0,1,316.44,248.56Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 264.32px 279.775px;" class="animable" id="el7sud8qsaz2"></path></g><path d="M277.89,322.08s12.53,20.78,3.48,44.21l-43.88-25.18Z" style="fill: rgb(38, 50, 56); transform-origin: 261.072px 344.185px;" id="elkm91xfw36d9" class="animable"></path><g id="el2ch0q92r3j9"><circle cx="283.92" cy="226.99" r="14.05" style="fill: rgb(38, 50, 56); transform-origin: 283.92px 226.99px; transform: rotate(-82.98deg);" class="animable" id="elwikythirmba"></circle></g><path d="M284,187.59s4.31-7,5.63-6.49-.86,7.18-.86,7.18,6.52,1.36,5.31,3-9.18,1.25-9.18,1.25Z" style="fill: rgb(38, 50, 56); transform-origin: 289.115px 186.822px;" id="elmfog13o3jx" class="animable"></path><path d="M287,205.63c-3,22.54-22,22.54-22,22.54L225.2,210.65s-3-2.63-3.92-8.67a26.41,26.41,0,0,1,0-7.46s0-.05,0-.07c1.27-9.48,8.36-19.67,23.8-22.8a50.59,50.59,0,0,1,10.28-1,46.83,46.83,0,0,1,5,.25c12,1.18,20.41,6.78,24.42,15.49a28,28,0,0,1,2,6.15A38.82,38.82,0,0,1,287,205.63Z" style="fill: rgb(38, 50, 56); transform-origin: 254.233px 199.41px;" id="el9hb6gny7v8i" class="animable"></path><path d="M191.45,249.23s-14.13-.49-19.57,13.28c0,0,6,4.05,13.87,0S191.45,249.23,191.45,249.23Z" style="fill: #52AAF9; transform-origin: 181.802px 256.769px;" id="elnnibyskoxam" class="animable"></path><g id="el5ihohzrt4lr"><path d="M191.45,249.23s-14.13-.49-19.57,13.28c0,0,6,4.05,13.87,0S191.45,249.23,191.45,249.23Z" style="opacity: 0.5; transform-origin: 181.802px 256.769px;" class="animable" id="el59u5hde78m"></path></g><path d="M191.05,255.86s-4-17.38-6.11-17.59-2.52,5.3-2.35,8.41l-5-10.76a2.71,2.71,0,0,0-3.76-1.21c-5,2.75-13.77,11.11,4.72,31.78Z" style="fill: rgb(148, 89, 89); transform-origin: 179.184px 250.431px;" id="elveqzb7karp" class="animable"></path><path d="M242.25,243.84l-3-.39a17.18,17.18,0,0,0-16,6.72l-17.85,23.76-14-24.7s-1.68,16.8-19.57,13.28l19.21,32.33a14.78,14.78,0,0,0,24.18,1.77l16.44-20.21Z" style="fill: #52AAF9; transform-origin: 207.04px 272.686px;" id="elfbci3hy1ag6" class="animable"></path><path d="M280.35,299.29c-4,10.14-4.44,12.12-2,17.19a64.87,64.87,0,0,1,4,11.64s-18.54,20.78-44.93,13l-11.86-6.84a26.56,26.56,0,0,1-6.58-5.36L222.59,302a9.4,9.4,0,0,0-.42-4.21l-3.79-11.11a30.36,30.36,0,0,1,7.52-31.51l12.74-12.45L272.1,247l5,1.43A14.15,14.15,0,0,1,287.18,264C285.54,275.8,282.86,292.92,280.35,299.29Z" style="fill: #52AAF9; transform-origin: 252.038px 292.792px;" id="eln1c7audrt8g" class="animable"></path><g id="el55fpfw9im8x"><path d="M280.35,299.29c-4,10.14-4.44,12.12-2,17.19a64.87,64.87,0,0,1,4,11.64s-18.54,20.78-44.93,13l-11.86-6.84a26.56,26.56,0,0,1-6.58-5.36L222.59,302a9.4,9.4,0,0,0-.42-4.21l-3.79-11.11a30.36,30.36,0,0,1,7.52-31.51l12.74-12.45L272.1,247l5,1.43A14.15,14.15,0,0,1,287.18,264C285.54,275.8,282.86,292.92,280.35,299.29Z" style="opacity: 0.5; transform-origin: 252.038px 292.792px;" class="animable" id="elbe436tuzjt9"></path></g><path d="M260.17,269l-6.7-5.71a5.37,5.37,0,0,0-5.23-1l-8.1,2.79-1.09-4.54a5.38,5.38,0,0,0-6.72-3.91l-3.51,1,5.94-11.38a21.31,21.31,0,0,1,8.59-8.78l2.33-1.28,19.25,1s7.17,3,7.17,9.75l-11.93,22" style="fill: #52AAF9; transform-origin: 250.46px 252.595px;" id="elxxhcd7jrtk8" class="animable"></path><polygon points="265.01 245.72 245.71 260.76 245.71 212.87 265.01 212.87 265.01 245.72" style="fill: rgb(148, 89, 89); transform-origin: 255.36px 236.815px;" id="elhnnpows643u" class="animable"></polygon><polygon points="246.01 241.77 240.14 265.12 264.93 245.72 246.01 241.77" style="fill: rgb(148, 89, 89); transform-origin: 252.535px 253.445px;" id="elh7ufu6tky1t" class="animable"></polygon><path d="M245.71,238.3A33.78,33.78,0,0,0,265,219.94v-7.07h-19.3Z" style="fill: rgb(112, 56, 56); transform-origin: 255.35px 225.585px;" id="elxgqpdz1gn0d" class="animable"></path><path d="M249.87,177.38c-7.32,0-22.88,4.08-24.68,23.24s-.06,34,9.82,35.44,32.84-5.73,35.92-30.53S257,177.38,249.87,177.38Z" style="fill: rgb(148, 89, 89); transform-origin: 247.932px 206.808px;" id="elssljhvlpeek" class="animable"></path><polygon points="238.35 208.73 238.35 220.02 231.73 217.99 238.35 208.73" style="fill: rgb(112, 56, 56); transform-origin: 235.04px 214.375px;" id="el3mu9hxcm2s6" class="animable"></polygon><circle cx="245.71" cy="210.68" r="2.3" style="fill: rgb(38, 50, 56); transform-origin: 245.71px 210.68px;" id="elhhg17kr0emg" class="animable"></circle><path d="M232.87,209.08a2.3,2.3,0,1,1-2.3-2.31A2.3,2.3,0,0,1,232.87,209.08Z" style="fill: rgb(38, 50, 56); transform-origin: 230.57px 209.07px;" id="el5nkofiuz7pd" class="animable"></path><path d="M227.76,204.28l4.5-2.67s-1.72-1.79-3.44-.72S227.76,204.28,227.76,204.28Z" style="fill: rgb(38, 50, 56); transform-origin: 229.948px 202.415px;" id="ellv7z9llelzr" class="animable"></path><path d="M235.24,224.6a9.75,9.75,0,0,0,6.19-1.66s.43,3.27-2.31,3.89S235.24,224.6,235.24,224.6Z" style="fill: rgb(112, 56, 56); transform-origin: 238.347px 224.929px;" id="el7xup5c4k6u4" class="animable"></path><path d="M231.31,183.9s2.75,26.45,38.72,27.28c0,0,10.87-26.29-10.61-34.83S231.31,183.9,231.31,183.9Z" style="fill: rgb(38, 50, 56); transform-origin: 252.045px 192.516px;" id="elxhsezwkapha" class="animable"></path><path d="M280.62,207.22h0l0,0h0l-4.42-2.56h0c-1.68-1-4-.86-6.57.62-5.1,2.94-9.24,10.11-9.24,16,0,2.95,1,5,2.72,6h0l4.34,2.5.25.14.15.09v0c1.64.8,3.83.61,6.24-.78,5.1-3,9.24-10.11,9.24-16C283.3,210.25,282.27,208.19,280.62,207.22Z" style="fill: #52AAF9; transform-origin: 271.86px 217.25px;" id="el64vogqlm124" class="animable"></path><g id="el1db0141es5c"><ellipse cx="274.06" cy="218.51" rx="13.06" ry="7.54" style="fill: #52AAF9; transform-origin: 274.06px 218.51px; transform: rotate(-60deg);" class="animable" id="el7xry6q6ebuf"></ellipse></g><g id="elq7h8ffggjx"><ellipse cx="274.06" cy="218.51" rx="13.06" ry="7.54" style="opacity: 0.5; transform-origin: 274.06px 218.51px; transform: rotate(-60deg);" class="animable" id="elcegvnkhvsp4"></ellipse></g><path d="M282.39,212.77h0l-3-1.75h0c-1.14-.68-2.73-.59-4.49.42a14,14,0,0,0-6.32,10.95c0,2,.71,3.43,1.86,4.09h0l3,1.71a1,1,0,0,0,.17.1l.1.06h0a4.6,4.6,0,0,0,4.28-.54,14,14,0,0,0,6.32-10.94C284.23,214.84,283.53,213.43,282.39,212.77Z" style="fill: #52AAF9; transform-origin: 276.445px 219.615px;" id="el60jz9ifk0ac" class="animable"></path><path d="M284.23,216.85a14,14,0,0,1-6.32,10.94c-3.5,2-6.33.38-6.33-3.65a13.94,13.94,0,0,1,6.33-10.94C281.4,211.18,284.23,212.81,284.23,216.85Z" style="fill: #52AAF9; transform-origin: 277.905px 220.49px;" id="elpuvmq0hapt" class="animable"></path><g id="elbf6u09gx2ju"><path d="M284.23,216.85a14,14,0,0,1-6.32,10.94c-3.5,2-6.33.38-6.33-3.65a13.94,13.94,0,0,1,6.33-10.94C281.4,211.18,284.23,212.81,284.23,216.85Z" style="opacity: 0.3; transform-origin: 277.905px 220.49px;" class="animable" id="elrtj5p3t46mq"></path></g><path d="M266.89,172.22a16.64,16.64,0,0,0-10-3.47H256a53.89,53.89,0,0,0-10.93,1c.66,0,1.32,0,2,0h-2v1.86h1.86a24.71,24.71,0,0,1,23.87,24.73v7.87a2.22,2.22,0,0,0,2.45,2.21l.23,0,2-.62h0a1.86,1.86,0,0,1-.41.08,2.45,2.45,0,0,0,2.12-2.48v-7.3C277.17,182.89,271.46,175.79,266.89,172.22Z" style="fill: #52AAF9; transform-origin: 261.13px 187.589px;" id="elb0q4mxkv9aw" class="animable"></path><path d="M254.3,235.51a5.75,5.75,0,0,1-2.39-.52l-6.25-2.89a.75.75,0,1,1,.62-1.36l6.25,2.89a4.22,4.22,0,0,0,4.82-.9l6-6.2a.75.75,0,0,1,1.06,0,.76.76,0,0,1,0,1.06l-6,6.2A5.69,5.69,0,0,1,254.3,235.51Z" style="fill: #52AAF9; transform-origin: 254.894px 230.91px;" id="el2eryuskvt0i" class="animable"></path><g id="elr0pdye3jvpr"><path d="M254.3,235.51a5.75,5.75,0,0,1-2.39-.52l-6.25-2.89a.75.75,0,1,1,.62-1.36l6.25,2.89a4.22,4.22,0,0,0,4.82-.9l6-6.2a.75.75,0,0,1,1.06,0,.76.76,0,0,1,0,1.06l-6,6.2A5.69,5.69,0,0,1,254.3,235.51Z" style="opacity: 0.5; transform-origin: 254.894px 230.91px;" class="animable" id="elaq4zld6e8pj"></path></g><path d="M247.3,230a2.92,2.92,0,1,1-2.92-2.92A2.92,2.92,0,0,1,247.3,230Z" style="fill: #52AAF9; transform-origin: 244.38px 230px;" id="elx856320zorm" class="animable"></path><g id="elnc8npldbi9"><path d="M247.3,230a2.92,2.92,0,1,1-2.92-2.92A2.92,2.92,0,0,1,247.3,230Z" style="opacity: 0.5; transform-origin: 244.38px 230px;" class="animable" id="elbochej1lobu"></path></g><path d="M277.17,196.1v7.3a2.45,2.45,0,0,1-2.12,2.48,2.36,2.36,0,0,1-2.61-2.35V196.1a26.29,26.29,0,0,0-27.36-26.31,53.89,53.89,0,0,1,10.93-1h.87a16.64,16.64,0,0,1,10,3.47C271.46,175.79,277.17,182.89,277.17,196.1Z" style="fill: #52AAF9; transform-origin: 261.125px 187.34px;" id="elihuv9dwqqlc" class="animable"></path><g id="elxkmkuamkw4d"><path d="M277.17,196.1v7.3a2.45,2.45,0,0,1-2.12,2.48,2.36,2.36,0,0,1-2.61-2.35V196.1a26.29,26.29,0,0,0-27.36-26.31,53.89,53.89,0,0,1,10.93-1h.87a16.64,16.64,0,0,1,10,3.47C271.46,175.79,277.17,182.89,277.17,196.1Z" style="opacity: 0.5; transform-origin: 261.125px 187.34px;" class="animable" id="el9nu4wy6l2kl"></path></g><path d="M265.93,333.67S261.09,347,278.39,353c0,0,5.65-8.3,0-15.09S265.93,333.67,265.93,333.67Z" style="fill: #52AAF9; transform-origin: 273.104px 343.1px;" id="elj091klp8mm" class="animable"></path><g id="el3u1x33n11mf"><path d="M265.93,333.67S261.09,347,278.39,353c0,0,5.65-8.3,0-15.09S265.93,333.67,265.93,333.67Z" style="opacity: 0.7; transform-origin: 273.104px 343.1px;" class="animable" id="elutr5pw90b8q"></path></g><path d="M272,334.28s-16.9,6.19-16.81,8.59,7.18.76,7.18.76l-2.59,1.7a15.84,15.84,0,0,0-6.05,7.38h0a2.92,2.92,0,0,0,1.34,3.65l6.42,3.4a3.07,3.07,0,0,0,4.19-1.35h0a6,6,0,0,1,3.51-3c3.49-1.16,10-4.5,12.61-13.64Z" style="fill: rgb(148, 89, 89); transform-origin: 267.663px 347.199px;" id="elmr3uykpz1m" class="animable"></path><path d="M277.07,248.41s-9,5-4.22,20.18,13.75,38.73,13.75,38.73l-20.67,26.35A15.82,15.82,0,0,1,277,340.31,14,14,0,0,1,278.39,353l25.66-33a23.25,23.25,0,0,0,3.64-21.83l-11-32.12a26.88,26.88,0,0,0-17-16.81Z" style="fill: #52AAF9; transform-origin: 287.44px 300.705px;" id="el2mrf8wmsrqm" class="animable"></path></g><g id="freepik--Icons--inject-2" class="animable" style="transform-origin: 100.88px 178.741px;"><path d="M125.15,158.74l-39.77-23a3.35,3.35,0,0,0-3.17-.35h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07.06,0c-1.09.62-1.78,2.06-1.78,4.12V189c0,3.74,2.27,8.09,5.08,9.71l39.77,23a3.18,3.18,0,0,0,3.5.15.18.18,0,0,0-.07.05l8.59-5h0c1.12-.6,1.83-2.06,1.83-4.15V168.45C130.23,164.71,128,160.36,125.15,158.74Z" style="fill: #52AAF9; transform-origin: 100.88px 178.728px;" id="el4sadco7fwq8" class="animable"></path><path d="M128.81,162.93a10.12,10.12,0,0,0-3.66-4.19l-39.77-23a3.35,3.35,0,0,0-3.17-.35h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.24,3.24,0,0,1,3.36.25l39.77,23a10.3,10.3,0,0,1,3.75,4.38h0Z" style="fill: #52AAF9; transform-origin: 101.03px 151.707px;" id="elwct3782jvy" class="animable"></path><path d="M121.46,217.82c0,2-.64,3.39-1.65,4l8.59-5h0c1.12-.6,1.83-2.06,1.83-4.15V168.45a12.51,12.51,0,0,0-1.42-5.52l-8.68,5.34h0a12.49,12.49,0,0,1,1.33,5.33Z" style="fill: #52AAF9; transform-origin: 125.02px 192.375px;" id="elrjz87jex3g" class="animable"></path><g id="eldhqwq57ybi"><path d="M128.81,162.93a10.12,10.12,0,0,0-3.66-4.19l-39.77-23a3.35,3.35,0,0,0-3.17-.35h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.24,3.24,0,0,1,3.36.25l39.77,23a10.3,10.3,0,0,1,3.75,4.38h0Z" style="opacity: 0.3; transform-origin: 101.03px 151.707px;" class="animable" id="elvroj1t65pos"></path></g><g id="el9vic10xhxoc"><path d="M121.46,217.82c0,2-.64,3.39-1.65,4l8.59-5h0c1.12-.6,1.83-2.06,1.83-4.15V168.45a12.51,12.51,0,0,0-1.42-5.52l-8.68,5.34h0a12.49,12.49,0,0,1,1.33,5.33Z" style="opacity: 0.6; transform-origin: 125.02px 192.375px;" class="animable" id="elw4aecr4c3q"></path></g><path d="M109.8,186.27c0,5.73-2.27,7.68-5.67,5.71a8,8,0,0,1-3.8-5c-1,1.23-2.55,1.31-4.73.05-3.58-2.07-6.4-7-6.4-11.79s2.79-6.44,6.4-4.36a11,11,0,0,1,4.26,4.57v-1.89l3.77,2.18v10.36a3,3,0,0,0,1.33,2.81c1.27.74,2.05-.51,2.05-4.22,0-6.49-4.16-13.37-10.31-16.92s-10.3-1.08-10.3,5.6a21,21,0,0,0,10.19,17.53,11.88,11.88,0,0,0,5.46,1.74l.89,3.45A14.21,14.21,0,0,1,96.59,194c-8-4.63-13.29-13.95-13.29-22.39s5.34-11.5,13.4-6.84C104.49,169.26,109.8,178.25,109.8,186.27Zm-9.88-4.81a7.34,7.34,0,0,0-3.47-6.35c-2-1.17-3.43-.35-3.43,2.37a7.39,7.39,0,0,0,3.43,6.39C98.45,185,99.92,184.27,99.92,181.46Z" style="fill: #52AAF9; transform-origin: 96.55px 179.341px;" id="elic5bh7woav" class="animable"></path><g id="elho6vheu61oc"><g style="opacity: 0.9; transform-origin: 96.55px 179.341px;" class="animable" id="elf4u234d0ngj"><path d="M109.8,186.27c0,5.73-2.27,7.68-5.67,5.71a8,8,0,0,1-3.8-5c-1,1.23-2.55,1.31-4.73.05-3.58-2.07-6.4-7-6.4-11.79s2.79-6.44,6.4-4.36a11,11,0,0,1,4.26,4.57v-1.89l3.77,2.18v10.36a3,3,0,0,0,1.33,2.81c1.27.74,2.05-.51,2.05-4.22,0-6.49-4.16-13.37-10.31-16.92s-10.3-1.08-10.3,5.6a21,21,0,0,0,10.19,17.53,11.88,11.88,0,0,0,5.46,1.74l.89,3.45A14.21,14.21,0,0,1,96.59,194c-8-4.63-13.29-13.95-13.29-22.39s5.34-11.5,13.4-6.84C104.49,169.26,109.8,178.25,109.8,186.27Zm-9.88-4.81a7.34,7.34,0,0,0-3.47-6.35c-2-1.17-3.43-.35-3.43,2.37a7.39,7.39,0,0,0,3.43,6.39C98.45,185,99.92,184.27,99.92,181.46Z" style="fill: rgb(255, 255, 255); transform-origin: 96.55px 179.341px;" id="eld3kwg788nlu" class="animable"></path></g></g><path d="M125.15,237.52l-39.77-23a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07.06,0c-1.09.62-1.78,2.06-1.78,4.11v44.22c0,3.75,2.27,8.09,5.08,9.71l39.77,23a3.16,3.16,0,0,0,3.5.15l-.07.06,8.59-5.05h0c1.12-.59,1.83-2,1.83-4.15V247.22C130.23,243.48,128,239.14,125.15,237.52Z" style="fill: #52AAF9; transform-origin: 100.88px 257.501px;" id="el1m01tedly0n" class="animable"></path><path d="M128.81,241.71a10.06,10.06,0,0,0-3.66-4.19l-39.77-23a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.23,3.23,0,0,1,3.36.24l39.77,23a10.27,10.27,0,0,1,3.75,4.39h0Z" style="fill: #52AAF9; transform-origin: 101.03px 230.492px;" id="el63d1y2bpbxh" class="animable"></path><path d="M121.46,296.59c0,2-.64,3.39-1.65,4.05l8.59-5.05h0c1.12-.59,1.83-2,1.83-4.15V247.22a12.47,12.47,0,0,0-1.42-5.51l-8.68,5.34h0a12.45,12.45,0,0,1,1.33,5.32Z" style="fill: #52AAF9; transform-origin: 125.02px 271.175px;" id="elp5pi0ihwc3b" class="animable"></path><g id="elmvbrbqlldr9"><path d="M128.81,241.71a10.06,10.06,0,0,0-3.66-4.19l-39.77-23a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.23,3.23,0,0,1,3.36.24l39.77,23a10.27,10.27,0,0,1,3.75,4.39h0Z" style="opacity: 0.3; transform-origin: 101.03px 230.492px;" class="animable" id="elrvv81egk9wa"></path></g><g id="elqtplcd2dju"><path d="M121.46,296.59c0,2-.64,3.39-1.65,4.05l8.59-5.05h0c1.12-.59,1.83-2,1.83-4.15V247.22a12.47,12.47,0,0,0-1.42-5.51l-8.68,5.34h0a12.45,12.45,0,0,1,1.33,5.32Z" style="opacity: 0.6; transform-origin: 125.02px 271.175px;" class="animable" id="eloo2db9vyhvt"></path></g><polygon points="92.05 257.29 82.46 241.71 82.46 262.82 92.05 257.29" style="fill: #52AAF9; transform-origin: 87.255px 252.265px;" id="el6dx6pz7omwq" class="animable"></polygon><polygon points="100.96 261.78 110.53 278.35 110.53 257.27 100.96 261.78" style="fill: #52AAF9; transform-origin: 105.745px 267.81px;" id="eltydtrcqblb" class="animable"></polygon><path d="M83.91,241l9.85,16a.63.63,0,0,1,.11.12.28.28,0,0,1,0,.12L96.8,262l2.48-1.17a.69.69,0,0,1,.13-.11.75.75,0,0,1,.32-.1l10-4.69Z" style="fill: #52AAF9; transform-origin: 96.82px 251.5px;" id="el6lv2uxj8m3q" class="animable"></path><path d="M99.51,262.46l-2.68,1.26a.75.75,0,0,1-.33.07.8.8,0,0,1-.69-.38l-2.93-4.76-9.62,5.56,25.89,14.94Z" style="fill: #52AAF9; transform-origin: 96.205px 268.9px;" id="elh5242nqj9g9" class="animable"></path><g id="elajqyif341ap"><g style="opacity: 0.9; transform-origin: 96.495px 260.075px;" class="animable" id="eljlh5e3rolv"><polygon points="92.05 257.29 82.46 241.71 82.46 262.82 92.05 257.29" style="fill: rgb(255, 255, 255); transform-origin: 87.255px 252.265px;" id="el1n5hpjtoikci" class="animable"></polygon><polygon points="100.96 261.78 110.53 278.35 110.53 257.27 100.96 261.78" style="fill: rgb(255, 255, 255); transform-origin: 105.745px 267.81px;" id="ellar3ybiw4p8" class="animable"></polygon><path d="M83.91,241l9.85,16a.63.63,0,0,1,.11.12.28.28,0,0,1,0,.12L96.8,262l2.48-1.17a.69.69,0,0,1,.13-.11.75.75,0,0,1,.32-.1l10-4.69Z" style="fill: rgb(255, 255, 255); transform-origin: 96.82px 251.5px;" id="elcohpf7ki48" class="animable"></path><path d="M99.51,262.46l-2.68,1.26a.75.75,0,0,1-.33.07.8.8,0,0,1-.69-.38l-2.93-4.76-9.62,5.56,25.89,14.94Z" style="fill: rgb(255, 255, 255); transform-origin: 96.205px 268.9px;" id="elhnrknl7648" class="animable"></path></g></g><path d="M125.15,80,85.38,57a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07.06,0c-1.09.61-1.78,2.06-1.78,4.11v44.22c0,3.74,2.27,8.09,5.08,9.71l39.77,23a3.16,3.16,0,0,0,3.5.15l-.07.05,8.59-5h0c1.12-.59,1.83-2,1.83-4.15V89.67C130.23,85.93,128,81.58,125.15,80Z" style="fill: #52AAF9; transform-origin: 100.88px 99.9808px;" id="eld4n96c55y5" class="animable"></path><path d="M128.81,84.16a10.09,10.09,0,0,0-3.66-4.2L85.38,57a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.23,3.23,0,0,1,3.36.24l39.77,23a10.27,10.27,0,0,1,3.75,4.39h0Z" style="fill: #52AAF9; transform-origin: 101.03px 72.9722px;" id="elbn0kz651dah" class="animable"></path><path d="M121.46,139c0,2-.64,3.39-1.65,4l8.59-5h0c1.12-.59,1.83-2,1.83-4.15V89.67a12.47,12.47,0,0,0-1.42-5.51l-8.68,5.34h0a12.45,12.45,0,0,1,1.33,5.32Z" style="fill: #52AAF9; transform-origin: 125.02px 113.58px;" id="elvwvr504wrb" class="animable"></path><g id="elw4hmxu8fblc"><path d="M128.81,84.16a10.09,10.09,0,0,0-3.66-4.2L85.38,57a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.23,3.23,0,0,1,3.36.24l39.77,23a10.27,10.27,0,0,1,3.75,4.39h0Z" style="opacity: 0.3; transform-origin: 101.03px 72.9722px;" class="animable" id="elazyuvpn973r"></path></g><g id="elxhj7jll27v"><path d="M121.46,139c0,2-.64,3.39-1.65,4l8.59-5h0c1.12-.59,1.83-2,1.83-4.15V89.67a12.47,12.47,0,0,0-1.42-5.51l-8.68,5.34h0a12.45,12.45,0,0,1,1.33,5.32Z" style="opacity: 0.6; transform-origin: 125.02px 113.58px;" class="animable" id="elajmstzlbr96"></path></g><path d="M108.45,120c-1.53-2.52-3.07-5-4.6-7.54a3.92,3.92,0,0,0-2.41-2c-.74-.15-1.48-.32-2.24-.54a1.38,1.38,0,0,1-.65-.56,63.22,63.22,0,0,1-5.93-13.6.75.75,0,0,1,.08-.61c.47-.47,1-.9,1.48-1.32s.73-1.39.38-2.65c-.74-2.67-1.45-5.34-2.19-8a4.38,4.38,0,0,0-2.86-3.32,8.09,8.09,0,0,0-4.9.18c-.61.23-.93.78-.94,1.73.26,1.83.43,3.64.78,5.5q3.7,20.12,17.8,37a2.85,2.85,0,0,0,2.23,1.28,6.72,6.72,0,0,0,4.23-1.63C109.6,123.12,109.51,121.7,108.45,120Z" style="fill: #52AAF9; transform-origin: 96.4936px 102.557px;" id="elm71jpa1dv9" class="animable"></path><path d="M108.33,106.37A21.24,21.24,0,0,0,106,98.13a24.35,24.35,0,0,0-3.75-5.51c-.39-.44-.72-.58-.92-.25s0,.8.38,1.23l.39.45a21.07,21.07,0,0,1,5,11.33,4,4,0,0,0,.09.91,2.43,2.43,0,0,0,.59.91c.21.15.45,0,.62,0C108.34,106.79,108.35,106.58,108.33,106.37Z" style="fill: #52AAF9; transform-origin: 104.826px 99.7274px;" id="el2edhqf12sq5" class="animable"></path><path d="M99.27,98.16a8.45,8.45,0,0,1,2.17,5,3.18,3.18,0,0,0,.31.81c.61.5.91.33.91-.3a11,11,0,0,0-2.81-6.41c-.38-.39-.69-.51-.87-.18A1,1,0,0,0,99.27,98.16Z" style="fill: #52AAF9; transform-origin: 100.793px 100.575px;" id="elr77vm21w92" class="animable"></path><g id="eluws1l8d53g"><g style="opacity: 0.9; transform-origin: 96.4936px 102.557px;" class="animable" id="elqaqfm96qkka"><path d="M108.45,120c-1.53-2.52-3.07-5-4.6-7.54a3.92,3.92,0,0,0-2.41-2c-.74-.15-1.48-.32-2.24-.54a1.38,1.38,0,0,1-.65-.56,63.22,63.22,0,0,1-5.93-13.6.75.75,0,0,1,.08-.61c.47-.47,1-.9,1.48-1.32s.73-1.39.38-2.65c-.74-2.67-1.45-5.34-2.19-8a4.38,4.38,0,0,0-2.86-3.32,8.09,8.09,0,0,0-4.9.18c-.61.23-.93.78-.94,1.73.26,1.83.43,3.64.78,5.5q3.7,20.12,17.8,37a2.85,2.85,0,0,0,2.23,1.28,6.72,6.72,0,0,0,4.23-1.63C109.6,123.12,109.51,121.7,108.45,120Z" style="fill: rgb(255, 255, 255); transform-origin: 96.4936px 102.557px;" id="el94z55766et" class="animable"></path><path d="M108.33,106.37A21.24,21.24,0,0,0,106,98.13a24.35,24.35,0,0,0-3.75-5.51c-.39-.44-.72-.58-.92-.25s0,.8.38,1.23l.39.45a21.07,21.07,0,0,1,5,11.33,4,4,0,0,0,.09.91,2.43,2.43,0,0,0,.59.91c.21.15.45,0,.62,0C108.34,106.79,108.35,106.58,108.33,106.37Z" style="fill: rgb(255, 255, 255); transform-origin: 104.826px 99.7274px;" id="eliqk31kwz8v" class="animable"></path><path d="M99.27,98.16a8.45,8.45,0,0,1,2.17,5,3.18,3.18,0,0,0,.31.81c.61.5.91.33.91-.3a11,11,0,0,0-2.81-6.41c-.38-.39-.69-.51-.87-.18A1,1,0,0,0,99.27,98.16Z" style="fill: rgb(255, 255, 255); transform-origin: 100.793px 100.575px;" id="elxekpyjl81mf" class="animable"></path></g></g></g><g id="freepik--Clouds--inject-2" class="animable" style="transform-origin: 383.195px 71.0679px;"><path d="M329.2,53.48l9.37,5.33V55.49c0-.23,0-.47,0-.7s0-.45,0-.67V54h0c.34-4.39,3.67-6.08,7.73-3.73a15.14,15.14,0,0,1,4.62,4.43c.91-6,5.78-8.12,11.67-4.73,6.54,3.78,11.84,13,11.84,20.52v7.1A3.24,3.24,0,0,0,376,80.42l5.52,3.23a8,8,0,0,1,3.92,6.86,3.27,3.27,0,0,1-4.91,2.83L329.34,63.75A9,9,0,0,1,324.86,56,2.9,2.9,0,0,1,329.2,53.48Z" style="fill: rgb(230, 230, 230); transform-origin: 355.15px 71.0679px;" id="elxl7pvvnqjnh" class="animable"></path><path d="M400.63,52.09,407.44,56V53.56c0-.17,0-.34,0-.51s0-.33,0-.49V52.5h0c.25-3.19,2.67-4.42,5.62-2.71A11,11,0,0,1,416.42,53c.67-4.34,4.21-5.91,8.49-3.44,4.76,2.75,8.61,9.43,8.61,14.92v5.17a2.34,2.34,0,0,0,1.16,2l4,2.35a5.78,5.78,0,0,1,2.85,5A2.38,2.38,0,0,1,438,81.08L400.73,59.56a6.51,6.51,0,0,1-3.25-5.63A2.11,2.11,0,0,1,400.63,52.09Z" style="fill: rgb(230, 230, 230); transform-origin: 419.505px 64.8823px;" id="elbt2fzvvu93d" class="animable"></path></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg>
                        
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection

@section('script')
        <!-- スムーススクロール -->
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
        <script>
        var scroll = new SmoothScroll('a[href^="#"]', {
            updateURL: false,
            easing: 'easeOutQuad',
            speed: 100,
        });
        </script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="{{mix("js/main.js")}}"></script>
        <script src="{{mix("js/common.js")}}"></script>
        <script src="https://www.google.com/recaptcha/api.js?render=6LdFXfsqAAAAAF7fDOUEvJDmIxAaLFb_nfPNMMle"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('6LdFXfsqAAAAAF7fDOUEvJDmIxAaLFb_nfPNMMle', {action: 'submit'}).then(function(token) {
                    document.getElementById('recaptchaResponse').value = token;
                });
            });
        </script>
@endsection

