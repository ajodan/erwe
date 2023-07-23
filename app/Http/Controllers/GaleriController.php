<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Galeri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class GaleriController extends Controller
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
        $galeris = Galeri::leftJoin('kategori_galeris', 'galeris.kategori_galeri_id', '=', 'kategori_galeris.id')
            ->where('galeris.is_publish', '=', '1')
            ->select('galeris.*', 'kategori_galeris.nama_kategori')
            ->orderby('galeris.id', 'desc')
            ->get();
        return view('galeri', compact('galeris'));
    }
}
