<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Treatment;

class TreatmentController extends Controller
{
    public function admin() {
        $treatments = Treatment::all();
        return view('treatment/treatment_admin/AdmTreatment', compact('treatments'));
    }

    public function create() {
        return view('treatment/treatment_admin/TambahTreatment');
    }


    public function store(Request $request) {
        // Validasi data
        $request->validate([
            'foto_treatment' => 'image|mimes:jpeg,png,jpg',
            'slug_link' => 'unique:products,slug_link',
        ]);

        if ($request->hasFile('foto_treatment')) {
            $imagePath = $request->file('foto_treatment')->store('images');
            $imageUrl = asset('storage/' . $imagePath);
        } else {
            $imageUrl = null;
        }

        $slug = Str::slug($request->slug_link, '_');

        $treatments = new Treatment([
            'foto_treatment' => $imageUrl,
            'nama_treatment' => $request->input('nama_treatment'),
            'description_treatment' => $request->input('description_treatment'),
            'status_publish' => $request->input('status_publish'),
            'slug_link' => $slug,
        ]);

        $treatments->save();

        return redirect()->route('treatment_admin.admin')->with(['success' => 'Berhasil menambahkan treatment !']);
    }

}
