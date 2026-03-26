@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-badge">
                <span class="hero-badge-icon">🏥</span>
                Facilities & Infrastructure
            </div>
            <h1 class="hero-title">Modern facilities for patient care</h1>
            <p class="hero-text">
                Our state-of-the-art infrastructure is designed to provide the highest quality healthcare
                with comfort and efficiency.
            </p>
        </div>
    </section>

    <section id="facilities" style="background:#f9fafb;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Facilities & Infrastructure</h2>
                <p class="section-sub">Modern infrastructure designed for patient comfort and care excellence.</p>
            </div>

            <div class="grid-3">
                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">🔬</div>
                        <h3>Diagnostic Lab</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);">
                        NABL-certified lab with same-day reports for most tests. Advanced equipment for accurate diagnostics.
                    </p>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">🚨</div>
                        <h3>Emergency & ICU</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);">
                        24/7 emergency care with trained staff and continuous monitoring. Fully equipped ICU for critical cases.
                    </p>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">💊</div>
                        <h3>Pharmacy & Telehealth</h3>
                    </div>
                    <p style="font-size:0.85rem;color:var(--muted);">
                        On-site pharmacy and teleconsult platform for remote follow-ups. Digital prescriptions and secure records.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

