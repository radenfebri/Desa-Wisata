<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }


    public function create()
    {
        return view('admin.team.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_team' => 'required',
            'foto_team' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'jabatan_team' => 'required',
        ]);

        if (empty($request->file('foto_team'))) {
            Team::create([
                'nama_team' => $request->nama_team,
                'jabatan_team' => $request->jabatan_team,
                'facebook_team' => $request->facebook_team,
                'instagram_team' => $request->instagram_team,
            ]);

            toast('Data Gagal dibuat','error');

            return redirect()->route('team.index')->with('error', 'Gambar Slide tidak boleh kosong');

        } else {

            Team::create([
                'nama_team' => $request->nama_team,
                'jabatan_team' => $request->jabatan_team,
                'facebook_team' => $request->facebook_team,
                'instagram_team' => $request->instagram_team,
                'foto_team' => $request->file('foto_team')->store('foto-team'),
            ]);
        }

        toast('Data Berhasil dibuat','success');

        return redirect()->route('team.index')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit($id)
    {
        $team = Team::findOrFail(decrypt($id));
        return view('admin.team.edit', compact('team'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_team' => 'required',
            'foto_team' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'jabatan_team' => 'required',
            'facebook_team' => 'required',
            'instagram_team' => 'required',
        ]);

        if (empty($request->file('foto_team'))) {
            Team::findOrFail($id)->update([
                'nama_team' => $request->nama_team,
                'jabatan_team' => $request->jabatan_team,
                'facebook_team' => $request->facebook_team,
                'instagram_team' => $request->instagram_team,
            ]);

            toast('Data Berhasil diupdate','success');

            return redirect()->route('team.index')->with('error', 'Gambar Slide tidak boleh kosong');

        } else {

            $team = Team::findOrFail($id);
            Storage::delete($team->foto_team);
            Team::findOrFail($id)->update([
                'nama_team' => $request->nama_team,
                'jabatan_team' => $request->jabatan_team,
                'facebook_team' => $request->facebook_team,
                'instagram_team' => $request->instagram_team,
                'foto_team' => $request->file('foto_team')->store('foto-team'),
            ]);
        }

        toast('Data Berhasil diupdate','success');

        return redirect()->route('team.index')->with('success', 'Data berhasil diubah');
    }


    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        Storage::delete($team->foto_team);
        $team->delete();

        toast('Data Berhasil dihapus','success');

        return redirect()->route('team.index')->with('success', 'Data berhasil dihapus');
    }

}
