<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

use Illuminate\View\View;

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

    public function tambah(request $request)
    {
        $this->validate($request,[
        'foto_product' =>'required|file|mimes:jpeg,png,jpg',
        'nama_product'  =>'required',
        'description_product'  =>'required',
        'harga_product'  =>'required'
    ]);

    // Simpan file yang diunggah ke storage dengan nama yang unik
    $image = $request->file('foto_product');
    $imageName = $image->getClientOriginalName(); // Ambil nama file asli
    $image->move(public_path('img'), $imageName); // Simpan file di dalam direktori public/img

    product::create ([
        'foto_product'             =>$imageName,
        'nama_product'              =>$request->nama_product,
        'description_product'              =>$request->description_product,
        'harga_product'              =>$request->harga_product,
        'created_at'        =>NOW()
    ]);

    return redirect()->route('productAdmin.index')->with(
        ['success'=> 'Data Berhasil Ditambah!'] 
    ); 
    }
}
