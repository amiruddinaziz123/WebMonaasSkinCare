<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\account;

use Illuminate\View\View;

class ProfilController extends Controller
{
    public function index(): View
    {
        $accounts = account::latest()->first();
        return view('profil.index', compact('accounts'));
    }
}
