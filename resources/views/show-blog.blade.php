<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="title" content="{{ $blog->title }}">


    <title>{{ $blog->title }}</title>
    <meta name="description" content="{{ $blog->meta_desc }}">
    <meta name="keywords" itemprop="keywords" content="{{ $blog->meta_keyword }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- This meta tag suggests the browser to use HTTPS and enforce it for 1 year -->
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">


    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    {{-- <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}
    {{-- <title>{{$blog->title}}</title> --}}

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
        h2 span {
            font-weight: bold;
        }

        /* #portfolio h2 {
            text-align: center;
        } */

        /* h4 {
            font-size: 30px;
            font-weight: bolder;
        } */

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
        .row-features .col-md-5,
        .row-features .col-md-6,
        .col-md-7,
        .row-features .col-md-8,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .row-features,
        .row-features .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
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

        .table-content strong {
            font-weight: normal;
        }

        .blog_desc a {
            color: #f75949;
        }

        .blog_desc a:hover {
            text-decoration: underline;
        }

        .table-content ul {
            list-style-type: none;
            padding-inline-start: 0;
        }

        .table-content ul li {
            margin-bottom: 5px;
        }

        .table-content ul li a {
            text-align: left;
            display: block;
            padding: 12px 15px 10px;
            background: #f1f1f1;
            color: #000;
            transition: background .2s ease;
        }

        .table-content li a:hover {
            background: #fff;
        }

        .table-content-container {
            background: #fbfbfb;
            padding: 10px;
            padding-top: 0;
            border: 1px solid #efefef;
            margin: 0 0 20px 0;
            position: sticky;
            top: 80px;
            left: 0;
            height: 400px;
            overflow-y: auto;
        }

        .table-content-container::-webkit-scrollbar {
            width: 8px;
        }

        .table-content-container::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .table-heading {
            position: sticky;
            top: 0;
            left: 0;
            background: #fbfbfb;
            text-align: center;
            padding-block: 1rem;
            font-weight: bold !important;
        }

        blockquote {
            border-left: 3px solid #ddd;
            padding: 5px 0 5px 10px;
            margin: 15px 0 15px 15px;
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
        <section id="portfolio" class="portfolio" style="overflow: unset">

            {{-- <div class="img-work">

                <img src="https://www.oas36ty.com/wp-content/uploads/2020/05/O.png" alt="">
            </div> --}}
            <div>
                <div class="container">
                    <div class="row gap-y">
                        {{-- <div class="col-lg-2 d-none d-lg-block table-content">
                            <h5>Table of Contents</h5>
                            @foreach ($blogs as $b)
                                @php
                                    $slug = str_replace(' ', '-', $b->title);
                                @endphp
                                <div>
                                    <ul>
                                        <li>
                                            <a href="{{ route('blog-edit', $slug) }}">
                                                {{ $b->title ?? '' }}
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            @endforeach

                        </div> --}}

                        <div class="table-content-container col-lg-2 d-none d-lg-block ">
                            <div id="table-of-contents" class="table-content">
                                <h5 class="table-heading">Table of Contents</h5>
                                <?php
                                $slug = str_replace(' ', '-', $blog->title);
                                preg_match_all('/<h2(?:[^>]*)>(.*?)<\/h2>/is', $blog->description, $matches);
                                if (!empty($matches[0])) {
                                    echo '<ul>';
                                    foreach ($matches[0] as $index => $match) {
                                        $uniqueId = $slug . '-h2-' . $index;
                                        echo '<li><a href="#' . $uniqueId . '">' . $matches[1][$index] . '</a></li>';
                                        $blog->description = str_replace($match, '<h2 id="' . $uniqueId . '">' . $matches[1][$index] . '</h2>', $blog->description);
                                    }
                                    echo '</ul>';
                                }
                                ?>
                            </div>
                        </div>

                        <div class="col-lg-8 offset-lg-1">
                            <h2>
                                <b>
                                    {{ $blog->title ?? '' }}
                                </b>
                            </h2>
                            <br>
                            <p>
                                Posted On
                                @if ($blog->created_at)
                                    {{ $blog->created_at->format('F j, Y') }}
                                @else
                                    {{ $blog->updated_at->format('F j, Y') }}
                                @endif
                            </p>

                            <img src="{{ $blog->image }}" alt="Alternative Text" style="margin-bottom:2rem;"
                                data-aos="fade-up" data-aos-duration="2000" class="aos-init aos-animate img-fluid">
                            <span class="blog_desc" style="font-size: 17px;">
                                {!! $blog->description !!}
                            </span>
                            {{-- <span class="blog_desc" style="font-size: 17px;">
                                {!! $b->description !!}
                            </span> --}}


                            <br>
                            <div>
                                @if (count($real) > 0)

                                    @foreach ($real as $tag)
                                        <a href="{{ $tag['url'] ?? '' }}">

                                            <span
                                                class="badge text-bg-light text-secondary border rounded-pill">{{ $tag['name'] ?? '' }}</span>
                                        </a>
                                    @endforeach
                                @endif

                                {{-- <a href="https://oas36ty.com">

                                    <span
                                        class="badge text-bg-light text-secondary border rounded-pill">Automation</span>
                                </a>
                                <a href="https://oas36ty.com">

                                    <span class="badge text-bg-light text-secondary border rounded-pill">components of
                                        payment processing system</span>
                                </a>
                                <a href="https://oas36ty.com">

                                    <span class="badge text-bg-light text-secondary border rounded-pill">Machine
                                        Learning</span>
                                </a>
                                <a href="https://oas36ty.com">

                                    <span class="badge text-bg-light text-secondary border rounded-pill">Online Payment
                                        Processing System</span>
                                </a>
                                <a href="https://oas36ty.com">

                                    <span class="badge text-bg-light text-secondary border rounded-pill">Online
                                        Payments</span>
                                </a>
                                <a href="https://oas36ty.com">

                                    <span class="badge text-bg-light text-secondary border rounded-pill">Online
                                        Transactions</span>
                                </a>
                                <a href="https://oas36ty.com">

                                    <span class="badge text-bg-light text-secondary border rounded-pill">Payment
                                        Processing
                                        Company</span>
                                </a>
                                <a href="https://oas36ty.com">

                                    <span class="badge text-bg-light text-secondary border rounded-pill">payment
                                        processing
                                        system</span>
                                </a>
                                <a href="https://oas36ty.com">
                                    <span class="badge text-bg-light text-secondary border rounded-pill">Payment
                                        Processor</span>
                                </a>
                                <span class="badge text-bg-light text-secondary border rounded-pill">Secure payment
                                    Process</span>
                                <a href="https://oas36ty.com">
                                    <span class="badge text-bg-light text-secondary border rounded-pill">Tranasaction on
                                        website</span>
                                </a> --}}
                            </div>
                            <br>

                        </div>

                        <div class="w-100"></div>
                    </div>
                </div>
                <div class="section" id="comments" style="background-color: #F8F9FA;padding-block:5rem">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a
                                                rel="nofollow" id="cancel-comment-reply-link"
                                                href="/what-is-a-payment-processing-system-how-does-it-work/#respond"
                                                style="display:none;">Cancel reply</a></small></h3>
                                    <form action="{{ route('contacts') }}" method="POST" id="commentform"
                                        class="comment-form">
                                        @csrf
                                        @method('POST')
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span> Required fields are marked <span
                                                class="required">*</span></p>
                                        <div class="form-group mb-3"><input required name="name"
                                                class="form-control" type="text" placeholder="Name *"></div>
                                        <div class="form-group mb-3"><input required name="email"
                                                class="form-control" type="email" placeholder="Email *"></div>
                                        {{-- <div class="form-group mb-3"><input id="url" name="url" class="form-control" type="text" placeholder="Website"></div> --}}
                                        {{-- <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox"><input
                                                    id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                                    type="checkbox" class="custom-control-input" value="yes"
                                                    checked=""><label class="custom-control-label ms-1">Save my
                                                    name, email, and website in this browser for the next time I
                                                    comment.</label></div>
                                        </div> --}}
                                        <div class="form-group mb-3">
                                            <textarea required name="message" aria-required="true" class="form-control" placeholder="Comment *" rows="5"></textarea>
                                        </div>
                                        <p class="form-submit d-grid">
                                            <x-primary-button
                                                style="
                                            background: #f75949;

    margin-top: 2rem;
                                        "
                                                type="submit">
                                                Submit Comment
                                            </x-primary-button>
                                        </p>
                                    </form>
                                </div><!-- #respond -->
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
        document.addEventListener("DOMContentLoaded", function() {
            // Adjust this margin value as needed
            var margin = 75;


            var links = document.querySelectorAll('a[href^="#"]');

            links.forEach(function(link) {
                link.addEventListener("click", function(event) {
                    event.preventDefault();

                    var targetId = link.getAttribute("href").substring(1);
                    var target = document.getElementById(targetId);

                    if (target) {
                        var offset = target.getBoundingClientRect().top + window.scrollY - margin;
                        var duration = 300;

                        smoothScrollTo(offset, duration);
                    }
                });
            });

            function smoothScrollTo(to, duration) {
                var start = window.scrollY;
                var startTime = performance.now();

                function step(timestamp) {
                    var currentTime = timestamp - startTime;

                    window.scrollTo(0, easeInOutQuad(currentTime, start, to - start, duration));

                    if (currentTime < duration) {
                        requestAnimationFrame(step);
                    }
                }

                function easeInOutQuad(t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
                }

                requestAnimationFrame(step);
            }
        });
    </script>





</body>

</html>
