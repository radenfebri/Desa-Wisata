<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $profile = Profile::first();
        return view('admin.profile.index', compact('profile'));
    }


    public function update(Request $request)
    {
        request()->validate([
            'deskripsi_profil_1' => 'required',
            'deskripsi_profil_2' => 'required',
            'gambar_profil' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if (empty($request->file('gambar_profil'))) {
            Profile::where('id', 1)->update([
                'deskripsi_profil_1' => $request->deskripsi_profil_1,
                'deskripsi_profil_2' => $request->deskripsi_profil_2,
            ]);

            toast('Data Berhasil diupdate','success');

            return redirect()->back()->with('error', 'Gambar Profil tidak boleh kosong');

        } else {

            Profile::where('id', 1)->update([
                'deskripsi_profil_1' => $request->deskripsi_profil_1,
                'deskripsi_profil_2' => $request->deskripsi_profil_2,
                'gambar_profil' => $request->file('gambar_profil')->store('gambar-profil'),
            ]);
        }

        toast('Data Berhasil diupdate','success');

        return redirect()->route('profile.index')->with('success', 'Data berhasil diubah');
    }
}
