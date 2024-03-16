<header id="header" class="d-flex align-items-center position-sticky top-0">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <a href="{{ route('oas-index') }}"><img src="{{ asset('07/logo-1.png') }}" alt=""></a>

        </div>

        <nav id="navbar" class="navbar">
            <ul style="gap: 2rem">
                <li><a class="nav-link scrollto {{ Route::is('oas-index') ? 'active' : '' }}"
                        href="{{ route('oas-index') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ Route::is('oas-features') ? 'active' : '' }}"
                        href="{{ route('oas-features') }}">Features</a></li>
                <li><a class="nav-link scrollto {{ Route::is('pricing') ? 'active' : '' }}"
                        href="{{ route('pricing') }}">Pricing</a></li>
                <li><a class="nav-link scrollto {{ Route::is('oas-explore') ? 'active' : '' }}"
                        href="{{ route('oas-explore') }}">Explore</a></li>
                <li><a class="nav-link scrollto {{ Route::is('blogs-show') ? 'active' : '' }}"
                        href="{{ route('blogs-show') }}">Blogs</a></li>
                <li><a class="nav-link scrollto {{ Route::is('oas-contact') ? 'active' : '' }}"
                        href="{{ route('oas-contact') }}">Contact</a></li>



                <a href="{{ route('book-demo') }}">
                    <button class="btn-get-started ">

                        Book Demo
                    </button>
                </a>
                <a href="{{ route('register-new') }}">
                    <button class="btn-get-started ">
                        Register
                    </button>

                </a>
                <a href="https://app.oas36ty.com/">
                    <button class="btn-get-started ">
                        Login
                    </button>

                </a>
            </ul>




            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
