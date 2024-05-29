<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

use Illuminate\View\View;

class ProductController extends Controller
{
    public function indexAdd(): View
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
}
