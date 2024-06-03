<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\navbar;

use Illuminate\View\View;

class ProfilController extends Controller
{
    public function index(): View
    {
        $navbars = navbar::all();
        $accounts = User::latest()->first();
        return view('profil.index', compact('accounts', 'navbars'));
    }
}
