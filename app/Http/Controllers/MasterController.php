<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\account;

use Illuminate\View\View;

use Illuminate\Support\Str;

class MasterController extends Controller
{
    public function index(): View
    {
        $masters = account::latest()->first();
        return view('masterAdmin.index', compact('masters'));
    }

    public function indexCustomer(): View
    {
        $customers = account::all();
        return view('customerAdmin.index', compact('customers'));
    }

    public function store(request $request)
    {
        $this->validate($request,[
        'email_user' =>'required|min:8|unique:accounts',
        'password_user'  =>'required',
        'username_user'  =>'required',
        'no_telp_user'  =>'required',
    ]);

    $slug = str::slug($request->username_user, '-');

    account::create ([
        'email_user'             =>$request->email_user,
        'password_user'          =>$request->password_user,
        'username_user'          =>$request->username_user,
        'no_telp_user'           =>$request->no_telp_user,
        'slug_link'              =>$slug,
        'created_at'             =>NOW()
    ]);

    return redirect()->route('customerAdmin.index')->with(
        ['success'=> 'Data Berhasil Ditambah!'] 
    ); 
    }
}