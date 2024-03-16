<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Card Slider</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <!-- This meta tag suggests the browser to use HTTPS and enforce it for 1 year -->
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">


</head>

<body>
    <div class="slide-container swiper swiper-card" data-aos="fade-up" data-aos-delay="100">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">

                    {{--
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div> --}}
                    <div class="portfolio-wrap">
                        <div class="img-fluid">
                            <div class="pic">

                                <b>Oas36ty automation
                                </b>
                            </div>
                            <div class="pic-info">

                                Imagine a smart system that automates everything in the office, making work easy and
                                efficient.
                            </div>
                        </div>
                        {{-- <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""> --}}
                        <a href="{{ route('book-demo') }}">
                            <div class="portfolio-info">
                                <h4>Oas36ty automation</h4>

                                <div>

                                    <button class="btn-get-started">

                                        Book demo
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card swiper-slide">


                    <div class="portfolio-wrap">
                        <div class="img-fluid">
                            <div class="pic">

                                <b>Integrate all department at one place
                                </b>
                            </div>
                            <div class="pic-info">

                                Connect all departments in one spot to work better as a team and unites them.
                            </div>
                        </div>
                        {{-- <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""> --}}
                        <a href="{{ route('book-demo') }}">
                            <div class="portfolio-info">
                                <h4>Integrate all department at one place</h4>

                                <div>


                                    <button class="btn-get-started">

                                        Book demo
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card swiper-slide">


                    <div class="portfolio-wrap">
                        <div class="img-fluid">
                            <div class="pic">

                                <b>Office anytime, anywhere.

                                </b>
                            </div>
                            <div class="pic-info">

                                Your office goes with you, accessible anywhere, anytime, making work easier.
                                {{-- <br><br> --}}
                            </div>
                        </div>
                        {{-- <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""> --}}
                        <a href="{{ route('book-demo') }}">
                            <div class="portfolio-info">
                                <h4>Office anytime, anywhere.</h4>

                                <div>

                                    <button class="btn-get-started">

                                        Book demo
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card swiper-slide">


                    <div class="portfolio-wrap">
                        <div class="img-fluid">
                            <div class="pic">

                                <b>Employee Performance Evaluation

                                </b>
                            </div>
                            <div class="pic-info">

                                Assess employee performance to boost teamwork and achieve goals together.
                            </div>
                        </div>
                        {{-- <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""> --}}
                        <a href="{{ route('book-demo') }}">
                            <div class="portfolio-info">
                                <h4>Employee Performance Evaluation</h4>

                                <div>

                                    <button class="btn-get-started">

                                        Book demo
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card swiper-slide">


                    <div class="portfolio-wrap">
                        <div class="img-fluid">
                            <div class="pic">

                                <b>Client ABC Analysis

                                </b>
                            </div>
                            <div class="pic-info">

                                Efficiently manage clients and give priority to the most important relationships. </div>
                        </div>
                        {{-- <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""> --}}
                        <a href="{{ route('book-demo') }}">
                            <div class="portfolio-info">
                                <h4>Client ABC Analysis</h4>

                                <div>

                                    <button class="btn-get-started">

                                        Book demo
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card swiper-slide">


                    <div class="portfolio-wrap">
                        <div class="img-fluid">
                            <div class="pic">

                                <b>Intelligent communication system

                                </b>
                            </div>
                            <div class="pic-info">

                                Say hello to Oas36ty, the helpful friend who makes talking in the office easier.
                            </div>
                            {{-- <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""> --}}
                            <a href="{{ route('book-demo') }}">
                                <div class="portfolio-info">
                                    <h4>Intelligent communication system</h4>

                                    <div>

                                        <button class="btn-get-started">

                                            Book demo
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">

                    <div class="portfolio-wrap">
                        <div class="img-fluid">
                            <div class="pic">

                                <b>Increase your profit by 30-40%

                                </b>
                            </div>
                            <div class="pic-info">

                                Make your business more profitable than before and increase your revenue by 40%
                            </div>
                            {{-- <img src="{{asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""> --}}
                            <a href="{{ route('book-demo') }}">
                                <div class="portfolio-info">
                                    <h4>Increase your profit by 30-40%</h4>

                                    <div>

                                        <button class="btn-get-started">

                                            Book demo
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="card swiper-slide">


                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">


                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div> --}}
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>

</body>

<!-- Swiper JS -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

<!-- JavaScript -->
<script src="{{ asset('assets/js/script.js') }}"></script>

</html>
