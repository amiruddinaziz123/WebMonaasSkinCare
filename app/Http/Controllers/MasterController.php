<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;

class MasterController extends Controller
{
    public function indexAdd(): View
    {
        return view('customerAdmin.master');
    }

    public function indexCustomer(): View
    {
        $customers = User::where('status_aktif', '=', 'Aktif')->get();
        return view('customerAdmin.index', compact('customers'));
    }

    public function indexHistori(): View
    {
        $customers = User::where('status_aktif', '=', 'Hapus')->get();
        return view('customerAdmin.histori', compact('customers'));
    }

    public function indexEdit(string $slug_link): View
    {
        $customers = User::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.edit', compact('customers'));
    }

    public function indexSoftdelete(string $slug_link): View
    {
        $customers = User::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.softdelete', compact('customers'));
    }

    public function indexDelete(string $slug_link): View
    {
        $customers = User::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.delete', compact('customers'));
    }

    public function indexRestore(string $slug_link): View
    {
        $customers = User::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.restore', compact('customers'));
    }

    public function indexDetail(string $slug_link): View
    {
        $customers = User::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.detail', compact('customers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|min:8|unique:users,email',
            'password' => 'required|min:8',
            'username' => 'required|min:8',
            'no_telp' => 'required|min:12',
        ], [
            'email.required' => 'Email wajib diisi!!!',
            'password.required' => 'Password wajib diisi!!!',
            'username.required' => 'Username wajib diisi!!!',
            'no_telp.required' => 'No. Telepon wajib diisi!!!',
            'email.unique' => 'Email sudah terdaftar!!!',
            'password.min' => 'Password harus lebih dari 8 karakter!!!',
            'username.min' => 'Username harus lebih dari 8 karakter!!!',
            'no_telp.min' => 'No. Telepon harus lebih dari 12 karakter!!!',
        ]);

        $existingEmail = User::where('email', $request->email)->exists();
        if ($existingEmail) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email sudah terdaftar!!!']);
        }

        $slug = Str::slug($request->username, '-');

        User::create([
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'no_telp' => $request->no_telp,
            'status_aktif'      =>$request->status_aktif,
            'slug_link' => $slug,
            'created_at' => now(),
        ]);

        return redirect()->route('customerAdmin.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    public function update(Request $request, string $slug_link)
    {
        $this->validate($request, [
            'email' => 'required|min:8',
            'password' => 'required|min:8',
            'username' => 'required|min:8',
            'no_telp' => 'required|min:12',
        ], [
            'email.required' => 'Email wajib diisi!!!',
            'password.required' => 'Password wajib diisi!!!',
            'username.required' => 'Username wajib diisi!!!',
            'no_telp.required' => 'No. Telepon wajib diisi!!!',
            'password.min' => 'Password harus lebih dari 8 karakter!!!',
            'username.min' => 'Username harus lebih dari 8 karakter!!!',
            'no_telp.min' => 'No. Telepon harus lebih dari 12 karakter!!!',
        ]);

        $slug = Str::slug($request->username, '-');
        $customer = User::where('slug_link', $slug_link)->firstOrFail();
        $customer->update([
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'no_telp' => $request->no_telp,
            'status_aktif' => $request->status_aktif,
            'slug_link' => $slug,
            'updated_at' => now(),
        ]);

        return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Diubah!');
    }

    public function softdelete(request $request, string $slug_link)
    {
        $slug = Str::slug($request->username, '-');
        $customer = User::where('slug_link', $slug_link)->firstOrFail();
        $customer->update([
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'no_telp' => $request->no_telp,
            'status_aktif' => $request->status_aktif,
            'slug_link' => $slug,
            'deleted_at' => now(),
        ]);

        return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Dihapus!');
    }

    public function destroy($slug)
    {
        $account = User::where('slug_link', $slug)->first();

        if (!$account) {
            return redirect()->route('customerAdmin.index')->with(['error' => 'Data tidak ditemukan!']);
        }

        $account->delete();

        return redirect()->route('customerAdmin.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
