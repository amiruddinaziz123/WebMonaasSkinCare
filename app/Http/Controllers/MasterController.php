<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\account;

use Illuminate\View\View;

use Illuminate\Support\Str;

class MasterController extends Controller
{
    public function indexAdd(): View
    {
        $masters = account::latest()->first();
        return view('customerAdmin.master', compact('masters'));
    }

    public function indexCustomer(): View
    {
        $customers = account::all();
        return view('customerAdmin.index', compact('customers'));
    }

    public function indexEdit(string $slug_link): View
    {
        $customers = account::where('slug_link','=', $slug_link)->firstorfail();
        return view('customerAdmin.edit', compact('customers'));
    }

    public function indexDetail(string $slug_link): View
    {
        $customers = account::where('slug_link','=', $slug_link)->firstorfail();
        return view('customerAdmin.detail', compact('customers'));
    }

    public function store(request $request)
    {
        $this->validate($request,[
        'email_user' =>'required|min:8|unique:accounts',
        'password_user'  =>'required',
        'username_user'  =>'required',
        'no_telp_user'  =>'required',
    ]);

    $slug = str::slug($request->username_user, '-');

    account::create ([
        'email_user'             =>$request->email_user,
        'password_user'          =>$request->password_user,
        'username_user'          =>$request->username_user,
        'no_telp_user'           =>$request->no_telp_user,
        'slug_link'              =>$slug,
        'created_at'             =>NOW()
    ]);

    return redirect()->route('customerAdmin.index')->with(
        ['success'=> 'Data Berhasil Ditambah!'] 
    ); 
    }

    public function update(Request $request, string $slug_link)
{
    $customers = account::where('slug_link', $slug_link)->firstOrFail();

    $this->validate($request, [
        'email_user' => 'required|min:8|unique:accounts,email_user,' . $customers->id,
        'password_user' => 'required',
        'username_user' => 'required',
        'no_telp_user' => 'required',
    ]);

    $slug = Str::slug($request->username_user, '-');

    $customers->update([    
        'email_user' => $request->email_user,
        'password_user' => $request->password_user,
        'username_user' => $request->username_user,
        'no_telp_user' => $request->no_telp_user,
        'slug_link' => $slug,
        'updated_at' => now()
    ]);

    return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Diubah!');
}


    public function destroy($slug)
    {
    // Mencari akun berdasarkan slug
    $account = account::where('slug_link', $slug)->first();

    // Jika akun tidak ditemukan, tampilkan pesan error
    if (!$account) {
        return redirect()->route('customerAdmin.index')->with(
            ['error' => 'Data tidak ditemukan!']
        );
    }

    // Menghapus akun
    $account->delete();

    // Mengarahkan kembali ke halaman index dengan pesan sukses
    return redirect()->route('customerAdmin.index')->with(
        ['success' => 'Data Berhasil Dihapus!']
    );
    }

}