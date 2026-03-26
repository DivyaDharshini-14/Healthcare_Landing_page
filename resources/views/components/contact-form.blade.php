<section id="contact">
    <div class="container contact-grid">
        <div>
            <div class="section-header" style="text-align:left;margin-bottom:1.2rem;">
                <h2 class="section-title">Book an Appointment</h2>
                <p class="section-sub">
                    Share your details and our care coordinator will call you within 15 minutes.
                </p>
            </div>

            <form method="POST" action="{{ route('lead.store') }}">
                @csrf
                <div>
                    <label for="name">Full Name</label>
                    <input id="name" name="name" type="text" required>
                </div>
                <div>
                    <label for="phone">Phone Number</label>
                    <input id="phone" name="phone" type="tel" required>
                </div>
                <div>
                    <label for="service">Required Service</label>
                    <input id="service" name="service" type="text">
                </div>
                <div>
                    <label for="message">Symptoms / Notes</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <button class="btn-primary" type="submit">Submit Request</button>
            </form>
        </div>

        <div>
            <h3 style="margin-bottom:0.5rem;">Why patients trust us</h3>
            <p style="color:var(--muted); font-size:0.9rem; margin-bottom:1rem;">
                We combine technology with compassionate care.
            </p>
            <ul style="color:var(--muted); font-size:0.9rem; list-style:disc; padding-left:1.2rem;">
                <li>Digital prescriptions & secure records.</li>
                <li>Transparent pricing, no hidden charges.</li>
                <li>Follow-up reminders via SMS & WhatsApp.</li>
            </ul>
        </div>
    </div>
</section>


