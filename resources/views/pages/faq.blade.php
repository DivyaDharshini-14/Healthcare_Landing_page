@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-badge">
                <span class="hero-badge-icon">❓</span>
                Frequently Asked Questions
            </div>
            <h1 class="hero-title">Common questions answered</h1>
            <p class="hero-text">
                Find quick answers to the most frequently asked questions about our services,
                appointments, and facilities.
            </p>
        </div>
    </section>

    <section id="faq">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently asked questions</h2>
                <p class="section-sub">Quick answers to common questions about our services.</p>
            </div>

            <div style="max-width:800px;margin:0 auto;display:grid;gap:0.75rem;">
                <details style="border:1px solid #e5e7eb;border-radius:10px;padding:1rem;cursor:pointer;">
                    <summary style="font-weight:600;font-size:0.95rem;color:var(--text-main);cursor:pointer;list-style:none;">
                        <span style="display:flex;align-items:center;justify-content:space-between;">
                            What are your working hours?
                            <span style="font-size:1.2rem;color:var(--primary-dark);">+</span>
                        </span>
                    </summary>
                    <p style="margin-top:0.75rem;font-size:0.9rem;color:var(--muted);padding-left:1rem;">
                        Open 8:00 AM – 8:00 PM (Mon–Sat). Emergency services 24/7.
                    </p>
                </details>

                <details style="border:1px solid #e5e7eb;border-radius:10px;padding:1rem;cursor:pointer;">
                    <summary style="font-weight:600;font-size:0.95rem;color:var(--text-main);cursor:pointer;list-style:none;">
                        <span style="display:flex;align-items:center;justify-content:space-between;">
                            Do you accept insurance?
                            <span style="font-size:1.2rem;color:var(--primary-dark);">+</span>
                        </span>
                    </summary>
                    <p style="margin-top:0.75rem;font-size:0.9rem;color:var(--muted);padding-left:1rem;">
                        We accept most major insurance providers; please call to confirm cashless options.
                    </p>
                </details>

                <details style="border:1px solid #e5e7eb;border-radius:10px;padding:1rem;cursor:pointer;">
                    <summary style="font-weight:600;font-size:0.95rem;color:var(--text-main);cursor:pointer;list-style:none;">
                        <span style="display:flex;align-items:center;justify-content:space-between;">
                            How do I get my lab reports?
                            <span style="font-size:1.2rem;color:var(--primary-dark);">+</span>
                        </span>
                    </summary>
                    <p style="margin-top:0.75rem;font-size:0.9rem;color:var(--muted);padding-left:1rem;">
                        Reports are shared via secure email and downloadable from your account within 24 hours.
                    </p>
                </details>

                <details style="border:1px solid #e5e7eb;border-radius:10px;padding:1rem;cursor:pointer;">
                    <summary style="font-weight:600;font-size:0.95rem;color:var(--text-main);cursor:pointer;list-style:none;">
                        <span style="display:flex;align-items:center;justify-content:space-between;">
                            Can I book appointments online?
                            <span style="font-size:1.2rem;color:var(--primary-dark);">+</span>
                        </span>
                    </summary>
                    <p style="margin-top:0.75rem;font-size:0.9rem;color:var(--muted);padding-left:1rem;">
                        Yes, you can book appointments through our online form. Our team will call you within 15 minutes to confirm.
                    </p>
                </details>

                <details style="border:1px solid #e5e7eb;border-radius:10px;padding:1rem;cursor:pointer;">
                    <summary style="font-weight:600;font-size:0.95rem;color:var(--text-main);cursor:pointer;list-style:none;">
                        <span style="display:flex;align-items:center;justify-content:space-between;">
                            Do you offer home sample collection?
                            <span style="font-size:1.2rem;color:var(--primary-dark);">+</span>
                        </span>
                    </summary>
                    <p style="margin-top:0.75rem;font-size:0.9rem;color:var(--muted);padding-left:1rem;">
                        Yes, we provide home sample collection services. Book a slot and our phlebotomist will visit you.
                    </p>
                </details>
            </div>
        </div>
    </section>
@endsection

