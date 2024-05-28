<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

use Illuminate\View\View;

class ProductController extends Controller
{
    public function indexProduct(): View
    {
        $products = product::where('status_aktif', '=', 'aktif')->get();
        return view('product.index', compact('products'));
    }
}
