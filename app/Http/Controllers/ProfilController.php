<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\navbar;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProfilController extends Controller
{
    public function index(): View
    {
        $navbars = navbar::all();
        $user = Auth::user();
        return view('profil.index', compact('user', 'navbars'));
    }
    public function indexEdit($id): View
    {
        $navbars = Navbar::all();
        $user = User::findOrFail($id);
        return view('profil.edit', compact('user', 'navbars'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'username'     => 'required',
            'email'   => 'required',
            'no_telp'   => 'required',
        ]);

        //get post by ID
        $user = user::findOrFail($id);

        //update post without image
        $user->update([
            'username'     => $request->username,
            'email'   => $request->email,
            'no_telp'   => $request->no_telp,
        ]);

        //redirect to index
        return redirect()->route('profil.index');
    }
}
