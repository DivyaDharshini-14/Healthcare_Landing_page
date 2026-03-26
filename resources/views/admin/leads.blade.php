<x-layouts.app :title="'Leads – DS HealthCare'">
    <main class="container" style="padding-top:2rem;padding-bottom:2rem;">
        <h1 class="section-title" style="margin-bottom:1rem;">Leads</h1>
        <p class="section-sub" style="margin-bottom:1.5rem;">
            Latest contact requests from your landing page.
        </p>

        @if($leads->isEmpty())
            <p style="font-size:0.9rem;color:var(--muted);">No leads yet.</p>
        @else
            <div style="overflow-x:auto;">
                <table style="width:100%;border-collapse:collapse;font-size:0.9rem;">
                    <thead>
                        <tr style="text-align:left;border-bottom:1px solid #e5e7eb;">
                            <th style="padding:0.5rem;">Name</th>
                            <th style="padding:0.5rem;">Phone</th>
                            <th style="padding:0.5rem;">Service</th>
                            <th style="padding:0.5rem;">Message</th>
                            <th style="padding:0.5rem;">Submitted At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($leads as $lead)
                            <tr style="border-bottom:1px solid #f3f4f6;">
                                <td style="padding:0.5rem;">{{ $lead->name }}</td>
                                <td style="padding:0.5rem;">{{ $lead->phone }}</td>
                                <td style="padding:0.5rem;">{{ $lead->service }}</td>
                                <td style="padding:0.5rem;max-width:280px;white-space:pre-wrap;">
                                    {{ \Illuminate\Support\Str::limit($lead->message, 160) }}
                                </td>
                                <td style="padding:0.5rem;color:var(--muted);">
                                    {{ $lead->created_at->format('Y-m-d H:i') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div style="margin-top:1rem;">
                {{ $leads->links() }}
            </div>
        @endif
    </main>
</x-layouts.app>


