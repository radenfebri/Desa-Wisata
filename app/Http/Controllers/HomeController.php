<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Pesan;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artikels = Blog::where('status', 1)->latest()->paginate(5);
        $pesans = Pesan::latest()->get();
        $user = auth()->user();
        $teams = Team::all();

        return view('admin.dashboard', compact('artikels', 'pesans', 'user', 'teams'));
    }
}
