<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\logsign;

use Illuminate\View\View;

class LogsignController extends Controller
{
    public function index(): View
    {
        $logsigns = logsign::first();
        return view('logsignAdmin.index', compact('logsigns'));
    }
}
