<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $blogs = Blog::orderBy('created_at','desc')->get();

        return view('admin.blog.index', compact('blogs'));
    }


    public function create()
    {
        $blogs = Blog::all();
        $kategoris = Kategori::all();

        return view('admin.blog.create', compact('blogs', 'kategoris'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|unique:blogs,judul',
            'gambar_artikel' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'kategori_id' => 'required',
            'deskripsi' => 'required',
        ]);

        if (empty($request->file('gambar_artikel'))) {
            Blog::create([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'deskripsi' => $request->deskripsi,
                'kategori_id' => $request->kategori_id,
                'status' => $request->status == TRUE ? '1':'0',
                'user_id' => Auth::id(),
                'gambar_artikel' => $request->gambar_artikel,
            ]);

            toast('Data Gagal dibuat','error');

            return redirect()->route('blog.index');

        } else {

            Blog::create([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'deskripsi' => $request->deskripsi,
                'kategori_id' => $request->kategori_id,
                'status' => $request->status == TRUE ? '1':'0',
                'user_id' => Auth::id(),
                'gambar_artikel' => $request->file('gambar_artikel')->store('gambar-artikel'),
            ]);

            toast('Data Berhasil dibuat','success');

            return redirect()->route('blog.index');
        }

        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully');
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail( decrypt($id) );
        $kategoris = Kategori::all();

        return view('admin.blog.edit', compact('blog', 'kategoris'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|unique:blogs,judul,'.$id,
            'gambar_artikel' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'kategori_id' => 'required',
            'deskripsi' => 'required',
        ]);

        if (empty($request->file('gambar_artikel'))) {
            $blog = Blog::find($id);
            $blog->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'deskripsi' => $request->deskripsi,
                'kategori_id' => $request->kategori_id,
                'status' => $request->status,
                'user_id' => Auth::id(),
            ]);

            toast('Data Berhasil diupdate','success');

            return redirect()->route('blog.index');

        } else {
            $blog = Blog::find($id);
            Storage::delete($blog->gambar_artikel);
            $blog->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'deskripsi' => $request->deskripsi,
                'kategori_id' => $request->kategori_id,
                'status' => $request->status,
                'user_id' => Auth::id(),
                'gambar_artikel' => $request->file('gambar_artikel')->store('gambar-artikel'),
            ]);

            toast('Data Berhasil diupdate','success');

            return redirect()->route('blog.index');
        }
    }


    public function destroy($id)
    {
        $blog = Blog::find($id);
        Storage::delete($blog->gambar_artikel);
        $blog->delete();

        toast('Data Berhasil dihapus','success');

        return redirect()->route('blog.index');
    }


}
