<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\account;

use Illuminate\View\View;

class MasterController extends Controller
{
    public function index(): View
    {
        $masters = account::latest()->first();
        return view('masterAdmin.index', compact('masters'));
    }

}