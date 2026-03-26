<header>
    <style>
        /* container */
        .navbar-container {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-inline: 2rem;
            display: flex;
            align-items: center;
            width: 100%;
            gap: 1rem;
        }

        /* layout: left / center / right */
        .nav-left,
        .nav-center,
        .nav-right {
            display: flex;
            align-items: center;
        }

        .nav-left { flex: 0 0 auto; gap: 0.75rem; }
        .nav-center { flex: 1 1 auto; justify-content: center; }
        .nav-right { flex: 0 0 auto; gap: 0.75rem; }

        /* brand */
        .navbar-brand-title {
            font-size: 1.125rem;
            font-weight: 700;
            display: block;
            line-height: 1;
            color: #0f172a;
        }

        .nav-brand img {
            height: 36px;
            width: 36px;
            object-fit: contain;
            border-radius: 6px;
        }

        /* nav links */
        .navbar-links {
            display: flex;
            align-items: center;
            gap: 2.25rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navbar-link {
            font-weight: 500;
            color: #111827;
            text-decoration: none;
            transition: color 0.15s ease, transform 0.15s ease;
            padding: 0.35rem 0;
            display: inline-block;
        }

        .navbar-link:hover {
            color: #2563eb;
            transform: translateY(-1px);
        }

        .navbar-link--active {
            color: #2563eb;
            border-bottom: 2px solid #2563eb;
            padding-bottom: calc(0.35rem - 2px);
        }

        /* right actions */
        .btn-nav {
            font-weight: 600;
            padding: 0.45rem 0.9rem;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: .5rem;
        }
        .btn-primary {
            background: #2563eb;
            color: #fff;
            border: none;
        }
        .btn-outline {
            background: transparent;
            color: #111827;
            border: 1px solid #e5e7eb;
        }

        /* mobile toggle */
        .nav-toggle {
            width:40px;height:40px;border-radius:999px;border:none;background:transparent;cursor:pointer;display:none;
        }

        /* mobile menu (hidden on wider screens) */
        #mobile-nav {
            display: none;
            width: 100%;
            padding-top: 0.5rem;
        }

        /* responsive */
        @media (max-width: 991px) {
            .nav-center { justify-content: flex-end; } /* keep space for toggle */
            .navbar-links { gap: 1rem; }
            .nav-right { display: none; } /* hide right actions on smaller screens */
            .nav-toggle { display: inline-flex; } /* show hamburger */
        }

        @media (max-width: 767px) {
            .navbar-container { padding-inline: 1rem; }
            .nav-center { display: none; } /* hide desktop center nav */
            #mobile-nav { display: block; }
            #navLinks { width: 100%; }
            #mobile-nav .mobile-links { display:block; padding: .5rem 0; border-top:1px solid #f1f5f9; }
            #mobile-nav .mobile-links a { display:block; padding: .7rem 0; color: #111827; text-decoration:none; }
            .nav-left .navbar-brand-title { font-size: 1rem; }
        }
    </style>

    <nav class="fixed w-full start-0 border-b bg-white">
        <div class="container nav navbar-container">
            <!-- LEFT: Brand -->
            <div class="nav-left nav-brand" style="display:flex;align-items:center;gap:10rem;white-space:nowrap;">
                <a href="{{ route('home') }}" style="display:flex;align-items:center;gap:0.75rem;text-decoration:none;">
                    <img src="{{ asset('storage/images/Black Modern Circle Business Initials Video Logo.png') }}" alt="DS HealthCare logo">
                    <span class="brand-title navbar-brand-title">DS HealthCare</span>
                </a>
            </div>

            <!-- MOBILE TOGGLE -->
            <button
                id="navToggle"
                aria-controls="navbar-solid"
                aria-expanded="false"
                class="nav-toggle"
                type="button"
                onclick="document.getElementById('mobile-nav').classList.toggle('d-block')"
                aria-label="Toggle navigation">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                     fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                </svg>
            </button>

            <!-- CENTER: Nav links (desktop centered) -->
         <!-- NAV LINKS aligned to the right, full-width -->
            <div class="nav-links-wrapper" style="
                display: flex;
                justify-content: flex-end;
                flex: 1 1 auto;
            ">
                <ul class="nav-links navbar-links" id="navbar-solid">
                    <li><a href="{{ route('home') }}" class="navbar-link navbar-link--active">Home</a></li>
                    <li><a href="{{ route('services') }}" class="navbar-link">Services</a></li>
                    <li><a href="{{ route('facilities') }}" class="navbar-link">Facilities</a></li>
                    <li><a href="{{ route('faq') }}" class="navbar-link">FAQ</a></li>
                    <li><a href="{{ route('contact') }}" class="navbar-link">Contact</a></li>
                </ul>
            </div>


            <!-- RIGHT: actions (Book, Call) -->
            <div class="nav-right" id="navLinks">
                <a href="{{ route('booking') }}" class="btn-nav btn-primary">Book Appointment</a>
                <a href="tel:102" class="btn-nav btn-outline">Call: 102</a>
            </div>
        </div>

        <!-- MOBILE NAV (visible under 768px) -->
        <div id="mobile-nav" style="display:none;padding:0 1rem;">
            <div class="mobile-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('facilities') }}">Facilities</a>
                <a href="{{ route('faq') }}">FAQ</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('booking') }}">Book Appointment</a>
                <a href="tel:102">Call: 102</a>
            </div>
        </div>
    </nav>
</header>
