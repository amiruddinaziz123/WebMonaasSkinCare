<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\navbar;

use Illuminate\View\View;

class navbarAdminController extends Controller
{
    public function index(): View
    {
        $navbars = navbar::all();

        return view('components.navbar', compact('navbars'));
    }
}
