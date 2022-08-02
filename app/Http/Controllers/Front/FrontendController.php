<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Kategori;
use App\Models\Pesan;
use App\Models\Profile;
use App\Models\ProfileGambar;
use App\Models\Slide;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $slides = Slide::where('status_slide', '1')->get();
        $profile_gambar = ProfileGambar::where('status', '1')->get();
        $profile = Profile::first();
        $teams = Team::all();
        $contact = Contact::first();
        $kategoris = Kategori::all();
        $blogs = Blog::latest()->where('status', 1 )->get();


        return view('homepage', compact(
            'slides',
            'profile',
            'profile_gambar',
            'teams',
            'contact',
            'kategoris',
            'blogs',
        ));
    }


    public function detail($slug)
    {
        if(Blog::where('slug', $slug)->exists())
        {
            $artikel = Blog::where('slug', $slug)->first();
            $kategoris = Kategori::all();

            return view('detail-blog', compact('artikel', 'kategoris'));

        } else {

            return redirect()->route('homepage');
        }
    }


    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'subjek' => 'required',
            'pesan' => 'required',
        ]);

        Pesan::create($request->all());

        toast('Pesan anda berhasil dikirimkan','success');

        return redirect()->route('homepage')->with('success', 'Data berhasil ditambah');
    }
}
