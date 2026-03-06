<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    // Show booking form
    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_type' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'pickup_location' => 'required',
            'dropoff_location' => 'required',
        ]);

        // Simple pricing logic
        $price = 0;

        if ($request->service_type == 'Wheelchair') {
            $price = 50;
        } elseif ($request->service_type == 'Gurney') {
            $price = 80;
        } elseif ($request->service_type == 'Ambulatory') {
            $price = 40;
        }

        Booking::create([
            'service_type' => $request->service_type,
            'name' => $request->name,
            'phone' => $request->phone,
            'pickup_location' => $request->pickup_location,
            'dropoff_location' => $request->dropoff_location,
            'price' => $price,
            'status' => 'pending'
        ]);

        return redirect()->route('booking.create')
            ->with('success', 'Booking submitted successfully!');
    }
}
