@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-badge">
                <span class="hero-badge-icon">💊</span>
                Departments & specialties
            </div>
            <h1 class="hero-title">Hospital services & specialties</h1>
            <p class="hero-text">
                Explore our key departments and programs, all connected through a unified
                electronic medical record for continuous care.
            </p>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Services we provide</h2>
                <p class="section-sub">Comprehensive care across general medicine and specialties.</p>
            </div>

            <div class="grid-3">
                {{-- General Care --}}
                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">🏥</div>
                        <h3>General Care</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);margin-bottom:0.75rem;">
                        Routine checkups, preventive care, family medicine.
                    </p>
                    <ul class="key-points">
                        <li>Annual health checks</li>
                        <li>Management of chronic conditions</li>
                        <li>Vaccination & immunization</li>
                    </ul>
                </div>

                {{-- Cardiology --}}
                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">❤️</div>
                        <h3>Cardiology</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);margin-bottom:0.75rem;">
                        Diagnostics and treatment for heart conditions.
                    </p>
                    <ul class="key-points">
                        <li>ECG, Echo, TMT</li>
                        <li>Heart risk assessment</li>
                        <li>Post-op cardiac rehab</li>
                    </ul>
                </div>

                {{-- Dermatology --}}
                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">✨</div>
                        <h3>Dermatology</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);margin-bottom:0.75rem;">
                        Skin, hair and nail care including cosmetic concerns.
                    </p>
                    <ul class="key-points">
                        <li>Acne & scar treatments</li>
                        <li>Eczema & psoriasis management</li>
                        <li>Mole checks & biopsy</li>
                    </ul>
                </div>

                {{-- Pediatrics --}}
                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">👶</div>
                        <h3>Pediatrics</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);margin-bottom:0.75rem;">
                        Specialized care for infants, children and adolescents.
                    </p>
                    <ul class="key-points">
                        <li>Growth & development monitoring</li>
                        <li>Childhood vaccinations</li>
                        <li>Pediatric emergencies</li>
                    </ul>
                </div>

                {{-- Gynecology --}}
                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">👩</div>
                        <h3>Gynecology</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);margin-bottom:0.75rem;">
                        Women's health services and reproductive care.
                    </p>
                    <ul class="key-points">
                        <li>Routine gynecological exams</li>
                        <li>Prenatal & postnatal care</li>
                        <li>Menopause management</li>
                    </ul>
                </div>

                {{-- Orthopedics --}}
                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">🦴</div>
                        <h3>Orthopedics</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);margin-bottom:0.75rem;">
                        Treatment for bone, joint and muscle conditions.
                    </p>
                    <ul class="key-points">
                        <li>Fracture management</li>
                        <li>Joint pain & arthritis</li>
                        <li>Sports injury rehabilitation</li>
                    </ul>
                </div>

                {{-- Mental Wellness --}}
                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">🧠</div>
                        <h3>Mental Wellness</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);margin-bottom:0.75rem;">
                        Counseling and therapy for mental health support.
                    </p>
                    <ul class="key-points">
                        <li>Anxiety & depression therapy</li>
                        <li>Stress management</li>
                        <li>Family counseling</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Not sure which department to choose?</h2>
                <p class="section-sub">
                    Share your symptoms and our triage team will guide you to the right specialist.
                </p>
            </div>
            <div style="text-align:center;">
                <a href="{{ route('contact') }}">
                    <button class="btn-primary" type="button">Talk to our care coordinator</button>
                </a>
            </div>
        </div>
    </section>
@endsection



