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

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        .accordion {
            background-color: #f9fafb;
            color: #444;
            cursor: pointer;
            padding: 20px;
            width: 100%;
            text-align: left;
            outline: none;
            transition: 0.4s;
            margin-bottom: 0;
            font-size: 1.2rem;
        }

        .accordion-container {
            padding: 0;
        }

        .active,
        .accordion:hover {
            background-color: #f0f0f0;
        }

        .accordion:after {
            /* content: '\02795'; */
            content: '\2304';
            font-size: 30px;
            color: #e2321f;
            float: right;
            margin-left: 5px;
            margin-top: -1.3rem;
            transition: all 0.2s linear;
        }

        .active:after {
            /* content: "\2796"; */
            transform: rotate(180deg);
            margin-top: 0;
        }

        .panel {
            /* padding: 0 20px; */
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .panel p {
            padding: 20px;
            margin-bottom: 0;
        }

        #scb-wrapper ul,
        #scb-wrapper li,
        #scb-wrapper a,
        #scb-wrapper a span {
            display: inline;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            font-size: 0.96em;
            line-height: 1;
        }

        #scb-wrapper ul:after,
        #scb-wrapper li:after {
            display: inline;
        }

        #scb-wrapper li {
            margin: 0 .5em;
        }

        #scb-wrapper img {
            display: inline;
            vertical-align: middle;
            margin: 0;
            padding: 0;
            border: 0 none;
            width: 18px;
            height: 18px;
        }

        #scb-wrapper .scb-email {
            padding-right: 1em;
        }

        #scb-wrapper .scb-email a span,
        #scb-wrapper .scb-sms a span,
        #scb-wrapper .scb-whatsapp a span {
            margin: 0 .3em;
        }

        #scb-wrapper li a span {
            white-space: nowrap;
        }

        #scb-wrapper.scb-fixed {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2147483647;
            width: 100%;
        }

        @media screen and (max-width:320px) {
            #scb-wrapper {
                display: none;
            }
        }

        @media screen and (min-width:320px) {
            #scb-wrapper {
                display: none;
            }
        }

        @media screen and (max-width:768px) {

            #scb-wrapper .scb-phone span,
            #scb-wrapper .scb-fax span,
            #scb-wrapper .scb-cellphone span,
            #scb-wrapper .scb-sms span,
            #scb-wrapper .scb-email span {
                display: none;
            }
        }

        @media screen and (max-width:480px) {
            #scb-wrapper #scb-directs {
                margin-bottom: .5em;
            }

            #scb-wrapper ul {
                display: block;
            }
        }

        #scb-wrapper {
            padding: 10px 15px;
            background-color: rgba(223, 223, 223, 1.000);
            color: #ffffff;
            text-align: right;
            box-shadow: 0 1px 6px 3px #ccc;
        }

        #scb-wrapper h3 {
            display: inline;
            margin: 0;
            padding: 0;
            font: normal normal bold 15px/1 sans-serif;
            color: #ffffff;
        }

        #scb-wrapper h3::before,
        h3::after {
            display: none;
        }

        @media screen and (max-width: 768px) {
            #scb-wrapper h3 {
                display: none;
            }
        }

        #scb-wrapper a {
            color: #e2321f;
        }

        #scb-wrapper h3,
        #scb-wrapper ul,
        #scb-wrapper li,
        #scb-wrapper a,
        #scb-wrapper a span {
            font-size: 14px;
        }

        #scb-wrapper h3 {
            display: inline;
            left: -32768px;
            margin: 0;
            padding: 0;
            position: absolute;
            top: 0;
            z-index: 1000;
        }



        #portfolio h2 {
            text-align: center;
        }

        h4 {
            font-size: 30px;
            font-weight: bolder;
        }

        .font-23 {
            font-size: 23px;
        }

        .content-features p {
            font-weight: 100;
            font-size: 21px;
        }

        .desc_features {
            text-align: center;
            margin: auto;
            padding: 10px;
            width: 50%;

        }

        .content-features {
            margin-left: 10rem;
            margin-right: 10rem;

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
        .col-md-3,
        .col-md-4,
        .row-features .col-md-5,
        .row-features .col-md-6,
        .col-md-7,
        .row-features .col-md-8,
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
        .row-features .col-xl-4,
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

        .small-text {
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 2rem;
        }

        .img-work {
            text-align: center;

        }

        .line-height-1 {
            line-height: 1;
        }

        .steps-start h5 {
            font-weight: bolder;
        }

        .w-70px {
            width: 70px !important;
        }

        .media-body {
            -webkit-box-flex: 1;
            flex: 1;
        }

        .lead-6 {
            font-size: 2.34375rem !important;
        }

        .media {
            /* display: -webkit-box; */
            display: flex;
            -webkit-box-align: start;
            align-items: flex-start;
        }

        /* .icon-mobile, .icon-laptop, .icon-desktop, .icon-tablet, .icon-phone, .icon-document, .icon-documents, .icon-search, .icon-clipboard, .icon-newspaper, .icon-notebook, .icon-book-open, .icon-browser, .icon-calendar, .icon-presentation, .icon-picture, .icon-pictures, .icon-video, .icon-camera, .icon-printer, .icon-toolbox, .icon-briefcase, .icon-wallet, .icon-gift, .icon-bargraph, .icon-grid, .icon-expand, .icon-focus, .icon-edit, .icon-adjustments, .icon-ribbon, .icon-hourglass, .icon-lock, .icon-megaphone, .icon-shield, .icon-trophy, .icon-flag, .icon-map, .icon-puzzle, .icon-basket, .icon-envelope, .icon-streetsign, .icon-telescope, .icon-gears, .icon-key, .icon-paperclip, .icon-attachment, .icon-pricetags, .icon-lightbulb, .icon-layers, .icon-pencil, .icon-tools, .icon-tools-2, .icon-scissors, .icon-paintbrush, .icon-magnifying-glass, .icon-circle-compass, .icon-linegraph, .icon-mic, .icon-strategy, .icon-beaker, .icon-caution, .icon-recycle, .icon-anchor, .icon-profile-male, .icon-profile-female, .icon-bike, .icon-wine, .icon-hotairballoon, .icon-globe, .icon-genius, .icon-map-pin, .icon-dial, .icon-chat, .icon-heart, .icon-cloud, .icon-upload, .icon-download, .icon-target, .icon-hazardous, .icon-piechart, .icon-speedometer, .icon-global, .icon-compass, .icon-lifesaver, .icon-clock, .icon-aperture, .icon-quote, .icon-scope, .icon-alarmclock, .icon-refresh, .icon-happy, .icon-sad, .icon-facebook, .icon-twitter, .icon-googleplus, .icon-rss, .icon-tumblr, .icon-linkedin, .icon-dribbble {
    font-family: 'et-line';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    display: inline-block;
}
.icon-mobile:before, {
    content: "\e000";
}
.icon-layers::before{
    content: "\e031";
} */
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
        <section id="portfolio" class="portfolio">
            {{-- <div class="small-text">

                <small>
                    Features
                </small>
            </div> --}}
            <h2>
                <b>

                    FAQ

                </b>
            </h2><br>
            <div class="desc_features">

                <span class="font-23" style="font-weight: 100;">
                    Got a question? We've got answers. If you have some other questions, see our support center.





                </span>
            </div>
            {{-- <div class="img-work">

                <img src="https://www.oas36ty.com/wp-content/uploads/2020/05/O.png" alt="">
            </div> --}}
            <div class="container steps-start" style="margin-top:2rem;">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="accordion-container">
                            <h5 class="accordion">How to assign a new member to lead/task?</h5>
                            <div class="panel">
                                <p>Go to “Lead/Task”, then click assigned to assign new member.</p>
                            </div>
                        </div>

                        <div class="accordion-container">
                            <h5 class="accordion">How to complete the task?</h5>
                            <div class="panel">
                                <p>Go to respective task, then click complete task & comment also.</p>
                            </div>
                        </div>

                        <div class="accordion-container">
                            <h5 class="accordion">How to record internal work?</h5>
                            <div class="panel">
                                <p>Go to ‘Create New” on top right hand side, then click “Add Task” we have a sliding
                                    option, then you click “Internal Task”, subject, description and assigned to, due
                                    date is compulsory. Rest fields of “Add task” are optional.</p>
                            </div>
                        </div>

                        <div class="accordion-container">
                            <h5 class="accordion">How to mail from task/lead?</h5>
                            <div class="panel">
                                <p>Go to ‘Dashboard’ on left side drop down, then Go to respective ‘Lead/Task’ search
                                    tasks, select content, Create to the Client, see how to look the body of mail
                                    content.</p>
                            </div>
                        </div>

                        <div class="accordion-container">
                            <h5 class="accordion">How do categorized my tasks?</h5>
                            <div class="panel">
                                <p>Go to ‘Dashboard’, on left side drop down, then click ‘Task’ click on ‘Filter’ option
                                    & categorized you need as well.</p>
                            </div>
                        </div>

                        <div class="accordion-container">
                            <h5 class="accordion">How to add more Organisations?</h5>
                            <div class="panel">
                                <p>Add more organisation by Super Admin. It depends on your plan.</p>
                            </div>
                        </div>

                        <div class="accordion-container">
                            <h5 class="accordion">How to add Proposal Template?</h5>
                            <div class="panel">
                                <p>Go to ‘Create New” on top right hand side, then click “Add Proposal Template”
                                    template name, title, description.</p>
                            </div>
                        </div>

                        <div class="accordion-container">
                            <h5 class="accordion">How to Add Proposal ?</h5>
                            <div class="panel">
                                <p>You can add this in a two ways. First you Go to ‘Create New” on top right hand side,
                                    then click “Add Mail” search tasks, client, contact person, proposal date, client
                                    name, concerned person, address, subject, add description, fees. Second You Go to
                                    respective ‘Lead/Task’ then you can add a “Add Mail” as well.</p>
                            </div>
                        </div>

                        <div class="accordion-container">
                            <h5 class="accordion">How to Add Contact Person?</h5>
                            <div class="panel">
                                <p>You can add this in a two ways. First you Go to “Create New” on top right hand side,
                                    then click “Add Contact Person” contact name, email, phone. Second you can go to add
                                    lead/task, add contact person as well.</p>
                            </div>
                        </div>

                        <div class="accordion-container">
                            <h5 class="accordion">How to add Designation?</h5>
                            <div class="panel">
                                <p>Go to “Create New” on top right hand side, then click “Add Designation” designation
                                    name, select privileges.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="content-features">
                <div class="row gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Complete Office-Automation</h4>
                        <p >If you have a business plan, we have an automation tool to go as planned. Oas36ty platform
                            covers everything from Query Initiation till Payment processing. It automates many tasks
                            which helps you eliminate the need for a large staff. It follows intelligent communication
                            system to accomplish tasks faster. It allows you to update data simultaneously in the event
                            of changes in workflow/Task.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Office-management-pana.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
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
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Inbox-cleanup-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Smart &amp; Easy Interface</h4>
                        <p>Oas36ty presents a visually pleasing interface That allows users to enjoy exploring it. This
                            feature ensures that your software can be opened on any platform, through any device. The
                            most interesting fact is that the resolution gets defined according to the device. Thus, it
                            delivers seamless work experience for users.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/User-flow-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
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
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Safe-bro.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
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
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Online-world-cuate.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Machine Learning &amp; Artificial Intelligence</h4>
                        <p>Our unique platform integrates, analyses and creates all your data and analytics through
                            Machine Learning and Artificial Intelligence. This feature will be an invaluable asset for
                            your business by managing every activity from lead to deal. It will automate repetitive
                            tasks which consume time. Become smarter and more productive by using Oas36ty!</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Android-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Skilled Outreach</h4>
                        <p>Oas36ty's real-time platform integrates various communication modes in one place. You can see
                            all of your updates—including conversations, emails, notifications, follow-ups, and other
                            types of updates in a single window. This saves you both time and effort by eliminating the
                            need to access numerous platforms. You can automate your communication procedures and make
                            sure you never miss a crucial message with the help of our platform</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Creative-team-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Managing Multi-fold Enterprises</h4>
                        <p>Overseeing multiple businesses can seem daunting but this software can make these ventures a
                            success. You can run multiple businesses on this single platform – no more juggling between
                            multiple apps! It has common features like managing project, time-tracking, storing and
                            sharing documents, managing projects - to name a few. You can take care of your businesses
                            without spending most of your time and effort!</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Work-time-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Brilliant Almanac</h4>
                        <p>This feature will remind you continuously about the list of tasks to be completed on a
                            specific date. It has categories like hearing, phone, email, visit, and appointment so
                            there’s no chance of forgetting any tasks. It keeps you on-time and prepared especially when
                            you have meetings back to back. You can also have a glance at the upcoming events.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Time-management-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
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
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Market-launch-rafiki.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Mobile App</h4>
                        <p>The best part about this software is cross platform mobile application development. It can be
                            accessed by both Android and iOS users at the same time and so it increases the app
                            visibility reaching broader audience. It also maintains the consistency of the app across
                            all the platforms. Other advantages include less development cost, less time-consuming,
                            code-re usability, and many more.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Online-world-bro.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Journey Tracker/ Employee Journey Mapping</h4>
                        <p>Employee journey mapping is a visualization of individual employee’s experience at your
                            company, from recruitment to opportunities for advancement and career development. This
                            feature helps your HR team identify areas for improvement which in turn can make a huge
                            difference in your employees’ retention and overall culture of your business.</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Location-tracking-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
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
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Investment-data-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Productivity Scale</h4>
                        <p>Oas36ty will help your firm increase and utilise the utmost capacity of the human resources
                            available. Also, it helps to advance the workplace culture and boost enthusiasm, producing
                            an even better company environment.</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Business-Plan-bro.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Proposal to Payment Processing</h4>
                        <p>Oas36ty automates import and export functions, centralises content, and facilitates
                            collaboration among stakeholders. Thus, it makes the entire process simple and
                            straightforward. The technology integrations enable you and your team members to connect
                            instantly to clients, content, and reports. With a well-thought-out dashboard, you can have
                            clarity in everything you see and do.</p>
                    </div>

                    <div class="col-md-5 mr-auto order-md-first">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/E-Wallet-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
                <div class="row-features gap-y align-items-center my-9">
                    <div class="col-md-6">
                        <h4>Escalation Based Reporting/Push Reporting System</h4>
                        <p>Oas36ty uses a simple graphical interface that makes the system setup, usage, and maintenance
                            effortless. The reports generated are highly customizable by simply checking/unchecking what
                            is required. If there are any mistakes found in the reports, this feature will notify
                            automatically. You can even export data reports to a spreadsheet from which you can
                            customize the data further.</p>
                    </div>

                    <div class="col-md-5 ml-auto">
                        <img src="https://www.oas36ty.com/wp-content/uploads/2023/07/Audit-amico.png"
                            alt="Alternative Text">
                    </div>
                </div>
            </div> --}}
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

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        function closeAllAccordions() {
            for (var j = 0; j < acc.length; j++) {
                var panel = acc[j].nextElementSibling;
                acc[j].classList.remove("active");
                panel.style.maxHeight = null;
            }
        }

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                if (!this.classList.contains("active")) {
                    closeAllAccordions();
                    this.classList.add("active");
                    var panel = this.nextElementSibling;
                    panel.style.maxHeight = panel.scrollHeight + "px";
                } else {
                    this.classList.remove("active");
                    var panel = this.nextElementSibling;
                    panel.style.maxHeight = null;
                }
            });
        }
    </script>
</body>

</html>
