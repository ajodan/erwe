<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DataDiri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DataWilayahController extends Controller
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
        $data_rt1 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='1' and status_dasar='hidup'"))->first();
        $data_rt2 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='2' and status_dasar='hidup'"))->first();
        $data_rt3 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='3' and status_dasar='hidup'"))->first();
        $data_rt4 = collect(DB::SELECT("SELECT count(id) as jumlah from data_diris where rt='4' and status_dasar='hidup'"))->first();

        $label = ["RT 01", "RT 02", "RT 03", "RT 04"];

        for ($rt = 1; $rt < 5; $rt++) {
            $chartwarga     = collect(DB::SELECT("SELECT count(id) AS jumlah from data_diris where rt='$rt'"))->first();
            $jumlah_warga[] = $chartwarga->jumlah;
        }

        return view('datawilayah', compact('data_rt1', 'data_rt2', 'data_rt3', 'data_rt4', 'jumlah_warga', 'label'));
    }
}
