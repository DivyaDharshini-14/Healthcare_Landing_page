<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Store a new lead from the contact form.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:30',
            'service' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        Lead::create($data);

        return redirect()
            ->route('landing')
            ->with('success', 'Thank you! Our team will reach you shortly.');
    }

    /**
     * Display a simple admin listing of leads.
     */
    public function index()
    {
        $leads = Lead::latest()->paginate(20);

        return view('admin.leads', compact('leads'));
    }
}


