<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
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
        // $customers = Account::where('status_aktif', '=', 'Aktif')->get();
        $customers = Account::all();
        return view('customerAdmin.index', compact('customers'));
    }

    public function indexHistori(): View
    {
        $customers = Account::where('status_aktif', '=', 'Hapus')->get();
        return view('customerAdmin.histori', compact('customers'));
    }

    public function indexEdit(string $slug_link): View
    {
        $customers = Account::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.edit', compact('customers'));
    }

    public function indexSoftdelete(string $slug_link): View
    {
        $customers = Account::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.softdelete', compact('customers'));
    }

    public function indexDelete(string $slug_link): View
    {
        $customers = Account::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.delete', compact('customers'));
    }

    public function indexRestore(string $slug_link): View
    {
        $customers = Account::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.restore', compact('customers'));
    }

    public function indexDetail(string $slug_link): View
    {
        $customers = Account::where('slug_link', $slug_link)->firstOrFail();
        return view('customerAdmin.detail', compact('customers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email_user' => 'required|min:8|unique:accounts,email_user',
            'password_user' => 'required|min:8',
            'username_user' => 'required|min:8',
            'no_telp_user' => 'required|min:12',
        ], [
            'email_user.required' => 'Email wajib diisi!!!',
            'password_user.required' => 'Password wajib diisi!!!',
            'username_user.required' => 'Username wajib diisi!!!',
            'no_telp_user.required' => 'No. Telepon wajib diisi!!!',
            'email_user.unique' => 'Email sudah terdaftar!!!',
            'password_user.min' => 'Password harus lebih dari 8 karakter!!!',
            'username_user.min' => 'Username harus lebih dari 8 karakter!!!',
            'no_telp_user.min' => 'No. Telepon harus lebih dari 12 karakter!!!',
        ]);

        $existingEmail = Account::where('email_user', $request->email_user)->exists();
        if ($existingEmail) {
            return redirect()->back()->withInput()->withErrors(['email_user' => 'Email sudah terdaftar!!!']);
        }

        $slug = Str::slug($request->username_user, '-');

        Account::create([
            'email_user' => $request->email_user,
            'password_user' => $request->password_user,
            'username_user' => $request->username_user,
            'no_telp_user' => $request->no_telp_user,
            'status_aktif'      =>$request->status_aktif,
            'slug_link' => $slug,
            'created_at' => now(),
        ]);

        return redirect()->route('customerAdmin.index')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    public function update(Request $request, string $slug_link)
    {
        $this->validate($request, [
            'email_user' => 'required|min:8',
            'password_user' => 'required|min:8',
            'username_user' => 'required|min:8',
            'no_telp_user' => 'required|min:12',
        ], [
            'email_user.required' => 'Email wajib diisi!!!',
            'password_user.required' => 'Password wajib diisi!!!',
            'username_user.required' => 'Username wajib diisi!!!',
            'no_telp_user.required' => 'No. Telepon wajib diisi!!!',
            'password_user.min' => 'Password harus lebih dari 8 karakter!!!',
            'username_user.min' => 'Username harus lebih dari 8 karakter!!!',
            'no_telp_user.min' => 'No. Telepon harus lebih dari 12 karakter!!!',
        ]);

        $slug = Str::slug($request->username_user, '-');
        $customer = Account::where('slug_link', $slug_link)->firstOrFail();
        $customer->update([
            'email_user' => $request->email_user,
            'password_user' => $request->password_user,
            'username_user' => $request->username_user,
            'no_telp_user' => $request->no_telp_user,
            'status_aktif' => $request->status_aktif,
            'slug_link' => $slug,
            'updated_at' => now(),
        ]);

        return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Diubah!');
    }

    public function softdelete(request $request, string $slug_link)
    {
        $slug = Str::slug($request->username_user, '-');
        $customer = Account::where('slug_link', $slug_link)->firstOrFail();
        $customer->update([
            'email_user' => $request->email_user,
            'password_user' => $request->password_user,
            'username_user' => $request->username_user,
            'no_telp_user' => $request->no_telp_user,
            'status_aktif' => $request->status_aktif,
            'slug_link' => $slug,
            'deleted_at' => now(),
        ]);

        return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Dihapus!');
    }

    public function destroy($slug)
    {
        $account = Account::where('slug_link', $slug)->first();

        if (!$account) {
            return redirect()->route('customerAdmin.index')->with(['error' => 'Data tidak ditemukan!']);
        }

        $account->delete();

        return redirect()->route('customerAdmin.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
