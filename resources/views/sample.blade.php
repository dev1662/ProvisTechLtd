<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Oas36ty Intelligent Office Automation Solutions</title>
    <meta name="description"
        content="What is Intelligent Automation, how and why businesses use Intelligent Automation, and how to use Intelligent Automation with Oas36ty Intelligent Office Automation.">
    <meta name="keywords"
        content="office automation, Intelligent Office Automation, Office Automation Tools, Smart Office Automation, Intelligent automation, Office Automation Platforms">
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QEM42BWDN9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-QEM42BWDN9');
    </script>
</head>
<style>
    .featuresImages {
        height: 60px;
        width: 65px;
    }

    button {
        transition: transform 0.3s;
    }

    h2.text-fill,
    h2.text-fill-circle {
        background-image: linear-gradient(56deg, rgba(247, 200, 73, 1) 0%, rgba(247, 89, 73, 1) 55%, rgba(247, 197, 73, 1) 100%);
        background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
        max-inline-size: 700px;
        line-height: 86px;
        font-size: 70px;
        margin-inline: auto;
    }

    h2.text-fill-circle {
        max-inline-size: unset;
        line-height: initial;
        font-size: 3rem;
    }

    h2.text-fill-tabs,
    .nav-tabss h2:hover {
        background-image: linear-gradient(56deg, rgba(247, 200, 73, 1) 0%, rgba(247, 89, 73, 1) 55%, rgba(247, 197, 73, 1) 100%);
        background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
    }

    button.button-tab {
        background: transparent;
        border: none;
        color: #777;
    }

    button.button-fill-tabs {
        font-weight: bold;
        border: 0;
        color: #333;
    }

    .svg-select {
        padding: 1rem;
        border-radius: 1rem;
        background-color: #eee;
    }

    .svg-select.active {
        background-color: #333;
    }

    button.text-fill {
        background: linear-gradient(56deg, rgba(247, 200, 73, 1) 0%, rgba(247, 89, 73, 1) 55%, rgba(247, 197, 73, 1) 100%);
        padding: 1rem 5rem;
        color: #fff;
        border: none;
        border-radius: 1rem;
        font-weight: bold;
        font-size: 1.3rem;
    }

    .vertical-scroll {
        background: url('https://clickup.com/assets/home-test/cta-bg.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 900px;
    }

    .font-size-scroll {
        background: url('https://clickup.com/assets/home-test/animated-callout-bg.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 1424px;
        background-position: center center;
        position: relative;
    }

    .font-size-scroll .inside-font {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .inside-font h1 {
        color: #fff;
        font-weight: bold;
        font-size: 3rem;
    }

    .circle {
        position: relative;
        height: 900px;
        border: 1px solid #f75949;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        aspect-ratio: 1;
        margin: auto;
    }

    .inside-circle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .tab-pane,
    .tab-pane-screenshot {
        display: none;
    }

    .tab-pane.active,
    .tab-pane-screenshot.active {
        display: block;
        overflow: hidden;
        border: 2px solid transparent;
        background: linear-gradient(56deg, rgba(247, 200, 73, 1) 0%, rgba(247, 89, 73, 1) 55%, rgba(247, 197, 73, 1) 100%);
        border-radius: 14px;
    }

    .tab,
    .tabScreenshot {
        cursor: pointer;
        margin-bottom: 1rem;
    }

    .tabScreenshot:hover button {
        transform: translateY(-3px);
    }

    .custom-badge {
        border: 1px solid #777;
        padding: 5px 10px;
        border-radius: 8px;
        box-shadow: 0px 2px 2px 3px rgba(187, 187, 187, 0.2);
    }


    .font-size-scroll button:hover {
        transform: translateY(3px);
    }

    .card-images {
        margin-top: -7rem;
    }

    .or-card:before {
        content: '-OR-';
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        padding: 1rem;
        aspect-ratio: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: rgba(255, 255, 255, 0.5);
        transform: translate(-50%, -50%);
        color: #fff;
        font-size: 1rem;
    }

    .join-btn {
        background: rgba(94, 111, 172, 0.3);
        border: none;
        padding: 1rem 3rem;
        border-radius: 1rem;
        transition: all 0.3s;
    }

    .join-btn:hover {
        background: rgba(94, 111, 172, 0.7);
        transform: translateY(3px);
    }


    .pt-4 {
        padding-top: 4rem !important;
    }

    .pb-4 {
        padding-bottom: 4rem !important;
    }

    img {
        border-radius: 14px;
    }

    .rotateContainer {
        overflow: hidden;
        position: relative;
    }

    .rotateContainer::before,
    .rotateContainer::after {
        content: '';
        position: absolute;
        top: 0;
        left: -2.5%;
        inset-block-start: 0;
        inline-size: 200px;
        block-size: 153px;
        background: url('https://clickup.com/assets/home-test/tab-nav-fade.svg');
        background-size: contain;
        z-index: 1;
        pointer-events: none;
    }

    .rotateContainer::after {
        left: unset;
        inset-inline-end: -2.5%;
        transform: rotate(180deg);
    }

    .carousel-card {
        padding-bottom: 10rem;
        background: url('https://clickup.com/assets/home-test/mobile-tabs-bg.svg');
        background-repeat: no-repeat;
        background-size: 95%;
        background-position: top;
    }

    .carousel-card::after {
        content: '';
        position: absolute;
        inset-block-end: 0;
        inline-size: 100%;
        block-size: 160px;
        background-image: url('https://clickup.com/assets/home-test/tab-decoration.png');
        background-position: center -35px;
        background-repeat: no-repeat;
        background-size: 70%;
        z-index: -1;
    }

    .carousel {
        width: 100%;
        transition: transform 0.5s ease;
    }

    @media(width<=800px) {

        .rotateContainer::before,
        .rotateContainer::after {
            display: none;
        }
    }

    @media(width<=576px) {

        h2.text-fill {
            font-size: 45px;
            line-height: 1.2;
        }

        .rotateContainer::before,
        .rotateContainer::after {
            display: none;
        }

        .carousel-card {
            background: #fff;
        }
    }

    .exploreKeyBtn {
        background: #fff;
        border: 2px solid #f75949;
        padding: 1rem 3rem;
        color: #f75949;
        font-weight: bold;
        border-radius: 1rem;
        transition: all 0.3s;
    }

    .exploreKeyBtn:hover {
        background: #f75949;
        color: #fff;
    }
</style>

<body>
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
    <main>
        <div class="container my-4 pt-4 pb-4">
            <div class="py-5 text-center">
                <h2 class="text-fill">Oas36ty Intelligent Office Automation</h2>
                <h4 style="font-weight: bold">For Complete Office Automation of Your Office Using </h4>
                <h5>Streamline, Simplify, and Supercharge Your Operations</h5>
                <button class="text-fill mt-3">Get Started.</button>
            </div>
        </div>
        <div class="mt-4 pt-4 carousel-card position-relative">
            <div class="container rotateContainer">
                <div class="carousel" id="carousel">
                    <div id="tabsContainer" class="nav-tab-screenshot d-flex align-item-center justify-content-between "
                        style="gap: 1rem;overflow:hidden;width:max-content;padding-top:4px">
                    </div>
                </div>
                <div id="tabContentContainer" class="tab-content-screenshot mt-3">
                </div>
            </div>
        </div>
        <div class="container pb-4">
            <h2 class="text-fill text-center">Save time and get more done</h2>
            <h5 class="text-center mx-auto" style="max-inline-size:500px">Supercharge productivity. Streamline work by
                doing
                it, and seeing it, in one place.
            </h5>
        </div>
        <div class="my-4" style="overflow: hidden">
            <div class="container position-relative pt-4 pb-4" style="min-height: 450px">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="nav-tabss">
                            <div class="tab active" data-tab="tab1" onclick="changeTab('tab1')">
                                <h2 style="font-size:30px;" class="text-fill-tabs">Workflow Automation and Orchestration
                                </h2>
                                <div class="insideTab" style="display: block">
                                    <p>
                                    <ul>
                                        <li>
                                            <span class="fw-bold">Feature:</span> Automate end-to-end workflows,
                                            including data entry, validation,
                                            document processing, and task assignment.
                                        </li>
                                        <li>
                                            <span class="fw-bold">Benefit:</span> Minimize manual intervention, decrease
                                            processing time, and enhance
                                            productivity by automating repetitive and time-consuming tasks.
                                        </li>
                                    </ul>
                                    {{-- Get your teams working together more closely,
                                        even
                                        if
                                        they’re far apart. Centralize
                                        project-related communications in one place, brainstorm ideas with Whiteboards,
                                        and
                                        draft plans together with collaborative Docs. --}}


                                    </p>
                                    {{-- <div class="d-flex flex-wrap" style="gap:1rem">
                                        <div class="custom-badge">Comments</div>
                                        <div class="custom-badge">Docs</div>
                                        <div class="custom-badge">Whiteboards</div>
                                        <div class="custom-badge">Clips</div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tab" data-tab="tab2" onclick="changeTab('tab2')">
                                <h2 style="font-size:30px;">Intelligent Document Processing</h2>
                                <div class="insideTab" style="display:none">
                                    <p>
                                    <ul>
                                        <li>
                                            <span class="fw-bold">Feature:</span> Our solution uses intelligent optical
                                            character recognition (OCR)
                                            and natural language processing (NLP) capabilities to extract and process
                                            data from various document formats.
                                        </li>
                                        <li>
                                            <span class="fw-bold">Benefit:</span> Streamline document-intensive
                                            processes, reduce manual data entry,
                                            improve data accuracy, and accelerate document turnaround time.
                                        </li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex flex-wrap" style="gap:1rem">
                                        <div class="custom-badge">Views</div>
                                        <div class="custom-badge">Dashboards</div>
                                        <div class="custom-badge">Reports</div>
                                        <div class="custom-badge">Goals</div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tab" data-tab="tab3" onclick="changeTab('tab3')">
                                <h2 style="font-size:30px;">Real-time Analytics and Reporting</h2>
                                <div class="insideTab" style="display:none">
                                    <p>
                                    <ul>
                                        <li>
                                            <span class="fw-bold">Feature:</span> Gain valuable insights into your back
                                            office operations with
                                            real-time analytics and customizable reports.
                                        </li>
                                        <li>
                                            <span class="fw-bold">Benefit:</span> Monitor performance metrics, identify
                                            bottlenecks, and make
                                            data-driven decisions to improve efficiency and optimize processes
                                            continuously.
                                        </li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex flex-wrap" style="gap:1rem">
                                        <div class="custom-badge">Automations</div>
                                        <div class="custom-badge">Forms</div>
                                        <div class="custom-badge">Task Templates</div>
                                        <div class="custom-badge">Custom Fields</div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-md-block d-none" style="position: absolute; right:-180px;top:0;">
                        <div class="tab-content" style="overflow: hidden">
                            <div class="tab-pane active" id="tab1">
                                {{-- <img
                                    src="https://clickup.com/assets/home-test/collaborate.png" alt=""
                                    class="img-fluid"> --}}
                                <img src="{{ asset('WorkflowImage.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="tab-pane" id="tab2"><img
                                    src="https://clickup.com/assets/home-test/enhance.png" alt=""
                                    class="img-fluid"></div>
                            <div class="tab-pane" id="tab3"><img
                                    src="https://clickup.com/assets/home-test/streamline.png" alt=""
                                    class="img-fluid"></div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 d-block d-lg-none">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1"><img
                                    src="https://clickup.com/assets/home-test/collaborate.png" alt=""
                                    class="img-fluid"></div>
                            <div class="tab-pane" id="tab2"><img
                                    src="https://clickup.com/assets/home-test/enhance.png" alt=""
                                    class="img-fluid"></div>
                            <div class="tab-pane" id="tab3"><img
                                    src="https://clickup.com/assets/home-test/streamline.png" alt=""
                                    class="img-fluid"></div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="vertical-scroll my-5 d-lg-block d-none pb-4" id="scrollDiv">
            <div class="circle">
                <div class="inside-circle">
                    <h2 class="text-fill-circle text-center">Bring Teams and work together</h2>
                    <p style="font-weight: bold">Eliminate app chaos. Consolidate tools and cut costs.</p>
                    <button class="text-fill mt-3 d-block mx-auto">Get Started.</button>
                </div>
            </div>
        </div>
        {{-- <div class="font-size-scroll" id="fontScrollDiv">
            <div class="inside-font">
                <h1 class="text-center"
                    style="background: linear-gradient(352deg, #fff 6.96%, #EB00FF 107.25%);background-clip:text;-webkit-text-fill-color:transparent">
                    Ready to unleash your team's full potential?</h1>
                <div class="d-flex justify-content-center mt-3" style="gap: 1rem;">
                    <button
                        style="font-weight:bold;background-color:#fff;color:rgb(71,29,124);border:none;padding:0.75rem 3rem;border-radius:1rem;font-size:1.5rem;">Yes,
                        lets
                        do this</button>
                    <button
                        style="font-weight:bold;background-color:rgba(255, 255, 255,.2);color:rgba(255,255,255,0.5);border:1px solid #fff;padding:0.75rem 3rem;border-radius:1rem;font-size:1.5rem;">Show
                        me more</button>
                </div>
            </div>
        </div> --}}
        <div class="container my-5 pt-4 pb-4">
            <h2 class="text-fill text-center mb-5" style="font-size: 3rem;line-height:initial">Key Features</h2>
            <div class="row mx-auto" style="max-width: 1000px">
                <div class="col-md-6">
                    <div class="d-flex" style="gap: 1rem">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            id="Layer_11" x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73"
                            xml:space="preserve">
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
                        <img src="{{ asset('WorkFlowAutomation.png') }}" alt=""
                            class="img-fluid featuresImages">

                        <div class="w-100">
                            <h3>Workflow Automation and Orchestration</h3>
                            <p><span class="fw-bold">Feature:</span> Automate end-to-end workflows, including data
                                entry, validation, document processing, and task assignment.
                                <br />
                                <span class="fw-bold">Benefit:</span> Minimize manual intervention, decrease
                                processing
                                time, and enhance productivity by automating repetitive and time-consuming tasks.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex" style="gap: 1rem">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            id="Layer_11" x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73"
                            xml:space="preserve">
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

                        <div class="w-100">
                            <h3>Intelligent Document Processing</h3>
                            <p><span class="fw-bold">Feature:</span> Our solution uses intelligent optical
                                character
                                recognition (OCR) and natural
                                language processing (NLP) capabilities to extract and process data from various
                                document
                                formats.
                                <br />
                                <span class="fw-bold">Benefit:</span> Streamline document-intensive processes,
                                reduce
                                manual data entry, improve data
                                accuracy, and accelerate document turnaround time.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex" style="gap: 1rem">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            id="Layer_11" x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73"
                            xml:space="preserve">
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

                        <div class="w-100">
                            <h3>Real-time Analytics and Reporting</h3>
                            <p><span class="fw-bold">Feature:</span> Gain valuable insights into your back office
                                operations with real-time analytics and customizable reports.
                                <br />
                                <span class="fw-bold">Benefit:</span> Monitor performance metrics, identify
                                bottlenecks, and make data-driven decisions to improve efficiency and optimize
                                processes
                                continuously.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex" style="gap: 1rem">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            id="Layer_11" x="0px" y="0px" width="73px" height="73px" viewBox="0 0 73 73"
                            xml:space="preserve">
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

                        <div class="w-100">
                            <h3>Project Management Reports</h3>
                            <p><span class="fw-bold">Feature:</span> Comprehensive Reporting Dashboard
                                <br />
                                <span class="fw-bold">Benefit:</span> Project management reports provide a
                                centralized
                                dashboard displaying key metrics, milestones, and risks, enabling stakeholders to
                                make
                                informed decisions, optimize resources, and ensure project success through
                                data-driven
                                insights.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('oas-features') }}"><button class="exploreKeyBtn d-block mx-auto mt-5">Explore Key
                    Features</button></a>
        </div>
        <div class="container my-5 pt-4 pb-4">
            <div class="text-center mb-5">
                <h2 class="text-fill" style="font-size: 3rem;line-height:initial">Everything your team is looking for
                </h2>
                <h6 style="max-inline-size: 700px" class="mx-auto"><span style="font-weight: bold">ClickUp’s
                        exceptional flexibility
                        can handle any type of
                        work.</span> And we never stop innovating.</h6>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card h-100 text-white border-0"
                        style="background: linear-gradient(352deg, #5037E7 6.96%, #EB00FF 107.25%)">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h4>AI-powered productivity</h4>
                                <p>Get work done faster with the only AI-powered assistant tailored to your role.</p>
                            </div>
                        </div>
                        <img src="https://clickup.com/assets/home-test/AI-powered-productivity.png"
                            class="
                        img-fluid card-images" alt="">
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="card h-100 text-white border-0"
                        style="background: linear-gradient(352deg, #6731EC 1.65%, #44CFFF 118.4%)">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h4>View work your way</h4>
                                <p>Instantly switch between 15 views including list, board, gantt, and more.</p>
                            </div>
                        </div>
                        <img src="https://clickup.com/assets/home-test/view-work-your-way.png" alt=""
                            class="img-fluid card-images">
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="card h-100 text-white border-0"
                        style="background: linear-gradient(170deg, #6731EC 1.65%, #44CFFF 118.4%)">
                        <div class="card-body">
                            <div>
                                <h4>Customize in a click</h4>
                                <p>Configuring ClickUp for different types of work is as easy as flipping a switch.</p>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-center p-4">
                                <div class="d-flex align-items-center" style="gap: 1rem">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.7654 3.78787L13.7654 18.3985L23.6558 26.7861C23.6558 26.7861 30.8731 19.5126 26.5962 11.3638C22.052 2.7056 13.7654 3.78787 13.7654 3.78787Z"
                                            fill="white" fill-opacity="0.09"></path>
                                        <path
                                            d="M1.46997 16.886C1.46997 9.65208 7.3342 3.78784 14.5681 3.78784C21.802 3.78784 27.6662 9.65207 27.6662 16.886V17.2053C27.6662 24.4392 21.802 30.3035 14.5681 30.3035C7.3342 30.3035 1.46997 24.4392 1.46997 17.2053V16.886Z"
                                            fill="white" fill-opacity="0.09" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M13.7654 18.3984L17.5077 21.6453" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M13.7654 18.3984V10.2814" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M22.3207 2.16455C22.3207 2.16455 26.2221 1.78438 27.9342 3.51738C29.6464 5.25038 29.2709 9.19931 29.2709 9.19931"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                    <p class="mb-0">Time Tracking</p>
                                </div>
                                <svg width="59" height="28" viewBox="0 0 59 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.229004" width="57.9749" height="27.5627" rx="13.7814"
                                        fill="#020202" fill-opacity="0.2"></rect>
                                    <ellipse cx="13.8444" cy="13.7796" rx="10.1017" ry="10.2249"
                                        fill="white">
                                    </ellipse>
                                </svg>
                            </div>
                            <div class="d-flex justify-content-between align-items-center p-4 bg-white">
                                <div class="d-flex align-items-center" style="gap: 1rem">
                                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.8251 26.0653C28.4496 24.3615 29.2701 21.1502 29.2701 16.0373C29.2701 14.4988 29.0028 10.7402 29.0028 10.7402C29.0028 10.7402 24.1912 9.65796 15.37 9.65796C6.54884 9.65796 1.46999 10.7402 1.46999 10.7402L1.46997 16.0373C1.46997 21.251 2.32313 24.4577 2.95169 26.1127C3.31547 27.0706 4.06578 27.791 5.0489 28.0796C6.64554 28.5483 9.76856 29.1388 15.37 29.1388C20.8221 29.1388 23.9261 28.6051 25.5601 28.1642C26.6278 27.8762 27.4445 27.1036 27.8251 26.0653Z"
                                            fill="#4AB9FD" fill-opacity="0.1"></path>
                                        <path
                                            d="M29.2701 16.4467C29.2701 19.6188 29.1018 22.1179 28.8988 23.9787C28.6126 26.6016 26.6296 28.5367 24.0029 28.7854C21.9776 28.9771 19.1494 29.1388 15.37 29.1388C11.5906 29.1388 8.76247 28.9771 6.7372 28.7854C4.11045 28.5367 2.12743 26.6016 1.84125 23.9787C1.63823 22.1179 1.46997 19.6188 1.46997 16.4467C1.46997 14.2662 1.54948 12.3598 1.66513 10.7402C1.71832 9.99531 1.77916 9.31108 1.84342 8.68873C2.13403 5.87446 4.27775 3.76311 7.09526 3.50569C9.13588 3.31925 11.8813 3.16431 15.37 3.16431C18.8588 3.16431 21.6042 3.31925 23.6448 3.50569C26.4623 3.76311 28.606 5.87446 28.8966 8.68873C28.9609 9.31108 29.0217 9.99531 29.0749 10.7402C29.1906 12.3598 29.2701 14.2662 29.2701 16.4467Z"
                                            fill="#4AB9FD" fill-opacity="0.1"></path>
                                        <path
                                            d="M29.0749 10.7402C29.0217 9.99531 28.9609 9.31108 28.8966 8.68873C28.606 5.87446 26.4623 3.76311 23.6448 3.50569C21.6042 3.31925 18.8588 3.16431 15.37 3.16431C11.8813 3.16431 9.13588 3.31925 7.09526 3.50569C4.27775 3.76311 2.13403 5.87446 1.84342 8.68873C1.77916 9.31108 1.71832 9.99531 1.66513 10.7402M29.0749 10.7402C29.1906 12.3598 29.2701 14.2662 29.2701 16.4467C29.2701 19.6188 29.1018 22.1179 28.8988 23.9787C28.6126 26.6016 26.6296 28.5367 24.0029 28.7854C21.9776 28.9771 19.1494 29.1388 15.37 29.1388C11.5906 29.1388 8.76247 28.9771 6.7372 28.7854C4.11045 28.5367 2.12743 26.6016 1.84125 23.9787C1.63823 22.1179 1.46997 19.6188 1.46997 16.4467C1.46997 14.2662 1.54948 12.3598 1.66513 10.7402M29.0749 10.7402C29.0749 10.7402 23.9298 9.65793 15.37 9.65793C6.81023 9.65793 1.66513 10.7402 1.66513 10.7402"
                                            stroke="#4AB9FD" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M7.92687 1C7.92687 1 7.88574 1.85679 7.88574 5.87022M22.8139 1C22.8139 1 22.855 1.85679 22.855 5.87022"
                                            stroke="#4AB9FD" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M20.7158 18.8574L10.0235 18.8574M20.7158 18.8574L16.3691 23.1865M20.7158 18.8574L16.3691 14.5283"
                                            stroke="#4AB9FD" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <p class="mb-0" style="color: #4ab9fd">Sprints</p>
                                </div>
                                <svg width="60" height="28" viewBox="0 0 60 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.270996" width="59.7292" height="27.5627" rx="13.7814"
                                        fill="#4AB9FD"></rect>
                                    <ellipse cx="45.9789" cy="13.7796" rx="10.4074" ry="10.2249"
                                        fill="white"></ellipse>
                                </svg>
                            </div>
                            <div class="d-flex justify-content-between align-items-center p-4">
                                <div class="d-flex align-items-center" style="gap: 1rem">
                                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.9778 5.89893L17.1578 2.03236C16.3176 1.18194 14.9554 1.18194 14.1153 2.03236L10.3449 5.8487C10.3449 5.8487 16.5961 8.55528 12.7763 12.4564C8.93989 16.3745 6.24813 9.99539 6.24813 9.99539L2.4778 13.8117C1.63763 14.6621 1.63763 16.0409 2.4778 16.8913L6.29781 20.7579C6.29781 20.7579 0.020418 23.423 3.92725 27.3429C7.81724 31.2459 10.433 24.9435 10.433 24.9435L14.253 28.8101C15.0932 29.6605 16.4553 29.6605 17.2955 28.81L21.0659 24.9937C21.0659 24.9937 14.8146 22.2871 18.6345 18.386C22.4709 14.4679 25.1626 20.847 25.1626 20.847L28.933 17.0307C29.7731 16.1803 29.7731 14.8015 28.933 13.9511L25.113 10.0845C25.113 10.0845 31.3903 7.41939 27.4835 3.49948C23.5935 -0.403535 20.9778 5.89893 20.9778 5.89893Z"
                                            fill="white" fill-opacity="0.09" stroke="white" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <p class="mb-0">Custom Fields</p>
                                </div>
                                <svg width="59" height="28" viewBox="0 0 59 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.229004" width="57.9749" height="27.5627" rx="13.7814"
                                        fill="#020202" fill-opacity="0.2"></rect>
                                    <ellipse cx="13.8444" cy="13.7796" rx="10.1017" ry="10.2249"
                                        fill="white">
                                    </ellipse>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8 d-none d-md-block">
                    <div class="card h-100 text-white border-0"
                        style="background: linear-gradient(351deg, #5037E7 12.36%, #EB00FF 124.69%)">
                        <div class="card-body position-relative or-card">
                            <div class="row">
                                <div class="col-md-6 d-flex flex-column align-items-center">
                                    <h4>Plays well with others</h4>
                                    <p style="max-inline-size: 240px">Easily integrates with the tools you already use.
                                    </p>
                                    <img src="https://clickup.com/assets/home-test/clickup-integrations.svg"
                                        alt="" class="img-fluid" width="270">
                                </div>
                                <div class="col-md-6 d-flex flex-column align-items-center">
                                    <div>
                                        <h4>Replaces them entirely</h4>
                                        <p style="max-inline-size: 240px">Eliminate app sprawl and reduce software
                                            spend.
                                        </p>
                                    </div>
                                    <img src="https://clickup.com/assets/home-test/clickup-integration-replaces.svg"
                                        alt="" class="img-fluid" width="270">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 text-white border-0"
                        style="background: radial-gradient(101.72% 63.11% at 69.09% 71.59%, #313741 0%, #252A31 100%)">
                        <div class="card-body">
                            <h4>Search everything</h4>
                            <p>Find any file in ClickUp, a connected app, or your local drive, from one place.</p>
                        </div>
                        <img src="https://clickup.com/assets/home-test/search-everything.png" alt=""
                            class="img-fluid ps-3">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card h-100 text-white border-0"
                        style="background: linear-gradient(168deg, #D613EE -55.05%, #FF674E 64.52%)">
                        <div class="card-body">
                            <h4>Stay ahead of what’s next</h4>
                            <p>Organize your work, reminders, and calendar events all from your personalized Home.</p>
                        </div>
                        <img src="https://clickup.com/assets/home-test/stay-ahead.png" alt=""
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8 mt-3 mt-md-0">
                    <div class="card h-100 text-white border-0" style="background:#0C1947">
                        <div class="card-body"
                            style="background-image:url('https://clickup.com/assets/home-test/teams-worldwide-planet.png');background-position: right;
                            background-size: contain;
                            background-repeat: no-repeat;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Trusted by over 2,000,000 teams</h4>
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <h5>305M+</h5>
                                            <p style="color: #5e6fac">Tasks completed</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>55M+</h5>
                                            <p style="color: #5e6fac">Docs created</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>615M+</h5>
                                            <p style="color: #5e6fac">Messages sent</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>11M+</h5>
                                            <p style="color: #5e6fac">Automations created</p>
                                        </div>
                                    </div>
                                    <button class="mt-4 text-white w-100 join-btn">Join
                                        today <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.0957 6L1.0957 6M14.0957 6L9.25849 1.5M14.0957 6L9.25849 10.5"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg></button>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('footer')
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script>
        const buttonNames = ['Dashboard', 'Mail', 'Leads', 'Recurring</br> Tasks', 'Tasks', 'Accounts',
            'Bulk</br> Emailing',
            'Clients', 'Calendar', 'Employees', 'Settings'
        ];
        const svg = [`<svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.2796 3.71579C12.097 3.66261 11.903 3.66261 11.7203 3.71579C11.6678 3.7311 11.5754 3.7694 11.3789 3.91817C11.1723 4.07463 10.9193 4.29855 10.5251 4.64896L5.28544 9.3064C4.64309 9.87739 4.46099 10.0496 4.33439 10.24C4.21261 10.4232 4.12189 10.6252 4.06588 10.8379C4.00765 11.0591 3.99995 11.3095 3.99995 12.169V17.17C3.99995 18.041 4.00076 18.6331 4.03874 19.0905C4.07573 19.536 4.14275 19.7634 4.22513 19.9219C4.41488 20.2872 4.71272 20.5851 5.07801 20.7748C5.23658 20.8572 5.46397 20.9242 5.90941 20.9612C6.36681 20.9992 6.95893 21 7.82995 21H7.99995V18C7.99995 15.7909 9.79081 14 12 14C14.2091 14 16 15.7909 16 18V21H16.17C17.041 21 17.6331 20.9992 18.0905 20.9612C18.5359 20.9242 18.7633 20.8572 18.9219 20.7748C19.2872 20.5851 19.585 20.2872 19.7748 19.9219C19.8572 19.7634 19.9242 19.536 19.9612 19.0905C19.9991 18.6331 20 18.041 20 17.17V12.169C20 11.3095 19.9923 11.0591 19.934 10.8379C19.878 10.6252 19.7873 10.4232 19.6655 10.24C19.5389 10.0496 19.3568 9.87739 18.7145 9.3064L13.4748 4.64896C13.0806 4.29855 12.8276 4.07463 12.621 3.91817C12.4245 3.7694 12.3321 3.7311 12.2796 3.71579ZM11.1611 1.79556C11.709 1.63602 12.2909 1.63602 12.8388 1.79556C13.2189 1.90627 13.5341 2.10095 13.8282 2.32363C14.1052 2.53335 14.4172 2.81064 14.7764 3.12995L20.0432 7.81159C20.0716 7.83679 20.0995 7.86165 20.1272 7.88619C20.6489 8.34941 21.0429 8.69935 21.3311 9.13277C21.5746 9.49916 21.7561 9.90321 21.8681 10.3287C22.0006 10.832 22.0004 11.359 22 12.0566C22 12.0936 22 12.131 22 12.169V17.212C22 18.0305 22 18.7061 21.9543 19.2561C21.9069 19.8274 21.805 20.3523 21.5496 20.8439C21.1701 21.5745 20.5744 22.1701 19.8439 22.5496C19.3522 22.805 18.8274 22.9069 18.256 22.9543C17.706 23 17.0305 23 16.2119 23H15.805C15.7972 23 15.7894 23 15.7814 23C15.6603 23 15.5157 23.0001 15.3883 22.9895C15.2406 22.9773 15.0292 22.9458 14.8085 22.8311C14.5345 22.6888 14.3111 22.4654 14.1688 22.1915C14.0542 21.9707 14.0227 21.7593 14.0104 21.6116C13.9998 21.4843 13.9999 21.3396 13.9999 21.2185L14 18C14 16.8954 13.1045 16 12 16C10.8954 16 9.99995 16.8954 9.99995 18L9.99996 21.2185C10 21.3396 10.0001 21.4843 9.98949 21.6116C9.97722 21.7593 9.94572 21.9707 9.83107 22.1915C9.68876 22.4654 9.46538 22.6888 9.19142 22.8311C8.9707 22.9458 8.75929 22.9773 8.6116 22.9895C8.48423 23.0001 8.33959 23 8.21847 23C8.21053 23 8.20268 23 8.19495 23H7.78798C6.96944 23 6.29389 23 5.74388 22.9543C5.17253 22.9069 4.64769 22.805 4.15605 22.5496C3.42548 22.1701 2.8298 21.5745 2.4503 20.8439C2.19492 20.3523 2.09305 19.8274 2.0456 19.2561C1.99993 18.7061 1.99994 18.0305 1.99995 17.212L1.99995 12.169C1.99995 12.131 1.99993 12.0936 1.99992 12.0566C1.99955 11.359 1.99928 10.832 2.1318 10.3287C2.24383 9.90321 2.42528 9.49916 2.66884 9.13277C2.95696 8.69935 3.35105 8.34941 3.87272 7.8862C3.90036 7.86165 3.92835 7.83679 3.95671 7.81159L9.22354 3.12996C9.58274 2.81064 9.89467 2.53335 10.1717 2.32363C10.4658 2.10095 10.781 1.90627 11.1611 1.79556Z"
                                    fill="#000000" />
                            </svg>`, `<svg width="32" height="32" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <g>
                    <polyline fill="none" points="4 8.2 12 14.1 20 8.2" stroke="#000000"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    <rect fill="none" height="14" rx="2" ry="2"
                        stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="18" x="3" y="6.5" />
                </g>
            </svg>`, ` <svg fill="#000000" width="32" height="32" viewBox="-3 0 32 32"
                version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.906 20.75c1.313 0.719 2.063 2 1.969 3.281-0.063 0.781-0.094 0.813-1.094 0.938-0.625 0.094-4.563 0.125-8.625 0.125-4.594 0-9.406-0.094-9.75-0.188-1.375-0.344-0.625-2.844 1.188-4.031 1.406-0.906 4.281-2.281 5.063-2.438 1.063-0.219 1.188-0.875 0-3-0.281-0.469-0.594-1.906-0.625-3.406-0.031-2.438 0.438-4.094 2.563-4.906 0.438-0.156 0.875-0.219 1.281-0.219 1.406 0 2.719 0.781 3.25 1.938 0.781 1.531 0.469 5.625-0.344 7.094-0.938 1.656-0.844 2.188 0.188 2.469 0.688 0.188 2.813 1.188 4.938 2.344zM3.906 19.813c-0.5 0.344-0.969 0.781-1.344 1.219-1.188 0-2.094-0.031-2.188-0.063-0.781-0.188-0.344-1.625 0.688-2.25 0.781-0.5 2.375-1.281 2.813-1.375 0.563-0.125 0.688-0.469 0-1.656-0.156-0.25-0.344-1.063-0.344-1.906-0.031-1.375 0.25-2.313 1.438-2.719 1-0.375 2.125 0.094 2.531 0.938 0.406 0.875 0.188 3.125-0.25 3.938-0.5 0.969-0.406 1.219 0.156 1.375 0.125 0.031 0.375 0.156 0.719 0.313-1.375 0.563-3.25 1.594-4.219 2.188zM24.469 18.625c0.75 0.406 1.156 1.094 1.094 1.813-0.031 0.438-0.031 0.469-0.594 0.531-0.156 0.031-0.875 0.063-1.813 0.063-0.406-0.531-0.969-1.031-1.656-1.375-1.281-0.75-2.844-1.563-4-2.063 0.313-0.125 0.594-0.219 0.719-0.25 0.594-0.125 0.688-0.469 0-1.656-0.125-0.25-0.344-1.063-0.344-1.906-0.031-1.375 0.219-2.313 1.406-2.719 1.031-0.375 2.156 0.094 2.531 0.938 0.406 0.875 0.25 3.125-0.188 3.938-0.5 0.969-0.438 1.219 0.094 1.375 0.375 0.125 1.563 0.688 2.75 1.313z">
                </path>
            </svg>`, `<svg fill="#000000" width="32" height="32" viewBox="0 0 14 14"
                role="img" focusable="false" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="m 8.9994537,13.238438 c -0.0393,-0.07725 -0.213095,-0.409163 -0.386333,-0.73767 -0.173254,-0.328507 -0.307642,-0.604662 -0.298641,-0.613662 0.01605,-0.01605 1.642563,0.0489 1.659979,0.0663 0.0045,0.0045 -0.0489,0.0984 -0.119703,0.207904 -0.07065,0.109352 -0.119552,0.208039 -0.108452,0.219125 0.048,0.04815 0.6568033,0.04065 0.8887233,-0.0105 0.277896,-0.0618 0.671129,-0.24986 0.858978,-0.410738 0.147453,-0.126303 0.169323,-0.134553 0.169323,-0.06375 0,0.153783 0.187939,0.329766 0.355072,0.332482 0.06615,0.0011 0.0612,0.012 -0.05385,0.111902 -0.589122,0.51418 -1.481475,0.774016 -2.2191153,0.646153 -0.104552,-0.01815 -0.233,-0.0402 -0.285306,-0.04905 -0.08625,-0.015 -0.103352,-0.0015 -0.184084,0.136203 -0.0489,0.0837 -0.115052,0.186829 -0.147003,0.229159 l -0.05805,0.07695 -0.0714,-0.140403 z m -1.176609,-1.49553 c -0.148053,-0.23828 -0.246275,-0.45739 -0.333127,-0.743266 -0.07455,-0.2453 -0.08505,-0.335046 -0.087,-0.738884 -0.0015,-0.3858833 0.009,-0.4993003 0.06885,-0.7065743 0.178369,-0.6201433 0.520046,-1.1357488 0.984591,-1.485736 0.09885,-0.074402 0.182598,-0.1365028 0.186198,-0.1378528 0.003,-0.00136 -0.0282,-0.1152023 -0.07065,-0.2528151 -0.04245,-0.1377028 -0.07035,-0.2572553 -0.0618,-0.2657005 0.0252,-0.025201 1.6001573,0.3539173 1.6001573,0.3852529 0,0.0159 -0.2377693,0.2806257 -0.5283853,0.588312 -0.290616,0.3077013 -0.545817,0.5787568 -0.567102,0.6023373 -0.0312,0.034651 -0.0525,-0.003 -0.110252,-0.1981391 -0.0393,-0.1326027 -0.07755,-0.2410249 -0.0849,-0.2410249 -0.048,0 -0.254751,0.197044 -0.378428,0.3606674 -0.337462,0.4464695 -0.472105,0.8850038 -0.447444,1.4573551 0.012,0.290466 0.0321,0.399008 0.110102,0.608262 0.0522,0.140103 0.132603,0.314571 0.178849,0.387713 0.103052,0.163218 0.103052,0.165963 0.003,0.165963 -0.137253,0 -0.268371,0.09015 -0.325477,0.223925 l -0.0534,0.124952 -0.08385,-0.134852 z m 4.1891653,0.0771 c 0,-0.0171 -0.0357,-0.370687 -0.0792,-0.785731 -0.04365,-0.415058 -0.0792,-0.779415 -0.0792,-0.809671 0,-0.04755 0.0315,-0.04035 0.22985,0.0516 l 0.229834,0.106652 0.009,-0.141603 C 12.339844,9.9851577 12.245794,9.6008647 12.086532,9.2786274 11.876977,8.8544788 11.547031,8.524592 11.123077,8.3152928 10.957819,8.2336911 10.737014,8.1511594 10.632387,8.131839 10.341051,8.0779879 10.349856,8.083988 10.423958,7.9897861 c 0.078,-0.099152 0.0852,-0.2624603 0.0174,-0.393668 -0.0468,-0.090302 -0.0459,-0.093452 0.02385,-0.093302 0.146703,4.5e-4 0.606552,0.1299026 0.832742,0.2344098 0.303996,0.1404028 0.490315,0.2695405 0.75669,0.5242607 0.570477,0.5455311 0.847562,1.1963501 0.856293,2.0112414 l 0.0045,0.376643 0.243575,0.114752 0.243575,0.114752 -0.664484,0.475525 c -0.690194,0.493915 -0.72615,0.516985 -0.72615,0.465564 z M 2.1445312,0.99804688 A 0.3678473,0.3678473 0 0 0 2.125,1 0.3678473,0.3678473 0 0 0 1.84375,1.375 l 0,11.25 A 0.3678473,0.3678473 0 0 0 2.21875,13 l 4.3359375,0 0,-0.75 -3.9609375,0 0,-10.53125 8.8125,0 0,4.8066406 0.75,0 0,-5.1503906 A 0.3678473,0.3678473 0 0 0 11.78125,1 l -9.5625,0 a 0.3678473,0.3678473 0 0 0 -0.074219,-0.001953 z M 11.125,1.9375 9.1875,1.96875 l 0,0.09375 1.9375,-0.03125 0,-0.09375 z m 0,0.21875 -1.9375,0.03125 0,0.09375 1.9375,-0.03125 0,-0.09375 z m 0,0.1875 -1.9375,0.03125 0,0.09375 1.9375,-0.03125 0,-0.09375 z m 0,0.1875 -1.9375,0.03125 0,0.09375 1.9375,-0.03125 0,-0.09375 z m 0,0.1875 -1.9375,0.03125 0,0.09375 1.9375,-0.03125 0,-0.09375 z M 5.15625,2.875 l -1.9375,0.03125 0,0.09375 1.9375,-0.03125 0,-0.09375 z m 2.875,0 L 6.125,2.90625 6.125,3 8.03125,2.96875 l 0,-0.09375 z m -2.875,0.21875 -1.9375,0.03125 0,0.09375 1.9375,-0.03125 0,-0.09375 z m 2.875,0 L 6.125,3.125 l 0,0.09375 1.90625,-0.03125 0,-0.09375 z m -2.875,0.1875 -1.9375,0.03125 0,0.09375 1.9375,-0.03125 0,-0.09375 z m 2.875,0 -1.90625,0.03125 0,0.09375 1.90625,-0.03125 0,-0.09375 z m -2.875,0.1875 -1.9375,0.03125 0,0.09375 1.9375,-0.03125 0,-0.09375 z m 2.875,0 L 6.125,3.5 l 0,0.09375 1.90625,-0.03125 0,-0.09375 z m -2.875,0.1875 -1.9375,0.03125 0,0.09375 1.9375,-0.03125 0,-0.09375 z m 2.875,0 -1.90625,0.03125 0,0.09375 1.90625,-0.03125 0,-0.09375 z m -4.96875,0.9375 0,0.125 0,5.03125 0,0.09375 0.125,0 3.3671875,0 0,-0.21875 -1.4296875,0 c -4.249e-4,-0.00853 8.041e-4,-0.024839 0,-0.0625 -7.696e-4,-0.036006 -0.00862,-0.1745288 -0.015625,-0.2539062 0.2701075,-0.00208 1.0622819,-0.00278 1.4453125,-0.00586 l 0,-0.1152344 c -0.3845771,-4.38e-5 -1.1803643,-4.158e-4 -1.4511719,0 -0.00371,-0.065008 -0.00913,-0.067093 -0.00977,-0.15625 -1.268e-4,-0.017828 1.122e-4,-0.106098 0,-0.125 0.2718265,-4.227e-4 1.0741495,-4.7e-5 1.4609375,0 l 0,-0.09375 c -0.3867797,-4.7e-5 -1.1890846,-4.227e-4 -1.4609375,0 -2.542e-4,-0.049319 1.733e-4,-0.2559925 0,-0.3125 0.2673701,-4.484e-4 1.0794915,-3.2e-5 1.4609375,0 l 0,-0.09375 c -0.3814388,-3.2e-5 -1.193539,-4.484e-4 -1.4609375,0 -1.359e-4,-0.052881 8.09e-5,-0.2220683 0,-0.28125 0.2673701,-4.484e-4 1.0794915,-3.2e-5 1.4609375,0 l 0,-0.1035156 c -0.381437,0.00311 -1.19354,0.00383 -1.4609375,0.00586 -7.05e-5,-0.068278 1.55e-5,-0.2358458 0,-0.3125 0.2673692,-0.00203 1.0794932,-0.00275 1.4609375,-0.00586 l 0,-0.1152344 c -0.3814388,-3.2e-5 -1.193539,-4.484e-4 -1.4609375,0 3.1e-6,-0.080027 -4.39e-5,-0.2234405 0,-0.3125 0.2695936,-4.355e-4 1.0768252,-3.96e-5 1.4609375,0 l 0,-0.09375 c -0.3841045,-3.96e-5 -1.1913165,-4.355e-4 -1.4609375,0 5.48e-5,-0.09301 -8.28e-5,-0.2135038 0,-0.3164062 0.2673692,-0.00203 1.0794932,-0.00275 1.4609375,-0.00586 l 0,-0.1152344 c -0.3814388,-3.2e-5 -1.193539,-4.484e-4 -1.4609375,0 9.86e-5,-0.1160496 -1.137e-4,-0.2151978 0,-0.34375 0.3979705,-6.423e-4 1.4981572,-2.581e-4 2.15625,0 -3.95e-5,0.04455 3.82e-5,0.076117 0,0.1191406 l 0.09375,0 c 3.81e-5,-0.043028 -3.94e-5,-0.074586 0,-0.1191406 0.4569181,1.902e-4 0.8659677,-2.833e-4 1.46875,0 -3.87e-5,0.044384 3.74e-5,0.076277 0,0.1191406 l 0.1054688,0 c -3.809e-4,-0.042866 3.698e-4,-0.074754 0,-0.1191406 0.7658707,3.498e-4 0.8031403,-2.94e-5 1.8320312,0 l 0,0.1191406 0.21875,0 0,-1.8066406 0,-0.125 -0.125,0 -7.65625,0 -0.125,0 z M 3.28125,4.8125 5,4.8125 c -3.7e-6,0.1416371 3.03e-5,0.1165691 0,0.25 -0.1462573,2.639e-4 -0.6962545,-4.758e-4 -0.8125,0 -0.4739238,0.00194 -0.7250132,-0.00146 -0.84375,0 -0.039579,4.862e-4 -0.047915,1.621e-4 -0.0625,0 l 0,-0.25 z m 1.8125,0 2.15625,0 c -3.7e-6,0.1416371 3.03e-5,0.1165691 0,0.25 -0.6580745,-2.627e-4 -1.7583068,-6.427e-4 -2.15625,0 3.02e-5,-0.133429 -3.7e-6,-0.1083692 0,-0.25 z m 2.25,0 1.46875,0 c -7.1e-6,0.1414487 3.22e-5,0.1168235 0,0.25 -0.6050101,-2.842e-4 -1.0117629,1.933e-4 -1.46875,0 3.02e-5,-0.133429 -3.7e-6,-0.1083692 0,-0.25 z m 1.5625,0 1.84375,0 0,0.25 c -1.0439245,-2.01e-5 -1.0701095,3.527e-4 -1.8417969,0 -2.113e-4,-0.1331757 -0.00191,-0.1085562 -0.00195,-0.25 z m -5.625,0.34375 c 0.014645,1.613e-4 0.023103,4.84e-4 0.0625,0 0.118191,-0.00145 0.3699627,0.00194 0.84375,0 0.116212,-4.758e-4 0.6662595,2.639e-4 0.8125,0 -5.29e-5,0.1772845 8.69e-5,0.177026 0,0.3398438 C 4.8468448,5.4972449 4.2769664,5.4995057 4.15625,5.5 3.6823262,5.50194 3.4312368,5.49854 3.3125,5.5 c -0.019789,2.431e-4 -0.019067,4.89e-5 -0.03125,0 l 0,-0.34375 z m 1.8125,0 c 0.3979028,-6.427e-4 1.4981507,-2.627e-4 2.15625,0 -5.14e-5,0.1721901 8.36e-5,0.1715435 0,0.3300781 -0.6623331,0.00479 -1.7550131,0.00667 -2.15625,0.00977 8.67e-5,-0.1628235 -5.28e-5,-0.1625599 0,-0.3398438 z m 2.25,0 c 0.4570048,1.933e-4 0.8637209,-2.842e-4 1.46875,0 -5.2e-5,0.1677598 8.11e-5,0.1676002 0,0.3222656 -0.608386,0.00261 -1.0088341,0.0026 -1.46875,0.00586 8.28e-5,-0.1576805 -5.09e-5,-0.1569543 0,-0.328125 z m 1.5664062,0 c 0.7711585,3.523e-4 0.7970432,-2e-5 1.8398438,0 l 0,0.3125 c -1.0466803,7.13e-5 -1.0630407,0.0066 -1.8378906,0.00977 C 8.9115346,5.3238465 8.9105029,5.3240081 8.9101562,5.15625 Z M 3.28125,5.59375 c 0.012304,4.54e-5 0.011551,2.42e-4 0.03125,0 0.118191,-0.00145 0.3699627,0.00194 0.84375,0 0.1206817,-4.942e-4 0.6906117,2.665e-4 0.84375,0 -8.66e-5,0.1459986 1.014e-4,0.1780905 0,0.3125 -0.1531523,2.662e-4 -0.7236003,-4.918e-4 -0.84375,0 -0.4739238,0.00194 -0.6937632,-0.00146 -0.8125,0 -0.029684,3.646e-4 -0.04059,1.462e-4 -0.0625,0 l 0,-0.3125 z m 1.8125,0 c 0.4011985,-6.239e-4 1.4938905,-2.699e-4 2.15625,0 -8.66e-5,0.1459987 1.014e-4,0.1780905 0,0.3125 -0.6622889,-2.653e-4 -1.7549089,-6.236e-4 -2.15625,0 1.012e-4,-0.1344194 -8.64e-5,-0.1664948 0,-0.3125 z m 2.25,0 c 0.4599352,1.979e-4 0.8603429,-2.834e-4 1.46875,0 -8.61e-5,0.1455683 9.99e-5,0.1785471 0,0.3125 -0.6060777,-2.826e-4 -1.0089482,1.948e-4 -1.46875,0 1.012e-4,-0.1344194 -8.64e-5,-0.1664948 0,-0.3125 z m 1.5683594,0 c 0.7748709,3.503e-4 0.7912313,-1.01e-5 1.8378906,0 l 0,0.3125 c -1.0359246,-1.98e-5 -1.0647996,3.493e-4 -1.8359375,0 -7.889e-4,-0.1339616 -0.00133,-0.1669262 -0.00195,-0.3125 z M 3.28125,6 c 0.02208,1.419e-4 0.032952,3.63e-4 0.0625,0 C 3.461941,5.99855 3.6824627,6.00194 4.15625,6 4.2763651,5.9995082 4.8468646,6.0002662 5,6 c -1.038e-4,0.1310253 1.052e-4,0.1924473 0,0.3125 -0.1462397,2.635e-4 -0.6968003,-4.736e-4 -0.8125,0 -0.4739238,0.00194 -0.6937632,-0.00146 -0.8125,0 -0.059368,7.293e-4 -0.078397,-4.401e-4 -0.09375,0 l 0,-0.3125 z m 1.8125,0 C 5.4950521,5.9993764 6.5876862,5.9997347 7.25,6 c -1.038e-4,0.1310253 1.052e-4,0.1924473 0,0.3125 -0.6580683,-2.581e-4 -1.7582391,-6.423e-4 -2.15625,0 1.049e-4,-0.1200647 -1.036e-4,-0.1814642 0,-0.3125 z m 2.25,0 c 0.4598196,1.948e-4 0.8626535,-2.826e-4 1.46875,0 -1.021e-4,0.1305665 1.031e-4,0.1928939 0,0.3125 -0.6027633,-2.833e-4 -1.0118495,1.902e-4 -1.46875,0 1.049e-4,-0.1200647 -1.036e-4,-0.1814642 0,-0.3125 z M 8.9160156,6 C 9.686617,6.0003488 9.7151941,5.9999802 10.75,6 l 0,0.3125 c -1.0289065,-2.94e-5 -1.0661833,3.498e-4 -1.8320312,0 C 8.9170253,6.1928833 8.9168459,6.1305756 8.9160156,6 Z M 4.1875,6.40625 C 4.3031664,6.4057764 4.8537771,6.4065135 5,6.40625 4.999886,6.5347888 5.0000988,6.6339632 5,6.75 4.8605412,6.7502608 4.3305245,6.7495425 4.21875,6.75 3.7448262,6.75194 3.4937368,6.74854 3.375,6.75 3.315632,6.7507293 3.296603,6.78081 3.28125,6.78125 l 0,-0.34375 c 0.014263,-4.088e-4 0.034654,7.26e-4 0.09375,0 C 3.493191,6.43605 3.7137127,6.40819 4.1875,6.40625 Z M 5,6.8710938 c -8.3e-5,0.1028911 5.49e-5,0.2234053 0,0.3164062 -0.1462573,2.639e-4 -0.6962545,-4.758e-4 -0.8125,0 -0.4739238,0.00194 -0.6937632,-0.00146 -0.8125,0 -0.044526,5.47e-4 -0.070349,1.09e-4 -0.09375,0 l 0,-0.3125 c 0.014263,-4.088e-4 0.034654,7.26e-4 0.09375,0 0.118191,-0.00145 0.3699627,0.00194 0.84375,0 C 4.3304924,6.8745425 4.8605578,6.8721212 5,6.8710938 Z M 3.375,7.28125 c 0.118191,-0.00145 0.3387126,0.00194 0.8125,0 0.116212,-4.758e-4 0.6662596,2.639e-4 0.8125,0 -4.4e-5,0.089052 3.1e-6,0.2324761 0,0.3125 -0.1394588,2.608e-4 -0.6694755,-4.575e-4 -0.78125,0 -0.4739238,0.00194 -0.7250132,0.029791 -0.84375,0.03125 -0.059368,7.293e-4 -0.078397,-4.401e-4 -0.09375,0 l 0,-0.3203125 C 3.3045614,7.2960111 3.330678,7.2817945 3.375,7.28125 Z M 5,7.7148438 c 1.55e-5,0.076653 -7.07e-5,0.2442168 0,0.3125 -0.139459,0.00103 -0.6694753,0.00345 -0.78125,0.00391 -0.4739239,0.00194 -0.7250132,-0.00146 -0.84375,0 -0.059368,7.293e-4 -0.078397,-4.401e-4 -0.09375,0 l 0,-0.3125 c 0.014263,-4.088e-4 0.034654,7.26e-4 0.09375,0 0.118191,-0.00145 0.3699627,0.00194 0.84375,0 C 4.3304924,7.7182925 4.8605578,7.7158712 5,7.7148438 Z M 3.28125,8.125 c 0.014263,-4.088e-4 0.034654,7.26e-4 0.09375,0 0.118191,-0.00145 0.3699626,0.00194 0.84375,0 0.1117423,-4.575e-4 0.641808,2.608e-4 0.78125,0 8.1e-5,0.059188 -1.363e-4,0.2283563 0,0.28125 -0.1394588,2.608e-4 -0.6694755,-4.575e-4 -0.78125,0 -0.4739239,0.00194 -0.7250132,-0.00146 -0.84375,0 -0.059368,7.293e-4 -0.078397,-4.401e-4 -0.09375,0 l 0,-0.28125 z m 0,0.375 c 0.014263,-4.088e-4 0.034654,7.26e-4 0.09375,0 0.118191,-0.00145 0.3699626,0.00194 0.84375,0 0.1117423,-4.575e-4 0.641808,2.608e-4 0.78125,0 1.737e-4,0.056525 -2.548e-4,0.2631535 0,0.3125 -0.1531552,2.665e-4 -0.7230335,-4.942e-4 -0.84375,0 -0.4739238,0.00194 -0.7250132,-0.00146 -0.84375,0 -0.019789,2.431e-4 -0.019067,4.89e-5 -0.03125,0 l 0,-0.3125 z m 0,0.40625 c 0.012304,4.54e-5 0.011551,2.42e-4 0.03125,0 0.118191,-0.00145 0.3699627,0.00194 0.84375,0 0.1206817,-4.942e-4 0.6906117,2.665e-4 0.84375,0 1.124e-4,0.018914 -1.271e-4,0.1071585 0,0.125 6.353e-4,0.089208 1.048e-4,0.091337 0,0.15625 -0.1531523,2.662e-4 -0.7236003,-4.918e-4 -0.84375,0 -0.4739239,0.00194 -0.6937632,0.029791 -0.8125,0.03125 -0.029684,3.646e-4 -0.04059,1.462e-4 -0.0625,0 l 0,-0.3125 z M 5,9.3085938 C 4.9995442,9.3878171 4.999221,9.5260469 5,9.5625 5.0008143,9.600635 5.030731,9.61458 5.03125,9.625 l -1.75,0 0,-0.3125 c 0.02208,1.419e-4 0.032952,3.63e-4 0.0625,0 0.118191,-0.00145 0.3387126,0.00194 0.8125,0 C 4.2763651,9.3120082 4.8468647,9.3097369 5,9.3085938 Z m 1.25,0.7226562 -3.125,0.03125 0,0.09375 3.125,-0.03125 0,-0.09375 z M 3.125,10.25 l 0,0.125 3.125,-0.03125 0,-0.09375 -3.125,0 z m 3.125,0.1875 -3.125,0.03125 0,0.09375 3.125,-0.03125 0,-0.09375 z m 0,0.1875 -3.125,0.03125 0,0.09375 3.125,-0.03125 0,-0.09375 z m 0,0.1875 -3.125,0.03125 0,0.09375 3.125,-0.03125 0,-0.09375 z M 6.25,11 3.125,11.03125 3.125,11.125 6.25,11.09375 6.25,11 Z m 0,0.21875 -3.125,0.03125 0,0.09375 3.125,-0.03125 0,-0.09375 z m 0,0.1875 -3.125,0.03125 0,0.09375 L 6.25,11.5 l 0,-0.09375 z m 0,0.1875 -3.125,0.03125 0,0.09375 3.125,-0.03125 0,-0.09375 z m 0,0.1875 -3.125,0.03125 0,0.09375 3.125,-0.03125 0,-0.09375 z" />
            </svg>`, ` <svg fill="#000000" height="32" width="32" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 503.607 503.607" xml:space="preserve">
                <g>
                    <g>
                        <path d="M386.098,58.754h-41.967v-8.511c0-9.191-7.529-16.669-16.787-16.669h-25.18v-8.511C302.164,11.247,290.866,0,276.984,0
                            h-50.361c-13.883,0-25.18,11.247-25.18,25.063v8.511h-25.18c-9.258,0-16.787,7.479-16.787,16.669v8.511h-41.967
                            c-23.141,0-41.967,18.826-41.967,41.967v360.918c0,23.141,18.826,41.967,41.967,41.967h268.59
                            c23.141,0,41.967-18.826,41.967-41.967V100.721C428.066,77.581,409.239,58.754,386.098,58.754z M159.475,428.066
                            c-9.275,0-16.787-7.512-16.787-16.787c0-9.275,7.512-16.787,16.787-16.787c9.275,0,16.787,7.512,16.787,16.787
                            C176.262,420.553,168.75,428.066,159.475,428.066z M159.475,352.525c-9.275,0-16.787-7.512-16.787-16.787
                            c0-9.275,7.512-16.787,16.787-16.787c9.275,0,16.787,7.512,16.787,16.787C176.262,345.012,168.75,352.525,159.475,352.525z
                            M159.475,276.984c-9.275,0-16.787-7.512-16.787-16.787c0-9.275,7.512-16.787,16.787-16.787c9.275,0,16.787,7.512,16.787,16.787
                            C176.262,269.471,168.75,276.984,159.475,276.984z M159.475,201.443c-9.275,0-16.787-7.512-16.787-16.787
                            c0-9.275,7.512-16.787,16.787-16.787c9.275,0,16.787,7.512,16.787,16.787C176.262,193.93,168.75,201.443,159.475,201.443z
                            M176.262,67.148V50.361h33.574c4.633,0,8.393-3.752,8.393-8.393V25.063c0-4.633,3.685-8.276,8.393-8.276h50.361
                            c4.709,0,8.393,3.643,8.393,8.276v16.904c0,4.642,3.76,8.393,8.393,8.393l33.574-0.117l-0.126,58.872H176.262V67.148z
                            M344.131,419.672H201.443c-4.633,0-8.393-3.752-8.393-8.393c0-4.642,3.76-8.393,8.393-8.393h142.689
                            c4.633,0,8.393,3.752,8.393,8.393C352.525,415.92,348.764,419.672,344.131,419.672z M344.131,344.131H201.443
                            c-4.633,0-8.393-3.752-8.393-8.393c0-4.642,3.76-8.393,8.393-8.393h142.689c4.633,0,8.393,3.752,8.393,8.393
                            C352.525,340.379,348.764,344.131,344.131,344.131z M344.131,268.59H201.443c-4.633,0-8.393-3.752-8.393-8.393
                            s3.76-8.393,8.393-8.393h142.689c4.633,0,8.393,3.752,8.393,8.393S348.764,268.59,344.131,268.59z M344.131,193.049H201.443
                            c-4.633,0-8.393-3.752-8.393-8.393c0-4.642,3.76-8.393,8.393-8.393h142.689c4.633,0,8.393,3.752,8.393,8.393
                            C352.525,189.297,348.764,193.049,344.131,193.049z" />
                    </g>
                </g>
            </svg>`, `   <svg fill="#000000" height="32" width="32" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 480 480" xml:space="preserve">
                <g>
                    <g>
                        <path d="M184,40c-13.232,0-24,10.768-24,24v88c0,4.424,3.584,8,8,8s8-3.584,8-8V64c0-4.408,3.592-8,8-8c4.416,0,8-3.584,8-8
                   S188.416,40,184,40z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            d="M456,40c-4.416,0-8,3.584-8,8s3.584,8,8,8c4.408,0,8,3.592,8,8v392c0,4.408-3.592,8-8,8H272c-4.416,0-8,3.584-8,8
                   c0,4.416,3.584,8,8,8h184c13.232,0,24-10.768,24-24V64C480,50.768,469.232,40,456,40z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            d="M423.256,8.624C418.68,3.144,411.968,0,404.832,0H235.168c-7.136,0-13.848,3.144-18.424,8.624
                   c-4.576,5.48-6.464,12.648-5.184,19.672l10.176,56C223.824,95.712,233.752,104,245.352,104h149.296
                   c11.6,0,21.528-8.288,23.616-19.704l10.176-56C429.72,21.272,427.824,14.104,423.256,8.624z M412.696,25.432l-10.176,56
                   c-0.696,3.8-4.008,6.568-7.872,6.568H245.352c-3.864,0-7.176-2.768-7.872-6.568l-10.176-56c-0.584-3.208,0.832-5.488,1.728-6.56
                   c0.896-1.072,2.88-2.872,6.136-2.872h169.656c3.256,0,5.248,1.8,6.144,2.872C411.864,19.944,413.28,22.224,412.696,25.432z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M361.424,368H280c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h81.424c4.416,0,8-3.584,8-8
                   C369.424,371.584,365.84,368,361.424,368z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M425.432,368h-24c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h24c4.416,0,8-3.584,8-8
                   C433.432,371.584,429.848,368,425.432,368z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M425.432,424H280c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h145.432c4.416,0,8-3.584,8-8
                   C433.432,427.584,429.848,424,425.432,424z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M361.424,256H280c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h81.424c4.416,0,8-3.584,8-8
                   C369.424,259.584,365.84,256,361.424,256z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M425.432,256h-24c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h24c4.416,0,8-3.584,8-8
                   C433.432,259.584,429.848,256,425.432,256z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M425.432,312H280c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h145.432c4.416,0,8-3.584,8-8
                   C433.432,315.584,429.848,312,425.432,312z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            d="M360,144H216c-4.416,0-8,3.584-8,8s3.584,8,8,8h144c4.416,0,8-3.584,8-8S364.416,144,360,144z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            d="M424,144h-24c-4.416,0-8,3.584-8,8s3.584,8,8,8h24c4.416,0,8-3.584,8-8S428.416,144,424,144z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            d="M424,200H278.568c-4.416,0-8,3.584-8,8s3.584,8,8,8H424c4.416,0,8-3.584,8-8S428.416,200,424,200z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M216,176H40c-22.056,0-40,17.944-40,40v224c0,22.056,17.944,40,40,40h176c22.056,0,40-17.944,40-40V216
                   C256,193.944,238.056,176,216,176z M240,440c0,13.232-10.768,24-24,24H40c-13.232,0-24-10.768-24-24V216c0-13.232,10.768-24,24-24
                   h176c13.232,0,24,10.768,24,24V440z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M192,216H64c-13.232,0-24,10.768-24,24v24c0,13.232,10.768,24,24,24h128c13.232,0,24-10.768,24-24v-24
                   C216,226.768,205.232,216,192,216z M200,264c0,4.408-3.592,8-8,8H64c-4.408,0-8-3.592-8-8v-24c0-4.408,3.592-8,8-8h128
                   c4.408,0,8,3.592,8,8V264z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M209.432,320h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8
                   C217.432,323.584,213.848,320,209.432,320z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M209.432,368h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8
                   C217.432,371.584,213.848,368,209.432,368z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M209.432,416h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8
                   C217.432,419.584,213.848,416,209.432,416z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M161.432,320h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8
                   C169.432,323.584,165.848,320,161.432,320z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M113.432,320h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8
                   C121.432,323.584,117.848,320,113.432,320z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M65.432,320h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8C73.432,323.584,69.848,320,65.432,320z
                   " />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M161.432,368h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8
                   C169.432,371.584,165.848,368,161.432,368z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M113.432,368h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8
                   C121.432,371.584,117.848,368,113.432,368z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M65.432,368h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8C73.432,371.584,69.848,368,65.432,368z
                   " />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M161.432,416h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8
                   C169.432,419.584,165.848,416,161.432,416z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M113.432,416h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8
                   C121.432,419.584,117.848,416,113.432,416z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M65.432,416h-16c-4.416,0-8,3.584-8,8c0,4.416,3.584,8,8,8h16c4.416,0,8-3.584,8-8C73.432,419.584,69.848,416,65.432,416z
                   " />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M64,40H48V24c0-4.416-3.584-8-8-8s-8,3.584-8,8v16H16c-4.416,0-8,3.584-8,8s3.584,8,8,8h16v16c0,4.416,3.584,8,8,8
                   s8-3.584,8-8V56h16c4.416,0,8-3.584,8-8S68.416,40,64,40z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            d="M115.312,120l10.344-10.344c3.128-3.128,3.128-8.184,0-11.312s-8.184-3.128-11.312,0L104,108.688L93.656,98.344
                   c-3.128-3.128-8.184-3.128-11.312,0s-3.128,8.184,0,11.312L92.688,120l-10.344,10.344c-3.128,3.128-3.128,8.184,0,11.312
                   C83.904,143.216,85.952,144,88,144s4.096-0.784,5.656-2.344L104,131.312l10.344,10.344c1.56,1.56,3.608,2.344,5.656,2.344
                   c2.048,0,4.096-0.784,5.656-2.344c3.128-3.128,3.128-8.184,0-11.312L115.312,120z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            d="M352,24c-4.416,0-8,3.584-8,8c0,13.232-10.768,24-24,24s-24-10.768-24-24c0-4.416-3.584-8-8-8c-4.416,0-8,3.584-8,8
                   c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40C360,27.584,356.416,24,352,24z" />
                    </g>
                </g>
            </svg>`, `  <svg fill="#000000" height="32" width="32" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 512 512" xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M327.322,126.123c33.687,0,40.264,0,79.55,0V62.159C397.751,69.493,337.459,117.973,327.322,126.123z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            d="M104.501,62.159v63.964c39.29,0,45.867,0,79.551,0C173.922,117.978,113.661,69.523,104.501,62.159z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            d="M399.306,18.266c-1.202-3.955-4.849-6.658-8.983-6.658H121.049c-4.134,0-7.78,2.703-8.983,6.658
                   c-1.202,3.954,0.323,8.23,3.758,10.53l121.044,97.328h37.636l121.044-97.328C398.983,26.495,400.509,22.22,399.306,18.266z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M296.977,334.27l-13.579,10.918c-16.227,13.048-39.382,13.038-55.596,0l-13.481-10.84l-53.123,35.777h189.244
                   L296.977,334.27z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M411.284,242.357l-87.284,70.185l72.101,48.354c1.65-10.841,7.211-20.408,15.184-27.233
                   c7.826-6.699,17.975-10.758,29.059-10.758h4.037V215.745L411.284,242.357z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M99.914,242.356l-33.097-26.611v107.159h4.838c10.708,0,20.547,3.784,28.259,10.08
                   c8.367,6.831,14.226,16.621,15.962,27.761l71.439-48.113L99.914,242.356z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M439.326,167.737c-1.537-5.058-6.203-8.517-11.491-8.517H83.366c-5.288,0-9.953,3.458-11.491,8.517
                   c-1.538,5.058,0.414,10.529,4.807,13.471l171.858,138.187c4.122,3.314,9.995,3.315,14.118,0l171.859-138.187
                   C438.912,178.266,440.863,172.796,439.326,167.737z" />
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M500.339,356h-59.995c-6.439,0-11.66,5.22-11.66,11.66v35.561H83.315V367.66c0-6.439-5.22-11.66-11.66-11.66H11.66
                   C5.22,356,0,361.222,0,367.661v111.471c0,11.741,9.518,21.26,21.26,21.26h469.48c11.741,0,21.26-9.519,21.26-21.26V367.661
                   C512,361.222,506.78,356,500.339,356z" />
                    </g>
                </g>
            </svg>`, `    <svg width="32" height="32" viewBox="0 0 16 16" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                class="si-glyph si-glyph-person-public">
                <defs>
                </defs>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 3.000000)" fill="#000000">
                        <path
                            d="M9.855,7.053 C9.432,7.624 8.021,7.772 8.021,7.772 C8.021,7.772 6.58,7.63 6.156,7.066 C4.121,7.066 3.058,9.989 3.058,9.989 L12.984,9.989 C12.984,9.988 12.146,7.053 9.855,7.053 L9.855,7.053 Z"
                            class="si-glyph-fill">
                        </path>
                        <path
                            d="M9.943,2.918 C9.943,3.977 9.062,6 7.978,6 C6.89,6 6.011,3.977 6.011,2.918 C6.011,1.859 6.89,1 7.978,1 C9.062,1 9.943,1.859 9.943,2.918 L9.943,2.918 Z"
                            class="si-glyph-fill">
                        </path>
                        <path
                            d="M14.104,5.021 C13.733,5.596 12.577,5.902 12.577,5.902 C12.577,5.902 11.222,5.601 10.848,5.035 C10.848,5.035 10.836,5.699 10.271,6.471 C12.071,6.239 12.849,7.974 12.849,7.974 L15.98,7.98 C15.979,7.979 16.119,5.021 14.104,5.021 L14.104,5.021 Z"
                            class="si-glyph-fill">
                        </path>
                        <path
                            d="M13.99,1.533 C13.99,2.381 13.328,3.998 12.511,3.998 C11.691,3.998 11.03,2.381 11.03,1.533 C11.03,0.687 11.693,0 12.511,0 C13.328,0 13.99,0.688 13.99,1.533 L13.99,1.533 Z"
                            class="si-glyph-fill">
                        </path>
                        <path
                            d="M1.918,5.021 C2.296,5.592 3.467,5.896 3.467,5.896 C3.467,5.896 4.84,5.597 5.215,5.035 C5.215,5.035 5.229,5.695 5.801,6.461 C3.977,6.231 3.191,7.953 3.191,7.953 L0.021,7.958 C0.021,7.958 -0.122,5.021 1.918,5.021 L1.918,5.021 Z"
                            class="si-glyph-fill">
                        </path>
                        <path
                            d="M2.002,1.566 C2.002,2.394 2.666,3.977 3.481,3.977 C4.3,3.977 4.961,2.394 4.961,1.566 C4.961,0.737 4.299,0.065 3.481,0.065 C2.664,0.065 2.002,0.737 2.002,1.566 L2.002,1.566 Z"
                            class="si-glyph-fill">
                        </path>
                    </g>
                </g>
            </svg>`, `   <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32"
                viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                <g>
                    <path fill="#000000"
                        d="M60,4h-7V3c0-1.657-1.343-3-3-3s-3,1.343-3,3v1H17V3c0-1.657-1.343-3-3-3s-3,1.343-3,3v1H4
               C1.789,4,0,5.789,0,8v52c0,2.211,1.789,4,4,4h56c2.211,0,4-1.789,4-4V8C64,5.789,62.211,4,60,4z M18,53c0,0.553-0.447,1-1,1h-6
               c-0.553,0-1-0.447-1-1v-5c0-0.553,0.447-1,1-1h6c0.553,0,1,0.447,1,1V53z M18,42c0,0.553-0.447,1-1,1h-6c-0.553,0-1-0.447-1-1v-5
               c0-0.553,0.447-1,1-1h6c0.553,0,1,0.447,1,1V42z M18,31c0,0.553-0.447,1-1,1h-6c-0.553,0-1-0.447-1-1v-5c0-0.553,0.447-1,1-1h6
               c0.553,0,1,0.447,1,1V31z M30,53c0,0.553-0.447,1-1,1h-6c-0.553,0-1-0.447-1-1v-5c0-0.553,0.447-1,1-1h6c0.553,0,1,0.447,1,1V53z
                M30,42c0,0.553-0.447,1-1,1h-6c-0.553,0-1-0.447-1-1v-5c0-0.553,0.447-1,1-1h6c0.553,0,1,0.447,1,1V42z M30,31
               c0,0.553-0.447,1-1,1h-6c-0.553,0-1-0.447-1-1v-5c0-0.553,0.447-1,1-1h6c0.553,0,1,0.447,1,1V31z M42,53c0,0.553-0.447,1-1,1h-6
               c-0.553,0-1-0.447-1-1v-5c0-0.553,0.447-1,1-1h6c0.553,0,1,0.447,1,1V53z M42,42c0,0.553-0.447,1-1,1h-6c-0.553,0-1-0.447-1-1v-5
               c0-0.553,0.447-1,1-1h6c0.553,0,1,0.447,1,1V42z M42,31c0,0.553-0.447,1-1,1h-6c-0.553,0-1-0.447-1-1v-5c0-0.553,0.447-1,1-1h6
               c0.553,0,1,0.447,1,1V31z M54,42c0,0.553-0.447,1-1,1h-6c-0.553,0-1-0.447-1-1v-5c0-0.553,0.447-1,1-1h6c0.553,0,1,0.447,1,1V42z
                M54,31c0,0.553-0.447,1-1,1h-6c-0.553,0-1-0.447-1-1v-5c0-0.553,0.447-1,1-1h6c0.553,0,1,0.447,1,1V31z M62,15H2V8
               c0-1.104,0.896-2,2-2h7v4c0,1.657,1.343,3,3,3s3-1.343,3-3V6h30v4c0,1.657,1.343,3,3,3s3-1.343,3-3V6h7c1.104,0,2,0.896,2,2V15z" />
                </g>
            </svg>`, `  <svg width="32" height="32" viewBox="0 0 24 24" data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                            stroke: #000000;
                            stroke-miterlimit: 10;
                            stroke-width: 1.91px;
                        }
                    </style>
                </defs>
                <circle class="cls-1" cx="12" cy="3.43" r="1.91" />
                <path class="cls-1"
                    d="M9.14,8.2h0A2.86,2.86,0,0,1,12,5.34h0A2.86,2.86,0,0,1,14.86,8.2h0" />
                <circle class="cls-1" cx="19.64" cy="18.7" r="1.91" />
                <path class="cls-1"
                    d="M16.77,23.48h0a2.87,2.87,0,0,1,2.87-2.87h0a2.87,2.87,0,0,1,2.86,2.87h0" />
                <circle class="cls-1" cx="4.36" cy="18.7" r="1.91" />
                <path class="cls-1"
                    d="M1.5,23.48h0a2.87,2.87,0,0,1,2.86-2.87h0a2.87,2.87,0,0,1,2.87,2.87h0" />
                <line class="cls-1" x1="12" y1="9.16" x2="12"
                    y2="13.93" />
                <polyline class="cls-1" points="8.18 16.8 12 13.93 15.82 16.8" />
            </svg>`, ` <svg fill="#000000" width="32" height="32" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.991,10H19.42a1.039,1.039,0,0,1-.951-.674l-.005-.013a1.04,1.04,0,0,1,.2-1.146l1.11-1.11a1.01,1.01,0,0,0,0-1.428l-1.4-1.4a1.01,1.01,0,0,0-1.428,0l-1.11,1.11a1.04,1.04,0,0,1-1.146.2l-.013,0A1.04,1.04,0,0,1,14,4.579V3.009A1.009,1.009,0,0,0,12.991,2H11.009A1.009,1.009,0,0,0,10,3.009v1.57a1.04,1.04,0,0,1-.674.952l-.013,0a1.04,1.04,0,0,1-1.146-.2l-1.11-1.11a1.01,1.01,0,0,0-1.428,0l-1.4,1.4a1.01,1.01,0,0,0,0,1.428l1.11,1.11a1.04,1.04,0,0,1,.2,1.146l0,.013A1.039,1.039,0,0,1,4.58,10H3.009A1.009,1.009,0,0,0,2,11.009v1.982A1.009,1.009,0,0,0,3.009,14H4.58a1.039,1.039,0,0,1,.951.674l0,.013a1.04,1.04,0,0,1-.2,1.146l-1.11,1.11a1.01,1.01,0,0,0,0,1.428l1.4,1.4a1.01,1.01,0,0,0,1.428,0l1.11-1.11a1.04,1.04,0,0,1,1.146-.2l.013.005A1.039,1.039,0,0,1,10,19.42v1.571A1.009,1.009,0,0,0,11.009,22h1.982A1.009,1.009,0,0,0,14,20.991V19.42a1.039,1.039,0,0,1,.674-.951l.013-.005a1.04,1.04,0,0,1,1.146.2l1.11,1.11a1.01,1.01,0,0,0,1.428,0l1.4-1.4a1.01,1.01,0,0,0,0-1.428l-1.11-1.11a1.04,1.04,0,0,1-.2-1.146l.005-.013A1.039,1.039,0,0,1,19.42,14h1.571A1.009,1.009,0,0,0,22,12.991V11.009A1.009,1.009,0,0,0,20.991,10ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z" />
            </svg>`]
        const tabScreenshotsData = []
        for (var i = 0; i < 11; i++) {
            for (var j = 0; j < buttonNames.length; j++) {
                const index = i * buttonNames.length + j;
                tabScreenshotsData.push({
                    tabId: `tabScreen${index + 1}`,
                    div: `<div class="tabScreenshot" data-tab="tabScreen${index + 1}" onclick="changeTabs('tabScreen${index + 1}')">
                        <button class="button-tab button-fill-tabs">
                        <div class="d-flex flex-column align-items-center" style="row-gap: 0.5rem">
                            <div class="svg-select">
                                ${svg[j]}
                        </div>
                        <span>${buttonNames[j]}</span>
                    </div>
                </button>
                </div>`
                });
            }
        }
        const container = document.getElementById('tabsContainer');
        tabScreenshotsData.forEach((data, index) => {
            container.innerHTML += data.div;
        });
        const tabScreen = document.querySelectorAll('.tabScreenshot')
        tabScreen.forEach((data, index) => {
            if (data) {
                if (index == 66) {
                    data.classList.add('active')
                    let svg = data.querySelector('.svg-select')
                    let insidesvg = data.querySelector('svg')
                    if (svg) {
                        svg.classList.add('active')
                    }
                    if (insidesvg) {
                        insidesvg.style.filter = 'invert(1)'
                    }
                }
            }
        })
        const tabs = document.querySelectorAll('.tabScreenshot')
        tabs.forEach((tab) => {
            if (tab && tab.classList.contains('active')) {
                const tabsContainer = document.getElementById('tabsContainer');
                const carousel = document.getElementById('carousel');
                const tabsContainerWidth = tabsContainer.clientWidth;
                const carouselWidth = carousel.clientWidth;
                const tabWidth = tab.clientWidth;
                const tabPosition = tab.offsetLeft;
                const centerPosition = (carouselWidth - tabWidth) / 2;
                const scrollPosition = tabPosition - centerPosition;
                carousel.style.transform = `translateX(-${scrollPosition}px)`;
            }
        })
        const tabScreenshotsInsideData = []
        const img = [`
            <img src="{{ asset('assets/img/market your (26).png') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/mails-clickup.jpeg') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/leads-clickup.jpeg') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/recurringTasks-clickup.jpeg') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/tasks-clickup.jpeg') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/accounts-clickup.jpeg') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/emailing-clickup.jpeg') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/clients-clickup.jpeg') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/calendar-clickup.jpeg') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/employees-clickup.jpeg') }}" alt="" class="img-fluid">
                `, `
            <img src="{{ asset('assets/img/settings-clickup.jpeg') }}" alt="" class="img-fluid">
                `]
        for (var i = 0; i < 11; i++) {
            for (var j = 0; j < 11; j++) {
                const index = i * 11 + j;
                tabScreenshotsInsideData.push({
                    tabId: `tabScreen${index + 1}`,
                    div: `<div class="tab-pane-screenshot" id="tabScreen${index+1}">
                        ${img[j]}
</div>`
                });
            }
        }
        const contentContainer = document.getElementById('tabContentContainer')
        tabScreenshotsInsideData.forEach((data, index) => {
            contentContainer.innerHTML += data.div;
        })
        const tabScreenInside = document.querySelectorAll('.tab-pane-screenshot')
        tabScreenInside.forEach((data, index) => {
            if (data) {
                if (index == 66) {
                    data.classList.add('active')
                }
            }
        })
    </script>
    <script>
        function toggleRotate(element) {
            const carousel = document.getElementById('carousel');
            carousel.classList.toggle('rotate');
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollDiv = document.getElementById('scrollDiv');
            window.addEventListener('scroll', function() {
                const scrollPosition = window.scrollY || window.pageYOffset;
                const backgroundPosition = `-${scrollPosition}px center`;
                scrollDiv.style.backgroundPosition = backgroundPosition;
            });
        })
    </script>
    <script>
        function changeTabs(tabId) {
            var tabs = document.querySelectorAll('.tabScreenshot');
            tabs.forEach(function(tab) {
                tab.classList.remove('active');
                var heading = tab.querySelector('button');
                var svg = tab.querySelector('div.svg-select');
                var svgFilter = tab.querySelector('svg');
                if (heading) {
                    heading.classList.remove('button-fill-tabs');
                }
                if (svg) {
                    svg.classList.remove('active');
                }
                if (svgFilter) {
                    svgFilter.style.filter = "invert(0)";
                }
            });
            var tabContents = document.querySelectorAll('.tab-pane-screenshot');
            tabContents.forEach(function(content) {
                content.classList.remove('active');
            });
            var activeTab = document.querySelector('.tabScreenshot[data-tab="' + tabId + '"]');
            activeTab.classList.add('active');
            var activeTabHeading = activeTab.querySelector('button');
            var activeTabsvg = activeTab.querySelector('div.svg-select');
            var activeTabsvgFilter = activeTab.querySelector('svg');
            if (activeTabHeading) {
                activeTabHeading.classList.add('button-fill-tabs');
            }
            if (activeTabsvg) {
                activeTabsvg.classList.add('active');
            }
            if (activeTabsvgFilter) {
                activeTabsvgFilter.style.filter = "invert(1)";
            }
            var activeTabContent = document.getElementById(tabId);
            activeTabContent.classList.add('active');
            tabs.forEach((tab) => {
                if (tab && tab.classList.contains('active')) {
                    const tabsContainer = document.getElementById('tabsContainer');
                    const carousel = document.getElementById('carousel');
                    const tabsContainerWidth = tabsContainer.clientWidth;
                    const carouselWidth = carousel.clientWidth;
                    const tabWidth = tab.clientWidth;
                    const tabPosition = tab.offsetLeft;
                    const centerPosition = (carouselWidth - tabWidth) / 2;
                    const scrollPosition = tabPosition - centerPosition;
                    carousel.style.transform = `translateX(-${scrollPosition}px)`;
                }
            })
        }
    </script>
    <script>
        function changeTab(tabId) {
            var tabs = document.querySelectorAll('.tab');
            tabs.forEach(function(tab) {
                tab.classList.remove('active');
                var heading = tab.querySelector('h2');
                var div = tab.querySelector('div.insideTab');
                if (heading) {
                    heading.classList.remove('text-fill-tabs');
                }
                if (div) {
                    div.style.display = 'none';
                }
            });
            var tabContents = document.querySelectorAll('.tab-pane');
            tabContents.forEach(function(content) {
                content.classList.remove('active');
            });
            var activeTab = document.querySelector('.tab[data-tab="' + tabId + '"]');
            activeTab.classList.add('active');
            var activeTabHeading = activeTab.querySelector('h2');
            var activeTabDiv = activeTab.querySelector('div.insideTab');
            if (activeTabHeading) {
                activeTabHeading.classList.add('text-fill-tabs');
            }
            if (activeTabDiv) {
                activeTabDiv.style.display = 'block';
            }
            var activeTabContent = document.getElementById(tabId);
            activeTabContent.classList.add('active');
        }
    </script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fontScrollDiv = document.getElementById('fontScrollDiv');
            const title = fontScrollDiv.querySelector('h1');
            function scaleFont() {
                const windowHeight = window.innerHeight;
                const rect = fontScrollDiv.getBoundingClientRect();
                const scrollPosition = rect.top + (rect.height / 2);
                const scale = Math.max(1 - Math.abs(scrollPosition - (windowHeight / 2)) / windowHeight, 0.8);
                title.style.transform = `scale(${scale})`;
            }
            window.addEventListener('scroll', scaleFont);
            window.addEventListener('resize', scaleFont);
            scaleFont();
        });
    </script> --}}
</body>

</html>
