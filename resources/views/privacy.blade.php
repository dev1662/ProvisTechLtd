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
        #portfolio {
            /* text-align: center; */
            /* margin-left: 10rem; */
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
            {{-- <h2>
                <b>

                    Terms & Conditions


                </b>
            </h2> --}}

            <div class="container" style="margin-top:2rem;">
                <main class="main-content">
                    <div class="container">
                        <h4>Privacy Policy</h4>
                    </div>
                    <div class="container">
                        <p>This document is an electronic record in terms of Information Technology Act, 2000 and rules
                            there under as applicable and the amended provisions pertaining to electronic records in
                            various statutes as amended by the Information Technology Act, 2000. This electronic record
                            is generated by a computer system and does not require any physical or digital signatures.
                        </p>
                    </div>
                    <div class="container">
                        <p>This document is published in accordance with the provisions of Rule 3 (1) of the Information
                            Technology (Intermediaries guidelines) Rules, 2011 that require publishing the rules and
                            regulations, privacy policy and Terms of Use for access or usage of oas36ty.com</p>
                    </div>
                    <div class="container">
                        <p>The domain name https://www.oas36ty.com (“Website”), is owned and operated by Centrik
                            Business Solutions Pvt. Ltd. (“Company”) a Private Company limited by shares, incorporated
                            under the provisions of the Companies Act, 2013, and having its registered office at Office
                            no-2401, 24th floor, Corenthum Iconic Tower, Sector- 62, Noida, UP-201309 Near Noida
                            Electronic City Metro Station, where such expression shall, unless repugnant to the context
                            thereof, be deemed to include its respective representatives, administrators, employees,
                            directors, officers, agents, and their successors and assigns.</p>
                    </div>
                    <div class="container">
                        <h6>For the purpose of this Privacy Policy (“Policy”), wherever the context so requires,</h6>
                    </div>
                    <div class="container">
                        <ol>
                            <li>The term ‘You’ &amp;‘User’ shall mean any legal person or entity accessing or using the
                                services provided on this Website, who is competent to enter into binding contracts, as
                                per the provisions of the Indian Contract Act, 1872;</li>
                            <li>The terms ‘We’, ‘Us’&amp; ‘Our’ shall mean the Website and/or the Company, as the
                                context so requires.</li>
                            <li>The terms ‘Party’ &amp; ‘Parties’ shall respectively be used to refer to the User and
                                the Company individually and collectively, as the context so requires.</li>
                            <li>The headings of each section in this Policy are only for the purpose of organizing the
                                various provisions under this Policy in an orderly manner, and shall not be used by
                                either Party to interpret the provisions contained herein in any manner. Further, it is
                                specifically agreed to by the Parties that the headings shall have no legal or
                                contractual value.</li>
                            <li>The use of the Website by the User is solely governed by this Policy as well as the
                                Terms of Use of the Website (“Terms”, available at https://www.oas36ty.com), and any
                                modifications or amendments made thereto by the Company from time to time, at its sole
                                discretion. Visiting the home page of the Website and/or using any of the services
                                provided on the Website shall be deemed to signify the User’s unequivocal acceptance of
                                this Policy and the aforementioned Terms, and the User expressly agrees to be bound by
                                the same. The User expressly agrees and acknowledges that the Terms and Policy are
                                co-terminus and that expiry/termination of either one will lead to the termination of
                                the other.
                                <p>The User unequivocally agrees that this Policy and the aforementioned Terms
                                    constitute a legally binding agreement between the User and the Company, and that
                                    the User shall be subject to the rules, guidelines, policies, terms, and conditions
                                    applicable to any service that is provided by the Website, and that the same shall
                                    be deemed to be incorporated into the Terms, and shall be treated as part and parcel
                                    of the same. The User acknowledges and agrees that no signature or express act is
                                    required to make these Terms and the Policy binding on the User and that the User’s
                                    act of visiting any part of the Website constitutes the User’s full and final
                                    acceptance of the Policy and the aforementioned Terms.</p>
                                <p>The Parties expressly agree that the Company retains the sole and exclusive right to
                                    amend or modify the Policy and the aforementioned Terms without any prior permission
                                    or intimation to the User, and the User expressly agrees that any such amendments or
                                    modifications shall come into effect immediately. The User has a duty to
                                    periodically check the Policy and Terms, and stay updated on their provisions and
                                    requirements. If the User continues to use the Website following such a change, the
                                    User will be deemed to have consented to any and all amendments/modifications made
                                    to the Policy and Terms. In so far as the User complies with the Policy and Terms,
                                    he/she is granted a personal, non-exclusive, non-transferable, revocable, limited
                                    privilege to enter, access and use the Website.</p>
                                <p><strong>Collection of Personal and Other Information<br></strong><br>The User
                                    expressly agrees and acknowledges that the Company collects and stores the User’s
                                    personal information, which is provided by the User from time to time on the
                                    Website, including but not limited to the User’s user name, passwords, email
                                    address, name, address, age, date of birth, sex, nationality, shopping preferences,
                                    browsing history, etc., as well as any images or other information
                                    uploaded/published by the User on the Website. The User is aware that this
                                    information will be used by the Company/Website to provide services and features
                                    targeted at the User, that are most likely to meet the User’s needs, and also to
                                    customize and improve the Website to make its users’ experiences safer and easier.
                                </p>
                                <p>The User is aware that the Company/Website may automatically track certain
                                    information about the User based upon the User’s IP address and the User’s behavior
                                    on the Website, and the User expressly consents to the same. The User is aware that
                                    this information is used to do internal research on user demographics, interests,
                                    and behavior, to enable the Company/Website to better understand, and cater to the
                                    interests of its users. The User is expressly made aware that such information may
                                    include the URL that the User visited prior to accessing the Website, the URL which
                                    the User subsequently visits (whether or not these URLs form a part of the Website),
                                    the User’s computer &amp; web browser information, the User’s IP address, etc.</p>
                                <p>If the User chooses to purchase products/services from the Website, the User consents
                                    to allow the Company/Website to collect information about the User’s buying behavior
                                    and trends.</p>
                                <p>If the User chooses to post messages/reviews/feedback anywhere on the Website,
                                    including but not limited to message boards, chat rooms, other message areas, etc.,
                                    the User is aware that any and all such information provided/uploaded will be
                                    collected and stored by the Company indefinitely, and that such retained information
                                    may be used to resolve disputes, provide customer support, troubleshoot problems,
                                    etc., and that such information if requested, may be provided to judicial or
                                    governmental authorities of requisite jurisdiction, or otherwise used by the
                                    Company/Website as permitted by applicable laws.</p>
                                <p>The User is aware that any and all information pertaining to the User collected by
                                    the Company, whether or not directly provided by the User to the Company/Website,
                                    including but not limited to personal correspondence such as emails or letters,
                                    feedback from other users or third parties regarding the User’s activities or
                                    postings on the Website, etc., may be collected and compiled by the Company/Website
                                    into a file/folder specifically created for / allotted to the User, and the User
                                    hereby expressly consents to the same.</p>
                                <p>The User is aware that while he/she can browse some sections of the Website without
                                    being a registered user, certain activities (such as placing an order) require the
                                    User to provide valid personal information to the Company/Website for the purpose of
                                    registration. The User is aware that the contact information provided to the
                                    Company/Website may be used to send the User offers and promotions, whether or not
                                    based on the User’s previous orders and interests, and the User hereby expressly
                                    consents to receive the same.</p>
                                <p>The User is aware that the Company/Website may occasionally request the User to
                                    complete optional online surveys. These surveys may require the User to provide
                                    contact information and demographic information (like zip code, age, income bracket,
                                    sex, etc.). The User is aware that this data to is used to customize the Website for
                                    the benefit of the User, and providing all users of the Website with
                                    products/services/content that the Company/Website believes they might be interested
                                    in availing of, and also to display content according to the User’s preferences.</p>
                                <p>The User is further aware that the Company/Website may occasionally request the User
                                    to write reviews for products/services purchased/availed of by the User from the
                                    Website, and also reviews for the various sellers listing their products/services on
                                    the Website. The User is aware that such reviews will help other users of the
                                    website make prudent and correct purchases, and also help the Company/Website remove
                                    sellers whose products are unsatisfactory in any way, and the User hereby expressly
                                    authorizes the Company/Website to publish any and all reviews written by the User on
                                    the Website, along with the User’s name and certain contact details, for the benefit
                                    and use of other Users of the Website.</p>
                                <p>Nothing contained herein shall be deemed to compel the Website/Company to store,
                                    upload, publish, or display in any manner content/reviews/surveys/feedback submitted
                                    by the User, and the User hereby expressly authorizes the Website/Company to remove
                                    from the Website any such content, review, survey, or feedback submitted by the
                                    User, without cause or being required to notify the User of the same.</p>
                                <p><strong>Cookies</strong></p>
                                <p>The User is aware that cookie’ is a small piece of information stored by a web server
                                    on a web browser so it can later be traced back from that particular browser, and
                                    that cookies are useful for enabling the browser to remember information specific to
                                    a given user, including but not limited to a User’s login identification, password,
                                    etc. The User is aware that the Website places both permanent and temporary cookies
                                    in the User’s computer’s hard drive and web browser, and does hereby expressly
                                    consent to the same.</p>
                                <p>The User is further aware that the Website uses data collection devices such as
                                    cookies on certain pages of the Website to help analyze web page flow, measure
                                    promotional effectiveness, and promote trust and safety, and that certain features
                                    of the Website are only available through the use of such cookies. While the User is
                                    free to decline the Website’s cookies if the User’s browser permits, the User may
                                    consequently be unable to use certain features on the Website</p>
                                <p>Additionally, the User is aware that he/she might encounter ‘cookies’ or other
                                    similar devices on certain pages of the Website that are placed by third parties or
                                    affiliates of the Company/Website. The User expressly agrees and acknowledges that
                                    the Company/Website does not control the use of such cookies/other devices by third
                                    parties, that the Company/Website is in no way responsible for the same, and that
                                    the User assumes any and all risks in this regard.</p>
                                <p><strong>Divulging/Sharing of Personal Information<br></strong><br>The User is aware
                                    that the Website/Company may share the User’s personal information with other
                                    corporate entities and affiliates to help detect and prevent identity theft, fraud,
                                    and other potentially illegal acts; correlate related or multiple accounts to
                                    prevent abuse of the Website’s services; and to facilitate joint or co-branded
                                    services, where such services are provided by more than one corporate entity.</p>
                                <p>The User is aware that the Website/Company may disclose personal information if
                                    required to do so by law or if the Website/Company in good faith believes that such
                                    disclosure is reasonably necessary to respond to subpoenas, court orders, or other
                                    legal processes. The Website/Company may also disclose the User’s personal
                                    information to law enforcement offices, third party rights owners, or other third
                                    parties if it believes that such disclosure is reasonably necessary to enforce the
                                    Terms or Policy; respond to claims that an advertisement, posting or other content
                                    violates the rights of a third party; or protect the rights, property or personal
                                    safety of its users, or the general public.</p>
                                <p>The User is further aware that the Website/Company and its affiliates may share/sell
                                    some or all of the User’s personal information with other business entities should
                                    the Company/Website (or its assets) plan to merge with, or be acquired by such
                                    business entity, or in the event of re-organization, amalgamation, or restructuring
                                    of the Company’s business. Such a business entity or new entity will continue to be
                                    bound by the Terms and Policy, as may be amended from time to time.</p>
                                <p><strong>Security</strong></p>
                                <p>Transactions on the Website are secure and protected. Any information entered by the
                                    User when transacting on the Website is encrypted to protect the User against
                                    unintentional disclosure to third parties. The User’s credit and debit card
                                    information is not received, stored by or retained by the Company / Website in any
                                    manner. This information is supplied by the User directly to the relevant payment
                                    gateway which is authorized to handle the information provided and is compliant with
                                    the regulations and requirements of various banks and institutions and payment
                                    franchisees that it is associated with.</p>
                                <p><strong>Third-Party Advertisements/Promotions</strong></p>
                                <p>The User is aware that the Company/Website uses third-party advertising companies to
                                    serve ads to the users of the Website. The User is aware that these companies may
                                    use information relating to the User’s visits to the Website and other websites in
                                    order to provide customized advertisements to the User. Furthermore, the Website may
                                    contain links to other websites that may collect personally identifiable information
                                    about the User. The Company/Website is not responsible for the privacy practices or
                                    the content of any of the aforementioned linked websites, and the User expressly
                                    acknowledges the same and agrees that any and all risks associated will be borne
                                    entirely by the User.</p>
                                <p><strong>User’s Consent<br></strong><br>By using the Website and/ or by providing
                                    information to the Company through the Website, the User consents to the collection
                                    and use of the information disclosed by the User on the Website in accordance with
                                    this Policy, including but not limited to the User’s consent the Company/Website
                                    sharing/divulging the User’s information, as per the terms contained herein above in
                                    Section 4 of the Policy.</p>
                                <p><strong>Grievance Officer<br></strong><br>In accordance with Information Technology
                                    Act 2000 and rules made thereunder, the name and contact details of the Grievance
                                    Officer are provided below: E-mail: support@centrik.in</p>
                                <p><strong>Dispute Resolution and Jurisdiction<br></strong><br>It is expressly agreed to
                                    by the Parties hereto that the formation, interpretation, and performance of this
                                    Policy and any disputes arising here from will be resolved through a two-step
                                    Alternate Dispute Resolution (“ADR”) mechanism. It is further agreed to by the
                                    Parties that the contents of this Section shall survive even after the termination
                                    or expiry of the Policy and/or Terms.</p>
                                <p><strong>Mediation</strong></p>
                                <p>In case of any dispute between the parties, the Parties will attempt to resolve the
                                    same amicably among themselves, to the mutual satisfaction of both Parties. In the
                                    event that the Parties are unable to reach such an amicable solution within thirty
                                    (30) days of one Party communicating the existence of a dispute to the other Party,
                                    the dispute will be resolved by arbitration, as detailed herein below.</p>
                                <p><strong>Arbitration</strong></p>
                                <p>In the event that the Parties are unable to amicably resolve a dispute by mediation,
                                    said dispute will be referred to arbitration by a sole arbitrator to be appointed by
                                    the Company, and the award passed by such sole arbitrator will be valid and binding
                                    on both Parties. The Parties shall bear their own costs for the proceedings,
                                    although the sole arbitrator may, in his/her sole discretion, direct either Party to
                                    bear the entire cost of the proceedings. The arbitration shall be conducted in
                                    English, and the seat of Arbitration shall be the city of Delhi.</p>
                                <p>The Parties expressly agree that the Terms, Policy and any other agreements entered
                                    into between the Parties are governed by the laws, rules, and regulations of India,
                                    and that the Courts at Delhi, shall have exclusive jurisdiction over any disputes
                                    arising between the Parties.</p>
                            </li>

                            <p><strong>Return/Refund Policy</strong></p>
                            <p>If you are not satisfied, we will gladly offer you a FULL REFUND for your purchase within
                                13-14 business days, and
                                downgrade your account to the free plan. We want you to be happy with our service
                                throughout your entire contract, not only the first 30 days (in case of monthly
                                subscription) and the first 45 days (in case of annual subscription).</p>
                        </ol>
                    </div>
                </main>
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

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
