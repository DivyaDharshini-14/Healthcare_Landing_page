@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-badge">
                <span class="hero-badge-icon">📅</span>
                Book Appointment
            </div>
            <h1 class="hero-title">Schedule your visit</h1>
            <p class="hero-text">
                Share your details and our scheduling team will call you within 15 minutes
                to confirm your appointment.
            </p>
        </div>
    </section>

    <section id="contact">
        <div class="container appointment">
            <div class="section-header" style="text-align:left;">
                <h2 class="section-title">Book an appointment</h2>
                <p class="section-sub">
                    Fill out the form below and we'll get back to you shortly.
                </p>
            </div>

            @if(session('success'))
                <div class="alert success">
                    {{ session('success') }}
                </div>
            @endif

            <form id="contact-form" name="contact" method="POST" action="{{ route('book') }}">
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
    </section>
@endsection

