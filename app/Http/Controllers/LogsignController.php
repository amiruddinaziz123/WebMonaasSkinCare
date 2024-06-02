<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\logsign;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use Illuminate\View\View;

use Illuminate\Support\Str;

class LogsignController extends Controller
{
    public function index(): View
    {
        $logsigns = logsign::latest()->first();
        return view('logsignAdmin.index', compact('logsigns'));
    }

    public function indexLogin(): View
    {
        $logsigns = logsign::latest()->first();
        return view('login.index', compact('logsigns'));
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('/')->withSuccess('Signed In');
        }
            return redirect()->route('login.index')->withSuccess('Email atau Password salah!');
    }

    public function indexSignup(): View
    {
        $logsigns = logsign::latest()->first();
        return view('signup.index', compact('logsigns'));
    }

    public function store(request $request)
    {
        $this->validate($request,[
        'image' =>'required|file|mimes:jpeg,png,jpg',
        'text'  =>'required'
    ]);

    // Simpan file yang diunggah ke storage dengan nama yang unik
    $image = $request->file('image');
    $imageName = $image->getClientOriginalName(); // Ambil nama file asli
    $image->move(public_path('img'), $imageName); // Simpan file di dalam direktori public/img

    logsign::create ([
        'image'             =>$imageName,
        'text'              =>$request->text,
        'created_at'        =>NOW()
    ]);

    return redirect()->route('logsignAdmin.index')->with(
        ['success'=> 'Data Berhasil Ditambah!'] 
    ); 
    }

    public function storeSignup(Request $request)
{
    $this->validate($request, [
        'email' => 'required|min:8|unique:users,email',
        'password' => 'required|min:8',
        'username' => 'required|min:8',
        'no_telp' => 'required|min:10',
    ], [
        'email.required' => 'Email wajib diisi!!!',
        'password.required' => 'Password wajib diisi!!!',
        'username.required' => 'Username wajib diisi!!!',
        'no_telp.required' => 'No. Telepon wajib diisi!!!',
        'email.unique' => 'Email sudah terdaftar!!!',
        'password.min' => 'Password harus lebih dari 8 karakter!!!',
        'username.min' => 'Username harus lebih dari 8 karakter!!!',
        'no_telp.min' => 'No. Telepon harus lebih dari 10 karakter!!!',
    ]);

    // Periksa apakah email sudah ada
    $existingEmail = User::where('email', $request->email)->exists();
    if ($existingEmail) {
        return redirect()->back()->withInput()->withErrors(['email' => 'Email sudah terdaftar!!!']);
    }

    $slug = Str::slug($request->username, '-');

    User::create([
        'email' => $request->email,
        'password' => $request->password,
        'username' => $request->username,
        'no_telp' => $request->no_telp,
        'status_aktif' => $request->status_aktif,
        'slug_link' => $slug,
        'created_at' => now(),
    ]);

    return redirect('/login')->with(['success' => 'Silahkan Login dengan Email dan Password yang sudah didaftarkan!!!']);
}

}