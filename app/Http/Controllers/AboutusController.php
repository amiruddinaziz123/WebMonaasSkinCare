<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\about;

use Illuminate\View\View;

class AboutusController extends Controller
{
    public function index(): View
    {
        $abouts = about::latest()->first();
        return view('aboutus.index', compact('abouts'));
    }
}
