<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\logsign;

use Illuminate\View\View;

class navbarAdminController extends Controller
{
    public function index(): View
    {
        $logsigns = logsign::all();

        return view('navbarAdmin.index', compact('logsigns'));
    }
}
