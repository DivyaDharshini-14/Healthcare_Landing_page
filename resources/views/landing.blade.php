<x-layouts.app :title="'DS HealthCare – Modern Healthcare for your family'">
    <x-navbar />

    @if(session('success'))
        <div class="container" style="margin-top:1rem;">
            <div style="padding:0.75rem 1rem;border-radius:10px;background:#ecfdf5;color:#166534;font-size:0.9rem;">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <main>
        <x-hero />
        <x-services />
        <x-contact-form />
    </main>

    <x-site-footer />
</x-layouts.app>


