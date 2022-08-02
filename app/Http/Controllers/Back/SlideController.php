<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $slides = Slide::all();
        return view('admin.slide.index', compact('slides'));
    }


    public function create()
    {
        return view('admin.slide.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'gambar_slide' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'judul_slide' => 'required',
            'deskripsi_slide' => 'required',
        ]);

        if (empty($request->file('gambar_slide'))) {
            Slide::create([
                'judul_slide' => $request->judul_slide,
                'deskripsi_slide' => $request->deskripsi_slide,
                'link_slide' => $request->link_slide,
                'status_slide' => $request->status_slide == TRUE ? '1':'0',
            ]);

            toast('Data Gagal dibuat','error');

            return redirect()->back()->with('error', 'Gambar Slide tidak boleh kosong');

        } else {

            Slide::create([
                'judul_slide' => $request->judul_slide,
                'deskripsi_slide' => $request->deskripsi_slide,
                'link_slide' => $request->link_slide,
                'status_slide' => $request->status_slide == TRUE ? '1':'0',
                'gambar_slide' => $request->file('gambar_slide')->store('gambar-slide'),
            ]);
        }

        toast('Data Berhasil dibuat','success');

        return redirect()->route('slide.index')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit($id)
    {
        $slide = Slide::findOrFail( decrypt($id) );

        return view('admin.slide.edit', compact('slide'));
    }


    public function update(Request $request, $id)
    {
        request()->validate([
            'gambar_slide' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'judul_slide' => 'required',
            'deskripsi_slide' => 'required',
            'link_slide' => 'required',
            'status_slide' => 'required',
        ]);

        if (empty($request->file('gambar_slide'))) {
            $slide = Slide::find($id);
            $slide->update([
                'judul_slide' => $request->judul_slide,
                'deskripsi_slide' => $request->deskripsi_slide,
                'link_slide' => $request->link_slide,
                'status_slide' => $request->status_slide,
            ]);

            toast('Data Berhasil diupdate','success');

            return redirect()->route('slide.index')->with('success', 'Data berhasil diubah');

        } else {

            $slide = Slide::find($id);
            Storage::delete($slide->gambar_slide);
            $slide->update([
                'judul_slide' => $request->judul_slide,
                'deskripsi_slide' => $request->deskripsi_slide,
                'link_slide' => $request->link_slide,
                'status_slide' => $request->status_slide,
                'gambar_slide' => $request->file('gambar_slide')->store('gambar-slide'),
            ]);
        }

        toast('Data Berhasil diupdate','success');

        return redirect()->route('slide.index')->with('success', 'Data berhasil diubah');
    }


    public function destroy($id)
    {
        $slide = Slide::find($id);

        Storage::delete($slide->image);
        $slide->delete();

        toast('Data Berhasil dihapus','success');

        return redirect()->route('slide.index');
    }
}

