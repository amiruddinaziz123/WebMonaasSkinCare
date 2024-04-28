<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\logsign;

use Illuminate\View\View;

class LogsignController extends Controller
{
    public function index(): View
    {
        // Mengambil data terakhir
        $logsigns = Logsign::latest()->first();
        return view('logsignAdmin.index', compact('logsigns'));
    }
    
    public function edit(): View
    {
        // Mengambil data terakhir
        $logsigns = Logsign::latest()->first();
        return view('logsignAdmin.edit', compact('logsigns'));
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'text' => 'required',
        ]);

        // Mengambil data terakhir
        $logsign = Logsign::latest()->first();

        // Simpan file gambar
        $imagePath = $request->file('image')->store('public/img');

        // Update data pada model
        $logsign->update([
            'image' => $imagePath,
            'text' => $request->text,
        ]);

        return redirect()->route('logsign.index')->with('success', 'Data logsign berhasil diperbarui.');
    }
}