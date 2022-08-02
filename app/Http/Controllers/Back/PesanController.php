<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $pesans = Pesan::latest()->get();
        return view('admin.pesan.index', compact('pesans'));
    }


    public function edit($id)
    {
        $pesan = Pesan::findOrFail(decrypt($id));

        return view('admin.pesan.edit', compact('pesan'));
    }


    public function destroy($id)
    {
        Pesan::destroy($id);

        toast('Data Berhasil dihapus','success');

        return redirect()->route('pesan.index')->with('success', 'Data berhasil dihapus');
    }
}
