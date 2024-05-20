<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\JamBooking;
use App\Models\Booking;
use App\Models\dokters;
use App\Models\navbar;

class BookingController extends Controller
{
    public function index()
    {
        $dokters = dokters::all();
        $jamBookings = JamBooking::all();
        $navbars = navbar::all();
    
        foreach ($jamBookings as $jamBooking) {
            $jamBooking->jam_ke = substr($jamBooking->jam_ke, 0, 5);
        }
    
        return view('booking.index', compact('dokters', 'jamBookings', 'navbars'));
    }

    public function bookingAdmin()
    {
        $dokters = dokters::all();
        $jamBookings = JamBooking::all();
        $navbars = navbar::all();
    
        foreach ($jamBookings as $jamBooking) {
            $jamBooking->jam_ke = substr($jamBooking->jam_ke, 0, 5);
        }
    
        return view('bookingAdmin.index', compact('dokters', 'jamBookings', 'navbars'));
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_user' => 'required',
            'no_telp' => 'required',
            'tanggal_booking' => 'required',
            'jam_booking' => 'required',
            'nama_dokter' => 'required',
        ], [
            'nama_user.required' => 'Nama user harus diisi',
            'no_telp.required' => 'Nomor telepon harus diisi',
            'tanggal_booking.required' => 'Tanggal booking harus diisi',
            'jam_booking.required' => 'Jam booking harus diisi',
            'nama_dokter.required' => 'Nama dokter harus diisi',
        ]);


        Booking::create($validatedData);
        

        return Redirect::route('booking.index');
    }
}
