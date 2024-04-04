<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import Model "jamBooking
use App\Models\jamBooking;

//return type View
use Illuminate\View\View;

class jamBookingController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $jamBookings = jamBooking::all();

        //render view with posts
        return view('/booking.index', compact('jamBookings'));
    }
}
