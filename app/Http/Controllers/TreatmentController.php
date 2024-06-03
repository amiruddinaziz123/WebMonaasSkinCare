<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Treatment;
use App\Models\navbar;
use Illuminate\Http\RedirectResponse;

class TreatmentController extends Controller
{
    public function index() {
        $treatments = Treatment::all();
        $navbars = navbar::all();
        return view('treatment/index', compact('treatments', 'navbars'));
    }
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
            'harga_treatment' => 'numeric',
            'slug_link' => 'unique:products,slug_link',
        ]);

        $imageName = time().'.'.$request->foto_treatment->extension();
        $request->foto_treatment->move(public_path('storage/images/'), $imageName);


        $slug = Str::slug($request->nama_treatment, '_');

        $treatments = new Treatment([
            'foto_treatment' => $imageName,
            'nama_treatment' => $request->input('nama_treatment'),
            'description_treatment' => $request->input('description_treatment'),
            'harga_treatment' => $request->harga_treatment,
            // 'status_publish' => $request->input('status_publish'),
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
                'harga_treatment' => 'numeric',
                'slug_link' => 'unique:products,slug_link',
        ]);


            $imageName = time().'.'.$request->foto_treatment->extension();
            $request->foto_treatment->move(public_path('storage/images/'), $imageName);

        $slug = Str::slug($request->nama_treatment, '_');

        $treatments = Treatment::where('slug_link', $slug_link)->firstorfail();
        $treatments->update([
            'foto_treatment' => $imageName,
            'nama_treatment' => $request->input('nama_treatment'),
            'description_treatment' => $request->input('description_treatment'),
            'harga_treatment' => $request->harga_treatment,
            // 'status_publish' => $request->input('status_publish'),
            'slug_link' => $slug,
        ]);

        return redirect()->route('treatment_admin.admin')->with(['success' => 'Berhasil mengedit treatment !'])->with('image',$imageName);
    }


    //SOFTDELETE
    public function hapus(string $slug_link) {
        $treatments = Treatment::where('slug_link', '=', $slug_link)->withTrashed()->firstOrFail();
        return view('treatment/treatment_admin/HapusTreatment', compact('treatments'));
     }

        public function softdelete(Request $request, $slug_link) {
            $treatments = Treatment::where('slug_link', $slug_link)->withTrashed()->firstOrFail();
            $treatments->delete();

        return redirect()->route('treatment_admin.admin')->with(['success' => 'Berhasil menghapus treatment !']);
     }

        public function restore(Request $request, $slug_link) {
            // Temukan produk yang telah dihapus
            $treatments = Treatment::onlyTrashed()->where('slug_link', $slug_link)->firstOrFail();
            // Memulihkan produk
            $treatments->restore();

            // Redirect ke halaman history dengan pesan sukses
            return redirect()->route('treatment_admin.admin')->with(['success' => 'Berhasil memulihkan treatment !']);
      }



     //HAPUS PERMANENT
        public function history() {
            $treatments = Treatment::onlyTrashed()->get();
            return view('treatment/treatment_admin/HistoryTreatment', compact('treatments'));
     }

        public function deletePermanent($id) : RedirectResponse {
            $treatments = Treatment::withTrashed()->findOrFail($id);
            $treatments->forceDelete();

            return redirect()->route('treatment_admin.history')->with(['success' => 'Berhasil menghapus treatment secara permanen!']);
    }

    // SEARCH
    public function search(Request $request) {
        $query = $request->input('query');
        $navbars = navbar::all();
        $treatments = Treatment::where('nama_treatment', 'LIKE', "%{$query}%")
                     ->orWhere('description_treatment', 'LIKE', "%{$query}%")
                     ->get();

        return view('treatment/index', compact('treatments','navbars'));
    }

}
