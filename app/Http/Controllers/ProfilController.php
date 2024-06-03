<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\navbar;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfilController extends Controller
{
    public function index(): View
    {
        $navbars = navbar::all();
        $user = Auth::user();
        return view('profil.index', compact('user', 'navbars'));
    }
}
