@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-badge">
                <span class="hero-badge-icon">📞</span>
                Contact & directions
            </div>
            <h1 class="hero-title">We are here when you need us.</h1>
            <p class="hero-text">
                Reach out for emergency care, appointments, second opinions or general questions
                about our services and facilities.
            </p>
        </div>
    </section>

    <section>
        <div class="container contact-grid">
            <div>
                <div class="section-header" style="text-align:left;margin-bottom:1.5rem;">
                    <h2 class="section-title">Book an appointment</h2>
                    <p class="section-sub">
                        Share your details and our scheduling team will call you within 15 minutes.
                    </p>
                </div>

                @if(session('success'))
                    <div class="alert success">
                        {{ session('success') }}
                    </div>
                @endif

                <form id="contact-form" name="contact" method="POST" action="{{ route('book') }}" class="appointment">
                    @csrf

                    <div class="row">
                        <input type="text" name="name" placeholder="Full name" required>
                        <input type="text" name="phone" placeholder="Phone number" required>
                        <input type="email" name="email" placeholder="Email (optional)">
                    </div>

                    <div class="row">
                        <select name="service_id">
                            <option value="">Select department / service (optional)</option>
                            @foreach($services as $s)
                                <option value="{{ $s->id }}">{{ $s->title }}</option>
                            @endforeach
                        </select>
                        <select name="doctor_id">
                            <option value="">Preferred doctor (optional)</option>
                            @foreach($doctors as $d)
                                <option value="{{ $d->id }}">{{ $d->name }} – {{ $d->specialization }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <input type="date" name="date">
                        <input type="time" name="time">
                    </div>

                    <textarea name="message" placeholder="Briefly describe the concern (optional)"></textarea>

                    <button type="submit" class="btn-primary">Request appointment</button>
                </form>
            </div>

            <div>
                <h3 style="margin-bottom:0.6rem;">Hospital address</h3>
                <p style="font-size:0.9rem;color:var(--muted);">
                    DS HealthCare<br>
                    Health Care Road, City Center<br>
                    Your City – 600000
                </p>

                <h3 style="margin-top:1.4rem;margin-bottom:0.6rem;">Contact details</h3>
                <p style="font-size:0.9rem;color:var(--muted);">
                    Emergency: +91 12345 67890<br>
                    Reception: +91 98765 43210<br>
                    Email: info@dshealthcare.com
                </p>

                <h3 style="margin-top:1.4rem;margin-bottom:0.6rem;">Working hours</h3>
                <p style="font-size:0.9rem;color:var(--muted);">
                    OPD: Monday – Saturday: 8:00 AM – 8:00 PM<br>
                    Emergency: 24/7, 365 days a year
                </p>
            </div>
        </div>
    </section>
@endsection


