<?php
$route = 'contacts';
?>

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

    <!-- This meta tag suggests the browser to use HTTPS and enforce it for 1 year -->
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">


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

        .row-features .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .row-features .col-md-3,
        .col-md-4,
        .row-features .col-md-5,
        .row-features .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .row-features .col-lg-2,
        .row-features .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
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

    <main id="main">
        <section id="portfolio" class="portfolio container">
            <div class="row">
                <div class="col-md-6">


                    <div class="contact-form">

                        <h2>
                            <b>

                                Just Ask, Get Answers


                            </b>
                        </h2>
                        <div style="margin-top:2rem;">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                <?php session()->forget('success'); ?>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                <?php session()->forget('error'); ?>
                            @endif
                            <form method="POST" action="{{ route($route) }}">
                                @csrf
                                @method('POST')


                                <div class="form row">
                                    <div class="form-group col-md-6 mb-3 mb-md-0">
                                        <input required class="form-control form-control-lg" type="text"
                                            name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input required class="form-control form-control-lg" type="email"
                                            name="email" placeholder="Email">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <textarea required class="form-control form-control-lg" type="textarea" name="message"
                                        placeholder="What do you have in mind?" rows="4"></textarea>
                                </div>

                                <div style="margin-top:.5rem" id="html_element"></div>
                                <div style="text-align: right;">

                                    <x-primary-button style="background: #f75949;margin-top: 2rem;"
                                        data-callback='onSubmit' id="submitBtn" data-action='submit'>
                                        Submit
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">

                    <div class="contact-details">

                        <h2>
                            <b>
                                Find Us

                            </b>
                        </h2>
                        <br>
                        <h5>- Head Office -</h5>
                        <p class="address-office">Plot No. 19, LGF, Hemkunt Colony, Greater Kailash-1, New Delhi- 110048
                        </p>
                        <h5>- Corporate Office -</h5>
                        <p class="address-office">Office no-2401, 24th floor, Corenthum Iconic Tower - C, Sector- 62,
                            Noida, UP-201309</p>
                        <p>+91 8448454185 </p>
                        <p>info@oas36ty.com </p>
                        <p>Follow us</p>
                        <div class="social social-sm social-inline">
                            <a class="social-facebook" href="https://www.facebook.com/oas36ty/" target="_blank">
                                <i class="fa-brands fa-facebook-f" style="color: grey;"></i>
                            </a><a class="social-twitter" href="https://twitter.com/oas36ty" target="_blank">
                                {{-- <i class="fa fa-twitter"></i> --}}
                                <i class="fa-brands fa-twitter" style="color: grey;"></i>
                            </a><a class="social-instagram" href="https://www.instagram.com/_oas36ty_/"
                                target="_blank">
                                {{-- <i
                                    class="fa fa-instagram"></i> --}}
                                <i class="fa-brands fa-instagram" style="color: grey;"></i>
                            </a><a class="social-linkedin" href="https://www.linkedin.com/company/oas36ty/"
                                target="_blank">
                                <i class="fa-brands fa-linkedin-in" style="color: grey;"></i>
                            </a><a class="social-youtube"
                                href="https://www.youtube.com/channel/UC0pYopujV7-C0_B59f1j49Q?view_as=subscriber"
                                target="_blank"><i class="fa-brands fa-youtube" style="color: grey;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- <script type="text/javascript">
        var onloadCallback = function() {
        //   alert("grecaptcha is ready!");
        };
      </script> --}}
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
