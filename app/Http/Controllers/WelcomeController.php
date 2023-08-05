<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\DataDiri;
use App\Model\Artikel;
use App\Model\Galeri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artikels = Artikel::leftJoin('kategori_artikels', 'artikels.kategori_id', '=', 'kategori_artikels.id')
            ->where('artikels.is_publish', '=', '1')
            ->select('artikels.*', 'kategori_artikels.nama_kategori')
            ->orderby('artikels.created_at', 'desc')
            ->limit(9)
            ->get();
        $galeris = Galeri::leftJoin('kategori_galeris', 'galeris.kategori_galeri_id', '=', 'kategori_galeris.id')
            ->where('galeris.is_publish', '=', '1')
            ->select('galeris.*', 'kategori_galeris.nama_kategori')
            ->orderby('galeris.created_at', 'desc')
            ->limit(9)
            ->get();
        return view('welcome', compact('artikels', 'galeris'));
    }

    public function detail($slug)
    {

        //$artikels = Artikel::find($slug);
        $artikels = Artikel::where('slug', $slug)->first();
        $artikellist = Artikel::leftJoin('kategori_artikels', 'artikels.kategori_id', '=', 'kategori_artikels.id')
            ->where('artikels.is_publish', '=', '1')
            ->select('artikels.*', 'kategori_artikels.nama_kategori')
            // ->orderby('artikels.created_at', 'desc')
            ->limit(6)
            ->get();
        return view('detailartikel', compact('artikels', 'artikellist'));
    }
}
