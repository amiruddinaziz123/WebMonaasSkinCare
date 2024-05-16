<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;

use App\Models\navbar;

class navbarAdminController extends Controller
{
    public function index(): View
    {
        $navbars = navbar::all();

        return view('navbarAdmin.index', compact('navbars'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required', // Hanya menerima format JPEG, PNG, dan JPG
            'judul' => 'required',
            'background_color' => 'required',
        ], [
            'image.required' => 'Gambar harus diunggah',
            'image.required' => 'File harus berupa gambar',
            'judul.required' => 'Judul harus diisi',
            'background_color.required' => 'Warna latar belakang harus dipilih',
        ]);

        // Simpan file yang diunggah ke storage dengan nama yang unik
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName(); // Ambil nama file asli
        $image->storeAs('public/img', $imageName); // Simpan file dengan nama asli

        // Buat data untuk disimpan ke database
        $data = [
            'image' => $imageName, // Simpan nama file ke dalam basis data
            'judul' => $validatedData['judul'],
            'background_color' => $validatedData['background_color'],
        ];

        // Simpan data ke database
        Navbar::create($data); // Pastikan model navbar disesuaikan dengan penamaan tabel Anda

        return redirect()->route('navbarAdmin.index', 'profil.index');
    }

}
