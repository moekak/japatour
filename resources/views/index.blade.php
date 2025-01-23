<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index_sp.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="shortcut icon" href="{{asset("img/favicon.ico")}}">
    <title>JapaTour</title>
</head>

<body>
    <div class="menu_modal">
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Tour</li>
            <li>Hot</li>
            <li>Contact</li>
        </ul>
    </div>
    <div class="bg hidden"></div>
    <main>
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
            <header class="absolute z2 js_header_pc pc_header">
                <div class="header_right font_icon">JapaTour</div>
                <div class="header_center">
                    <ul>
                        <li class="font_normal"><a href="#home">Home</a></li>
                        <li class="font_normal"><a href="#about">About</a></li>
                        <li class="font_normal"><a href="#tour">Tour</a></li>
                        <li class="font_normal"><a href="#hot">Hot</a></li>
                        <li class="font_normal"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="header_left">
                    <img src="{{asset("img/icons8-instagram.svg")}}" alt="" />
                    <img src="{{asset("img/icons8-tiktok.svg")}}" alt="" />
                    <img src="{{asset("img/icons8-youtube.svg")}}" alt="" />
                    <img src="{{asset("img/icons8-linkedin.svg")}}" alt="" />
                </div>
            </header>
            <header class="sp_header js_header relative">
                <button class="hamburger js_header_btn" type="button">
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                </button>
            </header>

            <div class="top_container absolute z2">
                <h1 class="title z2 js_title">Let Us Take You Away</h1>
                <p class="section_top_desc font_normal z2 js_title">
                    Discover the beauty of bespoke travel with us, where your dreams of
                    perfect escapes turn into vivid realities filled with unforgettable
                    memories.
                </p>
                <button class="z2 see-tour js_title">See More</button>
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
                        <div class="reason_btn_box reason_card_padding">
                            <button class="reason_see_more_btn">see more</button>
                        </div>
                    </div>
                    <div class="reason_card" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                        data-aos-duration="1000">
                        <img src="{{asset("img/icons8-customize-80.png")}}" alt="" /><br />
                        <small class="num reason_card_padding" style="display: block">02</small>
                        <p class="reason_sub reason_card_padding">Customizable Tours</p>
                        <p class="reason_desc reason_card_padding js_reason_card">
                            Our tours are highly customizable, tailored to fit your unique
                            schedule and interests. Whether you're looking to explore the
                            bustling cities, serene temples, or the natural beauty of the
                            countryside, we can design an itinerary that perfectly matches
                            your desires.
                        </p>
                        <div class="reason_btn_box reason_card_padding">
                            <button class="reason_see_more_btn">see more</button>
                        </div>
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
                        <div class="reason_btn_box reason_card_padding">
                            <button class="reason_see_more_btn">see more</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_third z3 relative">
            <div class="section_third_container relative">
                <div class="section_third_box relative">
                    <div class="section_third_area">
                        <h2 class="z3 relative">Seasonal Highlights</h2>
                        <p class="font_normal z3 relative">
                            Experience Japan's stunning seasonal changes - from spring cherry blossoms and summer festivals to autumn foliage and winter illuminations & snowscapes. Each season brings unique cultural experiences and natural beauty, making every visit special.
                        </p>
                        <button class="z3 relative">see more</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_forth z3 relative padding_section">
            <div class="section_forth_wrapper">
                <h2 class="font_subtitle" data-aos="fade-up" 
                    data-aos-duration="1000">
                    Popular Destinations
                </h2>
                <div class="destinations_area" data-aos="fade-up" 
                    data-aos-duration="1000">
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/tokyo_01.jpg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Tokyo</h5>
                            <p class="card-text">
                                Immerse yourself in Tokyo’s vibrant energy, where cutting-edge modernity meets traditional charm. From bustling markets to tranquil gardens, the city offers endless adventures.
                            </p>
                            <a href="#" class="btn destination-btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/enoshima.jpg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Enoshima</h5>
                            <p class="card-text">
                                Venture to Enoshima Island for breathtaking ocean views, fascinating caves, and ancient shrines. A seaside gem perfect for nature lovers and adventurers.
                            </p>
                            <a href="#" class="btn destination-btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/tokyo.jpg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Tokyo</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                            <a href="#" class="btn destination-btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/AdobeStock_74308722.jpeg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Asakusa</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                            <a href="#" class="btn destination-btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/kamakura.jpg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Kamakura</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                            <a href="#" class="btn destination-btn">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem">
                        <img src="{{asset("img/tokyo.jpg")}}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Tokyo</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                            <a href="#" class="btn destination-btn">Go somewhere</a>
                        </div>
                    </div>
                </div>
 
            </div>
        </section>

        <section class="section_fifth z3 relative padding_section">
            <h2 class="font_subtitle aos-init aos-animate review_title" data-aos="fade-up" data-aos-duration="1000">
                Customers Review
            </h2>
            <div class="section_fifth_wrapper">
                <div class="slider" id="js-slick">
                    <div class="review_container js_review_container relative">
                        <p class="review_container_txt js_review relative review">
                            The tour with Dean was amazing and FUN!. Dean was very patient and helpful guiding us to the correct location. I made a mistake and misread the instructions yet he was accommodating and patient. He imported alot of knowledge and shared great stories and legends that made the points of interest that much more interesting. Dean also shared Tod bits about the Japanese culture that were fascinating. It's great to hear it from a local person. I highly recommend taking this tour with Dean.
                        </p>
                        <span class="star">
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                        </span>
                        <p class="review_name review_container_txt js_review relative">
                            Judy – United States
                        </p>
                        <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />

                    </div>
                    <div class="review_container js_review_container relative">
                        <p class="review_container_txt js_review relative review">
                            Our guide, Dean, flexible, knowledgeable and fluent in English— all things that are important when touring with 4 teenagers. Dean was very good about managing our time and showing us some highlights of Tokyo. He was also very engaged with our teens and answered all their questions whether it was about a historical site or Japanese gaming culture. We highly recommend this tour, especially if you have kids / teens
                        </p>
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
                        <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />
                    </div>
                    <div class="review_container js_review_container relative">
                        <p class="review_container_txt js_review relative review">
                            Incredible experience, highly recommend booking with Dean! We did a full day in Kamakura and he showed us so much of the rich history of the city and the surrounding area. Dean let us experience everything at our own pace and we never felt rushed. Felt like a friend showing us around town and we enjoyed the sightseeing very much (especially the stories he told us of the places we went to - which we would not have known if we attempted to do this ourselves lol). Again, had a really great time and highly recommend, especially if you’re looking for an escape from the hustle and bustle of Tokyo
                        </p>
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
                        <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />
                    </div>
                    <div class="review_container js_review_container relative">
                        <p class="review_container_txt js_review relative review">
                            Dean is amazing! Not only he knows everything about Tokyo but he was showing me all the tips to take great pictures with the best spots. He has been very flexible stopping to buy water, finding air portable machine, staying more or less in the places that I preferred… He has also been very helpful along our walk. It is my first time in Japan and he showed me how the “basics” work and what to do or not to do! He also helped when people did not understand my English :-) I am so thankful I booked the tour with him! I will recommend him really strongly to anyone!
                        </p>
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
                        <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />
                    </div>
                    <div class="review_container js_review_container relative">
                        <p class="review_container_txt js_review relative review">
                            Great attitude, knowledgable, flexible, great small talk, pleasure to be on this tour with Dean, and he knows special places with real food, no scam, fully recommend!!!
                        </p>
                        <span class="star">
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                        </span>
                        <p class="review_name review_container_txt js_review relative"> Michał – Poland </p>
                        <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />
                    </div>
                    <div class="review_container js_review_container relative">
                        <p class="review_container_txt js_review relative review">
                            perfect guide, mcj during a rainy day
                        </p>
                        <span class="star">
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                            <img src="{{asset("img/icons8-star-32.png")}}" alt="" class="star_img" />
                        </span>
                        <p class="review_name review_container_txt js_review relative">
                            Francesca – Italy
                        </p>
                        <img src="{{asset("img/icons8-get-quote-100.png")}}" alt="" class="quote_img absolute" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section_sixth z3 relative padding_section">
            <div class="section_sixth_area">
                <h2 class="font_subtitle" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                    data-aos-duration="1000" style="max-width: 1200px">
                    New Seasonal Tours
                </h2>
                <div class="section_sixth_wrapper">
                    <div class="hot_left_wrapper">
                        <div class="hot_container"  data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                            <div class="hot_container_left">
                                <img src="{{asset("img/japan1.jpg")}}" alt="" class="hot_img" />
                            </div>
                            <div class="hot_container_right">
                                <p class="hot_normal_txt">
                                    <span class="hot_exlarge_txt bold" style="color: #52aaf9">01</span>
                                    October
                                </p>
                                <p class="hot_large_txt bold">Best tips to travel light</p>
                                <p class="hot_sml_txt">LIFESTYLE & TRAVEL</p>
                                <p class="hot_normal_txt">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Nam modi, possimus mollitia eos illum assumenda qui impedit
                                    fuga blanditiis error?
                                </p>
                                <div class="reason_btn_box reason_card_padding">
                                    <button class="reason_see_more_btn">see more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hot_container"  data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                            <div class="hot_container_left">
                                <img src="{{asset("img/japan1.jpg")}}" alt="" class="hot_img" />
                            </div>
                            <div class="hot_container_right">
                                <p class="hot_normal_txt">
                                    <span class="hot_exlarge_txt bold" style="color: #52aaf9">02</span>
                                    June
                                </p>
                                <p class="hot_large_txt bold">Best tips to travel light</p>
                                <p class="hot_sml_txt">LIFESTYLE & TRAVEL</p>
                                <p class="hot_normal_txt">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Nam modi, possimus mollitia eos illum assumenda qui impedit
                                    fuga blanditiis error?
                                </p>
                                <div class="reason_btn_box reason_card_padding">
                                    <button class="reason_see_more_btn">see more</button>
                                </div>
                            </div>
                        </div>
                        <div class="hot_container"  data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000">
                            <div class="hot_container_left">
                                <img src="{{asset("img/japan1.jpg")}}" alt="" class="hot_img" />
                            </div>
                            <div class="hot_container_right">
                                <p class="hot_normal_txt">
                                    <span class="hot_exlarge_txt bold" style="color: #52aaf9">02</span>
                                    June
                                </p>
                                <p class="hot_large_txt bold">Best tips to travel light</p>
                                <p class="hot_sml_txt">LIFESTYLE & TRAVEL</p>
                                <p class="hot_normal_txt">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Nam modi, possimus mollitia eos illum assumenda qui impedit
                                    fuga blanditiis error?
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
        <section class="section_seventh z3 relative padding_section">
            <div class="contact_wrapper">
                <h2 class="font_subtitle aos-init aos-animate review_title relative z3" data-aos="fade-up" data-aos-duration="1000">
                    Contat Us
                </h2>
                {{-- <p class="contact_large relative z3 c">
                    Let's Plan Your Next Adventure
                </p> --}}
                <p class="contact_sml c z3 relative">Get in touch with our travel experts for personalized tour planning</p>
                <form action="{{route("sendMessage")}}" method="POST">
                    @csrf
                    <div class="contact_filed_container relative z3">
                        <div class="contact_left">
                            <div class="input_container">
                                <label for="">name</label><br />
                                <input type="text" class="input_field" name="name"/>
                            </div>
                            <div class="input_container">
                                <label for="">email</label><br />
                                <input type="text" class="input_field" name="email"/>
                            </div>
                        </div>
                        <div class="contact_right">
                            <label for="">Message</label> <br />
                            <textarea  id="" class="textarea" name="body" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="btn_container relative z3">
                        <button type="submit" id="js_submit_btn">Submit</button>
                    </div>
                </form>
                <div class="icon_container relative z3">
                    <div class="icon_box">
                        <img src="{{asset("img/icons8-call-100.png")}}" alt="" />
                        <p class="icon_txt c">GIVE US A CALL</p>
                        <p class="icon_sml">000-0000-0000</p>
                    </div>
                    <div class="icon_box">
                        <img src="{{asset("img/icons8-email-100.png")}}" alt="" />
                        <p class="icon_txt c">SEND US A MESSAGE</p>
                        <p class="icon_sml">example.com@gmail.com</p>
                    </div>
                    <div class="icon_box">
                        <img src="{{asset("img/icons8-whatsapp-100.png")}}" alt="" />
                        <p class="icon_txt c">GIVE US A CALL</p>
                        <p class="icon_sml">000-0000-0000</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
</body>

</html>
