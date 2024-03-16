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

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Fredoka:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/lity.css') }}" rel="stylesheet">
    {{-- <script src="vendor/jquery.js"></script> --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- This meta tag suggests the browser to use HTTPS and enforce it for 1 year -->
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">


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
        #portfolio h2 {
            text-align: center;
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

            <div class="container" style="margin-top:2rem;">
                <main class="main-content">
                    <div class="container">
                        <h3>Terms &amp; Conditions</h3>
                    </div>
                    <div class="container">
                        <p>Welcome to Oas36ty.com</p>
                    </div>
                    <div class="container">
                        <p><strong>ACCEPTANCE OF TERMS:</strong></p>
                    </div>
                    <div class="container">
                        <p>In this agreement, we have referred to the ‘oas36ty” as oas36ty.com”, you as the “user”,
                            legal professionals, CA, CS or other professionals or other person/entity/agency as “Expert”
                            and to our agreement as the “agreement” which may be updated by us from time to time without
                            any notice to you. The services provided by oas36ty are referred to as “Services”.</p>
                    </div>
                    <div class="container">
                        <p>By accessing and using oas36ty, you accept and agree to be bound by the terms and provision
                            of the User Agreement. In addition, while using services provided by oas36ty, you and
                            oas36ty shall be subject to any posted guidelines or rules applicable or other conditions as
                            stipulated to such services, which may be posted and modified from time to time. All such
                            guidelines or rules are hereby incorporated by reference into the User Agreement.</p>
                    </div>
                    <div class="container">
                        <p>Further, by using oas36ty, you affirm that you are more than 18 years of age and are fully
                            able and competent to enter into the terms, conditions, obligations, affirmations,
                            representations, and warranties consequent to the creation of the documents, and are aware
                            of the same. Kindly call us for further assistance.</p>
                    </div>
                    <div class="container">
                        <p><strong>OAS36TY IS NEITHER PART OF GOVERNMENT NOR ANY GOVERNMENT AGENCY</strong></p>
                    </div>
                    <div class="container">
                        <p>By using the service, you agree that oas36ty is a private limited company registered with
                            Registrar of Companies, and engaged in providing grievance solutions &amp; liasioning and
                            other services through its online portal. oas36ty is neither part of any government whether,
                            oas36ty or State, nor affiliates from any Government agency. oas36ty is an independent
                            organization to provide an interaction between certain experts registered with oas36ty and
                            user. The expert may relate to any profession or class or agency and provide services of
                            grievance &amp; liasioning. The experts try to minimize the gap between the Government or
                            government agencies and user, through their experience, knowledge and other skills. oas36ty
                            does not provide any guarantee or warranty that you would get your intended result.</p>
                    </div>
                    <div class="container">
                        <p><strong>OAS36TY IS ONLY A MEDIUM OF INTERACTION</strong></p>
                    </div>
                    <div class="container">
                        <p>Oas36ty is an internet portal that facilitates communication between legal/accounting/ other
                            professionals, &amp; other experienced persons registered as an expert, at one side and
                            potential users of services on the other side. r acts as a venue for providers and consumers
                            of services to exchange information with the goal of eventually forming a professional
                            relationship. Oas36ty does not guarantee that users will successfully find the intended
                            solutions or professional through this system. Oas36ty takes no position and offers no
                            opinion on when or if a lawyer-client relationship has been formed.</p>
                    </div>
                    <div class="container">
                        <p>You understand and agree that information provided on oas36ty is for informational purposes
                            only, and does not constitute legal advice, until &amp; otherwise provided. You understand
                            that may not verify licenses of experts &amp; professionals who have registered on oas36ty
                            to provide services to users, and that it is your sole responsibility to verify a lawyer’s
                            license and credentials before making a decision to hire such a lawyer or professional. You
                            understand that r is not an advertising service for any kind of professionals and that the
                            professional listings on oas36ty do not constitute a referral or endorsement by oas36ty.</p>
                    </div>
                    <div class="container">
                        <p>You understand and agree that oas36ty may include certain communications from oas36ty, such
                            as service announcements, administrative messages, newsletters, and that these
                            communications are considered part of oas36ty membership and you will not be able to opt-out
                            of receiving them. Unless explicitly stated otherwise, any new features that augment or
                            enhance the current oas36ty services, including the release of new oas36ty properties, shall
                            be subject to the User Agreement. You understand and agree that oas36ty is provided “AS IS”
                            and that oas36ty assumes no responsibility for the timeliness, deletion, mis-delivery or
                            failure to store any user communications or personalization settings. You are responsible
                            for obtaining access to oas36ty, and that access may involve third-party fees (such as
                            Internet service provider or airtime charges). You are responsible for those fees. In
                            addition, you must provide and are responsible for all equipment necessary to access
                            oas36ty.</p>
                    </div>
                    <div class="container">
                        <p>You understand that the technical processing and transmission of oas36ty, including your
                            Content, may involve (a) transmissions over various networks; and (b) changes to conform and
                            adapt to technical requirements of connecting networks or devices.</p>
                    </div>
                    <div class="container">
                        <p><strong>YOUR REGISTRATION OBLIGATIONS</strong></p>
                    </div>
                    <div class="container">
                        <p>In consideration of your use of oas36ty, you represent that you are of legal age to form a
                            binding contract and are not a person barred from using oas36ty under the laws of India or
                            other applicable jurisdiction. You also agree to (a) provide true, accurate, current, and
                            complete information about yourself as prompted by the oas36ty registration form (the
                            “Registration Data”) and (b) maintain and promptly update the Registration Data to keep it
                            true, accurate, current, and complete. If you provide any information that is untrue,
                            inaccurate, not current or incomplete, or oas36ty has reasonable grounds to suspect that
                            such information is untrue, inaccurate, not current or incomplete, oas36ty has the right to
                            suspend or terminate your account and refuse any and all current or future use of oas36ty
                            (or any portion thereof). oas36ty is concerned about the safety and privacy of all its
                            users.</p>
                    </div>
                    <div class="container">
                        <p><strong>OAS36TY PRIVACY POLICY</strong></p>
                    </div>
                    <div class="container">
                        <p>Registration Data and certain other information about you are subject to our applicable
                            privacy policy. For more information, see the full oas36ty Privacy Policy. You understand
                            that through your use of oas36ty you consent to the collection and use (as set forth in the
                            applicable privacy policy) of this information, including the transfer of this information
                            to the United States and/or other countries for storage, processing, and use by oas36ty and
                            its affiliates.</p>
                    </div>
                    <div class="container">
                        <p><strong>USER ACCOUNT, PASSWORD, AND SECURITY</strong></p>
                    </div>
                    <div class="container">
                        <p>You will receive a password and account designation upon completing oas36ty registration
                            process. You are responsible for maintaining the confidentiality of the password and account
                            and are fully responsible for all activities that occur under your password or account. You
                            agree to (a) immediately notify oas36ty of any unauthorized use of your password or account
                            or any other breach of security, and (b) ensure that you exit from your account at the end
                            of each session. oas36ty cannot and will not be liable for any loss or damage arising from
                            your failure to comply with this Section 6.</p>
                    </div>
                    <div class="container">
                        <p><strong>MEMBER CONDUCT</strong></p>
                    </div>
                    <div class="container">
                        <p>You understand that all information, data, text, software, music, sound, photographs,
                            graphics, video, messages, tags, or other materials (“Content”), whether publicly posted or
                            privately transmitted, are the sole responsibility of the person from whom such Content
                            originated. This means that you, and not oas36ty, are entirely responsible for all Content
                            that you upload, post, email, transmit or otherwise make available via oas36ty. oas36ty does
                            not control the Content posted via and, as such, does not guarantee the accuracy, integrity
                            or quality of such Content. You understand that by using oas36ty, you may be exposed to
                            Content that is offensive, indecent or objectionable. Under no circumstances will oas36ty be
                            liable in any way for any Content, including, but not limited to, any errors or omissions in
                            any Content, or any loss or damage of any kind incurred as a result of the use of any
                            Content posted, emailed, transmitted or otherwise made available via oas36ty.</p>
                    </div>
                    <div class="container">
                        <p>You agree to not use oas36ty to upload, post, email, transmit, or otherwise make available
                            any Content that is unlawful, harmful, threatening, abusive, harassing, tortuous,
                            defamatory, vulgar, obscene, libelous, invasive of another privacy, hateful, or racially,
                            ethnically, or otherwise objectionable; harm minors in any way;</p>
                    </div>
                    <div class="container">
                        <p>Impersonate any person or entity, including, but not limited to, an oas36ty official, forum
                            leader, guide, or host, or falsely state or otherwise misrepresent your affiliation with a
                            person or entity;</p>
                    </div>
                    <div class="container">
                        <p>Forge headers or otherwise manipulate identifiers in order to disguise the origin of any
                            Content transmitted through oas36ty;</p>
                    </div>
                    <div class="container">
                        <p>Upload, post, email, transmit, or otherwise make available any Content that you do not have a
                            right to make available under any law or under contractual or fiduciary relationships (such
                            as inside information, proprietary, and confidential information learned or disclosed as
                            part of employment relationships or under nondisclosure agreements)</p>
                    </div>
                    <div class="container">
                        <p>Upload, post, email, transmit, or otherwise make available any Content that infringes any
                            patent, trademark, trade secret, copyright or other proprietary rights (“Rights”) of any
                            party;</p>
                    </div>
                    <div class="container">
                        <p>Upload, post, email, transmit, or otherwise make available any unsolicited or unauthorized
                            advertising, promotional materials, junk mail, spam, chain letters, pyramid schemes, or any
                            other form of solicitation;</p>
                    </div>
                    <div class="container">
                        <p>Upload, post, email, transmit, or otherwise make available any material that contains
                            software viruses or any other computer code, files or programs designed to interrupt,
                            destroy, or limit the functionality of any computer software or hardware or
                            telecommunications equipment;</p>
                    </div>
                    <div class="container">
                        <p>use, or cause to be used, oas36ty to facilitate the transmission of unsolicited or
                            unauthorized material, including but not limited to promotional materials, URLs, junk mail,
                            chain letters, pyramid schemes, or any other form of unauthorized solicitation that you may
                            upload, post, email, transmit, or otherwise make available.</p>
                    </div>
                    <div class="container">
                        <p>use robots or otherwise harvest others’ email addresses from oas36ty for purposes of sending
                            unsolicited or unauthorized material. Upload, post, email, or transmit the same message,
                            URL, or post multiple times.</p>
                    </div>
                    <div class="container">
                        <p>Disrupt the normal flow of dialogue, or otherwise act in a manner that negatively affects
                            other users’ ability to use oas36ty;</p>
                    </div>
                    <div class="container">
                        <p>Interfere with or disrupt oas36ty or servers or networks connected to oas36ty, or disobey any
                            requirements, procedures, policies, or regulations of networks connected to oas36ty,
                            including using any device, software, or routine to bypass our robot exclusion headers;</p>
                    </div>
                    <div class="container">
                        <p>intentionally or unintentionally violate any applicable local, state, national, or
                            international law, and any regulations having the force of law;<br>stalk or otherwise harass
                            another;</p>
                    </div>
                    <div class="container">
                        <p>and/or collect or store personal data about other users in connection with the prohibited
                            conduct and activities set forth in paragraphs a through o above.</p>
                    </div>
                    <div class="container">
                        <p>You acknowledge that oas36ty may or may not pre-screen Content, but that oas36ty and its
                            designers shall have the right (but not the obligation) in their sole discretion to
                            pre-screen, refuse, or remove any Content that is available via oas36ty. Without limiting
                            the foregoing, oas36ty and its designers shall have the right to remove any Content that
                            violates the User Agreement or is otherwise objectionable. You agree that you must evaluate,
                            and bear all risks associated with, the use of any Content, including any reliance on the
                            accuracy, completeness, or usefulness of such Content. In this regard, you acknowledge that
                            you may not rely on any Content created by oas36ty or submitted to oas36ty, including
                            without limitation information in oas36ty forums and in all other parts of oas36ty.</p>
                    </div>
                    <div class="container">
                        <p>You acknowledge, consent, and agree that oas36ty may access, preserve, and disclose your
                            account information and Content if required to do so by law or in a good faith belief that
                            such access preservation or disclosure is reasonably necessary to</p>
                    </div>
                    <div class="container">
                        <ol>
                            <li>Comply with legal process;</li>
                            <li>Enforce the User Agreement;</li>
                            <li>Respond to claims that any Content violates the rights of third parties;</li>
                            <li>Respond to your requests for customer service; or</li>
                            <li>Protect the rights, property or personal safety of oas36ty, its users, and the public.
                            </li>
                        </ol>
                    </div>
                    <div class="container">
                        <p>You understand that oas36ty and software embodied within oas36ty may include security
                            components that permit digital materials to be protected, and that use of these materials is
                            subject to usage rules set by oas36ty and/or content providers who provide content to
                            oas36ty. You may not attempt to override or circumvent any of the usage rules embedded into
                            oas36ty. Any unauthorized reproduction, publication, further distribution, or public
                            exhibition of the materials provided on oas36ty, in whole or in part, is strictly
                            prohibited.</p>
                    </div>
                    <div class="container">
                        <p><strong>INTERNATIONAL USE AND EXPORT AND IMPORT COMPLIANCE</strong></p>
                    </div>
                    <div class="container">
                        <p>Recognizing the global nature of the Internet, you agree to comply with all local rules
                            regarding online conduct and acceptable Content. Use of oas36ty and transfer, posting, and
                            uploading of software, technology, and other technical data via oas36ty may be subject to
                            the export and import laws of India and other countries. You agree to comply with all
                            applicable export and import laws and regulations. In particular, you represent and warrant
                            that you Are not a prohibited party identified on any government export exclusion lists or a
                            member of a government of any other export-prohibited countries as identified in applicable
                            export and import laws and regulations;</p>
                    </div>
                    <div class="container">
                        <p>Will not transfer software, technology, and other technical data via oas36ty to
                            export-prohibited parties or countries;</p>
                    </div>
                    <div class="container">
                        <p>Will not use oas36ty for military, nuclear, missile, chemical, or biological weaponry end
                            uses in violation of U.S. export laws; and</p>
                    </div>
                    <div class="container">
                        <p>Will not transfer, upload, or post via oas36ty any software, technology, or other technical
                            data in violation of U.S. or other applicable export or import laws.</p>
                    </div>
                    <div class="container">
                        <p><strong>CONTENT SUBMITTED OR MADE AVAILABLE FOR INCLUSION ON OAS36TY</strong></p>
                    </div>
                    <div class="container">
                        <p>oas36ty does not claim ownership of Content you submit or make available for inclusion on
                            oas36ty. However, with respect to Content you submit or make available for inclusion on
                            publicly accessible areas of oas36ty, you grant oas36ty the following worldwide,
                            royalty-free, and non-exclusive license(s), as applicable:</p>
                    </div>
                    <div class="container">
                        <p>With respect to Content you submit or make available for inclusion on publicly accessible
                            areas of oas36ty, the license to use, distribute, reproduce, modify, adapt, publicly
                            perform, and publicly display such Content on oas36ty solely for the purposes of providing
                            and promoting oas36ty.</p>
                    </div>
                    <div class="container">
                        <p>With respect to photos, graphics, audio, or video you submit or make available for inclusion
                            on publicly accessible areas of oas36ty, the license to use, distribute, reproduce, modify,
                            adapt, publicly perform, and publicly display such Content on oas36ty solely for the purpose
                            for which such Content was submitted or made available.</p>
                    </div>
                    <div class="container">
                        <p>With respect to Content other than photos, graphics, audio, or video you submit or make
                            available for inclusion on publicly accessible areas of oas36ty, the perpetual, irrevocable,
                            and fully sub licensable license to use, distribute, reproduce, modify, adapt, publish,
                            translate, publicly perform, and publicly display such Content (in whole or in part) and to
                            incorporate such Content into other works in any format or medium now known or later
                            developed.</p>
                    </div>
                    <div class="container">
                        <p>“Publicly accessible” areas of oas36ty are those areas of oas36ty that are intended by
                            oas36ty to be available to the general public.</p>
                    </div>
                    <div class="container">
                        <p><strong>CONTRIBUTIONS TO OAS36TY</strong></p>
                    </div>
                    <div class="container">
                        <p>By submitting ideas, suggestions, documents, and/or proposals (“Contributions”) to oas36ty
                            through its suggestion or feedback web pages, you acknowledge and agree that:</p>
                    </div>
                    <div class="container">
                        <p>your Contributions do not contain confidential or proprietary information;<br>oas36ty is not
                            under any obligation of confidentiality, express or implied, with respect to the
                            Contributions;<br>oas36ty shall be entitled to use or disclose (or choose not to use or
                            disclose) such Contributions for any purpose, in any way, in any media worldwide;<br>oas36ty
                            may have something similar to the Contributions already under consideration or in
                            development;<br>your Contributions automatically become the property of oas36ty without any
                            obligation of oas36ty to you;<br>you are not entitled to any compensation or reimbursement
                            of any kind from oas36ty under any circumstances.<br>INDEMNITY</p>
                    </div>
                    <div class="container">
                        <p>You agree to indemnify and hold oas36ty and its subsidiaries, affiliates, officers, agents,
                            employees, partners, and licensors harmless from any claim or demand, including reasonable
                            attorneys’ fees, made by any third party due to or arising out of Content you submit, post,
                            transmit, modify, or otherwise make available through oas36ty, your use of oas36ty, your
                            connection to oas36ty, your violation of the User Agreement, or your violation of any rights
                            of another.</p>
                    </div>
                    <div class="container">
                        <p><strong>NO COMMERCIAL REUSE OF OAS36TY</strong></p>
                    </div>
                    <div class="container">
                        <p>You agree not to reproduce, duplicate, copy, sell, trade, resell, or exploit for any
                            commercial purposes, any portion or use of, or access to, oas36ty (including Content,
                            advertisements, Software, and your oas36ty User ID).</p>
                    </div>
                    <div class="container">
                        <p><strong>GENERAL PRACTICES REGARDING USE AND STORAGE</strong></p>
                    </div>
                    <div class="container">
                        <p>You acknowledge that oas36ty may establish general practices and limits concerning use of
                            oas36ty, including without limitation the maximum number of days any uploaded Content will
                            be retained by oas36ty, the maximum number of email messages that may be sent from or
                            received by an account on oas36ty, the maximum size of any email message that may be sent
                            from or received by an account on oas36ty, and the maximum number of times (and the maximum
                            duration for which) you may access oas36ty in a given period of time. You agree that oas36ty
                            has no responsibility or liability for the deletion or failure to store any messages and
                            other communications or other Content maintained or transmitted by oas36ty. You acknowledge
                            that oas36ty reserves the right to deactivate accounts that are inactive for an extended
                            period of time. You further acknowledge that oas36ty reserves the right to modify these
                            general practices and limits from time to time.</p>
                    </div>
                    <div class="container">
                        <p><strong>MODIFICATIONS TO OAS36TY</strong></p>
                    </div>
                    <div class="container">
                        <p>oas36ty reserves the right at any time and from time to time to modify or discontinue,
                            temporarily or permanently, oas36ty (or any part thereof) with or without notice. You agree
                            that oas36ty shall not be liable to you or to any third party for any modification,
                            suspension or discontinuance of oas36ty (or any part thereof).</p>
                    </div>
                    <div class="container">
                        <p><strong>TERMINATION</strong></p>
                    </div>
                    <div class="container">
                        <p>You may terminate your oas36ty account, any associated email address, and access to oas36ty
                            by submitting such termination request to oas36ty.</p>
                    </div>
                    <div class="container">
                        <p>You agree that oas36ty may, without prior notice, immediately terminate, limit your access to
                            or suspend your oas36ty account, any associated email address, and access to oas36ty. Cause
                            for such termination, limitation of access or suspension shall include, but not be limited
                            to-</p>
                    </div>
                    <div class="container">
                        <p>Breaches or violations of the User Agreement or other incorporated agreements or
                            guidelines<br>Requests by law enforcement or other government agencies discontinuance or
                            material modification to oas36ty (or any part thereof)<br>Unexpected technical or security
                            issues or problem<br>Extended periods of inactivity<br>Engagement by you in fraudulent or
                            illegal activities, and/or<br>Nonpayment of any fees owed by you in connection with
                            oas36ty.<br>Further, you agree that all terminations, limitations of access and suspensions
                            for cause shall be made in oas36ty’s sole discretion and that oas36ty shall not be liable to
                            you or any third party for any termination of your account, any associated email address, or
                            access to oas36ty. Termination of your oas36ty account includes any or all of the following-
                        </p>
                    </div>
                    <div class="container">
                        <p>Removal of access to all or part of the offerings within oas36ty<br>Deletion of your password
                            and all related information, files, and content associated with or inside your account (or
                            any part thereof)<br>Barring of further use of all or part of oas36ty.<br>LINKS</p>
                    </div>
                    <div class="container">
                        <p>oas36ty may provide, or third parties may provide, links to other World Wide Web sites or
                            resources. You acknowledge and agree that oas36ty is not responsible for the availability of
                            such external sites or resources, and does not endorse and is not responsible or liable for
                            any Content, advertising, products or other materials on or available from such sites or
                            resources. You further acknowledge and agree that oas36ty shall not be responsible or
                            liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or
                            in connection with use of or reliance on any such Content, goods or services available on or
                            through any such site or resource.</p>
                    </div>
                    <div class="container">
                        <p><strong>OAS36TY’S PROPRIETARY RIGHTS</strong></p>
                    </div>
                    <div class="container">
                        <p>You acknowledge and agree that oas36ty and any necessary software used in connection with
                            oas36ty (“Software”) contain proprietary and confidential information that is protected by
                            applicable intellectual property and other laws. You further acknowledge and agree that
                            Content contained in advertisements or information presented to you through oas36ty or by
                            advertisers is protected by copyrights, trademarks, service marks, patents or other
                            proprietary rights and laws. Except as expressly permitted by applicable law or as
                            authorized by oas36ty or the applicable licensor (such as an advertiser), you agree not to
                            modify, rent, lease, loan, sell, distribute, transmit, broadcast, publicly perform, or
                            create derivative works based on oas36ty, such Content or the Software, in whole or in
                            part.<br>oas36ty grants you a personal, non-transferable, and non-exclusive right and
                            license to use the object code of its Software on a single computer; provided that you do
                            not (and do not allow any third party to) copy, modify, create a derivative work from,
                            reverse engineer, reverse assemble or otherwise attempt to discover any source code, sell,
                            assign, sublicense, grant a security interest in or otherwise transfer any right in the
                            Software. You agree not to modify the Software in any manner or form, nor to use modified
                            versions of the Software, including (without limitation) for the purpose of obtaining
                            unauthorized access to oas36ty. You agree not to access oas36ty by any means other than
                            through the interface that is provided by oas36ty for use in accessing oas36ty</p>
                    </div>
                    <div class="container">
                        <p><strong>DISCLAIMER OF WARRANTIES</strong></p>
                    </div>
                    <div class="container">
                        <p>You expressly understand and agree that:<br>Your use of oas36ty and its underlying software
                            are at your sole risk. oas36ty and its underlying software are provided on an “as is” and
                            “as available” basis. oas36ty and its subsidiaries, affiliates, officers, employees, agents,
                            partners, and licensors expressly disclaim all warranties of any kind, whether express or
                            implied, including, but not limited to the implied warranties of title, merchantability,
                            fitness for a particular purpose and non-infringement.</p>
                    </div>
                    <div class="container">
                        <p>oas36ty and its subsidiaries, affiliates, officers, employees, agents, partners, and
                            licensors make no warranty that<br>oas36ty or its underlying software will meet your
                            requirements<br>oas36ty or its underlying software will be uninterrupted, timely, secure or
                            error-free</p>
                    </div>
                    <div class="container">
                        <p>The results that may be obtained from the use of oas36ty or its underlying software will be
                            accurate or reliable</p>
                    </div>
                    <div class="container">
                        <p>The quality of any products, services, information or other material purchased or obtained by
                            you through oas36ty or its underlying software will meet your expectations. Any errors in
                            the software will be corrected.</p>
                    </div>
                    <div class="container">
                        <p>Any material downloaded or otherwise obtained through the use of oas36ty or its underlying
                            software is accessed at your own discretion and risk, and you will be solely responsible for
                            and hereby waive any and all claims and causes of action with respect to any damage to your
                            computer system, internet access, download or display device, or loss of data that results
                            from the download of any such material.</p>
                    </div>
                    <div class="container">
                        <p>No advice or information, whether oral or written, obtained by you from oas36ty or through or
                            from oas36ty or its underlying software shall create any warranty not expressly stated in
                            the user agreement.</p>
                    </div>
                    <div class="container">
                        <p><strong>LIMITATION OF LIABILITY</strong></p>
                    </div>
                    <div class="container">
                        <p>You expressly understand and agree that oas36ty and its subsidiaries, affiliates, officers,
                            employees, agents, partners, and licensors shall not be liable to you for any punitive,
                            indirect, incidental, special, consequential or exemplary damages, including, but not
                            limited to, monetary damages, damages for loss of profits, goodwill, use, data or other
                            intangible losses (even if oas36ty has been advised of the possibility of such damages),
                            resulting from</p>
                    </div>
                    <div class="container">
                        <p>The use or the inability to use oas36ty</p>
                    </div>
                    <div class="container">
                        <p>Hiring a lawyer or professional based on the information presented on oas36ty<br>The cost of
                            hiring a lawyer or professional based on the information presented on oas36ty<br>The cost of
                            procurement of goods and services based on the information presented on oas36ty<br>The cost
                            of procurement of substitute goods and services<br>Statements or conduct of any lawyer,
                            professional, user, or third party on oas36ty<br>Unauthorized access to or alteration of
                            your transmissions or data<br>Any other matter relating to oas36ty.</p>
                    </div>
                    <div class="container">
                        <p><strong>EXCLUSIONS AND LIMITATIONS</strong></p>
                    </div>
                    <div class="container">
                        <p>Some jurisdictions do not allow the exclusion of certain warranties or the limitation or
                            exclusion of liability for incidental or consequential damages. Accordingly, some of the
                            above limitations of sections 17 and 18 may not apply to you.</p>
                    </div>
                    <div class="container">
                        <p><strong>NOTICE</strong></p>
                    </div>
                    <div class="container">
                        <p>oas36ty may provide you with notices, including those regarding changes to the User
                            Agreement, including by but not limited to email, regular mail, SMS, MMS, text message,
                            postings on oas36ty, or other reasonable means now known or hereafter developed. Such
                            notices may not be received if you violate this User Agreement by accessing oas36ty in an
                            unauthorized manner. Your agreement to this User Agreement constitutes your agreement that
                            you are deemed to have received any and all notices that would have been delivered had you
                            accessed oas36ty in an authorized manner.</p>
                    </div>
                    <div class="container">
                        <p><strong>TRADEMARK INFORMATION</strong></p>
                    </div>
                    <div class="container">
                        <p>You agree that all of oas36ty’s trademarks, trade names, service marks, and other oas36ty
                            logos and brand features, and product and service names are trademarks and the property of
                            oas36ty.com (the “ oas36ty Marks”). Without oas36ty’s prior permission, you agree not to
                            display or use the oas36ty Marks in any manner.</p>
                    </div>
                    <div class="container">
                        <p><strong>NOTICE AND PROCEDURE FOR MAKING CLAIMS OF COPYRIGHT OR INTELLECTUAL PROPERTY
                                INFRINGEMENT</strong></p>
                    </div>
                    <div class="container">
                        <p>oas36ty respects the intellectual property of others, and we ask our users to do the same.
                            oas36ty may, in appropriate circumstances and at its discretion, disable and/or terminate
                            the accounts of users who may be repeat infringes. If you believe that your work has been
                            copied in a way that constitutes copyright infringement, or your intellectual property
                            rights have been otherwise violated, please provide oas36ty’s Copyright Agent the following
                            information:</p>
                    </div>
                    <div class="container">
                        <p>An electronic or physical signature of the person authorized to act on behalf of the owner of
                            the copyright or other intellectual property interest<br>A description of the copyrighted
                            work or other intellectual property that you claim has been infringed<br>A description of
                            where the material that you claim is infringing is located on the site your address,
                            telephone number, and email address<br>A statement by you that you have a good faith belief
                            that the disputed use is not authorized by the copyright owner, its agent, or the law<br>A
                            statement by you, made under penalty of perjury, that the above information in your notice
                            is accurate and that you are the copyright or intellectual property owner or authorized to
                            act on the copyright or intellectual property owner’s behalf.<br>oas36ty’s Agent for Notice
                            of claims of copyright or other intellectual property infringement can be reached as
                            follows:<br>By email: support@centrik.in with subject: Copyright violation</p>
                    </div>
                    <div class="container">
                        <p><strong>GENERAL INFORMATION</strong></p>
                    </div>
                    <div class="container">
                        <p><strong>Entire Agreement</strong></p>
                    </div>
                    <div class="container">
                        <p>The User Agreement constitutes the entire agreement between you and oas36ty and governs your
                            use of oas36ty, superseding any prior version of this User Agreement between you and oas36ty
                            with respect to oas36ty. You also may be subject to additional terms and conditions that may
                            apply when you use or purchase certain other oas36ty services, affiliate services,
                            third-party content or third-party software.</p>
                    </div>
                    <div class="container">
                        <p><strong>Choice of Law and Forum</strong></p>
                    </div>
                    <div class="container">
                        <p>You and oas36ty each agree that the User Agreement and the relationship between the parties
                            shall be governed by the laws of the State of California without regard to its conflict of
                            law provisions and that any and all claims, causes of action, or disputes (regardless of
                            theory) arising out of or relating to the User Agreement, or the relationship between you
                            and oas36ty, shall be brought exclusively in the courts located in the county of Santa
                            Clara, California or the U.S. District Court for the Northern District of California. You
                            and oas36ty agree to submit to the personal jurisdiction of the courts located within the
                            county of Santa Clara, California or the Northern District of California, and agree to waive
                            any and all objections to the exercise of jurisdiction over the parties by such courts and
                            to venue in such courts.</p>
                    </div>
                    <div class="container">
                        <p><strong>Waiver and Sever-ability of Terms</strong></p>
                    </div>
                    <div class="container">
                        <p>The failure of oas36ty to exercise or enforce any right or provision of the User Agreement
                            shall not constitute a waiver of such right or provision. If any provision of the User
                            Agreement is found by a court of competent jurisdiction to be invalid, the parties
                            nevertheless agree that the court should endeavor to give effect to the parties’ intentions
                            as reflected in the provision, and the other provisions of the User Agreement remain in full
                            force and effect.</p>
                    </div>
                    <div class="container">
                        <p><strong>No Right of Survivor-ship and Non-Transfer-ability</strong></p>
                    </div>
                    <div class="container">
                        <p>You agree that your oas36ty account is non-transferable and any rights to your oas36ty User
                            ID or contents within your account terminate upon your death. Upon receipt of a copy of a
                            death certificate, your account may be terminated and all contents therein permanently
                            deleted.</p>
                    </div>
                    <div class="container">
                        <p><strong>Statute of Limitations</strong></p>
                    </div>
                    <div class="container">
                        <p>You agree that regardless of any statute or law to the contrary, any claim or cause of action
                            arising out of or related to use of oas36ty or the User Agreement must be filed within one
                            (1) year after such claim or cause of action arose or be forever barred.</p>
                    </div>
                    <div class="container">
                        <p>The section titles in the User Agreement are for convenience only and have no legal or
                            contractual effect.</p>
                    </div>
                    <div class="container">
                        <p><strong>VIOLATIONS</strong></p>
                    </div>
                    <div class="container">
                        <p>Please report any violations of the User Agreement to under-mentioned Email-
                            support@centrik.in</p>
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
