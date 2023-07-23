<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class BeritaController extends Controller
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
        $beritas = Artikel::leftJoin('kategori_artikels', 'artikels.kategori_id', '=', 'kategori_artikels.id')
            ->where('artikels.is_publish', '=', '1')
            ->select('artikels.*', 'kategori_artikels.nama_kategori')
            ->orderby('artikels.id', 'desc')
            ->limit(3)
            ->get();
        // $galeris = Galeri::leftJoin('kategori_galeris', 'galeris.kategori_galeri_id', '=', 'kategori_galeris.id')
        //     ->where('galeris.is_publish', '=', '1')
        //     ->select('galeris.*', 'kategori_galeris.nama_kategori')
        //     ->orderby('galeris.id', 'desc')
        //     ->get();
        return view('berita', compact('beritas'));
    }
}
