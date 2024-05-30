<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function indexTambah(): View
    {
        return view('productAdmin.tambah');
    }

    public function indexProduct(): View
    {
        $products = product::where('status_aktif', '=', 'aktif')->get();
        return view('product.index', compact('products'));
    }

    public function indexAdmin(): View
    {
        $products = product::where('status_aktif', '=', 'aktif')->get();
        return view('productAdmin.index', compact('products'));
    }

    public function indexHistori(): View
    {
        $products = product::where('status_aktif', '=', 'hapus')->get();
        return view('productAdmin.histori', compact('products'));
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'foto_product' => 'required|file|mimes:jpeg,png,jpg',
            'nama_product' => 'required',
            'description_product' => 'required',
            'harga_product' => 'required'
        ]);

        // Simpan file yang diunggah ke storage dengan nama yang unik
        $image = $request->file('foto_product');
        $imageName = $image->getClientOriginalName(); // Ambil nama file asli
        $image->move(public_path('img'), $imageName); // Simpan file di dalam direktori public/img

        $slug = Str::slug($request->nama_product, '-');

        product::create([
            'foto_product' => $imageName,
            'nama_product' => $request->nama_product,
            'description_product' => $request->description_product,
            'harga_product' => $request->harga_product,
            'slug_link' => $slug,
            'created_at' => NOW()
        ]);

        return redirect()->route('productAdmin.index')->with(
            ['success' => 'Data Berhasil Ditambah!']
        );
    }

    public function indexEdit(string $slug_link): View
    {
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        return view('productAdmin.edit', compact('products'));
    }

    public function edit(Request $request, string $slug_link)
    {
        $this->validate($request, [
            'foto_product' => 'required|file|mimes:jpeg,png,jpg',
            'nama_product' => 'required',
            'description_product' => 'required',
            'harga_product' => 'required'
        ]);

        // Simpan file yang diunggah ke storage dengan nama yang unik
        $image = $request->file('foto_product');
        $imageName = $image->getClientOriginalName(); // Ambil nama file asli
        $image->move(public_path('img'), $imageName); // Simpan file di dalam direktori public/img

        $slug = Str::slug($request->nama_product, '-');
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        $products->update([
            'foto_product' => $imageName,
            'nama_product' => $request->nama_product,
            'description_product' => $request->description_product,
            'harga_product' => $request->harga_product,
            'slug_link' => $slug,
            'updated_at' => NOW()
        ]);

        return redirect()->route('productAdmin.index')->with('success', 'Data Berhasil Diubah!');
    }

    public function indexSoftdelete(string $slug_link): View
    {
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        return view('productAdmin.softdelete', compact('products'));
    }

    public function softdelete(Request $request, string $slug_link)
    {
        // Simpan file yang diunggah ke storage dengan nama yang unik
        $image = $request->file('foto_product');
        $imageName = $image->getClientOriginalName(); // Ambil nama file asli
        $image->move(public_path('img'), $imageName); // Simpan file di dalam direktori public/img

        $slug = Str::slug($request->nama_product, '-');
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        $products->update([
            'nama_product' => $request->nama_product,
            'description_product' => $request->description_product,
            'harga_product' => $request->harga_product,
            'slug_link' => $slug,
        ]);

        return redirect()->route('productAdmin.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
