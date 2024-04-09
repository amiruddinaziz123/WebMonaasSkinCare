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
    
        // Iterate through each jamBooking object and extract the substring
        foreach ($jamBookings as $jamBooking) {
            $jamBooking->jam_ke = substr($jamBooking->jam_ke, 0, 5);
        }
    
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
