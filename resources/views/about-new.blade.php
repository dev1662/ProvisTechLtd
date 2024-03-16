<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Oas36ty</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Favicons -->
    {{-- <script src="https://www.google.com/recaptcha/api.js"></script> --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    {{-- <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Fredoka:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/lity.css') }}" rel="stylesheet">
    {{-- <script src="vendor/jquery.js"></script> --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <script src="{{ asset('assets/js/lity.js') }}"></script>
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- This meta tag suggests the browser to use HTTPS and enforce it for 1 year -->
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey': '6LcUODwoAAAAACtswNphx--uvk_plaC8op_AmgGT'
            });
        };
    </script>
    <style>
        /* #portfolio h2 {
            text-align: center;

        } */

        .contact-details {
            margin-left: 2rem;
        }

        @media (max-width:767px) {

            .contact-details {
                text-align: center;
                margin-top: 2rem;
            }
        }

        @media(width<=768px) {
            .contact-details {
                margin-left: 0;
            }
        }

        .desc_explore {
            text-align: center;
            margin: auto;
            padding: 10px;
            width: 50%;

        }

        .fa-3x {
            color: #f75949;
        }

        .icon-card {
            margin-top: 1rem;
            margin-bottom: 1rem;

        }

        .content-features {
            margin-left: 10rem;
            margin-right: 10rem;

        }

        @media(min-width:988px) {
            .card {
                width: 20%;
            }
        }

        @media(max-width:988px) and (min-width:768px) {
            .card {
                /* width: 20%; */
                margin-left: 15rem !important;
            }
        }

        .card {
            /* width: 20%; */
            margin-left: 2rem;
            text-align: center;
            cursor: pointer;
        }

        .card:hover {

            box-shadow: 0 0 11px rgba(33, 33, 33, .2);

        }

        .mb-9,
        .my-9 {
            margin-bottom: 7rem !important;
        }

        .mt-9,
        .my-9 {
            margin-top: 7rem !important;
        }

        .align-items-center {
            -webkit-box-align: center !important;
            align-items: center !important;
        }

        .row-features {
            /* display: -webkit-box; */
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important;
        }

        @media (min-width: 768px) {

            .row-features .col-md-5 {
                -webkit-box-flex: 0;
                flex: 0 0 41.66667%;
                max-width: 41.66667%;
            }
        }

        .row-features.gap-y>.col,
        .row-features.gap-y>[class*="col-"] {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        @media (min-width: 768px) {

            .row-features .col-md-6 {
                -webkit-box-flex: 0;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        img {
            max-width: 100%;
            height: auto;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .cards-explore a {
            color: #000;
        }

        /* .contact-form {
            padding-left: 8rem;

        } */
        /* @media (max-width:767px){
            .contact-form{
                text-align: center;
            }
        } */
        @media (min-width:767px) {
            .address-office {
                /* text-align: center; */
                width: 54%;
            }
        }

        .social-inline a {
            width: auto;
            height: auto;
            margin-right: 1rem;
        }

        /* our team */
        /* .grid_head {
            display: grid;
            grid-template-columns: repeat(3, 1fr)
        }

        .grid_head p {
            font-size: 12px;
        } */

        .head {
            color: #2E2058;
        }

        .title_head {
            line-height: 1.7;
        }

        .team_btn {

            border: 2px solid #2E2058;
            background-color: #50c99a;
            color: #2E2058;
            transition: all 300ms;
            padding: 1rem 2rem;
            font-weight: bold;
        }

        .team_btn:hover {
            background-color: #2E2058;
            color: #50c99a;
        }

        .hero_section {
            background-image: url(https://brandshark.com/wp-content/uploads/2020/06/Group-10235-min.png);
            background-position: left center;
            background-repeat: no-repeat;
        }
    </style>
    <!-- =======================================================
  * Template Name: Mamba
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:info@oas36ty.com">info@oas36ty.com</a>
                {{-- <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55 --}}
            </div>
            <div class="social-links d-none d-md-block">
                <a href="https://twitter.com/oas36ty" target="__blank" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/oas36ty" target="__blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/_oas36ty_/" target="__blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/oas36ty/" target="__blank" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>
    @include('header')

    <section>
        <div class="hero_section">
            <div class="container">
                <div class="row head">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="title_head">
                            <h2>Team of Marketers & Brand Strategists</h2>
                            <p class="mt-3">At the heart of our mission is the commitment to delivering not just
                                products or services but memorable experiences that resonate with our audience. Your
                                strategic minds and creative spirits are the driving force behind transforming oas36ty
                                into a brand that captivates and inspires.
                            </p>
                        </div>
                        <img src="https://brandshark.com/wp-content/uploads/2020/06/Path-16932.png"
                            class="d-block mx-auto" alt="">
                        {{-- <div class="grid_head mt-5">
                            <div style="border-right:2px solid #333;text-align:center;padding-inline:1rem;">
                                <h3>100+</h3>
                                <p class="mb-0">HAPPY CLIENTS</p>
                            </div>
                            <div style="border-right:2px solid #333;text-align:center;padding-inline:1rem;">
                                <h3>140+</h3>
                                <p class="mb-0">PROJECTS COMPLETED</p>
                            </div>
                            <div style="border-right:2px solid #333;text-align:center;padding-inline:1rem;">
                                <h3>15+</h3>
                                <p class="mb-0">COUNTRIES</p>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('team-marketers.jpeg') }}" alt="" style="max-width: 400px">
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color:#F7F7F7" class="py-5">
            <div class="container">
                <div class="row head">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('our-approach.png') }}" alt="" style="max-width: 400px">

                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="title_head">
                            <h2>Our Approach</h2>
                            <p class="mt-3">Our vision and mission are to envision and empower innovation and shape a
                                sustainable future for the company. Our core values are our customer success and this is
                                our priority and the strategic priorities to driving industry evolution. We want our
                                team to always communicate and collaborate where every voice matters so that we achieve
                                more and more together.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #2E2058">
            <q class="text-light d-block mx-auto text-center py-5" style="font-size: 22px;max-width:800px;">
                Communication happens where every word is thought through, every color is wisely chosen and every design
                conveys a meaning.
            </q>
        </div>
        <div>
            <div class="container">
                <h2 style="color: #2E2058" class="text-center my-5 fw-bold">Why Oas36ty?</h2>
                <div class="row head">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('why-oas.jpeg') }}" alt="" style="max-width: 400px">
                    </div>
                    {{-- <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="my-5">
                            <h4>Innovative Process</h4>
                            <p class="mt-3">We believe in keeping creativity at the helm of things at our workplace.
                                Our innovative approach of making no two strategies similar is what makes us unique.</p>
                        </div>
                        <div class="mb-5">
                            <h4>Research Focussed</h4>
                            <p class="mt-3">We do comprehensive research that helps us plan the right strategy to
                                deliver relentless growth and ensure your brand’s success.</p>
                        </div>
                        <div class="mb-5">
                            <h4>Excellence in Delivery</h4>
                            <p class="mt-3">We have a proven track record of providing excellent digital marketing
                                services for over 200 happy customers. We never stop until we give you what you desire!
                            </p>
                        </div>
                    </div> --}}
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <p class="mb-0">Oas36ty is an office automation company that automates your Office 360. With
                            the software,
                            you can manage your whole office and other professional data at a time. You can integrate
                            your desired and needed features with our help. We push your needs beyond expectations. Our
                            goal is to fulfill our customer's needs and the solutions to their problems. we have a
                            proven track record of providing excellent services to our clients and more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <h2 style="color: #2E2058" class="text-center my-5 fw-bold">Our Team</h2>
                <div class="row mx-auto" style="max-width: 900px;">
                    <div class="col-md-6">
                        <img src="https://brandshark.com/wp-content/uploads/2020/08/Ankur-Sharma-founder-Brandshark.jpg"
                            alt="" width="375">
                        <div class="text-center mt-3" style="line-height: 1.7;color:#2E2058">
                            <p class="mb-0">Alma Mater: IIT Kanpur</p>
                            <h3>Ankur Sharma</h3>
                            <p style="font-size: 12px" class="text-secondary mb-0">DIRECTOR-SALES & MARKETING</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="https://brandshark.com/wp-content/uploads/2020/08/Shekhar-suman-founder-Brandshark.jpg"
                            alt="" width="375">
                        <div class="text-center mt-3" style="line-height: 1.7;color:#2E2058">
                            <p class="mb-0">Alma Mater: IIT Kanpur, IIM Calcutta</p>
                            <h3>Shekhar Suman</h3>
                            <p style="font-size: 12px" class="text-secondary mb-0">DIRECTOR-DESIGN & DEVELOPMENT</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="d-block mx-auto my-5 team_btn">Join Our Team <i
                    class="fa-solid fa-arrow-right-long"></i></button>
        </div>
    </section>
    @include('footer')
    <!-- End Footer -->



    <!-- Vendor JS Files -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
