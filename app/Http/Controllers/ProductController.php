<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

use Illuminate\View\View;

use Illuminate\Support\Str;
use App\Models\navbar;


class ProductController extends Controller
{
    public function indexTambah(): View
    {
        return view('productAdmin.tambah');
    }

    public function indexProduct(): View
    {
        $products = product::where('status_aktif', '=', 'aktif')->get();
        $navbars = navbar::all();

        return view('product.index', compact('products', 'navbars'));
    }

    public function indexAdmin(): View
    {
        $products = product::where('status_aktif', '=', 'aktif')->get();
        $navbars = navbar::all();

        return view('productAdmin.index', compact('products', 'navbars'));
    }

    public function indexHistori(): View
    {
        $products = product::where('status_aktif', '=', 'aktif')->get();
        $navbars = navbar::all();

        return view('productAdmin.histori', compact('products', 'navbars'));
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

    $slug = Str::slug($request->nama_product, '-');

    product::create ([
        'foto_product'           =>$imageName,
        'nama_product'           =>$request->nama_product,
        'description_product'    =>$request->description_product,
        'harga_product'          =>$request->harga_product,
        'status_aktif'           =>$request->status_aktif,
        'slug_link'              => $slug,
        'created_at'             =>NOW()
    ]);
    

    return redirect()->route('productAdmin.index')->with(
        ['success'=> 'Data Berhasil Ditambah!'] 
    ); 
    }

    public function indexEdit(string $slug_link): View
    {
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        return view('productAdmin.edit', compact('products'));
    }

    public function edit(Request $request, string $slug_link)
    {$this->validate($request,[
        'foto_product' =>'required|file|mimes:jpeg,png,jpg',
        'nama_product'  =>'required',
        'description_product'  =>'required',
        'harga_product'  =>'required'
        ]);

         // Simpan file yang diunggah ke storage dengan nama yang unik
        $image = $request->file('foto_product');
        $imageName = $image->getClientOriginalName(); // Ambil nama file asli
        $image->move(public_path('img'), $imageName); // Simpan file di dalam direktori public/img

        $slug = Str::slug($request->nama_product, '-');
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        $products->update([
            'foto_product'           =>$imageName,
            'nama_product'           =>$request->nama_product,
            'description_product'    =>$request->description_product,
            'harga_product'          =>$request->harga_product,
            'slug_link'              => $slug,
            'updated_at'             =>NOW()
        ]);

        return redirect()->route('productAdmin.index')->with('success', 'Data Berhasil Diubah!');
    }

    public function indexSoftdelete(string $slug_link): View
    {
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        return view('productAdmin.softdelete', compact('products'));
    }

    public function softdelete(request $request, string $slug_link)
    { // Simpan file yang diunggah ke storage dengan nama yang unik
        $slug = Str::slug($request->nama_product, '-');
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        $products->update([
            'nama_product'           =>$request->nama_product,
            'description_product'    =>$request->description_product,
            'harga_product'          =>$request->harga_product,
            'status_aktif'           =>$request->status_aktif,
            'slug_link'              => $slug,
        ]);

        return redirect()->route('productAdmin.index')->with('success', 'Data Berhasil Dihapus!');
    }

    public function indexRestore(string $slug_link): View
    {
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        return view('productAdmin.restore', compact('products'));
    }

    public function indexDelete(string $slug_link): View
    {
        $products = product::where('slug_link', $slug_link)->firstOrFail();
        return view('productAdmin.delete', compact('products'));
    }

    public function destroy($slug)
    {
        $products = product::where('slug_link', $slug)->first();

        if (!$products) {
            return redirect()->route('productAdmin.histori')->with(['error' => 'Data tidak ditemukan!']);
        }

        $products->delete();

        return redirect()->route('productAdmin.histori')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
