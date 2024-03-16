<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Oas36ty</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    {{-- <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}
    <!-- This meta tag suggests the browser to use HTTPS and enforce it for 1 year -->
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">


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
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        .featuresImages {
            height: 60px;
            width: 65px;
        }

        #portfolio h2 {
            text-align: center;
        }

        h4 {
            /* font-size: 30px; */
            font-weight: bold;
        }

        .font-23 {
            font-size: 23px;
        }

        .content-features p {
            font-weight: 100;
            font-size: 21px;
        }

        /* .desc_features {
            text-align: center;
            margin: auto;
            padding: 10px;
            width: 50%;

        } */

        /* .content-features {
            margin-left: 10rem;
            margin-right: 10rem;

        } */

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

        .row svg {
            margin-bottom: 0.5rem;
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
        .col-md-3,
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
        /* .col-lg-4, */
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
            <h2>
                <b>

                    Oas36ty Features
                </b>
            </h2>
            <div class="col-md-6 mx-auto">
                <div class="desc_features text-center">
                    <span class="font-23" style="font-weight: 100">
                        Our commitment to innovation drives us to continually refine and expand the capabilities of our
                        software to meet your evolving needs.Navigating oas36ty is now more intuitive than ever. A sleek
                        and user-friendly interface ensures a seamless and enjoyable experience for all users.
                    </span>
                </div>
            </div>

            {{-- <div class="content-features">
                <div class="row  align-items-center ">
                    <div class="col-md-6">
                        <h4>Complete Office-Automation</h4>
                        <p>If you have a business plan, we have an automation tool to go as planned. Oas36ty platform
                            covers everything from Query Initiation till Payment processing. It automates many tasks
                            which helps you eliminate the need for a large staff. It follows intelligent communication
                            system to accomplish tasks faster. It allows you to update data simultaneously in the event
                            of changes in workflow/Task.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="{{ asset('07/Office-management-pana.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Complete Web Management including Domain-based email</h4>
                        <p>Complete web management services are offered by Oas36ty, including website building, hosting,
                            maintenance, security, and domain-based email management. Thanks to our all-inclusive web
                            administration system, your website will always be current and functional, allowing you to
                            focus on managing your business. You can rely on Oas36ty to give you a unique website that
                            embodies your brand and appeals to your target audience. The domain-based email services
                            help to improve your brand recognition and ensure the security and dependability of your
                            email communications.</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="{{ asset('07/Inbox-cleanup-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Smart &amp; Easy Interface</h4>
                        <p>Oas36ty presents a visually pleasing interface That allows users to enjoy exploring it. This
                            feature ensures that your software can be opened on any platform, through any device. The
                            most interesting fact is that the resolution gets defined according to the device. Thus, it
                            delivers seamless work experience for users.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="{{ asset('07/User-flow-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Safe, Secure &amp; Fast</h4>
                        <p>Oas36ty values safety and security and uses cloud computing technology to offer the highest
                            level of data protection. Cloud computing enables secure data storage and transport, with
                            strong encryption and access restrictions to protect your information from unauthorized
                            access. All files are stored by Oas36ty on Google Drive, which offers unlimited storage
                            space for your documents. This enables you and your team to seamlessly collaborate on
                            documents and also view, edit, and share files in real-time, from any device or location.
                        </p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="{{ asset('07/Safe-bro.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Widespread Approach</h4>
                        <p>You can access your data at any time and from any location thanks to our data accessibility
                            function. You can check for updates or email clients while you're away. This is made
                            possible by cloud computing technology, which guarantees that all users will have easy
                            access to your data. You no longer need to wait for someone to send you information or spend
                            countless hours looking for it. You may save time and effort by having quick and simple
                            access to your data whenever you need it</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="{{ asset('07/Online-world-cuate.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Machine Learning &amp; Artificial Intelligence</h4>
                        <p>Our unique platform integrates, analyses and creates all your data and analytics through
                            Machine Learning and Artificial Intelligence. This feature will be an invaluable asset for
                            your business by managing every activity from lead to deal. It will automate repetitive
                            tasks which consume time. Become smarter and more productive by using Oas36ty!</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="{{ asset('07/Android-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Skilled Outreach</h4>
                        <p>Oas36ty's real-time platform integrates various communication modes in one place. You can see
                            all of your updates—including conversations, emails, notifications, follow-ups, and other
                            types of updates in a single window. This saves you both time and effort by eliminating the
                            need to access numerous platforms. You can automate your communication procedures and make
                            sure you never miss a crucial message with the help of our platform</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="{{ asset('07/Creative-team-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Managing Multi-fold Enterprises</h4>
                        <p>Overseeing multiple businesses can seem daunting but this software can make these ventures a
                            success. You can run multiple businesses on this single platform – no more juggling between
                            multiple apps! It has common features like managing project, time-tracking, storing and
                            sharing documents, managing projects - to name a few. You can take care of your businesses
                            without spending most of your time and effort!</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="{{ asset('07/Work-time-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Brilliant Almanac</h4>
                        <p>This feature will remind you continuously about the list of tasks to be completed on a
                            specific date. It has categories like hearing, phone, email, visit, and appointment so
                            there’s no chance of forgetting any tasks. It keeps you on-time and prepared especially when
                            you have meetings back to back. You can also have a glance at the upcoming events.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="{{ asset('07/Time-management-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Encyclopedic Board</h4>
                        <p>Oas36ty provides a real-time dashboard with a comprehensive view of all insights and
                            information in one place. It’s easy to use and the versatile design is user-friendly and
                            simple to use. The dashboard's logically organized data enables users to take action fast,
                            streamline workflows, and make the most of available resources. Furthermore, the flexibility
                            to customize data display allows users to examine information in a way that best matches
                            their needs.</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="{{ asset('07/Market-launch-rafiki.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Mobile App</h4>
                        <p>The best part about this software is cross platform mobile application development. It can be
                            accessed by both Android and iOS users at the same time and so it increases the app
                            visibility reaching broader audience. It also maintains the consistency of the app across
                            all the platforms. Other advantages include less development cost, less time-consuming,
                            code-re usability, and many more.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="{{ asset('07/Online-world-bro.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Journey Tracker/ Employee Journey Mapping</h4>
                        <p>Employee journey mapping is a visualization of individual employee’s experience at your
                            company, from recruitment to opportunities for advancement and career development. This
                            feature helps your HR team identify areas for improvement which in turn can make a huge
                            difference in your employees’ retention and overall culture of your business.</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="{{ asset('07/Location-tracking-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Lead/task management with profit/loss evaluation</h4>
                        <p>Every business today has to keep track of all inquiries and sales leads that are generated.
                            Oas36ty has used intelligent methodologies to filter and assess lead data into useful
                            categorizations. Thus it saves a lot of labour hours for your company. Additionally, as we
                            all know, examining profit and loss statement is a critical step to measure the business
                            performance. This feature computes a profit and loss statement for every accomplished task.
                        </p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="{{ asset('07/Investment-data-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Productivity Scale</h4>
                        <p>Oas36ty will help your firm increase and utilise the utmost capacity of the human resources
                            available. Also, it helps to advance the workplace culture and boost enthusiasm, producing
                            an even better company environment.</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="{{ asset('07/Business-Plan-bro.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Proposal to Payment Processing</h4>
                        <p>Oas36ty automates import and export functions, centralises content, and facilitates
                            collaboration among stakeholders. Thus, it makes the entire process simple and
                            straightforward. The technology integrations enable you and your team members to connect
                            instantly to clients, content, and reports. With a well-thought-out dashboard, you can have
                            clarity in everything you see and do.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="{{ asset('07/E-Wallet-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features  align-items-center ">
                    <div class="col-md-6">
                        <h4>Escalation Based Reporting/Push Reporting System</h4>
                        <p>Oas36ty uses a simple graphical interface that makes the system setup, usage, and maintenance
                            effortless. The reports generated are highly customizable by simply checking/unchecking what
                            is required. If there are any mistakes found in the reports, this feature will notify
                            automatically. You can even export data reports to a spreadsheet from which you can
                            customize the data further.</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="{{ asset('07/Audit-amico.png') }}" alt="Alternative Text">
                    </div>
                </div>
            </div> --}}

            {{-- <div class="slide-container swiper swiper-card" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250'
                                src="{{ asset('07/Office-management-pana.png') }}" alt="Alternative Text">
                            <div class="px-4">
                                <h5 class='fw-bold' style="color:#f75949">Complete Office-Automation</h5>
                                <p>If you have a business plan, we have an automation tool to go as planned. Oas36ty
                                    platform
                                </p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250' src="{{ asset('07/Inbox-cleanup-amico.png') }}"
                                alt="Alternative Text">
                            <div class="px-4">
                                <h5 class='fw-bold' style="color:#f75949">Complete Web Management including Domain-based
                                    email</h5>
                                <p>Complete web management services are offered by Oas36ty, including website building,
                                    hosting,
                                </p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250' src="{{ asset('07/User-flow-amico.png') }}"
                                alt="Alternative Text">
                            <div class="px-4">
                                <h5 class='fw-bold' style="color:#f75949">Smart &amp; Easy Interface</h5>
                                <p>Oas36ty presents a visually pleasing interface That allows users to enjoy exploring
                                    it.
                                    This
                                    feature ensures that your software can be opened on any platform, through any
                                    device.
                                </p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250'
                                src="{{ asset('07/Office-management-pana.png') }}" alt="Alternative Text">
                            <div class="px-4">
                                <h5 class='fw-bold' style="color:#f75949">Safe, Secure &amp; Fast</h5>
                                <p>Oas36ty values safety and security and uses cloud computing technology to offer the
                                    highest
                                    level of data protection.
                                </p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250' src="{{ asset('07/Safe-bro.png') }}"
                                alt="Alternative Text">
                            <div class="px-4">
                                <h5 class='fw-bold' style="color:#f75949">Widespread Approach</h5>
                                <p>You can access your data at any time and from any location thanks to our data
                                    accessibility
                                    function.</p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250' src="{{ asset('07/Android-amico.png') }}"
                                alt="Alternative Text">
                            <div class="px-4">
                                <h5 class='fw-bold' style="color:#f75949">Machine Learning &amp; Artificial
                                    Intelligence</h5>
                                <p>Our unique platform integrates, analyses and creates all your data and analytics
                                    through
                                    Machine Learning and Artificial Intelligence. </p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250'
                                src="{{ asset('07/Creative-team-amico.png') }}" alt="Alternative Text">
                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Skilled Outreach</h5>
                                <p>Oas36ty's real-time platform integrates various communication modes in one place.
                                </p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250' src="{{ asset('07/Work-time-amico.png') }}"
                                alt="Alternative Text">

                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Managing Multi-fold Enterprises</h5>
                                <p>Overseeing multiple businesses can seem daunting but this software can make these
                                    ventures a
                                    success. You can run multiple</p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250'
                                src="{{ asset('07/Time-management-amico.png') }}" alt="Alternative Text">

                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Brilliant Almanac</h5>
                                <p>This feature will remind you continuously about the list of tasks to be completed on
                                    a specific date. </p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250'
                                src="{{ asset('07/Market-launch-rafiki.png') }}" alt="Alternative Text">

                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Encyclopedic Board</h5>
                                <p>Oas36ty provides a real-time dashboard with a comprehensive view of all insights and
                                    information in one place.</p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250' src="{{ asset('07/Online-world-bro.png') }}"
                                alt="Alternative Text">

                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Mobile App</h5>
                                <p>The best part about this software is cross platform mobile application development.
                                </p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250'
                                src="{{ asset('07/Location-tracking-amico.png') }}" alt="Alternative Text">

                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Journey Tracker/ Employee Journey Mapping
                                </h5>
                                <p>Employee journey mapping is a visualization of individual employee’s experience at
                                    your company, from recruitment to opportunities for advancement and career
                                    development.</p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250'
                                src="{{ asset('07/Investment-data-amico.png') }}" alt="Alternative Text">

                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Lead/task management with profit/loss
                                    evaluation</h5>
                                <p>Every business today has to keep track of all inquiries and sales leads that are
                                    generated. </p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250'
                                src="{{ asset('07/Business-Plan-bro.png') }}" alt="Alternative Text">

                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Productivity Scale</h5>
                                <p>Oas36ty will help your firm increase and utilise the utmost capacity of the human
                                    resources available.</p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250' src="{{ asset('07/E-Wallet-amico.png') }}"
                                alt="Alternative Text">

                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Proposal to Payment Processing</h5>
                                <p>Oas36ty automates import and export functions, centralises content, and facilitates
                                    collaboration among stakeholders.</p>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white">
                            <img class='d-block mx-auto' width='250' src="{{ asset('07/Audit-amico.png') }}"
                                alt="Alternative Text">
                            <div class="px-4">
                                <h5 class="fw-bold" style="color:#f75949">Escalation Based Reporting/Push Reporting
                                    System</h5>
                                <p>Oas36ty uses a simple graphical interface that makes the system setup, usage, and
                                    maintenance effortless. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div> --}}
            <div class="row text-center mt-5 mx-auto" style="row-gap: 1rem;max-width:1100px">
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}

                    <img src="{{ asset('IPA.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Intelligent Process Automation</h4>
                        <p><span class="fw-bold">Feature:</span> Our solution leverages advanced artificial intelligence
                            and machine learning algorithms to intelligently automate complex back-office processes.
                            <br>
                            <span class="fw-bold">Benefit:</span> Reduce manual errors, increase accuracy, and
                            accelerate process execution, improving operational efficiency and cost savings.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('EcourtServices.png') }}" alt="" class="img-fluid featuresImages">
                    <div>
                        <h4>E-Court Service</h4>
                        <p><span class="fw-bold">Feature:</span> eCourt Reporters helps law firms and government
                            entities locate vetted, experienced, certified court reporters and legal videographers for
                            legal proceedings with live calendar availability across all 28 states.
                            <br>
                            <span class="fw-bold">Benefit:</span> eCourt systems enable users to file cases
                            electronically, saving time and resources while increasing accessibility. This streamlines
                            the legal process, expedites case handling, and enhances overall efficiency within the
                            judicial system.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('WorkFlowAutomation.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Workflow Automation and Orchestration</h4>
                        <p><span class="fw-bold">Feature:</span> Automate end-to-end workflows, including data entry,
                            validation, document processing, and task assignment.
                            <br>
                            <span class="fw-bold">Benefit:</span> Minimize manual intervention, decrease processing
                            time, and enhance productivity by automating repetitive and time-consuming tasks.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('IDA.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Intelligent Document Processing</h4>
                        <p><span class="fw-bold">Feature:</span> Our solution uses intelligent optical character
                            recognition (OCR) and natural language processing (NLP) capabilities to extract and process
                            data from various document formats.
                            <br>
                            <span class="fw-bold">Benefit:</span> Streamline document-intensive processes, reduce
                            manual data entry, improve data accuracy, and accelerate document turnaround time.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('IDM.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Intelligent Decision-Making</h4>
                        <p><span class="fw-bold">Feature:</span> Using machine learning algorithms, incorporate
                            intelligent decision-making capabilities into your back office operations.
                            <br>
                            <span class="fw-bold">Benefit:</span> Enable automated decision-making based on predefined
                            rules and data insights, reducing the need for manual intervention and expediting
                            decision-making processes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('RTAR.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Real-time Analytics and Reporting</h4>
                        <p><span class="fw-bold">Feature:</span> Gain valuable insights into your back office
                            operations with real-time analytics and customizable reports.
                            <br>
                            <span class="fw-bold">Benefit:</span> Monitor performance metrics, identify bottlenecks,
                            and make data-driven decisions to improve efficiency and optimize processes continuously.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('CAT.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Compliance and Audit Trail</h4>
                        <p><span class="fw-bold">Feature:</span> Ensure compliance with regulatory requirements by
                            maintaining a comprehensive audit trail of all activities and changes.
                            <br>
                            <span class="fw-bold">Benefit:</span> Simplify compliance audits, enhance data security,
                            and mitigate risks associated with back office operations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('SAF.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Scalability and Flexibility</h4>
                        <p><span class="fw-bold">Feature:</span> Our solution is designed to scale with your business
                            needs, accommodating increasing volumes and evolving process requirements.
                            <br>
                            <span class="fw-bold">Benefit:</span> Seamlessly adapt to growth and changing demands
                            without disruption, ensuring long-term scalability and agility.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('DST.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Dedicated Support and Training</h4>
                        <p><span class="fw-bold">Feature:</span> Benefit from our dedicated support team, who will
                            assist and guide your automation journey.
                            <br>
                            <span class="fw-bold">Benefit:</span> Receive personalized support, training resources, and
                            best practices to maximize the value of our intelligent back office automation solution.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('CSROI.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Cost Savings and ROI</h4>
                        <p>
                            <span class="fw-bold">Benefit:</span> Achieve significant cost savings by reducing manual
                            effort, minimizing errors, and optimizing resource allocation. Our pricing model tied to
                            business outcomes ensures a clear return on investment.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('CRM.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Customer Relationship Management (CRM management)</h4>
                        <p><span class="fw-bold">Feature:</span> Task Automation
                            <br>
                            <span class="fw-bold">Benefit:</span> CRM management systems automate routine tasks such as
                            data entry, follow-up reminders, and appointment scheduling. This frees up valuable time for
                            sales and support teams to focus on building relationships with customers, resulting in
                            improved productivity, faster response times, and enhanced customer satisfaction.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('TaskM.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Task management</h4>
                        <p><span class="fw-bold">Feature:</span> Task Prioritization
                            <br>
                            <span class="fw-bold">Benefit:</span> Task management systems allow users to prioritize
                            their tasks based on urgency and importance, ensuring that critical tasks are completed
                            promptly and efficiently, leading to increased productivity and reduced stress.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('BPA.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Business process automation</h4>
                        <p><span class="fw-bold">Feature:</span> Streamlined Workflow Automation
                            <br>
                            <span class="fw-bold">Benefit:</span> Business process automation simplifies and
                            accelerates
                            repetitive tasks, reducing manual errors and freeing up time for employees to focus on
                            high-value activities, leading to increased efficiency and productivity.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('PMP.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Project Management Processes</h4>
                        <p><span class="fw-bold">Feature:</span> Real-time Progress Tracking
                            <br>
                            <span class="fw-bold">Benefit:</span> Project management processes enable real-time
                            tracking
                            of tasks and milestones, providing stakeholders with instant visibility into project
                            progress, facilitating timely decision-making, and ensuring projects stay on schedule and
                            within budget.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('PAS.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Performance Appraisal Systems</h4>
                        <p><span class="fw-bold">Feature:</span> 360-Degree Feedback
                            <br>
                            <span class="fw-bold">Benefit:</span> Performance appraisal systems incorporate 360-degree
                            feedback, gathering insights from peers, subordinates, and managers, fostering a
                            comprehensive understanding of an individual's strengths and areas for improvement, leading
                            to targeted professional development and enhanced team collaboration.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('PMR.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Project Management Reports</h4>
                        <p><span class="fw-bold">Feature:</span> Comprehensive Reporting Dashboard
                            <br>
                            <span class="fw-bold">Benefit:</span> Project management reports provide a centralized
                            dashboard displaying key metrics, milestones, and risks, enabling stakeholders to make
                            informed decisions, optimize resources, and ensure project success through data-driven
                            insights.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('PSM.png') }}" alt="" class="img-fluid featuresImages">

                    <div>
                        <h4>Project scope management</h4>
                        <p><span class="fw-bold">Feature:</span> Scope Creep Prevention
                            <br>
                            <span class="fw-bold">Benefit:</span> Project scope management establishes clear boundaries
                            and deliverables, preventing scope creep, which ensures projects stay within budget and
                            deadlines, enabling efficient resource allocation and successful project completion.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_11"
                        x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73" xml:space="preserve">
                        <g>
                            <g>
                                <circle fill="#E26323" cx="36.5" cy="36.5" r="36"></circle>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M27.675,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C40.796,50.114,34.91,56,27.675,56z M27.675,31.759c-6.132,0-11.121,4.988-11.121,11.12     C16.554,49.011,21.543,54,27.675,54c6.132,0,11.121-4.989,11.121-11.121C38.796,36.747,33.807,31.759,27.675,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M45.325,56c-7.235,0-13.121-5.886-13.121-13.121c0-7.234,5.886-13.12,13.121-13.12     s13.121,5.886,13.121,13.12C58.446,50.114,52.56,56,45.325,56z M45.325,31.759c-6.132,0-11.121,4.988-11.121,11.12     C34.204,49.011,39.193,54,45.325,54c6.132,0,11.121-4.989,11.121-11.121C56.446,36.747,51.457,31.759,45.325,31.759z">
                                    </path>
                                </g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M36.394,43.241c-7.235,0-13.121-5.886-13.121-13.12C23.272,22.886,29.159,17,36.394,17     s13.121,5.886,13.121,13.121C49.515,37.355,43.628,43.241,36.394,43.241z M36.394,19c-6.132,0-11.121,4.989-11.121,11.121     c0,6.132,4.989,11.12,11.121,11.12s11.121-4.988,11.121-11.12C47.515,23.989,42.526,19,36.394,19z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg> --}}
                    <img src="{{ asset('SI.png') }}" alt="" class="img-fluid featuresImages">
                    
                    <div>
                        <h4>Seamless Integration</h4>
                        <p><span class="fw-bold">Feature:</span> Our platform seamlessly integrates with your existing
                            systems, such as ERP, CRM, and document management tools.
                            <br>
                            <span class="fw-bold">Benefit:</span> Eliminate data silos and enable smooth data exchange
                            between systems, ensuring a unified and streamlined workflow.
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>


    @include('footer')

    <!-- End Footer -->



    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Swiper JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        var swiper = new Swiper(".feature-content", {
            effect: "coverflow",
            coverflowEffect: {
                rotate: 40,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            autoplay: true,
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>
