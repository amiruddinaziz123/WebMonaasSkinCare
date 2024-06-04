<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\about;
use App\Models\navbar;

use Illuminate\View\View;

class AboutusController extends Controller
{
    public function index(): View
    {
        $abouts = about::latest()->first();
        $navbars = navbar::all();
        return view('aboutus.index', compact('abouts', 'navbars'));
    }

    public function indexAdmin(): View
    {
        $abouts = about::latest()->first();
        return view('aboutusAdmin.index', compact('abouts'));
    }

    public function store(request $request)
    {
        $this->validate($request,[
        'image' =>'required|file|mimes:jpeg,png,jpg',
        'intro'  =>'required',
        'reason'  =>'required',
        'icon1'  =>'required|file|mimes:jpeg,png,jpg',
        'tittle_icon1'  =>'required',
        'isi_icon1'  =>'required',
        'icon2'  =>'required|file|mimes:jpeg,png,jpg',
        'tittle_icon2'  =>'required',
        'isi_icon2'  =>'required',
        'icon3'  =>'required|file|mimes:jpeg,png,jpg',
        'tittle_icon3'  =>'required',
        'isi_icon3'  =>'required',
    ]);

    // Simpan file yang diunggah ke storage dengan nama yang unik
    $image = $request->file('image');
    $icon1 = $request->file('icon1');
    $icon2 = $request->file('icon2');
    $icon3 = $request->file('icon3');
    $imageName = $image->getClientOriginalName(); // Ambil nama file asli
    $icon1Name = $icon1->getClientOriginalName(); // Ambil nama file asli
    $icon2Name = $icon2->getClientOriginalName(); // Ambil nama file asli
    $icon3Name = $icon3->getClientOriginalName(); // Ambil nama file asli
    $image->move(public_path('img'), $imageName); // Simpan file di dalam direktori public/img
    $icon1->move(public_path('img'), $icon1Name); // Simpan file di dalam direktori public/img
    $icon2->move(public_path('img'), $icon2Name); // Simpan file di dalam direktori public/img
    $icon3->move(public_path('img'), $icon3Name); // Simpan file di dalam direktori public/img

    about::create ([
        'image'             =>$imageName,
        'icon1'             =>$icon1Name,
        'icon2'             =>$icon2Name,
        'icon3'             =>$icon3Name,
        'intro'             =>$request->intro,
        'reason'            =>$request->reason,
        'tittle_icon1'      =>$request->tittle_icon1,
        'isi_icon1'         =>$request->isi_icon1,
        'tittle_icon2'      =>$request->tittle_icon2,
        'isi_icon2'         =>$request->isi_icon2,
        'tittle_icon3'      =>$request->tittle_icon3,
        'isi_icon3'         =>$request->isi_icon3,
        'created_at'        =>NOW()
    ]);

    return redirect()->route('aboutusAdmin.index')->with(
        ['success'=> 'Data Berhasil Ditambah!'] 
    ); 
    }
}
