<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function dashboard()
    {
        $total = Booking::count();
        $confirmed = Booking::where('status', 'confirmed')->count();
        $pending = Booking::where('status', 'pending')->count();

        $today = Booking::whereDate('created_at', Carbon::today())->count();

        $gurney = Booking::where('service_type', 'gurney')->count();
        $wheelchair = Booking::where('service_type', 'wheelchair')->count();
        $ambulatory = Booking::where('service_type', 'ambulatory')->count();

        return view('admin.dashboard', compact(
            'total',
            'confirmed',
            'pending',
            'today',
            'gurney',
            'wheelchair',
            'ambulatory'
        ));
    }
    public function bookings()
    {
        $bookings = Booking::latest()->get();

        return view('admin.bookings', compact('bookings'));
    }
    public function createBooking()
    {
        return view('admin.create-booking');
    }
    public function reports()
    {
        $monthly = Booking::selectRaw('COUNT(*) as total')
            ->whereMonth('created_at', now()->month)
            ->first();

        return view('admin.reports', compact('monthly'));
    }
    public function storeBooking(Request $request)
    {
        $request->validate([
            'service_type' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'pickup_location' => 'required',
            'dropoff_location' => 'required'
        ]);

        // PRICE LOGIC
        $price = 0;

        if ($request->service_type == 'gurney') {
            $price = 120;
        } elseif ($request->service_type == 'wheelchair') {
            $price = 60;
        } elseif ($request->service_type == 'ambulatory') {
            $price = 50;
        }

        // CREATE BOOKING
        Booking::create([
            'service_type' => $request->service_type,
            'name' => $request->name,
            'phone' => $request->phone,
            'pickup_location' => $request->pickup_location,
            'dropoff_location' => $request->dropoff_location,
            'price' => $price,
            'status' => 'pending'
        ]);
        
        return redirect()
            ->route('admin.bookings')
            ->with('success', 'Booking created successfully.');
    }
}
