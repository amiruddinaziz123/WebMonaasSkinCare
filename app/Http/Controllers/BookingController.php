<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\dokters;
use App\Models\jamBooking;

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
}
