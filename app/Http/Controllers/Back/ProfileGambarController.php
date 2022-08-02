<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\ProfileGambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileGambarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $profile_gambar = ProfileGambar::all();
        return view('admin.profile-gambar.index', compact('profile_gambar'));
    }


    public function create()
    {
        return view('admin.profile-gambar.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'profile_gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if (empty($request->file('profile_gambar'))) {
            ProfileGambar::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status == TRUE ? '1':'0',
            ]);

            toast('Data Gagal dibuat','error');

            return redirect()->back()->with('error', 'Gambar Slide tidak boleh kosong');

        } else {

            ProfileGambar::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status == TRUE ? '1':'0',
                'profile_gambar' => $request->file('profile_gambar')->store('profil-gambar'),
            ]);
        }

        toast('Data Berhasil dibuat','success');

        return redirect()->route('profile-gambar.index')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit($id)
    {
        $profile_gambar = ProfileGambar::find(decrypt($id));
        return view('admin.profile-gambar.edit', compact('profile_gambar'));
    }


    public function update(Request $request, $id)
    {
        request()->validate([
            'profile_gambar' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if (empty($request->file('profile_gambar'))) {
            $profile_gambar = ProfileGambar::find($id);
            $profile_gambar->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status == TRUE ? '1':'0',
            ]);

            toast('Data Berhasil diupdate','success');

            return redirect()->route('profile-gambar.index')->with('error', 'Gambar Slide tidak boleh kosong');

        } else {
            $profile_gambar = ProfileGambar::find($id);
            Storage::delete($profile_gambar->profile_gambar);
            $profile_gambar->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status == TRUE ? '1':'0',
                'profile_gambar' => $request->file('profile_gambar')->store('profil-gambar'),
            ]);
        }

        toast('Data Berhasil diupdate','success');

        return redirect()->route('profile-gambar.index')->with('success', 'Data berhasil diubah');
    }


    public function destroy($id)
    {
        $profile_gambar = ProfileGambar::find($id);
        $profile_gambar->delete();

        toast('Data Berhasil dihapus','success');

        return redirect()->route('profile-gambar.index')->with('success', 'Data berhasil dihapus');
    }
}
