<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $kategoris = Kategori::all();

        return view('admin.kategori.index', compact('kategoris'));
    }


    public function create()
    {
        $kategoris = Kategori::all();

        return view('admin.kategori.create', compact('kategoris'));
    }


    public function store(Request $request)
    {
        request()->validate([
            'nama_kategori' => 'required',
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori)
        ]);

        toast('Data Berhasil dibuat','success');

        return redirect()->route('kategori.index')->with('success', 'Data berhasil ditambah');
    }


    public function edit($id)
    {
        $kategori = Kategori::find(decrypt($id));

        return view('admin.kategori.edit', compact('kategori'));
    }


    public function update(Request $request, $id)
    {
        request()->validate([
            'nama_kategori' => 'required',
        ]);


        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $categories = Kategori::findOrFail($id);
        $categories->update($data);

        toast('Data Berhasil diupdate','success');

        return redirect()->route('kategori.index')->with('success', 'Data berhasil diubah');
    }


    public function destroy($id)
    {
        Kategori::destroy($id);

        toast('Data Berhasil dihapus','success');

        return redirect()->route('kategori.index')->with('success', 'Data berhasil dihapus');
    }
}
