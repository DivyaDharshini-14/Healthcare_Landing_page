<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function sharedData(): array
    {
        return [
            'services'     => Service::orderBy('id')->get(),
            'doctors'      => Doctor::orderBy('id')->get(),
            'testimonials' => Testimonial::orderBy('id')->get(),
        ];
    }

    public function home()
    {
        return view('pages.home', $this->sharedData());
    }

    public function about()
    {
        return view('pages.about', $this->sharedData());
    }

    public function servicesPage()
    {
        return view('pages.services', $this->sharedData());
    }

    public function contact()
    {
        return view('pages.contact', $this->sharedData());
    }

    public function facilities()
    {
        return view('pages.facilities', $this->sharedData());
    }

    public function faq()
    {
        return view('pages.faq', $this->sharedData());
    }

    public function booking()
    {
        return view('pages.booking', $this->sharedData());
    }

    public function book(Request $request)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'phone'      => 'required|string|max:45',
            'email'      => 'nullable|email',
            'service_id' => 'nullable|exists:services,id',
            'doctor_id'  => 'nullable|exists:doctors,id',
            'date'       => 'nullable|date',
            'time'       => 'nullable',
            'message'    => 'nullable|string',
        ]);

        Appointment::create($data);

        if ($request->wantsJson()) {
            return response()->json([
                'status'  => 'ok',
                'message' => 'Appointment booked',
            ]);
        }

        return back()->with('success', 'Appointment requested. We will contact you soon.');
    }
}


