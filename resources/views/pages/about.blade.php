@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-badge">
                <span class="hero-badge-icon">🏥</span>
                About Advanced Hospital
            </div>
            <h1 class="hero-title">Compassionate care. Advanced medicine.</h1>
            <p class="hero-text">
                Advanced Hospital is a multi-specialty center designed to offer seamless care —
                from emergency treatment to long-term disease management — powered by modern
                infrastructure and a dedicated medical team.
            </p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" style="text-align:left;">
                <h2 class="section-title">Who we are</h2>
                <p class="section-sub">
                    A team of doctors, nurses and healthcare professionals focused on safe,
                    transparent and patient-centric care.
                </p>
            </div>

            <p style="font-size:0.95rem;color:var(--muted);margin-bottom:1rem;">
                Our hospital combines state-of-the-art technology with evidence-based protocols and
                a strong focus on empathy. Every patient receives a personalized care plan with
                clear communication at every step.
            </p>

            <p style="font-size:0.95rem;color:var(--muted);margin-bottom:1rem;">
                With dedicated departments for emergency, cardiology, orthopedics, pediatrics,
                obstetrics & gynecology, and more, we are equipped to handle a wide range of
                medical conditions and procedures.
            </p>
        </div>
    </section>

    @include('components.testimonials')
@endsection


