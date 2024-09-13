<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @include('home.includes.head')

    <!-- Demo styles -->
    <style>
        .swiper-slide {
            background: 000;
        }


        .swiper-button-next {
            left: 100%;
        }

        .swiper-button-prev {
            left: -3%;
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="testimonial-section" data-cues="zoomIn">
        <div class="container">
            <div class="row">
                <div class="row align-items-center d-flex">
                    <div class="col-lg-6">
                        <div class="toptech-section-title text-left">
                            <h4>Testimonials</h4>
                            <h1>WHAT THEY SAID</h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="toptech-desc">
                            <p>At Zatonix, we take pride in delivering exceptional services to our clients. Here’s what
                                some of our valued clients have to say about their experience working with us.</p>
                        </div>
                    </div>
                </div>


                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="col-lg-4  col-md-6 swiper-slide">
                            <div class="single-testimonial-box">
                                <div class="testi-quote-icon">
                                    <img src="{{ asset('home/assets/images/resource/quote-icon.png') }}" alt="icon">
                                </div>
                                <div class="testimonial-box-description">
                                    <p>Zatonix’s innovative marketing strategies have completely transformed our brand
                                        presence. Their expertise in digital marketing has driven significant growth,
                                        and we’re now a leader in our industry. A top-tier agency.</p>
                                </div>
                                <div class="testimonial-autor">
                                    <div class="testimonial-autor-title">
                                        <h5>Emily Clark</h5>
                                        <div class="autor-rating">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 swiper-slide">
                            <div class="single-testimonial-box">
                                <div class="testi-quote-icon">
                                    <img src="{{ asset('home/assets/images/resource/quote-icon.png') }}" alt="icon">
                                </div>
                                <div class="testimonial-box-description">
                                    <p>Zatonix understood our market and delivered a campaign that resonated perfectly
                                        with our audience. Their creativity and data-driven approach make them the best
                                        marketing partner we’ve ever had.</p>
                                </div>
                                <div class="testimonial-autor">
                                    <div class="testimonial-autor-title">
                                        <h5>Liam O’Connell</h5>
                                        <div class="autor-rating">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 swiper-slide">
                            <div class="single-testimonial-box">
                                <div class="testi-quote-icon">
                                    <img src="{{ asset('home/assets/images/resource/quote-icon.png') }}" alt="icon">
                                </div>
                                <div class="testimonial-box-description">
                                    <p>Working with Zatonix was a game-changing experience. They brought a fresh
                                        perspective
                                        to our campaigns and helped us reach new markets with impressive
                                        results. Highly
                                        professional and effective.</p>
                                </div>
                                <div class="testimonial-autor">
                                    <div class="testimonial-autor-title">
                                        <h5>Sophia Chen</h5>
                                        <div class="autor-rating">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 swiper-slide">
                            <div class="single-testimonial-box">
                                <div class="testi-quote-icon">
                                    <img src="{{ asset('home/assets/images/resource/quote-icon.png') }}" alt="icon">
                                </div>
                                <div class="testimonial-box-description">
                                    <p>Zatonix’s team is exceptional! They crafted a marketing strategy that not only
                                        boosted our sales but also strengthened our brand identity. Their dedication and
                                        attention to detail are unmatched.</p>
                                </div>
                                <div class="testimonial-autor">
                                    <div class="testimonial-autor-title">
                                        <h5>Carlos Ramirez</h5>
                                        <div class="autor-rating">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 swiper-slide">
                            <div class="single-testimonial-box">
                                <div class="testi-quote-icon">
                                    <img src="{{ asset('home/assets/images/resource/quote-icon.png') }}" alt="icon">
                                </div>
                                <div class="testimonial-box-description">
                                    <p>Zatonix has been instrumental in our digital transformation. Their strategic
                                        approach to marketing has greatly enhanced our online presence and customer
                                        engagement. They are a powerhouse in the marketing world!</p>
                                </div>
                                <div class="testimonial-autor">
                                    <div class="testimonial-autor-title">
                                        <h5>Ayesha Khan</h5>
                                        <div class="autor-rating">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 swiper-slide">
                            <div class="single-testimonial-box">
                                <div class="testi-quote-icon">
                                    <img src="{{ asset('home/assets/images/resource/quote-icon.png') }}" alt="icon">
                                </div>
                                <div class="testimonial-box-description">
                                    <p>Zatonix brought our brand to life with their creative marketing strategies. Their
                                        team is not only talented but also deeply committed to understanding our vision.
                                        The impact on our business has been profound.</p>
                                </div>
                                <div class="testimonial-autor">
                                    <div class="testimonial-autor-title">
                                        <h5>Marie Dubois</h5>
                                        <div class="autor-rating">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 swiper-slide">
                            <div class="single-testimonial-box">
                                <div class="testi-quote-icon">
                                    <img src="{{ asset('home/assets/images/resource/quote-icon.png') }}" alt="icon">
                                </div>
                                <div class="testimonial-box-description">
                                    <p>Zatonix’s expertise in digital marketing is truly remarkable. They helped us
                                        craft campaigns that resonated with our diverse audience, leading to increased
                                        engagement and sales. A fantastic agency to work with!</p>
                                </div>
                                <div class="testimonial-autor">
                                    <div class="testimonial-autor-title">
                                        <h5>Olivia Martins</h5>
                                        <div class="autor-rating">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 swiper-slide">
                            <div class="single-testimonial-box">
                                <div class="testi-quote-icon">
                                    <img src="{{ asset('home/assets/images/resource/quote-icon.png') }}" alt="icon">
                                </div>
                                <div class="testimonial-box-description">
                                    <p>From the very first meeting, Zatonix impressed us with their deep understanding
                                        of marketing. Their tailored strategies have significantly improved our brand’s
                                        visibility and reputation. We highly recommend their services.</p>
                                </div>
                                <div class="testimonial-autor">
                                    <div class="testimonial-autor-title">
                                        <h5>Aleksei Petrov</h5>
                                        <div class="autor-rating">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-md-6 swiper-slide">
                            <div class="single-testimonial-box">
                                <div class="testi-quote-icon">
                                    <img src="{{ asset('home/assets/images/resource/quote-icon.png') }}" alt="icon">
                                </div>
                                <div class="testimonial-box-description">
                                    <p>Zatonix has been a key partner in our marketing success. Their ability to blend
                                        creativity with analytics has driven remarkable growth for our business. They
                                        are the go-to agency for anyone serious about marketing!</p>
                                </div>
                                <div class="testimonial-autor">
                                    <div class="testimonial-autor-title">
                                        <h5>Priya Patel</h5>
                                        <div class="autor-rating">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>