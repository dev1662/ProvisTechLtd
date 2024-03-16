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

        /* contact us */
        .contact_us_form {
            background-color: #50c99a;
            padding: 4rem;
        }

        .contact_us_form .form_input {
            display: flex;
            gap: .5rem;
            align-items: center;
        }

        .contact_us_form .form_btn {
            border: 2px solid #2E2058;
            background-color: #50c99a;
            color: #2E2058;
            transition: all 300ms;
            padding: 1rem 2rem;
            font-weight: bold;
        }

        .contact_us_form .form_btn:hover {
            background-color: #2E2058;
            color: #50c99a;
        }

        .contact_us_form input,
        .contact_us_form textarea {
            width: 100%;
            border: none;
            padding: 1rem;
        }

        .contact_us_form input:focus,
        .contact_us_form textarea:focus {
            outline: none;
        }

        .contact_us_form {
            position: relative;
        }

        .pencil {
            position: absolute;
            top: -30px;
            right: 0;
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
        <div class="row">
            <div class="col-md-4">
                <img src="https://brandshark.com/wp-content/uploads/2020/06/get-in-touchmin.png" alt=""
                    class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="contact_us_form">
                    <h2 style="color: #2E2058" class="fw-bold">Get in touch with us</h2>
                    <p>Our digital marketing team is always ready to help. Give us a call, drop us an email, or just
                        fill in the form below to instantly schedule a call with us.</p>
                    <form action="">
                        <div class="form_input">

                            <input type="text" placeholder="Name" class="py-2">


                            <input type="email" placeholder="Email" class="py-2">


                            <input type="tel" placeholder="Mobile" class="py-2">
                        </div>
                        <div class="col-md-12 mt-4">
                            <textarea name="" id="" cols="30" rows="8" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="mt-4 d-block ms-auto form_btn">Contact Us</button>
                    </form>
                    <img src="https://brandshark.com/wp-content/uploads/2020/06/Mask-Group-62.png" alt=""
                        class="pencil img-fluid">
                </div>

            </div>
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
