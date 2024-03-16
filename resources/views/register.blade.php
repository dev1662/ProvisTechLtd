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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- This meta tag suggests the browser to use HTTPS and enforce it for 1 year -->
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">


    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey': '6LcUODwoAAAAACtswNphx--uvk_plaC8op_AmgGT'
            });
        };
    </script>

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

        .payment input {
            width: 100%;
            height: 34px;
            border: 0px;
            border-bottom: 1px solid #333;
        }

        .payment input[type="checkbox"] {
            width: 18px;
            height: auto;
        }

        .payment input:focus {
            outline: none;
        }

        .payment button {
            color: #fff;
            border: 1px solid #9B9C9E;
            border-radius: 5px;
            padding: 5px 2rem;
            background: #9B9C9E;
        }

        .otp-container .otp-div {
            width: 257px;
            overflow: hidden;
        }

        .otp-container .sticky-div {
            position: sticky;
            left: 0;
        }

        .otp-container .otp-input {
            background-image: linear-gradient(270deg, #000 70%, hsla(0, 0%, 100%, 0) 0);
            background-position: bottom;
            background-position-x: 30px;
            background-repeat: repeat-x;
            background-size: 45px 1px;
            border: none;
            font-family: monospace !important;
            font-size: 1rem;
            height: 30px;
            letter-spacing: 35px;
            padding-left: 12px;
            width: 300px;
        }

        .otp-container .resend-otp {
            color: #f75949;
            display: inline-block;
        }

        .loader {
            width: 20px;
            height: 20px;
            border: 4px solid #000;
            border-bottom-color: transparent;
            border-radius: 50%;
            display: none;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loader-container {
            display: none;
            inset: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, .7);
        }

        .loader-child {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .loader2 {
            width: 50px;
            height: 50px;
            border: 4px solid #000;
            border-bottom-color: transparent;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        .btn-get-started {
            background: #f75949 !important;
            border: 1px solid #f75949 !important;
        }

        .btn-get-started:hover {
            background: #50c99a !important;
            border: 1px solid #50c99a !important;
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
                <a href="https://www.linkedin.com/in/oas-office-automation-tool-894420187/" target="__blank"
                    class="linkedin"><i class="bi bi-linkedin"></i></i></a>

            </div>
        </div>
    </section>
    @include('header')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 payment">
                    <form id="registeration">
                        @csrf
                        <input type="hidden" id="signup_token" name="signup_token" />
                        {{-- @method('POST') --}}
                        <h2 class="text-capitalize mb-4" style="color:#E43A27">Automate your business with Oas36ty</h2>
                        {{-- <p class="mb-0"></p> --}}
                        <div class="position-relative">


                            <h4 class="my-4" style="font-size: 18px;color:#E43A27">Personal Details</h4>
                            <input type="text" name="full_name" class="mb-3" placeholder="Full Name" required>
                            <input type="email" name="email" class="mb-1" placeholder="Email ID" required>
                            <small class="text-secondary" style="font-size:.75rem">(This email is permanent and cannot
                                be changed in the future.)</small>
                            <input type="tel" name="mobile" class="my-3" placeholder="Mobile Number" required>

                            {{-- <div class="otp-container mb-3" id="otp_container2" style="display: none;">
                                <p class="text-secondary">Enter OTP</p>
                                <div class="otp-div">
                                    <div class="sticky-div">
                                        <input type="number" id="otp_dialog" name="otp" class="otp-input"
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                            maxlength="6" autocomplete="off">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center" style="gap: .5rem;margin-top:.5rem">
                                    <a href="#" id="resendOtp" class="resend-otp" onclick="resend(event)">resend
                                        OTP</a>
                                    <span class="loader"></span>
                                </div>
                            </div> --}}
                            <h4 class="my-4" style="font-size: 18px;color:#E43A27">Organization Details</h4>

                            <input type="text" name="org_name" class="mb-3" placeholder="Organization Name"
                                required>
                            <div class="d-flex mb-3"><input type="text" name="url" oninput="validateInput(this)"
                                    placeholder="Organization URL" style="width: 205px" required><input type="text"
                                    class="bg-white" disabled value=".oas36ty.com">
                            </div>
                            <input type="text" name="employees" class="" placeholder="Number Of Employees"
                                required>
                            <div class="mt-4" style="display: flex;gap:1rem;">
                                <input type="checkbox" name="termsCheckbox" id="termsCheckbox">
                                <span>
                                    I agree to the <a href="https://oas36ty.com/privacy" target="_blank"
                                        style="color: #E43A27">Terms &
                                        Conditions</a>
                                </span>
                            </div>
                            <div class="otp-container mb-3" id="otp_container2" style="display: none;">
                                <p class="text-secondary">Enter OTP</p>
                                <div class="otp-div">
                                    <div class="sticky-div">
                                        <input type="number" id="otp_dialog" name="otp" class="otp-input"
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                            maxlength="6" autocomplete="off">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center" style="gap: .5rem;margin-top:.5rem">
                                    <a href="#" id="resendOtp" class="resend-otp"
                                        onclick="resend(event)">resend
                                        OTP</a>
                                    <span class="loader"></span>
                                </div>
                            </div>

                            <div id="termsError" class="mb-3" style="color: red;"></div>
                            <div style="margin-top:.5rem" id="html_element"></div>
                            <div class="loader-container position-absolute">
                                <div class="position-absolute loader-child">
                                    <span class="loader2"></span>
                                </div>
                            </div>
                        </div>
                        <div id="submit_container">

                            <button id="signupForm" class="btn-get-started d-block ms-auto mt-3" type="submit">Send
                                OTP

                            </button>

                            <div id="response-message"></div>
                            <span class="loader"></span>
                        </div>

                    </form>
                </div>
                <div class="col-md-5 offset-md-1">
                    <img src="https://oas36ty.com/07/O.png" alt="">
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
    <script>
        function validateInput(inputElement) {
            // Regular expression to allow only alphabets
            var regex = /^[a-zA-Z0-9]+$/;

            // Get the input value
            var inputValue = inputElement.value;

            // Check if the input is not empty and if it matches the regular expression
            if (inputValue !== '' && !regex.test(inputValue)) {
                // Show an alert if the input contains special characters or numbers
                alert("Only alphabets and Numbers are allowed. Special characters and numbers are not allowed.");

                // Remove the invalid characters from the input
                inputElement.value = inputValue.replace(/[^a-zA-Z]/g, '');
            }
        }
    </script>
    <script>
        function resetForm() {
            $('input[name="full_name"]').val('')
            $('input[name="email"]').val('')

            $('input[name="mobile"]').val('')
            $('input[name="org_name"]').val('')
            $('input[name="url"]').val('')

            $('input[name="employees"]').val('')
            // $('input[name="termsCheckbox"]').val(false)
            document.getElementById("termsCheckbox").checked = false
        }
        document.getElementById("registeration").addEventListener("submit", function(event) {
            // Reset any existing error messages
            document.getElementById("termsError").innerText = "";

            // Check if the checkbox is checked
            if (!document.getElementById("termsCheckbox").checked) {
                // Display an error message if the checkbox is not checked
                document.getElementById("termsError").innerText = "Please agree to the Terms & Conditions.";
                event.preventDefault(); // Prevent form submission
            }
            // Add an event listener to the checkbox to clear the error when it is checked
            document.getElementById("termsCheckbox").addEventListener("change", function() {
                // Clear the error message when the checkbox is checked
                document.getElementById("termsError").innerText = "";
            });
        });
        $(document).ready(function() {
            $('#registeration').submit(function(e) {

                e.preventDefault();

                // if ((document.getElementById('signupForm').innerText === 'Submit' && !document
                //         .getElementById(
                //             'otp_dialog').value) || (document.getElementById(
                //         'otp_dialog').value !== document.getElementById(
                //         'otp_val').value)) {
                //     alert('please Enter the Valid OTP!');
                //     return;
                // }

                var loaderContainer = document.querySelector('.loader-container');
                loaderContainer.style.display = 'block';
                // resend(e)
                $.ajax({
                    type: 'POST',
                    url: '{{ route('queryOrganization') }}',
                    data: $('#registeration').serialize(),
                    success: function(response) {
                        console.log(response);
                        if (response && response.status === 'true') {
                            document.getElementById('signupForm').innerText = 'Submit'
                            document.getElementById('otp_container2').style.display = 'block'
                            document.getElementById('otp_dialog').style.display = 'block'
                            document.getElementById('signup_token').value = response.data
                                .signup_token
                            loaderContainer.style.display = 'none';
                            document.getElementById('response-message').innerHTML =
                                `<br><p style='color:#50c99a'>${response.message}</p>`
                            // document.getElementById('signupForm').style.display = 'block';
                            // $('input[]')[0].reset();




                        } else if (response && response.status !== 'true') {
                            document.getElementById('otp_container2').style.display = 'none'

                            document.getElementById('html_element').style.display = 'none';

                            document.getElementById('signupForm').style.display = 'none';
                            loaderContainer.style.display = 'none';

                            document.getElementById('response-message').innerHTML =
                                `<br><p style='color:#50c99a'>${response.message}</p>`

                            resetForm()

                        }
                        // Handle success response, for example, show a success message
                    },
                    error: function(error) {
                        console.log(error);
                        // Handle error response, for example, display validation errors
                    }
                });
            });

            $('#resendOtp').on('click', function() {
                // Hide OTP div
                var otpDiv = document.querySelector('.otp-div');
                otpDiv.style.opacity = 0;

                // Show loader
                var loader = document.querySelector('.loader');
                loader.style.display = 'inline-block';
                $.ajax({
                    type: 'POST',
                    url: '{{ route('resendOTP') }}',
                    data: $('#registeration').serialize(),
                    success: function(response) {
                        if (response && response.message === 'OTP Sent Successfully!') {
                            // document.getElementById('signupForm').innerText = 'Submit'
                            // document.getElementById('otp_container2').style.display = 'block'
                            // document.getElementById('otp_dialog').style.display = 'block'
                            document.getElementById('signup_token').value = response.data
                                .signup_token
                            // Hide loader
                            loader.style.display = 'none';

                            // Show OTP div
                            otpDiv.style.opacity = 1;

                            // Reset input value
                            var otpInput = document.querySelector('.otp-input');
                            otpInput.value = '';

                        }
                        // Handle success response, for example, show a success message
                    },
                    error: function(error) {
                        console.log(error);
                        // Handle error response, for example, display validation errors
                    }
                });
            })
        });
    </script>
</body>


</html>
