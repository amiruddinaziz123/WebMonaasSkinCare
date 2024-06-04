<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Models\JamBooking;
use App\Models\Booking;
use App\Models\dokters;
use App\Models\navbar;
use App\Models\account;
use App\Models\product;

class BookingController extends Controller
{
    public function index()
    {
        $dokters = dokters::all();
        $jamBookings = JamBooking::all();
        $navbars = navbar::all();
        $accounts = account::all();
    
        foreach ($jamBookings as $jamBooking) {
            $jamBooking->jam_ke = substr($jamBooking->jam_ke, 0, 5);
        }
    
        return view('booking.index', compact('dokters', 'jamBookings', 'navbars', 'accounts'));
    }
    
    public function landingPage()
    {
        $navbars = navbar::all();
        $products = product::where('status_aktif', '=', 'aktif')->get();
    
        return view('landingPage', compact('navbars', 'products'));
    }

    public function bookingAdmin()
    {
        $dokters = dokters::all();
        $jamBookings = JamBooking::all();
        $navbars = navbar::all();
        $bookings = Booking::all();
    
        foreach ($jamBookings as $jamBooking) {
            $jamBooking->jam_ke = substr($jamBooking->jam_ke, 0, 5);
        }
    
        return view('bookingAdmin.index', compact('dokters', 'jamBookings', 'navbars', 'bookings'));
    }

    public function destroy($id)
    {
        $bookings = Booking::findOrFail($id);

        $bookings->delete();
        return redirect()->route('bookingAdmin.index');
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

    public function edit($id): View
    {
        //get post by ID
        $bookings = Booking::findOrFail($id);

        //render view with post
        return view('bookingAdmin.edit', compact('bookings'));
    }


    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'tanggal_booking'     => 'required',
            'jam_booking'   => 'required',
            'nama_dokter'   => 'required',
        ]);

        //get post by ID
        $bookings = Booking::findOrFail($id);

        //update post without image
        $bookings->update([
            'tanggal_booking'     => $request->tanggal_booking,
            'jam_booking'   => $request->jam_booking,
            'nama_dokter'   => $request->nama_dokter,
        ]);

        //redirect to index
        return redirect()->route('bookingAdmin.index');
    }
}
