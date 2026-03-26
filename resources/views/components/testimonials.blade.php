<section id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">What our patients say</h2>
            <p class="section-sub">Stories of recovery, reassurance and long-term care.</p>
        </div>

        <div class="grid-3">
            @foreach($testimonials as $t)
                <div class="card">
                    <div class="card-header">
                        <div class="icon-circle">💬</div>
                        <h3 style="font-size:0.95rem;">“Patient experience”</h3>
                    </div>
                    <p style="font-size:0.9rem;">
                        “{{ $t->message }}”
                    </p>
                    <p style="margin-top:0.75rem;font-weight:600;">{{ $t->name }}</p>
                    @if($t->designation)
                        <p style="font-size:0.8rem;color:var(--muted);">{{ $t->designation }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>


