<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\JamBooking;
use App\Models\Booking;
use App\Models\dokters;

class BookingController extends Controller
{
    public function index()
    {
        $dokters = dokters::all();
        $jamBookings = JamBooking::all();
    
        foreach ($jamBookings as $jamBooking) {
            $jamBooking->jam_ke = substr($jamBooking->jam_ke, 0, 5);
        }
    
        return view('booking.index', compact('dokters', 'jamBookings'));
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

        // Send email
        $userEmail = "siapaakuwhoami83@gmail.com";
        $namaUser = $request->nama_user;
        $noTelp = $request->no_telp;


        Booking::create($validatedData);
        

        return Redirect::route('booking.index');
    }
}
