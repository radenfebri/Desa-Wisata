<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\DeskripsiTeam;
use Illuminate\Http\Request;

class DeskripsiTeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $deskripsi_team = DeskripsiTeam::first();
        return view('admin.team.deskripsi.index', compact('deskripsi_team'));
    }


    public function update(Request $request)
    {
        request()->validate([
            'deskripsi' => 'required',
        ]);


        DeskripsiTeam::where('id', 1)->update([
            'deskripsi' => $request->deskripsi,
        ]);

        toast('Data Berhasil diupdate','success');

        return redirect()->route('deskripsi-team.index')->with('success', 'Data berhasil diubah');
    }
}
