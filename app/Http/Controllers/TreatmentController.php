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

        $imageName = time().'.'.$request->foto_treatment->extension();
        $request->foto_treatment->move(public_path('storage/images/'), $imageName);


        $slug = Str::slug($request->nama_treatment, '_');

        $treatments = new Treatment([
            'foto_treatment' => $imageName,
            'nama_treatment' => $request->input('nama_treatment'),
            'description_treatment' => $request->input('description_treatment'),
            'status_publish' => $request->input('status_publish'),
            'slug_link' => $slug,
        ]);

        $treatments->save();

        return redirect()->route('treatment_admin.admin')->with(['success' => 'Berhasil menambahkan treatment !'])->with('image',$imageName);
    }


    public function edit(string $slug_link) {

        $treatments = Treatment::where('slug_link', '=', $slug_link)->firstorfail();
        return view('treatment/treatment_admin/EditTreatment', compact('treatments'));
       }


        public function update(Request $request, string $slug_link) {

        // validate form
        $request->validate( [
                'foto_treatment' => 'image|mimes:jpeg,png,jpg',
                'slug_link' => 'unique:products,slug_link',
        ]);


//   IMG JANGAN LUPA YHHH
            $imageName = time().'.'.$request->foto_treatment->extension();
            $request->foto_treatment->move(public_path('storage/images/'), $imageName);

        $slug = Str::slug($request->nama_treatment, '_');

        $treatments = Treatment::where('slug_link', $slug_link)->firstorfail();
        $treatments->update([
            'foto_treatment' => $imageName,
            'nama_treatment' => $request->input('nama_treatment'),
            'description_treatment' => $request->input('description_treatment'),
            'status_publish' => $request->input('status_publish'),
            'slug_link' => $slug,
        ]);

        return redirect()->route('treatment_admin.admin')->with(['success' => 'Berhasil mengedit produk !'])->with('image',$imageName);
    }

}
