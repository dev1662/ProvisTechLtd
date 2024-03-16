<style>
    .chat-widget {
        background-color: #FF6060;
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        z-index: 2;
        transition: all 700ms;
        cursor: pointer;
    }

    .chat-widget.active {
        transform: rotate(360deg)
    }

    .chat-buttons {
        position: fixed;
        bottom: 0;
        right: 25px;
        display: flex;
        flex-direction: column;
        opacity: 0;
        visibility: hidden;
        transition: all 700ms;
        z-index: 1;
    }

    .chat-button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        margin-bottom: 10px;
    }

    .chat-button:hover {
        color: #fff;
    }

    .chat-button:nth-child(1) {
        background-color: #F4331E;
    }

    .chat-button:nth-child(2) {
        background-color: #49E670;
    }

    .chat-buttons.active {
        bottom: 75px;
        visibility: visible;
        opacity: 1;
    }

    .chat-buttons i,
    .chat-widget i {
        font-size: 2em;
    }
</style>

<footer id="footer" style="padding-bottom: 0;">
    <div class="footer-top" style="padding-bottom:0;">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>Oas36ty.com</h3>
                    <p>
                        A distinctive AI/ML SaaS application for complete office automation. It Automates the
                        work-place operations and contrasting subdivision in sequence so that no lead/task is
                        skipped.<br><br>
                        <span>
                            © Oas36ty 2023, All Rights Reserved.

                        </span>
                        {{-- <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@oas36ty.com<br> --}}
                    </p>

                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Specifications</h4>
                    <ul>
                        {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Features</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
                        <li><a class="nav-link scrollto" href="{{ route('oas-features') }}">Features</a>
                        </li>
                        {{-- <li><a class="nav-link scrollto" href="https://www.oas36ty.com/pricing/">Pricing</a></li> --}}
                        <li><a class="nav-link scrollto" href="{{ route('oas-features') }}">Security</a>
                        </li>

                        <li><a class="nav-link scrollto" href="{{ route('oas-explore') }}">Explore</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('oas-updates') }}">Updates</a></li>
                        {{-- <li><a class="nav-link scrollto" href="https://www.oas36ty.com/contact-us/">Contact</a></li> --}}
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Company</h4>
                    <ul>
                        <li><a class="nav-link scrollto" href="https://app.oas36ty.com/">Login</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('blogs-show') }}">Blogs</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('faq') }}">FAQ</a></li>

                        <li><a class="nav-link scrollto" href="{{ route('oas-terms') }}">Terms of Use</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('oas-privacy') }}">Privacy
                                Policy</a></li>
                    </ul>
                    {{-- <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul> --}}
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Get Started</h4>
                    {{-- <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul> --}}
                    <div>
                        We provide unique features and quality services to manage your business end to end. Check
                        out right now.


                    </div>
                    <div style="margin-top:2rem;">

                        <a href="https://www.oas36ty.com/book-a-demo">
                            <button class="book-demo">
                                Try Now
                            </button>
                        </a>
                        <a href="{{ route('oas-contact') }}">
                            <button class="book-demo">
                                Contact
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 offset-lg-8 col-md-6 offset-md-6">
                        <small style="margin-block:1rem;padding-inline:16px;display:block;">Powered by Novative Solutions Pvt
                            Ltd.</small>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>

      </div> --}}
            </div>
        </div>
        <div class="container mb-3">
            <div class="social-links">
                <a href="https://twitter.com/oas36ty" target="__blank" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/oas36ty" target="__blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/_oas36ty_/" target="__blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/oas36ty/" target="__blank" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <div class="chat-widget" id="chatWidget">
        <i class="bi bi-chat-left-text-fill"></i>
    </div>

    <div class="chat-buttons" id="chatButtons">
        <a href="tel:8448454185" class="chat-button">
            <i class="bi bi-telephone"></i>

        </a>
        <a href="https://wa.me/8448454185" class="chat-button" target="_blank">
            <i class="bi bi-whatsapp"></i>

        </a>
    </div>
    {{-- <div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div> --}}
</footer>
<script>
    const chatWidget = document.getElementById('chatWidget');
    const chatButtons = document.getElementById('chatButtons');

    chatWidget.addEventListener('click', function() {
        chatButtons.classList.toggle('active');
        chatWidget.classList.toggle('active');

        // Change the icons based on the 'active' class
        const chatIcon = chatWidget.querySelector('.bi-chat-left-text-fill');
        const closeIcon = chatWidget.querySelector('.bi-x-lg');

        if (chatButtons.classList.contains('active')) {
            chatIcon.classList.replace('bi-chat-left-text-fill', 'bi-x-lg');
        } else {
            closeIcon.classList.replace('bi-x-lg', 'bi-chat-left-text-fill');
        }
    });
</script>
