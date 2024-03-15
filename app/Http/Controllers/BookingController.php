<?php

namespace App\Http\Controllers;

use App\Models\dokters;
use Illuminate\View\View;
use Illuminate\Http\Request;

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

        //render view with posts
        return view('/booking.index', compact('dokters'));
    }
}
