<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\dokters;
use App\Models\jamBooking;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * index
     *
     * @return View
     */

    public function index(): View
    {
        //get posts
        $dokters = dokters::all();
        $jamBookings = jamBooking::all();

        //render view with posts
        return view('/booking.index', compact('dokters', 'jamBookings'));
    }

    public function store(Request $request)
    {
        // Validate the request...

        $validatedData = $request->validate([
            'nama_user' => 'required',
            'no_telp' => 'required',
            'tanggal_booking' => 'required',
            'nama_dokter' => 'required',
        ]);

        $booking = Booking::create($validatedData);

        return redirect()->route('booking.index');
    }
}
