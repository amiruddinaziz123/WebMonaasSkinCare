<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\logsign;

use Illuminate\View\View;

class LogsignController extends Controller
{
    public function index(): View
    {
        $logsigns = logsign::latest()->first();
        return view('logsignAdmin.index', compact('logsigns'));
    }

    public function store(request $request)
    {
        $this->validate($request,[
        'image' =>'required',
        'text'  =>'required'
    ]);

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


    // public function index(): View
    // {
    //     // Mengambil data terakhir
    //     $logsigns = logsign::latest()->first();
    //     return view('logsignAdmin.index', compact('logsigns'));
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'image' => 'required', // Hanya menerima format JPEG, PNG, dan JPG
    //         'text' => 'required',
    //         'background_color' => 'required',
    //     ], [
    //         'image.required' => 'Gambar harus diunggah',
    //         'image.required' => 'File harus berupa gambar',
    //         'text.required' => 'Text harus diisi!',
    //     ]);

    //     // Simpan file yang diunggah ke storage dengan nama yang unik
    //     $image = $request->file('image');
    //     $imageName = $image->getClientOriginalName(); // Ambil nama file asli
    //     $image->storeAs('public/img', $imageName); // Simpan file dengan nama asli

    //     // Buat data untuk disimpan ke database
    //     $data = [
    //         'image' => $imageName, // Simpan nama file ke dalam basis data
    //         'text' => $validatedData['text'],
    //         'created_at' => NOW(),
    //     ];

    //     // Simpan data ke database
    //     logsign::create($data); // Pastikan model navbar disesuaikan dengan penamaan tabel Anda

    //     return redirect()->route('logsignAdmin.index');
    // }
    
    // public function edit(): View
    // {
    //     // Mengambil data terakhir
    //     $logsigns = Logsign::latest()->first();
    //     return view('logsignAdmin.edit', compact('logsigns'));
    // }

    // public function update(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    //         'text' => 'required',
    //     ]);

    //     // Mengambil data terakhir
    //     $logsign = logsign::latest()->first();

    //     // Simpan file gambar
    //     $imagePath = $request->file('image')->store('public/img');

    //     // Update data pada model
    //     $logsign->update([
    //         'image' => $imagePath,
    //         'text' => $request->text,
    //     ]);

    //     return redirect()->route('logsignAdmin.index');
    // }
}